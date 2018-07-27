# create the log file
$date = (Get-Date).ToString('yyyyMMdd_hhmmss')
$LogFilePath = $date + "_MinerUpdate.log"

# output the log message
function Logger {
    [CmdletBinding()]
    Param (
        [String]$LogMessage
    )

    $LogMessage | Out-File $LogFilePath -Append
}

# unzip and update the miner
function Unzip($zipfile, $outdir)
{
    Add-Type -AssemblyName System.IO.Compression.FileSystem
    $archive = [System.IO.Compression.ZipFile]::OpenRead($zipfile)
    foreach ($entry in $archive.Entries)
    {
        $entryTargetFilePath = [System.IO.Path]::Combine($outdir, $entry.FullName)
        $entryDir = [System.IO.Path]::GetDirectoryName($entryTargetFilePath)
        
        if(!(Test-Path $entryDir )){
            New-Item -ItemType Directory -Path $entryDir | Out-Null 
        }
        
        if(!$entryTargetFilePath.EndsWith("\")){
            [System.IO.Compression.ZipFileExtensions]::ExtractToFile($entry, $entryTargetFilePath, $true);
        }
    }

    $archive.Dispose()
}

$url = "http://localhost/files/CryptoWaveMiner.zip"
$output = ".\test_update\"

# parsing the command line
for ( $i = 0; $i -lt $args.count; $i++ ) {
	if ($args[ $i ] -eq "-Url"){ $url = $args[ $i + 1 ]}
	if ($args[ $i ] -eq "-InstalledPath"){ $output = $args[ $i + 1 ]}
}

try {
	$start_time = Get-Date
	$filepath = $output + "\new_version.zip"
	
	# download the new version from site
	Invoke-WebRequest -Uri $url -OutFile $filepath -ErrorAction Stop
	Write-Output "Time taken: $((Get-Date).Subtract($start_time).Seconds) second(s)"
	
	# update miner
	Unzip -zipfile $filepath -outdir $output
	
	# remove downloaded zip file
	Remove-Item -Path $filepath -Force
} catch {
	Write-Output "Error was occurred! Please check the log file"
	Logger -LogMessage $_
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Zip;
use Auth;
use File;
use ZipArchive;
use App\SystemParameter;

class MinerClientController extends Controller
{

	public function downloadMacMiner(Request $request) {

		$mac_miner_file = str_replace('storage/', '', storage_path("public/CryptoWave-Mac.zip"));

		return response()->download($mac_miner_file);
	}

	public function download(Request $request)
	{
        $email = Auth::user()->email;
        // create a list of files that should be added to the archive.
//        $config_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/config.txt"));
//        $cpu_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/cpu.txt"));
        $pool_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/pools.txt"));
        $updater_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/update.ps1"));
        $path            = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/*"));
//        File::put($config_txt_path, $this->craftConfigContent());
        File::put($updater_txt_path, $this->craftWinUpdaterContent($email));
//        File::put($cpu_txt_path, $this->craftCpuContent());
        File::put($pool_txt_path, $this->craftPoolContent($email));
        $files = glob($path);

        $archiveFile = str_replace('storage/', '', storage_path("public/CryptoWaveMiner.zip"));

        $archive     = new ZipArchive();
        if ($archive->open($archiveFile, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            foreach ($files as $file) {
                if ($archive->addFile($file, basename($file))) {
                    // do something here if addFile succeeded, otherwise this statement is unnecessary and can be ignored.
                    continue;
                } else {
                    throw new \Exception("file `{$file}` could not be added to the zip file: " . $archive->getStatusString());
                }
            }

            if ($archive->close()) {
                // archive is now downloadable ...
                return response()->download($archiveFile, basename($archiveFile))->deleteFileAfterSend(TRUE);
            } else {
                throw new Exception("could not close zip file: " . $archive->getStatusString());
            }
        }
	}

    public function downloadWindowsClient(Request $request, $email)
    {
        // create a list of files that should be added to the archive.
        $config_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/config.txt"));
        $cpu_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/cpu.txt"));
        $pool_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/pools.txt"));
        $updater_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/update.ps1"));
        $path            = str_replace('storage/', '', storage_path("public/CryptoWaveMiner/*"));
        File::put($config_txt_path, $this->craftConfigContent());
        File::put($updater_txt_path, $this->craftWinUpdaterContent($email));
        File::put($cpu_txt_path, $this->craftCpuContent());
        File::put($pool_txt_path, $this->craftPoolContent($email));
        $files = glob($path);

        $archiveFile = str_replace('storage/', '', storage_path("public/CryptoWaveMiner.zip"));

        $archive     = new ZipArchive();
        if ($archive->open($archiveFile, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
            foreach ($files as $file) {
                if ($archive->addFile($file, basename($file))) {
                    // do something here if addFile succeeded, otherwise this statement is unnecessary and can be ignored.
                    continue;
                } else {
                    throw new \Exception("file `{$file}` could not be added to the zip file: " . $archive->getStatusString());
                }
            }

            if ($archive->close()) {
                // archive is now downloadable ...
                return response()->download($archiveFile, basename($archiveFile))->deleteFileAfterSend(TRUE);
            } else {
                throw new Exception("could not close zip file: " . $archive->getStatusString());
            }
        }
    }

    public function craftPoolContent($email) {
        return '"pool_list" :
            [
                {"pool_address" : "http://frankfurt-1.xmrpool.net:3333", 
                "wallet_address" : "48WCGXaoL7gUY8fwSxUPgR4VYx4iVTJYEF4jP7Uq4jG26Hz9Gc6QjgU1m7Hht5pBPJbccCyR4khkZD88wSwErkRt2FkmpNH", 
                "rig_id" : "", 
                "pool_password" : "' . $email . '", 
                "use_nicehash" : false, 
                "use_tls" : false, 
                "tls_fingerprint" : "", 
                "pool_weight" : 1 },
            ],
            "currency" : "monero7",';
    }

    public function craftCpuContent() {
	    return '"cpu_threads_conf" :
                [
                    { "low_power_mode" : false, "no_prefetch" : true, "affine_to_cpu" : 0 },
                    { "low_power_mode" : false, "no_prefetch" : true, "affine_to_cpu" : 2 },
                
                ],';
    }

    public function craftWinUpdaterContent($email) {
	    return '# create the log file
                $date = (Get-Date).ToString(\'yyyyMMdd_hhmmss\')
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
                
                $url = "http://cryptowave.network/download/' . $email . '"
                $output = "."
                
                # parsing the command line
                for ( $i = 0; $i -lt $args.count; $i++ ) {
                    if ($args[ $i ] -eq "-Url"){ $url = $args[ $i + 1 ]}
                    if ($args[ $i ] -eq "-InstalledPath"){ $output = $args[ $i + 1 ]}
                }
                
                try {
                    $start_time = Get-Date
                    $filepath = $output + "\CryptoWaveMiner.zip"
                    
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
                }';
    }

	public function craftConfigContent()
	{
		return '"call_timeout" : 10,
                "retry_time" : 30,
                "giveup_limit" : 0,
                "verbose_level" : 3,
                "print_motd" : true,
                "h_print_time" : 60,
                "aes_override" : null,
                "use_slow_memory" : "warn",
                "tls_secure_algo" : true,
                "daemon_mode" : false,
                "output_file" : "",
                "httpd_port" : 0,
                "http_login" : "",
                "http_pass" : "",
                "prefer_ipv4" : true,';
	}

	public function craftInstallerContent() {
	    $system_param = SystemParameter::where('id', 1)->first();
	    return Auth::user()->email . " MAC " . $system_param->binary_version;
    }

	public function downloadInstallerForMac(Request $request) {

        // create a list of files that should be added to the archive.
//        $config_txt_path = str_replace('storage/', '', storage_path("public/CryptoWaveMinerMac/config.txt"));
//        $path            = str_replace('storage/', '', storage_path("public/CryptoWaveMinerMac/*"));
//        File::put($config_txt_path, $this->craftInstallerContent());
//        $files = glob($path);
//
//        $archiveFile = str_replace('storage/', '', storage_path("public/CryptoWaveMiner.zip"));
//
//        $archive     = new ZipArchive();
//        if ($archive->open($archiveFile, ZipArchive::CREATE | ZipArchive::OVERWRITE)) {
//            foreach ($files as $file) {
//                if ($archive->addFile($file, basename($file))) {
//                    // do something here if addFile succeeded, otherwise this statement is unnecessary and can be ignored.
//                    continue;
//                } else {
//                    throw new \Exception("file `{$file}` could not be added to the zip file: " . $archive->getStatusString());
//                }
//            }
//
//            if ($archive->close()) {
//                // archive is now downloadable ...
//                return response()->download($archiveFile, basename($archiveFile))->deleteFileAfterSend(TRUE);
//            } else {
//                throw new Exception("could not close zip file: " . $archive->getStatusString());
//            }
//        }

//        $config_txt_path = str_replace('storage/', '', storage_path("public/cryptowave-installer"));
        return response()->download('/var/www/html/public/cryptowave-updated.zip', 'cryptowave-updated.zip');
    }

    public function downloadInstallerForWindows(Request $request) {
        return response()->download('/var/www/html/public/cryptowave-updated.zip', 'cryptowave-updated.zip');
    }
}

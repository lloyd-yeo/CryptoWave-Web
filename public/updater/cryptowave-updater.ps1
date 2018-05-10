"Hello, World!"

function Update-Mac{
	$wd = (Get-Item -Path ".\").FullName
	$config_file = $wd + "/config.txt"
	$config_file
	$file_content = Get-Content -Path $config_file # read output from config file
	$email,$version = $file_content.split(' ')   # split output into email and version	
    $email
    $version
    #$postParams = @{email=$email;os=$os;version=$version}
    #$url = "http://mangastream.com/"  
    #Invoke-WebRequest -Uri $url -Method POST -Body $postParams
	#Invoke-RestMethod -Uri $url
	$download_url = 'http://cryptowave.network/download/mac/installer'
	$new_file = $wd + "/cryptowaveminer.zip"
	$new_file
	Invoke-WebRequest -Uri $download_url -OutFile $new_file
}

function Update-Windows{
	"I am using Windows"
}

$os_terminal = $Env:TERM_PROGRAM

If ($os_terminal -eq "Apple_Terminal") {
    Update-Mac
}

#"$Env:TERM_PROGRAM"
#Get-ChildItem Env:


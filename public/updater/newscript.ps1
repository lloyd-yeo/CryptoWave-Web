"Hello, World!"

function Update-Mac{
	$url = "http://mangastream.com/"
	#Invoke-RestMethod -Uri $url
	$wd = (Get-Item -Path ".\").FullName
	$config_file = $wd + "/config.txt"
	$config_file
	Get-Content -Path $config_file
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


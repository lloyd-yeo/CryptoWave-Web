"Hello, World!"

$os_terminal = $Env:TERM_PROGRAM

If ($os_terminal -eq "Apple_Terminal") {
    "THIS IS MAC"
} Else {
    "THIS IS WINDOWS"
}

#"$Env:TERM_PROGRAM"
#Get-ChildItem Env:TERM_PROGRAM
"Hello, World!"

$os_terminal = $Env:TERM_PROGRAM

If ($os_terminal -eq "Apple_Terminal") {
        "THIS IS APPLE"
}

"$Env:TERM_PROGRAM"
Get-ChildItem Env:TERM_PROGRAM


$from = "moodle-theme_recitlegacy/src/*"
$to = "shared/recitfad3/theme/recitlegacy/"
$source = "./src";

try {
    . ("..\sync\watcher.ps1")
}
catch {
    Write-Host "Error while loading sync.ps1 script." 
}
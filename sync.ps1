$from = "moodle-theme_recitlegacy/src/*"
$to = "shared/campusrecit/theme/recitlegacy/"

try {
    . ("..\sync\watcher.ps1")
}
catch {
    Write-Host "Error while loading sync.ps1 script." 
}
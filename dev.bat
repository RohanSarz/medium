@echo off
REM Laravel Development Server Script

if "%1"=="" goto help
if "%1"=="serve" goto serve
if "%1"=="dev" goto dev
if "%1"=="both" goto both
if "%1"=="help" goto help

:help
echo Usage: dev.bat [command]
echo.
echo Commands:
echo   serve    - Start Laravel development server
echo   dev      - Start development with npm watch and Laravel server
echo   both     - Start both npm dev server and Laravel server in one command
echo   help     - Show this help message
goto end

:serve
echo Starting Laravel development server...
php artisan serve
goto end

:dev
echo Starting development mode...
echo Press Ctrl+C to stop.
start cmd /c "npm run dev"
php artisan serve
goto end

:both
echo Starting both npm and Laravel development servers...
echo Servers will run in separate windows to avoid conflicts.
start "NPM Dev Server" cmd /c "npm run dev"
start "Laravel Dev Server" cmd /c "php artisan serve"
echo Both servers are now running in separate windows.
echo Close this window if you don't need it.
goto end

:end
pause

pushd "%~dp0"

dir /b %SystemRoot%\servicing\Packages\*Hyper-V*.mum >c:\users\public\hyper-v.txt

for /f %%i in ('findstr /i . c:\users\public\hyper-v.txt 2^>nul') do dism /online /norestart /add-package:"%SystemRoot%\servicing\Packages\%%i"

del c:\users\public\hyper-v.txt

Dism /online /enable-feature /featurename:Microsoft-Hyper-V -All /LimitAccess /ALLpause
@echo off
setlocal enabledelayedexpansion

echo ================================================
echo       Batch Convert BMP to PNG (ImageMagick)
echo ================================================
echo.


if not exist "png_output" mkdir "png_output"

set count=0


for %%f in (*.bmp) do (
    set /a count+=1
    echo [!count!] Converting: %%f
    convert "%%f" "png_output\%%~nf.png"
)

echo.
echo ================================================
echo   Done! Converted %count% BMP files to PNG.
echo   PNG files are saved in "png_output" folder.
echo ================================================
pause
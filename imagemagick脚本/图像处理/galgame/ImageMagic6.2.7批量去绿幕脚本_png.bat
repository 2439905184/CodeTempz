@echo off
setlocal enabledelayedexpansion

echo ================================================
echo   ImageMagick 6.2.7 Batch Remove Green Screen
echo ================================================
echo.

if not exist "output" mkdir "output"

set count=0

for %%f in (*.png) do (
    set /a count+=1
    echo [!count!] Processing: %%f

    rem Crop left part (character + green screen)
    convert "%%f" -crop 300x465+0+0 +repage "temp_left_%%~nf.png"

    rem Crop right part (mask) and invert (character white, background black)
    convert "%%f" -crop 300x465+300+0 -negate "temp_mask_%%~nf.png"

    rem Apply mask as alpha channel in one step
    convert "temp_left_%%~nf.png" "temp_mask_%%~nf.png" +matte -compose CopyOpacity -composite "output\%%~nf.png"

    rem Clean up temp files
    del "temp_left_%%~nf.png" "temp_mask_%%~nf.png"
)

echo.
echo ================================================
echo   Done! Processed %count% images.
echo   Transparent images are in "output" folder.
echo ================================================
pause
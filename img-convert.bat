::nconvert -out jpeg -o home/%%-2048px.jpg  -ratio  -rtype lanczos -resize 2048 2048   -q 80 -overwrite home/*.jpg
SETLOCAL ENABLEDELAYEDEXPANSION
FOR /D /R %%a IN (src\img\*) DO (
  set in="%%a"
  set out=!in:src=web!
  
  echo !in!
  echo !out!

  nconvert -out jpeg -o !out!\%%.jpg  -ratio  -rtype lanczos -q 80 -overwrite !in!\*.jpg
  nconvert -out jpeg -o !out!\%%-2048px.jpg   -ratio  -rtype lanczos -resize 2048 2048 -q 80 -overwrite !in!\*.jpg
  nconvert -out jpeg -o !out!\%%-1024px.jpg   -ratio  -rtype lanczos -resize 1024 1024 -q 80 -overwrite !in!\*.jpg
  
  nconvert -out webp -o !out!\%%-2048px.webp  -ratio  -rtype lanczos -resize 2048 2048 -q 80 -overwrite !in!\*.jpg 
  nconvert -out webp -o !out!\%%-1024px.webp  -ratio  -rtype lanczos -resize 1024 1024 -q 80 -overwrite !in!\*.jpg  
  nconvert -out webp -o !out!\%%-800px.webp   -ratio  -rtype lanczos -resize 800 800   -q 80 -overwrite !in!\*.jpg  
  nconvert -out webp -o !out!\%%-640px.webp   -ratio  -rtype lanczos -resize 640 640   -q 80 -overwrite !in!\*.jpg  
)
SETLOCAL DISABLEDELAYEDEXPANSION




::nconvert -jpegtrans exif -out jpeg %%~sa\*.jpg
::nconvert -out jpeg -o %%~sa\%%-2048px.jpg  -ratio  -rtype lanczos -resize 2048 2048 -q 80 -overwrite %%~sa\*.jpg


:: nconvert -out png -o imageOut/%%.png -overwrite imageIn/*.jpg
:: nconvert -out png -o imageOut/%%-100px.png -ratio  -rtype lanczos -resize 100 100 -overwrite imageIn/*.jpg
:: nconvert -out webp -o imageOut/%%.webp -q 80 -overwrite imageIn/*.jpg

:: nconvert -out jpeg -o imageOut/%%-100px.jpg  -ratio  -rtype lanczos -resize 100 100   -q 80 -overwrite imageIn/*.jpg
:: nconvert -out webp -o imageOut/%%-100px.webp  -ratio -rtype lanczos -resize 100 100   -q 80 -overwrite imageIn/*.jpg

:: nconvert -out webp -o imageOut/%%-2048px.webp -ratio -rtype lanczos -resize 2048 2048 -q 80 -overwrite imageIn/pizzeria.jpg
:: nconvert -out webp -o imageOut/%%-1024px.webp -ratio -rtype lanczos -resize 1024 1024 -q 80 -overwrite imageIn/pizzeria.jpg
:: nconvert -out webp -o imageOut/%%-800px.webp  -ratio -rtype lanczos -resize 800 800   -q 80 -overwrite imageIn/pizzeria.jpg
:: nconvert -out webp -o imageOut/%%-640px.webp  -ratio -rtype lanczos -resize 640 640   -q 80 -overwrite imageIn/pizzeria.jpg


:: nconvert -out png -o imageOut/%%.png -overwrite imageIn/*.png
:: nconvert -out webp -o imageOut/%%.webp -overwrite imageIn/*.png

:: nconvert -out webp -o imageOut/%%-400px.webp  -ratio -rtype lanczos -resize 400 400 -overwrite imageIn/*.png
:: nconvert -out webp -o imageOut/%%-200px.webp  -ratio -rtype lanczos -resize 200 200 -overwrite imageIn/*.png
:: nconvert -out webp -o imageOut/%%-100px.webp  -ratio -rtype lanczos -resize 100 100 -overwrite imageIn/*.png
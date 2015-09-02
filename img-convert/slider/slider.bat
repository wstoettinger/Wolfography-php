:: resizing for -xl images: (min-width: 1200px) 1124px
nconvert -out jpeg -o out\%%@2.jpg    -ratio  -rtype lanczos -resize 2248 2248 -q 70 -overwrite *-xl.jpg
nconvert -out jpeg -o out\%%.jpg       -ratio  -rtype lanczos -resize 1124 1124 -q 80 -overwrite *-xl.jpg
:: and the webps
nconvert -out webp -o out\%%@2.webp   -ratio  -rtype lanczos -resize 2248 2248 -q 90 -overwrite *-xl.jpg
nconvert -out webp -o out\%%.webp      -ratio  -rtype lanczos -resize 1124 1124 -q 92 -overwrite *-xl.jpg

:: resizing for -lg images: (min-width: 992px) 928px
nconvert -out jpeg -o out\%%@2.jpg    -ratio  -rtype lanczos -resize 1856 1856 -q 70 -overwrite *-lg.jpg
nconvert -out jpeg -o out\%%.jpg       -ratio  -rtype lanczos -resize 928 928   -q 80 -overwrite *-lg.jpg
:: and the webps
nconvert -out webp -o out\%%@2.webp   -ratio  -rtype lanczos -resize 1856 1856 -q 90 -overwrite *-lg.jpg
nconvert -out webp -o out\%%.webp      -ratio  -rtype lanczos -resize 928 928   -q 92 -overwrite *-lg.jpg

:: resizing for -md images: (min-width: 768px) 704px
nconvert -out jpeg -o out\%%@2.jpg    -ratio  -rtype lanczos -resize 1408 1408 -q 70 -overwrite *-md.jpg
nconvert -out jpeg -o out\%%.jpg       -ratio  -rtype lanczos -resize 704 704   -q 80 -overwrite *-md.jpg
:: and the webps
nconvert -out webp -o out\%%@2.webp   -ratio  -rtype lanczos -resize 1408 1408 -q 90 -overwrite *-md.jpg
nconvert -out webp -o out\%%.webp      -ratio  -rtype lanczos -resize 704 704   -q 92 -overwrite *-md.jpg

:: resizing for -sm images: (min-width: 544px) 512px
nconvert -out jpeg -o out\%%@3.jpg    -ratio  -rtype lanczos -resize 2048 2048 -q 60 -overwrite *-sm.jpg
nconvert -out jpeg -o out\%%@2.jpg    -ratio  -rtype lanczos -resize 1024 1024 -q 70 -overwrite *-sm.jpg
nconvert -out jpeg -o out\%%.jpg       -ratio  -rtype lanczos -resize 512 512   -q 80 -overwrite *-sm.jpg
:: and the webps
nconvert -out webp -o out\%%@3.webp   -ratio  -rtype lanczos -resize 2048 2048 -q 85 -overwrite *-sm.jpg
nconvert -out webp -o out\%%@2.webp   -ratio  -rtype lanczos -resize 1024 1024 -q 90 -overwrite *-sm.jpg
nconvert -out webp -o out\%%.webp      -ratio  -rtype lanczos -resize 512 512   -q 92 -overwrite *-sm.jpg

:: resizing for -sm images: (max-width: 544px) 512px
nconvert -out jpeg -o out\%%@3.jpg    -ratio  -rtype lanczos -resize 2048 2048 -q 60 -overwrite *-xs.jpg
nconvert -out jpeg -o out\%%@2.jpg    -ratio  -rtype lanczos -resize 1024 1024 -q 70 -overwrite *-xs.jpg
nconvert -out jpeg -o out\%%.jpg       -ratio  -rtype lanczos -resize 512 512   -q 80 -overwrite *-xs.jpg
:: and the webps
nconvert -out webp -o out\%%@3.webp   -ratio  -rtype lanczos -resize 2048 2048 -q 85 -overwrite *-xs.jpg
nconvert -out webp -o out\%%@2.webp   -ratio  -rtype lanczos -resize 1024 1024 -q 90 -overwrite *-xs.jpg
nconvert -out webp -o out\%%.webp      -ratio  -rtype lanczos -resize 512 512   -q 92 -overwrite *-xs.jpg
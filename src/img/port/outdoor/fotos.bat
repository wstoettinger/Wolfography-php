:: resizing files in different resolutions while providing "art direction" (different images/viewports for different device sizes)
:: resizing art direction l for -xl images: (min-width: 1200px) 1124px --> 1124w 1x, 2248w 2x
nconvert -out jpeg -o out\%%-2248w.jpg    -ratio  -rtype lanczos -resize 2248 2248 -q 70 -rmeta -overwrite *-l.jpg
nconvert -out jpeg -o out\%%-1124w.jpg    -ratio  -rtype lanczos -resize 1124 1124 -q 80 -rmeta -overwrite *-l.jpg

:: resizing art direction l for -lg images: (min-width: 992px) 928px --> 928w 1x, 1856w 2x
nconvert -out jpeg -o out\%%-1856w.jpg    -ratio  -rtype lanczos -resize 1856 1856 -q 70 -rmeta -overwrite *-l.jpg
nconvert -out jpeg -o out\%%-928w.jpg     -ratio  -rtype lanczos -resize 928 928   -q 80 -rmeta -overwrite *-l.jpg

:: resizing art direction m for -md images: (min-width: 768px) 704px
nconvert -out jpeg -o out\%%-1408w.jpg    -ratio  -rtype lanczos -resize 1408 1408 -q 70 -rmeta -overwrite *-m.jpg
nconvert -out jpeg -o out\%%-704w.jpg     -ratio  -rtype lanczos -resize 704 704   -q 80 -rmeta -overwrite *-m.jpg

:: resizing art direction m for -sm images: (min-width: 544px) 512px
nconvert -out jpeg -o out\%%-1536w.jpg    -ratio  -rtype lanczos -resize 1536 1536 -q 60 -rmeta -overwrite *-m.jpg
nconvert -out jpeg -o out\%%-1024w.jpg    -ratio  -rtype lanczos -resize 1024 1024 -q 70 -rmeta -overwrite *-m.jpg
nconvert -out jpeg -o out\%%-512w.jpg     -ratio  -rtype lanczos -resize 512 512   -q 80 -rmeta -overwrite *-m.jpg

:: resizing art direction s for -xs images: (max-width: 544px) 512px
nconvert -out jpeg -o out\%%-1536w.jpg    -ratio  -rtype lanczos -resize 1536 1536 -q 60 -rmeta -overwrite *-s.jpg
nconvert -out jpeg -o out\%%-1024w.jpg    -ratio  -rtype lanczos -resize 1024 1024 -q 70 -rmeta -overwrite *-s.jpg
nconvert -out jpeg -o out\%%-512w.jpg     -ratio  -rtype lanczos -resize 512 512   -q 80 -rmeta -overwrite *-s.jpg

:: resizing if no art directions are provided
nconvert -out jpeg -o out\%%-2248w.jpg    -ratio  -rtype lanczos -resize 2248 2248 -q 70 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-1856w.jpg    -ratio  -rtype lanczos -resize 1856 1856 -q 70 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-1536w.jpg    -ratio  -rtype lanczos -resize 1536 1536 -q 60 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-1124w.jpg    -ratio  -rtype lanczos -resize 1124 1124 -q 80 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-928w.jpg     -ratio  -rtype lanczos -resize 928 928   -q 80 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-704w.jpg     -ratio  -rtype lanczos -resize 704 704   -q 80 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-512w.jpg     -ratio  -rtype lanczos -resize 512 512   -q 80 -rmeta -overwrite *.jpg
:: resizing files in different resolutions without "art direction". quality values result from testing
:: resizing for -xl images: (min-width: 1200px) 353 px --> 360w 1x, 720w 2x
:: resizing for -lg images: (min-width: 992px) 288 px --> 360w 1x, 720w 2x
:: resizing for -md images: (min-width: 768px) 328 px --> 360w 1x, 720w 2x
:: resizing for -sm images: (min-width: 544px) 240 px --> 240w 1x, 480w 2x, 720w 3x
:: resizing for -xs images: (max-width: 544px) 495 px --> 512w 1x, 1024w 2x, 1536w 3x
nconvert -out jpeg -o out\%%-1536w.jpg   -ratio  -rtype lanczos -resize 1536 1536 -q 80 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-1024w.jpg   -ratio  -rtype lanczos -resize 1024 1024 -q 85 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-720w.jpg    -ratio  -rtype lanczos -resize 720 720   -q 85 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-512w.jpg    -ratio  -rtype lanczos -resize 512 512   -q 90 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-480w.jpg    -ratio  -rtype lanczos -resize 480 480   -q 85 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-360w.jpg    -ratio  -rtype lanczos -resize 360 360   -q 90 -rmeta -overwrite *.jpg
nconvert -out jpeg -o out\%%-240w.jpg    -ratio  -rtype lanczos -resize 240 240   -q 90 -rmeta -overwrite *.jpg
:: and the webps
:: nconvert -out webp -o out\%%-1536w.webp  -ratio  -rtype lanczos -resize 1536 1536 -q 85 -overwrite *.jpg
:: nconvert -out webp -o out\%%-1024w.webp  -ratio  -rtype lanczos -resize 1024 1024 -q 90 -overwrite *.jpg
:: nconvert -out webp -o out\%%-720w.webp   -ratio  -rtype lanczos -resize 720 720   -q 90 -overwrite *.jpg
:: nconvert -out webp -o out\%%-512w.webp   -ratio  -rtype lanczos -resize 512 512   -q 92 -overwrite *.jpg
:: nconvert -out webp -o out\%%-480w.webp   -ratio  -rtype lanczos -resize 480 480   -q 90 -overwrite *.jpg
:: nconvert -out webp -o out\%%-360w.webp   -ratio  -rtype lanczos -resize 360 360   -q 92 -overwrite *.jpg
:: nconvert -out webp -o out\%%-240w.webp   -ratio  -rtype lanczos -resize 240 240   -q 92 -overwrite *.jpg
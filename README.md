# icfr - Image Collection File Renamer

## Why
I have found myself quite often with a problem. I go on holidays with my girlfriend or friends and when collecting all photographs and putting them in the same folder to have them organised, they tend up to be a mess where that folder's browsing takes you through a very weird timeline of the trip because of the non-cohesive file names. Even photographs of the same date do not accurately order themselves chonologically.

## What

So, I have decided to create this small application which exploits the image file's metadata "Date Taken" and renames properly all image files. Now they can be ordered properly (at least the way I consider 'proper'!) no matter what.

## How

You will need to have the following two DLLs enabled in your **php.ini**:
* extension=php_mbstring.dll
* extension=php_exif.dll

Then, simply, `git checkout` this repository locally. There is only a simple form. You need to paste the absolute path of the directory, where your images lie in. Optionally, you can add a label which will be included in the filenames. For example, if you set "Copenhagen" as the label, you will end up with files looking like "26-08-2017-Copenhagen-0001.JPG".

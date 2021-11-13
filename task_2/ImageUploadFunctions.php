<?php

function uploadImage(array $file): ?string
{
    $path =  'uploads/' . basename($file['name']);

    if (checkFileType($file) && move_uploaded_file($file['tmp_name'], __DIR__.'/'.$path)) {
        return $path;
    }

    return null;
}


function checkFileType(array $file): bool
{
    return $file['type'] === 'image/jpeg' || $file['type'] === 'image/png';
}

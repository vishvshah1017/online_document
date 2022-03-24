<?php
use App\Models\products;
function changeDateFormate($date,$date_format){
    return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);
}

function productImagePath($image_name)
{
    return public_path('images/products/'.$image_name);
}

function arrayhaskeythenreturnitsvalue($array , $value)
{
    if(array_key_exists($value, $array))
    {
        return $array[$value];
    }
    else
    {
        return '';
    }
}

//return all product rows  from products table
function getAllProducts()
{
    return products::all();
}

 function isFileImage($asset){

     $isFileImage = true;
     $allowedMimeTypes = ['image/jpeg','image/gif','image/png','image/bmp','image/svg+xml'];
     $contentType = mime_content_type(public_path($asset));

         if(!in_array($contentType, $allowedMimeTypes) ){
             $isFileImage = false;
         }


         return $isFileImage;

}
//convert jsonstring to strd array
function jsonToArray($jsonString)
{
    return json_decode($jsonString, true);
}

<?php

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


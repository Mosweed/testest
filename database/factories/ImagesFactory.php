<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ImagesFactory
{
    public static function make(?string $text = null): string
    {
        

        $width = 600;
        $height = 400;
        $bgColor = sprintf('%06X', mt_rand(0, 0xFFFFFF));
        $text = $text ?? fake()->name();

        return "https://images.mohmadyazansweed.nl/?width={$width}&height={$height}&bg={$bgColor}&text=".urlencode($text);
    }


}

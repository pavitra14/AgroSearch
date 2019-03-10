<?php

use JoggApp\GoogleTranslate\GoogleTranslate;

function get_locale()
{
    
    $locale = 'en';
    if(session()->has('locale'))
    {
        $locale = session()->get('locale');
    }
    // Uncomment this line to turn on translations
    $locale = "DONT";
    return $locale;
}

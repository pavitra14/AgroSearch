<?php

use JoggApp\GoogleTranslate\GoogleTranslate;

function get_locale()
{
    $locale = 'en';
    if(session()->has('locale'))
    {
        $locale = session()->get('locale');
    }
    return $locale;
}

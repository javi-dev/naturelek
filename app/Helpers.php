<?php

namespace App\Helpers;

use Illuminate\Support\Facades\View;

class Helpers
{
    public static function encoded_page_title()
    {
        return rawurlencode(View::getSections()['title']);
    }
}

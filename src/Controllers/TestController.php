<?php

namespace AndrewWagih\UtmParameters\Controllers;

use Illuminate\Http\Request;
use AndrewWagih\UtmParameters\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return view('AndrewWagih::index', compact('quote'));
    }
}
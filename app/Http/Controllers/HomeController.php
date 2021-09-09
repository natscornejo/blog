<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){

        $nombre = 'Iby';


        return view ('index')
        ->with('nombre',$nombre);

    }

    public function team (){

        $nombre = 'Iby';
        $colorfav = 'Purple & Black';
        $seriefav = 'Gossip Girl';
        $zodiac = 'Libra';
        $quote  = 'Great things in business are never done by one person. They are done by a team of people. -Steve Jobs';

        return view ('team')
        ->with('nombre',$nombre)
        ->with('colorfav',$colorfav)
        ->with('seriefav',$seriefav)
        ->with('zodiac',$zodiac)
        ->with('quote',$quote);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        $data = [
            "firstName" => "John",
            "lastName" => "Doe",
            "age" => 25
        ];
        return($data);
        
        return view("welcome", compact('data'));
    }

    public function about() {
        return view("a-propos");
    }

    public function contact() {
        return view("contact");
    }

    public function err404() {
        return view("404");
    }
}

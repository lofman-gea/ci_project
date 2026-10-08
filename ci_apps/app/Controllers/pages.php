<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebFramework'
        ];
    
        return view ('pages/home', $data);
        

    }
    public function about()
    {
        $data = [
            'title' => 'Aboutme | WebFramework'
        ];
    
        return view ('pages/about', $data);
    }
    public function contact()
    {
       $data = [
            'title' => 'contact | WebFramework'
        ];
    
        return view ('pages/contact', $data);

    }
}

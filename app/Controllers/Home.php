<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function profile()
    {
        $data = [
            'nama' => 'Sarah Rosniani',
            'kelas' => 'A',
            'npm' => '2117051006'

        ];
        
        return view('profile', $data);
    }
}

<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class NewController extends Controller
{
    public function home()
    {
        return view('welcome');
    }
 
    public function contact()
    {
        $email = "admin@admin.com";
        return view('contact', compact('email'));
    }
   
    public function links()
    {
        $title = "Links";
        $links = [
            'Google' => 'https://www.google.com',
            'Facebook' => 'https://www.facebook.com',
            'Twitter' => 'https://www.twitter.com',
        ];
        foreach($links as $name => $url) {
            $links[$name] = "<a href='$url' target='_blank'>$name</a>";
            return view('links', compact('name'));
        }
       
       
    }
   
    public function companies()
    {
        return view('companies');
    }
   
    public function about()
    {
        $title = "Nova college bpv folder";
        return view('about',['title' => $title]);
    }
 
}
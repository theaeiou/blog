<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
      $title = 'สวัสดี';
      //return view('pages.index', compact('title'));
      return view('pages.index')->with('title', $title);
    }
    public function about(){
      $title = 'About me';
      //return view('pages.about');
      return view('pages.about')->with('title', $title);
    }
    public function duty(){
      $data = array('title' => 'Duty',
                    'duties' => ['Programing'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eu sodales nunc. Morbi quis placerat augue.',
                    'Design'=>'consectetur adipiscing elit. Nunc nibh tellus, tincidunt sit amet tincidunt sit amet.',
                    'Organize'=>'euismod in neque. Vestibulum sollicitudin at urna nec bibendum. Duis nec lectus vel tortor euismod ullamcorper.']

    );
      return view('pages.duty')->with($data);
    }
}

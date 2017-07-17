<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
class IndexController
{
    public $messge;
    public function __construct( $list = 'sdj')
    {
        $this->messge = $list;
    }

    public function index( Request $request )
    {
        return view('index.index')->with('name', $this->messge);
    }
}
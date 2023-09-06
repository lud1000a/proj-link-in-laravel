<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;

class LinkController extends Controller
{
    public function index($id){
        $datas= Link::all()->where('user_id', $id);
        return view('list-links', ['datas'=>$datas]);
    }
    public function add_links(){
        return view('add-links');
    }
    public function numero(){
        $n=$_POST['numero'];
        return view('add-links', ['n'=>$n]);
    }
}

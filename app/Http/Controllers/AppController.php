<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use DB;

class AppController extends Controller
{
	public function insertData()
    {
    	if(isset($_POST['id'])){
    	DB::insert('insert into hotel (id_hotel, nama_hotel, lokasi_hotel) values (?, ?, ?)', array($_POST['id'], $_POST['nama'],
    	$_POST['lokasi']));	
    	}
        return view('create');
    }

    public function index()
    {
    	$post = DB::select('select * from hotel');
    	return view ('read', ['datas' => $post]);
    }

    /*public function delete()
    {
    	$post = DB::select('select * from hotel');
    	return view ('delete', ['datas' => $post]);
    }*/

    public function delete($id)
    {
    	if(isset($id)){
    		$data['id'] = $id;
    		DB::delete('delete from hotel where id_hotel = ?', [$data['id']]);
    	}
    	$post = DB::select('select * from hotel');

    	return view ('delete', ['datas' => $post]);
    }
    
}

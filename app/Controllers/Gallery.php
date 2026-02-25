<?php

namespace App\Controllers;

class Gallery extends BaseController
{

public function index(){
    // Parādīt visu galeriju


}

public function uploadForm(){
    return view('admin/fileupload',['title'=>"Pievienot bildi"]);


}

public function uploadPhoto(){



}
}
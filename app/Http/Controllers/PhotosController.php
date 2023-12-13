<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allPhotos= Photo::all()->toArray();
        //combo of var dump and die
        dd($allPhotos);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one photo';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add photo';
    }
    //shows the form to save a role
    public function save(){
        echo 'save photo';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit photo';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to photo';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete photo';
        dd('here');
    }
}

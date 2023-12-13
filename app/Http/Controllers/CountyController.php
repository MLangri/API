<?php

namespace App\Http\Controllers;

use App\Models\County;
use Illuminate\Http\Request;

class CountyController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allCounties= County::all()->toArray();
        //combo of var dump and die
        dd($allCounties);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one county';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add county';
    }
    //shows the form to save a role
    public function save(){
        echo 'save county';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit county';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to county';
    }
    //shows the form to delete a role
    public function delete(){
       // echo 'delete county';
       dd('here');
    }
}

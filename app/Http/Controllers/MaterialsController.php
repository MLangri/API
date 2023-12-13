<?php

namespace App\Http\Controllers;

use App\Models\Materials;
use Illuminate\Http\Request;

class MaterialsController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allMaterials= Materials::all()->toArray();
        //combo of var dump and die
        dd($allMaterials);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one material';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add material';
    }
    //shows the form to save a role
    public function save(){
        echo 'save material';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit material';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to material';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete material';
        dd('here');
    }
}

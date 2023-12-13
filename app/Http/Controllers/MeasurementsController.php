<?php

namespace App\Http\Controllers;

use App\Models\Measurements;
use Illuminate\Http\Request;

class MeasurementsController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allMeasurements= Measurements::all()->toArray();
        //combo of var dump and die
        dd($allMeasurements);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one Measurement';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add Measurement';
    }
    //shows the form to save a role
    public function save(){
        echo 'save Measurement';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit Measurement';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to Measurement';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete Measurement';
        dd('here');
    }
}

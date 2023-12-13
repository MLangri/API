<?php

namespace App\Http\Controllers;

use App\Models\Payments;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allPayments= Payments::all()->toArray();
        //combo of var dump and die
        dd($allPayments);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one payment';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add payment';
    }
    //shows the form to save a role
    public function save(){
        echo 'save payment';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit payment';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save payment';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete payment';
        dd('here');
    }
}

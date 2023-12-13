<?php

namespace App\Http\Controllers;

use App\Models\order_designs;
use Illuminate\Http\Request;

class order_designsController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allorder_designs= order_designs::all()->toArray();
        //combo of var dump and die
        dd($allorder_designs);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one order design';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add order design';
    }
    //shows the form to save a role
    public function save(){
        echo 'save order design';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit order design';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to order design';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete order design';
        dd('here');
    }
}

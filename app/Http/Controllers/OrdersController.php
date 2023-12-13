<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    //shows all roles
    public function all(){
        //call the role model
        $allOrders= Order::all()->toArray();
        //combo of var dump and die
        dd($allOrders);
        //pass this data to view the file
    }
    //shows one row
    public function one(){
        echo 'display one order';
    }
    //shows the form to add a role 
    public function add(){
        echo 'add order';
    }
    //shows the form to save a role
    public function save(){
        echo 'save order';
    }
    //shows the form to edit a role
    public function edit(){
        echo 'edit order';
    }
    //shows the form to save changes made in a role
    public function saveChanges(){
        echo 'save changes to order';
    }
    //shows the form to delete a role
    public function delete(){
        //echo 'delete order';
        dd('here');
    }
}

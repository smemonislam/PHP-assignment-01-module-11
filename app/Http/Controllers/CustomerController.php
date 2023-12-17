<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view ("frontend.ims.pages.contacts.customers.index");
    }

    public function create(){
        return view ("frontend.ims.pages.contacts.customers.create");
    }

    public function edit(){
        return view ("frontend.ims.pages.contacts.customers.edit");
    }

    public function view(){
        return view ("frontend.ims.pages.contacts.customers.view");
    }
}

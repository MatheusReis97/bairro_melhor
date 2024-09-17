<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Validator;
use App\Http\Controllers\Hash;

class LoginController extends Controller
{
 
    public function index()
    {
        return User::all();
    }

    
    public function create()
    {
        
    }

   
    public function store(Request $request)
    {
        User::create($request->all());
    }

   
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}

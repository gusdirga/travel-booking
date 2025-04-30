<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    // public function create()
    // {
    //     return view('admin.create');
    // }

    // public function store(Request $request)
    // {
    //     // Handle the form submission and save the data
    //     // Redirect or return a response
    // }

    // public function edit($id)
    // {
    //     return view('admin.edit', compact('id'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Handle the form submission and update the data
    //     // Redirect or return a response
    // }

    // public function destroy($id)
    // {
    //     // Handle the deletion of the resource
    //     // Redirect or return a response
    // }
}

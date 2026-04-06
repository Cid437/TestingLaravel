<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\user;
use storage;
class customerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $fillable = [
    'user_id',
    'fname',
    'lname',
    'addressline',
    'zipcode',
    'phone',
    'image_path'
    ];

    public function create()
    {
    return view('customers.testStore');
    }
    public function index()
    {
        $customers = customer::all();
         return response()->json(['customers' => $customers, 'status' => 200]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new user([
            'name' => $request->fname . ' ' . $request->lname,
            'email' => $request->email,
            'password' => bcrypt($request->input('password')), 
        ]);
        $user->save();

        $path = $request->file('uploads')->store('public/images');

        $customer = Customer::create([
        'user_id' => $user->id,
        'fname' => $request->fname,
        'lname' => $request->lname,
        'addressline' => $request->addressline,
        'zipcode' => $request->zipcode,
        'phone' => $request->phone,
        'image_path' => str_replace('public/', 'storage/', $path),
        ]);

        return response()->json([
        'success' => 'Customer created successfully',
        'customer' => $customer
        ], 200);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

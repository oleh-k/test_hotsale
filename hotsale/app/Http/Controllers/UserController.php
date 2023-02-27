<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validate request data
        $validationRule = [
            "name" => ["required", "min:2", "max:60"],
            "email" => ["required", "unique:users,email", "email:rfc,dns", "min:2", "max:100"],
            "password" => ["required", "confirmed"],
        ];

        $validationData = Validator::make($request->all(), $validationRule);

        $date = date("Y-m-d H:m:s:", time()).substr(round(microtime(true)*1000), 10, 3);
        $arr['date'] = $date;
        $arr['email'] = $request->email;
        $arr['validation'] = 'false';
        

        

        if ($validationData->fails()) {

            $response = [
                'success' => false,
                'message' => 'Validation failed',
                'fails' => $validationData->errors()
            ];

            $data = print_r($arr, true);
            Storage::disk('local')->put("log/$date.log", $data);

            return response($response, 422);

        }

        $user = User::create($request->all());

        $arr['validation'] = 'true';
        $data = print_r($arr, true);
        Storage::disk('local')->put("log/$date.log", $data);

        return $user;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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

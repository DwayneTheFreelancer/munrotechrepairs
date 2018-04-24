<?php

namespace App\Http\Controllers;

use App\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RepairsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('repairs/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('repairs/create', compact('empty_field'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $iphone = $request->iphone;
        $problem = $request->problem;
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $email = $request->email;
        $number = "";
        if($request->number == "") {
            $number = "";
        } else {
            $number = $request->number;
        }
        $address = $request->address;
        $place_name = "";
        if($place_name == "") {
            $place_name == "";
        } else {
            $place_name = $request->place_name;
        }
        $zip_code = $request->zip_code;
        $note = "";
        if($request->note == "") {
            $note == "";
        } else {
            $note = $request->note;
        }


        $category_id = 1;


        $empty_field = "Please fill in required fields";
        $order_success = "Your request has been sent and we'll get back to you shortly";

        // Make a variable that sends a message that all required fields are not filled in
        if($iphone == "" || $problem == "" || $first_name == "" || $last_name == "" || $email == "" || $address == "" || $zip_code == "") {
            echo $empty_field;
        } else {
            $repair = Repair::create(["iphone" => $iphone, "problem" => $problem, "first_name" => $first_name, "last_name" => $last_name, "email" => $email, "number" => $number, "address" => $address, "place_name" => $place_name, "zip_code" => $zip_code, "note" => $note,"category_id"  => $category_id]);
            echo $order_success;
        }

        //return $request->url();
        return; 

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function show(Repair $repair, $id)
    {
        //$repair = Repair::where('id', $id)->first();
        $repairs = Repair::all();
        return redirect()->view('dashboard', compact('repairs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function edit(Repair $repair)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Repair $repair)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Repair  $repair
     * @return \Illuminate\Http\Response
     */
    public function destroy(Repair $repair)
    {
        //
    }
}

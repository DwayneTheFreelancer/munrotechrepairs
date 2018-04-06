<?php


namespace App\Http\Controllers;

use App\Repair;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard() {
        // Get all repair orders from the database that users requested
        $repairs = Repair::all();
        // Send the data to a view dashboard and use the variable repairs to send the data on the page
        return view('dashboard', compact('repairs'));
    }
}

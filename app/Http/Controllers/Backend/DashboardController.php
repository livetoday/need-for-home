<?php namespace App\Http\Controllers\Backend;

use Laravel\Lumen\Routing\Controller as BaseController;

class DashboardController extends BaseController
{
    
    public function index() 
    {
    	return view('backend.dashboard.index');
    }

 

}

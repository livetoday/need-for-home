<?php namespace App\Http\Controllers\Backend;

use Laravel\Lumen\Routing\Controller as BaseController;

class PagesController extends BaseController
{


    
    public function getList() 
    {
    	return view('backend.pages.list');
    }

    public function manage() 
    {
    	return view('backend.pages.manage');	
    }

}

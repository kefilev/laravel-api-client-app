<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ApiRepository;

class ApiController extends Controller
{
    
    protected $api;
        
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ApiRepository $api)
    {
        $this->middleware('auth');        
        $this->api = $api;  
    }    
    
    
    /**
     * Make a request to the API for an access token.
     *
     * @param Request
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getAccess(Request $request)
    {   
        // Save api_access_token to the session   
        session(['api_access_token' => $this->api->getAccess($request)['access_token']]); 
        
        return view('access', ["response"=>$this->api->getAccess($request)]);
    }
    
    
    
    /**
     * List all services from the API.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function listServices()
    {          
        return view('services', ["response"=>$this->api->all()]);
    }
    
    
    
    /**
     * Show single service details from the API
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function serviceDetails($id)
    {  
        return view('details', ["response"=>$this->api->get($id)]);
    }
    
}

<?php 

namespace App\Repositories;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class ApiRepository implements ApiRepositoryInterface
{
    
    
    private $client;
    
    
    
    /**
     * Create a new ApiRepository instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client();
    }
    
    
    
    /**
     * Get a service by it's ID
     *
     * @param int
     *
     * @return array
     */
    public function get($id)
    {
        try { 
            $response = $this->client->request('GET', config('app.api_url').'/services/'.$id.'/service', [
                'headers' => [
                    'Authorization' => 'Bearer '.session('api_access_token'),
                    'Accept' => config('app.api_accept_header') 
                ]
            ]);
        } catch (RequestException $ex) {
            abort(403);
        }
        return json_decode($response->getBody(), true); 
    }
    
    
    

    /**
     * Get all posts.
     *
     * @return array
     */
    public function all()
    {
        try {     
            $response = $this->client->request('GET', config('app.api_url').'/services', [
                'headers' => [
                    'Authorization' => 'Bearer '.session('api_access_token'),
                    'Accept' => config('app.api_accept_header') 
                ]
            ]); 
        } catch (RequestException $ex) { 
            abort(403); 
        }
        
        return json_decode($response->getBody(), true); 
    }
    
    
    /**
     * Get access data from the API.
     *
     * @param request
     *
     * @return array
     */
    public function getAccess($request) {
        
        try {     
            $response = $this->client->request('POST', config('app.api_url').'/oauth2/access-token', [
                'headers' => [
                    'Accept' => config('app.api_accept_header')
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => $request->input('client_id'),
                    'client_secret' => $request->input('client_secret')
                ]
            ]);
        } catch (RequestException $ex) { 
            abort(403); 
        }

        return json_decode($response->getBody(), true); 
        
    }

}

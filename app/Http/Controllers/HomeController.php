<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

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

    
    function apiCall($requestURL){
        $client = new \GuzzleHttp\Client();
        $response = $client->request('GET', $requestURL, [
            'headers' => [
                'Authorization' => 'Bearer EBepM3HHT-qLxAYt5ddTALSfqvITIRYVe_IZ9D0YGDOxwcQC-P09u3Rbp1EsmdWA80PMuG0xBEBrjWBDpgUdaBkH746FtvhybSHMGHsytk21FNuAIxqREcV05LWjY3Yx',
                'accept' => 'application/json',
                'content-type' => 'application/json'
            ],
        ]);

        return json_decode($response->getBody());
    }

    public function index()
    {
        return view('home');
    }

    public function yelp_page(){
        $autocomplete = 'https://api.yelp.com/v3/autocomplete?text=us';
        $searchForBusiness = 'https://api.yelp.com/v3/businesses/search?location=us&sort_by=best_match&limit=50';
        $searchByCategoryName = 'https://api.yelp.com/v3/businesses/search?location=US&categories=Used%20Car%20Dealers&attributes=&sort_by=best_match&limit=500';
        $searchByBusinessId = 'https://api.yelp.com/v3/businesses/wGl_DyNxSv8KUtYgiuLhmA';

        $data = $this->apiCall($autocomplete);
        
        dd($data);
        
        return view('yelp');
    }

    public function local_business_page(){
        return view('local-business');
    }

    public function glassdoor_page(){
        return view('glassdoor');
    }
}


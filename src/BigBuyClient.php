<?php

namespace Made\BigBuy;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;


class BigBuyClient{
    
    
    protected $client;
    protected $token;
           
    public function __construct($base_uri, $timeout = 60.0, $token) {    
        
        if(!isset($this->client)){
            $this->client = new Client([
                // Base URI is used with relative requests
                'base_uri' => $base_uri,
                // You can set any number of default request options.
                'timeout'  => $timeout,
            ]);

            $this->token = $token;
        }
    
    }
    

    //Order API ----------------------------------------------------------------------
    
    public function orderNewAddresses(){
        
        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/order/addresses/new.json', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }


    public function orderNewCarriers(){
        
        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/order/carriers/new.json', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }


    public function orderNewOrder(){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/order/new.json', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }


    public function orderNewProducts(){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/order/products/new.json', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }


    public function orderReference($reference){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/order/reference/'.$reference.'.json', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }


    public function orderInformation($order){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/order/'.$order.'.json', $headers);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();
                
    }
    
    
    public function orderCheckOrder($orderObject){
        

        $bodyJSON = json_encode($orderObject);
        
        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token];
        
        $request = new Request('POST', '/rest/order/check.json', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  
       
    }
    
    public function orderCreateOrder($orderObject){
        

        $bodyJSON = json_encode($orderObject);
        
        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token];
        
        $request = new Request('POST', '/rest/order/create.json', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  
       
    }

//-------------------------------------------------------------------------------------------------------- 

// Api Tracking ------------------------------------------------------------------------------------------


    public function trackingCarriers(){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/tracking/carriers.json', $headers);
        $response = $this->client->send($request);

        return $response->getBody()->getContents();
                
    }


    public function trackingOrderAvailableCarriers($order){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/tracking/order/'.$order.'.json', $headers);
        $response = $this->client->send($request);

        return $response->getBody()->getContents();
                
    }


    public function trackingAvailableTrackingForOrders($orderObject){
        

        $bodyJSON = json_encode($orderObject);
        
        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token];
        
        $request = new Request('POST', '/rest/tracking/orders.json', $headers, $bodyJSON);
        $response = $this->client->send($request);
    
        return $response->getBody()->getContents();  
       
    }



//----------------------------------------------------------------------------------------------------------



// Api Shipping ------------------------------------------------------------------------------------------


public function shippingCarriers(){

    $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
    
    $request = new Request('GET', '/rest/shipping/carriers.json', $headers);
    $response = $this->client->send($request);

    return $response->getBody()->getContents();
            
}


public function shippingNewOrders(){

    $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
    
    $request = new Request('GET', '/rest/shipping/orders/new.json', $headers);
    $response = $this->client->send($request);

    return $response->getBody()->getContents();
            
}


public function shippingAvailableOptionsForOrders($ordersObject){
    

    $bodyJSON = json_encode($ordersObject);
    
    $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token];
    
    $request = new Request('POST', '/rest/shipping/orders.json', $headers, $bodyJSON);
    $response = $this->client->send($request);

    return $response->getBody()->getContents();  
   
}



//----------------------------------------------------------------------------------------------------------

// User API ------------------------------------------------------------------------------------------------

    public function userPurse(){

        $headers = ['Content-Type' => 'application/json', 'Authorization' => 'Bearer ' . $this->token ];
        
        $request = new Request('GET', '/rest/user/purse.json', $headers);
        $response = $this->client->send($request);

        return $response->getBody()->getContents();
                
    }

//----------------------------------------------------------------------------------------------------------

}


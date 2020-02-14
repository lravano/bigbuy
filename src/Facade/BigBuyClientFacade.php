<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BigBuyClientFacade
 *
 * @author lrava
 */
namespace Made\BigBuy\Facade;


use Illuminate\Support\Facades\Facade;

class BigBuyClientFacade extends Facade {
   
    protected static function getFacadeAccessor() { return 'bigbuy_client'; }
    
}

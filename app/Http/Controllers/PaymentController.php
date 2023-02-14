<?php

namespace App\Http\Controllers;

use App\Models\UserCardDetail;
use Exception;
use Illuminate\Http\Request;
use Ssheduardo\Redsys\Facades\Redsys;

class PaymentController extends Controller
{
    public function index()
    {
        try{
            $key = env('REDSYS_KEY');

            Redsys::setAmount(rand(10,600));
            Redsys::setOrder(time());
            Redsys::setMerchantcode('999008881');
            Redsys::setCurrency('978');
            Redsys::setTransactiontype('0');
            Redsys::setTerminal('1');
            Redsys::setMethod('T');
            Redsys::setNotification(env('REDSYS_URL_NOTIFICATION'));
            Redsys::setUrlOk(env('REDSYS_URL_OK')); //Url OK
            Redsys::setUrlKo(env('REDSYS_URL_KO')); //Url KO
            Redsys::setVersion('HMAC_SHA256_V1');
            // Redsys::setTradeName('Tienda S.L');
            // Redsys::setTitular('Pedro Risco');
            // Redsys::setProductDescription('Compras varias');
            // Redsys::setEnviroment('test'); //Entorno test

            $signature = Redsys::generateMerchantSignature($key);
            Redsys::setMerchantSignature($signature);

            $form = Redsys::createForm();
        }
        catch(Exception $e){
            return $e->getMessage();
        }
        return $form;
    }


    public function handleResponse(Request $request){
        $key = config('redsys.key');
        $parameters = Redsys::getMerchantParameters($request->input('Ds_MerchantParameters'));
        $DsResponse = $parameters["Ds_Response"];
        $DsResponse += 0;

        if (Redsys::check($key, $request->input()) && $DsResponse <= 99) {
            //Positive Response
        } else {
           // Nagative Response
        }
    }

}

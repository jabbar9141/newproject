<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class PagesController extends Controller
{
   public function  subeTuPlazaPage1(){
    return view('sube-tu-plaza.sube-tu-plaza1');
   }
   public function  subeTuPlazaPage2(){
    return view('sube-tu-plaza.sube-tu-plaza2');
   }
   public function  subeTuPlazaPage3(){
    return view('sube-tu-plaza.sube-tu-plaza3');
   }
   public function  subeTuPlazaPage4(){
    return view('sube-tu-plaza.sube-tu-plaza4');
   }
   public function  subeTuPlazaPage5(){
    return view('sube-tu-plaza.sube-tu-plaza5');
   }
   public function  subeTuPlazaPage6(){
    return view('sube-tu-plaza.sube-tu-plaza6');
   }
   public function  subeTuPlazaPage7(){
    return view('sube-tu-plaza.sube-tu-plaza7');
   }
   public function  subeTuPlazaPage8(){
    return view('sube-tu-plaza.sube-tu-plaza8');
   }
   public function  subeTuPlazaPage9(){
      return view('sube-tu-plaza.sube-tu-plaza9');
     }
   public function  subeTuPlazaPage10(){
      return view('sube-tu-plaza.sube-tu-plaza10');
     }
//    public function favoritosPage(){
//     return view('favoritos');
//    }

   public function mensajesPage(){
     //destroy the session of parking space
     session()->forget('parkingSpace');
     return view('mensajes');
   }

   public function ayudaPage(){
     //destroy the session of parking space
    session()->forget('parkingSpace');

    return view('ayuda');
   }

   public function resetPasswordView(){
    return view('settings.cambiar-contrasena');
   }

   public function paymentMathodView(){
    return view('settings.metodos-de-pago');
   }
   public function messagesView(){
    return view('settings.mensajes');
   }
   public function requestsView(){
    return view('settings.solicitudes');
   }
   public function vehiclesView(){
    return view('settings.vehiculos');
   }

   public function squareAccessView(){
    return view('settings.acceso-plaza');
   }
   public function contractsView(){
    return view('settings.contratos');
   }
   public function invoicesView(){
    return view('settings.facturas');
   }

}

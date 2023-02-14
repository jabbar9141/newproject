<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use BotMan\BotMan\BotMan;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Messages\Outgoing\Actions\Button;
use BotMan\BotMan\Messages\Outgoing\Question;
use Dflydev\DotAccessData\Data;
use Illuminate\Foundation\Inspiring;
use Symfony\Component\VarDumper\Cloner\Data as ClonerData;

class ChatBotController extends Controller
{
    //
    public function handle()
    {

        $botman = app('botman');
    //    $botman->say('hellow');
        $botman->hears('{message}', function($botman, $message) {
            if ($message == 'hi') {
                // $this->create1();
                $botman->reply("¿Cómo creo una cuenta?");
                $botman->reply("¿En qué estado se puede encontrar mi contrato?");
                $botman->reply("¿Cómo subo mi plaza de parking?");
                $botman->reply("¿Cómo acepto una petición?");
                $botman->reply("¿Cómo introduzco mi método de pago?");
                $botman->reply("¿Cómo es el proceso de pago?");
                $botman->reply("¿Dónde veo mis facturas?");
                $botman->reply("¿Cómo verificar mi perfil?");

            }elseif($message == "¿Cómo creo una cuenta?"){
                $botman->reply("Si aún no tienes una cuenta con nosotros, ve a nuestra (página de inicio) (poner enlace pagina inicio) y haz
                clic en Registrarse. Solo necesitaremos tu nombre, apellido, dirección de correo electrónico y la contraseña
                que elijas. Recibirás un correo a tu email para verificar tu registro");
            }elseif($message == "¿En qué estado se puede encontrar mi contrato?"){
                $botman->reply("El contrato puede tener 3 estados:");
                $botman->reply(" 1) Pendiente de firmar (aparecerá en color blanco).");
                $botman->reply(" 2) No firmado correctamente (aparecerá en color rojo).");
                $botman->reply(" 3) Firmado correctamente (aparecerá en color verde).)");

            }elseif($message == "¿Cómo subo mi plaza de parking?"){
                $botman->reply("Para subir una plaza debes acceder a la parte superior de la pantalla y clickar en subir mi plaza, completa las
                               diferentes pantallas con todos los datos necesarios para poder subir tu plaza a Garer.");
                $botman->reply("Recuerda que, una vez publicada, la plaza puede tardar una horas horas en aparecer en los resultados de
                búsqueda, ya que debemos comprobar que el perfil es real y la verificación de este.");
            }elseif($message == "¿Cómo acepto una petición?"){
                $botman->reply("Para aceptar una solicitud pendiente te recomendamos seguir los siguientes consejos:");
                $botman->reply( "Recibirás una notificación donde aparece tu foto de perfil, haz clic en Ajustes > Solicitudes y acepta un
                mensaje de confirmación. Una vez confirmada la solicitud, ambas partes podréis completar el contrato de
                alquiler.");
            }elseif($message == "¿Cómo introduzco mi método de pago?"){
                $botman->reply("Para introducir un método de pago tendrás que ir a ajustes hacer clic en Métodos de pago y cobro > Añadir
                método de pago > Añade Cuenta Bancaria e introducir los datos que se te soliciten.");
            }elseif($message == "¿Cómo es el proceso de pago?"){
                $botman->reply(" 1) El cliente solicita una plaza por la plataforma.");
                $botman->reply(" 2) El propietario revisa la solicitud y la acepta, siempre que se ajuste a sus requisitos.");
                $botman->reply(" 3) El cliente paga el importe total del primer mes, de forma que esta queda confirmada.");
                $botman->reply(" 4) El propietario recibe su dinero entre 24 y 48 horas después de que la actividad se haya realizado.");
            }elseif($message == "¿Dónde veo mis facturas?"){
                $botman->reply("Para acceder a la factura con IVA de una de tus reservas tienes que ir a Ajustes y hacer clic en Facturas");
            }elseif($message == "¿Cómo verificar mi perfil?"){
                $botman->reply("Para verificar tu perfil haz clic (aquí) (poner enlace) y rellena los datos requeridos en la sección de
                métodos de pago y cobro. ");
            }else{
                $botman->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
            }


        });
        $botman->listen();
    }

    /**

     * Place your BotMan logic here.

     */
    public function askName($botman)
    {
        $botman->ask('Hello! What is your Name?', function(Answer $answer) {
            $name = $answer->getText();
            $this->say('Nice to meet you '.$name);
        });

    }

    public function create1 ()
  {
  $objects = Data::all();
  $question = Question::create ('Choose the headband of your interest:')
  ->fallback ('Choose an option, and its time for the next question')
  ->callbackId ('Come on!');
  foreach($objects as $object){
      $question->addButtons([
          Button::create($object->name)->value($object->value),
      ]);
  }

  return $this->ask($question, function (Answer $answer) {
    if ($answer->isInteractiveMessageReply()) {
       } else {
            $this->say(Inspiring::quote());
              $this->askForDatabase();
        }

    });
}

}

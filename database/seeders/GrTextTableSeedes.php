<?php

namespace Database\Seeders;

use App\Models\GrText;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrTextTableSeedes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $apptexts = [
            [
               'variable' => 'favicon_title',
               'lang_es' => 'Garer | Busca, encuentra y aparca',
               'created_at' => now(),
               'updated_at' => now(),
            ],
            [
                'variable' => 'register_button',
                'lang_es' => 'Regístrate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'login_button',
                'lang_es' => 'Iniciar sesión',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_title',
                'lang_es' => 'Busca, encuentra y aparca',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'duration_selector_option1',
                'lang_es' => 'De 1 a 6 meses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'duration_selector_option2',
                'lang_es' => 'De 6 a 12 meses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'duration_selector_option3',
                'lang_es' => 'Más de 12 meses',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'button_selector_ubi',
                'lang_es' => 'Ubicación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title1_footer',
                'lang_es' => 'Síguenos',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title2_footer',
                'lang_es' => '¿Necesitas ayuda?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title3_footer',
                'lang_es' => 'Legal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title2_footer_value1',
                'lang_es' => 'Política de privacidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title2_footer_value2',
                'lang_es' => 'Política de cookies',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title2_footer_value3',
                'lang_es' => 'Aviso legal',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title2_footer_value4',
                'lang_es' => 'Política de RRSS',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title2_footer_value5',
                'lang_es' => 'Preguntas frecuentes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title3_footer_value1',
                'lang_es' => 'Contacto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title_subfooter1',
                'lang_es' => 'Todos los derechos reservados | Este sitio está protegido por reCAPTCHA y se aplican la',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title_subfooter1_link1',
                'lang_es' => 'Política de Privacidad',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title_subfooter2',
                'lang_es' => 'y las',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title_subfooter1_link2',
                'lang_es' => 'Condiciones de Servicio',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title_subfooter3',
                'lang_es' => 'de Google.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text1_counter',
                'lang_es' => 'usuarios',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text2_counter',
                'lang_es' => 'plazas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text3_counter',
                'lang_es' => 'alquileres por día',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'option1_selector_vehicle',
                'lang_es' => 'Coche',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'option2_selector_vehicle',
                'lang_es' => 'Moto',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'button_search_responsive',
                'lang_es' => 'Buscar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'title_main_page',
                'lang_es' => 'La revolución a la búsqueda de plazas de parking',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text_main_page',
                'lang_es' => 'Te ayudamos a encontrar una plaza de parking en menos de 24h.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_icons_title1',
                'lang_es' => 'Busca',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_icons_title2',
                'lang_es' => 'Encuentra',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_icons_title3',
                'lang_es' => 'Aparca',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_icons_text1',
                'lang_es' => 'Introduce la matrícula de tu vehículo.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_icons_text2',
                'lang_es' => 'La plaza de parking que más se adapta a ti.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'main_icons_text3',
                'lang_es' => '¡Listo! Nosotros nos encargamos del resto de gestiones.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text1_results',
                'lang_es' => 'plazas',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text2_results',
                'lang_es' => 'Destacados primero',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text1_sub_header_filters',
                'lang_es' => 'Ubicación',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text2_sub_header_filters',
                'lang_es' => 'Matrícula',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text3_sub_header_filters',
                'lang_es' => 'Filtros',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'search_button_sub_header_filters',
                'lang_es' => 'Buscar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'map_button_sub_header_filters',
                'lang_es' => 'Ver mapa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text_month',
                'lang_es' => 'mes',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text_2d_video',
                'lang_es' => 'Vista 3D',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text_button_show_map',
                'lang_es' => 'Ver mapa',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text_button_hide_map',
                'lang_es' => 'Ocultar',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text3_results',
                'lang_es' => 'Precio (mayor a menor)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text4_results',
                'lang_es' => 'Precio (menor a mayor)',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text1_modal_login',
                'lang_es' => 'Iniciar sesión',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text2_modal_login',
                'lang_es' => 'Correo electrónico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text3_modal_login',
                'lang_es' => 'Contraseña',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text4_modal_login',
                'lang_es' => '¿Has olvidado tu contraseña?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text5_modal_login',
                'lang_es' => 'Iniciar sesión',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text6_modal_login',
                'lang_es' => 'Si no tienes una cuenta creada',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text7_modal_login',
                'lang_es' => 'regístrate',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text8_modal_login',
                'lang_es' => 'Al iniciar sesión, acepto los',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text9_modal_login',
                'lang_es' => 'Términos y condiciones de uso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text10_modal_login',
                'lang_es' => 'y la',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text11_modal_login',
                'lang_es' => 'Términos y condiciones de uso',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text12_modal_login',
                'lang_es' => 'de GarerApp',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text1_modal_register',
                'lang_es' => 'Regístrate en Garer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text2_modal_register',
                'lang_es' => 'Registrarme',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text3_modal_register',
                'lang_es' => 'Nombre',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text4_modal_register',
                'lang_es' => '¿Ya tienes una cuenta?',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text5_modal_register',
                'lang_es' => 'Inicia sesión',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text6_modal_register',
                'lang_es' => 'Repetir correo electrónico',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text7_modal_register',
                'lang_es' => 'Repetir contraseña',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'variable' => 'text8_modal_register',
                'lang_es' => 'Apellidos',
                'created_at' => now(),
                'updated_at' => now(),
             ]
        ];


        foreach ($apptexts as $key => $value) {
            GrText::create($value);
        }
    }
}

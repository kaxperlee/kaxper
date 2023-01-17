<?php

namespace Database\Seeders;

use App\Models\Tarea;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tarea = new Tarea();
        $tarea->Tarea = "Reactivación Office";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 6;
        $tarea->Tiempoestimado = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de la carpeta de expedientes 2023";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 7;
        $tarea->Tiempoestimado = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de la carpeta de expedientes 2023";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempoestimado = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion Nas nuevo y acceso a carpeta 2023 y 2022";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 4;
        $tarea->Tiempoestimado = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revisar ruta certificados A3";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 8;
        $tarea->Tiempoestimado = 10;
        $tarea->Fecha = '2023/01/02';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de MN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 30;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempoestimado = 45;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion multifuncion, reactivacion office";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempoestimado = 45;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion correo MN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion impresora y certificado";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Consulta android para cambia la cuenta del telefono";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 15;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Datos configuracion outlook TLA Consultance";
        $tarea->agenda_tipo_id = 2;
        $tarea->agenda_destinatario_id = 10;
        $tarea->Tiempoestimado = 10;
        $tarea->Fecha = '2023/01/03';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/04';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 11;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/04';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 12;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/04';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 6;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 13;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 7;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 14;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Reinstalacion de Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Pasar copia de seguridad de TLA-CC a TLA-ALICANTE";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempoestimado = 120;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion cuentas y portatil";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempoestimado = 60;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Llamada Mn para ver Onedrive";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Traspaso carpeta 22 a Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempoestimado = 180;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Error captcha Spanish Tax Calculator";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Error captcha Spanish Tax Calculator";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Carpeta desaparecida, alguien la habia arrastrado dentro de otra carpeta";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 17;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/17';
        $tarea->save();



    }
}

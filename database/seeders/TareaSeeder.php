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
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de la carpeta de expedientes 2023";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 7;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de la carpeta de expedientes 2023";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion Nas nuevo y acceso a carpeta 2023 y 2022";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 4;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/02';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revisar ruta certificados A3";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 8;
        $tarea->Tiempo = 10;
        $tarea->Fecha = '2023/01/02';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de MN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 45;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion multifuncion, reactivacion office";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempo = 45;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion correo MN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion impresora y certificado";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Consulta android para cambia la cuenta del telefono";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 15;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Datos configuracion outlook TLA Consultance";
        $tarea->agenda_tipo_id = 2;
        $tarea->agenda_destinatario_id = 10;
        $tarea->Tiempo = 10;
        $tarea->Fecha = '2023/01/03';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/04';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 11;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/04';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 12;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/04';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 6;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 13;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 7;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpeta 2022 y 2023 team";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 14;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Reinstalacion de Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Pasar copia de seguridad de TLA-CC a TLA-ALICANTE";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempo = 120;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion cuentas y portatil";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 60;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Llamada Mn para ver Onedrive";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Traspaso carpeta 22 a Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempo = 180;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Error captcha Spanish Tax Calculator";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/05';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision MN, error al configurar la carpeta de MN en Onedrive";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/09';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion de carpetas 2022 y 2023 de Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 5;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/09';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion de carpetas 2022 y 2023 de Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 20;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/09';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion de carpetas 2022 y 2023 de Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 19;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/09';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Traspaso carpeta 22 a teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempo = 240;
        $tarea->Fecha = '2023/01/13';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion de carpetas 2022 y 2023 de Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 17;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/10';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpetas 22 y 23 de teams, instalacion de PDF y PDF Pro, activacion windows, instalacion
        vpn nueva y servidor NAS nuevo Campello.";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 18;
        $tarea->Tiempo = 60;
        $tarea->Fecha = '2023/01/10';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion carpetas 22 y 23 Teams";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 21;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/10';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Error sincronizacion Onedrive, ha arrastrado el acceso directo de 2023 dentro de Onedrive";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 19;
        $tarea->Tiempo = 40;
        $tarea->Fecha = '2023/01/11';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Problema con teams, no le aparecian los ficheros";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 10;
        $tarea->Fecha = '2023/01/11';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision fichero perdido";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 13;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/11';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion impresora";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 17;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/11';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Problema con Onedrive: Onedrive colapsado";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/12';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Problema de sincronizacion de teams. Onedrive colapsado";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 6;
        $tarea->Tiempo = 40;
        $tarea->Fecha = '2023/01/12';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Recuperacion de una carpeta de 2018";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/13';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Crear buzon archivo de Mati";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 90;
        $tarea->Fecha = '2023/01/13';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion portatil, cuenta de correo, office 2021, teams, MN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 22;
        $tarea->Tiempo = 90;
        $tarea->Fecha = '2023/01/16';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion impresora nueva";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 5;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/16';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Carpeta desaparecida, alguien la habia arrastrado dentro de otra carpeta";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 17;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/17';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion MN y correo MN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 22;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/17';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion y analisis de Malwarebites";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/17';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision Onedrive y eliminar iconos del escritorio";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/17';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Reinstalacion de Office";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 23;
        $tarea->Tiempo = 45;
        $tarea->Fecha = '2023/01/17';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Reinstalacion de office";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 24;
        $tarea->Tiempo = 45;
        $tarea->Fecha = '2023/01/17';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalar impresora Brother";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 22;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/18';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalar impresora Brother";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 5;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/18';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Buscar carpeta de 2022. Finalmente estaba en otra ubicacion";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/18';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Consulta sobre word";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 21;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/19';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuración de la carpeta archivo (expedientes antiguos)";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 3;
        $tarea->Tiempo = 15;
        $tarea->Fecha = '2023/01/19';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuración de la carpeta archivo (expedientes antiguos)";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 15;
        $tarea->Fecha = '2023/01/19';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuración de la carpeta archivo (expedientes antiguos)";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 13;
        $tarea->Tiempo = 15;
        $tarea->Fecha = '2023/01/19';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Consulta sobre correo electronico y configuracion de carpetas 2022 y 2023 de TEAMS";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 25;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/20';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Actualizacion autofirma";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 26;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/20';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion de la carpeta 2017(archivo) y desbloquearla para poder editarla, queda pendiente replicar los
        cambios y volver a bloquear";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 6;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/20';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Programa Compliance Jurídico";
        $tarea->agenda_tipo_id = 3;
        $tarea->agenda_destinatario_id = 16;
        //$tarea->Tiempoestimado = 240;
        //$tarea->Fecha = '2023/01/23';
        //$tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        //$tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        //$tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        //$tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Reconfigurar routers para salir todos por el Synology, reservar todas las ips y quitar asignacion de ips automaticas";
        $tarea->agenda_tipo_id = 3;
        $tarea->agenda_destinatario_id = 16;
        //$tarea->Tiempoestimado = 240;
        //$tarea->Fecha = '2023/01/23';
        //$tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        //$tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        //$tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        //$tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();


        $tarea = new Tarea();
        $tarea->Tarea = "Configuración doble factor 365 GAR";
        $tarea->agenda_tipo_id = 3;
        $tarea->agenda_destinatario_id = 16;
        //$tarea->Tiempoestimado = 240;
        //$tarea->Fecha = '2023/01/23';
        //$tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        //$tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        //$tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        //$tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuración doble factor 365 TLA";
        $tarea->agenda_tipo_id = 3;
        $tarea->agenda_destinatario_id = 15;
        //$tarea->Tiempoestimado = 240;
        //$tarea->Fecha = '2023/01/23';
        //$tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        //$tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        //$tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        //$tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        //TODO: Tareas en tiempo real que voy añadiendo al seed para no perder

        $tarea = new Tarea();
        $tarea->Tarea = "Cambio de VPN de Valencia a Alicante y configuracion delas carpertas de Alicante";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 18;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/23';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Informe sobre Qloudea para enviar al Colegio de Economistas ";
        $tarea->agenda_tipo_id = 5;
        $tarea->agenda_destinatario_id = 16;
        $tarea->Tiempoestimado = 45;
        //$tarea->Fecha = '2023/01/23';
        //$tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        //$tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        //$tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        //$tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Informe nuevo de facturacion de Paco Sempere";
        $tarea->agenda_tipo_id = 5;
        $tarea->agenda_destinatario_id = 16;
        $tarea->Tiempoestimado = 240;
        //$tarea->Fecha = '2023/01/23';
        //$tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        //$tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        //$tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        //$tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Solucionar problema de SAGE en contabilidad que le sale a Marcelino";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 16;
        $tarea->Tiempo = 45;
        $tarea->Fecha = '2023/01/23';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();


        $tarea = new Tarea();
        $tarea->Tarea = "No funciona el raton del portatil, estaba roto";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 1;
        $tarea->Tiempo = 20;
        $tarea->Fecha = '2023/01/24';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Ha eliminado sin querer la carpeta 2023, actualizaciones pendientes de W11";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 19;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/24';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Se ha perdido una carpeta de 2018 exp.176 Paul Morris. No se ha podido recuperar de momento";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 6;
        $tarea->Tiempo = 45;
        $tarea->Fecha = '2023/01/24';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Editar video tutorial de Toni";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 16;
        $tarea->Tiempo = 40;
        $tarea->Fecha = '2023/01/25';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Revision contraseña office 365";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 11;
        $tarea->Tiempo = 10;
        $tarea->Fecha = '2023/01/26';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Error en descarga de certificado, no se ha podido solucionar";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 9;
        $tarea->Tiempo = 10;
        $tarea->Fecha = '2023/01/26';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Reinstalar VPN";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 2;
        $tarea->Tiempo = 10;
        $tarea->Fecha = '2023/01/26';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Configuracion de correo alias en Mn para poder enviar desde tlacorp y tlaconsultance";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 4;
        $tarea->Tiempo = 30;
        $tarea->Fecha = '2023/01/27';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Problema con el formulario de contacto de spanishsolicitors";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 15;
        $tarea->Tiempoestimado = 40;
        $tarea->Fecha = '2023/01/27';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();

        $tarea = new Tarea();
        $tarea->Tarea = "Instalacion de la impresora de Javea";
        $tarea->agenda_tipo_id = 1;
        $tarea->agenda_destinatario_id = 5;
        $tarea->Tiempoestimado = 20;
        $tarea->Fecha = '2023/01/27';
        $tarea->Dia = intval(date('d',strtotime($tarea->Fecha)));
        $tarea->Mes = intval(date('m',strtotime($tarea->Fecha)));
        $tarea->Ano = intval(date('y',strtotime($tarea->Fecha)));
        $tarea->Semana = intval(date('W',strtotime($tarea->Fecha)));
        $tarea->save();


    }
}

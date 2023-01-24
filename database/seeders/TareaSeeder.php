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
        $tarea->Tarea = "Editar video tutorial de Toni";
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
    }
}

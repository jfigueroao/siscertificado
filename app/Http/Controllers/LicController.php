<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;
/* use App\Models\User; */

class LicController extends Controller
{
    
    public function index(){

        return view('licencias/regusuario');
    }

    public function visualizar(){

/*         return view('licencias/visualizar'); */
        $registro = registro::orderBy('id', 'desc')
                        ->get();

        return view('licencias/visualizar', compact('registro'));
    }

    public function registrarLic(){

        /* get_date(); */
        /* año actual */

        $insertTicket = new registro();

        $insertTicket->periodo = '2023';

        $insertTicket->vigencia = request('vigencia');
        $insertTicket->natJurid = request('natJurid');
        $insertTicket->expediente = request('expediente');
        $insertTicket->asunto = request('asunto');
        $insertTicket->fechaExped = request('fechaExped');
        $insertTicket->apeNombre = request('apeNombre');
        $insertTicket->resolucion = request('resolucion');
        $insertTicket->ruc = request('ruc');
        $insertTicket->telefono = request('telefono');
        $insertTicket->dni = request('dni');
        $insertTicket->repLegal = request('repLegal');
        $insertTicket->dniRepLegal = request('dniRepLegal');
        $insertTicket->dirEstable = request('dirEstable');
        $insertTicket->nomComercial = request('nomComercial');
        $insertTicket->numero = request('numero');
        $insertTicket->int = request('int');
        $insertTicket->manzana = request('manzana');
        $insertTicket->lote = request('lote');
        $insertTicket->cSect = request('cSect');
        $insertTicket->sector = request('sector');
        $insertTicket->zona = request('zona');
        $insertTicket->area = request('area');
        $insertTicket->giroEstable = request('giroEstable');
        $insertTicket->nivelRiesgo = request('nivelRiesgo');
        $insertTicket->zonificacion = request('zonificacion');
        $insertTicket->estable = request('estable');
        $insertTicket->observacion = request('observacion');
        $insertTicket->reciboPago = request('reciboPago');
        $insertTicket->fechaPago = request('fechaPago');
        $insertTicket->importe = request('importe');

        $insertTicket->save();

        var_dump($insertTicket);

        return redirect('/home');

        /* return view('licencias/regusuario', compact('registro')); */
    }
}

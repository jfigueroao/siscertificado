<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licencias', function (Blueprint $table) {

            $table->id();

            /* $table->string('nroLicencia');
            $table->string('periodo');
            $table->string('codTipoAutoriz');
            $table->string('tiempoVigencia');
            $table->string('horarioAtencion');
            $table->string('nroExpediente');
            $table->string('nroResolucion');
            $table->string('solicitante');
            $table->string('ruc');
            $table->string('correo');
            $table->string('telefono');
            $table->string('nroDi');
            $table->string('direccion');
            $table->string('interior');
            $table->string('nro');
            $table->string('mz');
            $table->string('lt');
            $table->string('codSector');
            $table->string('aahhCprOtros');
            $table->string('repreNombre');
            $table->string('repreNroDi');
            $table->string('repreTelefono');
            $table->string('dirEstable');
            $table->string('nroEstable');
            $table->string('intEstable');
            $table->string('mzEstable');
            $table->string('ltEstable');
            $table->string('codSectorEstable');
            $table->string('aahhCprOtrosEstable'); */
            $table->string('nombreEstable');
            $table->string('areaLocal');
            $table->string('codSectorEco');
            $table->string('nroTrabaj');
            $table->string('nroEstac');
            $table->string('manMateriales');
            $table->string('nroCertifCanje');
            $table->string('nroResolCanje');
            $table->string('nroExpedCanje');
            $table->string('fechaExpedCanje');
            $table->string('otrasRef');
            $table->string('codClasiGiro');
            $table->string('codCondicionLocal');
            $table->string('propInmueble');
            $table->string('codUsuario');
            $table->string('codOficina');
            $table->string('nomUsuario');
            $table->string('desOficina');
            $table->string('bitacora');
            $table->string('anulado');
            $table->string('observaciones');
            $table->string('baja');
            $table->string('docBaja');
            $table->string('fechaDocBaja');
            $table->string('repreBaja');
            $table->string('observacionesBaja');
            $table->string('codUsuarioModif');
            $table->string('codOficinaModif');
            $table->string('nomUsuarioModif');
            $table->string('desOficinaModif');
            $table->string('bitacoraModif');
            $table->string('fechaIngExp');
            $table->string('codTipoHu');
            $table->string('codTipoVia');
            $table->string('codItse');
            $table->string('codRs');
            $table->string('fechaResol');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('licencias');

    }
};

<?php

/*
 * Nombre: Daniel Godoy, Dante Salcedo, Francisco Herrera 
 * CopyRight
 */

class Envio {
    /*
     * setDTE(object): son los documentos con una caratula y varios DTE
     * signature(object): firma del envio completo
     * attributes(list(Object)): lista de object type Attribute 
     */

    public $setDTE, $signature, $attributes;

    public function __construct($sDTE, $sign, $attributes) {
        $this->setDTE = $sDTE;
        $this->signature = $sign;
        $this->attributes = $attributes;
    }

    public function getSetDTE() {
        return $this->setDTE;
    }

    public function setSetDTE($setDTE) {
        $this->setDTE = $setDTE;
    }

    public function getSignature() {
        return $this->signature;
    }

    public function setSignature($signature) {
        $this->signature = $signature;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class SetDTE {
    /*
     * caratula(object): encabezado del envio
     * dte(object): ***conjunto*** (lista o arreglo) de documentos tributarios
     * attributes(list(object)) : lista de objetos Attribute
     */

    public $caratula, $dte , $attributes;

    public function __construct($cara, $dtee, $attributes) {
        $this->caratula = $cara;
        $this->dte = $dtee;
        $this->attributes = $attributes;
    }

    public function getCaratula() {
        return $this->caratula;
    }

    public function setCaratula($caratula) {
        $this->caratula = $caratula;
    }

    public function getDte() {
        return $this->dte;
    }

    public function setDte($dte) {
        $this->dte = $dte;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class Caratula {
    /*
     * rutEmisor, rutEnvia, rutReceptor, fchResol, nroResol, tmstfirmaEnv:
     *                   variables obligatorias string
     * subtotDTE(object): ***conjunto*** Uno o más Subtotales por tipo de DTE
     */

    public $rutEmisor, $rutEnvia, $rutReceptor, $fchResol, $nroResol,
            $tmstFirmaEnv, $subtotDTE, $attributes;

    public function __construct($rEmisor,$rEnvia,$rReceptor,$fResol,
            $nResol,$tmstFormaEnvia,$subTotalDTE,$attributes) {
        $this->rutEmisor = $rEmisor;
        $this->rutEnvia = $rEnvia;
        $this->rutReceptor = $rReceptor;
        $this->fchResol = $fResol;
        $this->nroResol = $nResol;
        $this->tmstFirmaEnv = $tmstFormaEnvia;
        $this->subtotDTE = $subTotalDTE;
        $this->attributes = $attributes;
    }

    public function getRutEmisor() {
        return $this->rutEmisor;
    }

    public function setRutEmisor($rutEmisor) {
        $this->rutEmisor = $rutEmisor;
    }

    public function getRutEnvia() {
        return $this->rutEnvia;
    }

    public function setRutEnvia($rutEnvia) {
        $this->rutEnvia = $rutEnvia;
    }

    public function getRutReceptor() {
        return $this->rutReceptor;
    }

    public function setRutReceptor($rutReceptor) {
        $this->rutReceptor = $rutReceptor;
    }

    public function getFchResol() {
        return $this->fchResol;
    }

    public function setFchResol($fchResol) {
        $this->fchResol = $fchResol;
    }

    public function getNroResol() {
        return $this->nroResol;
    }

    public function setNroResol($nroResol) {
        $this->nroResol = $nroResol;
    }

    public function getTmstFirmaEnv() {
        return $this->tmstFirmaEnv;
    }

    public function setTmstFirmaEnv($tmstFirmaEnv) {
        $this->tmstFirmaEnv = $tmstFirmaEnv;
    }

    public function getSubtotDTE() {
        return $this->subtotDTE;
    }

    public function setSubtotDTE($subtotDTE) {
        $this->subtotDTE = $subtotDTE;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class SubTotalDTE {
    /*
     * tpoDTE: tipo de DTE enviado (string)
     * nroDTE: cantidad de DTEs eviados (string)
     */

    public $tpoDTE, $nroDTE;

    public function __construct($tipoDTE, $numeroDTE) {
        $this->tpoDTE = $tipoDTE;
        $this->nroDTE = $numeroDTE;
    }

    public function getTpoDTE() {
        return $this->tpoDTE;
    }

    public function setTpoDTE($tpoDTE) {
        $this->tpoDTE = $tpoDTE;
    }

    public function getNroDTE() {
        return $this->nroDTE;
    }

    public function setNroDTE($nroDTE) {
        $this->nroDTE = $nroDTE;
    }

}

class DTE {
    /*
     * infTrib(object): puede ser Documento, Liquidacion, Exportaciones
     * signature(object): firma de este documento
     */

    public $infTrib, $signature, $attributes;

    public function __construct($inforTrib, $signa, $attributes) {
        $this->infTrib = $inforTrib;
        $this->signature = $signa;
        $this->attributes = $attributes;
    }

    public function getInfTrib() {
        return $this->infTrib;
    }

    public function setInfTrib($infTrib) {
        $this->infTrib = $infTrib;
    }

    public function getSignature() {
        return $this->signature;
    }

    public function setSignature($signature) {
        $this->signature = $signature;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }
   

}

// class DTE {
//     /*
//      * infTrib(object): puede ser Documento, Liquidacion, Exportaciones
//      * signature(object): firma de este documento
//      * typeInfTrib (String): Olbigatorio 1:"Documento" 2:"Liquidacion" 3:"Exportaciones"
//      */

//     public $infTrib, $signature, $attributes, $typeInfTrib;

//     public function __construct($inforTrib, $signa, $attributes, $typeInfTrib) {
//         $this->infTrib = $inforTrib;
//         $this->signature = $signa;
//         $this->attributes = $attributes;
//         $this->typeInfTrib = $typeInfTrib;
//     }

//     public function getInfTrib() {
//         return $this->infTrib;
//     }

//     public function setInfTrib($infTrib) {
//         $this->infTrib = $infTrib;
//     }

//     public function getSignature() {
//         return $this->signature;
//     }

//     public function setSignature($signature) {
//         $this->signature = $signature;
//     }

//     public function getAttributes() {
//         return $this->attributes;
//     }

//     public function setAttributes($attributes) {
//         $this->attributes = $attributes;
//     }
//     public function getTypeInfTrib() {
//         return $this->typeInfTrib;
//     }

//     public function setTypeInfTrib($typeInfTrib) {
//         $this->typeInfTrib = $typeInfTrib;
//     }

// }

class Documento {
    /*
     *  encabezado (object): identificacion y totales del documento
     * detalle (object):***conjunto***  detalle de itemes del documento
     * subTotInfo (object, no obligatorio): subtotales informativos
     * dscRcgGlobal (objact, no obligatorio): descuencots de otrs docuentos
     *                                        referenciados por docu
     * referencia (object, no obligatorio): identificacion de docs referenciados
     *                                      por Doc
     * comisiones (object, no obligatorio): comisiones y otros cargos
     * ted (object): timbre electronico de DTE, string
     * tmstFirma: fecha y hora, string
     */

    public $encabezado, $detalle, $ted, $tmstFirma;
    public $subTotInfo, $dscRcgGlobal, $referencia, $comisiones, $attributes;

    public function __construct($encabe, $detall, $ted_, $tFirma, $attributes) {
        $this->encabezado = $encabe;
        $this->detalle = $detall;
        $this->subTotInfo = NULL;
        $this->dscRcgGlobal = NULL;
        $this->referencia = NULL;
        $this->comisiones = NULL;
        $this->ted = $ted_;
        $this->tmstFirma = $tFirma;
        $this->attributes = $attributes;
    }

    public function getEncabezado() {
        return $this->encabezado;
    }

    public function setEncabezado($encabezado) {
        $this->encabezado = $encabezado;
    }

    public function getDetalle() {
        return $this->detalle;
    }

    public function setDetalle($detalle) {
        $this->detalle = $detalle;
    }

    public function getTed() {
        return $this->ted;
    }

    public function setTed($ted) {
        $this->ted = $ted;
    }

    public function getTmstFirma() {
        return $this->tmstFirma;
    }

    public function setTmstFirma($tmstFirma) {
        $this->tmstFirma = $tmstFirma;
    }

    public function getSubTotInfo() {
        return $this->subTotInfo;
    }

    public function setSubTotInfo($subTotInfo) {
        $this->subTotInfo = $subTotInfo;
    }

    public function getDscRcgGlobal() {
        return $this->dscRcgGlobal;
    }

    public function setDscRcgGlobal($dscRcgGlobal) {
        $this->dscRcgGlobal = $dscRcgGlobal;
    }

    public function getReferencia() {
        return $this->referencia;
    }

    public function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    public function getComisiones() {
        return $this->comisiones;
    }

    public function setComisiones($comisiones) {
        $this->comisiones = $comisiones;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class Encabezado {
    /*
     * idDoc:
     * emisor:
     * rutMandante:
     * receptor:
     * rutSolicita:
     * transporte:
     * totales:
     * otraMoneda:
     */

    public $idDoc, $emisor, $rutMandante, $receptor, $rutSolicita, $transporte,
            $totales, $otraMoneda;

    public function __construct($idDocu, $emi, $recept, $total) {
        $this->idDoc = $idDocu;
        $this->emisor = $emi;
        $this->rutMandante = NULL;
        $this->receptor = $recept;
        $this->rutSolicita = NULL;
        $this->transporte = NULL;
        $this->totales = $total;
        $this->otraMoneda = NULL;
    }

    public function getIdDoc() {
        return $this->idDoc;
    }

    public function setIdDoc($idDoc) {
        $this->idDoc = $idDoc;
    }

    public function getEmisor() {
        return $this->emisor;
    }

    public function setEmisor($emisor) {
        $this->emisor = $emisor;
    }

    public function getRutMandante() {
        return $this->rutMandante;
    }

    public function setRutMandante($rutMandante) {
        $this->rutMandante = $rutMandante;
    }

    public function getReceptor() {
        return $this->receptor;
    }

    public function setReceptor($receptor) {
        $this->receptor = $receptor;
    }

    public function getRutSolicita() {
        return $this->rutSolicita;
    }

    public function setRutSolicita($rutSolicita) {
        $this->rutSolicita = $rutSolicita;
    }

    public function getTransporte() {
        return $this->transporte;
    }

    public function setTransporte($transporte) {
        $this->transporte = $transporte;
    }

    public function getTotales() {
        return $this->totales;
    }

    public function setTotales($totales) {
        $this->totales = $totales;
    }

    public function getOtraMoneda() {
        return $this->otraMoneda;
    }

    public function setOtraMoneda($otraMoneda) {
        $this->otraMoneda = $otraMoneda;
    }

}

class IdDOC {
    /*
     * TipoDTE, Folio, FchEmis, IndNoRebaja, TipoDespacho, IndTraslado,
     * TpoImpresion, IndServicio, MntBruto, FmaPago, FmaPagExp, FchCancel,
     * MntCancel, SaldoInsol, MntPagos, PeriodoDesde, PeriodoHasta, MedioPago,
     * TpoCtaPago, NumCtaPago, BcoPago, TermPagoCdg, TermPagoGlosa, TermPagoDias,
     * FchVenc
     */

    public $tipoDTE, $folio, $fchEmis, $indNoRebaja, $tipoDespacho, $indTraslado,
            $tpoImpresion, $indServicio, $mntBruto, $fmaPago, $fmaPagExp, $fchCancel,
            $mntCancel, $saldoInsol, $mntPagos, $periodoDesde, $periodoHasta,
            $medioPago, $tpoCtaPago, $numCtaPago, $bcoPago, $termPagoCdg,
            $termPagoGlosa, $termPagoDias, $fchVenc;

    public function __construct($tipoDTE, $Folio, $fchEmisor) {
        $this->tipoDTE = $tipoDTE;
        $this->folio = $Folio;
        $this->fchEmis = $fchEmisor;
        $this->indNoRebaja = NULL;
        $this->tipoDespacho = NULL;
        $this->indTraslado = NULL;
        $this->tpoImpresion = NULL;
        $this->indServicio = NULL;
        $this->mntBruto = NULL;
        $this->fmaPago = NULL;
        $this->fmaPagExp = NULL;
        $this->fchCancel = NULL;
        $this->mntCancel = NULL;
        $this->saldoInsol = NULL;
        $this->mntPagos = NULL;
        $this->periodoDesde = NULL;
        $this->periodoHasta = NULL;
        $this->medioPago = NULL;
        $this->tpoCtaPago = NULL;
        $this->numCtaPago = NULL;
        $this->bcoPago = NULL;
        $this->termPagoCdg = NULL;
        $this->termPagoGlosa = NULL;
        $this->termPagoDias = NULL;
        $this->fchVenc = NULL;
    }

    public function getTipoDTE() {
        return $this->tipoDTE;
    }

    public function setTipoDTE($tipoDTE) {
        $this->tipoDTE = $tipoDTE;
    }

    public function getFolio() {
        return $this->folio;
    }

    public function setFolio($folio) {
        $this->folio = $folio;
    }

    public function getFchEmis() {
        return $this->fchEmis;
    }

    public function setFchEmis($fchEmis) {
        $this->fchEmis = $fchEmis;
    }

    public function getIndNoRebaja() {
        return $this->indNoRebaja;
    }

    public function setIndNoRebaja($indNoRebaja) {
        $this->indNoRebaja = $indNoRebaja;
    }

    public function getTipoDespacho() {
        return $this->tipoDespacho;
    }

    public function setTipoDespacho($tipoDespacho) {
        $this->tipoDespacho = $tipoDespacho;
    }

    public function getIndTraslado() {
        return $this->indTraslado;
    }

    public function setIndTraslado($indTraslado) {
        $this->indTraslado = $indTraslado;
    }

    public function getTpoImpresion() {
        return $this->tpoImpresion;
    }

    public function setTpoImpresion($tpoImpresion) {
        $this->tpoImpresion = $tpoImpresion;
    }

    public function getIndServicio() {
        return $this->indServicio;
    }

    public function setIndServicio($indServicio) {
        $this->indServicio = $indServicio;
    }

    public function getMntBruto() {
        return $this->mntBruto;
    }

    public function setMntBruto($mntBruto) {
        $this->mntBruto = $mntBruto;
    }

    public function getFmaPago() {
        return $this->fmaPago;
    }

    public function setFmaPago($fmaPago) {
        $this->fmaPago = $fmaPago;
    }

    public function getFmaPagExp() {
        return $this->fmaPagExp;
    }

    public function setFmaPagExp($fmaPagExp) {
        $this->fmaPagExp = $fmaPagExp;
    }

    public function getFchCancel() {
        return $this->fchCancel;
    }

    public function setFchCancel($fchCancel) {
        $this->fchCancel = $fchCancel;
    }

    public function getMntCancel() {
        return $this->mntCancel;
    }

    public function setMntCancel($mntCancel) {
        $this->mntCancel = $mntCancel;
    }

    public function getSaldoInsol() {
        return $this->saldoInsol;
    }

    public function setSaldoInsol($saldoInsol) {
        $this->saldoInsol = $saldoInsol;
    }

    public function getMntPagos() {
        return $this->mntPagos;
    }

    public function setMntPagos($mntPagos) {
        $this->mntPagos = $mntPagos;
    }

    public function getPeriodoDesde() {
        return $this->periodoDesde;
    }

    public function setPeriodoDesde($periodoDesde) {
        $this->periodoDesde = $periodoDesde;
    }

    public function getPeriodoHasta() {
        return $this->periodoHasta;
    }

    public function setPeriodoHasta($periodoHasta) {
        $this->periodoHasta = $periodoHasta;
    }

    public function getMedioPago() {
        return $this->medioPago;
    }

    public function setMedioPago($medioPago) {
        $this->medioPago = $medioPago;
    }

    public function getTpoCtaPago() {
        return $this->tpoCtaPago;
    }

    public function setTpoCtaPago($tpoCtaPago) {
        $this->tpoCtaPago = $tpoCtaPago;
    }

    public function getNumCtaPago() {
        return $this->numCtaPago;
    }

    public function setNumCtaPago($numCtaPago) {
        $this->numCtaPago = $numCtaPago;
    }

    public function getBcoPago() {
        return $this->bcoPago;
    }

    public function setBcoPago($bcoPago) {
        $this->bcoPago = $bcoPago;
    }

    public function getTermPagoCdg() {
        return $this->termPagoCdg;
    }

    public function setTermPagoCdg($termPagoCdg) {
        $this->termPagoCdg = $termPagoCdg;
    }

    public function getTermPagoGlosa() {
        return $this->termPagoGlosa;
    }

    public function setTermPagoGlosa($termPagoGlosa) {
        $this->termPagoGlosa = $termPagoGlosa;
    }

    public function getTermPagoDias() {
        return $this->termPagoDias;
    }

    public function setTermPagoDias($termPagoDias) {
        $this->termPagoDias = $termPagoDias;
    }

    public function getFchVenc() {
        return $this->fchVenc;
    }

    public function setFchVenc($fchVenc) {
        $this->fchVenc = $fchVenc;
    }

}

class MntPagos {
    /*
     * fchPago: fecha de pago string obligatorio
     * mntPago: monto de pago string obligatorio
     * glosaPagos: no obligatorio
     */

    public $fchPago, $mntPago, $glosaPagos;

    public function __construct($fechaPago, $mntPago) {
        $this->fchPago = $fechaPago;
        $this->mntPago = $mntPago;
        $this->glosaPagos = NULL;
    }

    public function getFchPago() {
        return $this->fchPago;
    }

    public function setFchPago($fchPago) {
        $this->fchPago = $fchPago;
    }

    public function getMntPago() {
        return $this->mntPago;
    }

    public function setMntPago($mntPago) {
        $this->mntPago = $mntPago;
    }

    public function getGlosaPagos() {
        return $this->glosaPagos;
    }

    public function setGlosaPagos($glosaPagos) {
        $this->glosaPagos = $glosaPagos;
    }

}

class Emisor {
    /*
     * rutEmisor: rut emisor del dte, string obligatorio
     * rznSoc: nombre o razon social del emisor, string obligatorio
     * giroEmis: giro comercial del emisor, string obligatorio
     * telefono: ***conjunto 0..2*** no obligatorio
     * correoEmisor: no obligatorio
     * acteco: ***conjunto 1..4 *** obligatorio
     * guiaExport(object): guia de despacho para exportacion, no obligatorio
     * sucursal: string no obligatorio
     * cdgSIISucur: string no obligatorio
     * dirOrigen: string no obligatorio
     * cmnaOrigen: string no obligatorio
     * ciudadOrigen: string no obligatorio
     * cdgVendedor: string no obligatorio
     * idAdicEmisor: string no obligatorio
     */

    public $rutEmisor, $rznSoc, $giroEmis, $telefono, $correoEmisor, $acteco,
            $guiaExport, $sucursal, $cdgSIISucur, $dirOrigen, $cmnaOrigen,
            $ciudadOrigen, $cdgVendedor, $idAdicEmisor;

    public function __construct($RutEmisor, $razonSoc, $giroEmisor, $Acteco) {
        $this->rutEmisor = $RutEmisor;
        $this->rznSoc = $razonSoc;
        $this->giroEmis = $giroEmisor;
        $this->telefono = NULL;
        $this->correoEmisor = NULL;
        $this->acteco = $Acteco;
        $this->guiaExport = NULL;
        $this->sucursal = NULL;
        $this->cdgSIISucur = NULL;
        $this->dirOrigen = NULL;
        $this->cmnaOrigen = NULL;
        $this->ciudadOrigen = NULL;
        $this->cdgVendedor = NULL;
        $this->idAdicEmisor = NULL;
    }

    public function getRutEmisor() {
        return $this->rutEmisor;
    }

    public function setRutEmisor($rutEmisor) {
        $this->rutEmisor = $rutEmisor;
    }

    public function getRznSoc() {
        return $this->rznSoc;
    }

    public function setRznSoc($rznSoc) {
        $this->rznSoc = $rznSoc;
    }

    public function getGiroEmis() {
        return $this->giroEmis;
    }

    public function setGiroEmis($giroEmis) {
        $this->giroEmis = $giroEmis;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    public function getCorreoEmisor() {
        return $this->correoEmisor;
    }

    public function setCorreoEmisor($correoEmisor) {
        $this->correoEmisor = $correoEmisor;
    }

    public function getActeco() {
        return $this->acteco;
    }

    public function setActeco($acteco) {
        $this->acteco = $acteco;
    }

    public function getGuiaExport() {
        return $this->guiaExport;
    }

    public function setGuiaExport($guiaExport) {
        $this->guiaExport = $guiaExport;
    }

    public function getSucursal() {
        return $this->sucursal;
    }

    public function setSucursal($sucursal) {
        $this->sucursal = $sucursal;
    }

    public function getCdgSIISucur() {
        return $this->cdgSIISucur;
    }

    public function setCdgSIISucur($cdgSIISucur) {
        $this->cdgSIISucur = $cdgSIISucur;
    }

    public function getDirOrigen() {
        return $this->dirOrigen;
    }

    public function setDirOrigen($dirOrigen) {
        $this->dirOrigen = $dirOrigen;
    }

    public function getCmnaOrigen() {
        return $this->cmnaOrigen;
    }

    public function setCmnaOrigen($cmnaOrigen) {
        $this->cmnaOrigen = $cmnaOrigen;
    }

    public function getCiudadOrigen() {
        return $this->ciudadOrigen;
    }

    public function setCiudadOrigen($ciudadOrigen) {
        $this->ciudadOrigen = $ciudadOrigen;
    }

    public function getCdgVendedor() {
        return $this->cdgVendedor;
    }

    public function setCdgVendedor($cdgVendedor) {
        $this->cdgVendedor = $cdgVendedor;
    }

    public function getIdAdicEmisor() {
        return $this->idAdicEmisor;
    }

    public function setIdAdicEmisor($idAdicEmisor) {
        $this->idAdicEmisor = $idAdicEmisor;
    }

}

class GuiaExport {
    /*
     * cdgTranslado: no obligatorio
     * folioAut: no obligatorio
     * fchAut: no obligatorio
     */

    public $cdgTranslado, $folioAut, $fchAut;

    public function __construct() {
        $this->cdgTranslado = NULL;
        $this->folioAut = NULL;
        $this->fchAut = NULL;
    }

    public function getCdgTranslado() {
        return $this->cdgTranslado;
    }

    public function setCdgTranslado($cdgTranslado) {
        $this->cdgTranslado = $cdgTranslado;
    }

    public function getFolioAut() {
        return $this->folioAut;
    }

    public function setFolioAut($folioAut) {
        $this->folioAut = $folioAut;
    }

    public function getFchAut() {
        return $this->fchAut;
    }

    public function setFchAut($fchAut) {
        $this->fchAut = $fchAut;
    }

}

class Receptor {
    /*
     * rutReceptor: string obligatorio
     * cdgIntRecep: codigo interno receptor, no obligatorio
     * rznSocRecep: nombre o razon social del receptor, string obligatorio
     * extranjero(object): receptor extranjero no obligatorio 
     * giroRecep: giro comercial del receptor, string no obligatorio
     * contacto:telefono o email no obligatorio
     * correoRecep: no obligatorio
     * dirRecep: string no obligatorio
     * cmnaRecep: string no obligatorio
     * ciudadRecep: string no obligatorio
     * dirPostal: string no obligatorio
     * cmnaPostal: string no obligatorio
     * ciudadPostal: string no obligatorio
     */

    public $rutReceptor, $cdgIntRecep, $rznSocRecep, $extranjero, $giroRecep,
            $contacto, $correoRecep, $dirRecep, $cmnaRecep, $ciudadRecep, $dirPostal,
            $cmnaPostal, $ciudadPostal;

    public function __construct($rutRecep, $rznSocRecep) {
        $this->rutReceptor = $rutRecep;
        $this->cdgIntRecep = NULL;
        $this->rznSocRecep = $rznSocRecep;
        $this->extranjero = NULL;
        $this->giroRecep = NULL;
        $this->contacto = NULL;
        $this->correoRecep = NULL;
        $this->dirRecep = NULL;
        $this->cmnaRecep = NULL;
        $this->ciudadRecep = NULL;
        $this->dirPostal = NULL;
        $this->cmnaPostal = NULL;
        $this->ciudadPostal = NULL;
    }

    public function getRutReceptor() {
        return $this->rutReceptor;
    }

    public function setRutReceptor($rutReceptor) {
        $this->rutReceptor = $rutReceptor;
    }

    public function getCdgIntRecep() {
        return $this->cdgIntRecep;
    }

    public function setCdgIntRecep($cdgIntRecep) {
        $this->cdgIntRecep = $cdgIntRecep;
    }

    public function getRznSocRecep() {
        return $this->rznSocRecep;
    }

    public function setRznSocRecep($rznSocRecep) {
        $this->rznSocRecep = $rznSocRecep;
    }

    public function getExtranjero() {
        return $this->extranjero;
    }

    public function setExtranjero($extranjero) {
        $this->extranjero = $extranjero;
    }

    public function getGiroRecep() {
        return $this->giroRecep;
    }

    public function setGiroRecep($giroRecep) {
        $this->giroRecep = $giroRecep;
    }

    public function getContacto() {
        return $this->contacto;
    }

    public function setContacto($contacto) {
        $this->contacto = $contacto;
    }

    public function getCorreoRecep() {
        return $this->correoRecep;
    }

    public function setCorreoRecep($correoRecep) {
        $this->correoRecep = $correoRecep;
    }

    public function getDirRecep() {
        return $this->dirRecep;
    }

    public function setDirRecep($dirRecep) {
        $this->dirRecep = $dirRecep;
    }

    public function getCmnaRecep() {
        return $this->cmnaRecep;
    }

    public function setCmnaRecep($cmnaRecep) {
        $this->cmnaRecep = $cmnaRecep;
    }

    public function getCiudadRecep() {
        return $this->ciudadRecep;
    }

    public function setCiudadRecep($ciudadRecep) {
        $this->ciudadRecep = $ciudadRecep;
    }

    public function getDirPostal() {
        return $this->dirPostal;
    }

    public function setDirPostal($dirPostal) {
        $this->dirPostal = $dirPostal;
    }

    public function getCmnaPostal() {
        return $this->cmnaPostal;
    }

    public function setCmnaPostal($cmnaPostal) {
        $this->cmnaPostal = $cmnaPostal;
    }

    public function getCiudadPostal() {
        return $this->ciudadPostal;
    }

    public function setCiudadPostal($ciudadPostal) {
        $this->ciudadPostal = $ciudadPostal;
    }

}

class Extranjero {
    /*
     * numId: no obligatorio, string
     * nacionalidad: no obligatorio, string
     */

    public $numID, $nacionalidad;

    function __construct() {
        $this->numID = NULL;
        $this->nacionalidad = NULL;
    }

    public function getNumID() {
        return $this->numID;
    }

    public function setNumID($val) {
        $this->numID = $val;
    }

    public function getNacionalidad() {
        return $this->nacionalidad;
    }

    public function setNacionalidad($val) {
        $this->nacionalidad = $val;
    }

}

class Transporte {
    /*
     * patente: no obligatorio
     * rutTrans: no obligatorio
     * chofer(object): no obligatorio
     * dirDest: no obligatorio
     * CmnaDest: no obligatorio
     * ciudadDest: no obligatorio
     * aduana(object): no obligatorio
     */

    public $patente, $rutTrans, $chofer, $dirDest, $CmnaDest, $ciudadDest, $aduana;

    function __construct() {
        $this->patente = NULL;
        $this->rutTrans = NULL;
        $this->chofer = NULL;
        $this->dirDest = NULL;
        $this->CmnaDest = NULL;
        $this->ciudadDest = NULL;
        $this->aduana = NULL;
    }

    public function getPatente() {
        return $this->patente;
    }

    public function setPatente($val) {
        $this->patente = $val;
    }

    public function getRutTrans() {
        return $this->rutTrans;
    }

    public function setRutTrans($val) {
        $this->rutTrans = $val;
    }

    public function getChofer() {
        return $this->chofer;
    }

    public function setChofer($val) {
        $this->chofer = $val;
    }

    public function getDirDest() {
        return $this->dirDest;
    }

    public function setDirDest($val) {
        $this->dirDest = $val;
    }

    public function getCmnaDest() {
        return $this->CmnaDest;
    }

    public function setCmnaDest($val) {
        $this->CmnaDest = $val;
    }

    public function getCiudadDest() {
        return $this->ciudadDest;
    }

    public function setCiudadDest($val) {
        $this->ciudadDest = $val;
    }

    public function getAduana() {
        return $this->aduana;
    }

    public function setAduana($val) {
        $this->aduana = $val;
    }

}

class Chofer {
    /*
     * rutChofer: obligatorio
     * nombreChofer: obligatorio
     */

    public $rutChofer, $nombreChofer;

    function __construct($rutChofer, $nombreChofer) {
        $this->rutChofer = $rutChofer;
        $this->nombreChofer = $nombreChofer;
    }

    public function getRutChofer() {
        return $this->rutChofer;
    }

    public function setRutChofer($rutChofer) {
        $this->rutChofer = $rutChofer;
    }

    public function getNombreChofer() {
        return $this->nombreChofer;
    }

    public function setNombreChofer($nombreChofer) {
        $this->nombreChofer = $nombreChofer;
    }

}

class Aduana {
    /*
     * CodModVenta: no obligatorio
     * CodClauVenta: no obligatorio
     * TotClauVenta: no obligatorio
     * CodViaTransp: no obligatorio
     * NombreTransp: no obligatorio
     * RUTCiaTransp: no obligatorio
     * NomCiaTransp: no obligatorio
     * IdAdicTransp: no obligatorio
     * Booking: no obligatorio
     * Operador: no obligatorio
     * CodPtoEmbarque: no obligatorio
     * IdAdicPtoEmb: no obligatorio
     * CodPtoDesemb: no obligatorio
     * IdAdicPtoDesemb: no obligatorio
     * Tara: no obligatorio
     * CodUnidMedTara: no obligatorio
     * PesoBruto: no obligatorio
     * CodUnidPesoBruto: no obligatorio
     * PesoNeto: no obligatorio
     * CodUnidPesoNeto: no obligatorio
     * TotItems: no obligatorio
     * TotBultos: no obligatorio
     * TipoBultos(object):***conjunto 0..10*** no obligatorio
     * MntFlete: no obligatorio
     * MntSeguro: no obligatorio
     * CodPaisRecep: no obligatorio
     * CodPaisDestin: no obligatorio
     */

    public $CodModVenta, $CodClauVenta, $TotClauVenta, $CodViaTransp, $NombreTransp,
            $RUTCiaTransp, $IdAdicTransp, $Booking, $Operador, $CodPtoEmbarque,
            $IdAdicPtoEmb, $CodPtoDesemb, $IdAdicPtoDesemb, $Tara, $CodUnidMedTara,
            $PesoBruto, $CodUnidPesoBruto, $PesoNeto, $CodUnidPesoNeto, $TotItems,
            $TotBultos, $MntFlete, $MntSeguro, $CodPaisRecep, $CodPaisDestin;

    function __construct() {
        $this->CodModVenta = NULL;
        $this->CodClauVenta = NULL;
        $this->TotClauVenta = NULL;
        $this->CodViaTransp = NULL;
        $this->NombreTransp = NULL;
        $this->RUTCiaTransp = NULL;
        $this->IdAdicTransp = NULL;
        $this->Booking = NULL;
        $this->Operador = NULL;
        $this->CodPtoEmbarque = NULL;
        $this->IdAdicPtoEmb = NULL;
        $this->CodPtoDesemb = NULL;
        $this->IdAdicPtoDesemb = NULL;
        $this->Tara = NULL;
        $this->CodUnidMedTara = NULL;
        $this->PesoBruto = NULL;
        $this->CodUnidPesoBruto = NULL;
        $this->PesoNeto = NULL;
        $this->CodUnidPesoNeto = NULL;
        $this->TotItems = NULL;
        $this->TotBultos = NULL;
        $this->MntFlete = NULL;
        $this->MntSeguro = NULL;
        $this->CodPaisRecep = NULL;
        $this->CodPaisDestin = NULL;
    }

    public function getCodModVenta() {
        return $this->CodModVenta;
    }

    public function setCodModVenta($val) {
        $this->CodModVenta = $val;
    }

    public function getCodClauVenta() {
        return $this->CodClauVenta;
    }

    public function setCodClauVenta($val) {
        $this->CodClauVenta = $val;
    }

    public function getTotClauVenta() {
        return $this->TotClauVenta;
    }

    public function setTotClauVenta($val) {
        $this->TotClauVenta = $val;
    }

    public function getCodViaTransp() {
        return $this->CodViaTransp;
    }

    public function setCodViaTransp($val) {
        $this->CodViaTransp = $val;
    }

    public function getNombreTransp() {
        return $this->NombreTransp;
    }

    public function setNombreTransp($val) {
        $this->NombreTransp = $val;
    }

    public function getRUTCiaTransp() {
        return $this->RUTCiaTransp;
    }

    public function setRUTCiaTransp($val) {
        $this->RUTCiaTransp = $val;
    }

    public function getIdAdicTransp() {
        return $this->IdAdicTransp;
    }

    public function setIdAdicTransp($val) {
        $this->IdAdicTransp = $val;
    }

    public function getBooking() {
        return $this->Booking;
    }

    public function setBooking($val) {
        $this->Booking = $val;
    }

    public function getOperador() {
        return $this->Operador;
    }

    public function setOperador($val) {
        $this->Operador = $val;
    }

    public function getCodPtoEmbarque() {
        return $this->CodPtoEmbarque;
    }

    public function setCodPtoEmbarque($val) {
        $this->CodPtoEmbarque = $val;
    }

    public function getIdAdicPtoEmb() {
        return $this->IdAdicPtoEmb;
    }

    public function setIdAdicPtoEmb($val) {
        $this->IdAdicPtoEmb = $val;
    }

    public function getCodPtoDesemb() {
        return $this->CodPtoDesemb;
    }

    public function setCodPtoDesemb($val) {
        $this->CodPtoDesemb = $val;
    }

    public function getIdAdicPtoDesemb() {
        return $this->IdAdicPtoDesemb;
    }

    public function setIdAdicPtoDesemb($val) {
        $this->IdAdicPtoDesemb = $val;
    }

    public function getTara() {
        return $this->Tara;
    }

    public function setTara($val) {
        $this->Tara = $val;
    }

    public function getCodUnidMedTara() {
        return $this->CodUnidMedTara;
    }

    public function setCodUnidMedTara($val) {
        $this->CodUnidMedTara = $val;
    }

    public function getPesoBruto() {
        return $this->PesoBruto;
    }

    public function setPesoBruto($val) {
        $this->PesoBruto = $val;
    }

    public function getCodUnidPesoBruto() {
        return $this->CodUnidPesoBruto;
    }

    public function setCodUnidPesoBruto($val) {
        $this->CodUnidPesoBruto = $val;
    }

    public function getPesoNeto() {
        return $this->PesoNeto;
    }

    public function setPesoNeto($val) {
        $this->PesoNeto = $val;
    }

    public function getCodUnidPesoNeto() {
        return $this->CodUnidPesoNeto;
    }

    public function setCodUnidPesoNeto($val) {
        $this->CodUnidPesoNeto = $val;
    }

    public function getTotItems() {
        return $this->TotItems;
    }

    public function setTotItems($val) {
        $this->TotItems = $val;
    }

    public function getTotBultos() {
        return $this->TotBultos;
    }

    public function setTotBultos($val) {
        $this->TotBultos = $val;
    }

    public function getMntFlete() {
        return $this->MntFlete;
    }

    public function setMntFlete($val) {
        $this->MntFlete = $val;
    }

    public function getMntSeguro() {
        return $this->MntSeguro;
    }

    public function setMntSeguro($val) {
        $this->MntSeguro = $val;
    }

    public function getCodPaisRecep() {
        return $this->CodPaisRecep;
    }

    public function setCodPaisRecep($val) {
        $this->CodPaisRecep = $val;
    }

    public function getCodPaisDestin() {
        return $this->CodPaisDestin;
    }

    public function setCodPaisDestin($val) {
        $this->CodPaisDestin = $val;
    }

}

//LINEA 520
class TipoBultos {
    #CodTpoBultos: no obligatorio, string
    #CantBultos: no obligatorio, string
    #Marcas: no obligatorio, string
    #IdContainer: no obligatorio, string
    #Sello: no obligatorio, string
    #EmisorSello: no obligatorio, string

    public $codTpoBultos, $cantBultos, $marcas, $idContainer, $sello, $emisorSello;

    function __construct() {
        $this->codTpoBultos = NULL;
        $this->cantBultos = NULL;
        $this->marcas = NULL;
        $this->idContainer = NULL;
        $this->sello = NULL;
        $this->emisorSello = NULL;
    }

    public function getCodTpoBultos() {
        return $this->codTpoBultos;
    }

    public function setCodTpoBultos($codTpoBultos) {
        $this->codTpoBultos = $codTpoBultos;
    }

    public function getCantBultos() {
        return $this->cantBultos;
    }

    public function setCantBultos($cantBultos) {
        $this->cantBultos = $cantBultos;
    }

    public function getMarcas() {
        return $this->marcas;
    }

    public function setMarcas($marcas) {
        $this->marcas = $marcas;
    }

    public function getIdContainer() {
        return $this->idContainer;
    }

    public function setIdContainer($idContainer) {
        $this->idContainer = $idContainer;
    }

    public function getSello() {
        return $this->sello;
    }

    public function setSello($sello) {
        $this->sello = $sello;
    }

    public function getEmisorSello() {
        return $this->emisorSello;
    }

    public function setEmisorSello($emisorSello) {
        $this->emisorSello = $emisorSello;
    }

}

class Totales {
    #MntNeto: no obligatorio
    #MntExe: no obligatorio
    #MntBase: no obligatorio
    #MntMargenCom: no obligatorio
    #TasaIVA: no obligatorio
    #IVA: no obligatorio
    #IVAProp: no obligatorio
    #IVATerc: no obligatorio
    #ImptoReten(objeto): ***conjunto 0..20 *** no obligatorio
    #IVANoRet: no obligatorio
    #CredEC: no obligatorio
    #GrntDep: no obligatorio
    #Comisiones: no obligatorio
    #MntTotal: -- obligatorio --
    #MontoNF: no obligatorio
    #MontoPeriodo: no obligatorio
    #SaldoAnterior: no obligatorio
    #VlrPagar: no obligatorio

    public $MntNeto, $MntExe, $MntBase, $MntMargenCom, $TasaIVA, $IVA, $IVAProp,
           $IVATerc, $ImptoReten, $IVANoRet, $CredEC, $GrntDep, $Comisiones, $MntTotal,
           $MontoNF, $MontoPeriodo, $SaldoAnterior, $VlrPagar;

    function __construct() {
        $this->MntNeto = NULL;
        $this->MntExe = NULL;
        $this->MntBase = NULL;
        $this->MntMargenCom = NULL;
        $this->TasaIVA = NULL;
        $this->IVA = NULL;
        $this->IVAProp = NULL;
        $this->IVATerc = NULL;
        $this->ImptoReten = NULL;
        $this->IVANoRet = NULL;
        $this->CredEC = NULL;
        $this->GrntDep = NULL;
        $this->Comisiones = NULL;
        $this->MntTotal = NULL;
        $this->MontoNF = NULL;
        $this->MontoPeriodo = NULL;
        $this->SaldoAnterior = NULL;
        $this->VlrPagar = NULL;
    }

    public function getMntNeto() {
        return $this->MntNeto;
    }

    public function setMntNeto($MntNeto) {
        $this->MntNeto = $MntNeto;
    }

    public function getMntExe() {
        return $this->MntExe;
    }

    public function setMntExe($MntExe) {
        $this->MntExe = $MntExe;
    }

    public function getMntBase() {
        return $this->MntBase;
    }

    public function setMntBase($MntBase) {
        $this->MntBase = $MntBase;
    }

    public function getMntMargenCom() {
        return $this->MntMargenCom;
    }

    public function setMntMargenCom($MntMargenCom) {
        $this->MntMargenCom = $MntMargenCom;
    }

    public function getTasaIVA() {
        return $this->TasaIVA;
    }

    public function setTasaIVA($TasaIVA) {
        $this->TasaIVA = $TasaIVA;
    }

    public function getIVA() {
        return $this->IVA;
    }

    public function setIVA($IVA) {
        $this->IVA = $IVA;
    }

    public function getIVAProp() {
        return $this->IVAProp;
    }

    public function setIVAProp($IVAProp) {
        $this->IVAProp = $IVAProp;
    }

    public function getIVATerc() {
        return $this->IVATerc;
    }

    public function setIVATerc($IVATerc) {
        $this->IVATerc = $IVATerc;
    }

    public function getImptoReten() {
        return $this->ImptoReten;
    }

    public function setImptoReten($ImptoReten) {
        $this->ImptoReten = $ImptoReten;
    }

    public function getIVANoRet() {
        return $this->IVANoRet;
    }

    public function setIVANoRet($IVANoRet) {
        $this->IVANoRet = $IVANoRet;
    }

    public function getCredEC() {
        return $this->CredEC;
    }

    public function setCredEC($CredEC) {
        $this->CredEC = $CredEC;
    }

    public function getGrntDep() {
        return $this->GrntDep;
    }

    public function setGrntDep($GrntDep) {
        $this->GrntDep = $GrntDep;
    }

    public function getComisiones() {
        return $this->Comisiones;
    }

    public function setComisiones($Comisiones) {
        $this->Comisiones = $Comisiones;
    }

    public function getMntTotal() {
        return $this->MntTotal;
    }

    public function setMntTotal($MntTotal) {
        $this->MntTotal = $MntTotal;
    }

    public function getMontoNF() {
        return $this->MontoNF;
    }

    public function setMontoNF($MontoNF) {
        $this->MontoNF = $MontoNF;
    }

    public function getMontoPeriodo() {
        return $this->MontoPeriodo;
    }

    public function setMontoPeriodo($MontoPeriodo) {
        $this->MontoPeriodo = $MontoPeriodo;
    }

    public function getSaldoAnterior() {
        return $this->SaldoAnterior;
    }

    public function setSaldoAnterior($SaldoAnterior) {
        $this->SaldoAnterior = $SaldoAnterior;
    }

    public function getVlrPagar() {
        return $this->VlrPagar;
    }

    public function setVlrPagar($VlrPagar) {
        $this->VlrPagar = $VlrPagar;
    }

}

class ImptoReten {
    #tipoImp : string obligatorio
    #tasaImp : no obligatorio
    #montoImp : string obligatorio

    public $tipoImp, $tasaImp, $montoImp;

    function __construct($tipoImp, $montoImp) {
        $this->tipoImp = $tipoImp;
        $this->tasaImp = NULL;
        $this->montoImp = $montoImp;
    }

    public function getTipoImp() {
        return $this->tipoImp;
    }

    public function setTipoImp($tipoImp) {
        $this->tipoImp = $tipoImp;
    }

    public function getTasaImp() {
        return $this->tasaImp;
    }

    public function setTasaImp($tasaImp) {
        $this->tasaImp = $tasaImp;
    }

    public function getMontoImp() {
        return $this->montoImp;
    }

    public function setMontoImp($montoImp) {
        $this->montoImp = $montoImp;
    }

}

class Totales_Comisiones {
    #ValComNeto: no obligatorios
    #ValComExe: no obligatorios
    #ValComIVA: no obligatorio
    public $valComNeto, $valComExe, $valComIVA;

    public function __construct() {
        $this->valComNeto= NULL;
        $this->valComExe= NULL;
        $this->valComIVA = NULL;
    }

    public function getValComNeto() {
        return $this->valComNeto;
    }

    public function getValComExe() {
        return $this->valComExe;
    }

    public function getValComIVA() {
        return $this->valComIVA;
    }
    public function setValComNeto($val) {
        $this->valComNeto= $val;
    }

    public function setValComExe($val) {
        $this->valComExe= $val;
    }

    public function setValComIVA($val) {
        $this->valComIVA= $val;
    }
}

class OtraMoneda {
    #TpoMoneda: --obligatorio 
    #TpoCambio:  no obligatorio
    #MntNetoOtrMnda: no obligatorio 
    #MntExeOtrMnda: no obligatorio 
    #MntFaeCarneOtrMnda: no obligatorio 
    #MntMargComOtrMnda: no obligatorio 
    #IVAOtrMnda: no obligatorio 
    #ImpRetOtrMnda(objeto): ***conjunto 0..20*** no obligatorio 
    #IVANoRetOtrMnda: no obligatorio 
    #MntTotOtrMnda: --obligatorio

    public  $TpoMoneda, $TpoCambio, $MntNetoOtrMnda, $MntExeOtrMnda, $MntFaeCarneOtrMnda, $MntMargComOtrMnda,
            $IVAOtrMnda, $ImpRetOtrMnda, $IVANoRetOtrMnda, $MntTotOtrMnda;

    function __construct($TpoMoneda, $MntTotOtrMnda) {
        $this->TpoMoneda = $TpoMoneda;
        $this->TpoCambio = NULL;
        $this->MntNetoOtrMnda = NULL;
        $this->MntExeOtrMnda = NULL;
        $this->MntFaeCarneOtrMnda = NULL;
        $this->MntMargComOtrMnda = NULL;
        $this->IVAOtrMnda = NULL;
        $this->ImpRetOtrMnda = NULL;
        $this->IVANoRetOtrMnda = NULL;
        $this->MntTotOtrMnda = $MntTotOtrMnda;
    }

    public function getTpoMoneda() {
        return $this->TpoMoneda;
    }

    public function setTpoMoneda($TpoMoneda) {
        $this->TpoMoneda = $TpoMoneda;
    }

    public function getTpoCambio() {
        return $this->TpoCambio;
    }

    public function setTpoCambio($TpoCambio) {
        $this->TpoCambio = $TpoCambio;
    }

    public function getMntNetoOtrMnda() {
        return $this->MntNetoOtrMnda;
    }

    public function setMntNetoOtrMnda($MntNetoOtrMnda) {
        $this->MntNetoOtrMnda = $MntNetoOtrMnda;
    }

    public function getMntExeOtrMnda() {
        return $this->MntExeOtrMnda;
    }

    public function setMntExeOtrMnda($MntExeOtrMnda) {
        $this->MntExeOtrMnda = $MntExeOtrMnda;
    }

    public function getMntFaeCarneOtrMnda() {
        return $this->MntFaeCarneOtrMnda;
    }

    public function setMntFaeCarneOtrMnda($MntFaeCarneOtrMnda) {
        $this->MntFaeCarneOtrMnda = $MntFaeCarneOtrMnda;
    }

    public function getMntMargComOtrMnda() {
        return $this->MntMargComOtrMnda;
    }

    public function setMntMargComOtrMnda($MntMargComOtrMnda) {
        $this->MntMargComOtrMnda = $MntMargComOtrMnda;
    }

    public function getIVAOtrMnda() {
        return $this->IVAOtrMnda;
    }

    public function setIVAOtrMnda($IVAOtrMnda) {
        $this->IVAOtrMnda = $IVAOtrMnda;
    }

    public function getImpRetOtrMnda() {
        return $this->ImpRetOtrMnda;
    }

    public function setImpRetOtrMnda($ImpRetOtrMnda) {
        $this->ImpRetOtrMnda = $ImpRetOtrMnda;
    }

    public function getIVANoRetOtrMnda() {
        return $this->IVANoRetOtrMnda;
    }

    public function setIVANoRetOtrMnda($IVANoRetOtrMnda) {
        $this->IVANoRetOtrMnda = $IVANoRetOtrMnda;
    }

    public function getMntTotOtrMnda() {
        return $this->MntTotOtrMnda;
    }

    public function setMntTotOtrMnda($MntTotOtrMnda) {
        $this->MntTotOtrMnda = $MntTotOtrMnda;
    }

}

class ImpRetOtrMnda {
    #tipoImpOtrMnda: obligatorio
    #tasaImpOtrMnda: no obligatorio
    #vlrImpOtrMnda: obligatorio

    public $tipoImpOtrMnda, $tasaImpOtrMnda, $vlrImpOtrMnda;

    function __construct($tipoImpOtrMnda, $vlrImpOtrMnda) {
        $this->tipoImpOtrMnda = $tipoImpOtrMnda;
        $this->tasaImpOtrMnda = NULL;
        $this->vlrImpOtrMnda = $vlrImpOtrMnda;
    }

    public function getTipoImpOtrMnda() {
        return $this->tipoImpOtrMnda;
    }

    public function setTipoImpOtrMnda($tipoImpOtrMnda) {
        $this->tipoImpOtrMnda = $tipoImpOtrMnda;
    }

    public function getTasaImpOtrMnda() {
        return $this->tasaImpOtrMnda;
    }

    public function setTasaImpOtrMnda($tasaImpOtrMnda) {
        $this->tasaImpOtrMnda = $tasaImpOtrMnda;
    }

    public function getVlrImpOtrMnda() {
        return $this->vlrImpOtrMnda;
    }

    public function setVlrImpOtrMnda($vlrImpOtrMnda) {
        $this->vlrImpOtrMnda = $vlrImpOtrMnda;
    }

}

class Detalle {
    #NroLinDet: obligatorio
    #CdgItem(objeto):**conjunto 0..5** no obligatorio 
    #IndExe: no obligatorio 
    #Retenedor(objeto): no obligatorio 
    #NmbItem:  obligatorio
    #DscItem: no obligatorio 
    #QtyRef: no obligatorio 
    #UnmdRef: no obligatorio 
    #PrcRef: no obligatorio 
    #QtyItem: no obligatorio 
    #Subcantidad(objeto):***conjunto 0..5*** no obligatorio 
    #FchElabor: no obligatorio 
    #FchVencim: no obligatorio 
    #UnmdItem: no obligatorio 
    #PrcItem: no obligatorio 
    #OtrMnda(objeto): no obligatorio 
    #DescuentoPct: no obligatorio 
    #DescuentoMonto: no obligatorio 
    #SubDscto(objeto): ***conjunto*0..5** no obligatorio 
    #RecargoPct: no obligatorio 
    #RecargoMonto: no obligatorio 
    #SubRecargo(objeto):***conjunto0..5*** no obligatorio 
    #CodImpAdic: **conjunto 0..2**no obligatorio 
    #MontoItem: obligatorio

    public $NroLinDet, $CdgItem, $IndExe, $Retenedor, $NmbItem, $DscItem,
           $QtyRef, $UnmdRef, $PrcRef, $QtyItem, $Subcantidad, $FchElabor,
           $FchVencim, $UnmdItem, $PrcItem, $OtrMnda, $DescuentoPct, $DescuentoMonto,
           $SubDscto, $RecargoPct, $RecargoMonto, $SubRecargo, $CodImpAdic, $MontoItem;

    function __construct($NroLinDet, $MontoItem) {
        $this->NroLinDet = $NroLinDet;
        $this->CdgItem = NULL;
        $this->IndExe = NULL;
        $this->Retenedor = NULL;
        $this->NmbItem = NULL;
        $this->DscItem = NULL;
        $this->QtyRef = NULL;
        $this->UnmdRef = NULL;
        $this->PrcRef = NULL;
        $this->QtyItem = NULL;
        $this->Subcantidad = NULL;
        $this->FchElabor = NULL;
        $this->FchVencim = NULL;
        $this->UnmdItem = NULL;
        $this->PrcItem = NULL;
        $this->OtrMnda = NULL;
        $this->DescuentoPct = NULL;
        $this->DescuentoMonto = NULL;
        $this->SubDscto = NULL;
        $this->RecargoPct = NULL;
        $this->RecargoMonto = NULL;
        $this->SubRecargo = NULL;
        $this->CodImpAdic = NULL;
        $this->MontoItem = $MontoItem;
    }

    public function getNroLinDet() {
        return $this->NroLinDet;
    }

    public function setNroLinDet($NroLinDet) {
        $this->NroLinDet = $NroLinDet;
    }

    public function getCdgItem() {
        return $this->CdgItem;
    }

    public function setCdgItem($CdgItem) {
        $this->CdgItem = $CdgItem;
    }

    public function getIndExe() {
        return $this->IndExe;
    }

    public function setIndExe($IndExe) {
        $this->IndExe = $IndExe;
    }

    public function getRetenedor() {
        return $this->Retenedor;
    }

    public function setRetenedor($Retenedor) {
        $this->Retenedor = $Retenedor;
    }

    public function getNmbItem() {
        return $this->NmbItem;
    }

    public function setNmbItem($NmbItem) {
        $this->NmbItem = $NmbItem;
    }

    public function getDscItem() {
        return $this->DscItem;
    }

    public function setDscItem($DscItem) {
        $this->DscItem = $DscItem;
    }

    public function getQtyRef() {
        return $this->QtyRef;
    }

    public function setQtyRef($QtyRef) {
        $this->QtyRef = $QtyRef;
    }

    public function getUnmdRef() {
        return $this->UnmdRef;
    }

    public function setUnmdRef($UnmdRef) {
        $this->UnmdRef = $UnmdRef;
    }

    public function getPrcRef() {
        return $this->PrcRef;
    }

    public function setPrcRef($PrcRef) {
        $this->PrcRef = $PrcRef;
    }

    public function getQtyItem() {
        return $this->QtyItem;
    }

    public function setQtyItem($QtyItem) {
        $this->QtyItem = $QtyItem;
    }

    public function getSubcantidad() {
        return $this->Subcantidad;
    }

    public function setSubcantidad($Subcantidad) {
        $this->Subcantidad = $Subcantidad;
    }

    public function getFchElabor() {
        return $this->FchElabor;
    }

    public function setFchElabor($FchElabor) {
        $this->FchElabor = $FchElabor;
    }

    public function getFchVencim() {
        return $this->FchVencim;
    }

    public function setFchVencim($FchVencim) {
        $this->FchVencim = $FchVencim;
    }

    public function getUnmdItem() {
        return $this->UnmdItem;
    }

    public function setUnmdItem($UnmdItem) {
        $this->UnmdItem = $UnmdItem;
    }

    public function getPrcItem() {
        return $this->PrcItem;
    }

    public function setPrcItem($PrcItem) {
        $this->PrcItem = $PrcItem;
    }

    public function getOtrMnda() {
        return $this->OtrMnda;
    }

    public function setOtrMnda($OtrMnda) {
        $this->OtrMnda = $OtrMnda;
    }

    public function getDescuentoPct() {
        return $this->DescuentoPct;
    }

    public function setDescuentoPct($DescuentoPct) {
        $this->DescuentoPct = $DescuentoPct;
    }

    public function getDescuentoMonto() {
        return $this->DescuentoMonto;
    }

    public function setDescuentoMonto($DescuentoMonto) {
        $this->DescuentoMonto = $DescuentoMonto;
    }

    public function getSubDscto() {
        return $this->SubDscto;
    }

    public function setSubDscto($SubDscto) {
        $this->SubDscto = $SubDscto;
    }

    public function getRecargoPct() {
        return $this->RecargoPct;
    }

    public function setRecargoPct($RecargoPct) {
        $this->RecargoPct = $RecargoPct;
    }

    public function getRecargoMonto() {
        return $this->RecargoMonto;
    }

    public function setRecargoMonto($RecargoMonto) {
        $this->RecargoMonto = $RecargoMonto;
    }

    public function getSubRecargo() {
        return $this->SubRecargo;
    }

    public function setSubRecargo($SubRecargo) {
        $this->SubRecargo = $SubRecargo;
    }

    public function getCodImpAdic() {
        return $this->CodImpAdic;
    }

    public function setCodImpAdic($CodImpAdic) {
        $this->CodImpAdic = $CodImpAdic;
    }

    public function getMontoItem() {
        return $this->MontoItem;
    }

    public function setMontoItem($MontoItem) {
        $this->MontoItem = $MontoItem;
    }

}

class CdgItem {
    #tpoCodigo: obligatorio
    #vlrCodigo: obligatorio

    public $tpoCodigo, $vlrCodigo;

    function __construct($tpoCodigo, $vlrCodigo) {
        $this->tpoCodigo = $tpoCodigo;
        $this->vlrCodigo = $vlrCodigo;
    }

    public function getTpoCodigo() {
        return $this->tpoCodigo;
    }

    public function setTpoCodigo($tpoCodigo) {
        $this->tpoCodigo = $tpoCodigo;
    }

    public function getVlrCodigo() {
        return $this->vlrCodigo;
    }

    public function setVlrCodigo($vlrCodigo) {
        $this->vlrCodigo = $vlrCodigo;
    }

}

class Retenedor {
    #indAgente: obligatorio
    #mntBaseFaena : no obligatorias
    #mntMargComer : no obligatorias
    #prcConsFinal : no obligatorias

    public $indAgente, $mntBaseFaena, $mntMargComer, $prcConsFinal;

    function __construct($indAgente) {
        $this->indAgente = $indAgente;
        $this->mntBaseFaena = NULL;
        $this->mntMargComer = NULL;
        $this->prcConsFinal = NULL;
    }

    public function getIndAgente() {
        return $this->indAgente;
    }

    public function setIndAgente($indAgente) {
        $this->indAgente = $indAgente;
    }

    public function getMntBaseFaena() {
        return $this->mntBaseFaena;
    }

    public function setMntBaseFaena($mntBaseFaena) {
        $this->mntBaseFaena = $mntBaseFaena;
    }

    public function getMntMargComer() {
        return $this->mntMargComer;
    }

    public function setMntMargComer($mntMargComer) {
        $this->mntMargComer = $mntMargComer;
    }

    public function getPrcConsFinal() {
        return $this->prcConsFinal;
    }

    public function setPrcConsFinal($prcConsFinal) {
        $this->prcConsFinal = $prcConsFinal;
    }

}

class Subcantidad {
    #subqty, subcod: obligatorias

    public $subqty,
            $subcod;

    function __construct($subqty, $subcod) {
        $this->subqty = $subqty;
        $this->subcod = $subcod;
    }

    public function getSubqty() {
        return $this->subqty;
    }

    public function setSubqty($subqty) {
        $this->subqty = $subqty;
    }

    public function getSubcod() {
        return $this->subcod;
    }

    public function setSubcod($subcod) {
        $this->subcod = $subcod;
    }

}

class OtrMnda {
    #PrcOtrMon:  obligatorio
    #Moneda:  obligatorio
    #FctConv: no obligatorio
    #DctoOtrMnda: no obligatorio
    #RecargoOtrMnda: no obligatorio
    #MontoItemOtrMnda: no obligatorio

    public $PrcOtrMon, $Moneda, $FctConv, $DctoOtrMnda, $RecargoOtrMnda,
           $MontoItemOtrMnda;

    function __construct($PrcOtrMon, $Moneda) {
        $this->PrcOtrMon = $PrcOtrMon;
        $this->Moneda = $Moneda;
        $this->FctConv = NULL;
        $this->DctoOtrMnda = NULL;
        $this->RecargoOtrMnda = NULL;
        $this->MontoItemOtrMnda = NULL;
    }

    public function getPrcOtrMon() {
        return $this->PrcOtrMon;
    }

    public function setPrcOtrMon($PrcOtrMon) {
        $this->PrcOtrMon = $PrcOtrMon;
    }

    public function getMoneda() {
        return $this->Moneda;
    }

    public function setMoneda($Moneda) {
        $this->Moneda = $Moneda;
    }

    public function getFctConv() {
        return $this->FctConv;
    }

    public function setFctConv($FctConv) {
        $this->FctConv = $FctConv;
    }

    public function getDctoOtrMnda() {
        return $this->DctoOtrMnda;
    }

    public function setDctoOtrMnda($DctoOtrMnda) {
        $this->DctoOtrMnda = $DctoOtrMnda;
    }

    public function getRecargoOtrMnda() {
        return $this->RecargoOtrMnda;
    }

    public function setRecargoOtrMnda($RecargoOtrMnda) {
        $this->RecargoOtrMnda = $RecargoOtrMnda;
    }

    public function getMontoItemOtrMnda() {
        return $this->MontoItemOtrMnda;
    }

    public function setMontoItemOtrMnda($MontoItemOtrMnda) {
        $this->MontoItemOtrMnda = $MontoItemOtrMnda;
    }

}

class SubDscto {

    public $tipoDscto, $valorDscto;

    function __construct($tipoDscto, $valorDscto) {
        $this->tipoDscto = $tipoDscto;
        $this->valorDscto = $valorDscto;
    }

    public function getTipoDscto() {
        return $this->tipoDscto;
    }

    public function setTipoDscto($tipoDscto) {
        $this->tipoDscto = $tipoDscto;
    }

    public function getValorDscto() {
        return $this->valorDscto;
    }

    public function setValorDscto($valorDscto) {
        $this->valorDscto = $valorDscto;
    }

}

class SubRecargo {

    public $tipoRecargo, $valorRecargo;

    function __construct($tipoRecargo, $valorRecargo) {
        $this->tipoRecargo = $tipoRecargo;
        $this->valorRecargo = $valorRecargo;
    }

    public function getTipoRecargo() {
        return $this->tipoRecargo;
    }

    public function setTipoRecargo($tipoRecargo) {
        $this->tipoRecargo = $tipoRecargo;
    }

    public function getValorRecargo() {
        return $this->valorRecargo;
    }

    public function setValorRecargo($valorRecargo) {
        $this->valorRecargo = $valorRecargo;
    }

}

class SubTotInfo {
    #NroSTI: - obligatorio
    #GlosaSTI: - obligatorio
    #OrdenSTI: no obligatorio
    #SubTotNetoSTI: no obligatorio
    #SubTotIVASTI: no obligatorio
    #SubTotAdicSTI: no obligatorio
    #SubTotExeSTI: no obligatorio
    #ValSubtotSTI: no obligatorio
    #LineasDeta:*conjunto 0..60* no obligatorio

    public $NroSTI, $GlosaSTI, $OrdenSTI, $SubTotNetoSTI, $SubTotIVASTI, $SubTotAdicSTI,
           $SubTotExeSTI, $ValSubtotSTI, $LineasDeta;

    function __construct($NroSTI, $GlosaSTI) {
        $this->NroSTI = $NroSTI;
        $this->GlosaSTI = $GlosaSTI;
        $this->OrdenSTI = NULL;
        $this->SubTotNetoSTI = NULL;
        $this->SubTotIVASTI = NULL;
        $this->SubTotAdicSTI = NULL;
        $this->SubTotExeSTI = NULL;
        $this->ValSubtotSTI = NULL;
        $this->LineasDeta = NULL;
    }

    public function getNroSTI() {
        return $this->NroSTI;
    }

    public function setNroSTI($NroSTI) {
        $this->NroSTI = $NroSTI;
    }

    public function getGlosaSTI() {
        return $this->GlosaSTI;
    }

    public function setGlosaSTI($GlosaSTI) {
        $this->GlosaSTI = $GlosaSTI;
    }

    public function getOrdenSTI() {
        return $this->OrdenSTI;
    }

    public function setOrdenSTI($OrdenSTI) {
        $this->OrdenSTI = $OrdenSTI;
    }

    public function getSubTotNetoSTI() {
        return $this->SubTotNetoSTI;
    }

    public function setSubTotNetoSTI($SubTotNetoSTI) {
        $this->SubTotNetoSTI = $SubTotNetoSTI;
    }

    public function getSubTotIVASTI() {
        return $this->SubTotIVASTI;
    }

    public function setSubTotIVASTI($SubTotIVASTI) {
        $this->SubTotIVASTI = $SubTotIVASTI;
    }

    public function getSubTotAdicSTI() {
        return $this->SubTotAdicSTI;
    }

    public function setSubTotAdicSTI($SubTotAdicSTI) {
        $this->SubTotAdicSTI = $SubTotAdicSTI;
    }

    public function getSubTotExeSTI() {
        return $this->SubTotExeSTI;
    }

    public function setSubTotExeSTI($SubTotExeSTI) {
        $this->SubTotExeSTI = $SubTotExeSTI;
    }

    public function getValSubtotSTI() {
        return $this->ValSubtotSTI;
    }

    public function setValSubtotSTI($ValSubtotSTI) {
        $this->ValSubtotSTI = $ValSubtotSTI;
    }

    public function getLineasDeta() {
        return $this->LineasDeta;
    }

    public function setLineasDeta($LineasDeta) {
        $this->LineasDeta = $LineasDeta;
    }

}

class DscRcgGlobal {
    #NroLinDR: obligatoria
    #TpoMov: obligatoria
    #GlosaDR: no obligatoria
    #TpoValor: obligatoria
    #ValorDR: obligatoria
    #ValorDROtrMnda:no obligatoria
    #IndExeDR:no obligatoria

    public $NroLinDR, $TpoMov, $GlosaDR, $TpoValor, $ValorDR, $ValorDROtrMnda, $IndExeDR;

    function __construct($NroLinDR, $TpoMov, $TpoValor, $ValorDR) {
        $this->NroLinDR = $NroLinDR;
        $this->TpoMov = $TpoMov;
        $this->GlosaDR = NULL;
        $this->TpoValor = $TpoValor;
        $this->ValorDR = $ValorDR;
        $this->ValorDROtrMnda = NULL;
        $this->IndExeDR = NULL;
    }

    public function getNroLinDR() {
        return $this->NroLinDR;
    }

    public function setNroLinDR($NroLinDR) {
        $this->NroLinDR = $NroLinDR;
    }

    public function getTpoMov() {
        return $this->TpoMov;
    }

    public function setTpoMov($TpoMov) {
        $this->TpoMov = $TpoMov;
    }

    public function getGlosaDR() {
        return $this->GlosaDR;
    }

    public function setGlosaDR($GlosaDR) {
        $this->GlosaDR = $GlosaDR;
    }

    public function getTpoValor() {
        return $this->TpoValor;
    }

    public function setTpoValor($TpoValor) {
        $this->TpoValor = $TpoValor;
    }

    public function getValorDR() {
        return $this->ValorDR;
    }

    public function setValorDR($ValorDR) {
        $this->ValorDR = $ValorDR;
    }

    public function getValorDROtrMnda() {
        return $this->ValorDROtrMnda;
    }

    public function setValorDROtrMnda($ValorDROtrMnda) {
        $this->ValorDROtrMnda = $ValorDROtrMnda;
    }

    public function getIndExeDR() {
        return $this->IndExeDR;
    }

    public function setIndExeDR($IndExeDR) {
        $this->IndExeDR = $IndExeDR;
    }

}

class Referencia {
    #NroLinRef: obligatoria
    #TpoDocRef: obligatoria
    #IndGlobal: ..no.. obligatoria
    #FolioRef: obligatoria
    #RUTOtr: ..no.. obligatoria
    #FchRef: obligatoria
    #CodRef: ..no.. obligatoria
    #RazonRef: ..no..  obligatoria

    public $nroLinRef, $tpoDocRef, $indGlobal, $folioRef, $rUTOtr, $fchRef, $codRef, $razonRef;
            
    function __construct($nroLinRef, $tpoDocRef, $folioRef, $fchRef) {
        $this->nroLinRef = $nroLinRef;
        $this->tpoDocRef = $tpoDocRef;
        $this->indGlobal = NULL;
        $this->folioRef = $folioRef;
        $this->rUTOtr = NULL;
        $this->fchRef = $fchRef;
        $this->codRef = NULL;
        $this->razonRef = NULL;       
    }

    public function getNroLinRef() {
        return $this->nroLinRef;
    }

    public function getTpoDocRef() {
        return $this->tpoDocRef;
    }
    public function getIndGlobal() {
        return $this->indGlobal;
    }
    public function getFolioRef() {
        return $this->folioRef;
    }
    public function getRUTOtr() {
        return $this->rUTOtr;
    }
    public function getFchRef() {
        return $this->fchRef;
    }
    public function getCodRef() {
        return $this->codRef;
    }
    public function getRazonRef() {
        return $this->razonRef;
    }
    public function setNroLinRef($val) {
        $this->nroLinRef = $val;
    } 
    public function setTpoDocRef($val) {
        $this->tpoDocRef = $val;
    } 
    public function setIndGlobal($val) {
        $this->indGlobal = $val;
    } 
    public function setFolioRef($val) {
        $this->folioRef = $val;
    } 
    public function setRUTOtr($val) {
        $this->rUTOtr = $val;
    } 
    public function setFchRef($val) {
        $this->fchRef = $val;
    } 
    public function setCodRef($val) {
        $this->codRef = $val;
    } 
    public function setRazonRef($val) {
        $this->razonRef = $val;
    } 

}

class Documento_Comisiones {
    #NroLinCom : obligatorio
    #TipoMovim : obligatorio
    #Glosa : obligatorio
    #TasaComision : no obligatorio
    #ValComNeto : obligatorio
    #ValComExe : obligatorio
    #ValComIVA : no obligatorio

    public $nroLinCom, $tipoMovim, $glosa, $tasaComision, $valComNeto, $valComExe, $valComIVA;

    public function __construct($nroLinCom, $tipoMovim, $glosa, $valComNeto, $valComExe) {
        $this->nroLinCom = $nroLinCom;
        $this->tipoMovim = $tipoMovim;
        $this->glosa = $glosa;
        $this->tasaComision = NULL;
        $this->valComNeto = $valComNeto;
        $this->valComExe = $valComExe;
        $this->valComIVA = NULL;
    }

    public function setnroLinCom($val) {
        $this->nroLinCom = $val;

    }

    public function settipoMovim($val) {
        $this->tipoMovim = $val;

    }

    public function setglosa($val) {
        $this->glosa = $val;

    }

    public function settasaComision($val) {
        $this->tasaComision = $val;

    }

    public function setvalComNeto($val) {
        $this->valComNeto = $val;

    }

    public function setvalComExe($val) {
        $this->valComExe = $val;

    }

    public function setvalComIVA($val) {
        $this->valComIVA = $val;

    }

    public function getnroLinCom() {
        return $this->nroLinCom;
    }

    public function gettipoMovim() {
        return $this->tipoMovim;
    }

    public function getglosa() {
        return $this->glosa;
    }

    public function gettasaComision() {
        return $this->tasaComision;
    }

    public function getvalComNeto() {
        return $this->valComNeto;
    }

    public function getvalComExe() {
        return $this->valComExe;
    }

    public function getvalComIVA() {
        return $this->valComIVA;
    }

}


class TED {
    #DD : objeto, obligatorio
    #FRMT: objeto obligatorio
    #attributes(list(object)):  

    public $dD, $fRMT, $attributes;

    function __construct($dD,$fRMT, $attributes) {
        $this->dD= $dD;
        $this->fRMT= $fRMT;
        $this->attributes = $attributes;
    }
    public function getDD() {
        return $this->dD;
    }
    public function getFRMT() {
        return $this->fRMT;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class FRMT {
    /**
    * fRMT: obligatorio //valor del TAG
    * attributes(list(objeto): obligatorio //atributos del tag
    */

    public $valorFRMT, $attributes;

    public function __construct($valorFRMT, $attributes) {
        $this->valorFRMT = $valorFRMT;
        $this->attributes = $attributes;
    }

    public function getValorFRMT() {
        return $this->FRMT;
    }

    public function setValorFRMT($valorFRMT) {
        $this->valorFRMT = $valorFRMT;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class DD {
    #RE: obligatorio
    #TD: obligatorio
    #F: obligatorio
    #FE: obligatorio
    #RR: obligatorio
    #RSR: obligatorio
    #MNT: obligatorio
    #IT1: obligatorio
    #CAF (objeto): obligatorio
    #TSTED: obligatorio

    public $rE, $tD, $f, $fE, $rR, $rSR, $mNT, $iT1, $cAF, $tSTED;

    public function __construct($rE, $tD, $f, $fE, $rR, $rSR, $mNT, $iT1, $cAF, $tSTED) {
        $this->rE = $rE;
        $this->tD = $tD;
        $this->f = $f;
        $this->fE = $fE;
        $this->rR =  $rR;
        $this->rSR = $rSR;
        $this->mNT = $mNT;
        $this->iT1 = $iT1;
        $this->cAF = $cAF;
        $this->tSTED = $tSTED;
    }

    public function getRE() {
        return $this->rE;
    }

    public function getTD() {
        return $this->tD;
    }

    public function getF() {
        return $this->f;
    }

    public function getFE() {
        return $this->fE;
    }

    public function getRR() {
        return $this->rR;
    }

    public function getRSR() {
        return $this->rSR;
    }

    public function getMNT() {
        return $this->mNT;
    }

    public function getIT1() {
        return $this->iT1;
    }

    public function getCAF() {
        return $this->cAF;
    }
    
    public function getTSTED() {
        return $this->tSTED;
    }
    
}

class CAF {
    /**
    * dA(objeto): obligatorio 
    * FRMA(objeto): obligatorio
    */

    public $dA, $fRMA, $attributes;

    function __construct($dA, $fRMA, $attributes) {
        $this->dA = $dA;
        $this->fRMA = $fRMA;
        $this->attributes = $attributes;
    }

    public function getDA() {
        return $this->DA;
    }

    public function getFRMA() {
        return $this->fRMA;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

// FRMA
class FRMA {
    /**
    * fRMA: obligatorio //valor del TAG
    * attributes(list(objeto): obligatorio //atributos del tag
    */

    public $valorFRMA, $attributes;

    public function __construct($valorFRMA, $attributes) {
        $this->valorFRMA = $valorFRMA;
        $this->attributes = $attributes;
    }

    public function getValorFRMA() {
        return $this->valorFRMA;
    }

    public function setValorFRMA($valorFRMA) {
        $this->valorFRMA = $valorFRMA;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class DA {
    /*
     * $rE,: obligatorios
     * $rS,: obligatorios
     * $tD,: obligatorios
     * $rNG,: obligatorios
     * $fA,: obligatorios
     * cclavePublica: puede ser rsapk o dsapk
     * $iDK;: obligatorios
     */

    public $rE, $rS, $tD, $rNG, $fA, $clavePublica, $iDK;

    function __construct($rE, $rS, $tD, $rNG, $fA, $clavePublica, $iDK) {
        $this->rE = $rE;
        $this->rS =  $rS ;
        $this->tD =  $tD ;
        $this->rNG =  $rNG ;
        $this->fA =  $fA ;
        $this->clavePublica = $clavePublica;        
        $this->iDK =  $iDK ;
    }

    public function getrE() {
        return $this->rE;
    }

    public function getrS() {
        return $this->rS;
    }

    public function gettD() {
        return $this->tD;
    }

    public function getrNG() {
        return $this->rNG;
    }

    public function getfA() {
        return $this->fA;
    }
        
    public function getclavePublica() {
        return $this->clavePublica;
    }

    public function getiDK() {
        return $this->iDK;
    }

}

class RNG {
    #d:obligatorio
    #h:obligatorio

    public $d, $h;

    function __construct($d, $h) {
        $this->d =  $d;
        $this->h =  $h;
    }
    
    public function getD() {
        return $this->d;
    }

    public function getH() {
        return $this->H;
    }

}

/* esta clase  puede ser puesta en "clavepublica" de la clase DA */
class RSAPK {
    #m: obligatorio
    #e: obligatorio

    public $m, $e;

    function __construct($m, $e) {
        $this->m = $m;
        $this->e = $e;
    }

    public function getM() {
        return $this->m;
    }

    public function getE() {
        return $this->e;
    }

}

class DSAPK {
    #p:obligatorio
    #q:obligatorio
    #g:obligatorio
    #y:obligatorio

    public $p, $q, $g, $y;

    function __construct($p, $q, $g, $y) {
        $this->p = $p;
        $this->q = $q;
        $this->g = $g;
        $this->y = $y;
    }
    
    public function getP() {
        return $this->p;
    }
    
    public function getQ() {
        return $this->q;
    }
    
    public function getG() {
        return $this->g;
    }
    
    public function getY() {
        return $this->y;
    }

}

class Signature {
    #SignedInfo(objeto): obligatorias
    #SignatureValue: obligatorias
    #KeyInfo(objeto): obligatorias

    public $signedInfo, $signatureValue, $keyInfo, $attributes;

    function __construct($signedInfo, $signatureValue, $keyInfo, $attributes) {
        $this->signedInfo = $signedInfo;
        $this->signatureValue = $signatureValue;
        $this->keyInfo = $keyInfo;
        $this->attributes = $attributes;
    }

    public function getSignedInfo() {
        return $this->signedInfo;
    }

    public function getSignatureValue() {
        return $this->signatureValue;
    }

    public function getKeyInfo() {
        return $this->keyInfo;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class SignedInfo {
    #CanonicalizationMethod (Object) :obligatorio type CanonicalizationMethod. 
    #SignatureMethod (Object) : obligatorio. type SignatureMethod. 
    #Reference.(objeto):obligatorio

    public $canonicalizationMethod, $signatureMethod, $reference;

    public function __construct($canonicalizationMethod, $signatureMethod, $reference) {
        $this->canonicalizationMethod = $canonicalizationMethod;
        $this->signatureMethod = $signatureMethod;
        $this->reference = $reference;
    }

    public function  getCanonicalizationMethod() {
        return $this->canonicalizationMethod;
    }
    
    public function  getSignatureMethod() {
        return $this->signatureMethod;
    }

    public function  getReference() {
        return $this->reference;
    }

}

class CanonicalizationMethod {
    /**
    * valor: NULL //valor del TAG
    * attributes(list(objeto): obligatorio //atributos del tag
    */

    public $valor, $attributes;

    public function __construct($attributes) {
        $this->valor = NULL;
        $this->attributes = $attributes;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class SignatureMethod {
    /**
    * valor: NULL //valor del TAG
    * attributes(list(objeto): obligatorio //atributos del tag
    */

    public $valor, $attributes;

    public function __construct($attributes) {
        $this->valor = NULL;
        $this->attributes = $attributes;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class Reference {
    # Transforms(objeto) =: no obligatorio
    # DigestMethod(objeto) : obligatorio
    # DigestValue :obligatorio

    public $transforms, $digestMethod, $digestValue, $attributes;

    public  function __construct($transforms, $digestMethod, $digestValue, $attributes) {
        $this->transforms = $transforms;
        $this->digestMethod = $digestMethod ;
        $this->digestValue = $digestValue ;
        $this->attributes = $attributes;
    }

    public function getTransforms() {
        return $this->transforms;
    }

    public function getDigestMethod() {
        return $this->digestMethod;
    }

    public function getDigestValue() {
        return $this->digestValue;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }    

}

class DigestMethod {
    /**
    * valor: NULL //valor del TAG
    * attributes(list(objeto): obligatorio //atributos del tag
    */

    public $valor, $attributes;

    public function __construct($attributes) {
        $this->valor = NULL;
        $this->attributes = $attributes;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class Transforms {
    #Transform(objeto) obligatorio
    public $transform;

    public  function __construct($transform) {
        $this->transform = $transform;
    }

    public function getTransform() {
        return $this->transform;
    }

}

class Transform {
    /**
    * valor: NULL //valor del TAG
    * attributes(list(objeto): obligatorio //atributos del tag
    */

    public $valor, $attributes;

    public function __construct($attributes) {
        $this->valor = NULL;
        $this->attributes = $attributes;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

}

class KeyInfo {
    #KeyValue, X509Data: objetos, obñligatorios

    public $keyValue, $x509Data;

    public function __construct($keyValue, $x509Data) {
        $this->keyValue = $keyValue;
        $this->x509Data = $x509Data;
    }

    public function getKeyValue() {
        return $this->keyValue;
    }
    
    public function getX509Data() {
        return $this->x509Data;
    }

}

class KeyValue {
    #InformacionDeClaves objeto... puede ser de la clase RSAKeyValue o DSAKeyValue

    public $informacionDeClaves;

    public function __construct($informacionDeClaves) {
        $this->informacionDeClaves= $informacionDeClaves;
    }

    public function getInformacionDeClaves() {
        return $this->informacionDeClaves;
    }

}

class RSAKeyValue {
    # Modulus, Exponent: obligatorios

    public $modulus, $exponent;

    public function __construct($modulus, $exponent) {
        $this->modulus= $modulus;
        $this->exponent = $exponent;
    }

    public function getModulus() {
        return $this->modulus;
    }

    public function getExponent() {
        return $this->exponent;
    }

}

class DSAKeyValue {
    #P, Q ,G, Y: campos obligatorios

    public $p, $q, $g, $y;

    public function __construct($p, $q, $g, $y) {
        $this->p = $p;
        $this->q = $q;
        $this->g = $g;
        $this->y = $y;
    }
    
    public function getP() {
        return $this->p;
    }

    public function getQ() {
        return $this->q;
    }

    public function getG() {
        return $this->g;
    }

    public function getY() {
        return $this->y;
    }

}

class X509Data {
    #·#$x509Certificate; obligatorio

    public $x509Certificate;

    public function __construct($x509Certificate) {
        $this->x509Certificate= $x509Certificate;
    }

    public function getX509Certificate() {
        return $this->x509Certificate;
    }

}


class Attribute {

    public $name, $valor;

    public function __construct($name, $valor) {
        $this->name= $name;
        $this->valor= $valor;
    }

    public function getName() {
        return $this->name;
    }
     public function getValor() {
        return $this->valor;
    }

}

?>
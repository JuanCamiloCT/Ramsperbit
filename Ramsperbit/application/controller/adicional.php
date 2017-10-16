<?php

/**
*
*/
class Adicional extends Controller
{


	private $mdlGenero;
  private $mdlTipoDocumento;
  private $mdlPension;
	private $mdlEps;
	private $mdlNivelEstudio;
	private $mdlProfesion;
	private $mdlCaja;


	function __construct()
	{
		$this->mdlGenero = $this->loadModel("mdlGenero");
		$this->mdlPension = $this->loadModel("mdlPension");
		$this->mdlTipoDocumento = $this->loadModel("mdlTipoDocumento");
		$this->mdlEps = $this->loadModel("mdlEps");
		$this->mdlNivelEstudio = $this->loadModel("mdlNivelEstudio");
		$this->mdlProfesion = $this->loadModel("mdlProfesion");
		$this->mdlCaja = $this->loadModel("mdlCaja");
	}

	public function index()
	{
		$genero = $this->mdlGenero->Listar1();
    $documento = $this->mdlTipoDocumento->Listar2();
    $pension = $this->mdlPension->Listar3();
		$ep = $this->mdlEps->listarEps();
		$nivel = $this->mdlNivelEstudio->listarNivel();
		$profe = $this->mdlProfesion->listarProfesion();
		$caja = $this->mdlCaja->listarC();



		require APP.'view/_templates/header.php';
		require APP.'view/gusuario/adicional/index.php';
		require APP.'view/_templates/footer.php';
	}

	public function indexEmp()
	{
		$genero = $this->mdlGenero->Listar1();
    $documento = $this->mdlTipoDocumento->Listar2();
    $pension = $this->mdlPension->Listar3();
		$ep = $this->mdlEps->listarEps();
		$nivel = $this->mdlNivelEstudio->listarNivel();
		$profe = $this->mdlProfesion->listarProfesion();
		$caja = $this->mdlCaja->listarC();



		require APP.'view/_templates/headeremple.php';
		require APP.'view/gusuario/adicional/index2.php';
		require APP.'view/_templates/footer.php';
	}

	public function indexSP()
	{
		$genero = $this->mdlGenero->Listar1();
    $documento = $this->mdlTipoDocumento->Listar2();
    $pension = $this->mdlPension->Listar3();
		$ep = $this->mdlEps->listarEps();
		$nivel = $this->mdlNivelEstudio->listarNivel();
		$profe = $this->mdlProfesion->listarProfesion();
		$caja = $this->mdlCaja->listarC();



		require APP.'view/_templates/headersuper.php';
		require APP.'view/gusuario/adicional/index3.php';
		require APP.'view/_templates/footer.php';
	}
}

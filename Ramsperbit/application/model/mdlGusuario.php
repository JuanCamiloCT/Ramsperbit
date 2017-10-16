<?php

class mdlGusuario
{

    private $idEmpleado;
    private $Tipo_documento_idTipo_documento;
    private $identificacion;
    private $nombres;
    private $apellidos;
    private $fecha_nacimiento;
    private $celular;
    private $rh;
    private $correo_electronico;
    private $fecha_ingreso;
    private $numero_hijos;
    private $telefono_fijo;
    private $direccion;
    private $barrio;
    private $municipio;
    private $cargo;
    private $profesion_idProfesion;
    private $nivel_estudio_idNivel_estudio;
    private $cesantias;
    private $Pension_idPension;
    private $Caja_compensacion_idCaja_compensacion;
    private $Tipo_contrato;
    private $procesos;
    private $eps_idEPS;
    private $fecha_ingreso_eps;
    private $Genero_idGenero;
    private $cuenta_idCuenta;
    private $estado;
    private $db;

    public function __SET($attr,$value){
        $this->$attr = $value;
    }

    public function __GET($attr){
       return $this->$attr;
    }


    function __construct($db)
    {
        try{

            $this->db=$db;
        }catch (PDOException $e){
            exit("La conexion a la base de datos no fue establecida.");

        }

    }

    public function insertarEmpleado(){
        $sql = "CALL SP_InsertarEmpleado(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->bindParam(2, $this->Tipo_documento_idTipo_documento);
        $stm->bindParam(3, $this->identificacion);
        $stm->bindParam(4, $this->nombres);
        $stm->bindParam(5, $this->apellidos);
        $stm->bindParam(6, $this->fecha_nacimiento);
        $stm->bindParam(7, $this->celular);
        $stm->bindParam(8, $this->rh);
        $stm->bindParam(9, $this->correo_electronico);
        $stm->bindParam(10, $this->fecha_ingreso);
        $stm->bindParam(11, $this->numero_hijos);
        $stm->bindParam(12, $this->telefono_fijo);
        $stm->bindParam(13, $this->direccion);
        $stm->bindParam(14, $this->barrio);
        $stm->bindParam(15, $this->municipio);
        $stm->bindParam(16, $this->cargo);
        $stm->bindParam(17, $this->profesion_idProfesion);
        $stm->bindParam(18, $this->nivel_estudio_idNivel_estudio);
        $stm->bindParam(19, $this->cesantias);
        $stm->bindParam(20, $this->Pension_idPension);
        $stm->bindParam(21, $this->Caja_compensacion_idCaja_compensacion);
        $stm->bindParam(22, $this->Tipo_contrato);
        $stm->bindParam(23, $this->procesos);
        $stm->bindParam(24, $this->eps_idEPS);
        $stm->bindParam(25, $this->fecha_ingreso_eps);
        $stm->bindParam(26, $this->Genero_idGenero);
        $stm->bindParam(27, $this->cuenta_idCuenta);
        return $stm->execute();
    }


    public function listar(){
        $sql = "CALL SP_ListarEmpleados()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar2(){
        $sql = "CALL SP_ListarEmpleados2()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function listar3(){
        $sql = "CALL SP_ListarEmpleados3()";
        $stm = $this->db->prepare($sql);
        $stm->execute();
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }

    public function modificar(){
        $sql = "CALL SP_ModificarEmpleados(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1, $this->idEmpleado);
        $stm->bindParam(2, $this->Tipo_documento_idTipo_documento);
        $stm->bindParam(3, $this->identificacion);
        $stm->bindParam(4, $this->nombres);
        $stm->bindParam(5, $this->apellidos);
        $stm->bindParam(6, $this->fecha_nacimiento);
        $stm->bindParam(7, $this->celular);
        $stm->bindParam(8, $this->rh);
        $stm->bindParam(9, $this->correo_electronico);
        $stm->bindParam(10, $this->fecha_ingreso);
        $stm->bindParam(11, $this->numero_hijos);
        $stm->bindParam(12, $this->telefono_fijo);
        $stm->bindParam(13, $this->direccion);
        $stm->bindParam(14, $this->barrio);
        $stm->bindParam(15, $this->municipio);
        $stm->bindParam(16, $this->cargo);
        $stm->bindParam(17, $this->profesion_idProfesion);
        $stm->bindParam(18, $this->nivel_estudio_idNivel_estudio);
        $stm->bindParam(19, $this->cesantias);
        $stm->bindParam(20, $this->Pension_idPension);
        $stm->bindParam(21, $this->Caja_compensacion_idCaja_compensacion);
        $stm->bindParam(22, $this->Tipo_contrato);
        $stm->bindParam(23, $this->procesos);
        $stm->bindParam(24, $this->eps_idEPS);
        $stm->bindParam(25, $this->fecha_ingreso_eps);
        $stm->bindParam(26, $this->Genero_idGenero);
        $stm->bindParam(27, $this->cuenta_idCuenta);
        return $stm->execute();
    }

    public function modificarEstado(){
        $sql = "CALL SP_ModificarEstadoEmpleado(?,?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idEmpleado);
        $stm->bindParam(2,$this->estado);
        return $stm->execute();

    }

       public function consultarUno(){
        $sql = "CALL SP_ver(?)";
        $stm = $this->db->prepare($sql);
        $stm->bindParam(1,$this->idEmpleado);
        $stm->execute();
        return $stm->fetch(PDO::FETCH_ASSOC);
    }

    public function consultarIde(){
     $sql = "CALL SP_identificacion(?)";
     $stm = $this->db->prepare($sql);
     $stm->bindParam(1,$this->identificacion);
     $stm->execute();
     return $stm->fetch(PDO::FETCH_ASSOC);
 }

    public function getEmpleados()
    {
        $sql = "SELECT COUNT(idEmpleado) AS amount_of_songs FROM empleado";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs;
    }

    public function getEmpleados2()
    {
        $sql = "SELECT COUNT(idEmpleado) AS amount_of_songs2 FROM empleado WHERE Tipo_contrato ='Definido'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs2;
    }

    public function getEmpleados3()
    {
        $sql = "SELECT COUNT(idEmpleado) AS amount_of_songs3 FROM empleado WHERE Tipo_contrato ='Indefinido'";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_songs3;
    }
}

?>

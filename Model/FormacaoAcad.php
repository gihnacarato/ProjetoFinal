<?php

class FormacaoAcad
{
    private $id;
    private $idususario;
    private $inicio;
    private $fim;
    private $descricao;

    //ID
    public function setID($id)
    {
        $this->id = $id;
    }
    public function getID()
    {
        return $this->id;
    }

    //idusuario
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    //Inicio
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }
    public function getInicio()
    {
        return $this->inicio;
    }

    //Fim
    public function setFim($fim)
    {
        $this->fim = $fim;
    }
    public function getFim()
    {
        return $this->fim;
    }

    //Descrição
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }
    public function getDescricao()
    {
        return $this->descricao;
    }


    public function inserirBD()
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO formacaoAcademica (idusuario, inicio, fim, descricao)
VALUES ('" . $this->idusuario . "'.'" . $this->inicio . "'.'" . $this->fim . "'.'" . $this->descricao . "')";

        if ($conn->query($sql) === TRUE) {

            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return TRUE;
        } else {

            $conn->close();
            return FALSE;
        }
    }

    public function excluirBD($id)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "DELETE FROM formacaoAcademica WHERE idformacaoAcademica = '" . $id . "';";

        if ($conn->query($sql) === TRUE) {

            $this->id = mysqli_insert_id($conn);
            $conn->close();
            return TRUE;
        } else {

            $conn->close();
            return FALSE;
        }
    }

    public function listaFormacoes($idusuario)
    {
        require_once 'ConexaoBD.php';

        $con = new ConexaoBD();
        $conn = $con->conectar();

        if ($conn->connect_error) {

            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT FROM formacaoAcademica WHERE idusuario = '" . $idusuario . "'";
        $re = $conn->query($sql);
        $conn->close();
        return $re;
    }
}

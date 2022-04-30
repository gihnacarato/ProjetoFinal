<?php
class OutrasFormacoes
{

    private $idusuario;
    private $inicio;
    private $fim;
    private $descricao;

    //idusuario
    public function setIdUsuario($idusuario)
    {
        $this->idusuario = $idusuario;
    }
    public function getIdUsuario()
    {
        return $this->idusuario;
    }

    //inicio
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
}

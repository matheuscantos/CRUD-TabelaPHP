<?php
class mastercrud
{
    private $db;
    function __construct($DB_con)
    {
        $this->db = $DB_con;
    }

    /* BUSCA TODOS USUARIOS */
    public function getUsuarios($status)
    {

        /* Para casos futuros, e possivel filtrar os usuarios selecionados, podendo adicionar um filtro em status, ou datas, deixei apenas a var para status, mas aqui
        seria possivel filtrar por todos os campos */

        $filtros = "";

        if ($status != "") {
            $filtros = " WHERE status = :status";
        }

        $stmt = $this->db->prepare("SELECT * FROM usuarios " . $filtros);
        $stmt->bindparam(":status", $status);
        $stmt->execute();
        $returnVAR = array();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

            $returnVAR[] = array(
                'id'  => $row['id'],
                'nome'  => $row['nome'],
                'email'  => $row['email'],
                'dataadmissao'  => $row['dataadmissao'],
                'datacadastro'  => $row['datacadastro'],
                'dataatualizacao' => $row['dataatualizacao'],
                'status'  => $row['status']
            );
        }

        return json_encode($returnVAR);
    }

    /* CRIA NOVO USUARIO */
    public function addUsuario($nomeusuario, $emailusuario, $dataadmissaousuario)
    {
        try {
            $stmt = $this->db->prepare("INSERT INTO usuarios(nome,email,dataadmissao,datacadastro,dataatualizacao) 
            VALUES(:nomeusuario,:emailusuario,:dataadmissaousuario,CURRENT_TIMESTAMP(),CURRENT_TIMESTAMP())");
            $stmt->bindparam(":nomeusuario", $nomeusuario);
            $stmt->bindparam(":emailusuario", $emailusuario);
            $stmt->bindparam(":dataadmissaousuario", $dataadmissaousuario);
            $stmt->execute();
            return 1;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            return 2;
        }
    }

    /* ATUALIZA USUARIO */
    public function updateUsuario($idusuario, $nomeusuario, $emailusuario, $dataadmissaousuario)
    {
        try {
            $stmt = $this->db->prepare("UPDATE usuarios SET nome = :nome, email = :emailusuario, dataadmissao = :dataadmissaousuario, dataatualizacao = CURRENT_TIMESTAMP() WHERE usuarios.id=:idusuario");
            $stmt->bindparam(":nome", $nomeusuario);
            $stmt->bindparam(":emailusuario", $emailusuario);
            $stmt->bindparam(":dataadmissaousuario", $dataadmissaousuario);
            $stmt->bindparam(":idusuario", $idusuario);
            $stmt->execute();
            return 1;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            return 2;
        }
    }

    /* REMOVER USUARIO */
    public function removeUsuario($idusuario)
    {
        try {
            $stmt = $this->db->prepare("UPDATE usuarios SET status = 1, dataatualizacao = CURRENT_TIMESTAMP() WHERE usuarios.id=:idusuario");
            $stmt->bindparam(":idusuario", $idusuario);
            $stmt->execute();
            return 1;
        } catch (PDOException $e) {
            //echo $e->getMessage();
            return 2;
        }
    }
}

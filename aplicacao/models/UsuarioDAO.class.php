<?php
/**
 * Created by PhpStorm.
 * User: santana
 * Date: 22/02/15
 * Time: 15:06
 */
namespace models;
use models\base\AbstractModel;

class UsuarioDAO extends AbstractModel {
    const QUERY_ALTER_USER = "update usuario set saram = :saram, nome = :nome, login = :login, email = :email, grupo = :grupo, ativo = :ativo where id = :id";
    const QUERY_RESET_SENHA = "update usuario set senha = :senha where email = :email";
    const QUERY_POR_EMAIL = "select * from usuario where email = :email";
    const QUERY_UNICO = "select * from usuario where login = :login and senha = :senha";
    const QUERY_ALL = 'select * from usuario';
    const QUERY_POR_ID = "select * from usuario where id = :id";
    const DElETE_BY_ID = 'delete from usuario where id = :id';
    const QUERY_INSERT = "insert into usuario (saram, nome, login, senha, email, grupo, ativo)
                          VALUES (:saram, :nome, :login, :senha, :email, :grupo, :ativo)";
    const QUERY_POR_GRUPO = "select id, nome from usuario where grupo >= :grupo";



}

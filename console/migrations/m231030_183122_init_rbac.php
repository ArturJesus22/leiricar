<?php

use yii\db\Migration;

/**
 * Class m231030_183122_init_rbac
 */
class m231030_183122_init_rbac extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        //Aceder ao authManager
        $auth = Yii::$app->authManager;

        //Permissões
        $gerirColaboradores = $auth->createPermission('gerirColaboradores');
        $gerirColaboradores -> description = 'Gestão de todos os Admins, Funcionarios';
        $auth->add($gerirColaboradores);

        $gerirClientes = $auth->createPermission('gerirClientes');
        $gerirClientes -> description = 'Acesso total à gestão de clientes (Clientes)';
        $auth->add($gerirClientes);

        $gerirLimpezas = $auth->createPermission('gerirLimpezas');
        $gerirLimpezas -> description = 'Gestão de Limpezas';
        $auth->add($gerirLimpezas);

        $gerirProdutos = $auth->createPermission('gerirProdutos');
        $gerirProdutos -> description = 'Gestão de Produtos';
        $auth->add($gerirProdutos);

        $gerirComentarios = $auth->createPermission('gerirComentarios');
        $gerirComentarios -> description = 'Gestão de Comentarios';
        $auth->add($gerirComentarios);

        $realizarCompras = $auth->createPermission('realizarCompras');
        $realizarCompras -> description = 'Fazer Compras';
        $auth->add($realizarCompras);

        $avaliarProdutos = $auth->createPermission('avaliarProdutos');
        $avaliarProdutos -> description = 'Avaliar e comentar produtos';
        $auth->add($avaliarProdutos);

        //Funções de cada cargo

        $cliente = $auth->createRole('cliente');
        $auth->add($cliente);
        $auth->addChild($cliente, $realizarCompras);
        $auth->addChild($cliente, $avaliarProdutos);

        $funcionario = $auth->createRole('funcionario');
        $auth->add($funcionario);
        $auth->addChild($funcionario,$gerirClientes);
        $auth->addChild($funcionario,$gerirLimpezas);
        $auth->addChild($funcionario,$gerirProdutos);
        $auth->addChild($funcionario,$gerirComentarios);


        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin,$gerirColaboradores);
        $auth->addChild($admin,$funcionario);

        //Atribuir ao ID:1 o cargo ADMIN
        $auth->assign($admin,1);
        $auth->assign($funcionario,2);
        $auth->assign($cliente,3);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $auth = Yii::$app->authManager;

        $auth->removeAll();
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m231030_183122_init_rbac cannot be reverted.\n";

        return false;
    }
    */
}

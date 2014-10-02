<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Module_Home extends Module {



    public $version = '1.0';



    public function info() {

        return array(

            'name' => array(

                'es' => 'Home',

                'en' => 'Home'

            ),

            'description' => array(

                'es' => '@BrayanAcebo modulo home com registro',

                'en' => '@BrayanAcebo modulo home com registro'

            ),

            'frontend' => true,

            'backend' => true,

            'menu' => 'content',

        );

    }



    public function install() 
   {
        $this->dbforge->drop_table('registro');

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'cedula' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
            'sexo' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
            'nombre' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
            'apellidos' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
            'email' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
            'ciudad' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
            'celular' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
             'fecha_nacimiento' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
             'archivo' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            ),
             'numero_factura' => array(
                'type' => 'VARCHAR',
                'constraint' => '455'
            )
        );
		
        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);


        if (!$this->dbforge->create_table('registro')) {
            return false;
        }

        return true;

    }



    public function uninstall() {

        $this->dbforge->drop_table('registro');

        return true;

    }



    public function upgrade($old_version) {

        return true;

    }



    public function help() {

        return "Módulo destinado administrar la información de contacto";

    }



}
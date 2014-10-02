<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Module_Products extends Module {

    public $version = '1.2';
    public $mainTable = 'products';
    public $chilTable = 'product_categories';
    public $imageTable = 'product_images';
    public $relationship = 'products_categories';
    public $intro = 'products_intro';

    public function info() {
        return array(
            'name' => array(
                'en' => 'Products',
                'es' => 'Productos'
            ),
            'description' => array(
                'en' => 'Products © Brayan Acebo, luis fernando salazar 2014',
                'es' => 'Productos © Brayan Acebo, luis fernando salazar 2014',
            ),
            'frontend' => TRUE,
            'backend' => TRUE,
            'menu' => 'content'
        );
    }

    public function install() {

        /* Creación del directorio para carga de imagenes */
        @mkdir($this->upload_path . $this->mainTable, 0777, TRUE);

        /* Creación de tabla para las categorias */
        $this->dbforge->drop_table($this->chilTable);

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'title' =>  array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ),
            'position' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'parent' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => false
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => false
            ),
            'created_at' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'null' => false
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '',
                'null' => false
            )
        );

        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);

        if (!$this->dbforge->create_table($this->chilTable)) {
            return false;
        }

        // Creando tabla de productos

        $this->dbforge->drop_table($this->mainTable);

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'introduction' => array(
                'type' => 'TEXT',
                'null' => true
            ),
            'description' => array(
                'type' => 'TEXT',
                'null' => true
            ),
            'image' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'price' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'position' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => true
            ),
            'outstanding' => array(
                'type' => 'INT',
                'constraint' => '1',
                'null' => true
            ),
            'created_at' => array(
                'type' => 'DATETIME',
                'constraint' => '',
                'null' => false
            ),
            'updated_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '',
                'null' => false
            )
        );

        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);

        if (!$this->dbforge->create_table($this->mainTable)) {
            return false;
        }

        // Creando tabla para multiples imagenes

        $this->dbforge->drop_table($this->imageTable);

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => false
            ),
            'path' => array(
                'type' => 'VARCHAR',
                'constraint' => '455',
                'null' => true
            ),
            'created_at' => array(
                'type' => 'TIMESTAMP',
                'constraint' => '',
                'null' => false
            )
        );

        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);

        if (!$this->dbforge->create_table($this->imageTable)) {
            return false;
        }

        // Tabla para introducción de la sección

        $this->dbforge->drop_table($this->intro);

        $field = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'auto_increment' => true
            ),
            'text' => array(
                'type' => 'TEXT',
                'null' => true
            )
        );

        $this->dbforge->add_field($field);
        $this->dbforge->add_key('id', true);

        if (!$this->dbforge->create_table($this->intro)) {
            return false;
        }

        $data = array(
            'text' => ''
        );

        $this->db->insert($this->intro, $data);

        // Tabla para introducción de la sección

        $this->dbforge->drop_table($this->relationship);

        $field = array(
            'product_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => false
            ),
            'category_id' => array(
                'type' => 'INT',
                'constraint' => '11',
                'null' => false
            )
        );

        $this->dbforge->add_field($field);

        if (!$this->dbforge->create_table($this->relationship)) {
            return false;
        }

        // Final
        return true;
    }

    public function uninstall() {
        $this->dbforge->drop_table($this->chilTable);
        $this->dbforge->drop_table($this->mainTable);
        $this->dbforge->drop_table($this->imageTable);
        $this->dbforge->drop_table($this->relationship);
        $this->dbforge->drop_table($this->intro);
        @rmdir($this->upload_path.$this->mainTable);
        return true;
    }

    public function upgrade($old_version) {
        return true;
    }

    public function help() {
        return "Modulo de productos con arbol de categorias y multiples imagenes";
    }

}
/* Fin del archivo details.php */
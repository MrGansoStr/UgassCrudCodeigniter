<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'user_id'		=> [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
             'user_name'	=> [
                'type'		=> 'VARCHAR',
                'constraint'	=> '100',
            ],
            'user_psw'		=> [
                'type'		=> 'VARCHAR',
                'constraint'	=> '100',
             ],
             'user_type'		=> [
                'type'		=> 'VARCHAR',
                'constraint'	=> '100',
             ],             
         ]);
         $this->forge->addKey('user_id', true);
         $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
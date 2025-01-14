<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateGuestsTable extends Migration
{
    public function up()
    {
        // Membuat tabel 'guests'
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'unsigned'      => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'message' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('guests');
    }

    public function down()
    {
        // Drop tabel 'guests' saat migrasi di-rollback
        $this->forge->dropTable('guests');
    }
}

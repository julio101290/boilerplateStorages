<?php

// Adaptado por julio101290

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterStoragesBranchOffice extends Migration {

    public function up() {
        // Campos nuevos
        $fields = [
            'idBranchOffice' => [
                'type' => 'INT',
                'null' => false,
                'after' => 'id', // opcional: posición en la tabla
            ],
        ];

        $this->forge->addColumn('storages', $fields);
    }

    public function down() {
        // Eliminar la columna
        $this->forge->dropColumn('storages', 'idBranchOffice');
    }
}

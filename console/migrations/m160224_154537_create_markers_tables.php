<?php
use yii\db\Schema;
use yii\db\Migration;

class m160224_154537_create_markers_tables extends Migration
{
    public function up()
    {
        $this->createTable('markers_tables', [
            'id' => Schema::TYPE_PK,
            'address' => Schema::TYPE_STRING . ' NOT NULL',
            'lat' => Schema::TYPE_STRING . ' NOT NULL',
            'lng' => Schema::TYPE_STRING . ' NOT NULL',
            'date' => Schema::TYPE_DATE,
            'rgb' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        $this->dropTable('markers_tables');
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 23/08/17
 * Time: 8:44
 */

class Migration_Create_table_contacts extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => ['type' => 'INT', 'unsigned' => TRUE, 'constraint' => 11, 'auto_increment' => TRUE],
            'name' => ['type' => 'VARCHAR', 'constraint' => '100'],
            'email' => ['type' => 'VARCHAR', 'constraint' => '50', 'unique' => true],
            'message' => ['type' => 'TEXT'],
            'created_at' => ['type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'],
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('contacts');
        echo 'Migrating Migration_Create_table_contacts<br>';
    }

    public function down()
    {
        $this->dbforge->drop_table('contacts');
        echo 'Rollback Migration_Create_table_contacts<br>';
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 23/08/17
 * Time: 8:44
 */

class Migration_Create_table_users extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => ['type' => 'INT', 'unsigned' => TRUE, 'constraint' => 11, 'auto_increment' => TRUE],
            'name' => ['type' => 'VARCHAR', 'constraint' => '50'],
            'username' => ['type' => 'VARCHAR', 'constraint' => '50', 'unique' => true],
            'email' => ['type' => 'VARCHAR', 'constraint' => '50', 'unique' => true],
            'password' => ['type' => 'VARCHAR', 'constraint' => '200'],
            'status' => ['type' => 'ENUM("PENDING", "ACTIVATED", "SUSPENDED")', 'default' => 'PENDING'],
            'created_at' => ['type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'],
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('users');
        echo 'Migrating Migration_Create_table_users<br>';

        $this->db->insert_batch('users', [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'email' => 'admin@hmvc.com',
                'password' => password_hash('admin', PASSWORD_BCRYPT),
                'status' => 'ACTIVATED'
            ],[
                'name' => 'Customer',
                'username' => 'customer',
                'email' => 'customer@hmvc.com',
                'password' => password_hash('customer', PASSWORD_BCRYPT),
                'status' => 'ACTIVATED'
            ],[
                'name' => 'Manager',
                'username' => 'manager',
                'email' => 'manager@hmvc.com',
                'password' => password_hash('operational', PASSWORD_BCRYPT),
                'status' => 'ACTIVATED'
            ]
        ]);
        echo '--Seeding Migration_Create_table_users<br>';
    }

    public function down()
    {
        $this->dbforge->drop_table('users');
        echo 'Rollback Migration_Create_table_users<br>';
    }
}
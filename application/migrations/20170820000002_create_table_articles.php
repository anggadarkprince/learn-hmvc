<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 23/08/17
 * Time: 8:44
 */

class Migration_Create_table_articles extends CI_Migration
{
    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => ['type' => 'INT', 'unsigned' => TRUE, 'constraint' => 11, 'auto_increment' => TRUE],
            'title' => ['type' => 'VARCHAR', 'constraint' => '200'],
            'slug' => ['type' => 'VARCHAR', 'constraint' => '500', 'unique' => true],
            'content' => ['type' => 'TEXT'],
            'author_id' => ['type' => 'INT', 'unsigned' => TRUE, 'constraint' => 11],
            'created_at' => ['type' => 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP'],
        ))->add_field('CONSTRAINT fk_article_author FOREIGN KEY (author_id) REFERENCES users(id)');
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('articles');
        echo 'Migrating Migration_Create_table_articles<br>';
    }

    public function down()
    {
        $this->dbforge->drop_table('articles');
        echo 'Rollback Migration_Create_table_articles<br>';
    }
}
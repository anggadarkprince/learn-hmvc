<?php
/**
 * Created by PhpStorm.
 * User: angga
 * Date: 23/08/17
 * Time: 8:47
 */

class Migrate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('migration');

        if(ENVIRONMENT != 'development') {
            echo 'You allow run migration in development mode.';
            exit(0);
        }
    }

    /**
     * Run migration to latest version.
     */
    public function index()
    {
        $this->load->library('migration');

        if ($this->migration->latest() === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo 'Migration complete.<br>';
        }
    }

    /**
     * Run migration to specific version.
     * @param $target_version
     */
    public function to($target_version = null)
    {
        if(is_null($target_version)){
            echo 'Missing argument version migration.';
        } else {
            if ($this->migration->version($target_version) === FALSE) {
                show_error($this->migration->error_string());
            } else {
                echo 'Migration to version ' . $target_version . ' complete.<br>';
            }
        }
    }

    /**
     * Rollback migration version.
     */
    public function rollback()
    {
        if ($this->migration->version(0) === FALSE) {
            show_error($this->migration->error_string());
        } else {
            echo 'Rollback database complete.<br>';
        }
    }

    /**
     * Rollback and migrate database.
     */
    public function reset()
    {
        $this->rollback();
        $this->index();
    }
}
<?php
/**
 * @package Todo api
 */
/*
Plugin Name: TODO API
Description: A quick todo list application backend build for fun due to love of apis
Plugin URI: https://..
Version: 1.0.0
Author: Joel Kores
Author URI: https://...
Licence: GPL V2 or later
Text Domain: todoapi
*/

defined('ABSPATH') or die('Hey you hacker. You have been pwnnedd!!');

class TodoApp{
    public function activate(){
        $this->create_table();
    }
    public function create_table(){
        global $wpdb;

        $table_name = $wpdb -> prefix .'tasks';

        $sql = "CREATE TABLE $table_name(
            t_id mediumint(9) AUTO INCREMENT PRIMARY,
            t_title VARCHAR(100) NOT NULL,
            t_due_date datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
            t_priority VARCHAR(20) NOT NULL,
            t_status integer default 0,
            t_notes varchar(256),
            t_created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL
        )";
        require_once(ABSPATH.'wp-admin/includes/upgrade.php');
        dbDelta($sql);
    }
}
$todolist = new TodoApp();
register_activation_hook(__file__,[$todolist, 'activate']);

?>
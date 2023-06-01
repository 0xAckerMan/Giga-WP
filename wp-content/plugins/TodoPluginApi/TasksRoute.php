<?php
/**
 * @package Todo api
 */

class TasksRoute{
    public function register_routes(){
        register_rest_route('api/v1', '/tasks/', array(
            'methods' => 'GET',
            'callback' => array($this, 'all_tasks'),
            'permission_callback' => function(){
                return current_user_can('read');
            }
        ));
    }

    public function all_tasks(){
        global $wpdb;
        $table_name = $wpdb->prefix.'tasks';
        $query = "SELECT * FROM $table_name";
        $tasks = $wpdb->get_results($query);

        return $tasks;
    }
}
?>
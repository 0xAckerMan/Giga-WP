<?php
global $wpdb;
$table = $wpdb->prefix.'tickets';
$rawdata = $wpdb->get_results("SELECT * FROM $table");


// Display the table
if ($rawdata) {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Message</th>';
    echo '<th>Due Date</th>';
    echo '<th>Assignee</th>';
    echo '<th>Status</th>';
    echo '<th>Actions</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($rawdata as $ticket) {
        echo '<tr>';
        echo '<td>' . $ticket->title . '</td>';
        echo '<td>' . $ticket->message . '</td>';
        echo '<td>' . $ticket->due_date . '</td>';
        echo '<td>' . $ticket->assignee . '</td>';
        echo '<td>';
        if ($ticket->status === 'Done') {
            echo 'Completed';
        } else {
            echo 'Active';
        }
        echo '</td>';
        echo '<td>';

        echo '<a href="http://localhost/Ticketing-System/wp-admin/admin.php?page=tickets_update&update_id=' . $ticket->id . '">Edit</a>';
        echo ' | ';
        echo '<a href="?action=soft_delete&id=' . $ticket->id . '">Delete</a>';
        echo ' | ';
        echo '<a href="?action=mark_done&id=' . $ticket->id . '">Mark as Done</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No tickets found.';
}
?>

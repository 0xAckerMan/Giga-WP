<?php
global $wpdb;
$table = $wpdb->prefix . 'tickets';
$current_user = wp_get_current_user();
$rawdata = $wpdb->get_results($wpdb->prepare("SELECT * FROM $table WHERE assignee = %s AND status = 'Active'", $current_user->user_login));

// Display the table
if ($rawdata) {
    echo '<table>';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Title</th>';
    echo '<th>Message</th>';
    echo '<th>Due Date</th>';
    echo '<th>Actions</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    foreach ($rawdata as $ticket) {
        echo '<tr>';
        echo '<td>' . $ticket->title . '</td>';
        echo '<td>' . $ticket->message . '</td>';
        echo '<td>' . $ticket->due_date . '</td>';
        echo '<td>';
        echo '<a href="?action=mark_done&id=' . $ticket->id . '">Mark as Done</a>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No active tickets found.';
}

?>

<?php
$custom_field_value = get_field('my_custom_field');
if ($custom_field_value) {
    echo '<p>' . $custom_field_value . '</p>';
}
?>
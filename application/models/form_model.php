<?php

/**
 * @Author Evin Weissenberg
 */
class Form_Model extends CI_Model {

    function dropDown($table,$id,$value,$selected,$selected_value) {

        echo "<select name='".$id."' id='".$id."'>";

        echo ' <option selected value=' . $selected_value. '>' . $selected . '</option>';

        $q = $this->db->query("SELECT * FROM ".$table."  ");

        foreach ($q->result_array() as $value) {

            echo ' <option value=' . $value[$id] . '>' . $value[$value] . '</option>';

        }

        echo "</select>";

    }
}
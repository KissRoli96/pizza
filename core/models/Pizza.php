<?php

class Pizza extends Model
{
    public function getAllPizzas()
    {
        $sql = "SELECT * FROM pizza";
        $result = $this->db->connect()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
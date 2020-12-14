<?php

class Drink extends Model
{
    public function getAllDrinks()
    {

            $sql = "SELECT * FROM drink";
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
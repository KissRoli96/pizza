<?php

class Pizza extends DbConnection
{
    protected function getAllPizzas()
    {
        $sql = "SELECT * FROM pizza";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;

        if($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        }
    }
}
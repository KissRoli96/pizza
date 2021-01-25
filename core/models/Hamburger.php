<?php

class Hamburger extends Model
{
   public function getAllHamburgers()
   {
       $sql = "SELECT * FROM hamburger";
       $result = $this->db->connect()->query($sql);
       $numRows = $result->num_rows;

       if ($numRows > 0) {
           while ($row = $result->fetch_assoc()) {
               $data[] = $row;
           }
           return $data;
       }

   }
}
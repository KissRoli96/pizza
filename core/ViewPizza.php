<?php

class ViewPizza extends Pizza
{
    public function showAllPizzas()
    {
        $pizzas = $this->getAllPizzas();
        foreach ($pizzas as $pizza) {
            echo "Pizza ID: " . $pizza['id'] . "<br>";
            echo "Pizza Name: " . $pizza['pizzanev'] . "<br>";;
            echo "Pizza Price: " . $pizza['ar'] . "<br>";;
            echo "Pizza Size: " . $pizza['meret'] . "<br>";;
         }
    }

}
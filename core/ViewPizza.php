<?php

class ViewPizza extends Pizza
{
    public function showAllPizzas()
    {
        $pizzas = $this->getAllPizzas();
        return $pizzas;
    }

}
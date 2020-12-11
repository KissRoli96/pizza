<?php


class ViewDrink extends Drink
{
    public function showAllDrinks()
    {
        $drinks = $this ->getAllDrinks();

        return $drinks;
    }
}
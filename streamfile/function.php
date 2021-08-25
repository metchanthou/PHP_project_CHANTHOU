<?php 
    function connectDB(){
        return new mysqli('localhost', 'root', '', 'susei_food');
    }
    // --- Part-1 is select data from table
    function allFood() {
        return connectDB()->query("SELECT * FROM foods");
    }

    function allPizza() {
        return connectDB()->query("SELECT * FROM pizza");
    }

    function allICE() {
        return connectDB()->query("SELECT * FROM ice_cream");
    }

    function allIGD() {
        return connectDB()->query("SELECT * FROM ingrdients ");
    }

    function allRestaurants() {
        return connectDB()->query("SELECT * FROM restaurants ");
    }

    function allUser() {
        return connectDB()->query("SELECT *FROM username");
    }
 
    // --- Part-2 is delete product --//
    function foodbyID($f_id) {
        return connectDB()->query("SELECT *FROM foods WHERE food_ID = $f_id");
    }

    function igdbyID($igd_id) {
        return connectDB()->query("SELECT *FROM ingrdients WHERE igd_ID = $igd_id");
    }

    function ice_creambyID($ice_id) {
        return connectDB()->query("SELECT *FROM ice_cream WHERE ice_ID = $ice_id");
    }

    function pizzabyID($pi_id) {
        return connectDB()->query("SELECT *FROM pizza WHERE pizza_ID = $pi_id");
    }

    function resbyID($res_id) {
        return connectDB()->query("SELECT *FROM restaurants WHERE res_ID = $res_id");

    }

    // --- Part-3 is create new product
    function searchFood($name) {
        $food = $name['search'];
        return connectDB()->query("SELECT *FROM foods WHERE food_Name like '%$food%'");
    }

    function searchPizza($name) {
        $pizza = $name['search'];
        return connectDB()->query("SELECT *FROM pizza WHERE pizza_Name like '%$pizza%'");
    }

    function searchIGD($name) {
        $igd = $name['search'];
        return connectDB()->query("SELECT *FROM ingrdients WHERE igd_Name like '%$igd%'");
    }

    function searchICE($name) {
        $ice = $name['search'];
        return connectDB()->query("SELECT *FROM ice_cream WHERE ice_Name like '%$ice%'");
    }

    // --- Part-4 is delete product --//
    function removeFOOD($f_id) {
       return connectDB()->query("DELETE FROM foods WHERE food_ID = $f_id");
    }

    function removeIGD($igd_id) {
        return connectDB()->query("DELETE FROM ingrdients  WHERE igd_ID = $igd_id");
    }

    function removePIZZA($pi_id) {
        return connectDB()->query("DELETE FROM pizza WHERE pizza_ID = $pi_id");
        
    }

    function removeICE_CREAM($ice_id) {
        return connectDB()->query("DELETE FROM ice_cream WHERE ice_ID = $ice_id");

    }

    function readMore($text, $number) {
        return substr($text, 0, $number);
    }


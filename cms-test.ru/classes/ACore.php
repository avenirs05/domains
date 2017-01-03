<?php

abstract class ACore 
{
    protected $db;
    
    public function __construct() {
        $this->db = mysqli_connect(HOST, USER, PASSWORD, DB);
        if (!$this->db) {
            exit('Ошибка соединения с базой данных' . mysql_error);
        }
        
    }
    
    protected function get_header() {
        include 'header.php';
    }
    
    protected function leftBar() {
        $query = 'SELECT id, name FROM category';
        $result = mysqli_query($this->db, $query);
        if (!$result) { exit(mysql_error()); }
        $row = array();
        echo '<div class="quick-bg">
                <div id="spacer" style="margin-bottom:15px";>
                    <div id="rc-bg">Menu</div>
		</div>';
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $row = mysqli_fetch_array($result, MYSQL_ASSOC);
            printf("<div class='quick-links'>»
                   <a href='?option=category&id_cat=%s'>%s</a></div>", 
                    $row['id'], $row['name']);
        }
        echo '<div>';
    }
    
    protected function get_menu() {
        $row = $this->menu_array();
        echo '<div id="mainarea">
            <div class="heading">';
        echo '<div class="toplinks" style="padding-left:30px;">
                    <a href="?option=main">Главная</a></div>
                <div class="sap2">::</div>';
        foreach ($row as $item) {
            printf("<div class='toplinks'><a href='?option=menu?id=%s'>%s</a></div>
                    <div class='sap2'>::</div>", $item['id'], $item['name']);
        }
        echo '</div>';
    }
    
    protected function menu_array() {
        $query = 'SELECT id, name FROM menu';
        $result = mysqli_query($this->db, $query);
        if (!$result) { exit(mysql_error()); }
        $row = array();
        for ($i = 0; $i < mysqli_num_rows($result); $i++) {
            $row[] = mysqli_fetch_array($result, MYSQL_ASSOC);
        }
        return $row;
    }
    
    public function get_body () {
        $this->get_header();
        $this->leftBar();
        $this->get_menu();
    }
}

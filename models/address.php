<?php

class AddressModel extends Model {

    public function Index(){
        $this->query('SELECT * FROM addresses');
        $rows = $this->resultSet();
        return $rows;
    }
}
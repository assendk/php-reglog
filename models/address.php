<?php

class AddressModel extends Model {

    public function Index(){
        $this->query('SELECT * FROM users as usr
            LEFT JOIN addresses as adr
            ON usr.address_id = adr.id
            LEFT JOIN countries c2 on adr.country_id = c2.id;
        ');
        $rows = $this->resultSet();
        return $rows;
    }
    public function countriesList(){
        $this->query('SELECT * FROM countries');
        $rows = $this->resultSet();
        return $rows;
    }
}
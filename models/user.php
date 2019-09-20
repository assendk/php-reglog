<?php
class UserModel extends Model
{

//    public function Index(){
//        $this->query('SELECT * FROM users');
//        $rows = $this->resultSet();
//        print_r($rows);
//    }

    public function register()
    {
        try {
            $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//            $password = md5($post['password']);
            $password = password_hash($post['password'], PASSWORD_BCRYPT, ['cost'=>12]);

//            var_dump($post); die();

            if ($post['register']) {
                // insert user address
                $this->query('INSERT INTO `addresses` (address, country_id, postcode) VALUES(:address, :country_id, :postcode);');
                $this->bind(':address', $post['address']);
                $this->bind(':country_id', $post['countries']);
                $this->bind(':postcode', $post['postcode']);
                $this->execute();
                $aid = $this->lastInsertId();

                // insert user
                $this->query('INSERT INTO users (first_name, last_name, email, password, address_id) VALUES(:first_name, :last_name, :email, :password, :address_id);');
                $this->bind(':first_name', $post['first_name']);
                $this->bind(':last_name', $post['last_name']);
                $this->bind(':email', $post['email']);
                $this->bind(':password', $password);
                $this->bind(':address_id', $aid);

                $this->execute();

                $uid = $this->lastInsertId();

                if ($this->lastInsertId()) {
                    // Redirect
                    header('Location: ' . ROOT_URL . 'users/login');
                }
            } else {
                return false;
            }
//            return;
        } catch (PDOException $e) {
            return '{"error":{"text":' . $e->getMessage() . '}}';
        }
        return true;
    }

    public function countries(){
        $this->query('SELECT * FROM countries');
        $rows = $this->resultSet();
        return $rows;
    }

    public function Index(){
        $this->query('SELECT * FROM countries');
        $rows = $this->resultSet();
        return $rows;
    }

    public function login(){
        // Sanitize POST
        $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

//        $pass_check = password_verify ($password, $data->password);
        $password = htmlentities($post['password']);

        if($post['submit']){
            // Compare Login
            $this->query('SELECT * FROM users WHERE email = :email');

            $this->bind(':email', $post['email']);
            $this->bind(':password', $password);
            $row = $this->single();

            die($row);

            if($row){
                $pass_check = password_verify ($password, $data->password);

                $_SESSION['is_logged_in'] = true;
                $_SESSION['user_data'] = array(
                    "id"	=> $row['id'],
                    "name"	=> $row['name'],
                    "email"	=> $row['email']
                );
                header('Location: '.ROOT_URL.'shares');
            } else {
                echo 'Incorrect Login';
            }
        }
        return;
    }
}
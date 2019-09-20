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

            $password = md5($post['password']);
//        $password = password_hash($post['password'], PASSWORD_BCRYPT, ['cost'=>12]);

//            var_dump($post); die();

            if ($post['register']) {

                $this->query('INSERT INTO users (first_name, last_name, email, password, address_id) VALUES(:first_name, :last_name, :email, :password, :address);');
                $this->bind(':first_name', $post['first_name']);
                $this->bind(':last_name', $post['last_name']);
                $this->bind(':email', $post['email']);
                $this->bind(':password', $password);
                $this->bind(':address', '1');
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
}
<?php

class LoginContr extends Model
{

    private $uid;
    private $pwd;
   

    public function __construct($uid, $pwd)
    {
        $this->uid = $uid;
        $this->pwd = $pwd;
        
    }

    public function loginUser()
    {
        if ($this->emptyInput() == false) {
            header("Location: ../index.php?error=emptyinput");
            exit();
        }
       

        $data =  $this->getUser($this->uid, $this->pwd);
        $_SESSION['username'] = $data[0]['users_uid'];
        header("Location: ../index.php");
        
    }

    private function emptyInput()
    {
        $result = null;

        if (empty($this->uid) || empty($this->pwd) ) {

            $result = false;
        } else {
            $result = true;
        }

        return $result;
    }

}

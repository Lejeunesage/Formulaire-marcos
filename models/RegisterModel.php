<?php
class RegisterModel extends Connection {
    private $lastname;
    private $firstname;
    private $username;
    private $email;
    private $password;
    
    public function __construct($firstname, $lastname, $username, $email, $password) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function verify_email_without_inscription(){
              
            try {
                $conn = $this->connect();
                $sql = "SELECT * FROM users WHERE useremail=:mail";
                $stmt = $conn->prepare($sql);
                $stmt->execute([':mail' => $this->email,]);
                $user = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($user) {
                    header("location: ../views/Sig_up.php?msg=inavlid"); 
                } else {
                    return 'false';
                }
               // $stmt->closeCursor();//Interrompre la recherche 
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
    }

    public function registerUser() {
        if ($this->verify_email_without_inscription() == 'false') {
            try {
                //code...
                $conn = $this->connect();
                
                    $sql = "INSERT INTO 
                `miniforum`.users VALUES ( NULL,
                :userlastname, :userfirstname, :username, :useremail, :userpassword)";
                    $stmt = $conn->prepare($sql);
                    $stmt = $stmt->execute([
                        ":userlastname" => $this->lastname,
                        ":userfirstname" => $this->firstname,
                        ":username" => $this->username,
                        ":useremail" => $this->email,
                        ":userpassword" => password_hash($this->password, PASSWORD_DEFAULT),
                    ]);
                
                    header("location:../views/Sig_in.php");
                } catch (PDOException $e) {
                    //throw $th;
                echo $e->getMessage();        
                }   
        }else {
            header("location: ../views/Sig_up.php?msg=inavlid");         

        }
    }

}
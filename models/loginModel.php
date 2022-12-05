<?php
class loginModel extends Connection
{
    private  $emailuser;
    private $passworduser;

    public function __construct($emailuser, $passworduser)
    {
        $this->emailuser = $emailuser;
        $this->passworduser = $passworduser;
    }

    // public function inputValidConnexion(){
    //     //retourne true si tous les fonctions suivantes sont verifier avec succes
    // }

    public function emailuserDB()
    {
        try {
            $conn = $this->connect();
            $sql = "SELECT * FROM users WHERE useremail=:mail";
            $stmt = $conn->prepare($sql);
            // $stmt1 = $conn->prepare($sql1);
            $stmt->execute([':mail' => $this->emailuser,]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($this->passworduser, $user['userpassword'])) {
                $userfirstname= $user['userfirstname'];
                 $userlastname= $user['userlastname'];
                 $username= $user['username'];
                 $password=$user['userpassword'];
                header("location:../views/Dashboard.php?msg=userinformations&userfirstname=$userfirstname&userlastname=$userlastname&username=$username&passcrypt=$password&end");

            } else {
               // header("location:../views/Dashboard.php?msg=userinformations&userfirstname");
                header("location: ../views/Sig_in.php?msg=inavlid&usermail=$this->emailuser"); 

            }
            $stmt->closeCursor();//Interrompre la recherche 
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

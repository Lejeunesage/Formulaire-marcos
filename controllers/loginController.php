


<?php

class loginController{
    private  $emailuser;
    private $passworduser;

    public function __construct($emailuser, $passworduser)
    {
        $this->emailuser = $emailuser;
        $this->passworduser = $passworduser;
    }

    public function valideInput()
    {
        //verifier si toutes les fonctions retournent false
        if ($this->emptyInputs() == 'false'&& $this->validateEmail() == 'false') {
            //si oui, le bloc retourne false
            return 'false';
        }
    }  

    public function emptyInputs(){
        if(empty($this->emailuser) || empty($this->passworduser)){
            header("location:../views/Sig_in.php?msg=InvalidInputs&usermail=$this->emailuser");
        }else{
            return 'false';
        }
    }

    /**
     * Vérifie si le email est renseigné et valide 
     * @return boolean
     */
    public function validateEmail()
    {
        if (!filter_var($this->emailuser, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../views/Sig_in.php?msg=emptyInputs&usermail=$this->emailuser&passwordNotMatch&password=$this->password");
        } else {
            return 'false';
        }
    }

    
}
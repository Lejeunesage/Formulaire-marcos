<?php

/**
 * Classe qui permet de valider les informations 
 * de l'utilisateur
 */
class RegisterController {
    private $firstname;
    private $lastname;
    private $username;
    private $email;
    private $password;
    private $passwordConfirm;
    //constructeur de la classe RegisterController
    public function __construct($firstname, $lastname, $username, $email, $password, $passwordConfirm) {
        $this->firstname = htmlspecialchars($firstname) ;
        $this->lastname = htmlspecialchars($lastname);
        $this->username = htmlspecialchars($username);
        $this->email = htmlspecialchars($email);
        $this->password = htmlspecialchars($password);
        $this->passwordConfirm = htmlspecialchars($passwordConfirm);

    }
    /**
     * 
     * La fonction qui permet de valider les entrées de l'utilisateur
     */
    public function valideInput() {
        //verifier si toutes les fonctions retournent false
        if($this->emptyInputs()=='false' && $this->validateUsername()=='false'&& $this->validateEmail() =='false'&& $this->pwdMatch() =='false')
        {
            //si oui, le bloc retourne false
            return 'false';
        }
    }   

    /**
     * Vérifie si les inputs sont renseignés
     * @return boolean
     */
    public function emptyInputs() {
        // votre code
        
        if(empty($this->firstname) 
        || empty($this->lastname) 
        || empty($this->username) 
        || empty($this->email) 
        || empty($this->password) 
        || empty($this->passwordConfirm))
        {
            header("Location:../views/Sig_up.php?msg=emptyInputs&userfirstname=$this->firstname&userlastname=$this->lastname&username=$this->username&useremail=$this->email&passwordNotMatch&password=$this->password");
        }else{
            return 'false';
        }
    }

    /**
     * Vérifie si le username est renseigné 
     * @return boolean
     */
    public function validateUsername() {
        // correspond à un username commençant par un caractère alphabétique suivi d'un ou plusieurs caractères alphabétique|nombres|@|_|-
        if(!ctype_alnum($this->username)) {
            header("Location: ../views/Sig_up.php?msg=emptyInputs&userfirstname=$this->firstname&userlastname=$this->lastname&username=$this->username&useremail=$this->email&passwordNotMatch&password=$this->password");
        }else{
            return 'false';
        }
        
    }

    /**
     * Vérifie si le email est renseigné et valide 
     * @return boolean
     */
    public function validateEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../views/Sig_up.php?msg=emptyInputs&userfirstname=$this->firstname&userlastname=$this->lastname&username=$this->username&useremail=$this->email&passwordNotMatch&password=$this->password");
        }else{
            return 'false';
        }
        
    }

    /**
     * Vérifie si les mots de passes renseignés sont identiques 
     * @return boolean
     */
    public function pwdMatch() {
  
       if ($this->password !== $this->passwordConfirm) {
      header("Location: ../views/Sig_up.php?msg=emptyInputs&userfirstname=$this->firstname&userlastname=$this->lastname&username=$this->username&useremail=$this->email&passwordNotMatch&password=$this->password");
       }else{
            return 'false';
       }
     
    }
}
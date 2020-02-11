<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


class envoyer_email
{
    //attributs
   public $nom;
   public $prenom;
   public $email;
   public $message;
   public $sujet;

   //methodes
    public function __construct($data)
    {
        $this->nom = htmlentities($_POST["nom"]);
        $this->prenom = htmlentities($_POST["prenom"]);
        $this->email = htmlentities($_POST["email"]);
        $this->message = htmlentities($_POST["message"]);
        $this->sujet = htmlentities($_POST["sujet"]);

    }

    
    public function send_email($phpMailer)
    {


        try
        {
            $phpMailer->SMTPDebug = SMTP::DEBUG_SERVER;  
            $phpMailer->isSMTP();           
            $phpMailer->SMTPAuth  = true; 
            $phpMailer->Host= 'smtp.gmail.com';                                    
            $phpMailer->Username   = 'neyyvonne51@gmail.com';    
            $phpMailer->Password   = 'fkoiazydczuvkrdl';     
            $phpMailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
            $phpMailer->Port       = 587;  

            $phpMailer->setFrom($this->email, $this->nom);
            $phpMailer->addAddress ('neyyvonne51@gmail.com');   
            //$mail->addAddress('ellen@example.com');               // Name is optional
            $phpMailer->addReplyTo($this->email, 'Information');  
            $phpMailer->addCC($this->email);   
            $phpMailer->isHTML(false);
            $phpMailer->Subject = $this->sujet;
            $phpMailer->Body = $this->message;
            $phpMailer->AltBody = $this->message;
            

             $phpMailer->send();
             echo 'Votre message a bien été envoyé';
            
        }catch(Exception $e)
        {
            echo "Message could not be sent. Mailer Error: {$phpMailer->ErrorInfo}";
        }
    

    }
}


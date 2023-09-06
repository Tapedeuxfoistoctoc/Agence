<?php
class MaConnection
{

    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connectionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote)
    {
        $this->nomBaseDeDonnees = $nomBaseDeDonnees;
        $this->motDePasse = $motDePasse;
        $this->nomUtilisateur = $nomUtilisateur;
        $this->hote = $hote;


        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connectionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDePasse);
            $this->connectionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "True 2Ki est Connecté";
        } catch (PDOException $e) {
            echo "Error : " . $e->getMessage();
        }
    }

    /////////////////////////////////Table de demande de mots de passe pour ce connecté///////////////////////////////////////////
    
  /*  public function inscription_utilisateur($mail, $mdp){
        try {
            $requete = "INSERT INTO compte (mail, mot_de_passe) values(:mail, :mdp)";
            $requete_preparee = $this->connectionPDO->prepare($requete);
            
            $requete_preparee->bindParam(":mail", $mail, PDO::PARAM_STR);
            $requete_preparee->bindParam(":mdp", $mdp, PDO::PARAM_STR);
    
            $requete_preparee->execute();
            return true;
        } catch (PDOException $e) {
            echo "Erreur : ". $e->getMessage();
            return false;
        }    
    }  */
}   

$connection = new MaConnection("roshanimmo", "", "root", "localhost");

<?php
  class User{

    public $id;
    public $name;

    public function __construct($id,$name){
      $this->id = (int)$id;
      $this->name = $name;
    }

    public function getId(): int{
      return $this->id;
    }
    public function setId(int $id) {
      $this->id = $id;

      return $this;
    }

    public function getName(){
        return $this->name;
    }
    public function setName(string $name) {
        $this->name = $name;
  
        return $this;
    }

    public static function create($user){
        try{
          $sql= "INSERT INTO `user`(`name`) 
            VALUES (:name);"; // Sécurité contre les injections SQL
            $db=DataBase::getPDO()->prepare($sql);
            $db->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
            $db->execute();
        }
        catch (\PDOException $exception){
            $msgErreur = $exception->getMessage();
            require_once './views/content/error.php';
        } 
    }
  
    public static function read() {
      try {
        $sql= "SELECT * from `user`"; 
          $db=DataBase::getPDO()->prepare($sql);
          $db->execute();
          $req = $db->fetchALL(PDO::FETCH_OBJ);
          $obj = [];
          foreach ($req as $objReq){
            $obj[] = new User($objReq->ID, $objReq->name);
          }
          return $obj;
      }
      catch (\PDOException $exception){
        $msgErreur = $exception->getMessage();
        require_once './views/content/error.php';
      } 
    }
  }
    
?>
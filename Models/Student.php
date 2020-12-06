<?php 

    require "Connection.php";
    


class Student
{
  public $id;
  public $name;
  public $telphone;

  public static function getALL()
  {
        
        $Connection = Connection::getDb(); 
        //Instancia de Connection + chamada do método

        $stmt = $Connection->query("SELECT * FROM students;");
        return $stmt->fetchALL(PDO::FETCH_ASSOC); //statment e fetch para conversão da tabela em array

  }
  }

//   public function cadastrarAluno ()
//   {
//       INSERT INTO students name,telphone VALUES ("","");
//   }

//   public function deletarAluno ()
//   {
//         DELETE FROM students where id = 1;
//   }

//   public function atualizarAluno ()
//   {
//       UPDATE 
//   }
// }

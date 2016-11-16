<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        spl_autoload_register(function($class_name){
            require_once $class_name.".php";  
        });
        use Users\Student;
        use Users\Course as Course;
        use Users\Teacher;
        use Users\School;
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
          $studente1 = new Student("Elisa",20,'ggg@gfg');
          $studente2 = new Student("Diana",21,'hhh@gfg');
          $studente3 = new Student("Marco",22,'kkk@gfg');
          echo $studente1;
           echo '<br>';
          echo $studente2;
           echo '<br>';
          echo $studente3;
          
          $Corso1 = new Course("Matematica", 18);
          $Corso2 = new Course("Fisiologia", 15);
          
          $scuola1 = new School('Wylab');
          
          $studente2->addCourse($Corso1);
          $studente3->addCourse($Corso1);
          $studente1->addCourse($Corso2);
          
          $scuola1->addStudent($studente1);
          $scuola1->addStudent($studente2);
          $scuola1->addStudent($studente3);
          echo $studente2;
          
          $insegnante1 = new Teacher("Fazio",30,'aaa@kk');
          $insegnante2 = new Teacher("Roberto",31,'ttt@kk');
          
          $insegnante1->setCourse($Corso1);
         
          $insegnante2->setCourse($Corso2);
          
          $insegnante1->mostraSuoiAlunni();
          
          
         
        ?>
    </body>
</html>

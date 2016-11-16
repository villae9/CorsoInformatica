<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        spl_autoload_register(function($class_name){
            require_once $class_name.".php";  
        });
        use Users\Student;
        use Users\Course as Course;
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
          
          $studente2->addCourse($Corso1);
          echo $studente2;
          
        ?>
    </body>
</html>

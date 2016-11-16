<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
      
          require_once 'classes/Student.php';
          $studente1 = new Student("Elisa",20,'ggg@gfg');
          $studente2 = new Student("Diana",21,'hhh@gfg');
          $studente3 = new Student("Marco",22,'kkk@gfg');
          var_dump($studente1);
          var_dump($studente2);
          var_dump($studente3);
        ?>
    </body>
</html>

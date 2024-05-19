<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SYNTAX</title>
</head>
<body>
    <p><?php 
        // TASK #1
        $name = 'Name: Rainier C. Bauca '; 
        $age = 'Age: 20 years old';
        $address = 'Address: Santa Monica San Simon Pampanga';
        $hobbies = 'Hobbies: Editing, Photography, Movies, Scroll sa TIKTOK';
        $pet_peeve = 'Pet Peeve: Being Late, Loud Phone Games ';

        echo $name, '<br>'; 
        echo $age, '<br>'; 
        echo $address, '<br>'; 
        echo $hobbies, '<br>'; 
        echo $pet_peeve, '<br>','<br>','<br>','<br>','<br>'; 


        // TASK #2
        // echo $hobbies, '<br>'; 
        // echo $pet_peeve, '<br>'; 


        // TASK #3
        define('NAME','Rainier C. Bauca');
        define('AGE','20 years old');
        define('ADDRESS','Santa Monica San Simon Pampanga');
        define('HOBBIES','Editing, Photography, Movies, Scroll sa TIKTOK');
        define('PET_PEEVE','Being Late, Loud Phone Games');

        echo NAME, '<br>';
        echo AGE, '<br>';
        echo ADDRESS, '<br>';
        echo HOBBIES, '<br>';
        echo PET_PEEVE, '<br>','<br>','<br>','<br>','<br>';


        // TASK #4
        echo '<pre>';
        var_dump(NAME, AGE, ADDRESS, HOBBIES, PET_PEEVE);
        echo '</pre>';


        /* TASK #5
           kasi maaga ako lagi kapag may nag set ng time kaya pag may nalalte nakakainis tapos nakakdistract yung maiingay mag selpon tas naka full volume pa.
            */
        ?>
    </p>
</body>
</html>
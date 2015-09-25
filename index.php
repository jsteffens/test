<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $hours = 13;
        function Greetings($hours=0){
            if($hours >= 6 && $hours < 12){
                return 'Good Morning!';
            }
            else if($hours >= 12 && $hours < 18){
                return 'Good Afternoon!';
            }
            else{
                return 'Good Night!';
            }
        }
        
        print Greetings($hours);
        ?>
    </body>
</html>

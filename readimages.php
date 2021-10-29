<!doctype html>
<html>
    <head>
        <style>
            video{
                float: left;
            }
        </style>
    </head>
    <body>
        <?php
            include('conn.php');
            $db = new DB();
            $video = $db->get_museais();
            foreach($video as $post){
                echo'<img src='.$post["location"].' controls width="300" height="200">';
            }
        ?>

    </body>
</html>
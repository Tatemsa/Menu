<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/css/bootstrap.min.css">
        <link rel="stylesheet" href="style/css/style.css">
        <script src="style/js/bootstrap.bundle.min.js"></script>
        <script src="style/js/bootstrap.min.js"></script>
        
        <title>Menu du caviar</title>
    </head>
    <body>
<body>
    <div class="container site">
        <h1 class="text-logo"> <span class="glyphicon glyicon-cutlery"></span> Menu du Caviar<span class="glyphicon glyicon-cutlery"></span></h1>
       
        <?php
            require 'admin/database.php';

            echo '<nav>
                    <ul class="nav nav-pills">';
            $db = Database::connect();
            $results = $db->query('SELECT * FROM categories');
            $categories = $results->fetchAll();

            foreach($categories as $category)
            {
                if($category['id']=='1')
                {
                    echo ' <li role="presentation" class="active" ><a href="#'.$category['id'].'" data-toggle="tab">'.$category['Titre'].'</a></li>';
                }
                else
                {
                    echo ' <li role="presentation" ><a href="#'.$category['id'].'" data-toggle="tab">'.$category['Titre'].'</a></li>';
                }
            }

            echo    ' </ul>
                 </nav>';

            echo '<div class="tab-content">';
            foreach($categories as $category)
            {
                // if($category['id']=='1')
                // {
                //     echo '<div class="tab-pane active" id="'.$category['id'].'">';
                // }
                // else
                // {
                //     echo '<div class="tab-pane active" id="'.$category['id'].'">';
                // }
                echo '<div class="tab-pane active" id="'.$category['id'].'">';
                echo ' <div class="row">';
                
                $results=$db->prepare('SELECT * FROM plat WHERE category=?');
                $results->execute(array($category['id']));
                
                while($row=$results->fetch())
                {
                    echo '<div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <img src="images/'.$row['image'].'" alt="Image du plat">
                                <div>'.$row['price'].'</div>
                                <div class="caption">
                                    <h4>'.$row['name'].'</h4>
                                    <p>'.$row['description'].'</p>
                                    <a href="" class="btn btn-order" role="button"><span class="glyphicon glyphicon-dhopping-cart"> Commander</span></a>
                                </div>
                            </div>
                          </div>';
                }

                echo    '</div>
                    </div>';
            }
            $db=Database::disconnect();
            echo '</div>';
        ?>       
    </div>
    <div>
        <h1><a href="admin/index.php">Administration du site</a></h1>
    </div>
</body>
</html>
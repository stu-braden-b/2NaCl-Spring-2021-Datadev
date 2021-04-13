<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
//starts connectiong to database
require "dbInclude";
//creates SQL query selecting desired information
$sql = "SELECT article_ID, article_title, article_date 
FROM news_articles ORDER BY article_date DESC LIMIT 5;";
//runs the query and stores the results
$result = $conn->query($sql);
?>

<body>
<?php
//makes sure there are more than 0 results
        if ($result->num_rows > 0){ 
            //print out the results for the query
            while($row = mysqli_fetch_array($result)) {
                //if there is an image, it displays the image
                if($row['article_photo'] != null){
                    echo "<div class='article_image'>{$row["article_photo"]}</div>";
                }
                //grabs the articleID from the URL
                $_SESSION['aid'] = $row['article_ID'];
                echo "
                    <h1 class='article__title'>{$row['article_title']}</h1>
                    <div class=article__namedate>
                        <i>{$row['user_FName']} {$row['user_LName']}, {$row['article_date']}</i>
                    </div>
                    <div class=article__body>{$row['article_content']}
                    </div>";
            }
        // reports to the user that there are no results from the query
        } else{
            echo "Couldn't find values in database.";
        }
?>
    <h1>Hello World!</h1>
</body>
</html>
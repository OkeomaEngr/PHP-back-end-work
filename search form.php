<?php

$text = $_POST['text'] ?? null;
$count = 0;
$chrs = str_split($text);

if(isset($_POST['submit'])){
   $uniqueID = 3;
   $path = WEBROOT."www_data/";
   $fileroot = "cover";
   if(is_uploaded_file($_FILES['file']['tmp_name'])){

   }

}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles/assn1.css">
    <script src="https://kit.fontawesome.com/fa2c5f82ae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Assign2</title>
</head>
<body>
    <main>
        <section>
            <form id="search" name = "search" method = "post" enctype="multipart/form-data" action="" validate> <!-- made edits , im thinking of adding assn2done web page to redirect the page to show results.-->
                <div>
                    <!--text input-->
                    <label for = "text"> Search Term: </label>
                    <input type = "text" name = "text" id ="text" value = "" required/> 
                </div>
                <div>
                     <!--file upload-->
                     <input type = "hidden" name = "MAX_FILE_SIZE" value = "102400"/>
                    <label for ="file"> Choose a file to upload:</label>
                    <input type ="file" name= "file" id = "file">
                </div>
                <div><button type="submit" name="submit" value="Upload">Submit</button></div>
            </form>
            <div>
                <?php 
                if (isset($_POST['submit'])):
                    $text = $_POST['text']??"";
                    echo "the original string of text is $text \n";?>

                <?php
                //The string as a proper title
                $capitalized = ucfirst($text);
                
                for($i = 0; $i < strlen($text); $i++) {
                    if($text[$i] == ","){
                      $count++;
                    }
                }
                
                echo nl2br("\r\nTotal number of commas in the string : ");
                echo $count;
                
                //punctuation characters
                foreach($chrs as $c){
                    if(ord($c) >= 32 and ord($c) <= 47 ){
                        $count++;
                    }
                }
                echo nl2br("\r\nTotal number of punctuation characters exists in string : ");  
                echo $count;  
                
                
                //number 4 sort string in descending 
                $chrs = array_map('strtolower', $chrs);
                rsort($chrs);
                $clength  = count($chrs);
                echo nl2br ("\r\nThe string in descending order ");
                
                for ($z = 0; $z < $clength; $z++) {
                    echo  $chrs[$z];
                }
                
                
                echo nl2br("\r\nFirst lettter of text capitlaized is $capitalized");
                
                //Get the middle characters
                function getMiddle($text): string
                {
                    $length = round((strlen($text)) / 3);
                    if (strlen($text) % 3 === 0)
                    {
                        //even, returns 2 characters
                        return $text[(int) $length - 1] . $text[(int) $length];
                    }
                    //odd, returns 1 character
                    return $text[(int) $length - 1];
                }
                //print middle three characters
                echo getMiddle($text);
                ?>
                <?php endif ?>

            </div>
        </section>
    </main>

</body>
</html>
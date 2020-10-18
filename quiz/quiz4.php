<?php
session_start();
if (isset($_POST['next'])) {
    $count=0;
    if($_POST['q1']=='d')
    {
        $count=$count+1;
    }
    if($_POST['q2']=='c')
    {
        $count=$count+1;
    }
    if($_POST['q3']=='a')
    {
        $count=$count+1;
    }
    if($_POST['q4']=='b')
    {
        $count=$count+1;
    }
    if($_POST['q5']=='d')
    {
        $count=$count+1;
    }
    $_SESSION["score4"]=$count;
    echo '<script type="text/javascript"> window.open("result.php","_self");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

body{
    background-image:linear-gradient(to right, rgba(255,0,0,0.8), rgba(255,20,147,0.8));;
}

</style>


<body>
<h1>HTML quiz</h1>
    <form method="post" >
        <h3>Ques1 : The correct sequence of HTML tags for starting a webpage is:</h3>
            <ol>
                <li>
                    <input type="radio" name="q1" value="a" />Head, Title, HTML, body
                </li>
                <li>
                    <input type="radio" name="q1" value="b" />HTML, Body, Title, Head
                </li>
                <li>
                    <input type="radio" name="q1" value="c" />HTML, Head, Title, Body
                </li>
                <li>
                    <input type="radio" name="q1" value="d" />HTML, Head, Title, Body
                </li>
            </ol>
        <br/>
        <h3>Ques2 : Which of the following element is responsible for making the text bold in HTML</h3>
            <ol>
                <li>
                    <input type="radio" name="q2" value="a" />pre
                </li>
                <li>
                    <input type="radio" name="q2" value="b" />a
                </li>
                <li>
                    <input type="radio" name="q2" value="c" />b
                </li>
                <li>
                    <input type="radio" name="q2" value="d" />br
                </li>
            </ol>
        <br/>
        <h3>Ques3 : Which character is used to represent the closing of a tag in HTML:</h3>
            <ol>
                <li>
                    <input type="radio" name="q3" value="a" />/
                </li>
                <li>
                    <input type="radio" name="q3" value="b" />!
                </li>
                <li>
                    <input type="radio" name="q3" value="c" />\
                </li>
                <li>
                    <input type="radio" name="q3" value="d" />.
                </li>
            </ol>
        <br/>
        <h3>Ques4 : input tag  is: </h3>
            <ol>
                <li>
                    <input type="radio" name="q4" value="a" />a format tag
                </li>
                <li>
                    <input type="radio" name="q4" value="b" />an empty tag
                </li>
                <li>
                    <input type="radio" name="q4" value="c" />All of the above
                </li>
                <li>
                    <input type="radio" name="q4" value="d" />None of the above
                </li>
            </ol>
        <br/>
        <h3>Ques5 : HTML tags are enclosed in:</h3>
            <ol>
                <li>
                    <input type="radio" name="q5" value="a" /># and #
                </li>
                <li>
                    <input type="radio" name="q5" value="b" />{ and }
                </li>
                <li>
                    <input type="radio" name="q5" value="c" />! and ?<
                </li>
                <li>
                    <input type="radio" name="q5" value="d" />< and >
                </li>
            </ol>
        <br/>
        <button type="submit" value="Submit" name="next" >Next</button>
    </form>
</body>
</html>
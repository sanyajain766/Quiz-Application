<?php
session_start();
if (isset($_POST['next'])) {
    $count=0;
    if($_POST['q1']=='d')
    {
        $count=$count+1;
    }
    if($_POST['q2']=='b')
    {
        $count=$count+1;
    }
    if($_POST['q3']=='b')
    {
        $count=$count+1;
    }
    if($_POST['q4']=='a')
    {
        $count=$count+1;
    }
    if($_POST['q5']=='a')
    {
        $count=$count+1;
    }
    $_SESSION["score1"]=$count;
    echo '<script type="text/javascript"> window.open("quiz2.php","_self");</script>';
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
<h1>C quiz</h1>
    <form method="post" >
        <h3>Ques1 : A single line comment in C language source code can begin with:</h3>
            <ol>
                <li>
                    <input type="radio" name="q1" value="a" />;
                </li>
                <li>
                    <input type="radio" name="q1" value="b" />:
                </li>
                <li>
                    <input type="radio" name="q1" value="c" />/*
                </li>
                <li>
                    <input type="radio" name="q1" value="d" />//
                </li>
            </ol>
        <br/>
        <h3>Ques2 : Which of the following functions disconnects the stream from the file pointer:</h3>
            <ol>
                <li>
                    <input type="radio" name="q2" value="a" />fremove()
                </li>
                <li>
                    <input type="radio" name="q2" value="b" />fclose()
                </li>
                <li>
                    <input type="radio" name="q2" value="c" />remove()
                </li>
                <li>
                    <input type="radio" name="q2" value="d" />file pointer to be set to null">file pointer to be set to null
                </li>
            </ol>
        <br/>
        <h3>Ques3 : When C language was invented:</h3>
            <ol>
                <li>
                    <input type="radio" name="q3" value="a" />1970
                </li>
                <li>
                    <input type="radio" name="q3" value="b" />1972
                </li>
                <li>
                    <input type="radio" name="q3" value="c" />1978
                </li>
                <li>
                    <input type="radio" name="q3" value="d" />1979
                </li>
            </ol>
        <br/>
        <h3>Ques4 : The binary equivalent of 50 is: </h3>
            <ol>
                <li>
                    <input type="radio" name="q4" value="a" />110010
                </li>
                <li>
                    <input type="radio" name="q4" value="b" />10101110
                </li>
                <li>
                    <input type="radio" name="q4" value="c" />101
                </li>
                <li>
                    <input type="radio" name="q4" value="d" />1000100
                </li>
            </ol>
        <br/>
        <h3>Ques5 : Which library can convert an integer to a string:</h3>
            <ol>
                <li>
                    <input type="radio" name="q5" value="a" />Itoa()
                </li>
                <li>
                    <input type="radio" name="q5" value="b" />ultoa()
                </li>
                <li>
                    <input type="radio" name="q5" value="c" />sprintf()
                </li>
                <li>
                    <input type="radio" name="q5" value="d" />None of the above
                </li>
            </ol>
        <br/>

        <button type="submit" value="Submit" name="next" >Next</button>
    </form>
</body>
</html>
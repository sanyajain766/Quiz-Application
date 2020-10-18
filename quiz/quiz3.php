<?php
session_start();
if (isset($_POST['next'])) {
    $count=0;
    if($_POST['q1']=='c')
    {
        $count=$count+1;
    }
    if($_POST['q2']=='d')
    {
        $count=$count+1;
    }
    if($_POST['q3']=='d')
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
    $_SESSION["score3"]=$count;
    echo '<script type="text/javascript"> window.open("quiz4.php","_self");</script>';
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
<h1>Java quiz</h1>
    <form method="post" >
        <h3>Ques1 : Which of the following is not a Java features:</h3>
            <ol>
                <li>
                    <input type="radio" name="q1" value="a" />Dynamic
                </li>
                <li>
                    <input type="radio" name="q1" value="b" />Architecture
                </li>
                <li>
                    <input type="radio" name="q1" value="c" />Use of pointers
                </li>
                <li>
                    <input type="radio" name="q1" value="d" />Object-oriented
                </li>
            </ol>
        <br/>
        <h3>Ques2 :   The \u0021 article referred to as a:</h3>
            <ol>
                <li>
                    <input type="radio" name="q2" value="a" />Octal escape
                </li>
                <li>
                    <input type="radio" name="q2" value="b" />Hexadecimal
                </li>
                <li>
                    <input type="radio" name="q2" value="c" />Line feed
                </li>
                <li>
                    <input type="radio" name="q2" value="d" />Unicode escape sequence
                </li>
            </ol>
        <br/>
        <h3>Ques3 :  _____ is used to find and fix bugs in the Java programs.:</h3>
            <ol>
                <li>
                    <input type="radio" name="q3" value="a" />JVM
                </li>
                <li>
                    <input type="radio" name="q3" value="b" />JRE
                </li>
                <li>
                    <input type="radio" name="q3" value="c" />JDK
                </li>
                <li>
                    <input type="radio" name="q3" value="d" />JDB
                </li>
            </ol>
        <br/>
        <h3>Ques4 :  What is the return type of the hashCode() method in the Object class:</h3>
            <ol>
                <li>
                    <input type="radio" name="q4" value="a" />Object
                </li>
                <li>
                    <input type="radio" name="q4" value="b" />int
                </li>
                <li>
                    <input type="radio" name="q4" value="c" />long
                </li>
                <li>
                    <input type="radio" name="q4" value="d" />void
                </li>
            </ol>
        <br/>
        <h3>Ques5 : Which of the following is a valid long literal:</h3>
            <ol>
                <li>
                    <input type="radio" name="q5" value="a" />ABH8097
                </li>
                <li>
                    <input type="radio" name="q5" value="b" />L990023
                </li>
                <li>
                    <input type="radio" name="q5" value="c" />904423
                </li>
                <li>
                    <input type="radio" name="q5" value="d" />0xnf029L
                </li>
            </ol>
        <br/>

        
        <button type="submit" value="Submit" name="previous" formaction="quiz2.php">Previous</button>
        <button type="submit" value="Submit" name="next" >Next</button>
    </form>
</body>
</html>
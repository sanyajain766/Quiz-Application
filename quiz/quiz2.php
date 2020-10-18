<?php
session_start();
if (isset($_POST['next'])) {
    $count=0;
    if($_POST['q1']=='a')
    {
        $count=$count+1;
    }
    if($_POST['q2']=='b')
    {
        $count=$count+1;
    }
    if($_POST['q3']=='a')
    {
        $count=$count+1;
    }
    if($_POST['q4']=='c')
    {
        $count=$count+1;
    }
    if($_POST['q5']=='b')
    {
        $count=$count+1;
    }
    $_SESSION["score2"]=$count;
    echo '<script type="text/javascript"> window.open("quiz3.php","_self");</script>';
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
<h1>C++ quiz</h1>
    <form method="post" >
        <h3>Ques1 : A user defined header file is included by following statement in general:</h3>
            <ol>
                <li>
                    <input type="radio" name="q1" value="a" />#include 'file.h'
                </li>
                <li>
                    <input type="radio" name="q1" value="b" />#include file
                </li>
                <li>
                    <input type="radio" name="q1" value="c" />#include file.h
                </li>
                <li>
                    <input type="radio" name="q1" value="d" />#include "file"
                </li>
            </ol>
        <br/>
        <h3>Ques2 :   Operators sizeof and ?:</h3>
            <ol>
                <li>
                    <input type="radio" name="q2" value="a" />Both can be overloaded
                </li>
                <li>
                    <input type="radio" name="q2" value="b" />Both cannot be overloaded
                </li>
                <li>
                    <input type="radio" name="q2" value="c" />Only sizeof can be overloaded
                </li>
                <li>
                    <input type="radio" name="q2" value="d" />Only ?: can be overloaded
                </li>
            </ol>
        <br/>
        <h3>Ques3 : Class function which is called automatically as soon as the object is created is called as:</h3>
            <ol>
                <li>
                    <input type="radio" name="q3" value="a" />Constructor
                </li>
                <li>
                    <input type="radio" name="q3" value="b" />Destructor
                </li>
                <li>
                    <input type="radio" name="q3" value="c" />Friend function
                </li>
                <li>
                    <input type="radio" name="q3" value="d" />Inline function
                </li>
            </ol>
        <br/>
        <h3>Ques4 : With respective to streams >> (operator) is called as </h3>
            <ol>
                <li>
                    <input type="radio" name="q4" value="a" />Insertion Operator
                </li>
                <li>
                    <input type="radio" name="q4" value="b" />Extraction Operator
                </li>
                <li>
                    <input type="radio" name="q4" value="c" />Right shift operator
                </li>
                <li>
                    <input type="radio" name="q4" value="d" />Left shift operator
                </li>
            </ol>
        <br/>
        <h3>Ques5 : Choose the invalid identifier from the below:</h3>
            <ol>
                <li>
                    <input type="radio" name="q5" value="a" />Int
                </li>
                <li>
                    <input type="radio" name="q5" value="b" />bool
                </li>
                <li>
                    <input type="radio" name="q5" value="c" />DOUBLE
                </li>
                <li>
                    <input type="radio" name="q5" value="d" />_0_
                </li>
            </ol>
        <br/>

        <button type="submit" value="Submit" name="previous" formaction="quiz1.php">Previous</button>
        <button type="submit" value="Submit" name="next" >Next</button>
    </form>
</body>
</html>
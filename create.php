<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>MyProfession</title>
        <link href='https://fonts.googleapis.com/css?family=Jura:600' rel='stylesheet' type='text/css'>
        <link href="styles/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="js/script.js"></script>
    </head>
    <header>
        <h1>MyProfession</h1>
        <ul>
            <span>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="index.php">Home</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="about.php">About Us</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="comment.php">Comment</a></li>
                <li onmouseover="navHighlight(this)"
                    onmouseout="navUnhighlight(this)"><a href="createaccount.php">Create Account</a></li>
            </span>
        </ul>
    </header>
    <header>
        <h1>Create Account</h1>
    </header>
    <nav>
        <ul>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li>
            <li onmouseover="navHighlight(this)"
                onmouseout="navUnhighlight(this)"><a href="test.php">Test</a></li
        </ul>
    </nav>
    <main>
        <content>
            <h1>Let's Get You Started.</h1>
            <p>We'll need some information.</p>
            <div id='createaccountinputs'>
                   <form id = "accountform" 
                      action = "CreateAccount.php"
                      method="post"
                      onsubmit="validateComment()"
                      >
                    <span>
                        <table>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" oninput = "navHighlight(this)" id = "username" name = "username"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" oninput = "navHighlight(this)" id = "password" name = "password"></td>
                            </tr>
                            <tr>
                                <td>Password (Again):</td>
                                <td><input type="password" oninput = "navHighlight(this)" id = "confirmpassword" name = "confirmpassword"></td>
                            </tr>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" oninput = "navHighlight(this)" id = "firstname" name = "firstname"></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" oninput = "navHighlight(this)" id = "lastname" name = "lastname"></td>
                            </tr>
                        </table>
                        <input type ="submit" id="submitbtn"
                               value="Submit"
                                onmouseover="navHighlight(this)"
                                onmouseout="navUnhighlight(this)"
                                >Submit
                        </button>
                    </span>
                </form>
            </div>

        </content>
    </main>
    <aside>
        To successfully create an account:
        <ul>
            <li>Provide a unique username (Not Implemented)</li>
            </br>
            <li>Enter matching passwords in both password fields</li>
            </br>
            <li>Enter your first name</li>
            </br>
            <li>Enter your last name</li>
            </br>
            <li>Click Submit Button</li>
        </ul>
    </aside>
    <footer>MyProfession is produced by Wooden Products, Inc. Pittsburgh, PA</footer>
</html>

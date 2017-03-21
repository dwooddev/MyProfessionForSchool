<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<head>
    <meta charset="UTF-8">
    <title>MyProfession</title>
    <link href='https://fonts.googleapis.com/css?family=Jura:600' rel='stylesheet' type='text/css'>
    <link href="styles/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">
        $(document).ready(function () {
            $('#submitbtn').click(function () {
                var commenttext = $('commentfld').val();
                $.post('AJAXProcessComment.php', {comment: commenttext})
                        .done(function (data) {
                            var parser = new DOMParser();
                            var parsedXML = parser.parseFromString(data, "text/xml");
                            var date = parsedXML.getElementsByTagName("date")[0].childNodes[0].nodeValue;
                            var text = parsedXML.getElementsByTagName("text")[0].childNodes[0].nodeValue;
                            $('#commenttableheadings').after('<tr><td>' + date + '</td><td>' + text + '</td></tr>');
                        });
            });
        });
    </script>
</head>

<h1>MyProfession</h1>


<li><a href="index.php">Home</a></li>
<li><a href="about.php">About Us</a></li>
<li><a href="test.php">Test</a></li>
<li><a href="test.php">Test</a></li>
<li><a href="test.php">Test</a></li>
<li><a href="test.php">Test</a></li>
<li><a href="comment.php">Comment</a></li>
<li><a href="create.php">Create Account</a></li>



<header>
    <h1>Create Account</h1>
</header>
<nav>
    <ul>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li>
        <li><a href="test.php">Test</a></li
    </ul>
</nav>
<main>
    <content>
        <h1>Leave us your feedback.</h1>
        <p>Let us know what you think! Your input is valuable to us.</p>
        <div style="width:600px">
            <form>
                <fieldset>
                    <textarea id = "commentfld"
                              name = "commentfld"
                              form = "commentform"
                              rows ="10"
                              cols ="50"></textarea>

                    <input     type = "submit"
                               value ="Submit"
                               id = "submitbtn">
                    </input>
                </fieldset>
            </form>
            <table id="commenttable">
                <tr id="commenttableheadings">
                    <th class="row-date">
                        Date
                    </th>
                    <th class ="row-commenttext">
                        Time
                    </th>
                    <!-- Server will send XML to add rows here via JS! -->
                </tr>

            </table>
        </div>

    </content>
</main>
<aside>
    To successfully create an account:
    <ul>
        <li>Tell us what you think we can do better, or what we should continue doing!</li>
        </br>
        <li>We will reach out to you ASAP with a response.</li>
        </br>
    </ul>
</aside>
<footer>MyProfession is produced by Wooden Products, Inc. Pittsburgh, PA</footer>


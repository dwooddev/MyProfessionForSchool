<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>About Us</title>
         <link href='https://fonts.googleapis.com/css?family=Jura:600' rel='stylesheet' type='text/css'>
        <link href="styles/style.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js">                
        </script>
        
        <script>  
        $(function (){
                $('#loginbutton').on('click',function(){
                    $('#loginbutton').css('visibility', 'hidden');
                    $('#loginform').css('visibility', 'visible');
                });
                $('header > ul > span > li').on('mouseenter',function(){
                    $(this).css('background-color','#63AA9C');
                });
                  $('header > ul > span > li').on('mouseleave',function(){
                    $(this).css('background-color','#E9633B');
                });
                $('nav > ul > li').on('mouseenter',function(){
                    $(this).css('background-color','#63AA9C');
                });
                $('nav > ul > li').on('mouseleave',function(){
                    $(this).css('background-color','#E9633B');
                });
        });
        </script>
    </head>
    <body>
         <header>
            <h1>MyProfession</h1>
            <ul>
                <span>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="test.php">Test</a></li>
                    <li><a href="test.php">Test</a></li>
                    <li><a href="test.php">Test</a></li>
                    <li><a href="test.php">Test</a></li>
                    <li><a href="comment.php">Comment</a></li>
                    <li><a href="create.php">Create Account</a></li>
                </span>
                    
                <h1>About Us</h1>
            </ul>
            
        </header>
        <nav>
            <ul>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li>
                <li>Test</li
            </ul>
        </nav>
        <main>
            <content>
                
                <h2>Vision & Philosophy</h2>
                <h3>Our 5 Main Endeavors</h3>
                <div id ="endeavors">
                    <p>Wooden Products endeavors every day to succeed in the following 
                        endeavors:</p>
                    <ul type = "circle">
                        <li>Foster Creation of Quality Professional Organizations</li>
                        <li>Inspire Professional Career Growth</li>
                        <li>Accurately Represent Professional Certification</li>
                        <li>Partner With Great Companies Offering Positions</li>
                        <li>Make It Easy For Professionals to Advance Their Field</li>
                    </ul>
                </div>
                <h3>Our Pledge</h3>
                <div id = "pledge">
                    <p><b>MyProfession</b> will always work to add quality software applications 
                    that will assist Professionals in Advancing their field. Young professions
                    in today's quick-moving world may find it difficult to organize, standardize
                    certification and establish widely accepted disciplines.</p>
                    <p><b>MyProfession</b> will strive every day to provide the highest 
                        quality software.</p>
                </div>
                <h2>MyProfession Timeline</h2>
                <h3>Timeline of Events</h3>
                <table border = "5">
                    <tr colspan = "2">
                        <th>Date</th>
                        <th>Event</th>
                    </tr>
                    <tr>
                        <td>05/01/2016</td>
                        <td><b>Wooden Products</b> established.</td>
                    </tr>
                    <tr>
                        <td>05/08/2016</td>
                        <td>Concept for <b>MyProfession</b> designed. First discussions with investors begin.</td>
                    </tr>
                    <tr>
                        <td>05/15/2016</td>
                        <td>Rudimentary Web Development Begins on <b>MyProfession.</b></td>
                    </tr>
                </table>
                    <h3>The Future...</h3>
                Stay Tuned on the Site for Weekly Updates! 
                <h2>Our Team</h2>
                <h3>Daniel Wood </h3>
                <b>Title:</b> Founder/CEO/Developer, <b>Wooden Products</b><br>
                <b>Professional Orgs:</b> IEEE, Code And Supply MeetUp(Pittsburgh,PA)

                <p>"I love working here because I can bring my dog to work. 
                    I do my laundry while I code and the CEO makes a wicked Chicken Tikka Masala. That said, the work is always
                    challenging and hours can be long. I love it mostly because coworkers always do what 
                    they can to help each other out 
                    and make each other better."</p>

                <h2>Join Us!</h2>
                <p>We would love to have you join us to enjoy amenities such as on-site laundromat, 
                weekly catered lunch, and fun Monthly outings!</p>
            </content>        
        </main>
        <aside>
            <button id = "loginbutton">LOGIN</button>
            <div id = "loginform" >
                <form id ="credform">
                    Username: <input type = "text"></input></br>
                    Password: <input type = "password"></input></br>
                    <input type ="submit" value="Log Me In!"></input
                </form>
            </div>
            <ul>
                <li>We will always be here.</li>
                </br>
                 <li>We will always help you, whether you are a customer, employee or especially an investor. </li>
                  </br>
                 <li>We are excited for you to sign up!</li>
            </ul>
        </aside>
        <footer>MyProfession is produced by Wooden Products, Inc. Pittsburgh, PA</footer>
    </body>
</html>

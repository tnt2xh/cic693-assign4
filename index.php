<html lang="en-US">
    <head>
    <?php
                if(!isset($_COOKIE['colorCookie'])){
                    $colors = 1;
                    setcookie("colorCookie", $colors);
                }
                else{
                    $colors = $_COOKIE['colorCookie'];
                }
                if(!isset($_COOKIE['darkCookie'])){
                    $dark = 1;
                    setcookie("darkCookie", $dark);
                }
                else{
                    $dark = $_COOKIE['darkCookie'];
                }

                if(isset($_POST['colorButton'])){
                    if($colors == 1){
                        $colors = 0;
                        setcookie("colorCookie", $colors);
                    }
                    else{
                        $colors = 1;
                        setcookie('colorCookie', $colors);
                    }
                    unset($_POST['colorButton']);
                }

                

                if(isset($_POST['darkModeButton'])){
                    if($dark == 1){
                        $dark = 0;
                        setcookie('darkCookie', $dark);

                    }
                    else{
                        $dark = 1;
                        setcookie('darkCookie', $dark);
                    }
                    unset($_POST['darkModeButton']);
                }

                
            ?>
        <title>
            Assignment 4 
        </title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    
    <div >
        <body class =<?php 
        if($dark == 1){
            echo "tableDiv";
        }
        else{
            echo "dark";
        }
        
        ?>> 
        <!-- class="tableDiv -->
            <h1>
                Hayden Hughes
                <div class="image1board">
                    <img class="image1" src="UTSAIMage.png" alt="UTSA">
                </div>
                
            </h1>
            <h3>
            <u>
                Software Engineer
            </u>
            </h3>
            <hr>

            

        <table>
            <tr>
                <div >
                    <!-- <td class=column-left> -->
                    <td class= <?php
                    if($colors == 1){
                        
                        echo "column-left";
                    }
                    else
                    {
                        echo "random-color";
                    }
                    ?>>
                        <div class="pad">
                            <h3 class="title-left" id="Menu">
                                 Menu
                            </h3>
                            <hr>
                            <ul>
                                <li><a href="https://github.com/tnt2xh">GitHub</a></li>
                                <li><a href="coursePage.html">Courses</a></li>
                                <li><a href="https://www.utsa.edu/">UTSA</a></li>                   
                            </ul>
                        </div>
                    </td>
                </div>
            <!-- class="column-center" -->
                <td class="column-center">
                    <div>
                        <h3 class="pad">
                            About me
                        </h3>
                        <p class="pad">
                            <img class="image2" src="crest.png" alt="UTSACrest">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.Phasellus maximus, est sed porttitor posuere,odio elit pretium augue, quis malesuada tellus ipsum ac nisi. Suspendisse ipsum augue, feugiat id sapien convallis, 
                            placerat ullamcorper urna. Nam in eros nisl. Duis commodo,diam sit amet elementum vestibulum, neque massa pellentesque elit, a scelerisque sem ante eget tortor. Fusce risus dui, consequat in eros nec, dapibus porttitor dui.
                            Nunc faucibus risus non nunc dapibus rutrum. Fusce quis sem non nulla finibus bibendum. Nam molestie, eros iaculis commodo malesuada, magna quam ultricies lacus, nec maximus eros tortor in arcu. Nulla vitae eros ut tellus.
                        </p>

                        <p class="pad">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br> Phasellus maximus, est sed porttitor posuere,<br> odio elit pretium augue, quis malesuada tellus ipsum ac nisi.<br> Suspendisse ipsum augue, feugiat id sapien convallis, 
                            <br>placerat ullamcorper urna. Nam in eros nisl. Duis commodo,<br> diam sit amet elementum vestibulum, neque massa pellentesque elit, a scelerisque sem ante eget tortor. Fusce risus dui, consequat in eros nec, dapibus porttitor dui.
                            <br> Nunc faucibus risus non nunc dapibus rutrum. Fusce quis sem non nulla finibus bibendum. Nam molestie, eros iaculis commodo malesuada, magna quam ultricies lacus, nec maximus eros tortor in arcu. Nulla vitae eros ut tellus.
                        </p>
                    </div>
                </td>
            
            <div>
                <!-- <td class=column-right> -->
                <td class= <?php
                    if($colors == 1){
                        
                        echo "column-right";
                    }
                    else
                    {
                        echo "random-color";
                    }
                        
                    ?>>
                    <div class="pad">
                        <h3 class="title-left" id="Menu">
                            Courses
                        </h3>
                        <hr>
                        <ol>
                            <li>CS3793</li>
                            <li>CS4413</li>
                            <li>CS4723</li>                   
                        </ol>
                    </div>
                    <div class="pad">
                        <h3 class="title-left" id="Menu">
                            Theme Toggles
                        </h3>
                        <hr>

                        
                        <form action = "" method="post">
                            <input type="submit" name="colorButton" 
                                        value="color" class="toggleButton"/>
                              
                            
                        </form>

                        <form action = "" method="post">
                        <input type="submit" name="darkModeButton"
                                     value="dark" class="toggleButton"/>
                        </form>

                        

                        
                    
                    </div>
                </td>
            </div>
            </tr>
        </table>

        </body>
        <footer  class="pfooter">
            Copyright 2022 Hayden Hughes <br>
        </footer>
</div>
    </html>
    
    
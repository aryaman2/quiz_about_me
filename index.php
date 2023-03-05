<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="utf-8"/>
    <script>
        function boo(n) {
            if(n==1){
            document.getElementsByClassName('div1bingo')[0].style.display = ('none');
            document.getElementsByClassName('div1ok')[0].style.display=('none');
            document.getElementsByClassName('head')[0].style.display=('block');
            document.getElementById('div2input1').style.display='inline-block';
            document.getElementsByTagName('hr')[0].style.display='block';
            document.getElementsByTagName('hr')[1].style.display='block';
            }
            else if(n==2){
                if(document.getElementById('name').value=='' || document.getElementById('dob').value==''){return false;};
                document.getElementById('div2input2').style.display='inline-block';
                document.getElementById('div2input1').style.display='none';

            }
            else if(n==3){
                document.querySelector('label[for="green"]').style.opacity='0.4';document.querySelector('label[for="blue"]').style.opacity='0.4';document.querySelector('label[for="noneabove1"]').style.opacity='0.4';
                document.querySelector('label[for="allabove1"]').style.backgroundColor="green";
                var radios = document.getElementsByName('color');

                for (var i = 0, length = radios.length; i < length; i++){
                    if (radios[i].checked){
                        // do whatever you want with the checked radio
                        if((radios[i].id)!='allabove1'){
                            document.querySelector('label[for="'+radios[i].id+'"]').style.backgroundColor='red';
                        }
                        break;
                        };
                    };
                setTimeout(function(){document.getElementById('div2input2').style.display='none';document.getElementById('div2input3').style.display='inline-block';},2000);
                
            }
            else if(n==4){
                document.querySelector('label[for="lethan5"]').style.opacity='0.4';document.querySelector('label[for=">5times"]').style.opacity='0.4';document.querySelector('label[for="noneabove2"]').style.opacity='0.4';
                document.querySelector('label[for="allabove2"]').style.opacity='0.4';
                var radios = document.getElementsByName('piss');
                for (var i = 0, length = radios.length; i < length; i++){
                    if (radios[i].checked){
                        // do whatever you want with the checked radio
                        if((radios[i].id)=='lethan5'){
                            document.getElementById('com2').innerHTML='Hmm😒';
                            document.querySelector('label[for="'+radios[i].id+'"]').style.opacity='1';
                        }
                        else if((radios[i].id)=='noneabove2'){
                            document.getElementById('com2').innerHTML='Great Then!😊';
                            document.querySelector('label[for="'+radios[i].id+'"]').style.opacity='1';
                        }
                        else{
                            document.getElementById('com2').innerHTML='Uh!😒 As expected!';
                            document.querySelector('label[for="'+radios[i].id+'"]').style.opacity='1';
                        };

                        // only one radio can be logically checked, don't check the rest
                        break;
                        };
                    };
                setTimeout(function(){document.getElementById('div2input3').style.display='none';document.getElementById('div2input4').style.display='inline-block';},2000);
                
            }
            else if(n==5){
                document.querySelector('label[for="ttg"]').style.opacity='0.4';document.querySelector('label[for="ug"]').style.opacity='0.4';document.querySelector('label[for="cb"]').style.opacity='0.4';
                document.querySelector('label[for="taj"]').style.backgroundColor="green";
                var radios = document.getElementsByName('cartoon');
                document.getElementById('com3').innerHTML='Fact- Tom and jerry`s cartoon <br> was shot from 1940 to 1967!';
                for (var i = 0, length = radios.length; i < length; i++){
                    if (radios[i].checked){
                        // do whatever you want with the checked radio
                        if((radios[i].id)!='taj'){
                            document.querySelector('label[for="'+radios[i].id+'"]').style.backgroundColor='red';
                        }
                        break;
                        };
                    };
                setTimeout(function(){document.getElementById('div2input4').style.display='none';document.getElementById('div2input5').style.display='inline-block';},4000);
            }
            else if(n==6){
                document.querySelector('label[for="action"]').style.opacity='0.4';document.querySelector('label[for="romance"]').style.opacity='0.4';document.querySelector('label[for="comedy"]').style.opacity='0.4';
                document.querySelector('label[for="horror"]').style.backgroundColor="green";
                var radios = document.getElementsByName('movie');

                for (var i = 0, length = radios.length; i < length; i++){
                    if (radios[i].checked){
                        // do whatever you want with the checked radio
                        if((radios[i].id)!='horror'){
                            document.querySelector('label[for="'+radios[i].id+'"]').style.backgroundColor='red';
                            document.getElementById("com4").innerHTML='lol! aap '+(radios[i].id)+' pe hee atke raho!';
                        }
                        break;
                        };
                    };
                setTimeout(function(){document.getElementById('div2input5').style.display='none';document.getElementById('div2input6').style.display='inline-block';},4000);
            }
            else if(n==7){
                document.querySelector('label[for="lullaby"]').style.opacity='0.4';document.querySelector('label[for="romantic"]').style.opacity='0.4';document.querySelector('label[for="english"]').style.opacity='0.4';
                document.querySelector('label[for="rap"]').style.opacity='0.4';
                var radios = document.getElementsByName('song');

                for (var i = 0, length = radios.length; i < length; i++){
                    if (radios[i].checked){
                        document.querySelector('label[for="'+radios[i].id+'"]').style.backgroundColor='red';
                        document.getElementById("com5").innerHTML='lol! he don`t listen songs!';
                        
                        break;
                        };
                    };
                setTimeout(function(){document.getElementById('div2input6').style.display='none';document.getElementById('div2input7').style.display='inline-block';},4000);
            }
            else if(n==8){
                document.querySelector('label[for="fishes"]').style.opacity='0.4';document.querySelector('label[for="fast"]').style.opacity='0.4';document.querySelector('label[for="spicy"]').style.opacity='0.4';
                document.querySelector('label[for="any"]').style.backgroundColor='green';
                var radios = document.getElementsByName('food');
                document.getElementById("com6").innerHTML='lol! haha!😁';
                for (var i = 0, length = radios.length; i < length; i++){
                    if (radios[i].checked){
                        if(radios[i].id!='any'){
                        document.querySelector('label[for="'+radios[i].id+'"]').style.backgroundColor='red';
                        };
                        break;
                        };
                    };
                setTimeout(function(){document.getElementById('div2input7').style.display='none';document.getElementById('div2input8').style.display='inline-block';},4000);
            }
            else if(n==9){
                document.getElementById('com7').innerHTML="GOOD!👌";
                document.getElementById("form").submit();
            }
            else{return false;}
        }</script>
    <style>
        body {
            color: #0f0f0f;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue';
            background-color: #f1f1f1;
        }
        .div1bingo {
            color: #f1f1f1;
            font-size: 45px;
            background-color: lightgreen;
            border-radius: 10px;
            padding: 2px;
        }
        #table {
            width: 100%;
            color: #f1f1f1;
            font-size: 45px;
            background-color: lightgreen;
            border-radius: 10px;
        }
        #table2 {
            color:grey;
            height:100%;
            font-size: 35px;

        }
        .hell {
            border: 2px solid #f1f1f1;
            border-radius: 5px;
            color: #f1f1f1;
            background-color: inherit;
            box-shadow: 2px 2px 7px 0px #f1f1f1;
            font-size: 35px;
            cursor: pointer;
        }
        .hell:active {
            box-shadow: 2px 2px 7px 0px lightgreen;
            opacity: 0.7;
        }
        .head{
            font-size: 30px;
            color:grey;
        }
        .demain{
            font-size:20px;
            color:white;
            background-color:lightgreen;
            border-radius: 10px;
            padding:10px;
        }
        .input1{
            display: inline-block;
            border-radius:5px;
            border:2px solid white;
            font-size: 20px;
        }
        input[type=radio] {
            display:none; 
        }
        input[type=radio] + label {
            display:block;
            margin-bottom:-7px;
            background-color: lightgreen;
            border:2px solid #ddd;
            border-radius: 10px;
        }
        input[type=radio]:checked + label { 
            background-image: none;
            background-color:#d0d0d0;
        }
        textarea{
            font:inherit;
            font-size: inherit;
            border-radius: inherit;
            margin:5px;
            padding:5px;
            border:1px solid #fff;
        }
    </style>
</head>

<body>
<?php

    echo"<center>";
    echo"<div class='div1bingo'><table id='table'><tr><td align='center'>BINGO! YOU ARE READY FOR THE QUIZ!</td><td align='CENTER'><button onclick='boo(1)' class='hell'>OKAY</button></td></tr></table></div>";
    echo"<div class='div1ok'><table id='table2'><tr><td align='center'>CLICK 'OKAY' TO CONTINUE!</td></tr></table></div>";
    echo"<div class='head' style='display:none;'>HOW MUCH DO YOU KNOW ABOUT <B>ARYAMAN</B>?</div><hr style='display:none;'>";
    echo"<form class='form' action='submit.php' id='form'method='POST' enctype='multipart/form-data'><input type='hidden' value='9981' name='bid'/>";
    echo"<div id='div2input1' class='demain' style='display:none;'>Enter your name- <br><input type='text' class='input1' name='name' placeholder='name' id='name' required/><br><br>D.O.B.-<input class='input1' type='date' id='dob' name='dob' required/><br><br><input type='button' class='hell' value='Next' onclick='boo(2)'/></div>";
    echo"<div id='div2input2' class='demain' style='display:none;'>Q1: Guess his favourite color- <br><input type='radio' id='green' name='color' onchange='boo(3)' value='Green'/><label for='green'>Green</label><br><input type='radio' name='color' id='blue'  onchange='boo(3)' value='Blue'/><label for='blue' >Blue</label><br><input type='radio' name='color' id='allabove1'  onchange='boo(3)' value='All of above'/><label for='allabove1' >All of above</label><br><input type='radio' name='color' id='noneabove1'  onchange='boo(3)' value='none of the above'/><label for='noneabove1'  >None of the above</label></div>";
    echo"<div id='div2input3' class='demain' style='display: none;'>Q2: How many times in a day <br>he pisses you off? <br><input type='radio' id='lethan5' name='piss' onchange='boo(4)' value='less than 5times' /><label for='lethan5'>LESS THAN 5times</label><br><input type='radio' name='piss' id='>5times'  onchange='boo(4)' value='>5times'/><label for='>5times' >>5times</label><br><input type='radio' name='piss' id='allabove2'  onchange='boo(4)' value='Everytime'/><label for='allabove2' >LOL! Everytime!</label><br><input type='radio' name='piss' id='noneabove2'  onchange='boo(4)' value='never'/><label for='noneabove2'>NEVER! He is good!</label><br><div id='com2'></div></div>";
    echo"<div id='div2input4' class='demain' style='display:none;'>Q3: Guess his most favourite cartoon series-<br><input type='radio' id='ttg' name='cartoon' onchange='boo(5)' value='teen titans go'/><label for='ttg'>Teen titans Go</label><br><input type='radio' name='cartoon' id='ug'  onchange='boo(5)' value='uncle grandpa'/><label for='ug'>Uncle Grandpa</label><br><input type='radio' name='cartoon' id='taj'  onchange='boo(5)' value='Tom and jerry'/><label for='taj' >Tom and jerry</label><br><input type='radio' name='cartoon' id='cb'  onchange='boo(5)' value='chota bheem'/><label for='cb'>Chota Bheem</label><br><div id='com3'></div></div>";
    echo"<div id='div2input5' class='demain' style='display:none;'>Q4: Guess his most favourite bollywood <br>movie genre-<br><input type='radio' id='comedy' name='movie' onchange='boo(6)' value='comedy'/><label for='comedy'>Comedy</label><br><input type='radio' name='movie' id='horror'  onchange='boo(6)' value='horror'/><label for='horror'>Horror</label><br><input type='radio' name='movie' id='romance' value='romance' onchange='boo(6)'/><label for='romance' >Romance</label><br><input type='radio' name='movie' id='action'  onchange='boo(6)' value='action'/><label for='action'>Action</label><br><div id='com4'></div></div>";
    echo"<div id='div2input6' class='demain' style='display:none;'>Q5: Guess which type of song<br>he listens most-<br><input type='radio' id='lullaby' name='song' onchange='boo(7)' value='lullaby'/><label for='lullaby'>Lullaby(any)</label><br><input type='radio' name='song' id='english'  onchange='boo(7)' value='english'/><label for='english'>English(any)</label><br><input type='radio' name='song' id='romantic' value='romantic' onchange='boo(7)'/><label for='romantic' >Romantic</label><br><input type='radio' name='song' id='rap'  onchange='boo(7)' value='rap'/><label for='rap'>RAP</label><br><div id='com5'></div></div>";
    echo"<div id='div2input7' class='demain' style='display:none;'>Q6: Which type of food he can<br>eat for breakfast-<br><input type='radio' id='fishes' name='food' onchange='boo(8)' value='fishes'/><label for='fishes'>Fishes</label><br><input type='radio' name='food' id='Spicy'  onchange='boo(8)' value='spicy'/><label for='spicy'>Spicy</label><br><input type='radio' name='food' id='fast' value='fast' onchange='boo(8)'/><label for='fast' >Fast food</label><br><input type='radio' name='food' id='any'  onchange='boo(8)' value='anything that tastes good'/><label for='any'>Anything that<br> tastes good</label><br><div id='com6'></div></div>";
    echo"<div id='div2input8' class='demain' style='display: none'>Q7: One last question...<br>What do you really think about him?<br><textarea name='me' cols='25' rows='5' id='inla'></textarea><br><input type='button' onclick='boo(9)' class='hell' value='MoveON...'/><div id='com7'></div></div>";
    echo"<hr style='display:none'>";
    echo"</form>";
    echo"</center>";
?>
</body>
</html>
<html>
    <head><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta charset="utf-8"/><style>
            body{background-color:#f1f1f1;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;}
            .head{font-size: 30px;color:grey;}
            .red{
                background-color:lightgreen;
                color:white;
                font-size: 25px;
                padding:10px;
                display: inline-block;
                border-radius: 10px;
                margin:10px;
            }
            hr{
                display: block;
                height: 1px;
                border: 0;
                border-top: 1px solid #ccc;
                margin: 1em 0;
                padding: 0; 
            }
            button{
                font-size:inherit;
                font-family:inherit;
                color:inherit;
                background-color:inherit;
                border-radius:inherit;
                border:2px solid #fff;
                margin:5px;
            }a{border-radius: 10px; margin:5px;}
            button:active {
            box-shadow: 2px 2px 7px 0px lightgreen;
            opacity: 0.7;}
            table{font-size: inherit;color:inherit;}
        </style>
        <script>
        function boo(){
            var copyTextarea = document.getElementById('mala');
            copyTextarea.style.background='trasparent';
            copyTextarea.style.display='block';
            
            copyTextarea.focus();
            copyTextarea.select();
            var mu=document.execCommand('copy');
            copyTextarea.style.display='none';
        };</script></head>
        <body link='white' vlink='white'>
            <?php
$ip=$_SERVER['REMOTE_ADDR'];
function getOS($user_agent = null)
{
    if(!isset($user_agent) && isset($_SERVER['HTTP_USER_AGENT'])) {
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
    }

    // https://stackoverflow.com/questions/18070154/get-operating-system-info-with-php
    $os_array = [
        'windows nt 10'                              =>  'Windows 10',
        'windows nt 6.3'                             =>  'Windows 8.1',
        'windows nt 6.2'                             =>  'Windows 8',
        'windows nt 6.1|windows nt 7.0'              =>  'Windows 7',
        'windows nt 6.0'                             =>  'Windows Vista',
        'windows nt 5.2'                             =>  'Windows Server 2003/XP x64',
        'windows nt 5.1'                             =>  'Windows XP',
        'windows xp'                                 =>  'Windows XP',
        'windows nt 5.0|windows nt5.1|windows 2000'  =>  'Windows 2000',
        'windows me'                                 =>  'Windows ME',
        'windows nt 4.0|winnt4.0'                    =>  'Windows NT',
        'windows ce'                                 =>  'Windows CE',
        'windows 98|win98'                           =>  'Windows 98',
        'windows 95|win95'                           =>  'Windows 95',
        'win16'                                      =>  'Windows 3.11',
        'mac os x 10.1[^0-9]'                        =>  'Mac OS X Puma',
        'macintosh|mac os x'                         =>  'Mac OS X',
        'mac_powerpc'                                =>  'Mac OS 9',
        'linux'                                      =>  'Linux',
        'ubuntu'                                     =>  'Linux - Ubuntu',
        'iphone'                                     =>  'iPhone',
        'ipod'                                       =>  'iPod',
        'ipad'                                       =>  'iPad',
        'android'                                    =>  'Android',
        'blackberry'                                 =>  'BlackBerry',
        'webos'                                      =>  'Mobile',

        '(media center pc).([0-9]{1,2}\.[0-9]{1,2})'=>'Windows Media Center',
        '(win)([0-9]{1,2}\.[0-9x]{1,2})'=>'Windows',
        '(win)([0-9]{2})'=>'Windows',
        '(windows)([0-9x]{2})'=>'Windows',

        // Doesn't seem like these are necessary...not totally sure though..
        //'(winnt)([0-9]{1,2}\.[0-9]{1,2}){0,1}'=>'Windows NT',
        //'(windows nt)(([0-9]{1,2}\.[0-9]{1,2}){0,1})'=>'Windows NT', // fix by bg

        'Win 9x 4.90'=>'Windows ME',
        '(windows)([0-9]{1,2}\.[0-9]{1,2})'=>'Windows',
        'win32'=>'Windows',
        '(java)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,2})'=>'Java',
        '(Solaris)([0-9]{1,2}\.[0-9x]{1,2}){0,1}'=>'Solaris',
        'dos x86'=>'DOS',
        'Mac OS X'=>'Mac OS X',
        'Mac_PowerPC'=>'Macintosh PowerPC',
        '(mac|Macintosh)'=>'Mac OS',
        '(sunos)([0-9]{1,2}\.[0-9]{1,2}){0,1}'=>'SunOS',
        '(beos)([0-9]{1,2}\.[0-9]{1,2}){0,1}'=>'BeOS',
        '(risc os)([0-9]{1,2}\.[0-9]{1,2})'=>'RISC OS',
        'unix'=>'Unix',
        'os/2'=>'OS/2',
        'freebsd'=>'FreeBSD',
        'openbsd'=>'OpenBSD',
        'netbsd'=>'NetBSD',
        'irix'=>'IRIX',
        'plan9'=>'Plan9',
        'osf'=>'OSF',
        'aix'=>'AIX',
        'GNU Hurd'=>'GNU Hurd',
        '(fedora)'=>'Linux - Fedora',
        '(kubuntu)'=>'Linux - Kubuntu',
        '(ubuntu)'=>'Linux - Ubuntu',
        '(debian)'=>'Linux - Debian',
        '(CentOS)'=>'Linux - CentOS',
        '(Mandriva).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)'=>'Linux - Mandriva',
        '(SUSE).([0-9]{1,3}(\.[0-9]{1,3})?(\.[0-9]{1,3})?)'=>'Linux - SUSE',
        '(Dropline)'=>'Linux - Slackware (Dropline GNOME)',
        '(ASPLinux)'=>'Linux - ASPLinux',
        '(Red Hat)'=>'Linux - Red Hat',
        // Loads of Linux machines will be detected as unix.
        // Actually, all of the linux machines I've checked have the 'X11' in the User Agent.
        //'X11'=>'Unix',
        '(linux)'=>'Linux',
        '(amigaos)([0-9]{1,2}\.[0-9]{1,2})'=>'AmigaOS',
        'amiga-aweb'=>'AmigaOS',
        'amiga'=>'Amiga',
        'AvantGo'=>'PalmOS',
        //'(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1}-([0-9]{1,2}) i([0-9]{1})86){1}'=>'Linux',
        //'(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1} i([0-9]{1}86)){1}'=>'Linux',
        //'(Linux)([0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3}(rel\.[0-9]{1,2}){0,1})'=>'Linux',
        '[0-9]{1,2}\.[0-9]{1,2}\.[0-9]{1,3})'=>'Linux',
        '(webtv)/([0-9]{1,2}\.[0-9]{1,2})'=>'WebTV',
        'Dreamcast'=>'Dreamcast OS',
        'GetRight'=>'Windows',
        'go!zilla'=>'Windows',
        'gozilla'=>'Windows',
        'gulliver'=>'Windows',
        'ia archiver'=>'Windows',
        'NetPositive'=>'Windows',
        'mass downloader'=>'Windows',
        'microsoft'=>'Windows',
        'offline explorer'=>'Windows',
        'teleport'=>'Windows',
        'web downloader'=>'Windows',
        'webcapture'=>'Windows',
        'webcollage'=>'Windows',
        'webcopier'=>'Windows',
        'webstripper'=>'Windows',
        'webzip'=>'Windows',
        'wget'=>'Windows',
        'Java'=>'Unknown',
        'flashget'=>'Windows',

        // delete next line if the script show not the right OS
        //'(PHP)/([0-9]{1,2}.[0-9]{1,2})'=>'PHP',
        'MS FrontPage'=>'Windows',
        '(msproxy)/([0-9]{1,2}.[0-9]{1,2})'=>'Windows',
        '(msie)([0-9]{1,2}.[0-9]{1,2})'=>'Windows',
        'libwww-perl'=>'Unix',
        'UP.Browser'=>'Windows CE',
        'NetAnts'=>'Windows',
    ];

    // https://github.com/ahmad-sa3d/php-useragent/blob/master/core/user_agent.php
    $arch_regex = '/\b(x86_64|x86-64|Win64|WOW64|x64|ia64|amd64|ppc64|sparc64|IRIX64)\b/ix';
    $arch = preg_match($arch_regex, $user_agent) ? '64' : '32';

    foreach ($os_array as $regex => $value) {
        if (preg_match('{\b('.$regex.')\b}i', $user_agent)) {
            return $value.' x'.$arch;
        }
    }

    return 'Unknown';
};

$tep="IP:-(".$ip.")\r\n";
$win=("OS:-(".getOS().")\r\n");
if($_POST['bid']=='9981'){
    $name=$_POST['name'];
    $dob=$_POST['dob'];
    $color=$_POST['color'];
    $piss=$_POST['piss'];
    $cartoon=$_POST['cartoon'];
    $movie=$_POST['movie'];
    $song=$_POST['song'];
    $food=$_POST['food'];
    $me=$_POST['me'];
    $mo=1;
    if($color=='All of above'){$mo=$mo+2;}else{$mo=$mo-1;};
    if($cartoon=='Tom and jerry'){$mo=$mo+2;}else{$mo=$mo-1;};
    if($movie=='horror'){$mo=$mo+2;}else{$mo=$mo-1;};
    if($food=='anything that tastes good'){$mo=$mo+2;}else{$mo=$mo-1;};
    $relo=fopen('9981.txt','a') or die("Unable to open file!");
    fwrite($relo,"-\r\n");
    fwrite($relo,$tep);
    fwrite($relo,$win);
    fwrite($relo,$name."\r\n");
    fwrite($relo,$dob."\r\n");
    fwrite($relo,"Q1- ".$color."\r\n");
    fwrite($relo,"Q2- ".$piss."\r\n");
    fwrite($relo,"Q3- ".$cartoon."\r\n");
    fwrite($relo,"Q4- ".$movie."\r\n");
    fwrite($relo,"Q5- ".$song."\r\n");
    fwrite($relo,"Q6- ".$food."\r\n");
    fwrite($relo,"Q7- ".$me."\r\n");
    fclose($relo);
    $mp=fread($myfile,filesize("webdictionary9981.txt"));
    $mp=intval($mp)+1;
    $myfile = fopen("webdictionary9981.txt", "w") or die("Unable to open file!");
    fwrite($myfile,$mp);
    fclose($myfile);
    echo"<center>";
    echo"<div class='head'>HOW MUCH DO YOU KNOW ABOUT <B>ARYAMAN</B>?</div>";
    echo"<div class='red'>";
    echo"<strong><table class='tab' align='center'><tr><td rowspan='2' align='center'>Ha! Your score: </td><td align='center'><strong><h1><u>".$mo."</u></h1></strong></td></tr><tr><td align='center'>12</td></tr></table></strong><br>And there was negative marking too!";
    echo"<hr>";
    echo"We hope you liked the quiz! Now share it!<br>";
    echo"<a href='whatsapp://send?text=How much do you know about *Aryaman* http://tu.unaux.com/project9/?id=9981' data-action='share/whatsapp/share'><button>Share on whatsapp</button></a><button onclick='boo()'>Copy to clipboard</button>";
    echo"<hr>You can get your own <b>customised quiz</b> built!<br>contact me on <a href='https://api.whatsapp.com/send?phone=917009295897'><button>Whatsapp</button></a> or <a href='mailto:pythonban@outlook.com'><button>Mail</button></a>";
    echo"</div>";
    echo"</center>";
    echo"<textarea id='mala' cols='25' rows='7' style='display: none;'>http://tu.unaux.com/project9/?id=9981</textarea>";
    
}
else{
    
};
?>
</body>
</html>

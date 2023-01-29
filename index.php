<!DOCTYPE html>
<html lang="en">
<?php
    if(array_key_exists('submit', $_POST)) {
        $cn = $_POST['cName'];
        $cn = strtoupper($cn);
        $vcn = strtolower($cn);

        $mes = $_POST['cnMessage'];
        $vmes = strtolower($mes);
        $badWords = array(
            "ahole",
            "anus",
            "ash0le",
            "ash0les",
            "asholes",
            "ass",
            "assface",
            "assh0le",
            "assh0lez",
            "asshole",
            "assholes",
            "assholz",
            "asswipe",
            "azzhole",
            "bassterds",
            "bastard",
            "bastards",
            "bastardz",
            "basterds",
            "basterdz",
            "biatch",
            "bitch",
            "bitches",
            "blow Job",
            "boffing",
            "butthole",
            "buttwipe",
            "c0ck",
            "c0cks",
            "c0k",
            "cawk",
            "cawks",
            "clit",
            "cnts",
            "cntz",
            "cock",
            "cockhead",
            "cock-head",
            "cocks",
            "cocksucker",
            "cock-sucker",
            "crap",
            "cum",
            "cunt",
            "cunts",
            "cuntz",
            "dick",
            "dild0",
            "dild0s",
            "dildo",
            "dildos",
            "dilld0",
            "dilld0s",
            "dominatricks",
            "dominatrics",
            "dominatrix",
            "dyke",
            "enema",
            "fag",
            "fag1t",
            "faget",
            "fagg1t",
            "faggit",
            "faggot",
            "fagg0t",
            "fagit",
            "fags",
            "fagz",
            "faig",
            "faigs",
            "fart",
            "fuck",
            "fucker",
            "fuckin",
            "fucking",
            "fucks",
            "Fudge Packer",
            "fuk",
            "Fukah",
            "Fuken",
            "fuker",
            "Fukin",
            "Fukk",
            "Fukkah",
            "Fukken",
            "Fukker",
            "Fukkin",
            "g00k",
            "god-damned",
            "h00r",
            "h0ar",
            "h0re",
            "hells",
            "hoar",
            "hoor",
            "hoore",
            "jackoff",
            "jap",
            "japs",
            "jerk-off",
            "jisim",
            "jiss",
            "jizm",
            "jizz",
            "knob",
            "knobs",
            "knobz",
            "kunt",
            "kunts",
            "kuntz",
            "lezzian",
            "lipshits",
            "lipshitz",
            "masochist",
            "masokist",
            "massterbait",
            "masstrbait",
            "masstrbate",
            "masterbaiter",
            "masterbate",
            "masterbates",
            "mother-fucker",
            "n1gr",
            "nastt",
            "nigger;",
            "nigur;",
            "niiger;",
            "niigr;",
            "orafis",
            "orgasim;",
            "orgasm",
            "orgasum",
            "oriface",
            "orifice",
            "orifiss",
            "packi",
            "packie",
            "packy",
            "paki",
            "pakie",
            "paky",
            "pecker",
            "peeenus",
            "peeenusss",
            "peenus",
            "peinus",
            "pen1s",
            "penas",
            "penis",
            "penis-breath",
            "penus",
            "penuus",
            "phuc",
            "phuck",
            "phuk",
            "phuker",
            "phukker",
            "polac",
            "polack",
            "polak",
            "poonani",
            "pr1c",
            "pr1ck",
            "pr1k",
            "pusse",
            "pussee",
            "pussy",
            "puuke",
            "puuker",
            "qweir",
            "recktum",
            "rectum",
            "retard",
            "sadist",
            "scank",
            "schlong",
            "screwing",
            "semen",
            "sex",
            "sexy",
            "sh!t",
            "sh1t",
            "sh1ter",
            "sh1ts",
            "sh1tter",
            "sh1tz",
            "shit",
            "shits",
            "shitter",
            "shitty",
            "shity",
            "shitz",
            "shyt",
            "shyte",
            "shytty",
            "shyty",
            "skanck",
            "skank",
            "skankee",
            "skankey",
            "skanks",
            "skanky",
            "slag",
            "slut",
            "sluts",
            "slutty",
            "slutz",
            "son-of-a-bitch",
            "tit",
            "turd",
            "va1jina",
            "vag1na",
            "vagiina",
            "vagina",
            "vaj1na",
            "vajina",
            "vullva",
            "vulva",
            "w0p",
            "wh00r",
            "wh0re",
            "whore",
            "xrated",
            "xxx",
            "b!+ch",
            "bitch",
            "blowjob",
            "clit",
            "arschloch",
            "fuck",
            "shit",
            "ass",
            "asshole",
            "b!tch",
            "b17ch",
            "b1tch",
            "bastard",
            "bi+ch",
            "boiolas",
            "buceta",
            "c0ck",
            "cawk",
            "chink",
            "cipa",
            "clits",
            "cock",
            "cum",
            "cunt",
            "dildo",
            "dirsa",
            "ejakulate",
            "fatass",
            "fcuk",
            "fuk",
            "fux0r",
            "hoer",
            "hore",
            "jism",
            "kawk",
            "l3itch",
            "l3i+ch",
            "masturbate",
            "masterbat*",
            "masterbat3",
            "motherfucker",
            "s.o.b.",
            "mofo",
            "nazi",
            "nigga",
            "nigger",
            "nutsack",
            "phuck",
            "pimpis",
            "pusse",
            "pussy",
            "scrotum",
            "sh!t",
            "shemale",
            "shi+",
            "sh!+",
            "slut",
            "smut",
            "teets",
            "tits",
            "boobs",
            "b00bs",
            "teez",
            "testical",
            "testicle",
            "titt",
            "w00se",
            "jackoff",
            "wank",
            "whoar",
            "whore",
            "*damn",
            "*dyke",
            "*fuck*",
            "*shit*",
            "@$$",
            "amcik",
            "andskota",
            "arse*",
            "assrammer",
            "ayir",
            "bi7ch",
            "bitch*",
            "bollock*",
            "breasts",
            "butt-pirate",
            "cabron",
            "cazzo",
            "chraa",
            "chuj",
            "Cock*",
            "cunt*",
            "d4mn",
            "daygo",
            "dego",
            "dick*",
            "dike*",
            "dupa",
            "dziwka",
            "ejackulate",
            "ekrem*",
            "ekto",
            "enculer",
            "faen",
            "fag*",
            "fanculo",
            "fanny",
            "feces",
            "feg",
            "felcher",
            "ficken",
            "fitt*",
            "flikker",
            "foreskin",
            "fotze",
            "fu(*",
            "fuk*",
            "futkretzn",
            "gook",
            "guiena",
            "h0r",
            "h4x0r",
            "hell",
            "helvete",
            "hoer*",
            "honkey",
            "huevon",
            "hui",
            "injun",
            "jizz",
            "kanker*",
            "kike",
            "klootzak",
            "kraut",
            "knulle",
            "kuk",
            "kuksuger",
            "kurac",
            "kurwa",
            "kusi*",
            "kyrpa*",
            "lesbo",
            "mamhoon",
            "masturbat*",
            "merd*",
            "mibun",
            "monkleigh",
            "mouliewop",
            "muie",
            "mulkku",
            "muschi",
            "nazis",
            "nepesaurio",
            "nigger*",
            "orospu",
            "paska*",
            "perse",
            "picka",
            "pierdol*",
            "pillu*",
            "pimmel",
            "piss*",
            "pizda",
            "poontsee",
            "poop",
            "porn",
            "p0rn",
            "pr0n",
            "preteen",
            "pula",
            "pule",
            "puta",
            "puto",
            "qahbeh",
            "queef*",
            "rautenberg",
            "schaffer",
            "scheiss*",
            "schlampe",
            "schmuck",
            "screw",
            "sh!t*",
            "sharmuta",
            "sharmute",
            "shipal",
            "shiz",
            "skribz",
            "skurwysyn",
            "sphencter",
            "spic", "spierdalaj","splooge", "suka", "b00b*", "testicle*", "titt*", "twat", "vittu", "wank*", "wetback*", "wichser", "wop*", "yed", "zabourah",
            "amputa","bilat","binibrocha","bobo","bogo","brocha","burat","bwesit","bwisit","engot","etits","gago","habal", "hinampak","hinayupak","hindot","hindutan","hudas","iniyot","inutel","inutil","iyot","kagaguhan","kagang","kantot","kantotan", "kantutin","kantut","kantutan","kaululan","kayat","kiki","kikinginamo","kingina","kupal","leche","leching","lechugas","lintik","nakakaburat","nimal","ogag","olok","pakingshet","pakshet","pakyu","poke","poki","pokpok","poyet","pu'keng","pucha","puchanggala","puchangina","puke","puki","pukinangina","puking","punyeta","puta","putang","putangina","putanginamo","putaragis","putragis","puyet","ratbu","shunga","siraulo","suso","susu","tae","taena","tamod","tanga","tangina","taragis","tarantado","tete","teti","timang","tinil","tite","titi","tungaw","ulol","ulul","ungas","yawa","ngayawa","bisakol","pisti","piste","pitoy","pototoy","pututuy","bbm", "bongbong", "marcos", "maraksot","jologs", "pistengyawa", "eroy", "iroy","pota", "panulai"
        );   

        $arrayMessage = explode(" ", $vmes);
        $arrayName = explode(" ", $vcn);
        $i = 0;
        $profanity = false; 

        while ($i < count($arrayMessage)){
            $p = 0;
            
            while ($p < count($badWords)){
              if($arrayMessage[$i] == $badWords[$p] && isset($badWords[$p])){
                $profanity = true;
                break;
              }
              
              $p++;
            }
            
            if($arrayMessage[$i] == $badWords[--$p]){
                break;
            }
            
            $i++;
        }

        $i = 0;

        while ($i < count($arrayName)){
            $p = 0;
            
            while ($p < count($badWords)  && isset($badWords[$p])){
              if($arrayName[$i] == $badWords[$p] && isset($badWords[$p])){
                $profanity = true;
                break;
              }
              
              $p++;
            }
            
            if($arrayName[$i] == $badWords[--$p]){
                break;
            }
            
            $i++;
        }

        

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($cn) || empty($mes)) {
                echo "<script> alert('Please enter all fields!'); </script>";
                
            } 

            elseif ($profanity == true){
                echo "<script> alert('Please be reminded to be respectful at all times<3'); </script>";
                
                $profanity = false;
            }

            else {

              mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // report errors

                // variables
                if(isset($_POST['cName'])){
                    echo "<script>alert('hi')</script>";


                // data to connect to local host
                $servername = 'localhost';
                $username = 'root';
                $dbname = 'sffreedomwall';
                $password = '';

                // connect to local host
                $conn = new mysqli($servername, $username, $password, $dbname);

                // check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // variable to insert data from user
                $ins = "INSERT INTO freedomwall (codeName, cnMessage) VALUES (?, ?)";

                // prepare connection --> convert to sql can understand
                $ins = $conn->prepare($ins);

                // parameters on data it can accept
                $ins->bind_param("ss", $cn , $mes);

                // execute the connection
                $ins->execute();

                // close database connection
                $conn->close();     
                header("location:freedomwall.php");
                unset($_POST['cName']);
                unset($_POST['cnMessage']);
                }
    
            }

        }
    
    }
    
?> 

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="icon"
      href="https://cdn.glitch.global/0b51df57-1a70-466d-b8be-650e7d370d4f/SF%20logo.png?v=1664153304926"
    />
    <title>Freedom Wall SF 2022</title>
    <!-- DO NOT DELETE! -->
    <link rel="canonical" href="https://glitch-hello-website.glitch.me/" />
    <meta
      name="description"
      content="A simple website, built with Glitch. Remix it to get your own."
    />
    <meta name="robots" content="index,follow" />
    <meta property="og:title" content="Freedom Wall SF 2022" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://glitch-hello-website.glitch.me/" />
    <meta
      property="og:description"
      content="Official Website For Freedom Wall SF 2022"
    />
    <meta
      property="og:image"
      content="https://cdn.glitch.com/605e2a51-d45f-4d87-a285-9410ad350515%2Fhello-website-social.png?v=1616712748147"
    />
    <meta name="twitter:card" content="summary" />

    <!-- 
    <link rel="stylesheet" href="https://glitch.com/edit/#!/freedom-wall-sf22?path=style.css%3A159%3A1" />

    
    <script src="/script.js" defer></script> -->
    
    <!-- Load an icon library to show a hamburger menu (bars) on small screens -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

/* General Usage */
<style>
/* General Usage */
html,
body {
  /* remove white spaces */
  margin: 0;
  padding: 0;
}
@font-face {
  font-family: "HighTide";
  src: url("https://cdn.glitch.global/237d7a89-6b98-4f20-ad62-c88a79710806/HighTide.otf?v=1668341158300");
}
@font-face {
  font-family: "Gochi Hand";
  src: url("https://cdn.glitch.global/237d7a89-6b98-4f20-ad62-c88a79710806/GochiHand-Regular.ttf?v=1668346997937");
}
@font-face {
  font-family: "Castellar";
  src: url("https://cdn.glitch.global/0b51df57-1a70-466d-b8be-650e7d370d4f/Castellar.ttf?v=1664370884447");
}

:root {
  --color-bg: #eeeeee;
  --color-text-main: #000000;
  --color-primary: #ffff00;
  --wrapper-height: 87vh;
  --image-max-width: 300px;
  --image-margin: 3rem;
  --font-family: "HK Grotesk";
  --font-family-header: "HK Grotesk";

}

/*=============NAVIGATION BAR=============*/
.navBar {
  position: fixed;
  top: 0px;
  width: 100%;
  z-index: 200;
  background-color: #eeeeee; /*COLORCOLORCLOOCLORLCORLOCLRORO*/
  overflow: hidden;
  border-top: 2px solid #cb9a4a;
  border-bottom: 2px solid #cb9a4a;
  height: 61px;
/*   transition: max-height 0.2s ease-out; */
}

#titlepic {
  /* logo */
  float: left;
  height: 50px;
  width: 50px;
  margin-top: 3px;
  margin-left: 5%;
}
#middlepic {
  /* three sisters */
  height: 50px;
  width: 50px;
  margin-top: 3px;
  display: flex;
  margin-left: 48.5%;
  margin-right: 50%;
}

.Ttitle {
  /* SPORTSFEST 2022 */
  float: left;
  color: #cb9a4a;
  margin-top: 18.72px;
  font-family: HK Grotesk, sans-serif;
  text-decoration: none;
}
ul {
  list-style-type: none;
}

.tLinks:link {
  color: #cb9a4a;
  padding: 20px;
  text-decoration: none;
  font-family: HK Grotesk, sans-serif;
}
.tLinks:visited {
  color: #cb9a4a;
  padding: 20px;
  text-decoration: none;
}
.topnav {
  position: fixed;
  top: 0px;
  right: 0px;
  width: auto;
  z-index: 100;
  padding: 0px;
  overflow: hidden;
  margin-top: 2px;
  min-height: 61px;
  transition: max-height 0.2s ease-out;
  transition-timing-function: linear;
  float: right;
}
.topnav a.tDummy {
  float: left;
  display: block;
  height: 61px;
  cursor: default;
}

.topnav a.tFiller {
  float: left;
  display: block;
  height: 100vh;
  cursor: default;
}

.topnav a.tLinks {
  float: left;
  display: block;
  height: 21px;
  z-index: 90;
}

.topnav a.tLinks:link {
  color: #cb9a4a;
  padding: 20px;
  text-decoration: none;
}
.topnav a.tLinks:visited {
  color: #cb9a4a;
  padding: 20px;
  text-decoration: none;
}
.topnav a.tLinks:hover:not(#nIcon) {
  background-color: #cb9a4a;
  color: #eeeeee;
  transition: 0.25s;
}
.topnav a.active:not(#nIcon) {
  background-color: #cb9a4a;
  color: #eeeeee;
}
/* Hide the link that should open and close the topnav on small screens */
.topnav .tIcon {
  height: 21px;
  display: none !important;
}
 /* hamburger menu */
#nIcon {
  float: right;
  display: block;
  font-size: 2em;
  margin: -0.25em 0px 0px 0px; 
  color: #cb9a4a;
  
}
#nIcon:hover {
  color: #967c51;
  transition: 0.25s;
}

/*=============PICTURE "FREEDOM WALL"=============*/
#parent {
  margin: 50px auto 0px 34%;
}
#Pic1 {
  /* banner */
  height: 50%;
  width: 50%;
  display: block;
}


/*=============WALL=============*/
#wall {
  background-image: url("https://cdn.glitch.global/237d7a89-6b98-4f20-ad62-c88a79710806/Copy%20of%20Freedom%20Wall%202.0%20(2).png?v=1668257069788");
  background-repeat:  round;
  width: 100%;
  color: #ffffeb;
  margin-top:-5%;
  /* border-radius:10px; */
  box-shadow: 0px -10px 15px #cb9a4a;
}
#wall h1{
  text-align:center;
  font-size:2.5em;
  padding-top:20px;
  font-family: "Castellar", sans-serif;
}
/* message container */
#messages{
  display: grid;
  gap: 10px 7em;
  grid-template-columns: auto auto auto auto;
  
  align-content: start;
  padding-top:0.5em;
  padding-bottom:10em;
  margin-right: 3em;
  margin-left: 3em;
 
}
#messages  div{
  padding:5px 20px;
  width:10em;
  word-break: break-word;
  font-family: "Gochi Hand", sans-serif;
  text-align:center;
}

/*=============PUP-UP=============*/
#child {
  background-image: url("https://cdn.glitch.global/237d7a89-6b98-4f20-ad62-c88a79710806/Untitled427_20221121232034.PNG?v=1671622180300");
  background-repeat:no-repeat;
  background-size:16em;
  background-position: 48% 53.5% ;
  position: fixed;
  /* margin: auto auto auto 89.1%; */
  right: 40px;
  bottom: 40px;
  width: 7em;
  height: 7em;
  object-fit: contain;
  background-color: rgba(231, 233, 233, 0.6);
  border-radius: 50%;
  border-color: transparent;
  transition: transform 0.25s;
}

#child:hover {
  transform: scale(1.1, 1.1);
  transition: transform 0.25s;
}
#modal {
  display: none;
  height:100%;
  width: 100%;
  overflow: hidden;

  /*
  background-color: rgb(0, 0, 0);
  background-color: rgba(0, 0, 0, 0.4); 
  */
  top:0;
  left:0;
  right:0;
  position:fixed;
}

#modalShadow {
  position: fixed;
  z-index: -1000;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  display: block;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}
/*Modal Content/Box*/
#modalContent {
  background-image: url("https://cdn.glitch.global/237d7a89-6b98-4f20-ad62-c88a79710806/input.PNG?v=1671622176510");
  background-repeat: no-repeat;
  background-size: 28em 30em;
  background-position: center;
  margin: 0;
  top: 50%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  padding-bottom: 7em;
  padding-top:7em;
  border: none;
  position: relative;
  
}
.inputs {
  text-align: center;
  background-color: #dfd4ba;
  border: none;
  color: #967c51;
}
#submit {
  background-color: #dfd4ba;
  border: 1px solid #dfd4ba;
  color: #967c51;
  font-size: 1.2em;
  font-family: "Gochi Hand", sans-serif;
}
i:not([class="fa fa-bars"]):not([class="fa fa-times-circle"]){
 color:#ad7e32;
}
/*Close Button*/
#close {
  margin-left:70%;
  margin-top: -4%;
  position:absolute;
  font-size: 50px;
  color: #cb9a4a;
  transition: color 0.25s;
}
#close i:hover,
#close i:focus {
  color:#ad7e32;
  text-decoration: none;
  cursor: pointer;
  transition: color 0.25s;
}
/*Animation*/
@keyframes animatetop {
  from {
    top: -300px;
    opacity: 0;
  }
  to {
    top: 0;
    opacity: 1;
  }
}

#form {
  text-align: center;
}
input::placeholder,
input:not([value="submit"]) {
  font-family: "Gochi Hand", sans-serif;
}
textarea::placeholder,
textarea {
  font-family: "Gochi Hand", sans-serif;
}
textarea {
  resize: none;
}
[name="cName"] {
  font-size: 1.2em;
  width: 13em;
}

/*=============FOOTER=============*/
.footer-basic {
  margin-bottom: 0px;
  margin-top: 80px;
  padding:40px 0;
  background-color:#ffffff;
  color:#4b4c4d;
}
.footer-basic .social {
  text-align:center;
  padding-bottom:10px;
}

.footer-basic .social > a {
  font-size:30px;
/*   width:40px; */
/*   height:40px; */
/*   line-height:40px; */
  display:inline-block;
  text-align:center;
  border-radius:50%;
/*   border:1px solid #cccccc; */
  margin:0 8px;
  color:inherit;
  opacity:0.75;
}

.footer-basic .social > a:hover {
  opacity:0.9;
}

.footer-basic .copyright {
  margin-top:15px;
  text-align:center;
  font-size:13px;
  color:#aaaaaa;
  margin-bottom:0;
  
}
 
/* 
#fpic{
  display:block;
  margin-right:auto;
  margin-left:auto;
  width:50%;
  height:35%;
}
.links{
  margin:auto;
  margin-left:auto;
  width:175px;
  font-size:2em;
}

#facebook{
  display:inline-block;
}

#twitter{
  display:inline-block;
} 

#instagram {
  display:inline-block;
}
#facebook, #twitter, #instagram{
  padding:10px;
}
 */

/* =============@MEDIA============= */
/*navigation media */

@media screen and (max-width: 1160px) {
  .topnav a.tLinks {
    display: none;
  }
  .topnav a.tIcon {
    float: right;
    display: block !important;
  }
}
 
@media screen and (max-width: 1160px) {
  .topnav.responsive {
    position: relative;
    /*box-shadow: 0 0 15px #111111; omitted*/
    background-color: var(--color-bg);
  }
  .topnavShadow {
    position: fixed;
    z-index: 1;
    left: 0;
    top: 0;
    width:100%;
    height:100%;
    display:none;
    overflow: auto;
    background-color: rgba(0,0,0,0.4);
  }
  .topnav.responsive a.tIcon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

/* General Media */
@media only screen and (max-height:610px){
  #modalContent{
    background-size: 25em 20em;
    padding-bottom: 5em;
    padding-top:5em;
  }
  #close {
    margin-top: -20px;
/*     margin-left:%; */
  }
  .inputs{
    transform:scale(0.8);
  }
  #submit{
    transform: translate(0, -25px);
  }
  #cName{
    transform: translate(0, 30px);
  }
  
}

@media only screen and (max-width: 1280px) {
  #messages{
    gap: 10px 7em;
  }
  #close{
    margin-left:75%;
  }  
}

@media only screen and (max-width:1245px){
  #messages{
    grid-template-columns: auto auto auto;
  }
  #close{
    margin-left:73%;
  }
  
}

@media only screen and (max-width: 1024px) {
  #modalContent{
    background-size: 26em 26em;

    padding-bottom: 10em;
    padding-top:10em;

  }
  #close {
    margin-left:74%;
  }
  #cName{
    width: 25%;
  }
  
  #submit{
    transform: translate(0px, -20px);
  }
  
  #child{
    margin: 25% auto 0px 90%;
  }
  #wall h1{
    font-size:2em;
  }
}

@media only screen and (max-width: 995px){
   #messages{
    grid-template-columns: auto auto;
  }
   #close {
  margin-left:78%;
  }
  #wall{
    margin-top:0;
     background-repeat: repeat-Y;
     background-size:contain;
  }
  .footer-basic {
    margin-top: 40px;
    padding:20px 0;    
}
/*   .social, .copyright{
    transform:scale(0.8);
  } */
  
  .footer-basic .social {
    padding-bottom:5px;
  }
  
}
@media only screen and (max-width: 800px) {
  #Pic1{
    transform: scale(1.35);
    padding-top: 10px;
  }
  #modal{
    overflow-y:visible;
  }
  #modalContent{

    background-size: 21em 21.6em;
    padding-bottom: 5em;
    padding-top:5em;
  }
  
  #cName{
    width: 25%;
    transform: translate(0px, 20px);
  }
  
  #submit{
    transform: translate(0px, -20px);
  } 
  
  #child{
    margin: 20% auto 0px 90%;
    right: 20px;
    bottom: 20px;
  }
  #wall h1{
    font-size:1.8em;
  }
  
  #close{
    margin-left:75%; 
  }
}
@media only screen and (max-width: 690px){
  #messages{
    grid-template-columns: auto;
    justify-content: center;
  }
 
  #close{
/*     margin-top:-1%; */
    margin-left:84%; 
  }
 
}

@media only screen and (max-height:510px){
 
  #modalContent{
    background-size: 18em 15em;
    padding-bottom: 4em;
    padding-top:4em;
  }
  #close{
/*     margin-top:4%; */
/*     margin-left:680px; */
    margin-top:20px;
    transform:scale(0.65);
  
  }
  #submit{
    transform: translate(0, -45px) scale(0.8); 
    
  }
  #cName{
    transform: translate(0, 50px) scale(0.8)  ;
  }
  #cnMessage{    
    transform: translate(0, 8px)  scale(0.6);
  }
  #child{
    transform:scale(0.8);
  }
 
}

@media only screen and (max-width: 475px) {
   #Pic1{
    transform: scale(2);
    margin-top:5em; 
  }
  
  .middleimg{
    display:none; 
  }
  
  #modal{
    height:100%;
    overflow-y:visible;
  }
  #modalContent{
    background-size: 17em 21.6em;
    padding: auto;
    height: 15em; 
    width: 80%; 
  }
  #child{
    margin: 85% auto 0px 85%;
    width: 93px;
    height: 93px; 
  }
  #wall h1{
    font-size:1.8em; 
  }
 #close{
    margin-top: -2%;
    margin-left:93%; 
    transform:scale(0.65);
  }
  .inputs{
    transform:scale(0.9); 
  }
  
  #cName {
    width: 40%;
    transform: translate(2.5px, 30px);
  }
  #submit{
    transform: translate(0px, -30px);
  }
    #cnMessage{
     transform: translate(4px, 0) scale(0.8); 
  }
  
}

@media only screen and (max-height: 410px){
#modalContent{
    background-size: 17em 12em;
  }
  #cName {
    transform: translate(0, 63px) scale(0.6) ;
    
  }
  #cnMessage{
    transform: translate(0, 3px) scale(0.5); 
/*     visibility:hidden; */
  }
  #submit{
     transform: translate(0, -60px) scale(0.6);

  }
  
   #close{
    margin-top:12px;
/*     margin */
    transform:scale(0.5);
  }
  
}
@media only screen and (max-width: 365px){
  #close{
     margin-left:98%;
    transform:scale(0.5);
  }
}
</style>
</head>

<body style="background-color: #e7e9e9">

    <!-- The wrapper and content divs set margins and positioning -->
    <div class="wrapper">
    <header class="navBar">
            <div class="siteName">
              <a href="https://the-charitesia.glitch.me"><img
                id="titlepic"
                src="https://cdn.glitch.global/0b51df57-1a70-466d-b8be-650e7d370d4f/SF%20logo.png?v=1664153304926"
              />
              <h3 class="Ttitle">SPORTSFEST 2022</h3></a>
            </div>
           <div class="middleimg">
              <img
                id="middlepic"
                src="https://cdn.glitch.global/0b51df57-1a70-466d-b8be-650e7d370d4f/charitesia.png?v=1665192239519"
              />
            </div>
        
            <div class="topnavShadow" id="topnavShadow"></div>
            <nav class="topnav" id="myTopnav">
              <a
                href="javascript:void(0);"
                class="tIcon tLinks"
                id="nIcon"
                onclick="dropDown();"
              >
              <i class="fa fa-bars"></i>
              </a>
              <a href="javascript:void(0);" class="tDummy"></a>
              <a href="https://the-charitesia.glitch.me/photos.html" class="tLinks"> SOCIAL MEDIA </a>
              <a href="javascript:void(0);" class="tFiller"></a>
            </nav>
        
      </header>
      
      <section id="intro">
        <div id="parent">
           <img id="Pic1" src="https://cdn.glitch.global/237d7a89-6b98-4f20-ad62-c88a79710806/Pink_and_Navy_Blue_Modern_Vintage_Small_Pharmacy_Back_to_Business_Landscape_Banner__1_-removebg-preview.png?v=1666263587793">
        </div> 
        
        
        <button id="child">  
        </button>  

        <div id="modal">
        <div id="modalShadow"></div>
            <div id="modalContent">
                <span id="close"><i class="fa fa-times-circle"></i></span> 
                <form id="form" action="freedomwall.php" method="post">
                    <input type="text" name="cName" maxlength="20" placeholder="USERNAME" class="inputs" id="cName">
                    <br><br>
                    <textarea required name="cnMessage" maxlength="200" rows="10" cols="25" placeholder="type your comment here" class="inputs"></textarea>
                    <br><br>
                    <input name="submit" id="submit" type="submit" value="submit">
                </form>

            </div>
          </div>
        
      </section>
      
      <section id="wall">
        <h1>!!WRITE ABOUT YOUR EXPERIENCES AND OPINIONS!!</h1>
        <div id="messages">
            <?php
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT); // report errors

            // data to connect to local host
            $servername = 'localhost';
            $username = 'root';
            $dbname = 'sffreedomwall';
            $password = '';

            // connect to local host
            $conn = new mysqli($servername, $username, $password, $dbname);

            // check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // select data from the table
            $selectData = "SELECT id, codeName, cnMessage FROM freedomwall ORDER BY id DESC";

            // query for selected data
            $result = $conn->query($selectData);

            // show data
            if($result->num_rows > 0){
    
                while($row = $result->fetch_assoc()) {
                    echo "<div>" . "<h3>" . $row["id"] . "</h3>" . "<p>" . $row["cnMessage"] . "</p>". "<br>" . "<h3>" . "<h3 style='display: inline;'>- </h3>" . $row["codeName"] . "</h3>" . "<h3 style='display: inline;'> -</h3>" . "</div>";
                }

            }
            else {
                echo "0 results";
            }

            // close database connection
            $conn->close();?>
        </div>
      </section>
        
    </div>
<!--=============FOOTER=============-->
    <div class="footer-basic" >
          <footer>
            <div class="social">
              <a href="https://www.instagram.com/evc2025/"><i class="fa fa-instagram"></i></a>
              <a href="https://twitter.com/EVC2025"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/acpshsevc/"><i class="fa fa-facebook-official"></i></a>
            </div> 
            <p class="copyright">Athletic Council © 2022</p>
            <p class="copyright">@ebbysebb @fiona.nadine_<br>@joshuwasudario @jjjosol3690</p>
            <p class="copyright">Brought to you by the scholars of PSHS-EVC</p>
          </footer>
        </div>
</body>

<script>
 //=============VARIABLE=============
var btn = document.getElementById("child"); // button modal
var modal = document.getElementById("modal"); // scroll
var span = document.getElementById("close"); // x

var dropbtn = document.getElementById("myTopnav"); // pages
let topnavShadow = document.getElementById("topnavShadow");

/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
// let dimmer = document.getElementById("dimmer");
let navBar = document.getElementById("myTopnav");
let navIcon = document.getElementById("nIcon"); // hamburger menu
let firstTime = true;
const navMinHeight = 0;
const navMaxHeight = 100;
let nBarSize;
var counter = 0;
let contains = false;
var cName = document.forms["form"]["cName"];
var cnMessage = document.forms["form"]["cnMessage"];




//=============FUNCTION FOR DROPDOWN=============
window.onscroll = function() {scrollFunction()};
/*dropbtn.onclick = function(){
     
    if(counter%2 == 0){
       topnavShadow.style.display = "none";
       counter++;
    }
    else{
       topnavShadow.style.display = "block"; 
       counter++;
    // }
}*/
/*dropbtn.onmouseenter = function(){
    topnavShadow.style.display = "block";
    dropDown();
}

dropbtn.onmouseleave = function(){
    topnavShadow.style.display = "none";
    shrinkBar();
}*/
btn.onclick = function() {
    modal.style.display = "block";
}

span.onclick = function() {
    modal.style.display = "none";
}

// window.onclick = function(event) {
//   alert(event.currentTarget);
//   const cModal = event.target.closest(modal);
//     if((!cModal && modal.style.display = "block")
//           modal.style.display = "none";
// }

function dropDown() {
  if (navBar.className === "topnav") {
      
    topnavShadow.style.display = "block";
    
    navBar.style.maxHeight = navMinHeight;
    navBar.className += " responsive";
    // dimmer.style.display = "block";
    navBar.style.maxHeight = navMaxHeight + "%";
    for (nBarSize = navMinHeight; nBarSize <= navMaxHeight; nBarSize++) {
        navBar.style.maxHeight = nBarSize + "%";
      } 
  }
  else {
    if(firstTime){
      firstTime = false;
      
      topnavShadow.style.display = "none";
      
      navBar.style.position = "fixed";
      // dimmer.style.display = "none";
      navBar.style.maxHeight = navMaxHeight;
      for (nBarSize = navMaxHeight; nBarSize >= navMinHeight; nBarSize--) {
        navBar.style.maxHeight = nBarSize + "%";
      }
      navBar.className = "topnav";
    } 
    else {
      shrinkBar();
    }
  }
}

function shrinkBar() {
  topnavShadow.style.display = "none";
  
  navBar.style.position = "fixed";
  // dimmer.style.display = "none";
  navBar.style.maxHeight = navMaxHeight;
  for (nBarSize = navMaxHeight; nBarSize >= navMinHeight; nBarSize--) {
    navBar.style.maxHeight = nBarSize + "%";
  }
  window.setTimeout(function() {navBar.className = "topnav";}, 200);
}

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    if (navBar.className === "topnav responsive") {
      shrinkBar();
    }
  }
}

window.onresize = function(){
  console.log("resize");
  shrinkBar();
}
dropDown();
dropDown();

/* function submitData() {
  alert("hahahahahhah");
} */

//=============VALIDATION=============
var badWords = [
    "ahole",
    "anus",
    "ash0le",
    "ash0les",
    "asholes",
    "ass",
    "assface",
    "assh0le",
    "assh0lez",
    "asshole",
    "assholes",
    "assholz",
    "asswipe",
    "azzhole",
    "bassterds",
    "bastard",
    "bastards",
    "bastardz",
    "basterds",
    "basterdz",
    "biatch",
    "bitch",
    "bitches",
    "blow Job",
    "boffing",
    "butthole",
    "buttwipe",
    "c0ck",
    "c0cks",
    "c0k",
    "cawk",
    "cawks",
    "clit",
    "cnts",
    "cntz",
    "cock",
    "cockhead",
    "cock-head",
    "cocks",
    "cocksucker",
    "cock-sucker",
    "crap",
    "cum",
    "cunt",
    "cunts",
    "cuntz",
    "dick",
    "dild0",
    "dild0s",
    "dildo",
    "dildos",
    "dilld0",
    "dilld0s",
    "dominatricks",
    "dominatrics",
    "dominatrix",
    "dyke",
    "enema",
    "fag",
    "fag1t",
    "faget",
    "fagg1t",
    "faggit",
    "faggot",
    "fagg0t",
    "fagit",
    "fags",
    "fagz",
    "faig",
    "faigs",
    "fart",
    "fuck",
    "fucker",
    "fuckin",
    "fucking",
    "fucks",
    "Fudge Packer",
    "fuk",
    "Fukah",
    "Fuken",
    "fuker",
    "Fukin",
    "Fukk",
    "Fukkah",
    "Fukken",
    "Fukker",
    "Fukkin",
    "g00k",
    "god-damned",
    "h00r",
    "h0ar",
    "h0re",
    "hells",
    "hoar",
    "hoor",
    "hoore",
    "jackoff",
    "jap",
    "japs",
    "jerk-off",
    "jisim",
    "jiss",
    "jizm",
    "jizz",
    "knob",
    "knobs",
    "knobz",
    "kunt",
    "kunts",
    "kuntz",
    "lezzian",
    "lipshits",
    "lipshitz",
    "masochist",
    "masokist",
    "massterbait",
    "masstrbait",
    "masstrbate",
    "masterbaiter",
    "masterbate",
    "masterbates",
    "mother-fucker",
    "n1gr",
    "nastt",
    "nigger;",
    "nigur;",
    "niiger;",
    "niigr;",
    "orafis",
    "orgasim;",
    "orgasm",
    "orgasum",
    "oriface",
    "orifice",
    "orifiss",
    "packi",
    "packie",
    "packy",
    "paki",
    "pakie",
    "paky",
    "pecker",
    "peeenus",
    "peeenusss",
    "peenus",
    "peinus",
    "pen1s",
    "penas",
    "penis",
    "penis-breath",
    "penus",
    "penuus",
    "phuc",
    "phuck",
    "phuk",
    "phuker",
    "phukker",
    "polac",
    "polack",
    "polak",
    "poonani",
    "pr1c",
    "pr1ck",
    "pr1k",
    "pusse",
    "pussee",
    "pussy",
    "puuke",
    "puuker",
    "qweir",
    "recktum",
    "rectum",
    "retard",
    "sadist",
    "scank",
    "schlong",
    "screwing",
    "semen",
    "sex",
    "sexy",
    "sh!t",
    "sh1t",
    "sh1ter",
    "sh1ts",
    "sh1tter",
    "sh1tz",
    "shit",
    "shits",
    "shitter",
    "shitty",
    "shity",
    "shitz",
    "shyt",
    "shyte",
    "shytty",
    "shyty",
    "skanck",
    "skank",
    "skankee",
    "skankey",
    "skanks",
    "skanky",
    "slag",
    "slut",
    "sluts",
    "slutty",
    "slutz",
    "son-of-a-bitch",
    "tit",
    "turd",
    "va1jina",
    "vag1na",
    "vagiina",
    "vagina",
    "vaj1na",
    "vajina",
    "vullva",
    "vulva",
    "w0p",
    "wh00r",
    "wh0re",
    "whore",
    "xrated",
    "xxx",
    "b!+ch",
    "bitch",
    "blowjob",
    "clit",
    "arschloch",
    "fuck",
    "shit",
    "ass",
    "asshole",
    "b!tch",
    "b17ch",
    "b1tch",
    "bastard",
    "bi+ch",
    "boiolas",
    "buceta",
    "c0ck",
    "cawk",
    "chink",
    "cipa",
    "clits",
    "cock",
    "cum",
    "cunt",
    "dildo",
    "dirsa",
    "ejakulate",
    "fatass",
    "fcuk",
    "fuk",
    "fux0r",
    "hoer",
    "hore",
    "jism",
    "kawk",
    "l3itch",
    "l3i+ch",
    "masturbate",
    "masterbat*",
    "masterbat3",
    "motherfucker",
    "s.o.b.",
    "mofo",
    "nazi",
    "nigga",
    "nigger",
    "nutsack",
    "phuck",
    "pimpis",
    "pusse",
    "pussy",
    "scrotum",
    "sh!t",
    "shemale",
    "shi+",
    "sh!+",
    "slut",
    "smut",
    "teets",
    "tits",
    "boobs",
    "b00bs",
    "teez",
    "testical",
    "testicle",
    "titt",
    "w00se",
    "jackoff",
    "wank",
    "whoar",
    "whore",
    "*damn",
    "*dyke",
    "*fuck*",
    "*shit*",
    "@$$",
    "amcik",
    "andskota",
    "arse*",
    "assrammer",
    "ayir",
    "bi7ch",
    "bitch*",
    "bollock*",
    "breasts",
    "butt-pirate",
    "cabron",
    "cazzo",
    "chraa",
    "chuj",
    "Cock*",
    "cunt*",
    "d4mn",
    "daygo",
    "dego",
    "dick*",
    "dike*",
    "dupa",
    "dziwka",
    "ejackulate",
    "ekrem*",
    "ekto",
    "enculer",
    "faen",
    "fag*",
    "fanculo",
    "fanny",
    "feces",
    "feg",
    "felcher",
    "ficken",
    "fitt*",
    "flikker",
    "foreskin",
    "fotze",
    "fu(*",
    "fuk*",
    "futkretzn",
    "gook",
    "guiena",
    "h0r",
    "h4x0r",
    "hell",
    "helvete",
    "hoer*",
    "honkey",
    "huevon",
    "hui",
    "injun",
    "jizz",
    "kanker*",
    "kike",
    "klootzak",
    "kraut",
    "knulle",
    "kuk",
    "kuksuger",
    "kurac",
    "kurwa",
    "kusi*",
    "kyrpa*",
    "lesbo",
    "mamhoon",
    "masturbat*",
    "merd*",
    "mibun",
    "monkleigh",
    "mouliewop",
    "muie",
    "mulkku",
    "muschi",
    "nazis",
    "nepesaurio",
    "nigger*",
    "orospu",
    "paska*",
    "perse",
    "picka",
    "pierdol*",
    "pillu*",
    "pimmel",
    "piss*",
    "pizda",
    "poontsee",
    "poop",
    "porn",
    "p0rn",
    "pr0n",
    "preteen",
    "pula",
    "pule",
    "puta",
    "puto",
    "qahbeh",
    "queef*",
    "rautenberg",
    "schaffer",
    "scheiss*",
    "schlampe",
    "schmuck",
    "screw",
    "sh!t*",
    "sharmuta",
    "sharmute",
    "shipal",
    "shiz",
    "skribz",
    "skurwysyn",
    "sphencter",
    "spic",
    "spierdalaj",
    "splooge",
    "suka",
    "b00b*",
    "testicle*",
    "titt*",
    "twat",
    "vittu",
    "wank*",
    "wetback*",
    "wichser",
    "wop*",
    "yed",
    "zabourah",
    "amputa","bilat","binibrocha","bobo","bogo","brocha","burat","bwesit","bwisit","engot","etits","gago","habal", "hinampak","hinayupak","hindot","hindutan","hudas","iniyot","inutel","inutil","iyot","kagaguhan","kagang","kantot","kantotan","kantut","kantutan","kaululan","kayat","kiki","kikinginamo","kingina","kupal","leche","leching","lechugas","lintik","nakakaburat","nimal","ogag","olok","pakingshet","pakshet","pakyu","poke","poki","pokpok","poyet","pu'keng","pucha","puchanggala","puchangina","puke","puki","pukinangina","puking","punyeta","puta","putang","putangina","putanginamo","putaragis","putragis","puyet","ratbu","shunga","siraulo","suso","susu","tae","taena","tamod","tanga","tangina","taragis","tarantado","tete","teti","timang","tinil","tite","titi","tungaw","ulol","ulul","ungas","yawa","ngayawa","bisakol","pisti","piste","pitoy","pototoy","pututuy","bbm", "bongbong", "marcos", "maraksot","jologs", "pistengyawa", "eroy", "iroy", "panulay", "panulai", "panolay", "panolai"
]

function myValidation() {
  var stringMessage = cnMessage.value.toLowerCase();
  var stringName = cName.value.toLowerCase();
  let arrayMessage = stringMessage.split(" ");
  let arrayName = stringName.split(" ");
  
  var i = 0;
  
  if (cName.value==""||cName.value==null||cnMessage.value==""||cnMessage.value==null) {
      alert("Please enter all fields!");
      return false;
  }
  
  while (i <= arrayMessage.length){
    var p = 0;
    
    while (p < badWords.length){
      if(arrayMessage[i] == badWords[p]){
        alert("Please be reminded to be respectful at all times<3");
        break;
      }
      
      p++;
    }
    
    if(arrayMessage[i] == badWords[p]){
        break;
    }
    
    i++;
  }
  
  i = 0;
  while (i <= arrayName.length){
    p = 0;
    
    while (p < badWords.length){
      if(arrayName[i] == badWords[p]){
        alert("Please change your username.");
        break;
      }
      
      p++;
    }
    
    if(arrayName[i] == badWords[p]){
        break;
    }
    
    i++;
  }
  

        //turnToPreviousPage();
        return true;
}

</script>




</html>
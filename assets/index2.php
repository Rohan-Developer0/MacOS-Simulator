<!DOCTYPE html>
<html lang="en" id="all">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="manifest.webmanifest">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/react-rangeslider/umd/rangeslider.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="assets/css/style.css"> <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
  <div class="loader">
  <div class="loaderback"></div>
  <audio playsinline onloadeddata="var audioPlayer = this; setTimeout(function() { audioPlayer.play(); }, 6000)">
    <source src="assets/audio/startup.mp3" type="">
    </audio>
    <img src="assets/img/apple.png" width="100px" style="position: absolute;top: 46%; left: 50%;z-index: 100000000;transform: translate3d(-50%, -50%, 0); animation: appear 1s;" alt="">
    <div class="progressback">
        <div class="progressloader">
          <div class="progressloader-value"></div>
        </div>
        </div>
        </div>
  <div class="all" >
    <ul class="context">
        <li class="context__header">Share This</li>
        <li class="context__item context__item--twitter"><a href="#"><i class="pre entypo-twitter"> </i>Share This</a></li>
        <li class="context__item context__item--facebook"><a href="#"><i class="pre entypo-facebook-squared"> </i>Get </a></li>
        <li class="context__item context__item--google context__item--nope"><a href="#" title="lol, not likely">Post to Google+</a></li>
        <li class="context__item context__item--pinterest"><a href="#"><i class="pre entypo-pinterest"> </i>Pin this</a></li>
        <li class="context__divider"></li>
        <li class="context__item context__item--email"><a href="#">Email to a friend</a><i class="post entypo-right-open"></i>
          <ul class="context context--sub">
            <li class="context__item"><a href="#">Anita</a></li>
            <li class="context__item"><a href="#"><i class="pre entypo-check"> </i>Jennifer</a></li>
            <li class="context__item"><a href="#">Dave</a></li>
            <li class="context__item"><a href="#">Hiro</a></li>
            <li class="context__item"><a href="#">Yoona</a></li>
          </ul>
        </li>
        <li class="context__item context__item--email"><a href="#">Save for later</a></li>
      </ul>
    <div class="topbar">
        <ul class="topbarinner">
            <div class="topbardrop">
                <button class="dropbtn" onclick="dropdown1()">Rohan Sharma</button>
                <div class="dropdown-content" id="dropdown1">
                  <a href="#" class="openlikework">Like this work</a>
                  <a href="#">About the Developer</a>
                  <a href="#">Exit</a>
                </div>
              </div>
                <li class="topbardrop">
                <button onclick="dropdown2()" class="dropbtn">File</button>
                <div id="dropdown2" class="dropdown-content">
                  <a class="showfile">New File</a>
                  <a href="#">Open File</a>
                  <a href="#"></a>
                </div>
               </li>
        <ul class="righttopbar">
          <li class="topbardrop">
            <button onclick="dropdown3()" class="dropbtn"><div class="batteryshape"><div class="level"><div class="percentage"></div></div></div>
      </button>
            <div id="dropdown3" class="dropdown-content" style="height: 125px; width: 300px;border-radius: 10px; right: 0px;border: 1px solid rgba(255, 255, 255, 0.1);backdrop-filter: blur(50px); padding: 0 10px;">
              <div class="batterytext">Battery</div><div class="percent"></div><div class="powersource">Power Source: Power Supply</div><hr class="battline"><div class="poweruse">No Apps using Significant Power</div>
            </div>
            </li>
            <li class="topbardrop">
              <button onclick="controlcenter()" class="dropbtnicon"><img style="-webkit-filter: invert(100%);height: 25px;
                width: 25px;  filter: invert(100%);transform: scale(0.5);" src="https://eshop.macsales.com/blog/wp-content/uploads/2021/03/control-center-icon.png" alt="" class="control-center"></button>
              <div id="controlcenter" class="dropdown-content" style="position: absolute; right: -150px; ;">
                <div id="app" style="">
</div>
  <!-- Tracks used in this music/audio player application are free to use. I downloaded them from Soundcloud and NCS websites. I am not the owner of these tracks. -->

  <div id="app-cover" style="">
    <div id="bg-artwork"></div>
    <div id="bg-layer"></div>
    <div id="player">
        <div id="player-track" style="display: block; position: absolute; top: 0;">
            <div id="album-name"></div>
            <div id="track-name"></div>
            <div id="track-time">
                <div id="current-time"></div>
                <div id="track-length"></div>
            </div>
            <div id="s-area">
                <div id="ins-time"></div>
                <div id="s-hover"></div>
                <div id="seek-bar"></div>
            </div>
        </div>
        <div id="player-content">
            <div id="album-art">
                <img src="https://i0.wp.com/hiphopkit.com/uploads/2020/11/Khalid-Talk-artwork.png?ulb=false&ssl=1" class="active" id="_1">
                <img src="https://images-na.ssl-images-amazon.com/images/I/61QQv9A3cCL._SL1400_.jpg" id="_2">
                <img src="https://media.npr.org/assets/img/2020/11/25/screen-shot-2020-11-25-at-11.12.44-am_sq-92bab559c47f61a470df033fd6f72b0c1335b83d.jpg" id="_3">
                <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_4.jpg" id="_4">
                <img src="https://raw.githubusercontent.com/himalayasingh/music-player-1/master/img/_5.jpg" id="_5">
                <div id="buffer-box"></div>
            </div>
            <div id="player-controls">
                <div class="control">
                    <div class="button" id="play-previous">
                        <i class="fas fa-backward"></i>
                    </div>
                </div>
                <div class="control">
                    <div class="button" id="play-pause-button">
                        <i class="fas fa-play"></i>
                    </div>
                </div>
                <div class="control">
                    <div class="button" id="play-next">
                        <i class="fas fa-forward"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- <a href="https://www.youtube.com/channel/UC7hSS_eujjZOEQrjsda76gA/videos" target="_blank" id="ytd-url">My YouTube Channel</a> -->
    
              </div>
              </li>
              <li class="topbardrop">
                <button onclick="dropdown1()" class="dropbtn " id="datepicker"></button>
                <div id="dropdown1" class="dropdown-content">
                  <a href="#">Like this work</a>
                  <a href="#">About the Developer</a>
                  <a href="#">Exit</a>
                </div>
                </li>
        </ul>      
        </ul>
    </div>
<div class="appcontainer">

</div>
    <div class="dockpuller">
    <div class="dock">
        <div class="dock-container">
          <li class=" li-1">
            <div class="name">Finder</div>
            <img class="ico" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853981255cc36b3a37af_finder.png" alt="">
          </li>
          <li class=" li-2">
            <div class="name">Rohan's Codepen</div>
            <script type="text/javascript"
            src="https://studio.alan.app/web/lib/alan_lib.min.js"></script>
           <script>
             var alanBtnInstance = alanBtn({
               key: "e42a9532c0f8375828e51b508e99c4a62e956eca572e1d8b807a3e2338fdd0dc/stage",
               onCommand: function (commandData) {
                 if (commandData.command === "go:back") {
                   //call client code that will react on the received command
                 }
               },
               rootEl: document.getElementById("alan-btn"),
             });
           </script>
            <div class="alan-btn">
              <a href="https://codepen.io/Rohan2312" target="_blank">
            <img class="ico" src="assets/img/codepen.png" style="width: 45px; height: 45px;" alt="">
            </a>
            </div>
          </li>
          <li class=" li-4">
            <div class="name">Youtube</div>
            <a href="https://youtube.com/" target="_blank">
            <img class="ico" src="assets/img/youtube.png" style="width: 40px; height: 40px;" alt="">
            </a>
          </li>
          <li class=" li-5">
            <div class="name">Notes</div>
            <img class="ico showfile" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853c849ec3735b52cef9_notes.png" alt="">
          </li>
          <li class=" li-6">
            <div class="name">Excel</div>
            <a href="https://www.office.com/launch/excel?auth=1" target="_blank">
            <img class="ico" src="assets/img/excel.png" style="width: 40px; height: 40px;" alt="">
            </a>
          </li>
          <li class=" li-7">
            <div class="name">Powerpoint</div>
            <a href="https://www.office.com/launch/powerpoint?auth=1" target="_blank">
            <img class="ico" src="assets/img/powerpoint.png" style="width: 40px; height: 40px;" alt="">
            </a>
          </li>
          <li class=" li-8">
            <div class="name">Word</div>
            <a href="https://www.office.com/launch/word?auth=1" target="_blank">
            <img class="ico" src="assets/img/word2.png" style="width: 40px; height: 40px;" alt="">
            </a>
          </li>
          <li class=" li-9">
            <div class="name">Camera</div>
            <img class="ico opencamera" id="opencamera" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f708537f18e2cb27247c904_facetime.png" alt="">
          </li>
          <li class=" li-10">
            <div class="name">Music</div>
            <img class="ico" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853ba0782d6ff2aca6b3_music.png" alt="">
          </li>
          <li class=" li-11">
            <div class="name">Calculator</div>
            <img class="ico opencalc" src="assets/img/calculator.png" style="width: 40px; height: 40px;" alt="">
          </li>
          <!-- <li class=" li-12">
            <div class="name">TV</div>
            <img class="ico" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f708540dd82638d7b8eda70_tv.png" alt="">
          </li> -->
          <li class=" li-12">
            <div class="name">Powerline</div>
            <img class="ico openpowerline" src="assets/img/powerline.png" style="width: 40px; height: 40px;" alt="">
          </li>
          <li class=" li-13">
            <div class="name">2048</div>
            <img class="ico opentwozero" src="assets/img/2048.png" style="width: 40px; height: 40px;" alt="">
          </li>
          <li class=" li-14">
            <div class="name">Safari</div>
            <img class="ico openbrowser" src="https://uploads-ssl.webflow.com/5f7081c044fb7b3321ac260e/5f70853ddd826358438eda6d_safari.png" alt="">
          </li>
          <li class=" li-bin li-3">
            <div class="name">Comments</div>
            <img class="ico" src="assets/img/comments.png" style="width: 40px; height: 40px;"  alt="">
          </li>
          <li class="li-15">
            <div class="name">Developer</div>
            <img class="ico ico-bin openportfolio" src="assets/img/rohan.png" style="" alt="">
          </li>
          
        </div>
        </div>
      </div>
      <div class="comments">
<!--It's just a concept, a chat UI design for direct messaging!
Enjoy! :) Don't forget to click the heart if you like it! -->

<div class="container">
  <div class="chatbox">
    <div class="top-bar">
      <div class="avatar"><p>V</p></div>
      <input type="text" id="name" name="name" class="name"></input>
      <div class="icons">
        <i class="fas fa-phone"></i>
        <i class="fas fa-video"></i>
      </div>
      <div class="menu">
        <div class="dots"></div>
      </div>
    </div>
    <div class="middle">
      <div class="voldemort">
        <div class="incoming">
          <div class="result">
          </div>
          <?php 
//Database connection
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'macos';
$connection = mysqli_connect($dbhost, $dbuser, $dbpass , $db); 
 
          $query = "SELECT * FROM comments";
           $select_all_posts_query = mysqli_query($connection, $query);
              
              while($row = mysqli_fetch_assoc( $select_all_posts_query)) {
              $comment_name = $row['comment_user'];
              $comment_message = $row['comment_content'];
          $comment_time = $row['comment_time'];
          ?>
          
          <div class="bubble"><div class="namebubble" style="margin-bottom: 5px; font-size: 15px;"><?php echo $comment_name; ?></div><div style="font-size: 17px;"><?php echo $comment_message; ?></div></div><br>
          <?php } ?>
        <div class="typing">
          <div class="bubble">
            <div class="ellipsis one"></div>
            <div class="ellipsis two"></div>
            <div class="ellipsis three"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-bar">
      <div class="chat">
        <input type="text" id="message" name="message" placeholder="Type a message..." />
        <button type="submit" class="btnprimaryform" id="btnprimaryform"><i class="fas fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
      </div>
      <div class="powerline" style="display: none;">
        <div class="iconcontainer"   style="z-index: 1000000000; margin-top: 3.5px; margin-left: 2px;">
          <i class="closeicon closepowerline"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
        </div>
          <div class="powerlineheader">

          </div>
        <iframe src="http://powerline.io/" width="100%" height="90%" style="position: absolute; bottom: 0; border-radius: 10px;" frameborder="0"></iframe>
      </div>
      <div class="twozerowindow" style="display: none;">
        <div class="iconcontainer">
          <i class="closeicon closetwozero"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
        </div>
          <div class="twozerowindowheader">

          </div>
          <div class="container" >
            <div class="heading" style="position:absolute; top: 75px; right: 10px;">
              <div class="score-container">0</div>
            </div>
          
            <div class="game-container" style="margin-top: 50px;">
              <div class="game-message">
                <p>Game Over</p>
                <div class="lower">
                  <a class="retry-button"><i class="fa fa-redo"></i></a>
                </div>
              </div>
          
              <div class="grid-container">
                <div class="grid-row">
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                </div>
                <div class="grid-row">
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                </div>
                <div class="grid-row">
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                </div>
                <div class="grid-row">
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                  <div class="grid-cell"></div>
                </div>
              </div>
          
              <div class="tile-container">
          
              </div>
            </div>
          
            
           <!-- <p class="game-explanation">
              <strong class="important">提示:</strong> 按方向键或者触摸屏幕即可开玩
            </p>
            <hr>
             <p>2014</p>
              -->
          </div>
        </div>
      </div>
      <div class="likework" style="display: none;">
        <div class="iconcontainer">
          <i class="closeicon closelikework"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
          <i class="fullscreenicon" style="margin-left: 3px; "><svg width="6" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="2" stroke-linecap="round" d="M.61.703h5.8"></path></svg></i>
          <i class="minimizeicon" style="font-size: px;"><svg width="15px" height="15px" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg" fill="#000" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M4.871 3.553L9.37 8.098V3.553H4.871zm3.134 5.769L3.506 4.777v4.545h4.499z"></path><circle cx="6.438" cy="6.438" r="6.438" fill="none"></circle></svg></i>
          </div>
          <div class="likeworkheader">

          </div>
<div class="hexagon">
  <div class="hex">
    <div></div>
    <div></div>
    <div></div>
  </div>
  <div class="hex">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
</div>
      <button class="add-button">Add to home screen</button>
      <div class="calcapp" style="display: none;">
        <div class="iconcontainer">
          <i class="closeicon closecalcapp"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
          <i class="fullscreenicon" style="margin-left: 3px; "><svg width="6" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="2" stroke-linecap="round" d="M.61.703h5.8"></path></svg></i>
          <i class="minimizeicon" style="font-size: px;"><svg width="15px" height="15px" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg" fill="#000" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M4.871 3.553L9.37 8.098V3.553H4.871zm3.134 5.769L3.506 4.777v4.545h4.499z"></path><circle cx="6.438" cy="6.438" r="6.438" fill="none"></circle></svg></i>
          </div>
          <div class="calcappheader">

          </div>
      <div class="calc">
        <div class="calc-screen">
          <span class="js-result">0</span>
        </div>
        <div class="calc-grid">
          <button data-action="clear" class="ligth">AC</button>
          <button data-action="negative" class="ligth">&plusmn;</button>
          <button data-action="percentage" class="ligth">%</button>
          <button data-action="divide" class="action">&divide;</button>
          
          <button data-action="number">7</button>
          <button data-action="number">8</button>
          <button data-action="number">9</button>
          <button data-action="multiply" class="action">&times;</button>
          
          <button data-action="number">4</button>
          <button data-action="number">5</button>
          <button data-action="number">6</button>
          <button data-action="substract" class="action">&minus;</button>
          
          <button data-action="number">1</button>
          <button data-action="number">2</button>
          <button data-action="number">3</button>
          <button data-action="add" class="action">+</button>
          
          <button data-action="number" class="btn-span">0</button>
          <button data-action="float">.</button>
          <button data-action="result" class="action">&equals;</button>
        </div>
      </div>
      </div>
      <div class="portfolio" style="display: none;">
        <div class="iconcontainer" style="z-index: 100;">
          <i class="closeicon closeportfolio"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
          <i class="fullscreenicon" style="margin-left: 3px; "><svg width="6" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="2" stroke-linecap="round" d="M.61.703h5.8"></path></svg></i>
          <i class="minimizeicon" style="font-size: px;"><svg width="15px" height="15px" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg" fill="#000" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M4.871 3.553L9.37 8.098V3.553H4.871zm3.134 5.769L3.506 4.777v4.545h4.499z"></path><circle cx="6.438" cy="6.438" r="6.438" fill="none"></circle></svg></i>
          </div>
          <div class="portfolioheader">

          </div>
        <iframe style="position: absolute; bottom: 0; z-index: 0;" src="http://rohan.bodmaslmedia.in" frameborder="0" width="100%" height="100%"></iframe>
        
      </div>
    <div class="noteapp" style="display: none;">
      <div class="iconcontainer">
        <i class="closeicon closefileapp"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
        <i class="fullscreenicon" style="margin-left: 3px; "><svg width="6" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="2" stroke-linecap="round" d="M.61.703h5.8"></path></svg></i>
        <i class="minimizeicon" style="font-size: px;"><svg width="15px" height="15px" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg" fill="#000" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M4.871 3.553L9.37 8.098V3.553H4.871zm3.134 5.769L3.506 4.777v4.545h4.499z"></path><circle cx="6.438" cy="6.438" r="6.438" fill="none"></circle></svg></i>
        </div>
        <input type="button" value="Save" id="dwn-btn" class="savebtn">
     <div class="noteappheader">

    </div>
    <textarea class="texttyping" id="text-val" style="padding: 10px;" rows="4" autofocus></textarea>
    </div>
    </div>

    <div class="cameraapp" style="display: none;">
      <input type="text" class="closecameraapp">
      
   <div class="cameraappheader">
      </div>
      <p><span id="errorMsg"></span></p>
    
<!-- Stream video via webcam -->
<div class="video-wrap">
    <video id="video" style="width: 100%; height:100%;margin:0 auto;" playsinline autoplay></video>
</div>

<!-- Trigger canvas web API -->
<div class="controller">
    <button id="snap"class="capture">Capture</button>
</div>

<!-- Webcam video snapshot -->
<canvas id="canvas" width="900px" height="500px"></canvas>
      </div>
            <div class="browserapp" style="display: none;">
              <div class="iconcontainer">
                <i class="closeicon closebrowserapp"><svg width="7" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="1.2" stroke-linecap="round" d="M1.182 5.99L5.99 1.182m0 4.95L1.182 1.323"></path></svg></i>
                <i class="fullscreenicon" style="margin-left: 3px; "><svg width="6" height="5" fill="none" xmlns="http://www.w3.org/2000/svg"><path stroke="#000" stroke-width="2" stroke-linecap="round" d="M.61.703h5.8"></path></svg></i>
                <i class="minimizeicon" style="font-size: px;"><svg width="15px" height="15px" viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg" fill="#000" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2"><path d="M4.871 3.553L9.37 8.098V3.553H4.871zm3.134 5.769L3.506 4.777v4.545h4.499z"></path><circle cx="6.438" cy="6.438" r="6.438" fill="none"></circle></svg></i>
                </div>
                <div class="browserappheader">

                </div>
      <iframe src="https://www.google.com/webhp?igu=1" width="100%" style="border-radius: 10px;" height="100%">
        <input type="button" value="Back" onclick="goback()" />
        </iframe>
        </div>
        
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.13.1/umd/react.production.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/hammer.js/1.0.6/hammer.min.js'></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.13.1/umd/react-dom.production.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"></script>
      <script src="https://unpkg.com/react-rangeslider/umd/rangeslider.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
      <script src="./service-worker.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
    $(document).ready(function () {
      $('.btnprimaryform').click(function (e) {
        e.preventDefault();
        var name = $('#name').val();
        var message = $('#message').val();
        $.ajax
          ({
            type: "POST",
            url: "form_submit.php",
            data: { "name": name, "message": message },
            success: function (data) {
              $('.result').html(data);
              $('#contactform')[0].reset();
            }
          });
      });
    });
  </script>
  <script>
     document.addEventListener("DOMContentLoaded", function () {
  // Wait till the browser is ready to render the game (avoids glitches)
  window.requestAnimationFrame(function () {
    var manager = new GameManager(4, KeyboardInputManager, HTMLActuator);
  });
});

function GameManager(size, InputManager, Actuator) {
  this.size         = size; // Size of the grid
  this.inputManager = new InputManager;
  this.actuator     = new Actuator;

  this.startTiles   = 2;

  this.inputManager.on("move", this.move.bind(this));
  this.inputManager.on("restart", this.restart.bind(this));

  this.setup();
}

// Restart the game
GameManager.prototype.restart = function () {
  this.actuator.restart();
  this.setup();
};

// Set up the game
GameManager.prototype.setup = function () {
  this.grid         = new Grid(this.size);

  this.score        = 0;
  this.over         = false;
  this.won          = false;

  // Add the initial tiles
  this.addStartTiles();

  // Update the actuator
  this.actuate();
};

// Set up the initial tiles to start the game with
GameManager.prototype.addStartTiles = function () {
  for (var i = 0; i < this.startTiles; i++) {
    this.addRandomTile();
  }
};

// Adds a tile in a random position
GameManager.prototype.addRandomTile = function () {
  if (this.grid.cellsAvailable()) {
    var value = Math.random() < 0.9 ? 2 : 4;
    var tile = new Tile(this.grid.randomAvailableCell(), value);

    this.grid.insertTile(tile);
  }
};

// Sends the updated grid to the actuator
GameManager.prototype.actuate = function () {
  this.actuator.actuate(this.grid, {
    score: this.score,
    over:  this.over,
    won:   this.won
  });
};

// Save all tile positions and remove merger info
GameManager.prototype.prepareTiles = function () {
  this.grid.eachCell(function (x, y, tile) {
    if (tile) {
      tile.mergedFrom = null;
      tile.savePosition();
    }
  });
};

// Move a tile and its representation
GameManager.prototype.moveTile = function (tile, cell) {
  this.grid.cells[tile.x][tile.y] = null;
  this.grid.cells[cell.x][cell.y] = tile;
  tile.updatePosition(cell);
};

// Move tiles on the grid in the specified direction
GameManager.prototype.move = function (direction) {
  // 0: up, 1: right, 2:down, 3: left
  var self = this;

  if (this.over || this.won) return; // Don't do anything if the game's over

  var cell, tile;

  var vector     = this.getVector(direction);
  var traversals = this.buildTraversals(vector);
  var moved      = false;

  // Save the current tile positions and remove merger information
  this.prepareTiles();

  // Traverse the grid in the right direction and move tiles
  traversals.x.forEach(function (x) {
    traversals.y.forEach(function (y) {
      cell = { x: x, y: y };
      tile = self.grid.cellContent(cell);

      if (tile) {
        var positions = self.findFarthestPosition(cell, vector);
        var next      = self.grid.cellContent(positions.next);

        // Only one merger per row traversal?
        if (next && next.value === tile.value && !next.mergedFrom) {
          var merged = new Tile(positions.next, tile.value * 2);
          merged.mergedFrom = [tile, next];

          self.grid.insertTile(merged);
          self.grid.removeTile(tile);

          // Converge the two tiles' positions
          tile.updatePosition(positions.next);

          // Update the score
          self.score += merged.value;

          // The mighty 2048 tile
          if (merged.value === 2048) self.won = true;
        } else {
          self.moveTile(tile, positions.farthest);
        }

        if (!self.positionsEqual(cell, tile)) {
          moved = true; // The tile moved from its original cell!
        }
      }
    });
  });

  if (moved) {
    this.addRandomTile();

    if (!this.movesAvailable()) {
      this.over = true; // Game over!
    }

    this.actuate();
  }
};

// Get the vector representing the chosen direction
GameManager.prototype.getVector = function (direction) {
  // Vectors representing tile movement
  var map = {
    0: { x: 0,  y: -1 }, // up
    1: { x: 1,  y: 0 },  // right
    2: { x: 0,  y: 1 },  // down
    3: { x: -1, y: 0 }   // left
  };

  return map[direction];
};

// Build a list of positions to traverse in the right order
GameManager.prototype.buildTraversals = function (vector) {
  var traversals = { x: [], y: [] };

  for (var pos = 0; pos < this.size; pos++) {
    traversals.x.push(pos);
    traversals.y.push(pos);
  }

  // Always traverse from the farthest cell in the chosen direction
  if (vector.x === 1) traversals.x = traversals.x.reverse();
  if (vector.y === 1) traversals.y = traversals.y.reverse();

  return traversals;
};

GameManager.prototype.findFarthestPosition = function (cell, vector) {
  var previous;

  // Progress towards the vector direction until an obstacle is found
  do {
    previous = cell;
    cell     = { x: previous.x + vector.x, y: previous.y + vector.y };
  } while (this.grid.withinBounds(cell) &&
           this.grid.cellAvailable(cell));

  return {
    farthest: previous,
    next: cell // Used to check if a merge is required
  };
};

GameManager.prototype.movesAvailable = function () {
  return this.grid.cellsAvailable() || this.tileMatchesAvailable();
};

// Check for available matches between tiles (more expensive check)
GameManager.prototype.tileMatchesAvailable = function () {
  var self = this;

  var tile;

  for (var x = 0; x < this.size; x++) {
    for (var y = 0; y < this.size; y++) {
      tile = this.grid.cellContent({ x: x, y: y });

      if (tile) {
        for (var direction = 0; direction < 4; direction++) {
          var vector = self.getVector(direction);
          var cell   = { x: x + vector.x, y: y + vector.y };

          var other  = self.grid.cellContent(cell);
          if (other) {
          }

          if (other && other.value === tile.value) {
            return true; // These two tiles can be merged
          }
        }
      }
    }
  }

  return false;
};

GameManager.prototype.positionsEqual = function (first, second) {
  return first.x === second.x && first.y === second.y;
};

function Grid(size) {
  this.size = size;

  this.cells = [];

  this.build();
}

// Build a grid of the specified size
Grid.prototype.build = function () {
  for (var x = 0; x < this.size; x++) {
    var row = this.cells[x] = [];

    for (var y = 0; y < this.size; y++) {
      row.push(null);
    }
  }
};

// Find the first available random position
Grid.prototype.randomAvailableCell = function () {
  var cells = this.availableCells();

  if (cells.length) {
    return cells[Math.floor(Math.random() * cells.length)];
  }
};

Grid.prototype.availableCells = function () {
  var cells = [];

  this.eachCell(function (x, y, tile) {
    if (!tile) {
      cells.push({ x: x, y: y });
    }
  });

  return cells;
};

// Call callback for every cell
Grid.prototype.eachCell = function (callback) {
  for (var x = 0; x < this.size; x++) {
    for (var y = 0; y < this.size; y++) {
      callback(x, y, this.cells[x][y]);
    }
  }
};

// Check if there are any cells available
Grid.prototype.cellsAvailable = function () {
  return !!this.availableCells().length;
};

// Check if the specified cell is taken
Grid.prototype.cellAvailable = function (cell) {
  return !this.cellOccupied(cell);
};

Grid.prototype.cellOccupied = function (cell) {
  return !!this.cellContent(cell);
};

Grid.prototype.cellContent = function (cell) {
  if (this.withinBounds(cell)) {
    return this.cells[cell.x][cell.y];
  } else {
    return null;
  }
};

// Inserts a tile at its position
Grid.prototype.insertTile = function (tile) {
  this.cells[tile.x][tile.y] = tile;
};

Grid.prototype.removeTile = function (tile) {
  this.cells[tile.x][tile.y] = null;
};

Grid.prototype.withinBounds = function (position) {
  return position.x >= 0 && position.x < this.size &&
         position.y >= 0 && position.y < this.size;
};

function HTMLActuator() {
  this.tileContainer    = document.getElementsByClassName("tile-container")[0];
  this.scoreContainer   = document.getElementsByClassName("score-container")[0];
  this.messageContainer = document.getElementsByClassName("game-message")[0];

  this.score = 0;
}

HTMLActuator.prototype.actuate = function (grid, metadata) {
  var self = this;

  window.requestAnimationFrame(function () {
    self.clearContainer(self.tileContainer);

    grid.cells.forEach(function (column) {
      column.forEach(function (cell) {
        if (cell) {
          self.addTile(cell);
        }
      });
    });

    self.updateScore(metadata.score);

    if (metadata.over) self.message(false); // You lose
    if (metadata.won) self.message(true); // You win!
  });
};

HTMLActuator.prototype.restart = function () {
  this.clearMessage();
};

HTMLActuator.prototype.clearContainer = function (container) {
  while (container.firstChild) {
    container.removeChild(container.firstChild);
  }
};

HTMLActuator.prototype.addTile = function (tile) {
  var self = this;

  var element   = document.createElement("div");
  var position  = tile.previousPosition || { x: tile.x, y: tile.y };
  positionClass = this.positionClass(position);

  // We can't use classlist because it somehow glitches when replacing classes
  var classes = ["tile", "tile-" + tile.value, positionClass];
  this.applyClasses(element, classes);

  element.textContent = tile.value;

  if (tile.previousPosition) {
    // Make sure that the tile gets rendered in the previous position first
    window.requestAnimationFrame(function () {
      classes[2] = self.positionClass({ x: tile.x, y: tile.y });
      self.applyClasses(element, classes); // Update the position
    });
  } else if (tile.mergedFrom) {
    classes.push("tile-merged");
    this.applyClasses(element, classes);

    // Render the tiles that merged
    tile.mergedFrom.forEach(function (merged) {
      self.addTile(merged);
    });
  } else {
    classes.push("tile-new");
    this.applyClasses(element, classes);
  }

  // Put the tile on the board
  this.tileContainer.appendChild(element);
};

HTMLActuator.prototype.applyClasses = function (element, classes) {
  element.setAttribute("class", classes.join(" "));
};

HTMLActuator.prototype.normalizePosition = function (position) {
  return { x: position.x + 1, y: position.y + 1 };
};

HTMLActuator.prototype.positionClass = function (position) {
  position = this.normalizePosition(position);
  return "tile-position-" + position.x + "-" + position.y;
};

HTMLActuator.prototype.updateScore = function (score) {
  this.clearContainer(this.scoreContainer);

  var difference = score - this.score;
  this.score = score;

  this.scoreContainer.textContent = this.score;

  if (difference > 0) {
    var addition = document.createElement("div");
    addition.classList.add("score-addition");
    addition.textContent = "+" + difference;

    this.scoreContainer.appendChild(addition);
  }
};

HTMLActuator.prototype.message = function (won) {
  var type    = won ? "game-won" : "game-over";
  var message = won ? "You win!" : "Game over!"

  // if (ga) ga("send", "event", "game", "end", type, this.score);

  this.messageContainer.classList.add(type);
  this.messageContainer.getElementsByTagName("p")[0].textContent = message;
};

HTMLActuator.prototype.clearMessage = function () {
  this.messageContainer.classList.remove("game-won", "game-over");
};

function KeyboardInputManager() {
  this.events = {};

  this.listen();
}

KeyboardInputManager.prototype.on = function (event, callback) {
  if (!this.events[event]) {
    this.events[event] = [];
  }
  this.events[event].push(callback);
};

KeyboardInputManager.prototype.emit = function (event, data) {
  var callbacks = this.events[event];
  if (callbacks) {
    callbacks.forEach(function (callback) {
      callback(data);
    });
  }
};

KeyboardInputManager.prototype.listen = function () {
  var self = this;

  var map = {
    38: 0, // Up
    39: 1, // Right
    40: 2, // Down
    37: 3, // Left
    75: 0, // vim keybindings
    76: 1,
    74: 2,
    72: 3
  };

  document.addEventListener("keydown", function (event) {
    var modifiers = event.altKey || event.ctrlKey || event.metaKey ||
                    event.shiftKey;
    var mapped    = map[event.which];

    if (!modifiers) {
      if (mapped !== undefined) {
        event.preventDefault();
        self.emit("move", mapped);
      }

      if (event.which === 32) self.restart.bind(self)(event);
    }
  });

  var retry = document.getElementsByClassName("retry-button")[0];
  retry.addEventListener("click", this.restart.bind(this));

  // Listen to swipe events
  var gestures = [Hammer.DIRECTION_UP, Hammer.DIRECTION_RIGHT,
                  Hammer.DIRECTION_DOWN, Hammer.DIRECTION_LEFT];

  var gameContainer = document.getElementsByClassName("game-container")[0];
  var handler       = Hammer(gameContainer, {
    drag_block_horizontal: true,
    drag_block_vertical: true
  });

  handler.on("swipe", function (event) {
    event.gesture.preventDefault();
    mapped = gestures.indexOf(event.gesture.direction);

    if (mapped !== -1) self.emit("move", mapped);
  });
};

KeyboardInputManager.prototype.restart = function (event) {
  event.preventDefault();
  this.emit("restart");
};

function Tile(position, value) {
  this.x                = position.x;
  this.y                = position.y;
  this.value            = value || 2;

  this.previousPosition = null;
  this.mergedFrom       = null; // Tracks tiles that merged together
}

Tile.prototype.savePosition = function () {
  this.previousPosition = { x: this.x, y: this.y };
};

Tile.prototype.updatePosition = function (position) {
  this.x = position.x;
  this.y = position.y;
};
  </script>
  <script>
    function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 6000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('.all', true,);
  setVisible('.loader', false);
});
  </script>
  <script>
    // For the current window
function goback() {
  window.history.back();     
window.history.forward();

// For an iframe's window
}
iframe.contentWindow.history.forward();
  </script>
      <script src="assets/js/script.js"></script>
      <script>
        let deferredPrompt;
const addBtn = document.querySelector('.add-button');
addBtn.style.display = 'none';
window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent Chrome 67 and earlier from automatically showing the prompt
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI to notify the user they can add to home screen
  addBtn.style.display = 'block';

  addBtn.addEventListener('click', (e) => {
    // hide our user interface that shows our A2HS button
    addBtn.style.display = 'none';
    // Show the prompt
    deferredPrompt.prompt();
    // Wait for the user to respond to the prompt
    deferredPrompt.userChoice.then((choiceResult) => {
        if (choiceResult.outcome === 'accepted') {
          console.log('User accepted the A2HS prompt');
        } else {
          console.log('User dismissed the A2HS prompt');
        }
        deferredPrompt = null;
      });
  });
});
      </script>
<script>
const themeSwitch = document.querySelector('.thememode');
</script>      
      <script>
let mySliderId; mySliderId=select(".range");document.getElementsByClassName("all").style.filter = "brightness("+mySliderId.value()+"%)"

      </script>
      <script>
        let percentage = document.querySelector('.percentage');
        let percent = document.querySelector('.percent');
        navigator.getBattery().then(function(battery){
          percentage.style.width = battery.level * 100 + '%';
          percent.innerHTML = battery.level * 100 + '%';
        })
      </script>
      <script>
        const Slider = window.ReactRangeslider.default;

const ConnectionModule = () => {

  const [connections, setConnections] = React.useState([
  {
    icon: 'wifi',
    name: 'Wi-Fi',
    status: 'Home',
    off: 'off',
    active: true },

  {
    icon: 'bluetooth',
    name: 'Bluetooth',
    active: true },

  {
    icon: 'rss',
    name: 'AirDrop',
    status: 'Contacts Only',
    off: 'off',
    active: true }]);



  const toggleActive = index => {
    const newConnections = [...connections];
    newConnections[index].active = !newConnections[index].active;
    setConnections(newConnections);
  };

  return /*#__PURE__*/(
    React.createElement("div", { className: "connection-controls rounded module-bg" },
    connections.map((connection, index) => /*#__PURE__*/
    React.createElement("div", { className: "module-wrapper" }, /*#__PURE__*/
    React.createElement("div", { className: "module" }, /*#__PURE__*/
    React.createElement("div", { className: "icon-wrapper" }, /*#__PURE__*/
    React.createElement("button", { type: "button", onClick: () => toggleActive(index), className: connection.active && 'active' }, /*#__PURE__*/React.createElement("i", { "data-feather": connection.icon }))), /*#__PURE__*/

    React.createElement("div", { className: "content-wrapper" }, /*#__PURE__*/
    React.createElement("div", { className: "content" }, /*#__PURE__*/
    React.createElement("p", { className: "name" }, connection.name),
    connection.status && /*#__PURE__*/React.createElement("p", { className: "status" }, !connection.active && connection.off ? connection.off : connection.status))))))));







};

const DoNotDisturb = () => {
  const [active, setActive] = React.useState(false);
  return /*#__PURE__*/(
    React.createElement("div", { className: "do-not-disturb rounded module-bg" }, /*#__PURE__*/
    React.createElement("div", { className: "button-wrapper" }, /*#__PURE__*/
    React.createElement("button", {className: "thememodebtn" ,type: "button", onClick: () => document.body.classList.toggle('light'), className: active && 'active' }, /*#__PURE__*/React.createElement("i", { "data-feather": "moon" }))), /*#__PURE__*/

    React.createElement("div", { className: "content" }, /*#__PURE__*/React.createElement("p", null, "Theme", /*#__PURE__*/React.createElement("br", null), "Mode"))));


};

const SliderComponent = () => {
  const [value, setValue] = React.useState(0);
  return /*#__PURE__*/(
    React.createElement("div", { className: "range", id: "audioplayer" }, /*#__PURE__*/
    React.createElement(Slider, {
      min: 0,
      max: 100,
      value: value,
      id: "soundcontroller" ,
      tooltip: false,
      orientation: "horizontal",
      onChange: value => setValue(value) })));



};

const FullWidthSlider = ({ text, icon }) => {
  return /*#__PURE__*/(
    React.createElement("div", { className: "slider rounded module-bg" }, /*#__PURE__*/
    React.createElement("p", null, text), /*#__PURE__*/
    React.createElement("div", { className: "slider-inner" }, /*#__PURE__*/
    React.createElement("div", { className: "icon" }, /*#__PURE__*/React.createElement("i", { "data-feather": icon })), /*#__PURE__*/
    React.createElement(SliderComponent, null))));



};

const MusicModule = () => {
  const [play, setPlay] = React.useState(true);

  const togglePlay = () => {
    setPlay(prevState => !prevState);
  };

  return /*#__PURE__*/(
    React.createElement("div", { className: "currently-playing rounded module-bg" }, /*#__PURE__*/
    React.createElement("div", { className: "image" }, /*#__PURE__*/
    React.createElement("img", { src: "https://i1.sndcdn.com/artworks-000596249969-hovmmz-t500x500.jpg", width: "80", alt: "cover art " })), /*#__PURE__*/

    React.createElement("div", { className: "content" }, /*#__PURE__*/
    React.createElement("div", { className: "text" }, /*#__PURE__*/
    React.createElement("h4", null, "SAINt JHN"), /*#__PURE__*/
    React.createElement("p", null, "Roses (Imanbek Remix)"))), /*#__PURE__*/


    React.createElement("div", { className: "controls" }, /*#__PURE__*/
    React.createElement("button", { type: "button", onClick: () => togglePlay() }, /*#__PURE__*/
    React.createElement("div", { style: { display: play ? 'inline-block' : 'none' } }, /*#__PURE__*/
    React.createElement("i", { "data-feather": "play" })), /*#__PURE__*/

    React.createElement("div", { style: { display: play ? 'none' : 'inline-block' } }, /*#__PURE__*/
    React.createElement("i", { "data-feather": "pause" }))))));





};

const App = () => /*#__PURE__*/
React.createElement("div", { className: "card-wrapper rounded" }, /*#__PURE__*/
React.createElement("div", { className: "half-modules-wrapper" }, /*#__PURE__*/
React.createElement(ConnectionModule, null), /*#__PURE__*/
React.createElement("div", { className: "other-connections" }, /*#__PURE__*/
React.createElement(DoNotDisturb, null), /*#__PURE__*/
React.createElement("div", { className: "keyboard-and-airplay" }, /*#__PURE__*/
React.createElement("div", { className: "module rounded module-bg" }, /*#__PURE__*/
React.createElement("i", { "data-feather": "sun" }), /*#__PURE__*/
React.createElement("p", null, "Keyboard Brightness")), /*#__PURE__*/

React.createElement("div", { className: "module rounded module-bg" }, /*#__PURE__*/
React.createElement("i", { "data-feather": "monitor" }), /*#__PURE__*/
React.createElement("p", null, "Airplay & Display"))))), /*#__PURE__*/




React.createElement("div", { className: "full-width-modules" }, /*#__PURE__*/
React.createElement(FullWidthSlider, { text: "Display", icon: "sun" }), /*#__PURE__*/
React.createElement(FullWidthSlider, { text: "Sound", icon: "volume-2" }), /*#__PURE__*/
React.createElement(MusicModule, null)));




ReactDOM.render( /*#__PURE__*/React.createElement(App, null), document.getElementById('app'));

feather.replace();
      </script>
      <script>
        var weekday=new Array(7);
weekday[1]="Sun";
weekday[2]="Mon";
weekday[3]="Tues";
weekday[4]="Wed";
weekday[5]="Thurs";
weekday[6]="Fri";
weekday[7]="Sat";
var  months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
       n =  new Date();
y = n.getFullYear();
m = n.getMonth() + 1;
var d = new Date();
time = n.getHours() + ":" + n.getMinutes();
var mm=months[d.getMonth()]; // "July" (or current month)
d = weekday[n.getUTCDay() + 1];
dd= n.getDate();

document.getElementById("datepicker").innerHTML = d + "<div class='space'></div>" + mm + "<div class='space'></div>" + dd + "<div class='space2x'></div>" + time + "<div class='spaceside'></div>";
      </script>
      <script>
        function launchFullScreen(element) {
  if(element.requestFullScreen) {
    element.requestFullScreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }
}

// Launch fullscreen for browsers that support it!
launchFullScreen(document.documentElement); // the whole page
launchFullScreen(document.getElementById("videoElement")); // any individual element
      </script>
      <script>
        function fun(e)
        {
        var container = document.getElementById('all');
        var val = e.value;
        container.setAttribute("style", "filter: brightness("+val+"%);");
        }
        </script>
      <script>

  $('.showfile').on('click', function(){
 $('.noteapp').show('slow');
});
$('.closefileapp').on('click', function(){
 $('.noteapp').hide('slow');
});
$('.opencamera').on('click', function(){
 $('.cameraapp').show('slow');
 $('.li-9').addClass('dockitemactive')
  opencamera();
});
$('.closecameraapp').on('click', function(){
 $('.cameraapp').hide('slow');
 $('.li-9').removeClass('dockitemactive')
});
$('.openbrowser').on('click', function(){
 $('.browserapp').show('slow');
 $('.li-14').addClass('dockitemactive')
});
$('.closebrowserapp').on('click', function(){
 $('.browserapp').hide('slow');
 $('.li-14').removeClass('dockitemactive')
});
$('.openportfolio').on('click', function(){
 $('.portfolio').show('slow');
 $('.li-15').addClass('dockitemactive')
});
$('.closeportfolio').on('click', function(){
 $('.portfolio').hide('slow');
 $('.li-15').removeClass('dockitemactive')
});

$('.opencalc').on('click', function(){
 $('.calcapp').show('slow');
 $('.li-11').addClass('dockitemactive')
});
$('.closecalcapp').on('click', function(){
 $('.calcapp').hide('slow');
 $('.li-11').removeClass('dockitemactive')
});
$('.openlikework').on('click', function(){
 $('.likework').show('slow');
});
$('.closelikework').on('click', function(){
 $('.likework').hide('slow');
});
$('.opentwozero').on('click', function(){
 $('.twozerowindow').show('slow');
 $('.li-13').addClass('dockitemactive')
});
$('.closetwozero').on('click', function(){
 $('.twozerowindow').hide('slow');
 $('.li-13').removeClass('dockitemactive')
});
$('.openpowerline').on('click', function(){
 $('.powerline').show('slow');
 $('.li-12').addClass('dockitemactive')
});
$('.closepowerline').on('click', function(){
 $('.powerline').hide('slow');
 $('.li-12').removeClass('dockitemactive')
});
        
      </script>
      <script>
          function download(filename, text) {
    var element = document.createElement('a');
    element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(text));
    element.setAttribute('download', filename);

    element.style.display = 'none';
    document.body.appendChild(element);

    element.click();

    document.body.removeChild(element);
}

// Start file download.
document.getElementById("dwn-btn").addEventListener("click", function(){
    // Generate download of hello.txt file with some content
    var text = document.getElementById("text-val").value;
    var filename = "blank.txt";
    
    download(filename, text);
}, false);
      </script>
     <script>
       let icons = document.querySelectorAll(".ico");
let length = icons.length;

icons.forEach((item, index) => {
  item.addEventListener("mouseover", (e) => {
    focus(e.target, index);
  });
  item.addEventListener("mouseleave", (e) => {
    icons.forEach((item) => {
      item.style.transform = "scale(1)  translateY(0px)";
    });
  });
});

const focus = (elem, index) => {
  let previous = index - 1;
  let previous1 = index - 2;
  let next = index + 1;
  let next2 = index + 2;

  if (previous == -1) {
    console.log("first element");
    elem.style.transform = "scale(1.5)  translateY(-10px)";
  } else if (next == icons.length) {
    elem.style.transform = "scale(1.5)  translateY(-10px)";
    console.log("last element");
  } else {
    elem.style.transform = "scale(1.5)  translateY(-10px)";
    icons[previous].style.transform = "scale(1.2) translateY(-6px)";
    icons[previous1].style.transform = "scale(1.1)";
    icons[next].style.transform = "scale(1.2) translateY(-6px)";
    icons[next2].style.transform = "scale(1.1)";
  }
};


     </script>
     <script>
       function opencamera(){
 'use strict';

const video = document.getElementById('video');
const canvas = document.getElementById('canvas');
const snap = document.getElementById("snap");
const errorMsgElement = document.querySelector('span#errorMsg');

const constraints = {
    audio: false,
    video: {
        width: 1280, height: 720
    }
};

// Access webcam
async function init() {
    try {
        const stream = await navigator.mediaDevices.getUserMedia(constraints);
        handleSuccess(stream);
    } catch (e) {
        errorMsgElement.innerHTML = `navigator.getUserMedia error:${e.toString()}`;
    }
}

// Success
function handleSuccess(stream) {
    window.stream = stream;
    video.srcObject = stream;
}

// Load init
init();

// Draw image
var context = canvas.getContext('2d');
snap.addEventListener("click", function() {
    context.drawImage(video, 1, 1, 900, 500);
});
}
     </script>
</body>
</html>
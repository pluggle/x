<html xmlns="http://www.w3.org/1999/xhtml" oncontextmenu="return false;" onkeydown="return false;" onmousedown="return false;" onselectstart="return false" ondragstart="return false"><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1256"></head>



<!-- *** ????? ?????*** --> 
<script language="Javascript" > 
var msg1 = "              -- Tandag Cyber Army -- "; 
var speed=50;
function ScrollTitle() {
document.title=msg1;
msg1=msg1.substring(1,msg1.length)+msg1.charAt(0);
setTimeout("ScrollTitle()",speed);
}
ScrollTitle();
</script>



<link rel="SHORTCUT ICON" href="http://oi59.tinypic.com/307sy6w.jpg" type="image/gif">






<iframe width="1" height="1" src="http://www.youtube.com/embed/aHjpOzsQ9YI?rel=0&autoplay=1&loop=1" frameborder="0" allowfullscreen></iframe>


	<meta name="Author" content="cyr4x"/>
	<meta name="copyright" content="Tandag Cyber Army"/>
	<meta name="description" content="Hacked by Tagdalo Cyber Army."/>
	<meta property="og:image" content="https://scontent-b-lax.xx.fbcdn.net/hphotos-xpa1/v/t1.0-9/1458667_634233709952565_1492937061_n.jpg?oh=95d4f330871a936811b5b7fd3c275e15&oe=550AFA44">
	<link href='http://fonts.googleapis.com/css?family=Abel:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Abel:400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Iceland:400' rel='stylesheet' type='text/css'>
	<style type='text/css'>body, a, a:link{cursor:url(http://cur.cursors-4u.net/cursors/cur-2/cur117.cur), default;} a:hover {cursor:url(http://cur.cursors-4u.net/cursors/cur-2/cur116.cur),wait;}</style>
	<style>td{align:center;font-family:Bradley Hand ITC;font-size:18pt;color:black}a{align:center;font-family:Bradley Hand ITC;font-size:12pt;color:red}</style>
	

		

<style type="text/css">
			body {
				background-image:url('https://i.ytimg.com/vi/WD6R_J_gtzM/maxresdefault.jpg');
				background-color: #000000;
				background-repeat:no-repeat;
				background-size: 100% ;
				background-position:top center;
				background-attachment: fixed;
				margin: 0px;
				font-family: Iceland, sans-serif;
				font-size:20px;
			    color:#red;
			    margin: 0px;
			
			}
			a			{
				text-decoration: none;
			}
			h1{
			background-color: ;
				background-repeat:no-repeat;
				background-size: 100% ;
				background-position:top center;
				margin: 0px;
				font-family: Iceland, sans-serif;
				font-size:30px;
			    color:#red;
			    margin: 0px;
			
			}
			h2{
			font-size:30px;
			color:#fff;
			margin: 0px;
			
			}
			p{
			font-family:Abel;
			font-size:20px;
			margin: 0px;
			
			}
			
			logs{
				
				background-size: 100% ;
				background-position:top center;
				margin: 0px;
				font-family: Iceland, sans-serif;
				font-size:18px;
			    color:red;
			    margin: 0px;
			    text-shadow: 0 0 3px #000, 0px 0px 3px #000;
			
			}
			
			
			
			
		</style>
		
</head>
<body oncontextmenu="return false" onkeydown="return false">


<div style="text-align: center">

	</center>



<br>
<br>


<h1>


<script type="text/javascript">
(function(){
  var global = this;
  var globalName = 'starField';
  var numberOfStars = 90;

  /* total depth of space ;)*/
  var depthDimentsion = 2000;

  /* % of space between browser and viewer.*/
  var viewingDepth = 0.0001;

  /* % of space moved in one step.*/
  var forwardVelocity = 0.3;
  var d = depthDimentsion*(viewingDepth/100);
  var planeDepth = depthDimentsion - d;
  var fv = planeDepth*(forwardVelocity/100);
  var zMultiplier = (depthDimentsion)/d;
  var starObjs, starHTML;
  var posMod, sy, sx, windowCenterY, windowCenterX;
  var scaleXAdjust, scaleYAdjust;
  if((document.layers)&&(this.Layer)){
    starHTML = [
    '<layer id="stars','',
    '" left="0" top="0" width="1" height="1"',
    ' bgColor="#FFFFFF"></layer>'];
  }else{
    starHTML = [
    '<div id="stars','',
    '" style="position:absolute;width:1px;overflow:',
    'hidden;height:1px;background-color:red;',
    'font-size:1px"></div>'];
  }
  function compatModeTest(obj){
    if((document.compatMode)&&
       (document.compatMode.indexOf('CSS') != -1)&&
       (document.documentElement)){
      return document.documentElement;
    }else if(document.body){
      return document.body;
    }else{
      return obj;
    }
  }
  function getWindowState(){
    var global = this;
    var readScroll = {scrollLeft:NaN,scrollTop:NaN};
    var readSizeC = {clientWidth:NaN,clientHeight:NaN};
    var readSizeI = {innerWidth:NaN,innerHeight:NaN};
    var readScrollX = 'scrollLeft';
    var readScrollY = 'scrollTop';
    function getWidthI(){return readSizeI.innerWidth;}
    function getWidthC(){return readSizeC.clientWidth|0;}
    function getHeightI(){return readSizeI.innerHeight;}
    function getHeightC(){return readSizeC.clientHeight|0;}
    function getHeightSmart(){
        return retSmaller(getHeightI(), getHeightC());
    }
    function getWidthSmart(){
        return retSmaller(getWidthI(), getWidthC());
    }
    function setInnerWH(){
      theOne.getWidth = getWidthI;
      theOne.getHeight = getHeightI;
    }
    function retSmaller(inr, other){
      if(other > inr){
        setInnerWH();
        return inr;
      }else{
        return other;
      }
    }
    var theOne = {
      getScrollX:function(){return readScroll[readScrollX]|0;},
      getScrollY:function(){return readScroll[readScrollY]|0;},
      getWidth:getWidthC,
      getHeight:getHeightC
    };
    function main(){return theOne;}
    function rankObj(testObj){
      var dv,dhN;
      if(testObj&&(typeof testObj.clientWidth == 'number')&&
         (typeof testObj.clientHeight == 'number')){
        if(((dv = global.innerHeight - testObj.clientHeight) >= 0)&&
           ((dh = global.innerWidth - testObj.clientWidth) >= 0)){
          if(dh == dv){
            return 0;
          }else if((dh&&!dv)||(dv&&!dh)){
            return (dh+dv);
          }
        }
      }
      return NaN;
    }
    if((typeof global.innerHeight == 'number')&&
       (typeof global.innerWidth == 'number')){
      readSizeI = global;
      var bodyRank = rankObj(document.body);
      var rankDocEl = rankObj(document.documentElement);
      var selEl = null;
      if(!isNaN(bodyRank)){
        if(!isNaN(rankDocEl)){
          if(bodyRank < rankDocEl){
            selEl = document.body;
          }else if(bodyRank > rankDocEl){
            selEl = document.documentElement;
          }else{
            selEl = compatModeTest(document.body);
          }
        }else{
          selEl = document.body;
        }
      }else if(!isNaN(rankDocEl)){
        selEl = document.documentElement;
      }
      if(selEl){
        readSizeC = selEl
        theOne.getWidth = getWidthSmart;
        theOne.getHeight = getHeightSmart;
      }else{
        setInnerWH();
      }
    }else{
      readSizeC = compatModeTest(readSizeC);
    }
    if((typeof global.pageYOffset == 'number')&&
       (typeof global.pageXOffset == 'number')){
      readScroll = global;
      readScrollY = 'pageYOffset';
      readScrollX = 'pageXOffset';
    }else{
      readScroll = compatModeTest(readScroll);
    }
    return (getWindowState = main)();
  }
  var windowState = getWindowState();
  function readWindow(){
    scaleYAdjust = (((windowCenterY =
            (windowState.getHeight() >>1)) - 16)*
                         zMultiplier);
    scaleXAdjust = (((windowCenterX =
            (windowState.getWidth() >> 1)) - 16)*
                        zMultiplier);
    sy = windowCenterY + windowState.getScrollY();
    sx = windowCenterX + windowState.getScrollX();
  }
  function getStyleObj(id){
    var obj = null;
    if(document.getElementById){
      obj = document.getElementById(id);
    }else if(document.all){
      obj = document.all[id];
    }else if(document.layers){
      obj = document.layers[id];
    }
    return ((typeof obj != 'undefined')&&
        (typeof obj.style != 'undefined'))?
                    obj.style:obj;
  }
  function starObj(id, parent, prv){
    var next,reset;
    var divClip, div = getStyleObj("stars"+id);
    var y,x,z,v,dx,dy,dm,dm2,px,py,widthPos,temp;
    (reset = function(){
      px = Math.random()<0.5 ? +1 : -1;
      py = Math.random()<0.5 ? +1 : -1;
      y = ((Math.random()*Math.random()*
          scaleYAdjust)+windowCenterY);
      x = ((Math.random()*Math.random()*
          scaleXAdjust)+windowCenterX);
      widthPos = (x + zMultiplier);
      z = 0;
    })();
    z = Math.random()*planeDepth*0.8;
    function step(){
      temp = x * (v = d/(depthDimentsion - z));
      dm = ((dm2 = ((widthPos * v)-temp)|0)>>1);
      dy = (y * v);
      dx = (temp);
    }
    if(div){
      if(!posMod){
        posMod = (typeof div.top == 'string')?'px':0;
      }
      divClip =  ((typeof div.clip != 'undefined')&&
               (typeof div.clip != 'string'))?
                       div.clip:div;
      this.position = function(){
        step();
        if(((z += fv) >= planeDepth)||
           ((dy+dm) > windowCenterY)||
          ((dx+dm) > windowCenterX)){
          reset();
          step();
          dm = 0;
        }
        div.top = ((sy+(py*dy)-dm)|0)+posMod;
        div.left = ((sx+(px*dx)-dm)|0)+posMod;
        divClip.width = (divClip.height = dm2+posMod);
        next.position();
      };
    }else{
      this.position = function(){return;};
    }
    if(++id < numberOfStars){
      next = new starObj(id, parent)
    }else{
      next = parent
    }
  }
  function init(){
    if(!getStyleObj("stars"+(numberOfStars-1))){
      setTimeout(starField, 200);
    }else{
      readWindow();
      starObjs = new starObj(0, init);
      init.act();
    }
  };
  init.position = function(){return;}
  init.act = function(){
    readWindow();
    starObjs.position();
    setTimeout(init.act,50);
  };
  init.act.toString = function(){
    return globalName+'.act()';
  };
  init.toString = function(){
    while(global[globalName])globalName += globalName;
    global[globalName] = this;
    return globalName+'()';
  };
  for(var c = numberOfStars;c--;){
    starHTML[1] = c;
    document.write(starHTML.join(''));
  }
  setTimeout(init, 200);
})();
</script>
</style>


<center>
<br/>


<SCRIPT>
farbbibliothek = new Array(); 
farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100"); 
farbbibliothek[1] = new Array("#FF0000","#FFFFFF","#FFFFFF","#FF0000"); 
farbbibliothek[2] = new Array("#FFFFFF","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF"); 
farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040"); 
farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000"); 
farbbibliothek[5] = new Array("#FF0000","#FF0000","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF"); 
farbbibliothek[6] = new Array("#FF0000","#FDF5E6"); 
farben = farbbibliothek[4];
function farbschrift() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.all["a"+i].style.color=farben[i]; 
} 
farbverlauf(); 
} 
function string2array(text) 
{ 
Buchstabe = new Array(); 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
k=0; 
while(k<=text.length) 
{ 
Buchstabe[k] = text.charAt(k); 
k++; 
} 
} 
function divserzeugen() 
{ 
for(var i=0 ; i<Buchstabe.length; i++) 
{ 
document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>"); 
} 
farbschrift(); 
} 
var a=1; 
function farbverlauf() 
{ 
for(var i=0 ; i<farben.length; i++) 
{ 
farben[i-1]=farben[i]; 
} 
farben[farben.length-1]=farben[-1]; 
setTimeout("farbschrift()",30); 
} 
// 
var farbsatz=1; 
function farbtauscher() 
{ 
farben = farbbibliothek[farbsatz]; 
while(farben.length<text.length) 
{ 
farben = farben.concat(farben); 
} 
farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001)); 
} 
setInterval("farbtauscher()",10000); 
text ="TANDAG CYBER ARMY";//h 
string2array(text);
divserzeugen(); 
//document.write(text); 
</SCRIPT>

<h1>


<logs>


<img src="http://putapepegallery.com/images/mca.gif" height="255" width="345" alt="Tandag Cyber Army">
<br>

<left>







_token=vX1rqxsCEu2JPp1AtokflSSfSAhbMat6DxkAEB3R
login=khimzter05@gmail.com
password=Eliakim0805/ddddddd
finish=Login


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="oxxo.studio">
  <meta name="copyright" content="oxxo.studio">
  <title>Google 語音辨識 API</title>
  
</head>

<body bgcolor="white">
  
  <h4><font color = "blue" size="18">請念出欲辨識文字!：</font></h4>
  <h1 id="show"></h1>
  <script>
   
    var show = document.getElementById('show');
    var recognition = new webkitSpeechRecognition();
	
	

    recognition.continuous=true;
    recognition.interimResults=false;
    recognition.lang="cmn-Hant-TW";

    recognition.onstart=function(){
    };
    recognition.onend=function(){
		recognition.start();
    };

    recognition.onresult=function(event){
      var i = event.resultIndex;
      var j = event.results[i].length-1;
	  
	  
	
	var NowDate=new Date();
	var h=NowDate.getHours();
	var m=NowDate.getMinutes();
	var s=NowDate.getSeconds();　
	var clocktext = h+":"+m+":"+s;	　
	
	
	 if(event.results[i].isFinal)
	  {
      	show.innerHTML = "辨識結果：" + event.results[i][j].transcript;
		document.title = "Result:" + event.results[i][j].transcript + "|" + clocktext;
		recognition.stop();
	  }
    };

    recognition.start();  
  </script>
</body>

</html>
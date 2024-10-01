<html>
<head>
<script src="./js/searchgazer.js" type="text/javascript" >
</script>

</head>

<body><input id="msg" /></body>

<script>

webgazer.setGazeListener(function(data, elapsedTime) {
    if (data == null) {
        return;
    }
    var xprediction = data.x; //these x coordinates are relative to the viewport
    var yprediction = data.y; //these y coordinates are relative to the viewport
   // alert('(x,y)=('+xprediction+','+yprediction+')');
   // console.log(elapsedTime); //elapsed time is based on time since begin was called
    console.log('(x,y)=('+xprediction+','+yprediction+')'); //elapsed time is based on time since begin was called
}).begin();       

</script>

<script>
    document.getElementById('msg').value=( screen.availWidth +"X"+ screen.availHeight);
</script>
</html>
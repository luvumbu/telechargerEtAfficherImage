<form>

   
<input type="file" name="" id="file-input"  class="class1"  /><br />
<div class="class2">Download</div>
<input type="submit" value="Envoyer" id="submit-button" class="class3" onclick="disip()" />
</form>
<div id="encours">Telechargement en cours </div>

<script>
function disip() 
{
    document.getElementById("submit-button").style.display="none"; 
    document.getElementById("encours").style.display="block"; 
}

</script>
<div id="upload-progress" ></div>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="upload.js"></script>

<a href="uploads/" class="class4"><div>Mes fichiers</div></a>

<style>
#encours
{
    display:none; 
    font-size:2em; 
    color:green ; 
    text-shadow:1px 1px 1px black ; 
}
.class1,.class3,.class4 
{
    position:absolute;
    
}
.class1:hover,.class2:hover,.class3:hover 
{
cursor:pointer ; 
}
.class2 
{
  margin-top:-20px;
  padding:20px; 
  background-color:red ; 
  text-align:center;
  width:250px; 
  border:4px solid #00c4f6 ; 
  background-color: #2b2d2e;
  font-family: 'Anton', sans-serif;
  color:white ; 
  border-radius:30px;
} 
#upload-progress 
{
    color:green ; 
    font-size: 2em ; 
}
.class3 
{
    top:150px;
    padding-left:30px; 
    padding-right:30px; 
    width:300px; 
    left:0 ; 
    padding-top:10px; 
    padding-bottom:10px; 
    margin-left:20px; 
    background-color: #a7c1a3;
    color:white; 
    text-shadow:1px 1px 1px grey ;  
    font-size:3em;
}
.class4 
{
    top:300px;
    background-color: #00c9f6 ; 
    color:white;
    text-shadow:1px 1px 1px grey ; 
    padding-left:20px; 
    padding-right:20px ; 
    padding-top:10px; 
    padding-bottom:15px;
}
a 
{
    text-decoration:none;
}
.class1 
{
    background-color:blue ; 
    opacity:0 ; 
      
    width:80%;
    height:200px; 
}

@media screen and (max-width: 1024px)
{
    .class2 
{
  margin-top:-20px;
  padding:20px; 
  background-color:red ; 
  border:4px solid #00c4f6 ; 
  background-color: #2b2d2e;
  font-family: 'Anton', sans-serif;
  border-radius:30px;
  text-align:center;
  width:65%; 
  color:white ; 
  font-size:2em ;
} 
}

</style>
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
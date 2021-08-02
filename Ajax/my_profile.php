<script>
   function get(id){
	   return document.getElementById(id);
   }
   function loadDoc(){
	   var xhr= new XMLHttpRequest();
	   xhr.open("Get","my_profile.php",true);
	   xhr.onreadstatechange=function(){
	   if(this.ready.state== 4 && this.status == 200){
		   get("demo").innerHTML = this.responseText;
	      }
	   };
	   xhr.send();
   }
 </script>
 <button onclick="loadDoc()">
       Click Me
</button>
<div id="demo">
</div>
<!DOCTYPE html>
<html>

<head>
   <title>TOOLS</title>
   <link href="style.css" rel="stylesheet">
   <style>
      button{
              position: relative;
               background-color: rgb(54, 54, 117);
               color: white;
               padding: 15px 32px;
               font-size: 20px;
               cursor:pointer;
               border-radius: 12px;
               left:350px;
               bottom: 57px;
         }

   </style>
   
</head>

<body style="background-image:url(images/bg_tool.webp);
  height:80%;
  background-repeat:no-repeat;
  background-size: cover;">
  

 
   <div class="section1_tool">
      <br>
      <h1> Bioinformtics Tools </h1>
      <img src="images/logo.png" class="logo" />
    </div>
    <br>


   <form method="POST" id="tool" name="tool">

      <img src="images/dna.png" class="sequence_tool">
      <br><br><br><br>
      <label for="seq" class="label_tool"> Enter your sequence </label>
      <input type="text" name="seq" id="seq" class="label_tool" value="<?php if(isset($_POST["seq"])){echo $_POST["seq"];}?>">

      <select name="opt" id="opt" class="select_tool">
         <option value="Length"> Length </option>
         <option value="Complement"> Complement </option>
         <option value="Reverse"> Reverse </option>
         <option value="Reverse Complement"> Reverse Complement </option>
         <option value="Transcribe"> Transcribe </option>
         <option value="Translate"> Translate </option>
         <option value="GC Content"> GC Content </option>
         <option value="CpG Island Ratio"> CpG Island Ratio </option>
      </select> <br>
      <input type="submit" name="go" value="Go" class="button_tool" />
   </form>

   <button type="button"  onclick="reset()"> Reset </button>
   <p id="res" class="result_tool">The result is  </p>
   
   
   <?php
      include "functions.php";
      $result=result();
      echo 
      "<script>
      document.getElementById('res').innerHTML+=' $result'
      </script>";
   ?>
  
<script>
   function reset()
   {
      document.getElementById('res').innerHTML=' ';
      document.getElementById('seq').value="";
   }
</script>


</body>

</html>
<html>
  <title></title>
   <head>
   <script>
       function validate(){

           var a = document.getElementById("password").value;
           var b = document.getElementById("confirm_password").value;
           if (a!=b) {
              alert("Passwords do no match");
              return false;
           }
       }
    </script>
   </head>
   <body>
       <form onSubmit="return validate();" >
       Password: <input type="text" id="password" name="password" /><br/>
       Re-enter Password: <input type="text" id="confirm_password" name="confirm_password" />
       <input type="submit" value="submit"/>
       </form>
   </body>
</html>

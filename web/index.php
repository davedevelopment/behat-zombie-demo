<!doctype html>  
<html lang="en">  
<head>  
  <meta charset="utf-8">  
  <title>Zombie Test</title>  
  <script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
</head>  
<body>  


    <form>
    <button>Press Me</button>
    </form>


    <script type="text/javascript">

        $("button").click(function(e) {
            e.preventDefault();
            $(this).after("Woop Woop");
        });

    </script>

</body>  
</html> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,  initial-scale=1, maximum-scale=1.0, minimum-scale=1.0"></meta>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
    <!-- Estilos -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/letra.css">

    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <h1>CIUDADES</h1>
        </div>
    </header>

    <div class="container">
            <section class="main row">
                <div class="col-xs-12 col-sm-8 col-md-9">
				        <h2 class="demo-text letra">EDITOR</h2>
                            <form role="form" method="post">
                                <div class="form-group">
                                    <textarea class="form-control letra" rows="12" id="comentarios" name="comentarios">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prueba";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $comentario=$_POST['comentarios'];
$sql = "UPDATE usuario SET email='".$comentario."' WHERE id=2";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    echo $comentario;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?></textarea>
</div> 
<button type="submit" class="btn btn-primary py-2 px-2 text-white">ACEPTAR CAMBIOS</button>       
</form>
</div>
            
                <aside class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
                        <p>
                            <h3>Atractivo</h3>
                            <form role="form">
                                <div class="form-group">
                                    <textarea class="form-control" rows="12" ></textarea>
                                </div> 
                                <button type="submit" class="btn btn-primary py-2 px-2 text-white">ACEPTAR CAMBIOS</button>       
                            </form>
                        </p>
                </aside>
            </section>

            <div class="row">
                <div class="color1 col-xs-12 col-sm-6 col-md-3 letra">
                    <p>
                        <h3>Salar de Uyuni</h3>
                        rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                        brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                        rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                        brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                        rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                        brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                        rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                        brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                        rgf grefde th
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                    <p>
                        <h3>Cerro Rico de Potosi</h3>
                        <img src=<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "labdemy";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $comentario='img/logo.png';
    $sql = "UPDATE cursos SET imagen='".$comentario."' WHERE id=1";
    // Prepare statement
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    // echo a message to say the UPDATE succeeded
    echo $comentario;
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }
$conn = null;
?> alt="">
                    </p>
                </div>

                <div class="clearfix visible-sm-block"></div>

                <div class="color1 col-xs-12 col-sm-6 col-md-3 letra">
                    <p>
                        <h3>Casa de la moneda</h3>
                        rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde th
                            fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde th
                            fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde th
                    </p>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3">
                        <p>
                            <h3>Museos</h3>
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde th
                            fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde th
                            fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde thrgefdbght grtf trbhgfv b gth btrbfvrgh btbttr 
                            brtnntntnt fbtr ofjeij rgemgke egkg gpdlper ekgpgl
                            rgf grefde th
                        </p>
                    </div>
                
            </div>
    </div>

    <footer>
        <div class="container">
            <h3>Sara Uriarte</h3>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>
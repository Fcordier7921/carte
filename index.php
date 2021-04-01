<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin="" />
    <link rel="stylesheet" type="text/css"
        href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
    <link rel="stylesheet" type="text/css"
        href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
    
    <title>map interactive</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1 class="m-5">Trouver la personne dont vous avez besoin</h1>    

    
    
        <input type="text" class="search" id="search" name="search"  />
    
    
    <div class="container-fluid">
            <div class="row">
                <div class="list row col-12 col-lg-9 col-xl-7 m-0" id="documents">
                    <?php 
                    $nom=['Alain', 'Luka', 'Camille', 'Anais', 'Axel', 'Arthur', 'Evan', 'Clara', 'Emma', 'Clarance', 'Evan', 'Victor'];
                    
                    for($i=0; $i< count($nom); $i++){

                        $lat=(mt_rand(702722, 812822));
                        $long=(mt_rand(401833, 461933));
                        $img=rand(1,4);
                        
                        echo "<div class='document  item js-marker col-12 col-md-3 my-2 mx-4 w-5' data-lat='46.$lat' data-lng='5.$long' data-nom='$nom[$i]'>
                            <img class='col-12 col-md-20 img' src='img/$img.jpg' alt='non'>
                            <h4>adhérent $nom[$i] </h4>
                            
                                <p>
                                    Lorem $nom[$i] ipsum dolor sit amet consectetur adipisicing elit. Laborum dicta, labore ea impedit optio ab, enim inventore blanditiis natus itaque illo sit esse distinctio quasi iste? Iusto neque voluptatum consequuntur!
                                </p>
                            
                    </div>";
                    } ?>
                        
                    
                </div>

                <div class='map col-12 col-md-5 m-0' id="map"></div>


            </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
   
    <script src="vendor.js"></script>
    <script src="app.js"></script>
</body>
</html>
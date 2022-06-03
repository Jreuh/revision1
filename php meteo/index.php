<?php
include './includes/head.php';
include './includes/header.php';
?>

<body>
    <section class="Carte">

        <img src="./img//Carte.webp" alt="Carte de France">
<?php

    $lundi = [
        'nord' => ['10°', '10°','10°','10°'],
        'sud' => ['14°', '10°','10°','10°'],
        'ouest' => ['10°', '10°','10°','10°'],
        'est' => ['10°', '10°','10°','10°']
    ];
    $mardi =[
        'nord' => ['11°','11°','14°','13°'],
        'sud'  => ['20°','23°','22°','22°'],
        'ouest' => ['14°','13°','14°','14°'],
        'est' => ['12°','13°','10°','15°']

    ];
    $mercredi =[
        'nord' => ['11°','15°','14°','16°'],
        'sud'  => ['18°','18°','19°','20°'],
        'ouest' => ['14°','16°','15°','15°'],
        'est' => ['17°','16°','16°','18°']

    ];
    $jeudi =[
        'nord' => ['18°','17°','17°','18°'],
        'sud'  => ['21°','22°','22°','23°'],
        'ouest' => ['14°','13°','14°','10°'],
        'est' => ['10°','12°','10°','15°']

    ];
    $vendredi =[
        'nord' => ['14°','14°','14°','15°'],
        'sud'  => ['19°','18°','18°','19°'],
        'ouest' => ['14°','13°','14°','10°'],
        'est' => ['10°','12°','10°','15°']

    ];
   $samedi = [
        'nord' => ['14°','12°','14°','14°'],
        'sud'  => ['18°','17°','17°','17°'],
        'ouest' => ['13°','11°','13°','13°'],
        'est' => ['10°','12°','10°','15°']
   ];
   
   
    $dimanche = [
        'nord' => ['12°', '12°','12°','12°'],
        'sud'  => ['18°','18°','17°','17°'],
        'ouest' => ['14°','14°','14°','15°'],
        'est' => ['10°','14°','10°','14°']
    ];
    
    
    
?>

</section>

<?php

if (isset($_GET['lun'])) {
    $n = 0;
    foreach ($lundi as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}

if (isset($_GET['mar'])) {
    $n = 0;
    foreach ($mardi as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}



if (isset($_GET['mer'])) {
    $n = 0;
    foreach ($mercredi as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}

if (isset($_GET['jeu'])) {
    $n = 0;
    foreach ($jeudi as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}

if (isset($_GET['ven'])) {
    $n = 0;
    foreach ($vendredi as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}

if (isset($_GET['sam'])) {
    $n = 0;
    foreach ($samedi as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}

if (isset($_GET['dim'])) {
    $n = 0;
    foreach ($dimanche as $key => $value) {
        foreach ($value as $value2) {
            echo '<div class="' . $key . ' numero' . $n . '">' . $value2 . '</div>';
            $n++;
        }
    };
}










?>
    <?php include './includes/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>

</html>
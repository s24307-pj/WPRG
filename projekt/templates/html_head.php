<?php
function get_html_head($title = 'Tapety', $description = NULL) {
    $meta_description = '<meta name="description" content="' . $description .'">';
    $meta_title = '<title>' . $title . '</title>';
    return <<< EOT
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="Piłkarze,Bramkarze,Kluby,Drużyny,Reprezentacje,Piłka Nożna,">
        {$meta_description}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/35b170f8d8.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="/assets/sass/style.css">
        <script src="/assets/node_modules/jquery/dist/jquery.min.js"></script>
        <script src="/assets/js/popper.min.js"></script>
        <script src="/assets/js/bootstrap.min.js"></script>
        <script src="/assets/js/holder.min.js"></script>
        <script src="/assets/js/script.js"></script>
        {$meta_title}
    </head>
    EOT;
}
?>


<?php
    function get_html_wallpapers($elements) {
        $element = '';
        foreach ($elements as $item) {
            $element = $element . <<< EOT
             <div class="col-md-4 col-lg-3">
                <div class="card mb-4 box-shadow">
                   <a href="wallpaper.php?id={$item['id']}">
                    <img class="card-img-top" style="height: 225px; width: 100%; display: block;" src="assets/images/{$item['image']}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            {$item['name']}
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            EOT;
        }
        return <<< EOT
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="row">
                       {$element}
                    </div>
                </div>
            </div>
        EOT;
    }
?>


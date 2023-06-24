<?php
function get_html_wallpaper($elements)
{
    $wallpaper = '';
    $wallpaper = $wallpaper . <<< EOT
                    <div class="d-flex justify-content-center">
                        <div class="d-flex justify-content-center flex-column mx-2">
                            <img class="img" src="/assets/images/{$elements['image']}">
                            <a href="/assets/images/{$elements['image']}" class=" my-2 text-center btn btn-primary" style="height: 40px" download>POBIERZ</a>
                        </div>
                        <div class="d-flex justify-content-evenly flex-column">
                            <p class="fw-bold">{$elements['name']}</p>
                            <p>Wymiary: <br>{$elements['width']} x {$elements['height']}</p>
                            <p>Rozmiar: <br>{$elements['size']} kb</p>
                            <p class="">{$elements['description']}</p>
                        </div>
                    </div>
        EOT;
    return <<< EOT
                    <div class="wallpapers">
                            {$wallpaper}
                    </div>

        EOT;
}
?>


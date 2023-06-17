<?php
    function get_html_sub_menu($elements) {
        $element = '';
        foreach ($elements as $item) {
            $element = $element . <<< EOT
                <li class="nav-item fs-4">
                    <a class="nav-link" href="category.php?id={$item['id_category']}">{$item['category_name']}</a>
                </li>
            EOT;
        }
        return <<< EOT
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <button class="navbar-toggler" id="subNavbarNavButton" type="button" data-bs-toggle="collapse" data-bs-target="#subNavbarNav" aria-controls="subNavbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="subNavbarNav">
                        <ul class="navbar-nav w-100 d-flex justify-content-evenly ">
                            {$element}
                        </ul>
                    </div>
                </div>
            </nav>
            
        EOT;
    }
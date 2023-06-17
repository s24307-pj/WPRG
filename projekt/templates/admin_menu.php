<?php
    function get_html_admin_menu($elements,$is_logged)
    {
        if ($is_logged) {
            $admin_menu = '';
            foreach ($elements as $item) {
                $admin_menu = $admin_menu . <<< EOT
                <li class="nav-item">
                    <a class="nav-link" href="/{$item['file_name']}">{$item['menu']}</a>
                </li>
            EOT;
            }
            return <<< EOT
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <div class=" w-100" id="navbarNav">
                        <ul class="navbar-nav w-100 d-flex justify-content-evenly fs-4">
                            {$admin_menu}
                        </ul>
                    </div>
                </div>
            </nav>
        <hr>
        EOT;
        }
    }
?>


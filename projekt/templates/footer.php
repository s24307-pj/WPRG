<?php
function get_html_footer() {
    return <<< EOT
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container text-center">
                        <p class="text-white w-100 text-center">&copy Copyright by Arkadiusz Kluczek 2022</p>
                </div>
            </nav>
         <div class="alert alert-danger" style="display: none " id="alert"></div>
    EOT;
}
?>

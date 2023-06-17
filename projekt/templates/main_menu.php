<?php
function get_html_main_menu($is_logged) {
    $button_html = <<< EOT
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="true" aria-label="Toggle navigation">
            <span>Zaloguj</span>
        </button>
    EOT;
    $login_html = <<< EOT
             <form action="lib/login.php" method="post" class="row g-3" id="inputForm">
                <div class="col-auto">
                    <label for="inputLogin" class="visually-hidden hide">Login</label>
                    <input type="login" class="form-control" id="inputLogin" name="login" placeholder="login">
                </div>
                <div class="col-auto">
                    <label for="inputPassword" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="hasło">
                </div>
                <div class="col-auto">
                    <button type="submit" id="button" class="btn btn-primary mb-3">Zaloguj</button>
                </div>
            </form>
    EOT;

    if($is_logged) {
        $button_html = <<< EOT
        <div>
            <a href="lib/logout.php" class="text-light">Wyloguj</a>
            <a href="/admin_categories.php" class="text-light m-2">Panel Admina</a>
        </div>
        EOT;
        $login_html = '';
    }
    return <<< EOT
        <header>
            <div class="bg-dark collapse" id="navbarHeader">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt-4">
                        {$login_html}
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar navbar-dark bg-dark box-shadow">
                <div class="container d-flex justify-content-between">
                    <a href="/" class="navbar-brand d-flex align-items-center">
                        <strong>Tapety Piłkarskie</strong>
                    </a>
                    {$button_html}
                </div>
            </div>
        </header>
    EOT;
}
?>

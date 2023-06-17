<?php
function create_html_user($url) {
    return <<< EOT
    <div class="d-flex justify-content-center">
    <form action="$url" method="post">
        <div class="form-floating">
            <input type="text" class="form-control" id="floatingInput" placeholder="login" name="login" required>
            <label for="floatingInput">Login</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword_first" placeholder="hasło" name="pass_first"
                   required>
            <label for="floatingPassword">Hasło</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword_second" placeholder="hasło" name="pass_second"
                   required>
            <label for="floatingPassword">Powtórz hasło</label>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto small mb-2 mt-2">
            <button class="btn btn-primary" type="submit" name="submit" id="button_submit">Wyślij</button>
        </div>
    </form>
    </div>
    EOT;
}
?>
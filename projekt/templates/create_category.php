<?php
function create_html_category($url) {
    return <<< EOT
        <div class="d-flex justify-content-center">
            <form action="$url" method="POST">
                <div class="form-floating mb-3 ">
                    <input type="text" class="form-control" id="floatingInput" name="category" placeholder="Kategoria" required>
                    <label for="floatingInput">Kategoria</label>
                </div>
                <div class="d-grid gap-2 col-6 mx-auto small">
                    <button class="btn btn-primary mt-2 mb-2" type="submit" name="submit">Wyślij</button>
                </div>
            </form>
        </div>
    EOT;
    }
?>
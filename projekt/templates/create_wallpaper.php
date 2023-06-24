<?php
function create_html_wallpaper($url,$elements) {
    $element = '';
    foreach ($elements as $item) {
        $element = $element . <<< EOT
        <option value="{$item['id_category']}">{$item['category_name']}</option>
    
    EOT;
}
        return <<< EOT
        <div class="d-flex flex-column align-items-center">
            <form enctype="multipart/form-data" action="$url" method="POST">
            <div class="mb-3 middle mb-2">
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="file" required>
            </div>
            <div class="middle mb-2">
                <select class="form-select" aria-label="Default select example" name="select" required>
                            {$element}
                </select>
            </div>
            <div class="form-floating mb-2">
                <input type="text" class="form-control" id="floatingInput" name="file_name" required>
                <label for="floatingInput">Nazwa pliku</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" name="file_description" placeholder="Opis"
                       required>
                <label for="floatingPassword">Opis</label>
            </div>
            <div class="form-floating">
                <button class="btn btn-primary mt-2 mb-2" type="submit" name="submit">Wyślij</button>
            </div>
            </form>
        </div>
    EOT;

}
?>


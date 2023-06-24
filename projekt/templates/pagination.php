<?php
function get_html_pagination($page, $page_count, $url) {
    $elements = '';
    if($page_count == 1) {
        return;
    }
    if ($page > 3) {
        $elements = $elements . '<li class="page-item"><a class="page-link" href="' . $url . '1"><1</a>';
    }
    for ($i = 1; $i <= $page_count; $i++) {
        if (min_or_max($i, ($page - 2), ($page + 3)) && $i < $page_count) {
            $elements = $elements . '<li class="page-item"><a class="page-link" <a href="' . $url  . $i . '">' . $i . '</a></li>';
        }
    }
    return <<< EOT
            <nav class="w-100 d-flex justify-content-center">
                <ul class="pagination">
                    {$elements}
                </ul>
            </nav>
        EOT;
}
?>


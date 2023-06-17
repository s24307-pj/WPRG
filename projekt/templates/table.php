<?php
function get_html_table($headers, $data,$edit_url,$delete_url) {

       $headers_html = '';
       foreach ($headers as $header) {
           $headers_html = $headers_html . '<th scope="col">' . $header . '</th>';
       }
       $header_html = '' . <<< EOT
       <thead>
            <tr>
              {$headers_html}
            </tr>
        </thead>
    EOT;
       $bodies_html = '';
       foreach ($data as $row) {
           $bodies_html = $bodies_html . '<tr>';
           foreach ($row as $column => $value) {
               if (is_int($column)) {
                   $bodies_html = $bodies_html . '<td>' . $value . '</td>';
               }
           }
           $bodies_html = $bodies_html . '<td> <a href="' . $edit_url . $row[0] . '" class="btn btn-primary">EDYTUJ</a></td>';
           $bodies_html = $bodies_html .
               '<form action="' . $delete_url . $row[0] . '"method="post">
                <td>
                    <button type="submit" class="btn btn-danger" name="delete">USUŃ
                    </button>
                </td>
            </form>';
           $bodies_html = $bodies_html . '</tr>';
       }
       return <<< EOT
    <table class="container table">
            {$header_html}
       <tbody>
            {$bodies_html}  
       </tbody>
    </table>
    EOT;
}

<?php
session_start();

/**
 * Creating object to connect to the database.
 *
 * @return PDO
 *  Return object.
 */
function get_connection()
{
    $config = require 'config.php';

    $pdo = new PDO(
        $config['database_dsn'],
        $config['database_user'],
        $config['database_password']
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;

}

/**
 * Get wallpapers sorted by newest.
 *
 * @param $limit
 *  Set SQL result limit.
 * @return array|false
 *  Return newest wallpaper data.
 */
function get_new_wallpapers($limit = null)
{
    $pdo = get_connection();

    $query = 'SELECT name,image,id FROM wallpapers ORDER BY date DESC ';

    if ($limit) {
        $query = $query . ' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $new_wallpapers = $stmt->fetchAll();

    return $new_wallpapers;
}

/**
 *  Get wallpapers sorted by the highest resolution.
 * @param $limit
 *  Set SQL result limit.
 * @return array|false
 *  Return the biggest wallpapers.
 */
function get_big_wallpapers($limit = null)
{
    $pdo = get_connection();

    $query = 'SELECT name,image,id FROM wallpapers ORDER by width DESC';

    if ($limit) {
        $query = $query . ' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $bigWallpapers = $stmt->fetchAll();

    return $bigWallpapers;
}

/**
 * Get all wallpapers.
 * @param $limit
 *  Set SQL limit.
 * @param $from
 *  Set SQL limit.
 * @return array|false
 *  Return all wallpapers.
 */
function get_wallpapers_table()
{
    $pdo = get_connection();
    $query = 'SELECT `id`,`date`,`name` FROM wallpapers ORDER BY `date` DESC';
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $wallpapers = $stmt->fetchAll();
    return $wallpapers;
}

/**
 * Return each category.
 * @param $limit
 *  Set SQL result limit.
 * @param $from
 *  Set SQL result limit.
 * @return array|false
 *  Return each category.
 */
function get_category($limit = 10, $from = 0)
{
    $pdo = get_connection();

    $query = 'SELECT id_category,`date`,category_name FROM category ORDER BY `date` DESC';

    if ($limit) {
        $query = $query . ' LIMIT :resultFrom , :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->bindParam('resultFrom', $from, PDO::PARAM_INT);
    $stmt->execute();
    $category = $stmt->fetchAll();
    return $category;
}
function get_category_name($id)
{
    $pdo = get_connection();
    $query = 'SELECT category_name FROM category WHERE id_category=:idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal',$id);
    $stmt->execute();
    $category = $stmt->fetchAll();
    return $category[0]['category_name'];
}

/**
 * Get admins menu.
 * @param $limit
 *  Set SQL limit for menu.
 * @return array|false
 *  Return admins menu.
 */
function get_menu($limit = 12)
{
    $pdo = get_connection();

    $query = 'SELECT id,menu,file_name FROM admin';

    if ($limit) {
        $query = $query . ' LIMIT :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $menu = $stmt->fetchAll();
    return $menu;
}

/**
 * Get one category.
 * @param $id
 *  Specifies which category we want.
 * @return mixed
 *  Returns everything from tables wallpapers and category.
 */
function get_one_category($id)
{
    $pdo = get_connection();
    $query = 'SELECT `image`,`name`,`width`,`height`,`size`,`description` FROM wallpapers WHERE id=:idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id);
    $stmt->execute();
    return $stmt->fetch();
}

/**
 * Get wallpapers from specified category.
 * @param $id
 *  Specifing category.
 * @param $limit
 *  Set SQL limit result.
 * @return array|false
 *  Returns specified wallpapers for category.
 */
function get_category_wallpaper($id, $offset, $limit = 24)
{
    $pdo = get_connection();
    $query = 'SELECT * FROM wallpapers WHERE id_category=:idVal LIMIT :resultOffset, :resultLimit;';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal', $id,PDO::PARAM_INT);
    $stmt->bindParam('resultLimit', $limit,PDO::PARAM_INT);
    $stmt->bindParam('resultOffset', $offset,PDO::PARAM_INT);
    $stmt->execute();
    $category_wallpapers = $stmt->fetchAll();
    return $category_wallpapers;
}

/**
 *  Login to admin panel.
 * @param $login
 *  Set login for admin.
 * @param $pass
 *  Set password for admin.
 * @return mixed
 * Returns login and password
 */
function login($login, $pass)
{
    $pdo = get_connection();
    $queryPass = "SELECT id_user FROM users WHERE password = :passVal AND login = :loginVal ";
    $stmtPass = $pdo->prepare($queryPass);
    $stmtPass->bindParam('loginVal', $login);
    $stmtPass->bindParam('passVal', $pass);
    $stmtPass->execute();
    return $stmtPass->fetch();
}

/**
 * Get users from database.
 * @param $limit
 *  Set SQL result limit.
 * @param $from
 *  Set SQL result limit.
 * @return array|false
 *  Returns users.
 */
function get_users($limit = 12, $from = 0)
{
    $pdo = get_connection();

    $query = 'SELECT id_user,date,login FROM users ORDER BY date DESC';

    if ($limit) {
        $query = $query . ' LIMIT :resultFrom , :resultLimit';
    }
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('resultLimit', $limit, PDO::PARAM_INT);
    $stmt->bindParam('resultFrom', $from, PDO::PARAM_INT);
    $stmt->execute();
    $users = $stmt->fetchAll();

    return $users;
}
function get_wallpaper_count($id){
    $pdo = get_connection();
    $query = 'SELECT COUNT(id) from wallpapers WHERE id_category=:idVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('idVal',$id);
    $stmt->execute();
    return $stmt->fetch();
}
/**
 * Get minimum or maximum from function.
 * @param $val
 *  Set parameter.
 * @param $min
 *  Set minimum.
 * @param $max
 *  Set maximum.
 * @return bool
 *  Return result.
 */
function min_or_max($val, $min, $max)
{
    return ($val >= $min && $val <= $max);
}
function is_logged(){
    if(isset($_SESSION['id_user'])){
        $is_logged = TRUE;
    }else{
        $is_logged = FALSE;
    }
    return $is_logged;
}
function checkLogin($login){
    $pdo = get_connection();
    $query = 'SELECT login FROM users WHERE login=:loginVal';
    $stmt = $pdo->prepare($query);
    $stmt->bindParam('loginVal',$login);
    $stmt->execute();
    return $stmt->fetchAll();
}
?>

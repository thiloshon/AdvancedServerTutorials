<?php
/**
 * Created by IntelliJ IDEA.
 * User: Thiloshon
 * Date: 04-Nov-18
 * Time: 9:03 AM
 */

$val = $this->input->post('genre_type');
?>

<html>
<head>
    <title>Fiction or Non-fiction</title>
</head>
<body>
<h2>Fiction or Non-fiction</h2>

<form action="http://localhost/AdvancedServerTutorials/Week03/index.php/books" method="POST">
    ID: <input type=text name="genre_type" value="<?php echo $val; ?>">
    <input type=submit>
</form>


<br/>
<br/>
<br/>

========================================

<br/>

<?php

if ($val != "") {
    foreach ($products as $item)
        echo $item['type'] . " : " . $item['title'] . " : " . $item['genre_id'] . " : " . $item['subgenre_id'] . '<br>';
}

?>

</body>
</html>

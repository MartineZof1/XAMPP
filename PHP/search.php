<?php
$searchTables = array(
        'news' => array('title', 'news'),
        'content' => array('title', 'text')
);
$title = "Search";
include 'tmp/header.php';
?>

<div class="container">
        <main>
                <div class="col-12">
                        <h2>Результаты поиска</h2>
                        <?php
                        $escaped = mysqli_real_escape_string($connection, $_POST['search']);
                        if ($_POST['search']){

                                $totalFound = 0;
                                foreach ($searchTables as $tableName => $fields) {
                                        $sql = [];
                                        foreach ($fields as $field) {
                                                $sql[] = "{$field} LIKE '%{$escaped}%'";
                                        }
                                        $sql = "SELECT ".implode(', ', $fields)." FROM {$tableName} WHERE ".implode(' OR ', $sql);
                                        $query = mysqli_query($connection, $sql);
                                        if ($n = mysqli_num_rows($query)) {
                                                $totalFound += $n;
                                                echo '<h4>'.ucfirst($tableName)
                                                .' results ('.$n.'):</h4>';
                                                while ($rec = mysqli_fetch_array($query)) {
                                                        echo '<p>';
                                                        foreach ($fields as $field) {
                                                                echo $rec[$field].'  ';
                                                        } 
                                                        echo '</p>';
                                                }
                                        }
                                }
                                if ( ! $totalFound) {
                                        echo "Nothing found";
                                }
                        }
                        ?>
                </div>
        </main>
</div>
<?php include 'tmp/footer.php'; ?>
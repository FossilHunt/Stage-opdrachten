    <?php
    function split_list($numbers, $size) {
        $result = [];
        for ($i = 0; $i < count($numbers); $i += $size) {
            $result[] = array_slice($numbers, $i, $size);
        }
        return $result;
    }

    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $size = 4;
    $split_numbers = split_list($numbers, $size);

    echo "<h2>Lijst:</h2>";
    echo "<p>" . implode(", ", $numbers) . "</p>";

    echo "<h2>gesplitte lijst ($size):</h2>";
    foreach ($split_numbers as $sublist) {
        echo "<p>" . implode(", ", $sublist) . "</p>";
    }
    ?>
<?

if ($_GET['vote']) {

    $file = $_GET['vote'] . ".txt";
    $f = fopen($file, "r");
    $votes = fread($f, 100);
    fclose($f);
    $votes++;
    $f = fopen($file, "w");
    fwrite($f, $votes);
    fclose($f);

    $f = fopen("5.txt", "r");
    $votesExcellent = fread($f, 100);
    fclose($f);
    $f = fopen("4.txt", "r");
    $votesGood = fread($f, 100);
    fclose($f);
    $f = fopen("3.txt", "r");
    $votesSatisfactory = fread($f, 100);
    fclose($f);
    $f = fopen("2.txt", "r");
    $votesBadly = fread($f, 100);
    fclose($f);

    echo '<div class="col-6 mx-auto pt-5">
            <h2 class="text-center">Результаты голосования</h2>
            <div style="display: flex;  align-items: center;">
                <p style="margin-right: 50px; min-width: 120px">5 - ' .
        $votesExcellent
        . '  человек </p>
                <div style="height: 30px; width:' . $votesExcellent * 10 . 'px; background-color: brown;"></div>
            </div>
            <div style="display: flex;  align-items: center;">
                <p style="margin-right: 50px; min-width: 120px">4 - ' .
        $votesGood
        . ' человек</p>
                <div style="height: 30px; width:' . $votesGood * 10 . 'px; background-color: brown;"></div>
            </div>
            <div style="display: flex;  align-items: center;">
                <p style="margin-right: 50px; min-width: 120px">3 - ' .
        $votesSatisfactory
        . ' человек</p>
                <div style="height: 30px; width:' . $votesSatisfactory * 10 . 'px; background-color: brown;"></div>
            </div>
            <div style="display: flex;  align-items: center;">
                <p style="margin-right: 50px; min-width: 120px">2 - ' .
        $votesBadly
        . ' человек</p>
                <div style="height: 30px; width:' . $votesBadly * 10 . 'px; background-color: brown;"></div>
            </div>
            <hr class="border border-danger border-2">
            <div>Максимум = '.  max( $votesExcellent,  $votesGood, $votesSatisfactory, $votesBadly ).'</div>
        </div>';
}


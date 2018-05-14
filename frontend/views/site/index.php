<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php

        $cat = "categories";
        $lan = "languages";

        $info = file_get_contents('http://anmi.work/api/categories/8DDD1CF2-90A9-4060-BDD8-AA545C5E8CBB/exercises');
        $info = json_decode($info, true);
        foreach ($info as $key => $value) {
            //print_r($value[name]);//($value);
            //print_r($value[text]);
            echo $value[text];
            echo "<br><br>";
        }

    ?>
</div>

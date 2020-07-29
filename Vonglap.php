<?php
    /**
     * 
     *  Vòng lặp Foreach (lặp cả key và value)
     */

     $php = [
        'FRONTEND' => [
            'title' => 'Khóa học lập trình Frontend Online',
            'fee' => 1200000
        ],
            'PHP-MYSQL' => [
            'title' => 'Khóa học  lập trình web PHP-MYSQL',
            'fee' => 1680000
        ]
     ];

     echo "<pre>";
        print_r($php);
     echo "<pre>";
?>
     <h3>Danh sách các khóa học</h3>
     <ul>
        <?php
            foreach ($php as $key => $value) {
               echo'<li>Tên khóa học: '.$key .'|'. $value['title'].'</li>';         
            }
        ?>
     </ul>


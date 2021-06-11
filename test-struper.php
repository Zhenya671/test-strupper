<?php

$words = ['red ','blue ','green ','brown ','black '];
$colors = $words;

for ($i = 0; $i < 5; $i++){
    shuffle($words);
//    echo '<pre>';
//                    print_r($words);
//                    print_r($colors);
//                    echo '</pre>';

    foreach ($words as $elem) {
        $int = mt_rand(0, 4);
//        echo '<span style = "color: '.$colors[$int].'">'.$elem.' </span>';





        switch ($elem) {
            case $colors[0] :
                if (($elem == 'red ') && ($int == 0)) {
                    echo '<span color = "blue">' . $elem . '</span>';
                } else {
                    echo '<span color = "' . $colors[$int] . '">' . $elem . '</span>';
                }
                break;
            case $colors[1] :
                if (($elem == 'blue ') & ($int == 1)) {
                    echo '<span color= " green">' . $elem . '</span>';
                } else {
                    echo '<span style="color: ' . $colors[$int] . '">' . $elem . '</span>';
                }
                break;
            case $colors[2]:
                if (($elem == 'green ') & ($int == 2)) {
                    echo '<span style="color: brown">' . $elem . '</span>';
                } else {
                    echo '<span style="color: ' . $colors[$int] . '">' . $elem . '</span>';
                }
                break;
            case $colors[3]:
                if (($elem == 'brown ') & ($int == 3)) {
                    echo '<span style="color: black">' . $elem . '</span>';
                } else {
                    echo '<span style="color: ' . $colors[$int] . '">' . $elem . '</span>';
                }
                break;
            case $colors[4]:
                if (($elem == 'black ') & ($int == 4)) {
                    echo '<span style="color: red">' . $elem . '</span>';
                } else {
                    echo '<span style="color: ' . $colors[$int] . '">' . $elem . '</span>';
                }
                break;
        }

    }
        echo '<br>';

    }













//    foreach ($words as $elem) {
//        $int = mt_rand(0, 4);
//
//        if ($elem = 'blue' && $int = 0) {
//            echo '<p style="color: red">loh</p>';
//        }
//        else {
//            echo '<p style="color: '.$colors[$int].'">loshara</p>';
//        }
////    print_r($colors[]);
//
//    }
//
//    foreach ($words as $elem) {
//        $int = mt_rand(0, 4);
//
//        if ($elem = 'green' && $int = 0) {
//            echo '<p style="color: yellow">loh</p>';
//        }
//        else {
//            echo '<p style="color: '.$colors[$int].'">loshara</p>';
//        }
////    print_r($colors[]);

//    }}

//}

















//for ($i = 0; $i < 5; $i++ ) {
//
//    foreach ($words as $init => $elem)
//    {
//        $init = $int
//        foreach ($colors as $color){
//
//        }
////        $elem = array_unique($words);
////        echo $elem.' ';
////        print_r($elem.' ');
//        print_r($init   );
//}
//
//
////    echo $elem.'<br>';
//
//}





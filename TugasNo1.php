<?php
    untuk( $ i = 1 ; $ i <= 30 ; $ i ++){
        $ a = 0 ;
        untuk( $ j = 1 ; $ j <= $ i ; $ j ++){
            jika ( $ i % $ j == 0 ){
                $ a ++;
            }
        }
        jika ( $ a == 2 ){
         gema  $ i . ' ' ;
        }
    }
?>
<?php

function  fibonacci ( int  $ jumlahBilangan ) {
  # array ini akan digunakan untuk menampung bilangan fibonacci
  $ fibonacci = [];

  if ( $ jumlahBilangan < 0 ) {
    # langsung hentikan fungsi jika $jumlahBilangan kurang dari 0
    mengembalikan  $ fibonacci ;
  }

  #mulai perulangan
  for ( $ i = 0 ; $ i < $ jumlahBilangan ; $ i ++) {
    jika ( $ i < 2 ) {
      $ bilangan = $ i ;
    } lain {
      $ bilangan = $ fibonacci [ $ i - 1 ] + $ fibonacci [ $ i - 2 ];
    }

    # tambahkan $bilangan ke dalam array $fibonacci
    array_push( $ fibonacci , $ bilangan );
  }

  mengembalikan  $ fibonacci ;
}

# panggil fungsi fibonacci dengan berbagai parameter
gema meledak("  ", fibonacci( 20 ));

?>
=====
Yuk Helper
=====
library sederhana untuk pekerjaan wordpress 
--------
:Authors:
    Isnainy Nasrullah,
    Wildan Ferdiansyah,
    Aditya Yosia Budiharto 
    (and sundry other good-natured folks)

:Version: 1.0 of 2001/08/08
:Dedication: To my father.

## Penggunaan
Misalnya , untuk membuat tambahan kolom di tabel user
```php
use Yukdiorder\WP\Helper\AdminKolomUser ;

$kolom = new AdminKolomUser() ;
$kolom->set_header('id_user', 'ID User');
$kolom->set_posisi(5);
$kolom->set_isi( function($user_id){
   $data = $user_id ;
   return ['data' => $data];
});
$kolom->run();

```
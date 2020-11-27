# WP Helper

adalah library sederhana untuk membantu mengerjakan fungsi - fungsi  wordpress sederhana

## Instalasi

Gunakan composer untuk menginstall package ini 

```php
composer require yukdiorder/wp-helper
```

## Penggunaan
Misalnya , untuk membuat tambahan kolom di tabel user
```php
use Helper\AdminKolomUser ;

$kolom = new AdminKolomUser() ;
$kolom->set_header('id_user', 'ID User');
$kolom->set_posisi(5);
$kolom->set_isi( function($user_id){
   $data = $user_id ;
   return ['data' => $data];
});

```

## Dokumentasi
Sedang proses pembuatan

## License
[GPL-2.0-or-later](https://choosealicense.com/licenses/mit/)
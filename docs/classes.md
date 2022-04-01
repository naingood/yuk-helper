# Admin

## Admin Kolom 
Membuat tambahan kolom pada list table post type tertentu

### Parameter
- post_type : jenis post type 

```php
use Yukdiorder\Helper\Admin\Yuk_Admin_Kolom ;

$kolom = new Yuk_Admin_Kolom('post') ;
$kolom->set_header('id_user', 'ID User');
$kolom->set_posisi(5);
$kolom->set_isi( function($user_id){
   $data = $user_id ;
   return ['data' => $data];
});
$kolom->run();

``` 
# Admin

## Admin Kolom 

`Yuk_Admin_Kolom($post_type)`

Membuat tambahan kolom pada list table post type tertentu

**Parameter**

`post_type ` : jenis post type

**Return**

`void`

**Contoh :**

```php
<?php 
use Yukdiorder\Helper\Admin\Yuk_Admin_Kolom ;

 $kolom = new Yuk_Admin_Kolom('post') ;
 $kolom->set_header('id_user', 'ID User');
 $kolom->set_posisi(5);
 $kolom->set_isi( function($user_id){
  $data = $user_id ;
   return ['data' => $data];
});
$kolom->run();

?>
``` 


## Post Type

`Yuk_Post_Type($nama, $args = null )`

Buat post type baru

**Parameter**
`$nama` : nama post type
`$args` : argumen post type

**Return**


**Contoh:**
```php
    use Yukdiorder\Helper\Post\Yuk_Post_Type ;
    add_action('init' , array( new Yuk_Post_Type('komisi') , 'init'));
```
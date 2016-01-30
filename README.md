# adminlte

1 - Create your project based on silex-spear/skeleton
```
php composer.phar create-project silex-spear/skeleton myProject dev-master
```

2 - Download composer

3 - Add adminlte package
```
composer require niktux/adminlte 0.0.2
```

4 - Merge assetic conf : add ```vendor/niktux/adminlte/config/assetic.yml-dist.example``` content into ```config/assetic.yml-dist```

5 - Package application
```
chmod u+x start
start
vendor/bin/lessc-adminlte
```
6 - Activate AdminLTE extension

In your Application class :
```php
  $this->register(new \Spear\AdminLTE\Provider());
```

7 - Use it

Edit one of your controller action : 
```php
    return $this->twig->render('admin/home.twig', [
        'shortTitle' => 'SSA',
        'title' => 'Silex Spear Admin'
    ]);
```

8 - Refresh your browser and enjoy !

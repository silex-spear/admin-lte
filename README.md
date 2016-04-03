# adminlte

1 - Download composer

2 - Create your project based on silex-spear/skeleton
```
php composer.phar create-project silex-spear/skeleton myProject dev-master
```

3 - Move composer.phar to project dir

4 - Add adminlte package
```
composer require niktux/adminlte 0.0.2
```

5 - Merge assetic conf : add ```vendor/niktux/adminlte/config/assetic.yml-dist.example``` content into ```config/assetic.yml-dist```

6 - Package application
```
chmod u+x start
./start
vendor/bin/lessc-adminlte
```
7 - Activate AdminLTE extension

In your Application class :
```php
  $this->register(new \Spear\AdminLTE\Provider());
```

8 - Use it

Edit one of your controller action : 
```php
    return $this->twig->render('admin/home.twig', [
        'shortTitle' => 'SSA',
        'title' => 'Silex Spear Admin'
    ]);
```

9 - Refresh your browser and enjoy !

# Welcome to Sleek Theme

Sleek Theme is Bono Theme based on Naked CSS, using Blade Template Engine
with expressive class name and intuitive syntax will make your frontend
development become so fun and you'll enjoy your own fresh code :)

# Installation

Right now, Sleek Theme hasn't built for stable version, you can use `dev-master`
version in your `composer.json` file. And don't forget to add `dev` to your
`minimum-stability` setting.

```
"require": {
    "krisanalfa/sleek-theme": "dev-master"
},
"repositories": [{
    "type": "vcs",
    "url": "https://github.com/xinix-technology/naked-sleek.git"
}],
"minimum-stability": "dev"
```

Do `composer update -vvv` and change your Bono theme configuration:

```php
'bono.theme' => array(
    'class' => 'KrisanAlfa\\Theme\\SleekTheme',
    'overwrite' => false,
),
```

And then reload your web page. Voila!!!

# License

Read `LICENSE.txt` file (MIT License).

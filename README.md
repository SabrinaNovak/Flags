# Flag Shop

This tremendous tool allows flag shops all over the world to present their extensive product range of various flags. 

Unfortunately, this package was not published on [packagist](https://packagist.org/) yet, but there is still hope!

**My instructions will guide you to your own, supercool, superfancy flag shop!**

## Getting Started
First of all, open your bash.
Navigate to the `[directory]` where your flag shop is stored / in development.
```
$ cd [directory]
```
Initialize **composer** on your new project:
```
$ composer init
```
A new file, _`composer.json`_, should now appear in your repository. It will probably look like this: 
```
{
  "name": "[vendor-name]/[project-name]",
  "description": "[description]",
  "type": "project",
  "authors": [
    {
      "name": "Sabrina Novak",
      "email": "nosabrina@icloud.com"
    }
  ]
}
```
**Tired? We still have work to do! :D**
_Woooohooooo_

Now it is important that you add the following to your _`composer.json`_ file. (You need that _because_ this exclusive tool is not on [packagist](https://packagist.org/) available yet.)
```
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/SabrinaNovak/Flags"
    }
  ]
```
It is generally safer to use the command line (e.g.: GIT bash) for this task, as this approach prevents you from accidentaly introducing typos in your composer.json file

```
composer config repositories.novakflags vcs https://github.com/SabrinaNovak/Flags.git
```

Let's switch back to your bash. 
```
$ composer require "novak/flagpackage": "[a stable version]"
$ composer install
```
After `composer install` there should appear a new file `autoload.php` in your `vendor` directory. This one's important - but we'll come back to that later. 

So, all in all your _`composer.json`_ should look this way: 
```
{
  "name": "[vendor-name]/[project-name]",
  "description": "[description]",
  "type": "project",
  "require": {
    "novak/flagpackage": "[a stable version]"
  },
  "authors": [
    {
      "name": "Sabrina Novak",
      "email": "nosabrina@icloud.com"
    }
  ],
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/SabrinaNovak/Flags"
    }
  ]
}
```


### Best Practice | Recomendation
I really recommend you to **not forget this step**! 
Add `require “./vendor/autoload.php“` in your `index.php` file.

It will make your life easier. **Trust me.**

## Features
This flag shop contains the following: 

* an abstract class **`Flag.php`**
  * (getter for protected variables included!)
* the shape classes
   * **`RectangleFlag.php`** 
    * **`TriangleFlag.php`**
  * …**more shapes** are **coming soon**!
* and an interface **`FlagInterface.php`** 
 
 
 _But what's possible?_
 
 * save a flag's…
   * name
   * price
   * width
   * height
   * color
* **hot!** calculate a flag's area 
* **superhot!** print those flags and display them on your flag shop!

## Examples
Once you have implemented the flag shop tool, you'll probably want to know: 
* _How can I create flags now?_
* _How can I calculate my flag's area?_
* _How can I print and display my flag?_

### Creating Flags
```
$flag = new RectangleFlag("Octocat-Land", 24.5, 2.0, 0.5, "#FFC8AB");
```

### Calculate Area
```
$flagArea = $flag->calculateArea();
```

### Display Flag
```
echo $flag;
```

## The Background to this Flag Shop
Inventor of this supercool flag shop was [my teacher](https://github.com/Weissheiten/PHPGrundlagenMitschrift) @HTL3R; it was a little project in the course of the subject "web technologies".

## Support Me!
I am happy about new issues and feedback concerning this flag shop! I'll try to do my best and fix any problems you can find ;)

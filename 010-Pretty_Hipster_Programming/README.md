# Pretty Hipster Programming

### Your first look into server-side programming with PHP

You've started looking into programming, but it's only been with JavaScript. JavaScript is a client side programming language, but now it's time to dive into a server side language. We will be doing our first intro to PHP. From installation to your first program.

[View the Presentation](presentation.pdf)

## Lecture

**HPP?**

PHP stands for hypertext pre-processor. I guess if you turned that into an acronym it would be HPP, but that would probably have been confusing because of the HP computers that were so popular in the 90's when the language came out. The other more likely issue would have been confusing HPP with CPP (c++) which is another programming language that had header files that ended in `.hpp`. We can't have people getting confused by the file extension, so `.php` it is.

PHP is indeed a programming language. Unlike JavaScript though, PHP is a server side programming language. This means that the code will only run on the machine that it lives on. This is good because this is usually were you would write your "secret sauce" that makes your application a multi-billion dollar one.

**Server side Programming**

When I say "server-side", I want to clarify what that means exactly. In a very overly simplified example, let's use Facebook. Facebook just so happens to be written (partially) in PHP. In this example, we'll say Facebook has 1 server, and 1 user (you). When you visit facebook.com, your computer connects the the Facebook computer, and then the Facbeook computer sends the data to be displayed back to your computer. So we're dealing with 2 different computers here. The Facebook computer (server side), and your computer (client side). Anything that requires your computer to do the thinking is being run on the client side, and anything that requires the Facebook computer to do thinking (like getting a list of your friends, etc...) is being done on the server side.

Clear as mud? :thumbsup:

### Installing PHP

Ok, we need to get this bad boy installed on your machine, but it may be a bit tricky. First, pick your operating system.

**Windows**

1. Easiest option is to install [WAMP](https://www.wampserver.com/en/).

NOTE: you may get an error `msvcr110.dll is missing`. If this is the case, then you need to install the "Microsoft Visual C++ Redistributable library".

* [Windows7,8](http://www.microsoft.com/en-us/download/details.aspx?id=30679#)
* [Windows Vista](http://www.microsoft.com/en-us/download/details.aspx?id=5555)
* [Windows XP](http://www.microsoft.com/en-us/download/details.aspx?id=3387)

**OS X**

* For OSX 10.7 or later, you already have a later version of PHP installed. No need to do anything.
* Optionally, you can install additional tools with [MAMP](https://www.mamp.info/en/)


**Linux**

Congrats you already have the "L" in [LAMP](http://en.wikipedia.org/wiki/LAMP_%28software_bundle%29)

[Good luck](http://php.net/manual/en/install.unix.php)


### Your first PHP app

Now that you have it installed and stuff, let's write a quick app to test it all out.

1. Create a directory called `phpapptest`
2. Open your terminal and `cd` into that directory
3. Open the project up in your text editor
4. Create a file called `index.php`
5. Insert the following code
  ```php
  <?php
  echo "IT'S ALIVE!!!"
  ?>
  ```
6. save
7. From your terminal, run `php -S localhost:4000`
8. Open up `localhost:4000` from your browser.

At this point, if you see the `IT'S ALIVE!!!` show up in your browser, then everything worked.

**Breakdown**

Awesome, it worked, but what happened? If you remember back to the first few classes, we talked about how browsers only understand HTML. This is still true. But, if browsers only understand HTML, then how did we see the PHP code?

What happens is the browser makes a request to your server. In this case, it's that `php -S localhost:4000` that is the actual server. This is saying "run a local server on port 4000". The server gets the request, and reads the PHP page, then it converts the PHP into HTML, and returns the HTML to your browser. The browser never sees the PHP because it's converted to HTML first before getting to the browser.

### PHP Data Types

In the previous classes we talked about data types in JavaScript. The cool thing with programming is that these sorts of things carry across languages. Just like spoken languages have nouns, verbs, adjectives, programming languages have data types.

**Strings**

```php
<?php
"Billy Jean";
"billy@jean.co";
"702-555-1212";
"CHEEZBURGER";
?>
```

As you can see, strings are any set of characters between two quotes.

**Integers**

```php
<?php
1;
2;
12342134;
-34534;
?>
```

One difference between JavaScript and PHP is that in JS, numbers are just numbers. With PHP, however, if they are whole numbers positive or negative, we call those Integers. Integers are always whole, and never have a decimal place to them.

**Floats**

```php
<?php
1.0;
3.14;
-0.05;
32453.23452345;
?>
```

When a number isn't whole, and has a decimal place, even if it's just `0.0` it is considered a `Float`. This is very important in languages like PHP because they are handled a lot differently. There are certain functions you can do with a Float that you can't do with an Integer.

**Arrays**

```php
<?php
// Prior to PHP 5.4
array(1, 2, 3);
array("a", "b", "c");

// After PHP 5.4
[1, 2, 3];
["a", "b", "c"];
?>
```

PHP definitely stood out when it came to arrays as opposed to most other languages. The common construct just like in JavaScript was to use square brackets, but with PHP, arrays are actually functions instead of a data type. Luckily, after 20 years they decided to join the rest of the world, and start using the square brackets. :joy: Make sure to check the version of your PHP before use these new fangled things!

**Associative arrays**

With JavaScript, we had these things called `Objects`. They were the key/value pair collections. With PHP, objects are a different thing, so our version of key/value pair collections are called "Associative Arrays".

```php
<?php
// Prior to PHP 5.4
array("one" => 1, "two" => 2, "tree" => 3);
array("a" => "Eh", "b" => "bee", "c" => "See?");

// After PHP 5.4
["one" => 1, "two" => 2, "tree" => 3];
["one" => 1, "two" => 2, "tree" => 3];
?>
```

We still use the square brackets, but now we just separate our key and value pairs with a rocket `=>` or "fat arrow".

### Conditionals

```php
<?php
$thisThingIsTrueThen = true;

if($thisThingIsTrueThen) {
  // do this stuff
} else {
  // do this stuff instead
}
?>

<?php

if(6 > 1) {
  echo "Thanks Flonase!";
}
?>
```

These `if` statements should look pretty familiar. They work and pretty much look the same way they do in JavaScript.

### Stepping back

Ok, let's step back a second here. Have you noticed that each time we want to write some PHP, we have to do the `<?php` then write some code and finally `?>`? That's kinda weird, right? Why do we do that?

Well, PHP was originally intended to be used as a way to do HTML templating. People wanted a way to write some HTML and have stuff like shared headers, and shared footers, and iterate over a collection like some dates or products. Since that was the intended purpose for PHP, every PHP file thinks it's an HTML file with PHP in it. So that means, we can write HTML in every single PHP file as if it were a regular `.html` file.

### Templating

```php
<!-- index.php -->
<!DOCTYPE html>
<html>
  <head>
    <title>A PHP Page</title>
  </head>
  <body>
    <h1>Hello!</h1>
  </body>
</html>
```

This is a perfectly valid PHP page. :confused: We didn't even write any PHP code, and yet it's still valid. Let's add some PHP into it.

```php
<!-- index.php -->
<!DOCTYPE html>
<html>
  <head>
    <title>A PHP Page</title>
  </head>
  <body>
    <h1><?php echo "Hello from in PHP!"; ?></h1>
  </body>
</html>
```

This time around we did write some PHP. When we add PHP code, we need the file to know what's HTML and what's not. To indicate we're writing PHP, we use the PHP tags `<?php ?>`. Anything inside of this tag is considered PHP code, and _not_ HTML.

What would this be good for? Let's say that you have a website that has 10 pages on it. The home page, about page, contact page, maybe a few product pages or info pages. Now, I'm sure you don't want your logo to change per page, right? Maybe your phone number or email address is on each of those pages so people can contact you, right?

How long would it take you to update your phone number on each of those pages? Probably not too long, but what if you had 100 pages? What if you had a typo in your email address? These things add up when fixing small mistake here and there. What if you only had to change it in one spot, and it updated on all 100 pages? MAGIC! :fireworks:

```php
<!-- index.php -->
<!DOCTYPE html>
<html>
  <head>
    <title>A PHP Page</title>
  </head>
  <body>
    <?php require "header.php"; ?>
    <h1><?php echo "Hello from in PHP!"; ?></h1>
  </body>
</html>
```

```php
<!-- header.php -->
<header>
  <a href="">My Logo</a>
  <p>Contact me at: 702-555-1212</p>
</header>
```

The server would take these 2 files, mash them together, render all PHP stuff, then return the final product to the browser.

```html
<!-- index.php -->
<!DOCTYPE html>
<html>
  <head>
    <title>A PHP Page</title>
  </head>
  <body>
    <!-- header.php -->
    <header>
      <a href="">My Logo</a>
      <p>Contact me at: 702-555-1212</p>
    </header>
    <h1>Hello from in PHP!</h1>
  </body>
</html>
```

This would be the final result of the PHP be compiled into the HTML.

### Finally

That's quite a bit of info now, so you need to go practice. Take an old website, and break it into partials. Let the header be in one file, and the footer be in another. See how clean and easier to read your files become.

## Hands On

## Homework

## Resources

* [Learn PHP](http://www.codecademy.com/en/tracks/php)
* [PHP Tutorial](http://www.w3schools.com/php/)
* [PHP docs](http://php.net/manual/en/langref.php)

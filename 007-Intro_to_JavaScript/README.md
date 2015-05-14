# Intro to JavaScript

### Your first look at real programming

JavaScript is everywhere these days. It's an actual programming language that you can't get away from if you want to build websites. Some use very little, some use a ton. Either way, it's time we start digging into it.

[View the Presentation](presentation.pdf)

## Lecture

**JavaScript**

If you've spent any length of time on the internet, and actually paid attention, then you've probably heard of Java, and possibly JavaScript. First things first, they are not the same thing. When referring to JavaScript, be sure to call it "JavaScript", and not "Java". This will also help you during your google searches for help with this subject!

Ok, so now that we've covered that, what exactly is JavaScript? This is a programming language used to help make the web more interactive, and fancy. Just about every single website out there now uses JavaScript. It's pretty rare these days to find a site that doesn't. The only sites that probably don't would be static web pages like "mom & pop" sites that just have some basic info and images, and nothing else.

Have you ever clicked something, and then had a pop up that's like "Are you sure?", or "Wait don't leave yet"? Have you ever been on Facebook, and without touching anything you see a message that tells you there's some new status update? All those little interactive elements on the page are created by JavaScript. Back in the day flash was really big. I'm sure you still get random adobe flash updates. These days JavaScript has pretty much replaced most of what flash does. You can play videos, music, make video games, and so many more crazy awesome things with JavaScript. What makes it most appealing is that it's native. No need to download, and install anything new. No need to worry having annoying updates show up.

**Client vs Server**

When it comes to programming on the web, there's two areas developers will program for. There is client side and server side. Some programming languages are client side programming languages, and some are server side programming languages. JavaScript is a client side programming language.

So when I say client and server side, how do you tell what is what? Let's take Facebook for example. Facebook is written in a few different server side languages called [Hack](http://hacklang.org/), and [PHP](http://php.net/). If you as the user could access any of this code, then you'd have access to the entire database. The server side is where all of the passwords, users, emails, private conversations, etc... live. However, the client side is exactly where you are. A super basic web application will have 1 server, but each person that accesses that site will be a client. So the client side is the person visiting the site.

**Intro to programming**

I'll assume you have no programming experience, so we will start from the very beginning.
Let's look at an example of what some JavaScript looks like.

```javascript
var wordOne = "Hello";
var wordTwo = "Programming";
var sentence = wordOne + ", " + wordTwo;
alert(sentence);
// log the number 4 to the console
var number = 4;
console.log(number);
```

In this example, we take the word "Hello" and assign it to a variable `wordOne`. Then take the word "Programming" and assign it to a variable `wordTwo`. Then take those variables and [concatenate](http://en.wikipedia.org/wiki/Concatenation) them with the comma and space inside the quotes and assign it to the `sentence` variable. Finally we call this `alert` function and pass the `sentence` variable as an argument.

Alright, that was a lot of info, so we need to break it down.

### Datatypes

**Strings**

When we wrote the word `"Hello"`, we had to put it in quotes. This is called a string. Strings can be used for any set of numbers, letters, or other characters. Strings are generally used for words, or sentences, but here's a few examples of strings.

```javascript
"Dean Martin"
"dean@martin.co"
"(702) 555-1212"
"123 Dean Martin ave, Las Vegas, NV 89109"
"Are you Dean Martin? Nope."
"45 years old"
"123-32-3214"
"D"
"@TheRealDean"
```

As you can see, each one of these examples of a string has a combination of letters, numbers, characters. It can be as short as 1 letter like `"D"`, or as long as an address, or even longer. The only real requirement here is that we have the quotes.

**Numbers**

Numbers should be pretty easy to understand. They're numbers! Positive, negative, whole numbers, decimal points, you get the picture. Let's look at some examples of numbers.

```javascript
1
-1234123
0.05
-2.25
3.1415926
```

In this example, we don't use the quotes. That's because those are for strings. We use numbers for doing math. Any math operation you can think of can be done in JavaScript. So if you need to do some math, then numbers are what you will want to use.

### Variables

In our first example, you saw some words that had the word `var` in front of them and a `=` sign after them. These words we saw are called variables. A variable means exactly what you might think, something that changes. A variable can be a string, or a number, or many other things. It can even start as a string and later become a different string or become a number, or a ton of other things. The reason for having a variable is to store some value for later use, or using over and over.

Let's use Facebook as our example again. When you log in, take a look at how many times your name shows up. Each comment you make, each picture you're tagged in, each post you write it shows your name. What Facebook does is they check their database to see what your name is. They then assign your name to a variable like `var name = Facebook.findUsernameFromDatabase();`. Then each time they need to display your name, they just need to use that variable.

Naming a variable is one of the hardest things in programming. There are a few rules to follow, and then some general conventions.

_required_
1. Variable names must begin with a letter or underscore.
2. Variable names can use letters, positive integers, and underscores.

_convention_
1. Variable names are generally expressive of what it is. i.e. `name`, `age`, `email`, etc..
2. Variable names generally begin with a lowercase letter.
3. If a variable name uses more than one word, they use camel casing like `firstName`, `streetAddress`, `guyThatIsReallyHungry`

As long as you follow these rules and conventions, then you'll have no issues with your variables.

### Functions

A function is a way to do a group of operations and give it a name. When you need to compute or alter something, or make some action happen, you can give this action a name to use over and over. Functions are sort of like variables, and you can even assign a function to a variable. The different is a variable generally has single value to it. A function's return value can change depending on what variables are passed to it.

```javascript
function addNumbers(a, b) {
  return a + b;
}
```

In this example we have a function called `addNumbers`. This function takes 2 arguments `a` and `b`. In this example, `a` and `b` are variables, but we don't know what the value is of them. We also have no idea what this function will return. If we use the function like `addNumbers(1, 1)`, then we know the function will return `2`. If we use the function like `addNumbers(20, 5)`, then we know the function will return `25`. The values we pass in as the arguments will change the outcome of the function.

There's a lot more to cover with functions, but we will leave it at that for now.

### The DOM

JavaScript works really well with HTML and CSS because it's based around both of these technologies. We have some basic object we can work with that help us to manipulate and learn about the webpage we're running the code on.

**window**

The `window` object references the actual web page we're on. We can write `window.location.href`, and that will tell us what the URL of the page the user is on. We can call the `window.print()` function to print the current page. There's also `window.alert("Hi!")` to send an alert box to the user. There are plenty of other options we have with this. [JavaScript Window](http://www.w3schools.com/jsref/obj_window.asp).

**document**

The `document` object references the HTML on the page. We can write some text on the page with `document.write("Hi!")`, or change the background color of the `<body>` tag with `document.body.style.backgroundColor = "red";`. We can also find all of the images on the page with `document.images`, or even find a particular element `<div id="taco"></div>` with `document.getElementById("taco")`. Just like `window`, there's plenty more to do with this. [JavaScript Document](http://www.w3schools.com/jsref/dom_obj_document.asp)

### JavaScript and Webpages

When you want to add JavaScript to your site, there's two ways to do it. The first way is using inline script. Just add this HTML into your page, and you can write your JavaScript code inside these tags.

```html
<script type="text/javascript">
// your script goes here...
</script>
```

The other option (and most prefered) is to use a file. Just how you add css to a `.css` file, you can add JavaScript to a `.js` file.

```html
<script src="path/to/script.js"></script>
```

This is a lot of info we've covered, and only the very tip of JavaScript. Let's practice this much for now, and next time we'll start getting deeper in it.

## Hands On


## Homework
[JavaScript on Code School](https://www.codeschool.com/courses/javascript-road-trip-part-1)

## Resources

* [JavaScript on Code School](https://www.codeschool.com/courses/javascript-road-trip-part-1)
* [JavaScript on Codecademy](http://www.codecademy.com/tracks/javascript)
* [Reference](http://www.w3schools.com/jsref/)
* [JavaScript Window](http://www.w3schools.com/jsref/obj_window.asp)
* [JavaScript Document](http://www.w3schools.com/jsref/dom_obj_document.asp)

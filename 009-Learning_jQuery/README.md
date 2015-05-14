# JavaScript made easier

### Using the jQuery library to avoid insanity

JavaScript has a lot of bits to it, and working with it can be cumbersome. Especially when you're trying to remember if your code works on every browser out there. Today we will be going over how jQuery will make your life a lot easier by handling a lot of the difficult parts for you.

[View the Presentation](presentation.pdf)

## Lecture

**Libraries**

When it comes to writing code, sometimes you'll have to write a bit of the same code over and over. A lot of times, there are people that have already written that bit of code for themselves. It's common place to share these bits of code amongst programmers. By sharing the code, you learn quickly from what took someone else a while as well as saving some time on figuring out something difficult.

A library is just a place where you can go read books, and learn stuff... :laughing: Really though, in terms of programming, a library is just a set of code that someone else has taken the time to write and package up nicely for you to use. There are tons of different libraries out there as lots of different programmers had the same idea of making writing JavaScript easier.

Of all the JavaScript libraries out there, jQuery has quickly become the most popular. It had a wide adoption for how easy it is to learn and use along with really good documentation, and a core team of developers ready to help anyone.

**Benefits of jQuery**

1. Cross-browser compatibility
  * No need to double check that your script works the same on IE that it does on Chrome
2. Documentation
  * Good docs make it easier to learn and quicker to fix mistakes
3. Extendable
  * you can easily add your own jquery plugins to share your bit of code to the world
4. Cross-browser compatibiltiy
  * did I mention that this is a very important thing?
5. Helper function
  * built in helper function like `ajax`, `loading`, appending to the dom, and so forth

### jQuery and the $

jQuery isn't just the name of the library, it's also the main function used to do all of the things!. This function needs to be installed before you can use it though.

Add the following script tag to your html page at the very bottom

```html
<!-- the rest of your page is up here -->
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
  <!-- your other scripts go here -->
  </body>
</html>
```

That's all it takes. You now have jQuery installed on this page. For each page you want to use jQuery, you'll need to make sure you have a link to that script.

Now that we have it installed, we now have access to our `jQuery` function. We also have access to the shorthand which is just `$`. They both do the exact same thing, just the `$` is shorter so it's easier to use!

Like I mentioned before, the `$` is the main function to do it all. Depending on what you pass into this function, this thing will act slightly different.

**A few simple uses**

Using the following HTML, let's see what we can do with the `$`

```html
<div class="product" data-price="3.50">
  <h3>Taco</h3>
  <ul>
    <li>Meat</li>
    <li>Cheese</li>
    <li>Hot sauce</li>
  <ul>
  <a href="#">Click to eat</a>
</div>
```

Let's select the `<h3>` and see what text is in there.

```javascript
$(".product h3").text();
```

Let's select each of the ingredients and print them to the console

```javascript
$(".product ul > li").each(function(iteration, li) {
  console.log($(li).text());
});
```

Let's select the `<a>` and add a click event to hide the taco

```javascript
$(".product a").on("click", function() {
  $(".product").hide();
});
```

Let's display the price of the taco

```javascript
var price = $(".product").data("price");
alert("The price is $" + price);
```

### Events

JavaScript is very event based. When some action happens on your website, you want to do something. Here are some examples of common events you see everyday on the interwebs.

* Johnny just sent sally a facebook message, increment the counter on Sally's account to let her know she has a new message from a creep she should ignore.
* Billy is reading twitter, oh look at that, a new tweet, and I didn't have to refresh the page.
* Jill is watching her stock in acme products fall on this graph as it updates in real time
* Sue has been staring at this shopping site for a while, and hasn't purchased anything, we should show a customer service window to see if she needs help.
* Darnell just purchased the wrong book on his amazon fire, better click the mayday button to be connected with a live amazon rep to fix this.
* Little timmy is playing flappy birds on some website.

As you can see, there's lots of different examples, but we will break each one down.

* click - when you click (or tap from a phone) on something
* dblclick - Double clicking with your mouse button
* hover - When you place your mouse cursor over an element
* keypress - just typing, or pressing any key on the keyboard
* keydown - when you push a key on your keyboard
* keyup - after you push a key on the keyboard then release it
* mousedown - when you click your mouse button before letting the button go
* mouseup - after you click and release the mouse button
* mousemove - the event that is fired when you move your mouse cursor
* mouseenter - the event that happens when you hover over something and keep the mouse over that thing
* mouseleave - when you move your mouse cursor off the thing it was hovered over
* scroll - when you scroll up or down a page
* resize - when you resize your browser window
* submit - when you submit a form either by pushing enter, or clicking the submit button

These are the most common events, but there are a few others, and you can even make your own events. It basically comes down to what do you want to do when some one does something. Think of your car. When you push a brake, you want the car to stop. When you push the gas, you want the car to go. You provide an action, and when that action happens the car in turn does something. The thing the car does is called the callback. The result of what happens when you fire an event.

Imagine some code like this.

```javascript
$(car).on("gas", function() {
  car.move("forward");
});

$(car).on("brake", function() {
  car.stop();
});
```

These functions being used as the second argument in the `on` function are the callback functions. These are the bits of code that gets called after the event happens.

### Learning jQuery

jQuery is just JavaScript code. There's nothing extra fancy about it other then it lets you write less code and do a lot more stuff. If you have no clue about JavaScript, then you should visit [Learning JavaScript](https://github.com/hipsterhackers/courses/tree/master/7-Intro_to_JavaScript) and [More JavaScript](https://github.com/hipsterhackers/courses/tree/master/8-JavaScript_part_Deux) from our past 2 classes. Look through all the resources, and get a handle on what it feels like to write some JavaScript. Once you've done that, then head on over to codeschool to [Try jQuery](https://www.codeschool.com/courses/try-jquery). Finally, come back and read through this a bit more. It might take a few tries, but it will start to come to you.

## Hands On

Download this zip file as a starting point. [Download ZIP](https://github.com/hipsterhackers/courses/blob/master/9-Learning_jQuery/exercises/theflorist-before.zip?raw=true)

## Homework
[Try jQuery](https://www.codeschool.com/courses/try-jquery)

## Resources

* [Try jQuery](https://www.codeschool.com/courses/try-jquery)
* [jQuery Docs](http://api.jquery.com/)
* [jQuery online course](http://www.codecademy.com/tracks/jquery)

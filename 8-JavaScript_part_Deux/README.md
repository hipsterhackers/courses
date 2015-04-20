# JavaScript part Deux

### Getting deeper into javascript

JavaScript is an actual programming language. Just like learning any language, spending 2 hours in class is nowhere near long enough to learn it. We will be getting a little deeper into the building blocks of javascript.

[View the Presentation](presentation.pdf)

## Lecture

**Recap**

In the last lesson we talked about what JavaScript is, and why we need to know it as web developers. Just to recap, it's important! It's the programming language of the web.

When building a web application, you will use many different languages. Your server side language might be Ruby, or PHP, or Python, or maybe even a language in the ASP.NET framework. Regardless of what your server side language is, you really only have 1 choice for a client side language, and that's JavaScript.

Now, if you're doing some searching out there for other client side langauges, you might come across CoffeeScript, ClojureScript, TypeScript, or maybe Dart, but these are really just syntax sugar built on top of JavaScript. All of the web browsers out there only understand JavaScript, so in the end, that's what it has to be.

**Data Types**

We had talked about [Strings](http://www.w3schools.com/js/js_strings.asp), and [Numbers](http://www.w3schools.com/js/js_numbers.asp). We also talked about what [variables](http://webcheatsheet.com/javascript/variables.php) are. This time around, we need to add 2 more basic data types that really help us to build our applications.

### Arrays

Arrays are a huge part in any programming language. Think of an array like a giant bucket that you can put anything into. The idea is when you're talking about a collection of things, you need a way to reference the entire collection.

Question: How large was your graduating class? What was average GPA of your class? Where were you at in the lineup as they called your name. (If you're still in high school, then just pretend :stuck_out_tongue:). Can you name some of the people in your class?

What we're talking about here is a collection of graduating students. We can perform operations like return the number of people that graduated, get the average GPA, list all the names, sort alphabetically and see which position we are. This collection of students would be an array, and with an array you can do all these types of things. Anytime you have a group of things you will want to use an array.

**Uses for an array**

* Collecting user names
* Special Dates
* List of links on a page
* List of all divs that have products in them

There's a ton more examples, but hopefully you're getting the picture by now.

Let's take a look at them now.

```javascript
var graduating_students = ["Jeremy", "Russ", "Billy"];

// How many students are graduating?
var number_of_graduates = graduating_students.length;
alert(number_of_graduates);

// Let's sort them alphabetically!
var sorted_graduates = graduating_students.sort();
alert(sorted_graduates);

// Who is in the front?
alert(graduating_students[0]);
```

Let's take a look at another example that might be used more often.

```html
<div class="product">one</div>
<div class="product">two</div>
<div class="product">three</div>
```

```javascript
var divs = document.querySelectorAll(".product");
// the variable divs is an array of HTML <div> elements with a class of "product"
alert(divs.length); // 3
alert(divs[0].textContent); // "one"
```

Wait, what is the `[0]` stuff we're doing here? Well, arrays use a indexing system that allow us to point directly to each element in the array. The indexing system starts with `0` which is always the first element in the array. The second element in the array would be `1`, then `2` for the third and so forth. Even though the array uses the square brackets, we have to use the square brackets again to denote which index we want to grab.

```javascript
["one", "two"][0] // would return the string "one"
["one", "two"][1] // would return the string "two"
["one", "two"][2] // There's no element in index 2 so this would return undefined
```

## Hands On


## Homework


## Resources

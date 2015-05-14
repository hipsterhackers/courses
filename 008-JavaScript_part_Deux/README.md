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
var graduatingStudents = ["Jeremy", "Russ", "Billy"];

// How many students are graduating?
var numberOfGraduates = graduatingStudents.length;
alert(numberOfGraduates);

// Let's sort them alphabetically!
var sortedGraduates = graduatingStudents.sort();
alert(sortedGraduates);

// Who is in the front?
alert(graduatingStudents[0]);
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
["one", "two"][0]; // would return the string "one"
["one", "two"][1]; // would return the string "two"
["one", "two"][2]; // There's no element in index 2 so this would return undefined
```

### Objects

Another very popular datatype in javascript is objects. They are very similar to arrays, but have a few key differences. An object is also a collection, but it's a collection of key/value pairs. With an array, we use numbers to choose which index we want to grab. With objects, we use keys to denote which index we want. A `key` is nothing more than whatever we want it to be, but most commonly a string. The other major difference is that objects use curly braces `{}`.

```javascript
var person = {"name": "Jeremy", "gpa": 3.8};
var otherPerson = {"name": "Russ", "gpa": 3.9};
```

In these examples, the keys we are using are `"name"` and `"gpa"`. The values for these keys are `"Jeremy"` and `3.8` for the first and `"Russ"` and `3.9` respectively. We can use these objects in conjunction with arrays as well.

```javascript
var graduatingStudents = [{"name": "Jeremy", "gpa": 3.8}, {"name": "Russ", "gpa": 3.9}, {"name": "Billy", "gpa": 2.5}];

// How many students are graduating?
var numberOfGraduates = graduatingStudents.length;
alert(numberOfGraduates); // 3

// Let's sort them alphabetically!
var sortedGraduates = graduatingStudents.sort();
alert(sortedGraduates); // oops! This doesn't work like we thought.

// Who is in the front?
var person = graduatingStudents[0];
alert(person); // {"name": "Jeremy", "gpa": 3.8}
alert(person["name"]); // "Jeremy"
alert(person["gpa"]); // 3.8
```

So in this example, we have a collection of objects. Just like an array, we use the square brackets to get the index of something, except, in this case we use the keys instead of the numbers.

**Uses for objects**

* List of a person's attributes
* List of HTML Attributes and values
* List of CSS Properties
* Configuration Settings

As you can see, there's lots of uses for objects too. To this point, you've dealt with key/value pairs in lots of area. Let's take a look!

```html
<a href="http://www.google.com" target="_blank" class="btn" data-track="1234">Search</a>
```

```javascript
var htmlAttrs = {"href": "http://www.google.com", "target": "_blank", "class": "btn", "data-track": "1234"};
```

```css
.btn {
  color: white;
  display: block;
  padding: 5px;
  border: 1px solid black;
  background-color: red;
}
```

```javascript
var cssProperties = {"color": "white", "display": "block", "padding": "5px", "border": "1px solid black", "background-color": "red"};
```

### Booleans

Booleans are pretty simple. There's only 2. `true` and `false`. That's it. Just 2. No more. These are used as "yes" or "no". There's no "maybe". You use these when need to ask a yes/no question and need a yes/no type answer.

```javascript
var failingStudents = graduatingStudents.filter(function(student) {
  return student["gpa"] < 3.0;
});
alert(failingStudents.legnth); // 1
alert(failingStudents[0]["name"]); // "Billy"
```

In this case, we use the less than `<` operator. When we use this, it's just like asking is `2.5 < 3.0`? JavaScript also has greater than `>`, less than or equal to `<=`, greater than or equal to `>=` and finally is equal to `==`. We can use all of these to return a `true` or `false` value. From that, we can do quite a bit!

**Conditions**

So where can we use these booleans? `if` statments!

```javascript
if(failingStudents.length > 0) {
  // we have at least 1 failing student
} else {
  // we have no failing students
}
```

The `if` statement takes a conditional, and the conditional must return `true` or `false`. If the conditional returns `true`, then we can perform some operation that is between those curly braces. If the conditional returns `false`, then we perform the operations inside of the `else` curly braces. 

## Hands On


## Homework


## Resources

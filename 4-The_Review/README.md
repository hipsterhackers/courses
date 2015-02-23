# The Review

### HTML & CSS Recapitulation

We've covered a ton of stuff. From how the web works, to writing some html then to making it look awesome with CSS. In this course we will just go back over all that stuff to make sure we have an understanding of all this new stuff.

If you haven't done so by now, you should go back and read through the first 3 lessons.

[View the Presentation](presentation.pdf)

## Lecture

**HTML**

Remember that HTML stands for `Hyper Text Markup Language`. This is the language of the web, but it's not a programming language. A markup language is just a structure for how you describe some text. When we write an HTML tag, it doesn't actually do anything, it just tells the browser that there is a block of text that goes in this spot.

Over the years, HTML has improved quite a bit making our lives so much easier. The way HTML keeps track of these new versions is by using a DOCTYPE. The type of HTML document is specified at the top of every HTML page. With the latest version of HTML, we use the HTML 5 doctype which looks like `<!DOCTYPE html>`. This tells the browsers that all of the HTML inside of this page will conform to the HTML 5 specifications. There are other doctypes, but we don't need to worry about those since they're old now.

**HTML Jargon**

When we write HTML, we are writing what's called "tags". These HTML tags are made up of a left angle bracket `<`, a right angle bracket `>`, and some word in the middle. Let's start with a div tag `<div>`. The `<div>` tag is used for a division of the site, or you could say a block section area thingie. Very technical, I know.
There are two types of tags; self-closing tags, and wrapper tags. The `<div>` tag is a wrapper tag because it wraps around some content. All wrapper tags require that they are closed with a closing tag. The closing tags use the same name as the tag that it's closing, and the same angle brackets, but we add a forward slash in the tag to denote that it's a closing tag. For the `<div>` tag, we would close it with `</div>`. Simple, right?

For a self-closing tag, let's use the img tag. We know that when we want to write a tag we do `<img>`, but how would this look for a self-closing tag? Well, actually with HTML 5 we can just do `<img>`. We just don't specify a closing tag. Though this is technically correct, by convention, most people will use a forward slash to denote that it is in fact a self-closing tag. We can do this like `<img />`. By putting the slash at the end of the tag, it makes it a bit more readable to other developers that the intention was to self-close this tag. Either of these ways is correct in HTML 5, however, in earlier versions of HTML this is not the case.

So when do you know to use one over the other? Wrapping tags have the ability to have content inside of them. Even if you don't actually put content in them like `<div></div>`, the div tag has the ability to have content inside of it. Self-closing tags don't have that same ability. When we use a `<img>` tag, that is the image. We don't put anything inside because we already have what we need. You can [view the HTML element list](https://developer.mozilla.org/en-US/docs/Web/HTML/Element) to see which ones are wrapper tags and which are self-closing.

**HTML Pages**

Now that we have covered the bit about HTML, let's talk about writing a simple page. A website is made up one or more web pages. Now, there's 2 types of websites; static websites and dynamic web applications. A web application is functional, interactive, and stores a state of some sort. Examples of a web applications would be Facebook, Twitter, GMail, Github, Google, etc... A static website is more like the mom and pop pizza shop down the street. You can see a menu, directions to the restaurant, and maybe some contact information like a phone number and email address. These types of websites don't really do anything except provide some information. We will be strictly talking about static websites.

The home page for these static websites will almost always be called `index.html`. The file extension ending in `.html` let's us know that the file is a HTML file. This is no different than a `.doc` having being a word doc, or `.xls` being an excel file.

**HTML Breakdown**

In an HTML document, we need to start with the doctype. Next comes the `<html>` tag. The `<html>` tag will contain the actual document including the `<head>` tag and the `<body>` tag. Altogether this makes up the starting structure for the HTML page.

```html
<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  </body>
</html>
```

:bulb: If you're using [Atom](http://atom.io) you can just type `doctype` then hit the <kbd>tab</kbd> key. Then you can type `html` and hit the <kbd>tab</kbd> key again. Boom! You have a basic HTML page setup. This actually works on several different text editors, and can be configured for many others.

**The Head and the Body**

Now that we have the basic structure down, we need to discuss the use of the `<head>` and the `<body>` tags. They have a specific use, but what is it? When you visit a website or use some web application, everything you see on your browser comes from HTML written inside of the `<body>` tag. From the top of the page to the bottom, it all goes inside of the `<body>`. The `<head>` tag is used for setting up information and meta data about the page. This includes the title of the site, adding in some stylesheets, or maybe loading some special scripts. The `<head>` tag doesn't display anything, it just loads the initial setup for the page.

**Stylesheets**

A stylesheet is just a file that contains CSS. CSS files end in `.css`. These are the files that make your web pages look pretty!

Ok, so what does CSS mean? It stands for "Cascading Style Sheets". Now you know where the "stylesheet" term comes from! Just like HTML, CSS is also a type of markup language. The nice thing about markup languages is when you need to do something, there's one way to do it. You learn that one way, and that's it.

**CSS Breakdown**

CSS styles are made up of a `selector`, the left curly brace `{`, a list of properties, then finally the right curly brace `}`. A selector is how the browser knows which HTML element(s) to style. There's a lot of different types of selectors you can use. You can check out [this site](http://www.w3schools.com/cssref/css_selectors.asp) for some more examples on how to use them.

**CSS Properties**

The properties are the meat and potatoes of the styles. They are a list of attributes and values in the format of `attribute: value;`. That's `attribute` `:` `value` `;`. This is important because improper syntax leads to funky results :stuck_out_tongue_winking_eye:.

There's a lot of different properties, so you'll want to [go here](http://htmldog.com/reference/cssproperties/) to get familiar with what's possible. We will just cover a few of the most common ones.

```css
.cheese {
  font-size: 22px;
  font-weight: bold;
  color: red;
  border: 1px solid black;
  padding: 3px;
  width: 100px;
  height: 100px;
  text-align: center;
}
```

As you can tell from this example, there's a lot of properties here. We are setting the size of the text to 22px, and making it bold and red. Then we place a small black border around a 100x100 box, and put the text in the middle with a little bit of padding. All of these different things just by specifying a few CSS properties. The other thing to note is that we are using the class selector. We know it's the class selector because of the `.` in front of the word `cheese`. This tells the browser to find all HTML elements on the page that have a class attribute with a value of `cheese`.

Let's take a look at a few more:

```css
#taco {
  width: 250px;
  margin: 0 auto;
  background-image: url("images/corn-shell.jpg");
}
#taco .beef {
  color: brown;
}
#taco .cheese {
  width: 100% !important;
}
```

In this example, we are using the id selector with the `#`. This will select any element on the page that has the id attribute with a value of `taco`. Since we can only use `taco` once per page, it will only select that one. The next style selects all elements that have a class attribute of `beef` that are nested inside of the `taco` element. So maybe some html like this

```html
<div id="taco">
  <span class="cheese"></span>
  <p class="beef"></p>
</div>
<i class="beef"></i>
```

The `p.beef` and the `span.cheese` would both be selected because they are inside of the `#taco`. However, the `i.beef` would *not* be selected because it's not inside of the `#taco`.

**Finale**

Writing CSS and HTML just takes time and practice like most things. When you first start, things will look like 1995 web sites, and that's ok. Just keep at it, and you'll learn and get better. Keep in mind that you can always reach out and ask if you have questions. Review this lesson as well as the previous ones as many times as you want. Also, be sure to read over the resources below.

## Hands On

Download the images [here](https://github.com/hipsterhackers/courses/blob/master/4-The_Review/exercises/theflorist/images.zip)

## Resources
* http://learn.shayhowe.com/html-css/
* http://www.codecademy.com/en/tracks/web
* http://html.net/tutorials/html5/
* http://html.net/tutorials/css/
* http://htmldog.com/guides/html/beginner/gettingstarted/

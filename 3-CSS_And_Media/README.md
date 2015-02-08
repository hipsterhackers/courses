# CSS and Media

### ID's, classes, selectors, and attributes. :tada:

Without CSS and Media on your site, you're just left with plain black text on a plain white background. We will be showing you how to write CSS so you can make your web pages look beautiful, as well as properly handling images, background images, and maybe some other stuff!

[View the Presentation](presentation.pdf)


## Lecture

**What is CSS?**

CSS stands for "Cascading Styles Sheets". When you think of cascading, you usually think of a waterfall. Something that starts at the top, and trickles down to the bottom. In a CSS file, your styles are read from the top down. This is important to remember because CSS files tend to get really large, and without a lot of organization and structure, you could find yourself with some headaches.

CSS file end in a `.css` file extension. This is the file you place your website styles in to group them together. Having all your styles in one single location allows you to change, and fix your styles quicker without having to track down where they are at.

** Life before CSS**

Before CSS, we used HTML attributes to specify what font to use and which colors we needed. This was horribly inefficient because you were constantly duplicating your styles. You would use a `<font>` tag every time you wanted to change your color or typeface. Layouts were all built with `<table>` tags. Using tables back then was ok, because we didn't have tablets and phones to worry about. Websites didn't need to be responsive, so having a solid structure that didn't move was fine. Now days, using a table restricts your site to which devices it can be viewed on. Here are some [example sites](http://websitesfromhell.net/) to remind you of what the internet looked like before CSS became standard.

**CSS 3**

Just like HTML 5, CSS 3 is just a version number for the latest iteration of CSS. The initial usage of CSS was to group styles together, give them a name, and associate them to some HTML elements. Some of the things the old CSS couldn't do was a rounded border. If you wanted borders around some block of text, that border had to be a square. Your other option was to create an image for each corner, and then add some background images for each border. Here, I'll show you an example!

```html
<div class="box">
  <div class="tl-corner"></div>
  <div class="tr-corner"></div>
  <div class="box-content">
    A box with rounded corners
  </div>
  <div class="bl-corner"></div>
  <div class="br-corner"></div>
</div>
```

```css
.box {
  border: 1px solid black;
  position: relative;
  z-index: 1;
}
.box .tl-corner {
  background-image: url("../images/tl-corner.gif");
  position: absolute;
  top: -1px;
  left: -1px;
}
/* styles for top right */
/* styles for bottom left */
/* styles for bottom right */
```

Look at all of that markup we had to write just for a simple box with rounded corners. This was common place in CSS 1 & 2 land. Here's an example of the same thing with CSS 3.

```html
<div class="box">
  A box with rounded corners
</div>
```
```css
.box {
  border: 1px solid black;
  border-radius: 4px;
}
```

Yup, that's it. Pretty impressive, right? I know. But that's not all we got with CSS 3. Before CSS 3, we couldn't really have custom fonts. There were so many different hacks to get custom fonts like use flash, or crazy javascript, or even just use images! Yeah, that's right, images. People would want a title of a page in some fancy font, and they would just make that title in photoshop, then use that image. I could go into all the fun things with CSS 3, but let's get into just learning CSS first!

**Anatomy of CSS**

By this point, you've seen CSS, but let's talk about the different parts. The `{` character is called the "left curly brace". The `}` is called the.... yup, you guessed it, "right curly brace". The next two are the semicolon `;` and the colon `:`. A lot of people get these two confused, but CSS will be sure to let you know if you get that wrong. The final piece is called the "selector".

The selector is what tells the browser which HTML element(s) you're trying to style specifically. You might want some purple text, but you don't want all of your text purple, just certain areas. To do this, we would need to select the areas we want to have purple text.

```html
<p class="purple-text-area">This font is purple</p>
<p class="not-a-purple-text-area">This font is not purple</p>
<span class="purple-text-area">This font is also purple</span>
```
```css
.purple-text-area {
  color: purple;
}
```

Notice the HTML tags are using a `class` attribute. In CSS, we denote a class attribute by using a `.`. It doesn't matter if the class was placed on a `<p>` or a `<span>` or any other tag. As long as the tag has a class attribute that has `purple-text-area`, then it will be selected by that selector.

Let's try another one.

```html
<p id="purple-text-area">This font is purple</p>
<p class="purple-text-area">This font is NOT purple</p>
```
```css
#purple-text-area {
 color: purple;
}
```

In this example we're not using the `.` in the selector. We're now using the `#`. If you look at the HTML, you'll notice that the purple text has an `id` attribute instead of a `class`. The second tag has a `class` that has the same value as the other tag, but it doesn't get selected. This is because in the CSS we use the `#` to denote an `id`.

So if we can achieve the same result using a class or id attribute, then why use one over the other? Well, the id attribute can only be used once per HTML page. However, the `class` attribute can be used as many times as you want.

There are tons of different selectors available in CSS 3. You can check out [this site](http://www.w3schools.com/cssref/css_selectors.asp) for some more examples on how to use them.

**CSS Properties**

Finally we come to the meat and potatoes to CSS. You might be asking yourself "but what's taters?". You know, po-tay-toes; boil 'em, mash 'em, stick 'em in a stew. Actually, you're probably asking yourself other stuff, but let's talk about properties.

By this point, you've seen some. Like `color: purple;`. This is an example of the color property. All CSS properties are __key/value__ pairs. The attribute is the key, and the value is the value. The attribute and value are separated by a colon `:`, and the property is completed with the semicolon `;`. Here are just a few example of some other properties.

```
font-size: 14px;
font-weight: bold;
color: blue;
border-bottom: 1px solid black;
background-color: pink;
```

There's way too many properties for me to show you, but you can [go here](http://htmldog.com/reference/cssproperties/) to see a bunch more.

**Media**

CSS definitely makes your site pretty, but a site won't be fully complete without some other assets added in like images or videos. Adding these into your site can be a little tricky, but once you understand how file paths work, then it makes it so much easier.

**File Paths**

Let's start with an example structure for a website.

```text
http://website.com/
  |
  |_stylesheets
  |  |
  |  |_/styles.css
  |
  |_images
  |  |
  |  |_/logo.jpg
  |  |_/background.png
  |  |
  |  |_/icons
  |    |
  |    |_/star.gif
  |
  |_index.html  
```

Here we have a simple structure for a website. In our file structure, we have a `stylesheets` folder, and a `images` folder. Inside these folders, we have some files, and inside of the `images` folder we have a subfolder called `icons` which has a file in it.

In our `index.html` we want to display our logo. To do this, we need to know the relation of the `logo.jpg` file to that of the `index.html` file where we will be adding the logo in.

```html
<img src="images/logo.jpg">
```

Simple as that. As you can see we just did `images/logo.jpg`. This is because the `index.html` file and the `images` folder are "siblings". They exist on the same level as one another. The `logo.jpg` file is considered a child to the `images` folder. So we just separate each part in the file structure with a forward slash `/` character. Now what if we wanted to include our `star.gif` file?

```html
<img src="images/icons/star.gif">
```

In that example, we have to include the `icons` folder in the file path. The `star.gif` is a child of the `icons` folder, and the `icons` folder is a child of the `images` folder.

Using this same method, we can now **link** our CSS to our HTML.

```html
<head>
  <!-- note: stylesheet links go in the <head> -->
  <link href="stylesheets/styles.css" rel="stylesheet" type="text/css">
</head>
```

As you can see, the `stylesheets` folder and the `index.html` are siblings. Because they are siblings, we can just put the [relative path](http://www.coffeecup.com/help/articles/absolute-vs-relative-pathslinks/) to the styles.css.

Now, let's say we want to add a background image to our page. Background images are placed in the CSS because this is a style. So let's create our style.

```css
/* styles.css */
#page-container {
  background-image: url("images/background.png");
}
```
```html
<div id="page-container"></div>
```

But wait! That didn't work :cry: Why not? Well, the path we specified was relative to the css file. If we look back at the file structure of our site, we'll see that the `styles.css` and the `background.png` are _not_ siblings. I guess you could say they're cousins? You know, since their parents are siblings. In a file structure, we're not allowed to talk to our cousins directly. We have to talk to our parent, then the parent talks to their sibling, and the sibling talks to their child. So this means we need to go up a directory first. When going up 1 directory, we use the `..` path. Ok, let's try this again.

```css
/* styles.css */
#page-container {
  background-image: url("../images/background.png");
}
```
```html
<div id="page-container"></div>
```

Ah ha! :thumbsup: That worked. We use the `..` to denote we want to go up to the parent of the file we're in. Then of course, we separate each part of the file path with a forward slash `/` since the parent in this case is "stylesheets". Now, there's another way we could do this, and that would be to use an [absolute path](http://www.coffeecup.com/help/articles/absolute-vs-relative-pathslinks/). Let's see how that would look.

```css
/* styles.css */
#page-container {
  background-image: url("/images/background.png");
}
```
```html
<div id="page-container"></div>
```

Well, would you look at that? It's shorter, and doesn't look weird with the `..` in there. There's a problem though.... The absolute path means starting from the root of the directory structure. If we're working on a website locally, you might notice the URL doesn't say http://website.com, but probably says something more like `file:///Users/jeremy/Sites/hipsterhackers/courses/3-CSS_And_Media/exercises/blog/index.html`. If this is the case, then your `/images` actually looks more like `file:///images`. I know, confusing. This isn't always the case, but could potentially lead to some unwanted issues. If you don't fully understand, that's ok. Just sort of keep it in the back of your mind. If you run into the issue, you'll know to refer back to this (hopefully).


## Hands On

We will be revisiting the blog site and add styles to it to make it a much more attractive site.

## Resources

* [W3 Schools](http://www.w3schools.com/css/) A great reference.
* [Learn CSS | Mozilla Developer Network](https://developer.mozilla.org/en-US/learn/css) Tutorial based.
* [CSS Zen Garden](http://www.csszengarden.com/) Great resource to view the source and learn.
* [Designing with Web Standards](http://www.amazon.com/Designing-Web-Standards-3rd-Edition/dp/0321616952) Older book but principles still apply

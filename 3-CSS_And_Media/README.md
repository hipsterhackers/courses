# CSS and Media

### ID's, classes, selectors, and attributes. :tada:

Without CSS and Media on your site, you're just left with plain black text on a plain white background. We will be showing you how to write CSS so you can make your web pages look beautiful, as well as properly handling images, background images, and maybe some other stuff!

[View the Presentation](presentation.pdf)


## Lecture

**What is CSS?**

CSS stands for "Cascading Styles Sheets". When you think of cascading, you usually think of a waterfall. Something that starts at the top, and trickles down to the bottom. In a CSS file, your styles are read from the top down. This is important to remember because CSS files tend to get really large, and without a lot of organization and structure, you could find yourself with some headaches.

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
  |
  |_index.html  

```

## Hands On

We will be revisiting the blog site and add styles to it to make it a much more attractive site.

## Resources

* [W3 Schools](http://www.w3schools.com/css/) A great reference.
* [Learn CSS | Mozilla Developer Network](https://developer.mozilla.org/en-US/learn/css) Tutorial based.
* [CSS Zen Garden](http://www.csszengarden.com/) Great resource to view the source and learn.
* [Designing with Web Standards](http://www.amazon.com/Designing-Web-Standards-3rd-Edition/dp/0321616952) Older book but principles still apply

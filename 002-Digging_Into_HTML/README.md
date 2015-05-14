# Digging into HTML

### Doctypes, tags and attributes.

We will cover what "HTML 5" actually means, and get away from the buzzword. Talking about the differences between doctypes from html 4, html 5, xhtml, and how that affects your websites. We will also talk about all the different tags and how they are used. Then the use of attributes, and what each of them mean.

[View the Presentation](presentation.pdf)

## Lecture

**DOCTYPES**

The `<!DOCTYPE>` declaration must be the very first thing in your HTML document, before the `<html>` tag.

The `<!DOCTYPE>` declaration is not an HTML tag; it is an instruction to the web browser about what version of HTML the page is written in.

In HTML 4.01, the `<!DOCTYPE>` declaration refers to a DTD, because HTML 4.01 was based on SGML. The DTD specifies the rules for the markup language, so that the browsers render the content correctly.

HTML5 is not based on SGML, and therefore does not require a reference to a DTD.

[Doctype info on W3Schools](http://www.w3schools.com/tags/tag_doctype.asp)

When people say "HTML5" they're really talking about the HTML5 doctype. A way to sum up the doctypes is a DOCTYPE is just a custom setting for your website that tells the browser some info about your site. There are HTML tags available in HTML5 like the `<section>` or `<canvas>` tags that don't exist in other doctypes. So if you define your website with a HTML 4.01 doctype, and then add a <section> tag into your site, you may notice that your site doesn't render properly on some browsers. This is because in HTML 4.01, the `<section>` tag didn't exist. Your website would be considered "invalid markup".

Valid markup ensures your website is viewed by everyone the way you intended it, as well as helping your website to rank higher in the search engines. Take pride in your work, and make it nice! You can use [HTML Validator](http://validator.w3.org/) to validate your markup.

**HTML VS XHTML**

There are 2 main doctype sets; HTML, and XHTML. What are the differences between these two?

The first thing is to understand what the X in XHTML means. We know that HTML stands for Hyper Text Markup Language. The X stands for extensible meaning able to be extended. With a HTML doctype, you get what you're given, and you can only use what you're given. With XHTML, you can sort of make stuff up as you go but with a base to start off with.

For example, in HTML there are a set number of tags such as the `<p>` or `<div>` or `<a>` tags. These tags also exist in XHTML, but you can also have a tag `<taco>` or `<pizza>` or `<burger>` or __when's lunch__? These random delicious tags don't exist in HTML, and using them in HTML would be considered invalid. We can do this in XHTML because it's a sort of offshoot from XML. XML is basically all just made up tags. You write it like HTML, but there's no default tags. People will have different subsets of XML to define specific tags like [RSS](http://www.webreference.com/authoring/languages/xml/rss/feeds/index.html) and Atom feeds, or [SOAP](http://www.tutorialspoint.com/soap/soap_message_structure.htm).

[View more differences on Sitepoint](http://www.sitepoint.com/web-foundations/differences-html-xhtml/)

**SO MANY HTML TAGS**

When it comes to HTML tags, there's a ton of them. Each one has a purpose, but for the most part it's just semantics. It is totally possible to make a `<div>` tag look like a link, and a `<a>` tag act like a `<p>` tag. Doing this would take a ton of work, but it's still possible. So why have so many different tags? Well, let's take the `<video>` tag for example. This is a tag available in HTML5. This tag allows us to play a video. It already knows how to load a video, and already has built in play, and volume controls for your video. We just tell this tag which video we want to show, and it knows what to do. How about the `<h1>` tag? This tag already knows that the text inside is important and needs to be large and bold. We could easily do this with a `<p>` tag, but it would take some work.

Each tag has a pre-built set of styles, and functions already attached to it. Things we don't have to worry about adding in, we just need to worry about when to use the correct tag.

[Here's a massive list of all the tags available](https://developer.mozilla.org/en-US/docs/Web/HTML/Element)

You'll see in this list, some tags are no longer available like the `<blink>` and `<marquee>` tags. Thank god! These were horrible tags, and made the internet look like a giant shady car sales commercial. Some tags can be experimental as well. These are tags that don't work in every browser, but have been proposed as new tags.

The other thing to note about HTML tags are that some are self closing tags. A self closing tag can be referenced by not having a secondary closing tag and using a slash at the end of it. Some of those tags are `<img />` `<br />` `<hr />` `<meta />` `<link />`. Since we don't put things inside of these tags, we don't need to have a closing tag like `<img></img>`. This would be invalid markup. One other thing to note is that with HTML5, the trailing slash isn't required for self-closing tags. So `<br>` is just as valid as `<br />`.

**HTML TAG ATTRIBUTES**

Along with all the HTML tags out there, each tag comes with a set of attributes you can add to customize these tags. With HTML 5, you could even create your own attributes if you wanted. So what's the purpose of the attributes? Well, they help enhance and customize each tag. There are predefined attributes that go along with each tag that will help that tag specifically.

Let's take the anchor tag for example. By itself, it's just `<a>About</a>`, but this doesn't tell us where on the page to anchor to. If we were to click this anchor on the webpage, our browser would just look at us funny. We can tell the anchor where it's anchored to by using the "name" attribute.

Attributes are just key/value pairs. The name of the attribute is the key, and the value of the attribute is the value. When we write it in a tag, it looks like `some-key="some value"`. Inside of a tag, this would look like `<sometag some-key="some value"></sometag>`.

For our anchor example, we would write `<a name="#about">About</a>`. How about when we want to visit another page with the anchor tag? For that, we would need to use the href attribute. This would look like `<a href="http://www.google.com">Visit Google</a>`. Just by using a different attribute, we treat the anchor tag slightly different.

More often than not, you'll need to use multiple attributes in conjunction with each other to help really customize what your tag will do. We will use the input tag where this is very common. We want to display a search box where people can type into it to search for something. We will also need to style this search box so it looks nice. To do this, we will write `<input type="text" name="query" class="search-box" placeholder="Type here to search" />`. As you can see, each set of attributes is separated by a space, and these attributes can be placed in any order. The first one is the type attribute which tells this input to be plain text as opposed to being a password field, or an email field. The next is the name attribute which we saw with the anchor. But this name attribute doesn't make the input an anchor, this one creates a form parameter that will pass the value of this input to your application for searching. Then we have the class attribute. This one allows us to specify an identifier for styling this input later with our CSS. Finally the placeholder attribute. You've seen this many times. This will just place the text in the box until you start typing.

There's way too many attributes to list here, but you can [use this link](https://developer.mozilla.org/en-US/docs/Web/HTML/Element) to go through the html tags, and see which attributes you can use with them.


## Hands On

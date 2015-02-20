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

## Hands On

## Resources

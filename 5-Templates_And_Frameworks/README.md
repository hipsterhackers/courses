# Templates and CSS Frameworks

### Shortcuts to make your life easier :boom:

When building websites, there's some constructs that you'll find yourself doing over and over for each site. One site construct we will talk about is a grid system. These can be cumbersome to build yourself, so we will show you how to use a pre-made one to make your life easier. Maybe you're not much of a designer, but you love writing code. We will also show you how to choose a template to help bootstrap your designs with code other people wrote.

[View the Presentation](presentation.pdf)

## Lecture

**Frameworks**

In the programming world, there's tons of these things called "frameworks". When we talk about a framework, we're just talking about a structure of code that is prewritten. Someone else has taken the time to put together some code in an organized way that will make our lives easier, and they are giving us permission to use it. We will be focusing specifically on _CSS_ frameworks.

There's a lot of different CSS Frameworks out there like:
* [Bootstrap](http://getbootstrap.com/)
* [Foundation](http://foundation.zurb.com/)
* [SkeletonCSS](http://getskeleton.com/)
* [PureCSS](http://purecss.io/)
* [GumbyFramework](http://gumbyframework.com/)
* Many more...

I've put bootstrap at the top because that's become a bit of industry standard. The term "bootstrap" just means "to get started". It's not really meant to be the end all to designing and developing a website, it's just meant to be a quick way to get started with the design and build of your site. You could use only what bootstrap gives you, and leave your site in a basic style, but it will look very basic. Starting out, this will be more than fine for what we're doing.

### Benefits to a framework

So why use a framework? Well, it's true that anything a framework gives us, we could do ourselves. In some cases, we might not want to use a framework because we would want fine grain control over exactly what we're building. However, using a framework could save us a ton of time by providing us with code that we will probably have to write anyway.

**1. The Grid**

The first main benefit is a css grid. We know that websites are just a series of boxes put in a deliberate order. If you've never spent a lengthy amount of time just trying to get 3 equal size boxes to sit next to each other, then consider yourself lucky. The grid basically creates these columns. You get to choose how many columns your box will take up. As long as all the columns in that row equal 12 in the end, then you can use any combination.

So, for example, with the 3 boxes, `12columns / 3columns = 4 columns`. So if we make each box exactly 4 columns wide, then they will each be exactly the same width. What if we just wanted 2 boxes? Easy, we just make both boxes 6 columns wide. What if we want 2 boxes, but we don't want them 6 columns wide because that's just too wide? Well, we can make both boxes 4 columns wide, and that will give us 8 columns used up. This means that we have 4 columns left unaccounted for. We can just offset the boxes by 2 columns which means we will have 2 columns spaces, 4 column box, 4 column box, and an addition 2 column space on the right side. `2 + 4 + 4 + 2 = 12`. Like I said, any combination provided it equals 12 will work.

![css grid](http://cdn.designinstruct.com/files/418-responsive_css_grid/responsive_css_grid_04csswizardrygrids.png)

**2. Responsive**

In this day and age, there's a billion devices that can view web pages. Unfortunately, they all have different screen sizes. Back in the late 90s early 00s you had just a small set of screen sizes, and the most common was 1024x768. You could almost bet that 90% of your web traffic was using a screen that size. This meant you could make a webpage 980px wide, and it would look good for almost everyone. Now days you have 30" monitors with 5,000px wide down to small android screens with 300px wide. If your webpage is exactly 980px wide, then you're going to have a ton of white space on large screens, and almost unviewable on mobile devices.

Responsive design is where your design adapts to the screen size. Fun fact, if you want to see if a website has an adaptive design, just drag the side of your browser and shrink it. Go ahead, try it out! I'll wait... Did you do it? Pretty neat, huh? If you tried github, you'll notice that it's not responsive. They do have a mobile version, but it works a bit different. If you couldn't find a site, try out [Product Hunt](http://www.producthunt.com/). Load the page up in your browser at full screen, then drag the side of your browser shrinking the width, and watch how the page layout changes. You'll see that it starts to fit better on smaller widths.

To get a responsive design, frameworks use [CSS Media Queries](http://www.w3schools.com/cssref/css3_pr_mediaquery.asp). These can get a bit tricky, but with the benefit of a framework, most of this is written for us.

![Responsive](http://www.vycma.com/LIMPIAR_ORDENAR/images-responsive-vycma/Diseno-web-design-responsive-adaptable-adaptativo-Vycma.png)

**3. Pretty styles**

Each framework will have it's own style on how it thinks the page should look, but the beauty is that they provide styles for you. Mostly it will be things like how buttons and form fields look, but this is sometimes enough to take a 1998 looking site to a 2015 looking site. By default, all browsers will give you styles for certain tags. For example, the `<h1>` tag will have big black bold text with a default font. Without changing anything, if we add in bootstrap, we will still be left with big black bold text, but the font will change to an easier to read font, and the size and weight change slightly. It's this slight variation that gives that little extra "pop" making a page look a tad bit nicer.

![bootstrap](http://www.blackfyre.hu/wp-content/uploads/2014/08/bootstrap.png)

**4. Fancy JavaScript**

JavaScript helps to make things a bit more interactive on your page. Some of these things are a rotating banner image on your home page, or maybe a modal window that has a "Contact Us" type form in it. How about a little tooltip or dropdown menu. These are all things you see on websites all the time, but they require writing JavaScript to make them work. If you don't know JavaScript then it makes this a bit difficult.

Luckily with the advancements in HTML 5, and the work done by these frameworks like bootstrap, adding these features in are really easy. In most cases, you don't even have to touch a single line of JavaScript code. It might be as simple as `<a href="#" data-toggle="dropdown" class="btn">Menu</a>`. And with a simple bit of HTML with a few specific attributes, we have a nice looking button that will active a dropdown menu. The JavaScript code it would take to accomplish would be like 10 lines of code plus an additional 10 or so lines of CSS.

**5. Coding Standards**

The best part about these frameworks is that they conform to the best coding standards. By using HTML5, CSS3, and unobtrusive JavaScript, these frameworks will stay out of your way as far as ease of use and valid markup. This allows you to develop quicker without having to backtrack to learn outdated and deprecated code. It can also help with your search engine rankings in some cases. Search engines like Google will determine if your website should rank well based on many different factors; one of those being "is the website markup written properly and valid?".

### Website Templates

Now that you understand why we use frameworks and their benefits, let's talk about website templates. You may have already used a template in the past. Possibly a wordpress template, or something like this. Usually, people that don't have any web development experience will just purchase a template, slap a new logo on it and call it a website.

Using a template can be a secondary step to bootstrapping your website. I myself do this all the time. The key term here is "bootstrap" though. Use the template as a starting point to the final product, not as the final product itself. When searching for templates, there's a few things you should really look into first.

**1. How was the template coded?**

Anyone can make a template and sell it online. There's no rule that says your template has to be good, it just has to appear good enough to make you want to buy it. This could be dangerous though. People with not HTML experience won't know the difference between a template built with HTML5 in mind vs a template build using HTML 4.01 transitional. This could be a big game changer when it comes to search engine optimization though, and search engine rankings though. Make sure any template you decide to use is using up-to-date code with the latest standards. Choosing a template built using a framework like bootstrap is the best choice because that allows you to really customize the template to make it your own using code you already know.

**2. Licensing**

Some templates cost money, and some are free. What most people don't take into consideration is what type of license does the template give you. There are some out there that require you pay homage to the original developer. They have some ego trip, and require that you acknowledge them on your website. Other licenses state that you cannot change how the site looks. The developer spent all this time making the template the way they wanted it look, and they want to make sure you don't change that. The best types of licenses are the ones that say "here you go, do whatever you want, I don't care.". In fact, that type of license is called [WTFPL](http://www.wtfpl.net/about/). If you want to know more about licenses, you can check out [How to choose a license](http://choosealicense.com/).

**3. What is this template meant for?**

There's lots of different web application frameworks out there. These are different from CSS frameworks. Some of these include [Ruby on Rails](http://rubyonrails.org/), [WordPress](https://wordpress.org/), [Joomla](http://www.joomla.org/), [Drupal](https://www.drupal.org/), and many others. There's also basic HTML site templates. If you're running a joomla website, but you purchase a wordpress template, you're gonna have a bad time. Your best bet is to go with a static HTML theme template, and then pick apart what you need to fit into your web app's framework. Just means you'll need to do a little extra work :wink:

**4. Documentation**

Some template/theme developers will document their work heavily. This is a good thing! Having documentation will allow you to find how to use parts of the template. Sometimes the template will have a page that demonstrates several features of the template all on a single page. Generally you don't want every single feature on a single page. That could result in a clunky and confusing mess causing your visitors to be lost and possibly leave your site quickly. By having clean and concise documentation you can easily customize your template to better suit your needs.

## Hands On

## Resources

**CSS Frameworks**
* [Bootstrap](http://getbootstrap.com/)
* [Foundation](http://foundation.zurb.com/)
* [SkeletonCSS](http://getskeleton.com/)
* [PureCSS](http://purecss.io/)
* [GumbyFramework](http://gumbyframework.com/)

**Template Sites**
* [ThemeForest](http://themeforest.net/)
* [TemplateMonster](http://www.templatemonster.com/)
* [WrapBootstrap](https://wrapbootstrap.com/)
* [BootSwatch](https://bootswatch.com/)

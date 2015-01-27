# Web Basics

### How websites work, and the technologies used to run a website
To get started in web development you need to know the basics first. This course will cover how the internet works from your web request to the backend processing.

[View the Presentation](presentation.pdf)

## Lecture

### What is the internet?
The internet was conceived to be a distributed set of computers that could talk to each other without a central hub. This was actually first described in the RAND proposal in 1964. It's crazy to think how far that we have come today.

The first node of what we think of the modern internet was installed in 1969 at UCLA and was called ARPANET. By 1972 there were thirty-seven connected nodes. This in theory allowed scientists and researchers to share data across remote distances. What actually started happening was that they were using the network to share personal messages.

As the network grew it required a new protocol to be developed to help with the transfer of information. The new protocol was called TCP/IP (or just TCP). This protocol is still in use today, in use on your computer and even your smartphone. This protocol enables data to be broken down into packets, sent over the wire, and reassembled on the other end.

Over the course of the 70's and 80's the growing network attracted more people and the core ARPANET network became smaller. The growing number of networks eventually became to be called the internet.


### Browsers
Browsers have been around for a long time and come in many different flavors. We will focus on the history of the major browsers that made a difference in the history of the Internet.

**Short History of Web Browsers**

Nexus was developed in 1990 by Tim Berners-Lee. Nexus was really the first browser that allowed a user to visually traverse the web by clicking on hyperlinks and providing basic styling to pages. It also displayed images but in a separate window. Nexus was only available on the NeXT operating system that had a fairly small user base. Though, NeXT was later bought by Apple and provided the base for Apple's OS X operating system.

![Cern Screenshot](http://www.w3.org/History/1994/WWW/Journals/CACM/screensnap2_24c.gif)

The next major browser in history was Mosaic. Inspired by Nexus, Marc Andreessen and Eric Bina built a browser that supported inline images. Mosaic is credited with popularizing the web and was available on all major operating systems.

![Mosaic](http://www6.pcmag.com/media/images/252961-1993-ncsa-mosaic.jpg)

Hot on the heels of Mosaic, Marc Andreessen started the company Netscape in 1994. Netscape expanded on Mosaics features by providing support for Javascript, frames, and cookies. Netscape was eventually bought by AOL in the late 90's. Even with Netscape's wide popularity it was the first casualty of the browser wars.

![Netscape](http://www1.pcmag.com/media/images/252951-1994-netscape.jpg)

When Microsoft decided to enter the internet market they attempted to buy Netscape. After negotiations failed Microsoft built it's own browser Internet Explorer. IE obtained a install base of 96% by bundling it into it's Window's operating system.

![IE](http://www1.pcmag.com/media/images/252953-1995-internet-explorer.jpg)

In 1993 Apple released Safari. Safari was the first of release of what we call "modern" browsers today. For a long time Apple shipped the browsers Cyberdog, Netscape, and then Internet Explorer on their computers before deciding on creating their own. Safari introduced the powerful WebKit rendering engine which the first release of Google Chrome also used.

![Webkit](http://www2.pcmag.com/media/images/252955-2003-safari.jpg)

Firefox was born out of the Netscape offices in 2004. It is now run by a non profit company and is one of the only major browsers to be completely open source.

![Firefox](http://www4.pcmag.com/media/images/252949-2003-firefox.jpg)

Google Chrome was released in 2008 and as of today has the highest install base. Chrome introduced the V8 Javascript engine. The engine is open source and has provided the base for many other popular web technologies.

![Google Chrome](http://www8.pcmag.com/media/images/252954-2008-chrome.jpg)


## Hands On

**Browser Developer Tools**

A web developer uses the same browsers as any one else with a few exceptions. As a web developer you need the ability to view information about certain items on a page that don't normally matter for the every day user. The easiest way to do this is by extending your browser by enabling features and/or install extensions. Below we will cover the major browsers and show you how to make them more powerful.

Keep in mind this is great for viewing your own web pages to make sure everything is how you expect it to be or find problems. But you can also use these tools to view other websites to see how they make something work. It's the perfect way to learn new tricks.

**Google Chrome**

Chrome is already a powerful browser with some great built in features that just need to be enabled. To enable the developer tools in Chrome you just have to go to the tools menu and select Developer Tools.

This will bring up a window at the bottom of your browser full of information about the web page you are viewing.

![Dev Tools](https://dcavozvb40vtt.cloudfront.net/api/file/DQoMAeP2TQCxrHiWnGlI)


**Mozilla Firefox**

Firefox supports the great extension Firebug. First got to [FireBug](http://getfirebug.com) and follow the directions to install the extension. Then you can go to the Tools menu, Web Developer, Firebug to use the extension.

![Firebug](http://debugbrowser.com/img/f2.png)

**Safari**

Don't think that a built in browser can't deliver either. Before Chrome came around Safari developed these features. First you need to go to your preferences the enable the Develop menu.

![Safari](http://debugbrowser.com/img/s2.png)

After you have done that you can show the web inspector from the Develop menu.

![Safari](http://debugbrowser.com/img/s3.png)

**Internet Explorer**

Internet Explorer's options aren't as great as the above two. They are getting better and now provide a extension that you can [install here](http://www.microsoft.com/en-us/download/details.aspx?id=18359).


Here is a great resource for seeing how to enable developer tools in your browser of choice. http://debugbrowser.com

**Text Editors**

Editing files for the web is different than editing text for a document, say like using Word for a report. Web pages need to be plain text. Microsoft Word adds many things to a document that you as a user does not see.

There are many editors suited to editing plain text. Here are some options.

* http://www.sublimetext.com/
* http://macromates.com/
* http://atom.io/

You can also even use Notepad for Windows or TextEdit for OSX.

Being comfortable with your text editor is key as a web developer. It's the tool that we use the most and will allow you to be productive. No matter what text editor you use, get familiar with all of it's features and strengths.

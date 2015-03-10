# Git -r Done

### Turning weekend coders into starter devs

At this point we've done HTML & CSS, but those really aren't programming languages. They are necessary to know in the web business, however. Now that you have your website skills built. How are you saving your work? What would happen if your laptop died right now? Or if someone stole your computer. Would that website you've been working on for the past month be fine? We will be talking about [git](http://git-scm.com/) and all it's many wonderful uses, and why it's important to know.

## Lecture

**The Matrix**

Before we get started talking about git, we need to talk about another tool. We've all seen the movies, and remember the green alphanumeric codes flying across the screen, right?

![Matrix](http://wallpoper.com/images/00/39/46/81/movies-the_00394681.jpg)

The tool they're sort of emulating in this scene is not called "the matrix". It's called "the terminal". If you're on a desktop or laptop computer, then your computer already has this tool installed. Most non-programmers have probably heard of "DOS". [DOS](http://en.wikipedia.org/wiki/MS-DOS) was a program that was popular back in the 80's & 90's. That black screen with the white text where you typed in a few commands to load up a game from a floppy disk, or something like that. Well, this program was developed for IBM computers based off an even older system from linux and unix.

![DOS](http://screenshots.en.sftcdn.net/blog/en/2009/09/dosprompt.jpg)

This is an image of the Windows Command Prompt. On a Mac/Linux machine we have a similar program called the Terminal. The Terminal is where we can access a command line prompt just like you can with the Windows DOS command prompt. There is quite a big difference between what DOS allowed us to do, and what we have available to us in command line for a Mac/Linux/Unix (*nix) system. Even though they are different, there are still quite a big of similarities. Being a programmer, you'll spend 99.9999% of the time working with a *nix system command line. Even if you decide to be a Windows based developer, you'll still use tools more related to a *nix system unless it's with [Power Shell](http://blogs.msdn.com/b/powershell/).

In this lesson, we will only focus on the *nix based commands. So, let's get started!

**Command Line - Setup**

To get started, if you're on Windows, you'll need to download the [Git Bash](https://msysgit.github.io/) program. If you're on a Mac, congratulations, you have terminal installed already. Just click on your spotlight magnifying glass and type in "terminal". :bulb: *ProTip*: Save a link to your command line program for easy accessibility.

**Command Line - Usage**

Depending on what machine you're on, and how things are setup by default, we all may see something different. That's ok though. Once our command line app (terminal) is open, it's time to write our first terminal command. Type in `pwd` and hit <kbd>enter</kbd>. What happened? You should have seen a directory structure get printed out to the screen. In fact, this is the path to the folder you're in. Wait, what?!

**What's this for?**

The terminal allows you to fully control your computer. What about moving a picture on your desktop to your pictures folder? Well, you could do this a few ways. Right click the picture, click cut, go to the pictures folder, and paste. Or maybe do a drag and drop sort of deal. Still with me? Well, you can do this in terminal as well. It just requires that you write commands that tell the computer how to do that. Renaming a music file you stole... I mean downloaded leagally from iTunes.... Right click, rename, right? You can do that in terminal as well. How about seeing which process running on your machine is taking up the most memory? How about updating a text file. How about figuring out what your current IP address is? You might know how to do all of this stuff on your computer already, and that's great! You can do all of this right in the terminal as well. Aside from viewing pictures and videos, you can do just about anything. You can even visit web pages, listen to music, and check email.

At this point you might be asking yourself, well, if I can do all of this stuff outside the terminal, then why would I need to know how to use the terminal? Well, as a developer, you want to be fast and efficient with how you manipulate your computer. The terminal can be a ton faster and more efficient to get the information you need. Sometimes you might be working on a computer that lives in another country. You don't have access to a mouse to "double-click" an icon. Being a programmer means it's very important that you know how to use it.

**More command line commands**

* Going to our desktop - `cd ~/Desktop`
* Making a file - `touch phone_book.txt`
* Putting stuff in a file - `echo "702-555-1212\n" >> phone_book.txt`
* Making a directory - `mkdir text_files`
* Moving the phone_book.txt to the text_files directory - `mv phone_book.txt text_files`

Ok, you just did quite a bit of stuff. Hopefully self explanatory. Take a moment to look at your desktop. If everything worked properly, you should see a folder called "text_files" with a file called "phone_book.txt" inside of it. Let's do a few more things

* Renaming the file - `mv text_files/phone_book.txt text_files/rollodex.txt`
* Updating the file - `echo "800-123-1234\n" >> text_files/rollodex.txt`
* Show the files in the folder - `ls text_files`

Alright, go ahead and check the file again. You should see it has a new name. Open it up in some text editor. Hopefully you see something the two phone numbers in there. If not, then something has gone wrong. Ok, last command.

* Delete the file - `rm text_files/rollodex.txt`
* Show no files left - `ls text_files`

Boom, it's gone now. Now that the file is gone, let's step back a second and talk about each one of these commands.

**The `cd` Command**

The `cd` command stands for "Change Directory". This is the command you would use to navigate the computer. The text you write after the `cd` is the path where you want to go. We will refer to this first bit of text as the first "argument".

In this case, we wanted to go to the Desktop, but not just any desktop. We wanted to go to the desktop for your user profile. Most likely, you're the only person that uses your computer, but it is possible that you can have different user accounts for your computer. To specify yours we use the tilde `~`. So the full path becomes `~/Desktop`. For me, this expands to `/Users/jeremy/Desktop`. Much easier to type!

**The `touch` Command**

Using `touch` will create a file new blank text file if it doesn't exist. The first argument to this command is the name of the file you want to create.

**The `echo` Command**

The only thing this command does is print something to the screen. That's it. Try typing `echo "Hello"`. This didn't write to a file. All it did was print "Hello" to the screen. In our usage, we used a separate "shovel" command `>>`. This will push the output from the `echo` command and write it to the end of the file specified by the first argument. Ok, that was a lot to grasp, but you were able to run it!

**The `mkdir` Command**

This stands for "Make Directory". Simply means to create a new directory. The first argument is the name of the directory you want to make. If the directory exists, then you'll see an error.

**The `mv` Command**

This stands for `move`. In the terminal, we don't have a rename command, so this command is used for both renaming a file, and moving a file to a different location. The first argument is the file you want to move, and the second argument is the location you want to move to.

**The `ls` Command**

The `ls` or `list` command will list out all of the files or folders in a specific directory. You can use additional modifiers to learn more about these files like `ls -la` to list all the files in the directory, or `ls -Shal` which will list all the files with human readable file sizes in order of their size. If no path is provided, then it will look at the folder you're in now.

**The `rm` Command**

This is the "remove" command which allows us to delete a file or folder. The first argument is just the name of what you want to delete. If you want to delete a folder, you'll need to add a modifier `-r`. So if you wanted to delete that `text_files` folder you could just run `rm -r text_files`.

### Git

Now that we've covered a bit of what the terminal is and how to use it, we will talk about `git`. Git is a command line based program, or in other words, a program we run from the command line. It is used to store revisions of your work. It's mostly used for saving code, but there's people politicians that store laws and bills in git.

**Scenarios**

Let's say you're writing a report just like one you'd write for school. It's a 20 page essay on something interesting. You write your first draft, submit it, and get some changes. You make those changes, submit your second draft, and get a few more changes. You write your third draft, submit it, and are told that the first draft was the best. What do you do? Well, if you saved each draft with git, then you just roll back to the first draft and be done with it.

Ok, you have this 20 page essay going, but it's too much work. Changes are being made too often, and you just don't have the time. You want other people to help you out with it. What do you do? Well, with git, you just give access to the documents, and everyone makes their change, then you approve the changes and merge them all into a single document.

These are just use cases for a single file. When you're programming, you'll use hundreds of files or maybe even thousands at a time. Having a way to keep track of who changed what, when the made the change, and a history of every change made on every single file becomes a huge time saving factor.

**Github**

At this point, you're reading this text on a website called Github. This website is a place to store public and private files into groups called [repositories](https://help.github.com/articles/create-a-repo/). If you haven't already signed up for an account, then do so now. [It's Free!](https://github.com/). Once you've signed up, feel free to poke around a bit. There's quite a bit to do on here.

**Git command line**

Next thing we need to do is make sure we have our `git` program installed locally.

1. Open your terminal
2. type `git --version` (output will vary, and that's fine).
3. View the version of git installed. Any version will work.

If you got some error like "unrecognized command" or "command not found", then you will need to install git. [Windows](https://msysgit.github.io/) [Mac](http://git-scm.com/download/mac). For Mac users, you may get a popup talking about installing XCode. You will need to install this for it to work. Be sure you have at least 4GB of free space on your machine.

**Using git**

Let's create a new folder for some git stuff. Then we will add a file, and push it up to github. We will be running all of these commands from our command line.

1. Create a new folder - `mkdir github_files`
2. Move into that folder - `cd github_files`
3. Make a new file - `touch first_file.txt`
4. Initialize empty git repo - `git init`
5. Add the file into the empty repo - `git add first_file.txt`
6. Make a note about our first git usage - `git commit -m "my first commit"`

Ok, the first 3 commands were just basic terminal commands. The next 3 are the very basic git commands that you will use a lot, so let's dig into those.

**The `init` Git Command**

When you want to start a new empty repository, you'll use `git init` inside of the folder that you want to become a git repository.

**The `add` Git Command**

An empty repository is just like having an empty folder. If you want to save your pictures, you need to put them into your pictures folder. We run `git add filename` where `filename` is the name of the file we want to add to our repository. If you have a lot of files you want to add all at once, we can use a shortcut `git add -A`.

**The `commit` Git Command**

Once we add the files into our repository, we need to save our current state with a message. We can refer back to this message a year from now to remember what we did and why we just added those files. To use this command, we type `git commit -m "our message"`. The `-m` just says that we will be typing a message inside of the quotes that follow.

**Back to Github**

At this point we have created a new repository, added a file, and left a commit message. If our computer was stolen right now, our repository would be lost forever. It's time to push this up to github to save it.

Since you're on github.com already, and you should have an account and be logged in at this point, we can go ahead and create a new repository on github.

![New Repo](http://i.imgur.com/s1BGdYF.png)

1. Click on the "New Repository" button
2. Give it a name like "first_github_repo"
3. Click the "Create repository" button at the bottom

You'll see a bunch of stuff at this point, but we're really only concerned about one thing. There's a section that mentions "push an existing repository from the command line". We want to run those two lines from our command line.

4. Add a link to github - `git remote add origin git@github.com:jwoertink/first_github_repo.git`
5. Push code to github - `git push -u origin master`

Now if you go back to github, and refresh that page you were just on, you'll see your new repo sitting there!

**Congrats!**

At this point you've now learned about the terminal, and how to use git. However, this is just the super tip top of the iceberg. We suggest that you go and practice doing that a few more times. Below in the Resources section, you'll see some links to help you learn. Go through those, gather your questions, and bring them to us! Happy coding. :thumbsup:

## Homework

1. Run through the [Try Git](https://try.github.io/levels/1/challenges/1).
2. Take one of your previous HTML sites, and push it up to a new repository on github

**BONUS**

* Submit a pull request for this document fixing any typos, or clarity issues.

## Resources

* [Try Git](https://try.github.io/levels/1/challenges/1)
* [Git Branching](http://pcottle.github.io/learnGitBranching/)
* [Command Line learning](http://cli.learncodethehardway.org/book/)
* [Command Line Basics](http://blog.teamtreehouse.com/command-line-basics)

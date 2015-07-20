brilliant
===

This is a Wordpress Theme I'm working on built on to of `_s`, or [`underscores`](http://underscores.me/), if you like. 

If you're not familiar, `_s` is a theme meant for hacking, with the state goal of " "try turning me into the next, most awesome, WordPress theme out there". 

I SASSified my `_s` because ... well because it's better and I wanted to finally learn how to work with SASS.

![sassify _s](/pics-for-readme/sassify.png)

Project Description
------

I started this project as a portfolio theme for my fiancée's photography. Luckily enough, she didn't give me much direction or a deadline, so I took it as an opportunity to play around with some new technology and workflows.

You can check out my fiancée's site [Vicky Brigis Photography](http://vickybrigis.com) to get an idea of what the theme looks like in action.

How I'm working.
----

### Vagrant

One of the things I struggle with the most when getting started on a new development project is figuring out my workflow. I've been trying to simplify it and optimize it for a while. Both for wordpress development and development in general.

While working on [wealthbot.io](https://github.com/wealthbot-io/wealthbot), I learned from [our technical lead](https://github.com/vlad-ko) about [Vagrant](http://vagrantup.com) and man is it awesome. Trying to get wealthbot.io to run on OSX using the traditional approach: a combination of MAMP, plus MongoDB and making sure my PHP was up to date and my hosts file was setup correctly, etc, etc ... was a nightmare.

Once I downloaded Vagrant and Virtual Box though, it was a breeze. `vagrant up` and we're off to the races.

### Back to Wordpress

I've been eternally unhappy with my Wordpress environment, so I began to wonder if there was a Vagrant solution. Lo and behold, [VVV](https://github.com/Varying-Vagrant-Vagrants/VVV).

As long as you have enough space, and have Vargrant + Virtual Box installed, you can download VVV, run `vagrant up` and a brand new wordpress environment is running on a virtual server inside your machine!

### Codekit

As I mentioned, I'm using a SASS version of `_s` for this project, which means I need a way of "watching" and compiling my SASS to CSS. 

Not everything was easy-breezy thought, I had a hell of a time trying to get [gulp](http://gulpjs.com/) to work. Eventually I decided that was going to be a challenge for another project. [Codekit](https://incident57.com/codekit/) to the rescue. Drag my theme folder into Codekit and BAM, automatic SASS AND automatic browser reloading! On multiple devices! 

[insert picture on 3 devices]

How This Theme Was Built
----

OK, so I've pushed, prodded and hacked away at this theme and I'm really digging how Vicky's site came out. It's simple, picture forward and (in my opinion) has just the right touch of animation to make for an interesting presentation. 

About halfway through working on this project, I got the idea to share the theme to help others setup clean, simple Wordpress portfolio sites. And at the same time, hopefully, get some help cleaning up my SASS. 

This area is where I think the theme needs the most help. I did what I could, but I feel like I didn't take full advantage of the syntax, variables and other awesome Sassy features.

Still, it's possible and should be pretty easy, to customize this theme for your own portfolio. The structure section will explain how the theme works, so you know how to hack it.

How it works 
------

The structure of the site goes something like this:

**Header and menu**

![menu](/pics-for-readme/menu.png)

---------->>>>

**Featured Image & Title**

![Featured Image](/pics-for-readme/featured-image-and-title.png)

---------->>>>

**Post & Gallery**

![post](/pics-for-readme/post-and-gallery.png)

The home page is an index of all blog posts. The menu is custom made and I set it to anchor link to the post title.

The images on the home page are the featured images for each new blog post you create.

Each image links to a post, where we use Jetpack Tiled Galleries(http://jetpack.me/support/tiled-galleries/) to create a clean looking, interactive gallery. 

This means you can have as many new "categories" on the home page as blog posts. Which could get pretty unwieldy if you're writing a lot of new posts. 

That's now how I envision this theme being used. The idea for is less about content and more about making it easy to setup a few portfolio categories.

How its built
------------

Let's start from the top. 

### Variables
First things first, I updated the variables in `sass/variables-site/` to use the colors and fonts that I thought would appeal to Vicky. 

I played with these quite a bit at first, but end up using mainly whites and grays based on the advice of [this post](https://medium.com/@erikdkennedy/7-rules-for-creating-gorgeous-ui-part-1-559d4e805cda). Then I added a splash of color with `$color__background-body: #99CCCC;` figuring between that and the color rich photography, there was no need to get fancy. 

### Header and Footer

Next, I started hacking away at header.php and style.scss to get the header looking the way I wanted to.

I didn't like the way the custom_header functionality was implemented, plus I only wanted to use the header image on the home page, so I added 

`<?php if (is_front_page()) echo "home-background";?>`

to the `<header>` class and styled `.home-background` in style.scss. Was this the right way to do things? No idea, but it works for me.

Similar approach with footer.php, but I use the same footer across the whole site, so no need to get as fancy. 

By the way, header, footer, background and logo images (there's right, I have 2 logos) are in brilliant/inc and titled: 

* headerbg.png
* footerbg.png
* bg.png
* logo.png and minilogo.png

### Layout

I don't like [sidebars](http://blog.videofruit.com/website-sidebar/), both from a design perspective and from a conversion perspective. Not that this theme is built for conversions or anything.

So, I created brilliant/sass/layout/_content-nosidebar.scss to get *really* content focused.

### Home Menu

The idea here again, was to give it a little bit of style, animation and keep it clean.

At first I styled the menu in style.scss, but decided to move everything to sass/navigation/_menus.scss. 

### Home Page Scrolling

This theme is using the home menu to scroll down the page, not to navigate to other pages. So I created js/brilliant.js and added [this code from CSS Tricks](https://css-tricks.com/snippets/jquery/smooth-scrolling/).

### Featured Images

I copied index.php into home.php, but updated it to display both the featured image (`<?php the_post_thumbnail(); ?>`) and title of each post. Because I set `.content-area {width:100%;}`, the images cover my full browser but are larger than my screen's full height.

Using 
```
.featured{
    img {
      display: block;
      transition: all .5s ease-in-out 500ms;
    }

    img:hover {
        transform: scale(.69);
        margin: auto;
        }   
}   
```
made for a simple animation that made me happy and let me see the full photograph.

I added a post permalink to the featured images and decided to use the included Jetpack Tiled Galleries for my portfolio galleries. 

### Jetpack Tiled Galleries
In this way, each post is a new portfolio category and I use a the galleries to present the actual photos.

> With Tiled Galleries you can display your image galleries in three new styles: a rectangular mosaic, a square mosaic, and a circular grid. The rectangular and square tiled layouts also have hover-over captions to save space while making captions accessible.

Getting your own starter theme
---------------

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.


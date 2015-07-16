brilliant
===

This is a Wordpress Theme I'm working on built on to of `_s`, or `underscores`, if you like. 

If you're not familiar, `_s` is a theme meant for hacking, with the state goal of " "try turning me into the next, most awesome, WordPress theme out there". 

I SASSified my `_s` because ... well because it's better and I wanted to finally learn how to work with SASS. 

Project Description
------

I started this project as a portfolio theme for my fiance's photography. Luckily enough, she didn't give me much direction or a deadline, so I took it as an opportunity to play around with some new technology and workflows.

You can check out my fiance's site to get an idea of what the theme looks like in action.

How I'm working.
----

## Vagrant

One of the things I struggle with the most when getting started on a new development project is figuring out my workflow. I've been trying to simplify it and optimize it for a while. Both for wordpress development and development in general.

While working on wealthbot.io, I learned from our technical lead about [Vagrant](http://vagrantup.com) and man is it awesome. Trying to get wealthbot.io to run on OSX using the traditional approach: a combination of MAMP, plus MongoDB and making sure my PHP was up to date and my hosts file was setup correctly, etc, etc was a nightmare.

Once I downloaded Vagrant and Virtual Box though, it was a breeze. `vagrant up` and we're off to the races.

I was eternally unhappy with my Wordpress environment, so I began to wonder if there was a Vagrant solution. Lo and behold, VVV.

As long as you have enough space, and have Vargrant + Virtual Box installed, you can download VVV, run `vagrant up` and a brand new wordpress environment is running on a virtual server inside your machine!

## Codekit

As I mentioned, I'm using a SASS version of `_s` for this project, which means I need a way of "watching" and compiling in CSS. 

Not everything was easy-breezy thought, I had a hell of a time trying to get ?Grunt? to work with VVV. Eventually I decided that was going to be a challenge for another project. Codekit to the rescue. Pop my theme folder inCodekit, take a guess at a few settings and BAM, automatic SASS AND automatic browser reloading! On multiple devices! 

[insert picture on 3 devices]

More About How This Theme Was Built
----

OK, so I've pushed, prodded and hacked away at this theme and I'm really digging how Vicky's site came out. It's simple, picture forward and (in my opinion) has just the right touch of animation to make for an interesting presentation. 

About halfway through working on this project, I got the idea to share the theme, help others setup clean, simple Wordpress portfolio sites. And at the same time, hopefully, get some help cleaning up my SASS. 

This area is where I think the theme needs the most help. I did what I could, but I feel like I didn't take full advantage of the syntax, variables and other awesome Sassy features.

Still, it's possible and should be pretty easy, to customize this theme for your own portfolio. The structure section will explain how the theme works, so you know how to hack it.

Structure 
------

Let's start from the top. First things first, I updated the variables in `sass/variables-site/` to use the colors and fonts that I thought would appeal to Vicky. 

I ended up playing with these quite a bit and end up using mainly whites and grays based on the advice of this post. Then I added a splash of color with `$color__background-body: #99CCCC;` figuring between that and the color rich photography, there was no need to get fancy. 

Next I started hacking away at header.php and style.scss to head the header looking the way I wanted to. 

Getting your own starter theme
---------------

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.


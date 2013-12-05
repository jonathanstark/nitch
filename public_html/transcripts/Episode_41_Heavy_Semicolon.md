Episode 41 - Heavy Semicolon
---------------------------
><u>Jonathan Stark:</u>	 Hello and welcome to the <b>Nitch Podcast</b> for Friday, January 25th, 2013. I am Jonathan Stark.

><u>Kelli Shaver:</u>		And I am Kelli Shaver.	
><u>Jonathan Stark:</u>	And this week, enhancing site performance with Varnish, simplifying your web development workflow with Sprockets and responsive web design gets Rail. Please stay tuned, the <b>Nitch Podcast</b> is next.

><u>Jonathan Stark:</u>	Good afternoon!

><u>Kelli Shaver:</u>:		Hello! It is afternoon, isn’t it?

><u>Jonathan Stark:</u>	Yeah, not too bad. Late as usual.

><u>Kelli Shaver:</u>:		Yeah, that’s okay.
><u>Jonathan Stark:</u>	Yeah. We’ve got to…

><u>Kelli Shaver:</u>:		So I can just now start to wake up.

><u>Jonathan Stark:</u>	Yeah you were sleep coding last night.

><u>Kelli Shaver:</u>:		Yeah, that was really weird. I can’t say I have never done that before, I had taken a sleeping pill because I have been sleeping horribly lately and it didn’t work. And so I was still awake and I ended up staying up and doing some work and it finally kicked in a few hours later. And I just got incredibly tired and so I mean it was really late so I just crashed in the Futon in the office and I woke up this morning to discover at some point between going to bed and getting up, getting up at 11am to do the podcast, I had written some really bad CSS code.

><u>Jonathan Stark:</u>:	Well, that’s no offense for the clients. Would you build them if you were sleeping while you’re doing it?

><u>Kelli Shaver:</u>:		Yeah, yeah. I don’t know, I mean it worked too, it’s just really bad. I mean there are more efficient way in doing it but it did work.

><u>Jonathan Stark:</u>:	Well you have done a lot of coding without seeing so I mean it’s just one small step to actual sleeping.

><u>Kelli Shaver:</u>:		Right, right. You know one small step to unconsciousness.

><u>Jonathan Stark:</u>:	That’s cool. A new level of efficiency.

><u>Kelli Shaver:</u>:		More than efficiency.

><u>Jonathan Stark:</u>:	Yeah. So I had a funny thing this morning. It was podcasting a little later than we planned even we are both up before the crack of noon for once to—because it was just so loud in my office with the ceiling taking down.

><u>Kelli Shaver:</u>:		Oh yeah.

><u>Jonathan Stark:</u>:	Yeah. It was like it’s a really awful, all the tiles and ceiling, with a down between monster Vack and Cooper running back and forth between the garbage can and the land fill, it’s like you know, it’s really loud. Really loud.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	And so I got used to it and Eric came it and wants to print something out and it turns like she’s staring at me. I am like, *“What?”*
>>And she goes, *“I am really sorry.”*

>>I am like, *“What are you talking about?”*

>>She’s like, *”It’s so loud down here. Why didn’t you tell me?”*

>>And I am like, *”I am totally used to it.”*

>>But it was like dogs and vacuum cleaner and it’s wicked loud.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	So anyway, it’s funny. It’s like, *“You should really go upstairs and that we should switch.”*

><u>Kelli Shaver:</u>:		Sound funny, yeah. You got to do little more soundproofing with what you did on your ceiling.

><u>Jonathan Stark:</u>:	Oh yeah, I am going to do that up. I mean I don’t know what we are going to do but exactly we are still on the planning phase but it’s going to get down right.

><u>Kelli Shaver:</u>:		Going to get upgrade. Nice.

><u>Jonathan Stark:</u>:	Yeah. I am like already picking up shagged rugs, wall to wall. I’ve been only half kidding with my suggestion to cover the walls the walls and ceiling with green pool table felt which…

><u>Kelli Shaver:</u>:		Nice.

><u>Jonathan Stark:</u>:	Yeah so that would be perfect.

><u>Kelli Shaver:</u>:		It’s like dogs are playing poker on the wall.

><u>Jonathan Stark:</u>:	Exactly, yeah. So a little bit of housekeeping. Apologies to the dear listeners, I just totally spaced last week and didn’t post a podcast on Friday morning.

><u>Kelli Shaver:</u>:		Shame on you.

><u>Jonathan Stark:</u>:	It was so weird, I was like, *”to to toot to do Oh my God, I forgot to post the podcast!”*

><u>Kelli Shaver:</u>:		That’s never happened before.

><u>Jonathan Stark:</u>:	No, I was just totally spaced. It was weird. So anyway, I think I put it up late Friday night and stuff but I know I am a big podcast listener and when there is a show that I would like to listen to every weekend and it’s not available, it’s awful.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	So apologies.

><u>Kelli Shaver:</u>:		You just single handedly crushed the hopes and dreams of approximately 11 people.

><u>Jonathan Stark:</u>:	Who probably don’t listen to it immediately anyway? So okay, I am just on the off chance. I will try and do better in the future. Cool! This week, we’ve got some pretty exciting stuff, projects and I literally have a project finished and a new project starts on this same exact day yesterday.

><u>Kelli Shaver:</u>:		Yeah, me too.

><u>Jonathan Stark:</u>:	Yeah.

><u>Kelli Shaver:</u>:		Except I have two new ones to start yesterday.

><u>Jonathan Stark:</u>:	Wow, yeah so those would be fun to talk about in the future as they come along and even in the conversation that we have today with setting up the servers for one of them. And I think the big news is I am trying to think timeline lies. Less new recorded was Wednesday as usual and your big boot strap responsive site wasn’t posted yet. That wasn’t live yet but by the time the podcast went live, it was up.

><u>Kelli Shaver:</u>:		Yeah, so you did link to it to show notes.

><u>Jonathan Stark:</u>:	Yes, so that was in case you missed the show notes if you don’t actually go to the Nitch Website the…

><u>Kelli Shaver:</u>:		We should mention the website, we haven’t in a while.

><u>Jonathan Stark:</u>:	Yeah that’s true. Yeah, who knows where people get their feeds from iTunes or player FM or whatever, stitcher. Yeah, <b>http://nitch.cc</b> is the home of the audio files and you know, you could just go to */podcast* for the podcast for the homepage. And we should actually update the main home page because some of the information should become much more of the podcast lately so we should update that and maybe even have a reader at the about page. But anyway, if people want to go there and check it out, there’s a whole bunch of—this is episode 41, so there is a bunch of good back stuff that you could check through while you’re waiting for me to post the podcast. Yeah, so image.com.

><u>Kelli Shaver:</u>:		Yes. 

><u>Jonathan Stark:</u>:	That was the domain name that we are talking about last week as the…

><u>Kelli Shaver:</u>:		Yeah. Totally awesome domain name. 

><u>Jonathan Stark:</u>:	Yeah, it’s almost too generic. It’s like I have a trouble talking about you know, working for image.

><u>Kelli Shaver:</u>:		And like what? 

><u>Jonathan Stark:</u>:	Yeap.

><u>Kelli Shaver:</u>:		Who’s that?

><u>Jonathan Stark:</u>:	Yeah. So folks you could check <b>*image.com*</b> and see Kelli’s implementation of the design, super cool.

><u>Kelli Shaver:</u>:		Thank you very much.

><u>Jonathan Stark:</u>:	It came out really good and it’s—not only it is good but it’s such a huge upgrade from the previous site which people probably you know, wouldn’t have seen or been familiar with but it’s very nineties kind of centered square fixed with type of things. 
><u>Kelli Shaver:</u>:		760.
><u>Jonathan Stark:</u>:	760, That’s how old it was.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	So it’s really nice tons of carousels, lots of good looking stuffs in there. And, almost on the exact same day, our friends in Infinum who we worked in a bunch of different things, they released a new version of their website at Infinum.co and…

><u>Kelli Shaver:</u>:		Let’s check it out.

><u>Jonathan Stark:</u>:	Oh yeah, I haven’t seen it. It’s really nice also. It’s very professional, it’s not super flashy but they did a really nice job on it and it was funny because both websites basically came out within you know, 48 hours with each other. They went live. And I almost spent, I am going to say 2 hours, just kind of navigating around each site on just the devices on my desk to see if there’s anything; a monkey or anything like that. And both sites just shined on everything I tried which is you know, I am talking everything like an old iPod touch, iPhone 4, a Blackberry bold 9700 which is…

><u>Kelli Shaver:</u>:		Are you kidding?

><u>Jonathan Stark:</u>:	Oh no.

><u>Kelli Shaver:</u>:		I am amazed.

><u>Jonathan Stark:</u>:	Yeah, there are some—there’s a little wonkiness with the background size, it doesn’t work right with an old blackberry so there is a little bit wackiness on the blackberry, I think on *image.com*.

><u>Kelli Shaver:</u>:		Yeah, on the main carousel.

><u>Jonathan Stark:</u>:	Yeah. And blackberry playbook and kindle fire and couple of different desktop browsers on different machines that are—and everything worked great. I was—it’s really impressive to me that, I know we say this all the time but I am sure that like you or the guys at Infinum, you guys didn’t test the websites on the you know—I have a touch screen, like a 7-inch touch screen Android 1.5 Tablet that is used to run my printer. It’s like the control panel for my printer. I am pretty sure you guys don’t test on that.

><u>Kelli Shaver:</u>:		No.

><u>Jonathan Stark:</u>:	But it worked! You know, it’s like it’s a bizarre screen size with an operating system that no one would think was still on the wild. And it’s totally usable I mean, if you approach designs sort of some, you start from small and build your way up from there then with a flexible grid and just general relatively simple response to web design techniques. I mean I know that you struggle with bug and stuff and getting things pixel perfect but in terms of just accessibility maybe not gorgeousness and pixel perfection but in terms of accessibility, both sites are just… the approach is starting small and making your way up with the designs, it just serves you really well. It ends up being a lot less than work in a long run.

><u>Kelli Shaver:</u>:		Oh yeah, hands down. It’s definitely the way to go and people think it’s going to be more work getting into it, and it may feel like a little bit more set up but in the end that you do, you end up saving yourself a lot of time and the code that you end up writing is being a lot cleaner.

><u>Jonathan Stark:</u>:	Absolutely, yeah. You just get so much for free. You know, you just like, I mean every time I pick up a device. I was like, *“Yeah. It totally works.”* There is like nothing to fix here or like something super minor like a back end or something. At similar—in related news, I also got a new windows phone because my windows phone is dead and there are some really interesting issues with the browser there that I haven’t figured out yet but we can talk it offline maybe do it on the podcast next week. But something is going on the web keep browser on, the Internet Explorer in window’s phone because it thinks it’s desktop. Like most people think that there is something wrong in the media queries on the windows phone. Because it thinks it’s a desktop, I don’t know. It seems like, I haven’t quite figured it out yet.

><u>Kelli Shaver:</u>:		That is kind of sucks but it also kinda doesn’t surprise me. 

><u>Jonathan Stark:</u>:	Yeah. I think it’s, I can’t tell if it’s actually the browser or if it’s something that is set on the phone cause I don’t know if you noticed on the Android phones but doing in this things instead of like zooming, like by default it would wrap that paragraph text which I find very useful but it’s really got to be confounding into the designers who care about stuff like controlling stuff like that. And I don’t know if it’s something like that or it’s just trying to make the text easier to read or what is going on there but I figure it out and let you know.

><u>Kelli Shaver:</u>:		We ended up seeing screenshots.

><u>Jonathan Stark:</u>:	Yeah, as soon as I figure out. But yeah, I got the Lumia 920 which is a tank of a phone. It is humongous.

><u>Kelli Shaver:</u>:		Is it really?

><u>Jonathan Stark:</u>:	Yeah I think it’s weird because I am drawn to it like when I have like 5 different phones on the table to choose from, I tend to reach for that one first if I am going to be browsing the web because it’s—I mean the screen is just absolutely gorgeous and it’s 5-inch diagonally so it’s a good size, it’s really. But the problem with it in terms of using as might an actual phone is that it’s just too big to use one hand and I can reach only about 3 quarters of the way up the screen with a normal one-handed grip. 

><u>Kelli Shaver:</u>:		Yeah, I have a Galaxy S II and that feels too large to me.

><u>Jonathan Stark:</u>:	Galaxy S II is a perfect size for my hand and if you go any bigger, it’s just pushing it but if you go any bigger, it gets too hard for me to use one hand which is basically out of the range for me, you got to be able to use one hand.

><u>Kelli Shaver:</u>:		Yeah, like the iPhone and then the other Android phone that I have are the perfect size for me.

><u>Jonathan Stark:</u>:	Yeah, other thing about the galaxy or the Nexus S—do you have an XSS?

><u>Kelli Shaver:</u>:		No. I have Galaxy S II, I don’t have an Nexus phone.

><u>Jonathan Stark:</u>:	Gotcha.

><u>Kelli Shaver:</u>:		That would be very nice.
><u>Jonathan Stark:</u>:	Yeah I got the nexus S and I am not sure how big that screen is but it’s bigger than the iPhone for sure but it’s not as big as—I am going to guess it’s a 4 and a quarter or 4 and a half inch screen. And the back is rounded in a way that the chin sits in your palm in a way that makes it tough to drop where the Lumia 920 is just like a slab.

><u>Kelli Shaver:</u>:		Yeah, like the iPhone.

><u>Jonathan Stark:</u>:	Yeah, exactly. And it’s you know, everything is very round and sort of on the slippery side so it’s really hard to—I just can’t use it as my real phone but it’s really a nice phone.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	Anyway, we went off on a tension there but device testing I guess, I was going to say this later on the show but speaking of all the device testing and response to web design, I had a I think a milestone moment with I think response to web design the other day that I think it’s worth mentioning which is that I, you know, started a new project with a big site redesign for a well known US retailer whose name I cannot mention yet.

><u>Kelli Shaver:</u>:		Yes.
><u>Jonathan Stark:</u>:	Contractually and in that contract, it actually calls out you know, response to web design on all the meetings leading up to what everyone is talking about response to web design and so now it’s funny because you know, like Ajax response to web design it just sort of because casual term for a bunch of techniques or almost like a mindset that spawned you know, new workflows and new approaches and new techniques. But giving it that name allows normal people to talk about it in a way that now it has to be reviewed by lawyers which I think is hilarious. I mean, I can’t imagine being Ethan M. Can you imagine being Ethan M. and be like he made up a term that is now like a legally binding.

><u>Kelli Shaver:</u>:		Like legally? Yeah.

><u>Jonathan Stark:</u>:	It’s so cool.

><u>Kelli Shaver:</u>:		I have tried that on a few occasion but I haven’t met with nearly as much success. 

><u>Jonathan Stark:</u>:	Yeah, it’s tough. He added a word for Lexicon.

><u>Kelli Shaver:</u>:		It’s in the dictionary.

><u>Jonathan Stark:</u>:	Yeah. So that’s very cool but that response to web design is officially hit the big time. And it’s nice that this large you know, big corporation with lots of retail time. I don’t know how many but you know, it’s sort of actually international and the value like people are—the organization like that is starting to recognize the value of a one web approach because they now spend a year or two years maintaining probably, definitely one media multiple sites at different URLs. You know, like an iPad site, a desktop site, a phone site, an iPhone site, you know basically, a dumb phone site for phones who don’t have a java script or cool Blackberrys that have screens or whatever. And it’s crazy like maintaining these things is impossible especially in that company, there is a lot of red tape request and a lot of approvals. You know, if you multiply the number of properties that you’re users are going be—your guest are going to be accessing, you just—you’re like exponentially increasing any amount that you have to do. You can’t do it because it’s not possible.

><u>Kelli Shaver:</u>:		Right, things get to—never mind the amount of in addition in the amount of effort that it requires to and things just get too scattered.

><u>Jonathan Stark:</u>:	Yeah.

><u>Kelli Shaver:</u>:		They just can’t keep it organized.

><u>Jonathan Stark:</u>:	Yeah, like the IT department. IT department and large organizations are historically, they are just like crushed all the time.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	You know, back log, always. And so they are just like. *“Oh okay we’re going to do a rebrand of something.”* And then you are like, *“Okay, that’s going to touch you know, a million web pages across 35 sites.”* You know, it’s like, *“Come on, you can’t do it!”*
><u>Kelli Shaver:</u>:		Yeah.
><u>Jonathan Stark:</u>:	It’s a huge waste of resources . Yeah, right. So it’s very reactive approach like, *“Okay, we’re going to put up this fire.”* You know, a new site that can put up this fire. A new fire comes out, let’s put up that fire. So I don’t know if you noticed but there was a—I am trying to think what it was but somebody just used a six inch tablet. Now every size is covered like in a smooth continuum from like small touch screen up to large touch screen. There is not an inch in there that we don’t have to…

><u>Kelli Shaver:</u>:		I have something that I noticed. This is why I am not a huge advocate of putting your responsive design immediately at break points specific screen resolutions.

><u>Jonathan Stark:</u>:	Yeah.

><u>Kelli Shaver:</u>:		Yeah, like you put one thing and then it starts weird.

><u>Jonathan Stark:</u>:	Yeah, just let the content tell you where to break. I did not—that was something that I realize later. I was like, why am I—it is out of laziness. I was like, *“Why am I going around?”* Like this is supposed to be device independent, why am I looking up the resolutions of this devices to put in my media cruise.

><u>Kelli Shaver:</u>:		Yeah. Just add one thing and starts looking screwy.

><u>Jonathan Stark:</u>:	Right, you just start small and it could really make you narrow and then just start making it bigger and it’s like, *“Oh, these lines are too long, how big do I have for my window?”* Like a mimicry.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	So anyway, so response to web design for the win as always.

><u>Kelli Shaver:</u>:		Yes, very nice.

><u>Jonathan Stark:</u>:	Alright. Yes, so we have couple of interesting things to talk about. Especially interesting to me because I don’t know anything about them really, other than what you’ve told me so looking forward to hearing about Varnish next which is something that—so we are starting something new together, something new project together. We are one, one of the tasks we have provision some AWS. Easy to instances.
><u>Kelli Shaver:</u>:		Yes.

><u>Jonathan Stark:</u>:	And you know, having just gone through that process. Sounds like you really got the time to assign at this point and Varnish is one of the things you install. What’s Varnish?

><u>Kelli Shaver:</u>:		Yeah, that is a pretty new one in my tool set. Actually it’s very nice to work in a project with you again, never been in a while.
><u>Jonathan Stark:</u>:	Yey.

><u>Kelli Shaver:</u>:		Yey. Varnish is a caching server that it access as a reverse proxy to your web server so you’re request come in and it goes through Varnish and if Varnish doesn’t have a cache then things are retrieved from your web server and cache into Varnish and serve back to the user. God, not user; I have been doing that a lot lately.

><u>Jonathan Stark:</u>:	Yeah, me too.

><u>Kelli Shaver:</u>:		At least your last project have taken their toll on my…

><u>Jonathan Stark:</u>:	Yeah, maybe we have a new Nitch Bingo.

><u>Kelli Shaver:</u>:		Maybe.

><u>Jonathan Stark:</u>:	It’s drinking game word, anyway.

><u>Kelli Shaver:</u>:		Yeah. But yeah, it’s a caching server for caching web pages and your assets and you know, I have been hearing about it for a while but I’d never really given it so much of a look and I setup yesterday we had a looking on other—I do work on a couple of servers that we are having performance issue so I was looking at different caching options for them and ended up not using Varnish because I didn’t really need to after getting some opted caching PHP. But, yeah I’ve finally spent to take a look on Varnish and the setup was just super easy. Super easy to setup and in this particular case, I’ve found out that the defaults of what really worked well. A lot of things you can configure and tweak in just 2 minutes. The setup was so easy and you’ll be crazy not to do it.

><u>Jonathan Stark:</u>:	Cool. And I have million questions you probably don’t know the answers to cause it’s kind of a new thing but I am going to ask anyway.
 	
><u>Kelli Shaver:</u>:		Okay.

><u>Jonathan Stark:</u>:	Maybe in a few episodes.

><u>Kelli Shaver:</u>:		Maybe one at a time, okay?

><u>Jonathan Stark:</u>:	These are the, if you don’t mind, silly questions I guess. How is this different from regular caching? Like if we, like in a regular internet caching, is this just like a more robust configurable thing?

><u>Kelli Shaver:</u>:		You mean like internet regular caching is in the browsers and cache headers?

><u>Jonathan Stark:</u>:	Yeah, I mean obviously, it’s configured differently but let’s say CEI for example.

><u>Kelli Shaver:</u>:		Yeah, like the server size for example.

><u>Jonathan Stark:</u>:	Yeah. I don’t know, it’s like, it seems like this is already—what about memcached? I don’t know how to say that, memcached D or memcached, seems like it’s the similar thing.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	But usually people talk about that when they are having database problems not like web server.

><u>Kelli Shaver:</u>:		Yeah, memcached is more specifically for data base caching. Varnish is for [Inaudible 00:24:11].

><u>Jonathan Stark:</u>:	So like static stuff?

><u>Kelli Shaver:</u>:		Yeah, all of your static stuff and I suppose some of your dynamic stuff too provided the content hasn’t changed.

><u>Jonathan Stark:</u>:	You know, what I mean is it sounds like caching.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	So I guess it’s just some kind of, I mean to me it’s kinda like—I feel like it’s the server side version of app cache, which I am super familiar with, where your browsers going to cache stuff but things are going to expire and go away a lot with regular caching but with app cache, you can be really specific about, *”No, this is never going to expire, I want this be served from the local browser cache.”* So I have a feeling that is kind of what it is.

><u>Kelli Shaver:</u>:		One of the other thing that I like about it a lot is it does work as a reverse proxy which you and I had talked about setting that up before and  actually using ingenex as the proxy. And so for instance you could like use it as your caching lair between like a down server running on port three thousand that is accessible on port AT34 via Varnish, that sort of thing. So having the ability to set it up like a sort of proxy layer between the two, just caching aside just having an easily configurable reverse proxy is handy and right.

><u>Jonathan Stark:</u>:	Yeah, that is true.
><u>Kelli Shaver:</u>:		So it’s kinda like these are the combination. The two, it just feels really harmful for me. 

><u>Jonathan Stark:</u>:	Yeah cool. So you mentioned there app code caching or am I saying that right?

><u>Kelli Shaver:</u>:		Right.

><u>Jonathan Stark:</u>:	This  is the first time I’ve even heard that term so—you want to describe that a little bit? Cause you have some drastic improvements.

><u>Kelli Shaver:</u>:		Yeah, it was pretty incredible. App code caching for PHP, what it does. Caching up PHP is an interpretative language. Whenever you make a request to the server, the server executes/interpret the PHP file when it’s requested and serves it back to you.

><u>Jonathan Stark:</u>:	Yep.

><u>Kelli Shaver:</u>:		And the app code caching, what it does is it caches in memory that compiled interpretative stage of the PHP file. So the server doesn’t have to interpret it every time you access file.

><u>Jonathan Stark:</u>:	Gotcha.

><u>Kelli Shaver:</u>:		It just checks and says, okay nothing’s changed. We got a cache version that is already interpreted and it was stored in the memory and send that back.

><u>Jonathan Stark:</u>:	Cool. Is it something that you—what level of the stack you implemented that? Is that something you put in your code or is that like a server configuration or web server?

><u>Kelli Shaver:</u>:		No, it’s a server configuration and there is a few different webs out there for doing it. I use APC which I think is an acronym for Alternative PHP Cache because I don’t think it was the default for a long time but I think it’s the one now that seems to be the most maintained, the most active.

><u>Jonathan Stark:</u>:	Yeah, cool.

><u>Kelli Shaver:</u>:		And it was super easy to install. We’re using a bunch of web stack and I mean it’s just as simple as running app gets and install the PHP APC and restarting the web server.

><u>Jonathan Stark:</u>:	Wow.

><u>Kelli Shaver:</u>:		Yeah. And of course there is all those kind of configuration, you can deal with that as well but just the basic install, that is all there is to it.

><u>Jonathan Stark:</u>:	Yeah, and I don’t know if you can share that image that you sent me but I mean it was like a drastic fall off in CPU usage from you know, spiking at a hundred percent to immediately fell off the cliff and you are like down around 20% CPU usage.

><u>Kelli Shaver:</u>:		Yeah and it kept on being lower from there. But yeah, we can share the file I think. I’ve removed all the identifying stuff from it so…

><u>Jonathan Stark:</u>:	Cool. I mean it’s shocking you know, to just move to free to say just like app code and then restart and then wow.

><u>Kelli Shaver:</u>:		Yeah and Varnish is a little more setup that but between the two of them like they are both so simple and easy to setup and configure like really there is no reason not to.

><u>Jonathan Stark:</u>:	Right. That was my next question actually. There must be some cons so you know, for example the data that your caching in the PHP example is from a database so theoretically you could be sending out old data to your site visitors.

><u>Kelli Shaver:</u>:		Yes theoretically you could. I am not sure how it handles it because I didn’t notice that problem. Like I would be making some updates and bug fixes last night and I would change things in the database you know like immediately refresh the page and everything would be current and up to date. So I am not sure how it handles that. It seems to be smarter than I ever does.

><u>Jonathan Stark:</u>:	Yeah.

><u>Kelli Shaver:</u>:		I can’t let it just do its thing and not worry about it.

><u>Jonathan Stark:</u>:	Yeah, it must be super sophisticated of course. I know it’s a very complicated piece of software so it would be interesting to look into that. It’s the same. I did looked at the Varnish a little bit into it and there were a lot of configuration options for expiring stuffs and being very surgical about you know, like everything on this like partial path should get expired more regularly than other things or presumably they could be expired in response to some event that took place but you know, that is all year long. Stuff is going to be—the server side stuff is going to be beyond me.

><u>Kelli Shaver:</u>:		Yeah, I don’t know when I turned into like it’s a man type stuff. I don’t know, I don’t know when I sort of fell onto that role but...

><u>Jonathan Stark:</u>:	Well you are good at it.
><u>Kelli Shaver:</u>:		…but it’s interesting stuff and I am learning new things about it every day.

><u>Jonathan Stark:</u>:	Cool.

><u>Kelli Shaver:</u>:		It’s just the more thing you could do, wow!

><u>Jonathan Stark:</u>:	Yeah, I mean it’s getting to the point where it’s not like premature optimization I mean. I think all of these things are things that were necessary like when there is a problem that in the olden days we would have probably thrown more servers at it or like a load bouncer or you know, faster CPU or something you know, instead of getting software, instead of more hardware. Hang on a second, my door bell is ringing. 

><u>Kelli Shaver:</u>:		Okay.

><u>Jonathan Stark:</u>:	Door to door salesman, it’s like…

><u>Kelli Shaver:</u>:		It’s like 9 degrees there.

><u>Jonathan Stark:</u>:	If that. What do you know?

><u>Kelli Shaver:</u>:		Like go home and have some hot chocolate.

><u>Jonathan Stark:</u>:	I was hoping he would be a guy holding a snow shovel.

><u>Kelli Shaver:</u>:		Yeah. If it was a little offer to shove off your driveway that would be different.

><u>Jonathan Stark:</u>:	Exactly.

><u>Kelli Shaver:</u>:		Door to door sales in this weather, that is ridiculous.

><u>Jonathan Stark:</u>:	Yeah. So anyway, so yeah the… I guess we worked kind of stuff and point it anyway at the server site configuration of Varnish and App code. 

><u>Kelli Shaver:</u>:		Yeah. Fun stuff.

><u>Jonathan Stark:</u>:	Yeah but definitely better than me . Okay, so another sort of site server thing but in a different room, you mentioned something called Sprockets which another thing that I never heard of. That sounds like its pretty cool for simplifying the dev work flow on the server side?

><u>Kelli Shaver:</u>:		Yeah. Sprockets and in particular with regards to the [Inaudible 00:32:37] industry which uses Sprockets but of course if you are not using Rails during other types of web development, you could install the Sprockets jam and get the same sort of recent functionality. And this is nothing probably new for anyone who has been doing for Rail apps for a while but if you haven’t been and like me, if you haven’t used Rails since 2.1.3 and then you find yourself going back to it, there is a lot of asset management built in to the Rails framework and using Sprockets. And what Sprockets is, it’s an asset management library for compiling and serving all of your web assets so you can just write your coffeescript or SASS or less files and not have to worry about any sort of manual compiling or concatenation or metification or anything like that and put Sprockets in your apps or use Rails asset management, either one, and it will compile and metafile and serve everything for you either at run time or you could click compile.

><u>Jonathan Stark:</u>:	Yeah, so this makes coffeescript for example make way more attractive to me.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	Because I did take your advice and install what is called code kit which you basically watches folders and compile stuff like that locally for you. But there is still something about it that I don’t know something about it that it’s a lot better doing it like that. And Yoman actually offers a similar kind of functionality if the command line is not as gooey friendly.
><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	But in both of the things, it makes life a lot easier when you are working with like SASS or coffeescript or something when you like to be something precompiled. But for some reason having on the server like I don’t have to worry about it, I don’t have to configure my dev environment, I don’t have to mess about it at all, I can just you know, hit save and I am done.

><u>Kelli Shaver:</u>:		Yeah, like I have reviewed code kit for months. And I think it was great program and I use it for everything else that is not a Rails app but doing the Rails app and not even having to—not having to setup the project, not having to touch any of the code or manually go in and compile something because a file got skipped or just write the code in the folders and put it in the proper folders and it’s there, it’s done and it works

><u>Jonathan Stark:</u>:	Does it actually create CSS files for example? The web code kit does?

><u>Kelli Shaver:</u>:		There’s a precompiled quick test that you can run that will do that. Otherwise, it will just compile everything. I am not entirely sure if it compiles it like at—you see, it behaves differently depending on what sort of environment you are doing it. Doing it like for instance your development environment behaves slightly differently than it does during production environment development. And that is based on your Rails environment variable and for instance in development, it doesn’t concatenate and metafy everything, you just put in your stall sheet and help her tag interview and then you run your app and give you the source that will link  to like say maybe six or seven different java script file that you are using.

><u>Jonathan Stark:</u>:	Right.

><u>Kelli Shaver:</u>:		And then in production, that all just magically becomes one file that is concatenated and metified and just one link into it and haven’t change everything.

><u>Jonathan Stark:</u>:	Awesome, yeah. That was my next question, I was going to ask what your ideal link for style sheet. Is it like .CSS? But it’s Rails and you are not actually putting that there, you are putting files into tag…

><u>Kelli Shaver:</u>:		Yeah, you just put it in the style sheet. You just put the Rails view helper and point it to the main application, CSS application or java script file.

><u>Jonathan Stark:</u>:	And it figures everything out.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	Yeah, that is really cool and a really good argument for—I mean you could do this at any time kind of template language but it sounds so baked in. You know, to be able to switch from like dev to production and not have to go like update your tags you know. ‘Cause you’re naturally in development, you want to get all the list if you have like a lot of CSS files, you want to keep separated just so your head doesn’t explode.

><u>Kelli Shaver:</u>:		Yeah. So when you are sleeping and you need to work on your project, you can.

><u>Jonathan Stark:</u>:	Exactly. It’s tough to browse thousand of lines of CSS in your sleep. It is much easier when there is just a few hundred on it. So I am getting more… I keep on saying on other episodes like, *“Oh yeah.”* You know, less and coffeescript, I am going to take the points of those and Rails too and all the stuff. And every time I have a project, it’s like, *“I should it got it by hand”*. I don’t know. Cause the thing is like all the coding that I am doing is either super compartmentalized to like it’ll be specific little module of a huge website where I am in no control over or what.

><u>Kelli Shaver:</u>:		It’s a built process.

><u>Jonathan Stark:</u>:	Yeah, none of that.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	Or it’s like basically a small kind of code, yeah like a weekend project, right?

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	So it’s like all of the big projects are I would not end up anywhere near. On all the big projects that I am working on, I am just doing like just the java script and it some cases, just the java script for a specific big thing. So, you know, and I am fairly anti you know.

><u>Kelli Shaver:</u>:		Yeah, you are not managing the entire project to have that sort of control over the process.

><u>Jonathan Stark:</u>:	Yeah, cause all of the decisions have been made before I even showed up. So it’s interesting but I am playing into it more and more because it’s, for example the coffeescript, the thing I love the coffeescript is that, conceptually is that, you are basically linking your stuff into Rail time. So it’s not going to, you are not going to have to—I think I really link java script as it is. I am like a heavy semicolon user etcetera but it would be nice to not even have to worry about it and just have it in some pretty nice syntax and you know, take a look at it.

><u>Kelli Shaver:</u>:		Yeah. I have doubled in it and I like it. I just haven’t sort of made the leap yet because of just the amount of, admittingly, the effort involved to learn that doing.

><u>Jonathan Stark:</u>:	Yeah, I guess.

><u>Kelli Shaver:</u>:		I am too busy figuring out how to cache things on the server.

><u>Jonathan Stark:</u>:	Right.

><u>Kelli Shaver:</u>:		If only there is so much time.

><u>Jonathan Stark:</u>:	Yeah, speaking of on the similar topic, not too much of the tension, I asked on twitter the other day—what was the question. The question was for web developers, *“If you are using IDD, what IDD do you use?”*

><u>Kelli Shaver:</u>:		Yes.

><u>Jonathan Stark:</u>:	And I was shocked by the response. I thought that it was going to be old people, I thought like sublime text to and text me or basically going to be the answer.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	Except maybe for Windows people who maybe using something else. And I did get a few sublime text too. I think I only got one person still using Textme and multiple using VAM which blew my mind.

><u>Kelli Shaver:</u>:		I know a lot of Rails developers use VAM.

><u>Jonathan Stark:</u>:	That is so shocking to me. I must not—we must be talking about two different things like I can’t imagine working there all the time.

><u>Kelli Shaver:</u>:		It’s just too much of a learning tour for me. I mean, I don’t have a month to be productive and learn all of the keyword bindings.

><u>Jonathan Stark:</u>:	Yeah.

><u>Kelli Shaver:</u>:		I am a huge fan of keyword trochets. I use keyword trochets for everything but VAM, it’s just like it’s on a different level.

><u>Jonathan Stark:</u>:	Yeah. I feel the exact same way. I am a huge keyboard trochet person. If I have to touch the mouse, it’s a bad thing but yeah, it’s like another level of crazy. So that was really surprising to me and I have no interest in trying it.

><u>Kelli Shaver:</u>:		I know a lot of people do it and a lot people who love it but you know, no thanks.

><u>Jonathan Stark:</u>:	Yep, so that is definitely not in my future but a number of people mentioned something called the web storm which I never heard of.

><u>Kelli Shaver:</u>:		Yeah, I never heard of before or saw that.

><u>Jonathan Stark:</u>:	Yeah, it’s from this company called Jetbrands which I have heard of.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	I don’t know why I heard of them but they have a couple of different IDE products. It’s probably the same thing. It seems like a basically in a clips IDE with different sort of customized specifically for different task.

><u>Kelli Shaver:</u>:		It’s interesting to know what languages they are primarily using.

><u>Jonathan Stark:</u>:	That particular, the one that the twitter people are telling me about was webstorm which was specifically for things like Java Script, coffeescript, less SASS, all of these sort of new school web development languages if you want to call them that. And, you know, it’s a support for ethno script six harmony or whatever it is. It’s just very cutting edge support and they have a video on their site that is like a sped through screen cast or somebody like cranking through some development. I have to admit, it’s very impressive. It’s got like you know, browser window library refreshing on the side and multiple selections and unbelievable amount of code completion like Xcode style code completion. It really was pretty impressive. I don’t know, I think there is a free trial but it’s not free but either of any other sublime text tool I paid for, I know a lot of people don’t but yeah, I just switch to sublime text to some amount to switch again. If people are looking for a more you know, comprehensive IDEs style code solutions you might want to have like a webstorm. 

><u>Kelli Shaver:</u>:		Yeah, it looks interesting. I guess I am kind of like old school and personally maybe I should be hitting myself with this entire one because seemingly at a time but I personally don’t like a lot of code completion. It’s like I’d rather—I type like a 120 words a minute so I just want to type.

><u>Jonathan Stark:</u>:	Yeah, you are an amazing typist.

><u>Kelli Shaver:</u>:		You know?

><u>Jonathan Stark:</u>:	Right. It’s a lot of code completion but there are also a lot of navigating from what it looked like at the video where you can like hit the space bar, some keyboard command on a function call and jump straight to the file without function calls defined. 

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	And there is just a lot of… it was just amazing how fast the person is going through the navigating through the files and stuff.
><u>Kelli Shaver:</u>:		Yeah. Definitely we are checking it out. But for me, when it comes to code completion, the mental jump that I have to make between starting to type something and then like stopping that flow of typing or hitting tab or an error keyword, it’s just like for me it’s faster than finish typing type of thing.

><u>Jonathan Stark:</u>:	Yeah, I definitely know what you are saying there. It depends on—there are certain things that are really hard to type.

><u>Kelli Shaver:</u>:		Objective-C.
	
><u>Jonathan Stark:</u>:	Yeah, I was just going to say Objective-C you would not be able to pick up.

><u>Kelli Shaver:</u>:		Yeah.

><u>Jonathan Stark:</u>:	And we beat that up to the test last week. But there are some certain things that I would create keyboard shortcuts for and text me because it’s just really hard like for some reason when I was doing PHP, my hands are fond of very difficult to type print underscore R which I am typing all the time.

><u>Kelli Shaver:</u>:		[Inaudible 00:46:31] instead

><u>Jonathan Stark:</u>:	Yeah, it’s hard to read though, the app and that. It depends on what I was doing. I put it in a more and nicely served format app. Usually I just try and [Inaudible 00:46:42].

><u>Kelli Shaver:</u>:		If you don’t need to see what type of you know, what type of variables you are putting.

><u>Jonathan Stark:</u>:	Yeah.

><u>Kelli Shaver:</u>:		If you don’t need to see the contents.

><u>Jonathan Stark:</u>:	Yeah, but I don’t know why but that is just really hard for my hands to type and I would always type it wrong and that would be like urrgghh you know. But in general, I agree with you. The time that I really liked code completion is when it’s more of a snippet. You know like a four loop. I don’t want to type out a four flop every time. So I type four tab and tab to the parameters.

><u>Kelli Shaver:</u>:		Right.

><u>Jonathan Stark:</u>:	That is where it really feels like an upgrade. So in coffeescript it makes it easier for me, it’s just getting the coffeescript and do that.

><u>Kelli Shaver:</u>:		Yeah, there you go.

><u>Jonathan Stark:</u>:	So that is our show for this week. I am Jonathan Stark.

><u>Kelli Shaver:</u>:		And I am Kellie Shaver.

><u>Jonathan Stark:</u>:	And we hope you are here again next week for the <b>Nitch Podcast</b>, bye.

><u>Kelli Shaver:</u>:		Bye.

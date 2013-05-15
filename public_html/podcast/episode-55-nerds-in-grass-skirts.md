Episode 55: Nerds in Grass Skirts
====
May 3, 2013

Running time: 36:35

Jonathan and Kelli talk about experimentation with the Lua programming language and the possible implications on cross-platform application development.

<audio preload="auto" controls>
	<source src="https://s3.amazonaws.com/nitch/Episode_55_Nerds_in_Grass_Skirts.mp3" type="audio/mpeg" />
	<source src="https://s3.amazonaws.com/nitch/Episode_55_Nerds_in_Grass_Skirts.ogg" type="audio/ogg" />
</audio>

[Download (28.2 MB)](https://s3.amazonaws.com/nitch/Episode_55_Nerds_in_Grass_Skirts.mp3 "Episode 55: Nerds in Grass Skirts")

## Related Links

* [FuelBand](http://www.nike.com/us/en_us/c/nikeplus-fuelband "Nike+ FuelBand. Tracks your all-day activity and helps you do more.. Nike.com")
* [Jawbone UP](https://jawbone.com/up "UP by Jawbone | Know yourself. Live better.")
* [Amazon SES](http://aws.amazon.com/ses/ "Amazon Simple Email Service (Amazon SES)")
* [Sendmail](http://www.sendmail.com/sm/open_source/ "Open Source - Sendmail.com")
* [Kelli's Kaboom Game](http://kaboom-game.herokuapp.com/)
* [webscript.io](https://www.webscript.io/ "webscript - scripting on the web")
* [Corona SDK](http://www.coronalabs.com/products/corona-sdk/ "Corona SDK | Corona Labs")
* [Why is Lua considered a game language?](http://stackoverflow.com/a/38404 "python - Why is Lua considered a game language? - Stack Overflow")
* [Lua Nginx Module](https://github.com/chaoslawful/lua-nginx-module)
* [Augment Your Api Without Touching It](http://3scale.github.io/2013/01/09/augment-your-api-without-touching-it/)
* [MYO Gesture Control Armband](https://getmyo.com/ "MYO - The Gesture Control Armband")
* [Leap Motion](https://www.leapmotion.com/ "Leap Motion")

## Titles We Considered

* Cat Fricassee
* The Spaz Family
* The Four Would Hurt So Bad
* Nerds in Grass Skirts
* Winnie The Poohing It

## Transcript





Jonathan Stark: Hello, and welcome to the Nitch podcast for Friday, May 3rd, 2013. I'm Jonathan Stark.

Kelli Shaver: I'm Kelli Shaver.

Jonathan: We're here to talk about building apps that run everywhere. This week, we talk about Kelli's experiments with the Lua programming language, and the possible implications for cross-platform development. Please stay tuned. The Nitch podcast is next. I think I did it right.

Kelli: You got it right that time.

Jonathan: It's a record. One week in a row.

Kelli: [laughs] You get a cookie.

Jonathan: [laughs] Yes. I could use a cookie. If I sound loosey-goosey, if I sound a little free and easy...

Kelli: Yeah, you do, a little bit.

Jonathan: Do I?

Kelli: Yeah.

Jonathan: It's because, now that I have this fancy office that I go to during the day, occasionally, I left my microphone stand there. I'm actually holding my mic, American Idol style.

Kelli: Wow. I'm too lazy for that. I'd have to improvise a mic stand.

Jonathan: I have a huge bin of tinker toys here, and I thought about it. But I was like, "If I do that, I'll probably have to sit forward at a desk, and I really would rather recline."

Kelli: That's true. There is that.

Jonathan: I'm reclined and untethered. I'm off-stand.

Kelly: You sound very mellow.

Jonathan: I am. It's been a long day, and a long week. Like you said, it's only Wednesday.

Kelli: No kidding. This has been my battered and bruised week.

Jonathan: Yeah, seriously. I assume you had cat fricassee for dinner?

Kelli: [laughs] I wanted to.

Jonathan: For the dear listener, I think I have this story right, about the original ankle injury, but I might not. I was telling Erica tonight that you're...

Kelli: I was out, going for a walk actually. We've been going out to the high school track and just walking/jogging around it. I was just totally not paying attention to what I was doing. I was busy talking and not looking where I was going. The track turned, and I didn't, and I stepped off the edge and twisted my ankle very badly.

Jonathan: [laughs] Oh, God. I did have this story right. Let's be honest, you were looking at your phone.

Kelli: No, actually, I didn't have my phone with me.

Jonathan: [laughs]

Kelli: You know me, I never take my phone with me.

Jonathan: Fuel Band? No?

Kelli: No.

Jonathan: How do you like that Fuel Band, by the way?

Kelli: I like it. I like it better than Up Band, for what I want to use it for.

Jonathan: Yeah, that makes sense. Anyway, so you went to the doctor and you got crutches, and it started to get better until...

Kelli: Yeah, I went to the doctor and I got crutches, and that lasted about a day and a half. I said, you know, "Screw that," and I stole Richard's boot from when he broke his foot.

Jonathan: The benefits of being spaz family.

Kelli: Yeah, we can just pass around the medical...all the casts and braces and things.

Jonathan: The medical supplies. [laughs]

Kelli: Yeah. [laughs] Yes, it's sad. If anyone ever needs a spare prosthetic eye, I've got one of those here, too.

Jonathan: Oh, yeah?

Kelli: Yeah. It was starting to feel a little bit better, and I got up this morning, and I hadn't made it to the point of putting the boot on yet. I got up and I took one step, and I stepped on a Lego block that the cat had left there, that he'd dragged out of Kira's room. As you know, that's extremely painful.

Jonathan: Yeah, there's only one move that you make when you step on the Lego.

Kelli: Yeah. I made that move, and now I'm kind of back to square one.

Jonathan: Yeah. Cat fricassee. I'm telling you, the only thing worse than stepping on a Lego? Four-sider.

Kelli: Yeah. I've done that, too. Oh, that hurts.

Jonathan: It's a good thing your cat's not into D&D.

Kelli: Yeah, I know. He's stolen the 12 before, but not the 4. The four would hurt so bad.

Jonathan: Dear listener, you can imagine it's been a long three day week so far. Not to mention wrestling with the email protocol.

Kelli: Ah yes, and all the actual work we've had to do.

Jonathan: Yeah actual work. Spelunking around in WordPress config files and wacky old database tables. It's just so much going on there.

Kelli: Trying to figure out PHP's internal mail functions and working with Amazon SES, and not working with it, and all that good stuff.

Jonathan: Yeah, I want to publicly commend Kelli for updating the config for sendmail. You did that first try, that wasn't even the problem. I was very impressed [laughs] by that actually. The config that you posted, unreadable.

[laughter]

Jonathan: That was like Latin. I was like, "Not even going to try to read this. I'm just gonna believe that it works."

Kelli: I didn't post it there for you to read. I posted it for my own reference, because I wasn't going to try to figure it out again.

Jonathan: [laughs] Good idea. Not to go into it to much, but the concept was we wanted to use Amazon SES, to send all of our email, for reasons I won't go into. But it is a great way to send email. We have this huge WordPress install on top of it, and who knows how many calls there are to mail. So, why don't we just update the underlying thing that sends mail on the entire machine, then never worry about it again.

Kelli: Yeah.

Jonathan: You nailed that out of the gate, but PHP pulled out the rug from under us.

Kelli: [laughs] Yeah.

Jonathan: Anyway, it's fixed.

Kelli: We ended up not using sendmail at all, and just connecting to SES via SMTP with WordPress plug-in, but it's fixed and now anything else we have to send from the server, not through PHP, will still be piped through SES.

Jonathan: Correct. Any of our cron job logs, and all that stuff, should ship to us appropriately. So listener, if you ever have to work with SES and WordPress, go with SMTP, and you'll be happy.

Kelli: Yep. We can recommend a plug-in.

Jonathan: [laughs] Exactly.

Kelli: A lot of them are at least two years old.

Jonathan: This seems like an old problem with WordPress. Its old and solved. Anyway, that isn't what we want to talk about.

Kelli: We want to talk about fun stuff.

Jonathan: We want to talk about Lua.

Kelli: Yes.

Jonathan: They should of went all the way and called it luau.

Kelli: Luau, yeah. It would be more mellow. It would fit the way we feel tonight.

Jonathan: I feel like it is a mellow language.

Kelli: It feels that way.

Jonathan: It's very chill.

Kelli: It is.

Jonathan: I always picture like a necklace of flowers. Lua developers wear a lei and a Hawaiian shirt.

Kelli: Like flip-flops, if anything.

Jonathan: Grass skirt.

Kelli: [laughs] I wouldn't go that far.

Jonathan: [laughs] Grass kilt, so...

Kelli: That's kind of scary, considering Lua's primary usage as an embedded scripting language for a lot of game engines. I am picturing these bearded nerds in grass skirts.

Jonathan: [laughs] These shirts come in...

Kelli: Inscripting their WoW engines.

Jonathan: Especially the old joke, these T-shirts come in large, extra large, and programmer.

[laughter]

Jonathan: Grass skirt and neck beard. Enough of that damaging image and tempting visual. Lua, every time it comes up...let's start off by saying, I know next to nothing about Lua.

Kelli: I don't know a whole lot more than you do, but, apparently, I know enough to talk about it.

Jonathan: You've written a simple proof of concept game, and that is a quantum leap. I messed around with "Hello World," and we looked at the webscript.io website, which was super cool. I have to admit, I never used it after I originally thinking it was super cool.

It takes two seconds to learn Lua. The basics, the syntax, just so easy. I know next to nothing about it, but every time it comes up, it comes up in this context of gaming, so I never pay that much attention to it. In my mind, it's related to Corona. Is Corona a Lua library, do you know?

Kelli: Corona's, I guess, a Lua engine or library, whatever you want to call it, for iOS game development.

Jonathan: So it's like a runtime? Or is Corona more like...Corona is to Rails as Lua is to Ruby?

Kelli: I believe the latter.

Jonathan: That's my impression. It's some kind of Lua-based framework, but for game engines. I always think of it as a game thing and I'm not a game guy, so I immediately like, "I've got other stuff to worry about." A bunch of things that came out of your experiment seem pretty interesting and worth looking into. Can you give a rough idea, for the dear listener?

Kelli: Of what the game is and what I did?

Jonathan: Yeah. Let's start there.

Kelli: It's a very basic little arcade game where you're flying a spaceship and shooting asteroids, pretty much. That's all there is to it.

Jonathan: It's a side-scroller, basically.

Kelli: Yeah. A side-scrolling little arcade shooter. I'm using the, it's called LOVE, is the little game engine that I'm using. You just write the Lua scripts and you can package it all up as an executable for Mac, Linux, Window, whatever.

Jonathan: LOVE handles the packaging part? There's nothing about Lua that has anything to do with packaging, or anything like that?

Kelli: Right. Basically, you're just taking your Lua scripting and dumping it in the compressed file that is the .exe or the .app.

Jonathan: It's like a renamed zip file, I think.

Kelli: Yeah.

Jonathan: The first thing I see, when I see a game like that, I'm like, "OK. Conceptually, there aren't that many elements to it. There's a few different asteroid images, there's a spaceship base, and that's an image." You're like, "Oh, this would be really easy to render with HTML and make it move with JavaScript or maybe CSS." Maybe, but it would kind of be a pain to make a side-scroller. The thing that really would be brutal is collision detection.

Kelli: Yeah. Collision detection, sound effects. Sound effects wouldn't be that big of a deal now, I guess.

Jonathan: It's getting better. But it still would be...I would have to look it up. I wouldn't be able to just hack my way through it.

Kelli: The collision detection, definitely.

Jonathan: Is there something about Lua that makes collision detection easier, or is it something that's built into all of the frameworks? There's really two things. There's collision detection and physics.

Kelli: In the first place, let me say a couple of things. There are libraries out there for both. There are a couple of collision detection libraries that I've looked into. For this little thing that I've built, I ended up just kind of rolling my own. Actually, I think what made it easier to do, is just how clean and simple the language is.

Jonathan: Really?

Kelli: It doesn't get cluttered up with a lot of...I don't know, it just felt really clean. You could write this sort-of, kind-of complex thing and not over-complicate or confuse yourself.

Jonathan: Right. For the benefit of people who haven't seen Lua, the first thing I said when I saw it was, "This looks just like CoffeeScript."

Kelli: It looks similar.

Jonathan: It has that sort of lack of curly braces and semicolons that you expect from Python or Ruby. Is it significant white space, or is that...?

Kelli: No.

Jonathan: Or do they close it up? Their blocks are closed, right?

Kelli: Yeah.

Jonathan: It's just really, really clean-looking. It almost looks like pseudo-code.

Kelli: It almost does.

Jonathan: Is that why you think it's attractive to game developers? Just because the syntax is so clean?

Kelli: I think it's attractive to game developers because of that, because it has really a low learning curve. From what I understand, it's designed to be embedded in other applications, so it's very easy to do that. Maybe you have your game engine built in C, and then you allow people to script things in Lua. There's an API for doing that that's built in.

Jonathan: I see. There's lots of bridges to other languages?

Kelli: Yeah.

Jonathan: The reason why this is most interesting to me, I guess there's a couple of reasons. One is that, sure, the syntax is clean and great, and that's really nice, and everybody always likes that, but is that enough incentive to learn another language? No, not really.

But looking at it, it comes with all these different packaging options, which is super-compelling. It kind of reminds me of PhoneGap, in a way, where it's like, "You can write this thing, it's going to end up running just like it's supposed to run wherever." So that's cool.

Kelli: Yeah. Write your Lua script for one client at once, and then package it for all these different platforms. If you're doing a lot of things that tie into manipulating stuff with a file system or that kind of thing, then yeah, you may have to have, "OK, this is the Windows version, this is the Mac version." But, just for basic stuff like that, it feels like it is pretty much a "write once, run everywhere," where "everywhere" is a platform that supports the Lua runtime.

Jonathan: Cool. To keep this in the context of our normal spiel. Maybe I'm wrong, but I don't feel like a lot of people who listen are really into writing games, so they're probably like, "Who cares about this?"

Kelli: Yeah. It actually had some other interesting uses, outside of games, that I discovered when I was looking into it.

Jonathan: Oh, cool. What are those, before we go on?

Kelli: Adobe Lightroom. The interface is built in Lua.

Jonathan: Oh yeah? So you can extend it with...

Kelli: Yeah. MySQL Workbench plugin system is Lua.

Jonathan: Really?

Kelli: Yeah, and Apache and Nginx can both execute Lua.

Jonathan: As what?

Kelli: Like anywhere within the whole request-response process, you can inject some Lua code in there to do something.

Jonathan: Like in the same way that mod_PHP works?

Kelli: Yeah.

Jonathan: With Apache, you activate a lua plug-in and Apache hands off .lua requests too.

Kelli: I don't know about handing off .lua requests. I haven't really looked into it much with Apache. I just read that just a few minutes ago, but I know with Nginx, you can actually directly manipulate the data that's coming in with Lua script that's embedded in your server config file.

Jonathan: Oh, I see what you mean. Wow, geez. Holy God, who would go that deep into a Web server? I guess that's cool though, if you have a real lightweight Web server like that, you might explicitly want it so that you can customize it simply to do a very particular thing for your user-base.

Kelli: Right, if you're doing something, you could potentially build your whole system there directly on top of a web server, if you're serving some specific need.

Jonathan: Wow. If you're crazy because I would never do that.

[laughter]

Jonathan: That's very interesting though.

Kelli: I kind of want to try it.

Jonathan: Yeah. Just to get a feel for it. Every time I see a pop-up, I'm like, "Damn, this is really cool and robust," and I don't have a use for it. At least, I don't think I do, because the reputation of it is for game programmers.

Kelli: That is its primary use.

Jonathan: The thing about it that I think is compelling for people who are doing Web apps and building API's and trying to reach this global market, regardless of what device their on, is that it does have tons of integration with different environments, so that's really cool. And the other thing is that I feel like there is becoming a...I wouldn't say demand, but I would say that people are getting so used to Physics in the user interface of touch devices.

Even if it's just like the bounce-back on a scrolling list or if it's deceleration of a carousel that you flicked. They're just all OS stuff on like iOS. Windows phone has unbelievably gorgeous animations. 3-D animations are beautiful and the whole interface. You could say that they're gratuitous but it definitely enhances the experience.

If you are using a device eight hours a day on-and-off to 24 hours a day on-and-off, if you're me, a small enhancement like that, or it's actually a big enhancement, a cosmetic enhancement, if you will, becomes a big deal. It's especially, I think, useful for touch because it makes things look like they're responding more like things in the real world.

Kelli: It makes it look like they're actually responding to a physical touch.

Jonathan: Right, the rubber banding all that. Then you get inside of a Web app, let's say, or you get inside of a PhoneGap app and it is a pain to make any of that stuff work. You could easily double your code base trying to get rubber banding on a list for you working.

When you're in this situation of building stuff for mobile or for smart phones, there is constantly this tension between how much polish you want to add and this point of diminishing returns where, in order to add 10 percent more polish, you have to double your code base.

Kelli: Yeah, 80 percent more code for 10 percent more polish.

Jonathan: Right. But then it's like a self-defeating thing because you add that more code and maybe you make that thing work, but then you degrade the performance of everything else.

Kelli: Yeah, been there, done that.

Jonathan: But I feel like, eventually, there will be an expectation that even productivity apps and utility applications are going to have physics and maybe even 3-D animations. Definitely have animations, probably have 3-D animations and certainly have physics-style reactions. I could even imagine user interfaces that, even in productivity software, need collision detection.

Kelli: Yeah, I can too. I think that's only going to become even more relevant as we start to get into touch-list gestures.

Jonathan: Yeah, and 3-D touch list gestures. Not just swipe left and right, up and down, but also Kinect and MYO and Leap motion. Detect how the z-index, how close you are to the interface and how far away you are. It's unbelievably sensitive. To then take input that is so refined and then just use it to manipulate this 2-D space in this very clunky, chunky way is just not going to be compelling.

Kelli: Yeah, it's going to feel very awkward.

Jonathan: Yes, yes, it's like playing guitar with gloves on.

Kelli: [laughs] yeah.

Jonathan: It's just like, "This is awful."

[laughter]

Kelli: Yeah, yeah and actually I am very interested about the idea of taking something like this little game engine and maybe a physics library, or two, and seeing about building an app that's not a game. Maybe it's a little productivity app or some kind of monitoring tool.

Jonathan: It has to be a to-do list.

Kelli: Yeah, well it's either going to be a to-do list or a Twitter client.

Jonathan: [laughs] Right, right, right. It's like the "Hello World" of building an app. To-do list or a Twitter app. The big story...I feel like there will be a convergence of...

Kelli: The gaming physics.

Jonathan: Yeah, the gaming developers and the productivity developers and the Web developers. I feel like they're all going to end up creating...if you're creating an interface, you're creating an interface. Certainly you don't have to go to the lengths of like, say an EVE online style interface to interact with sales force.

My friends and I used to joke about, years ago, when we first started playing Halo, we were like, "When is Microsoft going to release Halo Meeting?" Because that's what we used to do. We're all over the northeast, U.S., we hardly ever got to see each other and we would all plan like, "Tonight we're all going to play Halo." Half the time we would just stand in a room with bombs going off around us. We'd hang out and talk.

Kelli: Yeah, I've done that many, many times.

Jonathan: It's weird. We could just talk on the phone but it's so much different doing it in a 3-D space and its way better than video chat. I don't know why. I'd rather video chat with my kid, but if I'm going to hang out with my friends, I'd rather be in Halo because then you could blow stuff up occasionally.

[laughter]

Kelli: Nice. I'm not a big fan of video chat. I'm always self-conscious. "Aww, I have to put on pants."

Jonathan: Well, you don't have to put on pants.

Kelli: I know. Just don't stand up.

Jonathan: Normally around the house, I just wear a tuxedo jacket and no pants.

[laughter]

Kelli: Just for those conference calls.

Jonathan: Yeah, it sucks. I'm Winnie-the-Poohing it all the time.

[laughter]

Jonathan: Anyway, off track there. I don't think this is right around the corner, but I would not be surprised to see a convergence of more game-style, not gamification, not any of that B.S. marketing stuff, but like actual game programming...

[crosstalk]

Kelli: Like the immersive environment.

Jonathan: Like inside of a sales force app. There's this ongoing debate in mobile development about whether or not you should look platform-resident when you build an application. Of course there are exceptions, but I feel very strongly that your default should be that your app should look like your app and like your brand and it should only make affordances for the particular platform it's on in very specific cases.

But by and large, users should be able to go from an Android version to an iPhone version to a Windows phone version and easily get around your interface without having to relearn it.

Kelli: Yeah, I agree. I've seen apps where the interface has changed a fair bit between platforms and it's just, "Why?"

Jonathan: Yeah, I mean forever Twitter on Android and Twitter on iOS were a complete disconnect.

Kelli: Instagram. Instagram was for a while too and it may still be. I haven't used an Android in a while.

Jonathan: Windows phone is a huge violator of this because the operating system is so in-your-face, I guess. The metro interface is so in-your-face, and it's nice, but it does have that "my way or the highway" feel to it.

Kelli: Yeah. You're going to design how they want you to or you're not going to be on the platform.

Jonathan: Right. I tweeted something about...I can't remember what the app was. It might have been Facebook. The Facebook app on Windows phone is unusable, not because it's bad, but because I can't figure out how it's supposed to work. Because it's a very complicated app. There's a ton of stuff going on in the Facebook application.

I use Windows phone all the time but I cannot figure out like, "What does the back button do? What happens when I swipe left or right here," because, generally in the Windows phone environment, swipe left and right in an app is reserved for switching between tabs. There's no notion of swipe to delete an item in a list. That gesture is basically banned on Windows phone.

Kelli: That would get...yeah, that's just breaking a lot of pretty much accepted patterns at this point.

Jonathan: On other platforms, right? And it's not that it's bad. It's cool the way that they have it. The OS is a little too pushy for me. And apparently it's actually enforced in their approval process because I tweeted jokingly, "How come is this app totally unusable on Windows phone? Why does it look the same on iOS, Android, mobile Web, and every browser, and then Windows phone, it's completely different?"

Kelli: It's because Microsoft made them do it that way.

Jonathan: Yeah, somebody tweeted that back to me. I have no idea what their experience level is with Windows phone. It was a while ago now but that was the impression. Boy, I'm making a long story longer. [laughs] The point is that, with rare exceptions, I don't think you should give into looking platform-resident because that's the platform vendor trying to create more lock-in.

There's nothing about that that's advantageous to the developer except for things like affordances that have become commonplace and that is where I would make exceptions. But the funny thing is, when people have that debate and you can be on one side or the other but people debate should you or shouldn't you be, and everybody gives games a free pass. Like in that debate, everybody says the same thing as soon as they start talking about it.

Kelli: Games should be the same.

Jonathan: Yeah. So that was my retort to everyone who was like a big, "Oh no, it should look like an iOS app and it should look like an Android app." And I am like, "Well what about Angry Birds?" Like why does Angry Birds get to look like Angry Birds everywhere?

Well, games are different. I'm like, "OK well, why?" Shouldn't it be buttons? Your app should look like your app. Obviously, I understand that a game is an extremely graphic-intensive environment. It's like a totally different type of thing because you don't have controls the same way that you do with a Twitter client.

Kelli: Like a ListView?

Jonathan: Yeah, you don't even have a ListView. Man, I am making this longer than it needs to be. I am good at that.

Kelli: I see where you are going though. I can see the light at the end of the tunnel now.

Jonathan: I am slowly coming to a point. It's not a great point, so I am really trying to work it, build up the anticipation. And that point is that all these apps are going to be just like games, eventually. In the sense that the old school desktop metaphors of a button. I'm not saying ListViews are going to go away, or buttons are going to go away, but it's going to become a lot more like direct manipulation of business objects...

Kelli: The beta.

Jonathan: Or objects of interest. I can imagine a lot more physics, a lot more collision detection, and seeing the platform start to disappear when you're in the app.

Kelli: It's going to become a lot more immersive and it's going to be less, "Here's a thing you use," and more, "Here's an environment that you interact with."

Jonathan: Right. The point being is I'm getting more and more interested in Lua. I guess that's not the point, that's the outcome, is that I'm getting more and more interested in Lua.

Kelli: [laughs] It's definitely piqued my interest now and I'm going to do some experimenting with it in my copious free time.

Jonathan: [laughs] Big questions from me are, let's say the expectation of a user interface, even for a productivity or utility app, becomes such that people are expecting it to be this immersive, almost game-like experience. I feel like that will be at the expense, somewhat, of some of the stuff that the web is totally good at, like accessibility.

Kelli: Accessibility, and just the rapid and easy dissemination of information.

Jonathan: Right. I don't know how I feel about it, I'm sort of torn about the whole thing. If we went into game-y apps...

Kelli: The sci-fi geek in me would be like, "This is awesome."

Jonathan: Awesome, right. Then the flip-side, it's impossible to imagine that something like that would be usable with a screen reader.

Kelli: This is why your little game-y app needs to pull all of its data from your API.

Jonathan: I suppose that is the escape hatch. If the interface is separate from the game, really, it's like slapping a really cool Halo interface on top of Zork.

[laughter]

Kelli: You can still open up the...

Jonathan: I just got the weirdest visual on that. That is like...

Kelli: Yeah, me too.

Jonathan: [laughs] Oh God, I would love that. The API is the escape hatch. If you really need access to this data and services, this isn't the client for you, because you can't use it for some reason like you don't have fingers or whatever. But you've got these other options because this is just one interface for it.

Kelli: That just goes back to what we we've been saying all along. Regardless of how well designed your interface is and whether that intent is to be purely informational or immersive or what have you, one interface is never going to be the perfect fit for everything.

Jonathan: That's for sure.

Kelli: Wow, I got a "you know" and a "what have you" both in that sentence.

[laughter]

Jonathan: We both have to drink.

Kelli: I didn't get any booze.

Jonathan: What?

Kelli: I know I said I was going to, but then I just totally forgot.

Jonathan: You promised yourself.

Kelli: It was going to be my reward for absolutely nothing.

Jonathan: Cat tried to kill you. That's probably enough for this week, don't you think?

Kelli: Probably.

Jonathan: Hopefully we've piqued your interest in Lua, and if you have some kind of need for that kind of interface, then you can look into it, or you can just keep it on your radar as things develop.

Kelli: If nothing else, it's a fun thing to play around with. I've enjoyed it. I'll send you a link to my silly little game.

Jonathan: Yeah. Post it in the show notes.

Kelli: A silly little web page up for it.

Jonathan: Cool. Of course that will be in the show notes.

Kelli: Source code's on GitHub and all that stuff.

Jonathan: Natch.

[laughter]

Jonathan: All right. That's our show for this week. I'm Jonathan Stark.

Kelli: I'm Kelli Shaver.

Jonathan: We hope you would join us again next week for the Nitch podcast. See you later.

Kelli: Bye
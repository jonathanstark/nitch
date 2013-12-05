Episode 37: Slow_Headbutt
---------------------------
<u>Jonathan Stark:</u>	Hello and welcome to the <b>Nitch Podcast</b> for Friday, December 21st 2012. I am Jonathan Stark.

<u>Kelli Shaver:</u>	I am Kellie Shaver.

<u>Jonathan Stark:</u>	And we are here to talk about building apps that run everywhere. This week is Safari rendering bugs, more location hash Gotchas and a rundown of development tools including Knockout.js, Markup.js, Yeoman and Reflector. Please stay tuned, the <b>Nitch Podcast</b> is next.

<u>Jonathan Stark:</u>	Good afternoon!

<u>Kelli Shaver:</u>	Good afternoon!

<u>Jonathan Stark:</u>	How is it going? Again?

<u>Kelli Shaver:</u>	Yeah. It was all for the stress of my life, I had nothing. I will be bored.

<u>Jonathan Stark:</u>	You have a lot of going on.

<u>Kelli Shaver:</u>	Yeah. I just spent 8 hours yesterday in a hospital with a kid.

<u>Jonathan Stark:</u>	God.

<u>Kelli Shaver:</u>	Everyone thought she had appendicitis but it turned out to not be.

<u>Jonathan Stark:</u>	Was it a stomach flu thing?

<u>Kelli Shaver:</u>	I don’t know. All the tests came back negative and I mean so I guess she’s fine .

<u>Jonathan Stark:</u>	Well I guess that is good.

<u>Kelli Shaver:</u>	Yeah. Monday, yesterday, she was pretty down. She went to the doctor and said, *“We need to take you on the hospital for more tests.”* Yeah, I don’t know.

<u>Jonathan Stark:</u>	That’s always fine.

<u>Kelli Shaver:</u>	She’s fine. That is all that matters.

<u>Jonathan Stark:</u>	Right, crazy. Well, we are all sick here—well everyone, except for me. But that makes me a rundown because I end up…

<u>Kelli Shaver:</u>	Doing things?

<u>Jonathan Stark:</u>	Yeah. Like wacky around the clock. Craziness but fortunately, Gamma came today and picked up the little meatball.

<u>Kelli Shaver:</u>	That was good. Those videos you sent me were hilarious.

<u>Jonathan Stark:</u>	Yes, for the benefit of our dear listener. Kellie sent Cooper a Stomp Rocket which is hilarious. It’s like a little tripod that you stick a missile on the top and it has a hose hanging up to you. You jump at below because it shoots the rocket off. But he didn’t get a hang of it first so he was trying all different ways to trigger it including a very slow headbutt.

<u>Kelli Shaver:</u>	Yes, that was the best. 
<u>Jonathan Stark:</u>	But he got it all figured out today. He had that one foot karate chop going so you got to keep your head down for flying missiles all over.

<u>Kelli Shaver:</u>	Nice.

<u>Jonathan Stark:</u>	It was super fun. So wow, I think we have a big show today actually.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	Big bug report, a bunch of tools to talk about. But first, some housekeeping. As the dear listeners have probably noticed, were not doing the music at the beginning or the end of the podcast anymore initially because it was taking an amount of time to put that on so I was just being lazy. I wanted to stop doing it. But the other thing that it does, it reduces the file sizes to almost cut in half. It should be better for you when you are trying to download it or listen to it on the go so I think it was a good thing. 

<u>Kelli Shaver:</u>	Yes.

<u>Jonathan Stark:</u>	Another thing, we got three piece of housekeeping, the second one is I got some advice from Mike Mahemoff from *player.fm* about using a levelator on our sounds so it should be yet again, it’s like a constant battle to record a phone call. So if you think it is pretty easy to stand on it but well it’s actually pretty tricky using this new thing called levelator that seems to be borderline magical and I think as you are listening to this you know that it is much louder to be able to have an increase in the dynamic range to be easier to hear. If not, please let us know. 

>>And lastly, the last bit of the housekeeping, we must be taking a week off because it’s the end of the year and Christmas. I think we both have, I am just being to myself, like approximately ten tons of things to do between now and at the end of the year.

<u>Kelli Shaver:</u>	Yes, so for me that is just a conservative estimate.

<u>Jonathan Stark:</u>	Right so we are giving you the week off listener but then we will be back I think January 4 is the first Friday in the New Year.

<u>Kelli Shaver:</u>	Yeah, I think so.
<u>Jonathan Stark:</u>	Cool. Shall we dive into the bug report? I am dying to hear about this Safari rendering bug that you told me about.

<u>Kelli Shaver:</u>	Yeah. It actually came up when I was working on an OS ticket. And he was running through a bug, we have a model dialogue that pops up in some places for confirmations and to set print options and things like that. It’s a typical model dialogue that will pop up at the screen and be an overlay behind it to connect darkened sources in the screen. And he was running into an issue where if you open the model dialogue with the overlay shows up and then you scroll down the page.

<u>Jonathan Stark:</u>	Yep.

<u>Kelli Shaver:</u>	When you close the dialogue, the parts of the overlay, they are not with an invisible report. Like they don’t go away. I mean it’s all one big deal that is being hidden but the Safari is not repainting.

<u>Jonathan Stark:</u>	Not repainting. Wow, that’s devastating.

<u>Kelli Shaver:</u>	Yeah. It was irritating. And it turned out, I had some digging around and it seems to be a bug in—there was a bug introduced in Safari’s implementation of web keep overflow scroll touch which we talked about I think last week. Turns out there is a bug in that that affects all Safari renders some absolute position elements and so I mean I guess that was—the bug report reported sounded a little bit different but I think it was probably the same thing that was affecting it. So what we ended up doing to fix it on that overlay in the CSS, basically you add a blank like a 3D transformation as if it does nothing. What it does is it kicks the browser into using hardware acceleration to do the rendering, even repainting the screen.

<u>Jonathan Stark:</u>	Yeah, I see that is the *3D 000* trick. It has been around for a little while and I am glad to hear that fixed it and it’s a good thing to be aware. It’s worth trying if you are having weird issues with transforms or capacities or animations because of the bug, it 2D transforms—I can’t remember what it was now cause one time the 2D transforms even if you are only doing it, it 2D transforms but if you use 3D, you get a better performance because of the way that they were actually implemented. So that is a new bug that it fixes, it’s a new one that I never heard of.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	But that is going to probably save someone a few keyboards.

<u>Kelli Shaver:</u>	Yeah, it was really weird. It’s really kind of frustrating because it’s just one big dev and it’s either show it or hide it. There is no in between.

<u>Jonathan Stark:</u>	Right. How hard could it be browser makers?

<u>Kelli Shaver:</u>	Let’s prove them Apple.
<u>Jonathan Stark:</u>	Geez. It’s just a webpage, for crying out loud. So you’ve also got a location Hash Chapter two. The return of location Hash Gotchas.

<u>Kelli Shaver:</u>	Yes, the return of location Gotchas. I was talking about using that last week and updating the location hash in the browser when you put to the link and I get presses in the sidebar to sort of be like a deep linking within a page.

<u>Jonathan Stark:</u>	Right.

<u>Kelli Shaver:</u>	Using Java Script. And the issue I ran into there was even when you click the link and it will update the location hash rather than following the link and programmatically updates location hash and load the webpage content. And the issue that I was running into there was even when I would prevent default or return false on the link as soon as that location hash was updated in the browser window, the browser which I am will jump to that anchor.

<u>Jonathan Stark:</u>	Interesting.

<u>Kelli Shaver:</u>	Yeah, I thought that returning false on the link would stop that behavior but when you specifically set the location hash, it seems to want to jump into that link and there is little thing you do that can stop doing that. Okay go on.

<u>Jonathan Stark:</u>	So… Just to make sure I understand. So you’re preventing the default behavior of clicking on the link with the hash fragment.

<u>Kelli Shaver:</u>	Right.

<u>Jonathan Stark:</u>	But then you are adding that to the location in the location bar. 
<u>Kelli Shaver:</u>	Right.

<u>Jonathan Stark:</u>	So you are saying like a location hash equals like programmatically.

<u>Kelli Shaver:</u>	Yes.

<u>Jonathan Stark:</u>	I guess that makes sense—why would you want it to go to the…

<u>Kelli Shaver:</u>	Because there are sometimes animations and transitions that are programmatically attached to that effect in this particular instance.

<u>Jonathan Stark:</u>	Gotcha.

<u>Kelli Shaver:</u>	Particularly in regards to the mobile navigation menu.

<u>Jonathan Stark:</u>	Okay, that makes sense.

<u>Kelli Shaver:</u>	So once you added location hash to the window, regardless of what anything you do with that link to try and stop but the browser is going to attempt to go and jump to that section on the page.

<u>Jonathan Stark:</u>	Right. Oh that is what you are telling it to do.

<u>Kelli Shaver:</u>	Yeah, it is. Even when you try to stop it before hand, once you update it, it’s going to do it which is causing you to jump down in the high part of the header to the other.

 <u>Jonathan Stark:</u>	Right.

<u>Kelli Shaver:</u>	So you can’t really stop that but what you can do is you can correct it kind of instantaneously. And so I just added, immediately after sending a location hash, I just added like scroll to window.scroll to 0 0.

<u>Jonathan Stark:</u>	And what did it do and what happens after that? Like animate down to the portion?
<u>Kelli Shaver:</u>	No, it executes so quickly that you can’t tell.

<u>Jonathan Stark:</u>	Is it suppose to animate, like well I guess it doesn’t matter. I am wondering why will you change the hash but not move the page.
<u>Kelli Shaver:</u>	Okay, yeah. Because I am loading it inside of the contents of that hash, of that dev on the page, I am loading it into another container dev that is a higher app in that page.
<u>Jonathan Stark:</u>	Okay. So you are grabbing the content but programmatically you don’t want to?

<u>Kelli Shaver:</u>	Yes.

<u>Jonathan Stark:</u>	I see.

<u>Kelli Shaver:</u>	Yes, and ideally before I can do that, I can do something like a Java Script in order to get to work with the CMS. You can have to have it in the dome rather than putting the template in one of the page or something.

<u>Jonathan Stark:</u>	Okay, that makes sense. And it makes sense that you want to maintain the URL link, you know, the hash and the URLs; some sort of some bookmark in there and come back  there.

<u>Kelli Shaver:</u>	Yeah. And you want it all to fall back and work on there is no Java Script.
<u>Jonathan Stark:</u>	Right. Yeah, I did not think of doing that way but I am surprised that it doesn’t create like a flash or something but that is super easy to what I thought of, that is for sure.

<u>Kelli Shaver:</u>	It wasn’t easy to get to that point. I spent a long time trying to stop it from happening to begin with.

<u>Jonathan Stark:</u>	Yeah. I think my first thought would have been to remove the ID from the target element ‘cause it has nothing to go to and then put it back after I change the hash but that would have been harder than just scroll to 00.

<u>Kelli Shaver:</u>	But those are good at you.
<u>Jonathan Stark:</u>	Cause I was just thinking like what about all these hash bang sites that have like, you know, how do they prevent all those jumping and I was like, *“Oh, those doesn’t exist.”* Like you know, the way cause there is no destination.

<u>Kelli Shaver:</u>	Yeah, that would be another option. Remove the hash, display the data, remove the ID, display the data. Once everything is done, reattach the ID.

<u>Jonathan Stark:</u>	Right. Probably going to get some hacky race condition there. The other thing that I was thinking if you were going to—having not seen this, my thought was that you were, you wanted to like from wherever you were, animate or scroll down to the area. You know, like a lot of this really long single page part of the websites. 

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	But it was jumping straight to it and then I was like, *“Oh well, you could…”*

<u>Kelli Shaver:</u>	Well, that is easy to do.
<u>Jonathan Stark:</u>	Yeah.
<u>Kelli Shaver:</u>	Yes, and now it was, I was grabbing the content in this way and hire up on the page.

<u>Jonathan Stark:</u>	Well, good one. I have a location hash thing that is not you know, not the same thing at all but it’s only related because it’s a location hash. But working on a site that has ton of content pages with lots of glossary terms sprinkled throughout and for devices that—you know, doing it like a progressive enhancement approach so that if it’s a crap browser even in e-reader, you can just click on the word and it’s a link to glossary page and then it’s going to hash tag to the specific entry.

<u>Kelli Shaver:</u>	Right.
<u>Jonathan Stark:</u>	And the site has type kit, web fonts included in it. So what was happening was you would click on the glossary terms in the content page, it would go to the glossary page, it would go you know, right spot that you want to and then the font would change and that would reflow the page so you’re on the wrong spot. So the farther down the page, the farther off it was. And so actually this is a project that I am doing with Josh Clark he was like, when I reported the bug to him or the situation to him, *“I am sitting next to Jason Sta. Marias so let me ask him cause this is like the type kit guy.”*

<u>Kelli Shaver:</u>	Right.

<u>Jonathan Stark:</u>	And so Jason kind dodged the bullet by saying that it shouldn’t ever render without the font. So he’s basically like, *“You guys are doing something wrong with the font caching or something because it should not ever render without the font.”* And I was like pretty spiced to hear that but if he said, I’d believe it. And then somehow, it started working. And I wonder the way that he describes it, that it would click and immediately have the proper font applied. And I think the only difference was, we didn’t change anything in the server, the only thing was when I was seeing the issue, I was testing off of local host and I think that it wasn’t caching the font for some reason. I don’t know if there are some sort of different handling because I was you know, working off local host but I was still pulling the font over the network.

<u>Kelli Shaver:</u>	Yeah, I noticed sometimes fonts do work with type kit when I am doing it over local host and I think it probably has something to do with the code I have that deals with license restriction and that type of stuff.

<u>Jonathan Stark:</u>	Right. So I do think that it’s a non-issue and then we were like, *“Whoa, wait a second.”* If you know, if somebody does have a Java Script enables and what are going to do in fact, what we already did was click on the tag and we actually include the glossary as an adjacent object in all the pages anyway. So if you do have Java Script that just shows the overlay you know, pointing at the word like a CSS you know, here is the definition so if you have a Java Script, you’ll never navigate to the actual glossary page and if you don’t have a Java Script, you will navigate to the glossary page but since you don’t have a Java Script, type kit won’t work anyway. So it ended up becoming a non-issue.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	You know, in particular case but in other people’s cases it might not be.

<u>Kelli Shaver:</u>	If you are not caching that font, you could run into deflow issues. And that is interesting. I guess it’s not really specific to type kit either if you have fonts off limit to the server and even in your local server, if you are still not caching you can still should run in that issue.

<u>Jonathan Stark:</u>	Yeah, absolutely. It’s not type kit really.

<u>Kelli Shaver:</u>	Yeah, that is sort of interesting. It’s not something I would ever thought of. It’s just like you said it and yes it makes perfect sense.
<u>Jonathan Stark:</u>	Yes, I was totally scratching my head. I was like, *“What the hell?”* I mean, this is a very basic. How did I end up in the wrong word?

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	So in ten minutes I was like, *“Look at the IDs.”* What did I do? Then there was like…
 
<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	I was like, Ohhh. Flash of unfonted content or whatever it is.
<u>Kelli Shaver:</u>	Yes. Flash of unstyled text I believe.

<u>Jonathan Stark:</u>	Yeah, probably. So cool, so that was a pretty fun bug report I have say.

<u>Kelli Shaver:</u>	So you’re solution in your aim was to cache the fonts.

<u>Jonathan Stark:</u>	Yeah, and I don’t know. I think that I take Jason’s comment to mean that they are handling all that so you shouldn’t need to worry about it because I don’t—I am not like, I know enough to be dangerous to the server but I’d never gotten super duper into configuring like caching. Occasionally, I am going in like configure like to make sure stuff is getting setup but it’s always something I have to look up and you know, and carefully implement it. It’s not like I do enough memorizing and stuff.

<u>Kelli Shaver:</u>	I mean I have to be honest. I have done it before on a server level but a lot of times, I just destroy something in it like an app cache file.

<u>Jonathan Stark:</u>	Yes.

<u>Kelli Shaver:</u>	That is two other fonts in there.
<u>Jonathan Stark:</u>	Yeah, I have done that on a—I go back and forth between using app cache and my personal site and it really does work for the fonts. I mean it is like amazingly fast. It’s probably you know, I don’t know, like a few maybe a hundred or 200 millisecond faster but it feels like bang.—it’s unbelievable.

<u>Kelli Shaver:</u>	Yeah, I did that when I redesigned mine just last time. I can tell the difference.

<u>Jonathan Stark:</u>	Yeah, you’re like, *“Wait a second, did it work?”* Yeah, that’s the fun. Like, *“Damn.”*

<u>Kelli Shaver:</u>	Like I can see it change.

<u>Jonathan Stark:</u>	Right. But I go back and forth though because having app cache in your site is really annoying and a lot of other reasons that is like analytic for example or this is just like, it’s just like or you are just like—I play prefast and lose in my personal site and I can’t tell you how many times I am like, *“Oh God. It was the app cache.”* Curse this app cache.

<u>Kelli Shaver:</u>	Yeah, what annoys me is that—I mean the browser checks the file last modified time to see if it needs to update from. It checks the app cache file last modified time.
<u>Jonathan Stark:</u>	Actually it checks to see if the file is different.
<u>Kelli Shaver:</u>	Right, yes. That is right. Instead of checking the last modified time so you can’t attach the file from the command line.
<u>Jonathan Stark:</u>	Correct.

<u>Kelli Shaver:</u>	You have to actually go and unchange it.

<u>Jonathan Stark:</u>	Yeah.

<u>Kelli Shaver:</u>	If it is the version of your app cache.

<u>Jonathan Stark:</u>	Yes exactly. And I have seen—I have actually written PHP files that automatically hash the contents of all of your files under your directory so that any time you changes your CSS file or whatever, it automatically changes your app cache but that is not a good idea.

<u>Kelli Shaver:</u>	I have written PHP scripts before just to just run from the command line to regenerate the app cache.

<u>Jonathan Stark:</u>	Yeah, that is the way to go. If you have a site that is even modestly easy and complicated, you just can’t you know, go through.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	I am doing a side project right now that has a serious app cache component and been doing a lot of experimentation with the differences between I was 5, I was 6 and whether or not an app is launched from the home screen, as a full screen web app or if its running in a browser and then also testing on a few Android devices and the different side limits and the behavior is just woof.

<u>Kelli Shaver:</u>	It adds up quick.

<u>Jonathan Stark:</u>	Woof. Yeah, it’s crazy. Not I didn’t really mean to go off an app engine, but if people check out the financial times labs site, there is a blog there that is easily the best advice of how it’s building like web apps with app cache how to do it most easily. And the basic advices, boot strap at the minimum number of files you possibly can using the app cache and then do everything else with like Java Script and storing things in local storage and secret data base and all that. Equaling Java Script from the database, so cool. Well speaking of, I guess I didn’t mention tools but…

<u>Kelli Shaver:</u>	You did mention Java Script.

<u>Jonathan Stark:</u>	I did mentioned Java Script. Speaking of Java Script, we’ve got some cool tools to talk about this week.

<u>Kelli Shaver:</u>	Yes we do.

<u>Jonathan Stark:</u>	So I’ll let you start off with Knockout.js which I have heard of before but I think I heard of it when I was kind of like looking at Ember in backbone.

<u>Kelli Shaver:</u>	Yeah.
<u>Jonathan Stark:</u>	And I am also hearing about knockout in angular.

<u>Kelli Shaver:</u>	Yes. The first time I was introduced to it which was very recently. It was kind of a backbone alternative even though they are sort of two different things and I was looking at both Knockout.js and Angular.js both, and I am not going to claim expert in either one of them cause I have done a very little with Knockout.js and nothing with angular other than look at the docs and to site I like Knockout’s implementations a little better. The idea behind Knockout.js is that it’s a library for data binding and so essentially they binding through data attributes, binding elements in your HTML to Java Script objects and so then as soon as those objects are updated it’s automatically updated in your HTML; you don’t have to listen for advance, you don’t have to responds to events, you just bind your HTML element through the data object and then admittedly that data object shall give you a detour and the Knockout particularly does the job for you.

<u>Jonathan Stark:</u>	Yeah, remember a while at back probably about six months ago? I wrote something called Botique.js?

<u>Kelli Shaver:</u>	Yes. That is what I thought of when I saw it.

<u>Jonathan Stark:</u>	Yeah and I’m very curious about how they implemented it because what I wanted to do—I kind of gave up on it ‘cause I could not find a way to do it the way I thought it should work, was to throw events. You know, like if you update a few storage, update single database just throwing an event and then have different you know, when you create HTML elements in your HTML, you just put in there like, *“Hey, listen for any changes to this data model and if the change app is in you know, refresh yourself.”*

<u>Kelli Shaver:</u>	Yeah. I immediately thought of you when I sort of reading this and seeing a few examples of it in action is like, *“I really need to talk to Jonathan about this.”*

<u>Jonathan Stark:</u>	Yeah. That is what it should be for but that it was something—the issue was I couldn’t listen, if I remember it correctly it’s been a while, but it was a really small thing to implement it. Maybe it was a hundred lines, it was no big deal. But the problem was I couldn’t bind to—I could not say on a particular like date of tag you know, like say like wrap of tag of list of items or URL. Those are going to wrap things or items, I could not bind to that and have that listen for events. I have to listen at the document level and then go find all the things so you know what I mean, it’s going to turn really complicated like I was going to have to—I am not even sure how could I have done it, it’s like I have to register. Yeah, it was weird. It was like, it basically took the error to myself. I was like, *“Oh crap, you know. I probably should have used backbone”* 

<u>Kelli Shaver:</u>	Yeah, I don’t know. I haven’t looked at any of the Knockout.js source script, and I don’t have that doings under the hood. From the little bit of experimenting I have done with it, it seems really nice and I think I am going to figure how to use it on the new version of moodily that’s in the works.

<u>Jonathan Stark:</u>	Oh yeah. I forgot to put that in the show notes. Tell us about moodily a little bit and how you think it might use Knockout for it.

<u>Kelli Shaver:</u>	I am redoing moodily version too and it’s going to be—the initial version, I did it as a Sinatra application and I think now I am going to redo it with Rails and that’s largely just because I want to get back into doing what Rails Development on myself just because of is such a marketable skill to have.

<u>Jonathan Stark:</u>	Yep.

<u>Kelli Shaver:</u>	And when I get back to the old, I am more familiar with some of the changes that it came out with the newer version of Rails; that sort of thing.

<u>Jonathan Stark:</u>	Yep.

<u>Kelli Shaver:</u>	And one of the things I want to do when I redo moodily is get a huge URL overhaul. I am looking for it to be a lot cleaner, more responsive and a lot more mobile like the mobile first approach to it.

<u>Jonathan Stark:</u>	Cool.

<u>Kelli Shaver:</u>	So there is probably going to be more—I guess some more Ajax component, some more, just a more refined responsive UI.

<u>Jonathan Stark:</u>	And more emoticons.

<u>Kelli Shaver:</u>	And more emoticons., yes. You saw my, I sent you a sneak peek of my…

<u>Jonathan Stark:</u>	Yeah, totally hilarious.
<u>Kelli Shaver:</u>	Yeah, I think I am going to go just setting the one big slider to you know, picking an emoticon that describes your mood. If you want to say more, say more.

<u>Jonathan Stark:</u>	That is so funny.

<u>Kelli Shaver:</u>	Yes, I found those and purchased a license for them. I think they are great, I love them. Little blue, crazy little blue emoticons like there is no way I could have done this myself in less than a year.

<u>Jonathan Stark:</u>	I know. I mean looking at it, I am always blown away. To somebody that does like Photoshop work on that detail.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	…and expressive.

<u>Kelli Shaver:</u>	Yeah, it’s incredible.

<u>Jonathan Stark:</u>	Yeah. I think they are called very emotional emoticons or something like that.

<u>Kelli Shaver:</u>	Yes they are.

<u>Jonathan Stark:</u>	Hilarious.

<u>Kelli Shaver:</u>	Yes and it’s like you know, I have used Photoshop for years, I have a degree in design. I feel like I have that skills to do that type of stuff but I would never have the time and desire to spend that much time, that much detail into like one little thing.

<u>Jonathan Stark:</u>	Yeah. What are they like? How big are they?

<u>Kelli Shaver:</u>	I think the biggest ones are 128X128.

<u>Jonathan Stark:</u>	Yes. There is probably over 100 of them, 80 of them or something.

<u>Kelli Shaver:</u>	There are two different sets and each set was think 40 icons a piece and I picked 50 sets.

<u>Jonathan Stark:</u>	Yeah. I can imagine a woman just sitting there for an entire week just working on one, a 128 pixel square Photoshop file.

<u>Kelli Shaver:</u>	Yeah, they are that detailed.

<u>Jonathan Stark:</u>	Yeah, it’s like I could not do it.

<u>Kelli Shaver:</u>	I mean they are beautiful, it’s gorgeous work. I mean I tell you if I ever need an icon design, she is going to be on the top of my list the people I contact.

<u>Jonathan Stark:</u>	Totally. Yeah, the one with the streams of tears streaming out of its eyes or something, hilarious. They totally look like real, it’s like Disney.
<u>Kelli Shaver:</u>	Yeah. 

<u>Jonathan Stark:</u>	So good stuff.

<u>Kelli Shaver:</u>	Good for her.

<u>Jonathan Stark:</u>	Yes. So it looks good, like the style tile, mood board thing that you did so far. It’s going to be so cool.

<u>Kelli Shaver:</u>	Yes, I am super excited about it.

<u>Jonathan Stark:</u>	In your copious free time?

<u>Kelli Shaver:</u>	Yes.
<u>Jonathan Stark:</u>	So I had a Java Script tool that I came across called Markup.js.

<u>Kelli Shaver:</u>	Yeah, I was interested in this too.

<u>Jonathan Stark:</u>	Yeah, I have been looking really closely at app cloud which is a sort of like a phone gap competitor from break goof which is most well known for video hosting. They are kind of like a commercial grade, paid version of YouTube if I am not mistaken.

<u>Kelli Shaver:</u>	It has to start like to say it is not break hoof, it’s most known for break goof.

<u>Jonathan Stark:</u>	Yeah. You know, they got all these big content producers. So imagine that they were hearing from them that you know, they want to be mobile, it is so difficult you know, we need to get these videos into mobile apps, and that is easy for you to do that so this must be seen as opportunity and they created this app cloud thing which is like I kind of said, kind of like phone gap. It’s a wrapper concept you know, HTML, you write HTML app and they get wrapped in a native wrapper. And so anyway, I have been looking at it. It’s different than phone gap. The wrapper has a lot of differences. It supports multiple files for example. It’s not like a single page app. You can make it like a multipage app and there is a different kind of manifest and it doesn’t access as many of the device APIs but it has—it’s like a whole suite of things. And one of the things in this suite is this Markup.js which what you’d use in template if you are going to use app cloud. And so I have never heard of it and I was just like looking at it and I was like, *“Oh my God, this is the Java Script template engine of my dreams.”*

<u>Kelli Shaver:</u>	Yes, it’s what you wanted Moustache to be.

<u>Jonathan Stark:</u>	Right, it’s exactly what I wanted Moustache to be. Like moustache pride is all funding logic less but to a fault.

<u>Kelli Shaver:</u>	It takes it to a little too far.

<u>Jonathan Stark:</u>	Yeah, It’s like I want to modify single time every single time my array just because I want  all caps here and not over here or a different day and particular place. And so what Markup.js does is like the exact same concept as Moustache except you can pipe values into you know, *“pipe”* values into Java Scripts functions in the template and it’s like trivially simple. Then there is like 40 built in pipes to begin with and it’s really easy to write you own. 
<u>Kelli Shaver:</u>	Yeah, that is really cool.
<u>Jonathan Stark:</u>	Yeah, it’s awesome. So like you can be familiar with moustache and imagine like you know, a moustache—it doesn’t looping basically the same way and you know, the variable substitution is basically the same way. You got like the curly brackets but after your variable name, you put pipe and then you can say like a function and you know. It’s just like a single word like up case or down case or date format or greater than and then you can give it a parameter. So you can say like; you’ll be just like… Let’s say the data point is A; you can say A then the pipe greater than and then parameter, 50. And then you do one thing like do it with your old and then the else would be like, *“Oh, you’re so data lover or whatever.”* For me, it is the perfect balance of simplicity and power and it’s really small. I think it’s 1.7K, something like that.

<u>Kelli Shaver:</u>	Yeah, it’s tiny.

<u>Jonathan Stark:</u>	Yeah, it’s great. It’s super easy to extend. It does everything you wanted to do. And the guy who wrote it you know, he said the same thing. He’s like, *“I wanted to use moustache but it didn’t do enough.”* And every time I look at handle bars I am like, I feel like I am looking at a sense of touch. What? Accusingly, this terms, you know.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	And those guys are wicked smart like [Inaudible 00:34:42]. I think you have heard of the one that originally the created handle bars.

<u>Kelli Shaver:</u>	I think so.

<u>Jonathan Stark:</u>	And I am like it’s too far than the other way. You know, it like it does average and that is not what I want. I just want something simple that does enough.

<u>Kelli Shaver:</u>	Yes.

<u>Jonathan Stark:</u>	Right. So I am absolutely going to use Markup.js in my—I am actually working on a demo app and I am going to use Markup.js to see if it’s really as awesome as it looks. Pretty use, it would.

<u>Kelli Shaver:</u>	Yeah, you first mentioned Markup.js and you know, like my brain went like to Markdown.js for some reason but yeah markup, not markdown. I totally went the wrong direction.

<u>Jonathan Stark:</u>	Heavens. So last week, I am pretty sure it’s last week, I mentioned Yeoman. 

<u>Kelli Shaver:</u>	Yes.

<u>Jonathan Stark:</u>	And I did give it a test drive over the weekend. I think it’s was a n overstatement to say it blown away but I was really impressed. And it looks like it will be the thing that makes me make the leap to compass as and all that stuff, potentially even copy script. What was the name of the app you used? It’s like live code.

<u>Kelli Shaver:</u>	Code kit?

<u>Jonathan Stark:</u>	Code kit, right. So Yeoman is basically command line tool that has a bunch of sort of code kit work that it will like live recompile CSS preprocess of file and copy script and does it reload the browser too? Yeah? So Yeoman does that as well and it’s bordering on magic because you basically say you are going to see in the directory, you say, probably I would get it wrong but you say something like Yeoman in it and then Yeoman server or Yeoman run; I think it’s Yeoman server and it starts up a no JS instance and your browser launches. It go straight to that page and then you edit stuff and as you save the files, your browser reloads. So it’s just like code kit but there is no gooey. Here is the thing that blew my mind, here is where my mind is blown; I was like, *“All right, I am on my local network so let me point my iPhone at this IP address of my desktop machine that I was working on.”* So I did that, it turn off Bang. It loaded, which is to be expected but this killed me: *When I saved on my desktop, even my phone mobile refreshed.*

<u>Kelli Shaver:</u>	Oh nice.

<u>Jonathan Stark:</u>	I don’t even understand how it works in the desktop, never mind, but like how does that work?

<u>Kelli Shaver:</u>	On the desktop, there is a couple of ways that you can do it. There is Java Script you can include in your page that somehow communicates with the Chrome API.

<u>Jonathan Stark:</u>	That makes sense.

<u>Kelli Shaver:</u>	Or you can programmatically interact with that putting of the API in the Chrome. 

<u>Jonathan Stark:</u>	Right, it’s not something that though. I checked that. Unless it’s injecting Java Script into like the memory space of the page without it being visibly included, you know what I mean? Like that can’t be.

<u>Kelli Shaver:</u>	That is hmmm.
<u>Jonathan Stark:</u>	That can’t be. Like how could—the web server couldn’t do that.

<u>Kelli Shaver:</u>	Yeah. Like how could the web server force the page?

<u>Jonathan Stark:</u>	Yeah, how does the web server force the page on mobile phone refresh. And there is no network process or you know, activity. Indicator. Nothing, it just refreshes.

<u>Kelli Shaver:</u>	Yeah, I think it’s something specific to web kit browsers and I don’t think you can do it in like mobile version of Firefox.
<u>Jonathan Stark:</u>	That is a good point, I should check that.

<u>Kelli Shaver:</u>	I think it’s web kit specific.

<u>Jonathan Stark:</u>	It’s almost like, I mean my first thing like, *“Oh, must be like long pulling or something”*, with the web servers keeping the connection open with by never completing the request and then when I save something, it’s sends more down.

<u>Kelli Shaver:</u>	Could it be a web socket thing maybe?

<u>Jonathan Stark:</u>	It must be. I have no idea. It’s like it’s totally behind me, I am like blown away.
<u>Kelli Shaver:</u>	Some kind of web socket interaction with that API that says, *“Hey refresh.”*
<u>Jonathan Stark:</u>	Maybe. The thing that is cool about is it’s like creates the shadow browser concept where the you know, I could have like six devices open assuming that it works in another browser. I could have like Kindle Fire, iPhone, Android, another laptop, or Chrome book. Have it all pointed at this thing and just be saving you know, working on my laptop saving and like look over and everything else as long as the screen didn’t go to sleep.

<u>Kelli Shaver:</u>	Yeah, it’s like DAY Edge inspect.

<u>Jonathan Stark:</u>	Exactly, it’s freaking awesome. And that is just one feature, it does like a whole bunch of stuff.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	So you do just like a Yeoman deploy—I am probably getting all the names from but it is Yeoman deploy or package I think it is that concatenates all your Java Script files. Like you know, it does everything. It has test runners in there, has a bunch of stuff that is totally beyond me and let me tell you the install process was hilarious. They have like a brew install Yeoman or whatever and it’s hilarious. They have like a Supermario brothers colored graphics, it come down in the command line.

<u>Kelli Shaver:</u>	Nice.

<u>Jonathan Stark:</u>	It’s hilarious. Like the level of polish and humor, it’s great. It’s amazing so it’s so fun to use. I am trying to think if it does any—I am pretty sure it does—I think Yeoman in it also gets creates a great repo.

<u>Kelli Shaver:</u>	I feel like it might, from little what I have seen in it.

<u>Jonathan Stark:</u>	Yeah, it does everything you want you know, and off in the command line. There’s ton of stuffs. Oh right. And you can just go into an empty directory and be like whatever it is that Yeoman create or Yeoman new app or something and it asks you a couple of questions and then Boom. You got you know, HTML boarder plate, you got Boot strap. If you want it, you got it. J.crew if you want it. All the stuff that you probably use anyway and it’s like *“Bang.”* there it is.

<u>Kelli Shaver:</u>	Nice.
<u>Jonathan Stark:</u>	Start coding, you ask for it. 

<u>Kelli Shaver:</u>	I am begging to automation tools lately. 

<u>Jonathan Stark:</u>	Yeah.

<u>Kelli Shaver:</u>	 That is my newest obsession and maybe we can have a talk about this futher when they have a lot of cool services and stuff.

<u>Jonathan Stark:</u>	Yeah, that would be great.

<u>Kelli Shaver:</u>	So maybe a topic for another episode.

<u>Jonathan Stark:</u>	Yes. So let’s say, I got one more tool to talk about and then app.

<u>Kelli Shaver:</u>	Yeah, this is not what I actually heard of before so I am interesting to hear about it.

<u>Jonathan Stark:</u>	I was really disappointed in the internet for not letting me know that this has existed before.

<u>Kelli Shaver:</u>	How dare you internet?

<u>Jonathan Stark:</u>	Yeah, really. So the thing is called *“Reflection.”* And the company who makes it I think is *Squirrel.* In my opinion, they kind of scramble a little bit on the branding because at some places it’s called Reflector and some places called Reflection and they also make *Air Parrot* and a lot of it from the email you know, the licensing emails reversibly said Air Parrot instead of whatever it is. So anyway, the name of the application that I am talking about is Reflection.app. It’s a regular desktop Mac binary application. It’s available at *Reflectorapp.com*. It’s even called Reflector in the page but when you download it, it’s called Reflection.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	It’s confusing. So I am going to call it *Reflector*.

<u>Kelli Shaver:</u>	Okay.

<u>Jonathan Stark:</u>	Anyway, what it does is it turns, just to totally simplify it, it turns your Mac into an Apple TV. So when you open up an iPod or you open up iTunes in another computer, or you open/launch up something on your iPad, you can airplay to the computer which is crazy useful.

<u>Kelli Shaver:</u>	Yeah, I have been using a little app to go to the other directory. I actually use my iPad as a second monitor for my Mac.

<u>Jonathan Stark:</u>	What was it called?

<u>Kelli Shaver:</u>	Air Displayer
.
<u>Jonathan Stark:</u>	Yes, I have heard of that. Air Displayer. And you can use that as an external monitor and it’s not mirroring.

<u>Kelli Shaver:</u>	Right, and you can mirror it if you want too but you can also use it as an extra monitor. So I found myself using it like a second monitor for my laptop so I can do things on my laptop and just like drag all my power tools over the iPad and have the main work space on the laptop.

<u>Jonathan Stark:</u>	Cool. So for training, this is going to be a huge big deal for me because what I have been doing in the past is I have this like web camera on a goose neck that I point down at the phone or on the iPad or whatever and it’s not a great solution.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	So this is like huge for that and I do a lot of you know, from working on something; generally always the flow that will do it in the web browser on the desktop so like desktop chrome and I’ll do like you know, when I am done with a piece of work, I will virtually always make like a quick 3 to 5 minutes screen cache to it and sent it to the clients. So you know ‘cause it’s been a night probably. And they can look at it later and be like, *“Oh. Okay these are the things to test. These are the things to work and these are the things that are not implementing like this buttons don’t work.”*

<u>Kelli Shaver:</u>	Yeah, and I just want to have a side note here. You’re the first person I know of who’s actually when presenting things to their client actually send screen cache to it rather than just send photos or emails or whatever. And I have to say I have started doing that a couple of occasions that I picked up from you and like they really respond to it so much better.

<u>Jonathan Stark:</u>	Oh, it’s so much better.

<u>Kelli Shaver:</u>	It is, it’s so much better.

<u>Jonathan Stark:</u>	And it’s easier for you. I don’t know why everyone doesn’t do this.

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	It is really easy. It is way easier than typing. The other thing is, like a lot of times, the two things that happen:

>>One is that a lot of times, if I went to type something out I will less something out you know, when you can see the other person kind of like their mouse cursor is hovering over something, they are like thinking about it. This is just like way more information transmitted. It’s dead simple. There is no question about like you know, people understanding the terminology and using in their writing. They can see what you are supposed to do.

<u>Kelli Shaver:</u>	Yeah, I have a tendency to sometimes be too technical on my writing.
<u>Jonathan Stark:</u>	Yeah, it was hard. It was really hard. You know, you are not going to say, like the photos are typing I would not be like you know, you say, *“Tap on this button, and this dialogue should appear.”* You are not going to say stuff like, *“Tap on this button and you should see a dialogue spring from the background to the fore ground with a pop animation…”* You are not going to talk through all that stuff. 

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	So if it didn’t do that and I don’t know, it’s just from years of like going back and forth over email and like them saying it doesn’t work and saying it does and you know and then eyes on the screen cache, “Oh..”

>>Oh, so that is one thing. 

>>The other thing is a lot of times, I catch bugs the last second when I am doing screen cache where I am like, *“Okay, I went to a full run through all the features that I implemented…”* And things go like bap bap bap bap, and if there is going to be a bug, it’s going to come right then.

<u>Kelli Shaver:</u>	Yeah, it’s like an extra step on your part on observing quality.
<u>Jonathan Stark:</u>	Yep, it’s a double check. So yeah, I think the only trick to it is trying to make it really short like 3 to 5 minutes so you can upload them and email them fairly reasonably.

<u>Kelli Shaver:</u>	Yes, so the file size doesn’t get huge.

<u>Jonathan Stark:</u>	Right, a quick time is really bad about creating huge files so trying to like a ProApp like flow which is expensive but you know, I use it on a ton of stuff so it makes sense for me.

<u>Kelli Shaver:</u>	Yeah, everyone I know have screen flows and it’s worth it.

<u>Jonathan Stark:</u>	I mean if you do like any kind of like screen recording, it’s so easy to use. So there is another tool for you, Gang Screen Play. It’s great, it’s so awesome. It’s difficult to go back to like other editing programs like, *“Oh God. How do I use this thing?”*

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	So I guess that brings us to the end. I thought it’s going to be a 2 hour show.

<u>Kelli Shaver:</u>	Yeah, probably could have been. I have a longer list if you like me to.
<u>Jonathan Stark:</u>	Actually I have to get back to coding in Xcode. Yeah, I am doing some Xcode.

<u>Kelli Shaver:</u>	Some Objective-C.

<u>Jonathan Stark:</u>	Honestly, the new XCode, you can do so much with the story board that I have barely have to touch any of the objective-C but that is the next step: finding some data to table views and collection views.

<u>Kelli Shaver:</u>	Yeah.
<u>Jonathan Stark:</u>	So I guess that is our show for this week. I am Jonathan Stark.

<u>Kelli Shaver:</u>	And I am Kellie Shaver.
<u>Jonathan Stark:</u>	We hope you to join us again, not next week but the week after for the <b>Nitch Podcast</b>.

<u>Kelli Shaver:</u>	Next year.

<u>Jonathan Stark:</u>	Next year. See you next year. See yah.

<u>Kelli Shaver:</u>	Bye.
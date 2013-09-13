Episode 63: Disco Mode
====
June 28, 2013

Running time: 42:45

Jonathan and Kelli talk about responsive design, progressive enhancement, and development tools in the context of a big huge site redesign.

<audio preload="auto" controls>
	<source src="https://s3.amazonaws.com/nitch/Episode_63_Disco_Mode.mp3" type="audio/mpeg" />
	<source src="https://s3.amazonaws.com/nitch/Episode_63_Disco_Mode.ogg" type="audio/ogg" />
</audio>

[Download (33.9 MB)](https://s3.amazonaws.com/nitch/Episode_63_Disco_Mode.mp3 "Episode 63: Disco Mode")

## Related Links

* [Brad Frost](http://bradfrostweb.com/ "")
* [Josh Clark](http://globalmoxie.com/ "Global Moxie :: Mobile Design Strategy and User Experience")
* [Dan Mall](http://danielmall.com/ "Dan Mall  //  Creative Direction &bull; Art Direction &bull; Design &bull; Strategy")
* [SVG Support](http://caniuse.com/#search=svg "Can I use... Support tables for HTML5, CSS3, etc")
* [Steve Souders](http://www.stevesouders.com/ "Steve Souders - High Performance Web Sites")
* [Fixed Positioning in Mobile Browsers](http://bradfrostweb.com/blog/mobile/fixed-position/ "Fixed Positioning in Mobile Browsers")
* [Basecamp](http://basecamp.com/ "Project management software, online collaboration: Basecamp")
* [Github](https://github.com/ "GitHub · Build software better, together.")
* [Codebase](http://www.codebasehq.com/ "Codebase - Git hosting, Mercurial hosting &amp; Subversion hosting with complete project management - tickets, milestones")
* [Compass/SASS](http://compass-style.org/ "Compass Home | Compass Documentation")
* [CodeKit](http://incident57.com/codekit/ "CodeKit — THE Mac App For Web Developers")
* [The Asset Pipeline — Ruby on Rails Guides](http://guides.rubyonrails.org/asset_pipeline.html "The Asset Pipeline — Ruby on Rails Guides")

## Titles

* Whac-A-Mole-Ish
* Happily Jumping On Bandwagons
* Dalai Lama of Performance
* Disco Mode
* Baby 2.0

## Transcript

JS: Hello and welcome to the Nitch podcast for Friday, June 28, 2013. I’m Jonathan Stark…

KS: And I’m Kelli Shaver.

JS: We’re here to talk about building apps that run everywhere. This week we talk about responsive design, progressive enhancement and development tools in the context of a big, huge site redesign. Please stay tuned, the Nitch podcast is next.

KS: I almost didn’t get my name out there.

JS: Sometimes it’s hard, I know. How’s it going?

KS: I’m here.

JS: More barbecued chicken disease, that’s no good. Hey, you got a free I-Mac or something.

KS: Until they figure out they haven’t charged me for it yet, probably yes.

JS: Nice.

KS: They shipped it before processing the payment.

JS: Oopsy, hopefully they don’t listen to the podcast.

KS: If they don’t process it in a week or two, I’ll give them a call. Give them a chance to catch it first so it doesn’t screw it up and charge twice.

JS: Yes, that recently happened to me, that exact same thing. Not with a product, but where the fix was worse than the original problem. Six months later I finally get it worked out.

KS: I’m the person that stole garbage collection for seven years, but that’s another story for another day.

JS: I don’t know where to go with that.

KS: It wasn’t intentional.

JS: It never is when you steal garbage collection, anyway.

KS: Moving on.

JS: Moving right along you mentioned before the show you’re going to do a Rails 4 project. I guess Rails 4 was announced today.

KS: I think it was yesterday it was released. I haven’t really done anything with it yet, but yes I’m going to dive in and work on a silly little weekend project and go ahead and do it in Rails 4 I think. We had planned, me and a friend had planned to work on it this weekend anyway and then with the Rails 4 announcement yesterday, what the heck dive in and do it in Rails 4.

JS: Any particular big changes.

KS: To be honest, I haven’t really had a chance to keep up with it that much. I’m not the right person to ask that question right now. I need to go through and read some of the changes. I believe they just… I’ve done more towards toward decoupling some things and things that were built into Rails by default. Now you can include via gems if you use them or down, that kind of thing.

JS: A little more modular maybe.

KS: Yes, I think active record is one of those. I assume with various different data base types and [Inaudible 00:03:06] stores and all that, that not everyone using Rails needs active record.

JS: Good point. I was going to say active records seems like the main attraction of Rails. That’s a good point. I look forward to hearing all about it on a future episode.

KS: Yes.

JS: Some quick housekeeping before we blast into the content. If you’ve been following along dear listener, you know that last week and the week before, loosely speaking, the last two episodes I should say. We’ve been doing a screen cast, two or three; we’ve done three so far haven’t we?

KS: We’ve done three. I don’t know, are they all three up?

JS: Yes, I think; yes the one I posted this morning is the third one. I’ve done screen casts in what looks like it will be a four-part series on building a Rails API, sorry a rest API with Rails, which now will probably be out of date with Rails 4. We have to take a break from that this week and do a regular podcast. Then we’ll probably next week get back to that fourth installment, hopefully, final installment of that.  The last few weeks for me have been totally crazy. Sleeping three hours a night if at all and working on these two projects where the schedules ended up colliding. They were supposed to be back to back but they ended up simultaneous for a variety of reasons. They were both very similar projects with almost the identical team. I was working with Josh Clark and Brad Frost and Dan Mall and few other folks on a couple of big, big publishing websites. Since a lot of this stuff that we’ve talked about on this show has been smaller sites, I thought it would be cool to do a little bit of a postmortem about how our Nitch schpiel applies to a larger context and how well it works or doesn’t work or what might be different, that kind of thing.

KS: Yes, that would be interesting because we talk about building a lot of small sites, but interesting to see what bits of the things we talked about you put in practice on the big ones.

JS: There were a couple of exceptions but TLDR, it basically all works, so that’s good.

KS: That’s good to know. And doing this next week for…

JS: That’s our show for this week. I don’t know if we need to go into too much depth on each one of these. I’ll go in and blast through and if you have questions I guess we can expand on some of the points. I think it falls into three big categories; responsive design, progressive enhancement and development tools. All of those, I learned a lot about each of those things in the context of these projects. I should say they haven’t gone live yet because they’re in the integration phase now which another company is doing. I totally cannot wait to announce these because I’m super proud of both sites.

KS: Yes, I’m really looking forward to them.

JS: They’re both such huge improvements. I think the clients in both cases, I know that they agree. It’s like the existing sites, in one case it’s going to completely replace the current desktop site, which is a super radical change. In the other case it’s going to; the new site is going to replace the M-dot and T-dot sites and potentially become the new desktop site, but not quite yet.

KS: Yes, I’m really jealous that I didn’t get to help you out with those, but I was writing a bit of my own things when you had that going on.

JS: That was nuts. The teams, it’s worth pointing out that the teams in both cases were basically the same people on our side of fence. On the clients side we were dealing in both cases of upwards of ten or twenty stakeholders. There’s a lot of project management, a lot of input. A lot of back and forth in the design rounds that were done by two different content strategists and information architect people, but the actual design and the design elements were put together by Dan Mall. He was super friendly, totally amazing, did amazing work. Then Brad Frost would take that and turn it into HTML templates. Then I would come in and swoop in at the end and do all the really geeky JavaScript interactions, the web side integrations for the data environment. That was the basic and then Josh Clark was managing the whole thing. That was the basic setup to give you a feel for how many people were involved. Both projects you’re talking like; both sides of the fence you’re talking easily 20.

KS: Twenty or thirty people.

JS: Easy 20 maybe 30 people. With that context set, just a couple of points about responsive design. Both projects were pure responsive design. That was the whole point of the project to take a situation where companies had two or three versions of the website and turn it into one or two. Like I teased a minute ago, it totally works. Responsive design completely it’s awesome. We say this all the time, but sometimes it’s arguable. Yes but if you have this huge site with tons of different page templates does it really scale so to speak. The answer is yes, it totally works. You do have to start small and work your way up. We’ve said that tons of times. It’s even more true on a really complicated site. Both sites are extremely complicated from a design standpoint. They change radically, the different screen sizes. It can feel like extra work, especially when you’re testing. Every time you make a change you’ve got to pull out your Android 2.3 device, you’ve got to pull out a Kindle Fire. We were testing a Nook, Kindle E-readers. We were testing on Windows phone, you name it. That feels really hard. I don’t think it’s really any extra work because you only have one site. You would have had to do all that testing anyway, but it would have been on three different sites.

KS: Then you would have been trying to track bugs between them.

JS: It feels a little wackamolish at times no doubt, but that’s web design anyway. I don’t know if it’s specific to responsive. The good news is that browsers are getting really good. We used a ton of really advanced techniques in the progressively enhanced versions of the sites that I’ll talk about more when we get to that. Really the big exceptions right now in terms of popular browsers that have still a reasonably significant market share; the Android 2.3 device browsers, the stock browser on Android 2.3 is really awful at some of the more advanced things.  Obviously IE 8 and lower is a little rough. Totally, you can totally make it work. Those are the ones you have to watch out for, but things like basically any modern IOS browser, all of the Android stuff that’s 4.1.1 is a little wonky but not too bad. As soon as you get up to 4.2.2 I think it is Android 4.2, the browser is really good. Windows phone browser has been good from the start. I have mobile version of IE 10. Blackberry, you know Blackberry’s rough. Sort of depressingly I suppose for them. Nobody even cared about testing on Blackberry.

KS: Sad.

JS: They ignored reality for too long. I guess the only things I… From a technical standpoint the only thing I want to mention is that I am frequently quoted or frequently heard saying that you always do min-width media queries. When you’re doing responsive web design a big tool in the box of responsive web design in media queries. As the saying goes, the first media query is no media query so you assume that you create a default non media query experience. Or a default experience outside of media queries that should be targeted to a narrow screen or small screen width. You enhance it from there using min-width media queries which we’ve talked about at length, so I won’t go into the logic behind that.

KS: I wish max-width didn’t even exist because people…

JS: People use usually and I’m going to say 80% of the time when you see somebody using max-width it’s them trying to…

KS: It started with the desktop.

JS: Right, they started with the desktop and they’re trying to reverse engineer or shoehorn it into a mobile site. I’m not really against that. I just think it’s very difficult to do and it’s a lot harder. If you know that’s what you’re doing and you have a desktop site and you just want to do some tweaks to make it a little bit better on mobile then fine, run some max-width media queries. If you’re starting a project from scratch you’re almost always making a mistake by using max-width because it indicates that you’re going from big to small.

KS: My very first project that I did with media queries, I did that right. At the time I didn’t know any better and the desktop layout was what I’d been handed by the designer. The end result was there was a lot, there ended up being a lot of duplication in the CSS, and CSS [Inaudible 00:13:15] ended up a lot larger than they needed to be.

JS: It was very noticeable to me during this project at one point when I decided I needed to use a max-width media query. I was like wow, this is a good…

KS: This never happens.

JS: This is… I tried and tried to do it with min-width and then I was like what am I doing, just max-width this thing and be done. I wanted to pay close special attention to that. The situation was that in the small screen there are basically three major breakpoints. They’re not really specific but for the situation I’m thinking of, the site that I’m thinking of there were basically three major breakpoints. There were small screens, which were like your small to medium size phones. Then you had big screens, which were seven inch tablety; then bigger than that was I-pad and bigger. Their search functionality at the top that was really, really complicated, it was designed drastically different on the small screen than on the large screens. Interestingly, the bulk of the CSS applied to the small screen, had to do tons of clever stuff to hide the small screen version. Also, there was a popup on it to changed the scope of the search, like on Amazon where can search just inside of books, or just inside of vacuum cleaners or whatever. There’s a ton of CSS applied to that that was for styling that popup that you could do much more easily on larger screens or desktop screens. I had all of the CSS that I put in as a default, so I start small and put in all the CSS and then as I was going up to the larger break points I was trying to remove it all. Whenever you’re trying to override a lot of CSS that was defined higher up in the document it’s a nightmare. All of the CSS really only applies to this small screen situation and so I did a max-width and then as soon as I popped over, I don’t remember exactly but let’s say it was 320; 320 pixels or whatever we did in M’s whatever the M’s were, that was around 18 M’s. Then all those things were gone. All that very, very small screen specific stuff was gone, never had to worry about it again and you could move on to your higher up media queries.

KS: Those were the places where the max-width is really useful.

JS: Yes, when you’re trying to basically delete a bunch of stuff you did at a smaller size. The flipside of that though is that you want to make sure that you’ve got some default styling for that sort of widget that is going to work on devices that are small, but don’t respect, they won’t recognize the max-width media query so they’ll ignore all those rules. You do still want to have a non-media query set of rules that will make a usable experience and not just hide it, make the search invisible basically. I thought that was worth mentioning.  We can move on to progressive enhancement, that kind of segways in there. I didn’t really… I did only enough CSS to enable certain JavaScript functions. The way that we did it, there was a real separation of concerns between Brad doing the HTML and the CSS and me doing the JavaScript. There was some overlap where for example, Brad would do… he would write some interactions using hover or whatever. Every once in awhile he’d throw in a click handle or just so he could demo the spaghetti frames for the client. He would venture into JavaScript territory a little bit. I would venture into CSS territory and sometime the HTML territory when I had to write the amount of JavaScript I was going to have to write was ridiculous when all I really needed to do was change the source order via HTML. Or, a situation where I was building a widget and certain pieces of the styling needed to be exposed for customization later, you know what I mean?

KS: Yes.

JS: The client wouldn’t have to dig through the JavaScript to theme some kind of complicated widget.

KS: Right, they could just change to CSS. That’s what I was just going to ask you how it was. Usually there not… there’s usually not that separation of HTML, CSS guy and then JavaScript guy. It’s usually frontend guy and backend guy. It’s an interesting way to do it. I guess on a really large project it makes sense. It’s probably not how a lot people work.

JS: Honestly in retrospect I think it would have been a little better if I had gotten involved in the spaghetti frames stage and done the little JavaScript interactions that Brad did. Some of things that I had to do involved reorganizing the markup. That became a little tricky because he had written so much CSS that was dependent on the markup being a particular way so we really had to coordinate to get that done. That was very minor. Overall it was a really good workflow, but while I was writing the JavaScript I was very conscious. Some CSS I didn’t want the client to ever be able to touch because it was really structural to the interaction. Things like applying, programmatically applying widths to things or programmatically applying transitions to stuff only when the device supported it whatever. I would try and embed that stuff in the JavaScript where it was less likely to get tweaked by accident. That touches on future detection. The notion of progressive enhancement that we generally espouse is what we did here, which is that we started with designs basically like style tile kind of designs. Some page, some very basic page, black and white wire frames. We went to HTML really quickly and Brad is like an animal about doing very semantic markup. He was religious about it, which I love. Then he would apply the CSS to it and he was using min-width so he was building up, building up on the styles and everything. Then I came in and would do the same thing. It was like we did use modernizer to do feature detection. It’s one of the very few libraries we included. We would do things like, what’s an example? We would do detections for SVG, does this browser currently have SVG support. Dan and Brad used a lot of SVG for icons and that kind of thing in order to basically create vector graphics that would scale up without any kind of shenanigans on retina screens. I was surprised. I was not… I did not realize that SVG was as well supported as it is. Its super duper, it’s great.

KS:  It seems like it was not that well supported and not that long ago.

JS: I was really taken by… you guys are really going to use SVG but it works great. It’s a fantastic solution. Basically, and I was not familiar with it enough as I should have been but it was basically a way to dynamically create PNG files that are vector. They’re not really PNGs but you can think of them like any place you’d use a PNG you could use SVG in certain browsers. Like I said it worked great. They used a lot of icon fonts, frankly that was a little trickier the SVG. Basically what we did was in the CSS that Brad wrote; he wrote it by default to try and use SVG and then we would swap. Then we also a PNG version of all the SVG graphics and then I wrote JavaScript on Window load to go in and say hey if SVG is not supported then go swap out the PNG’s with … I’m sorry swap out the SVG, any image that has SVG, switch it to PNG which was actual image tags. Then in CSS code he coded it so it was .no dash SVG and then he did a background image for every item and used the PNG version of it.

KS: Then you just add classes.

JS: Yes, I page load. Modernizer would add either SVG or no SVG class to the HTML element. He wrote CSS to…

KS: Keep the backgrounds in those classes.

JS: Yes.

KS: Ok, makes sense.

JS: Honestly the way that he did it is really a graceful degradation approach because he assumed SVG support and then failed back to PNG then.

KS: It would have worked out the same either way.

JS: Yes I think so. The only issue I suppose would be on the… for content images. The actual image tags not CSS. You’d be serving the PNG until the page loaded and then you’d be grabbing the SVG. Since a lot of the mobile browsers that we were targeting do support SVG we defaulted to that.

KS: Right.

JS: Anyway, SVG’s definitely ready for prime time in your project. I am convinced after doing this project that it’s something to use on probably every project.

KS: That’s a bandwagon I will heavily jump on.

JS: Don’t ask me how they made the SVG, I have no idea. I assume it’s something that you can…

KS: You can do in Illustrator. Illustrator can export as SVG.

JS: So there you go. Another thing we did to great effect, which was fairly simple to implement. JavaScript wise was lazy loading images. One of the sites in particular has a huge, huge long home page with lots of images. They’re a big enough size that it’s a loading issue. We went in and basically had them author the HTML. Anything that they feel is going to be basically roughly below the fold. If something is probably below the fold then what they do is point the source of the image tag at a 1x1 pixel ping, super small ping and add a data attribute to the image tag.

KS: [Inaudible 00:24:28]

JS: With the real URL, yes.

KS: Then as you scroll down replacing the…

JS: We didn’t do it on scroll although we talked about it. We actually, Josh actually talked to Steve Suiters about this he’s like the Dali Llama of performance. He was like; yes you could do that but really just load up the page. Get the top of the page loaded and then as soon as you’re done with that then have the Script go through and pull, swap out all that stuff.

KS: You’re not waiting for it load as you scroll. It’s just quietly doing it after the first top of the page is loaded.

JS: Right and there is a way to do it that’s slicker than what we did, which would be to go through and define in each of the image tags what the height and width is going to be.

KS: I [Inaudible 00:25:18] to say, I assumed you had done that.

JS: That’s the slick way to do it, but there was no way for them to author that in their current back in system and it would be too much work. They wouldn’t do it. That was another reason to not do on scroll, because as you scrolled down these 1x1 pixel images would all of sudden be expanding into their natural size. That wasn’t going to fly. We just said get the page loaded so people can start looking at the top 1000 pixels or 2000 pixels, get all that stuff loaded. It’s like bang fast. It cut a lot of time off the load. Then if they look at that even for a couple seconds, then by the time they scroll down everything else is loaded.  It was really easy to implement. You can imagine it was like [Crosstalk 00:26:07]

KS: Yes it doesn’t sound difficult at all.

JS: We used a… let’s see SVG we used feature detection, a lot of feature detection for things like touch handling and SVG. What were some of the other things? I don’t think modernizer detects support for position fix but we did it. We had to do user agent sniffing for some things.

KS: Most things support position fix now, some of the newer stuff.

JS: It’s Android 2.3 that causes a problem. A lot of them do support fixed positioning. Some a little wonkier than others and some of them have some weird rules around it, it’s mobile we’re talking about here in those that we have the problem. Some of them force, you have to disable zoom on the page. There’s a couple of surprise gotchas. Oddly enough the Kindle E-reader supports fixed positioning if you can believe that.

KS: Of all things.

JS: A link to a… Brad did a great post on where fixed positioning works. The importance in which a link [Inaudible 00:27:19], but the important thing to point out is that at some point we did have to some user agent sniffing. Certain browsers will lie about support or they’ll have partial support that’s not good enough to do what we’re trying to do. We’ll be like look; it works everywhere except for right here so just throw in the dam conditional. We’re talking about… it gets down to that time where it’s time to ship and you’re talking about a fraction of your market. This is a tiny group of people that are on these older devices, maybe 5%. You don’t want to give them a crappy experience. Not the end of the world but it is the kind of thing that you do need to maintain over time. That was everything regarding the progressive enhancement. I was the last person to test because my code was going in last. I have to play; I need the JavaScript to minify it then go test everything again. Taking the approach of this really fluid responsive design, it didn’t have hard break points; it was basically sort of a fluid from small to medium to large to extra-large. Add that and then layer in the JavaScript base progressive enhancements. It worked great. Most of the time I’d launch a browser and some device and I’d be scared it was going to be totally broken and everything was fine.

KS: Nice.

JS: Yes it was awesome.

KS: I can’t wait to see these.

JS: I can’t wait to share them. That’s a good segway into tools that we used that were super, super useful. I guess the first two dimensions go without saying but they’re worth mentioning. Basecamp and GitHub were critically important pieces of our infrastructure. Not having either one of those would have been a disaster.

KS: That brings up a question. Have you tried Code Base?

JS: I don’t think so. It sounds familiar.

KS: Code Base is like what you would get if you took GitHub and Basecamp and squished them together. It’s basically project management with source control.

JS: Interesting.

KS: You can reference open tickets in your get commits and they’ll show you, your commits will show up in your ticket thread for your project and that kind of stuff.

JS: I will say that I found myself doing a lot of this. I’ll describe the work flow that I had a lot of. We had internal, so for each client we had an internal project that was communication between the art team of five to seven people depending on what stage of the process we were in. Then there was a public version of the project where the client was potentially in the loop. We would have a ton of internal discussion and then that would usually result in one post by Josh in the public site. They didn’t have to listen to the entire thread.  Here’s the work flow that could have been improved. It wasn’t’ too painful. We would put all the to do’s in the internal Basecamp project. Then as I would go down and knock them off I would pretty much commit per to do depending on how complicated the to do was. If the to do’s were appropriately sized then I’d go fix it or I’d go add it and then I’d do the commit. Then almost always the commit message, I would copy it. Go over into Basecamp, comment on the to do, paste in the commit message and it would have been really cool if I could have linked the to do’s to the commits.

KS: You could have used Codebase for that and link them up.

JS: That’s good to know. That would be… I think is I was going to… I think if we were doing maintenance, long term maintenance on a project that would be even more attractive. It would wear on your overtime. [Crosstalk 00:31:44]

KS: It would support tickets and that kind of stuff.

JS: That’s good to know, Codebase. Another thing that Brad created is something that he eventually open sourced and released a polished up version of that he calls PatternLab. It’s basically and I-frame, it’s like a little very short tool bar across the top with an I-frame underneath it and it’s got a menu. It’s kind of hard to describe. It allows you to create little HTML modules that you can inspect individually. You can click on a molecule, let’s say a search form or something like that and it will show it in the I-frame. Or you can collect a bunch of little modules together and create a page out of them or a template or an organism he calls them. That can become a higher up… I can’t really describe it. It allows you to create small pieces of HTML, CSS and JavaScript that you can then assemble into larger groupings. Also, on the other side of the UI it has small, medium, large, extra large buttons that you can click on and it resized the I-frame to be narrow or wide. I think he called it disco mode, where you just click it and it resizes like randomly and continuously. It’s great for showing the site to clients. You can say go here, click on the small and go through and look at everything. We’re not ready for you to look at the extra large yet. You don’t have to depend on them sizing the window to the right size or them looking at it wrong. At first I was kind of like I can do this by docking the developer tools to the right hand side. After a while I will say I did come to rely on it quite a bit and it’s a really nice thing so check out PatterLab.BradForrest.com.

KS: I’m looking at it right now.

JS: It’s pretty interesting. I don’t know how different the one he released is from the one that we’ve been using. It’s like a PHP thing so you create your stuff with PHP behind the scenes, but I’m sure you could import it to [Inaudible 00:34:13] without too much difficulty. There’s only really one real function that does the [Inaudible 00:34:21], I’m sure you should import it really easily. It doesn’t look like much but when you’re working on a project for weeks and weeks and weeks it does become pretty convenient and adds up over time.  The last thing I think you’ll be very interested to know is that since the project was… I mean the style sheets are enormous. There’s like, it’s easily hands down the largest style sheet I’ve ever had to go near in terms of work. Brad used SAS for it so when it came time for me to do my CSS, I generally created my own CSS file, included that in the page and I’d do all my work in there to try and avoid SAS. Eventually I’d have to take that and integrate it into the SAS files if he didn’t have time to do it.  I have to say I’m not as anti-SAS as I have been on previous episodes. I still don’t love it. There are certain things about it that are cool, but I don’t think they’re SAS things. I don’t really care for… the syntax is ok. The nesting syntax is ok. I could go either way on it. Sometimes it’s convenient, sometimes it’s a pain. I used your favorite tool, maybe not your favorite but CodeKit to make this easier for me. It worked great sometimes and other times it would crash my computer, so I don’t know what the story was with that.

KS: It must have been big.

JS: It was huge, yes.

KS: I haven’t actually used CodeKit in a while. That’s mainly because I’ve been dealing with Rails applications and Rails has all of that asset management built in with the sprockets gem.

JS: It was definitely, there were times when I would want to do work on a remote server. It was like you can’t just change it because then you have to recompile everything. I had to learn how to compile at the command line which actually is far easier once you know how to do it. The SAS syntax, the nesting and the variables, I could take or leave that, whatever. The things that awesome is the way the he had this one master SCSS file that included all the other ones and there were 40 or 50 other little files that got included. It became so manageable having that stuff in separate files.  I don’t know if that’s really a SAS thing or a Compass thing, but you can do that with regular CSS right? I’ve never gone to the trouble.

KS: You could, yes. You just use import stations.

JS: You use import stations, right?

KS: Yes.

JS: That wouldn’t compile it; this compiles it into one file.

KS: It wouldn’t have it all compiled into one.

JS: There are a couple things about CodeKit; I don’t think we’ll continue to use CodeKit because of the crashiness. It has a feature that I will want to use in the future which is the automatic compiling of the CSS and automatic minification of the JavaScript and with the syntax checking. That I loved.

KS: Yes I do like that about it but really I have only used CodeKit on small projects. The last time I tried it on a big project I did have some issues with slowness and a couple of crashes.

JS: It literally wiped out my computer on multiple occasions.

KS: It should probably handle those better, but at the same time I get the feeling that it’s not designed for the really big stuff. They figure the really big stuff you’re going to be using something; some sort of command line, build tool.

JS: Yes I suppose. For a project of this size, I don’t know if we would have been able to manage it without having the CSS broken out into individual files like that. How you decide to scrunch them all together, it doesn’t matter to me. I loved it, it was great. Even though with some blind text you can get that mini-map view and you can really easily see a huge file and navigate it. Forget it, having them in individual files is awesome; huge fan of that. It requires some discipline. You have to adhere to the logic.

KS: Right, whatever structure you’ve decided on.

JS: There were a couple times when I was like dam I don’t know; this is in the header but its search so should I be putting it in nav or in header or?

KS: Search.

JS: Right, so where do I put it, or in forms because it’s a search form. Brad had in the main file, the include file, the SCS file that did nothing but import all the other stuff. He wrote this huge table of contents with basically instructions on what should go where, it was genius. It was so obvious but it was genius.  It was great. I think everything that we talk about and advocate was totally validated on this project, these projects. It was so great. It was so much fun.

KS: I wish I had gotten the chance to help you out with them. I know at one point you asked me. I think there were a couple times where you probably could have used a hand. At that point it was too late, too far along for me to really jump in and save time. I was extremely busy with a couple of things of my own at the beginning.

JS: Yes, I feel like I’m ready to have a baby in October after this.

KS: Fortunately you’re going to.

JS: Yes, baby 2.0 is set to ship in October. I definitely, I haven’t in my life have not pulled that many all nighters; not in college ever, ever. I’m trying to get back on my regular schedule.

KS: You had a month there where you didn’t sleep.

JS: I would sleep; I would grab an hour or two on the floor or go try and... It was crazy. I didn’t ever sleep I just napped occasionally.

KS: I talked to you at 5:30 in the morning. I have to be up at seven, I’m going to bed now.

JS: It was rad. It was so great; I get to wrap up. It was so great working with this team because as dear listener will know [Inaudible 00:41:21], I don’t normally care that much about the more advanced CSS things. I’m just like eh, you know. Since I got drug into it by these guys who totally know what they’re doing and they know what works and that even a small benefit on a huge project is a big optimization. It really pulled me kicking and screaming into some of the more futuristic CSS at least. Definitely into some of these newer tools, so that was awesome, really cool. I had an excuse to buy a couple of devices in the process to do testing so that’s always good.

KS: You had to pay for yours though.

JS: Yes, but as long as I have an excuse I don’t mind.

KS: I don’t get charged for mine, yet.

JS: Speaking of which, I can’t sign off without sharing with the dear listener your big news.

KS: You have to share it fast. I have to leave in one minute.

JS: Sorry, we’ll hold. I was going talk about your [Inaudible 00:42:29] light bulbs.

KS: Oh yes, yes. We’ll have to get those next week.

JS: Excellent, so we’ll talk about that. Alright, so that’s our show for this week. I’m Jonathan Stark.

KS: I’m Kelli Shaver.

JS: We hope you join us again next week for the Nitch podcast. Bye.

KS: Bye.

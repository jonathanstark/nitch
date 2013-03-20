Episode 39: Ramblecast You Have Been Warned
=============================================

><u>Jonathan Stark:</u> Hello and welcome to the <b>Nitch Podcast</b> for Friday, January 11th 2013. I am Jonathan Stark.

><u>Kelli Shaver:</u> I'm Kelli Shaver.

><u>Jonathan Stark:</u> We're here to talk about building apps that run everywhere. This week we prognosticate about the future of computing, the effects of wireless connectivity on society and what we can do now to prepare for the network society. Please stay tuned, the <b>Nitch Podcast</b> is next. 

><u>Jonathan Stark:</u> Hello. 

><u>Kelli Shaver:</u> Hello. Good Afternoon. 

><u>Jonathan Stark:</u> Yes. Good Afternoon. I'm here to tell you it is like Africa hot here. Our boiler is like stuck in the on position so you have to shut it off manually. So, if you're out of the house for more than an hour or something it's just like *"craaanks."* 

><u>Kelli Shaver:</u> Oh yes we had an apartment in Calgary that was like that. It would be you know, little winter and freaking Calgary Alberta, and I have to keep the windows open and fans running.

><u>Jonathan Stark:</u> Yes, it's January in New England and I just closed all of the upstairs windows because there's too much traffic noise from outside. It's hot. You know something's wrong if your orchid is doing well. 

><u>Kelli Shaver:</u> In the middle of winter? Yes.

><u>Jonathan Stark:</u> In the middle of winter in New England, that is it. So you sent me an updated picture of your game cabinet. 

><u>Kelli Shaver:</u> Yes I just got two new ones today so I had to rearrange things and figure out where to put them.

><u>Jonathan Stark:</u> Yes, you might want to get a bigger cabinet.

><u>Kelli Shaver:</u> Yes I need a bigger cabinet.

><u>Jonathan Stark:</u> That Twilight Imperium looks pretty involved. 

><u>Kelli Shaver:</u> It is. An average game, well if we do a full six player game, an average game for us takes probably 8 to 10 hours. 

><u>Jonathan Stark:</u> What? Do you know what my reaction to that was? That was, someday when my kid is older I am going to have 8 to 10 hours.

><u>Kelli Shaver:</u> Yes. We usually, split it up over several days.

><u>Jonathan Stark:</u> Wow. Yes, I can't imagine 8 to 10 hours to play a game. 

><u>Kelli Shaver:</u> Yes, if we're just doing 2 or 3 players you know, we can get it done in 3 or 4 hours. A Mage-like can get close to that too.

><u>Jonathan Stark:</u> Those were the days, spending an entire weekend doing Duns and Dragons campaign.

><u>Kelli Shaver:</u> Yes. Yes.

><u>Jonathan Stark:</u> Like a pot luck weekend. 

><u>Kelli Shaver:</u> We have done that, we have done that. 

><u>Jonathan Stark:</u> Someday I can barely get together for poker night with my brothers. 

><u>Kelli Shaver:</u> Yes. We have, the geeks over every Saturday night. We usually go from 8 until 12 midnight.

><u>Jonathan Stark:</u> That sounds awesome. Speaking of geeks, I spent my afternoon with Little Red Jacks and Mod read right.

><u>Kelli Shaver:</u> Oh wow. 

><u>Jonathan Stark:</u> Yes. It's actually kind of soothing once in a while. Mostly because, it's one of those projects that's like, you putting a single PHP file on the server would radically complicate the workflow between the various parties. So whenever you need something dynamic, you either have to do a Java Script, or if it's one of those things that has to work without Java Script you have to become clever. That was like, *"Can we put an HT access files with the uploads?"* Like, *“Yes, you can do that.”* So okay, alright. So all of the sudden you get really creative, with server side includes and Mod Read.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> It's amazing how much you can do with that if you're forced to do it that way, it's actually, it's totally arcane but it's actually quite powerful. 

><u>Kelli Shaver:</u> Yes, there's quite a bit that you can do. It's just a matter of—I normally don't dwell that deep into HT access but yes, you can do quite a bit. I feel like, I feel like you can probably do even more EngineX.

><u>Jonathan Stark:</u> Probably yes. Who knows? Could very well...

><u>Kelli Shaver:</u> I've seen entire servers scripted in Lua inside an EngineX config file or you know, an entire layer of logic layer there.

><u>Jonathan Stark:</u> Wow. In your web server config. 

><u>Kelli Shaver:</u> Yes. There was a thing that came out a while back about an EngineX module for the—that would allow you to put Lua scripting inside of your EngineX config file.

><u>Jonathan Stark:</u> Wow. Not super familiar with Lua but every time I look at it, I'm like, *"Oh my God this is awesome." *

><u>Kelli Shaver:</u> Yes. I took a few days to learn enough, enough to be dangerous with it and I liked it.

><u>Jonathan Stark:</u> That looks cool. But dear listener, we're not really going to talk about the web today. We want to sort of take a step back and be kind of, I guess, talk about you know, what we see as a, atleast a likely future and sort of pragmatic things that we can do that will help us now even if we're wrong. That would work with the existing—sort of existing world order but also be very future friendly if some of these things that you know, we'd think will probably come to pass, to actually come to pass, but you know, if they don't then no big deal because this stuff we're sort of envisioning works everywhere because it's based on basic principles of accessibility and small pieces loosely join and sort of general, I think good practice concepts.

><u>Kelli Shaver:</u> Yes. It will work really good now and if it, if this things change in the future I think it will, it still work good. 

><u>Jonathan Stark:</u> Right. So if you get…

><u>Kelli Shaver:</u> Protocols, I'm sorry I didn't mean to interrupt. 

><u>Jonathan Stark:</u> No, no.

><u>Kelli Shaver:</u> You know, networking protocols and things like that may change. Everything may not be HTTP forever but I think the same principles still apply and you know, adapting to changes like that will be a sort of minimal task at that point.

><u>Jonathan Stark:</u> Right. It's well. Let me, I actually want to start by, I put my notes here, start by talking about things that seem constant to me. In computing or just maybe in general, in life. Those, because I think that's a good starting place for predictability. Let me put that in another way. I saw a really amazing talk that Jeff P. at their developer conference. It was obviously there were two narrow horns, it was developer conference but he said a lot of stuff that was really insanely, I thought, insightful. And one of the things he said you know, was, a lot of people, Jeff,  *"A lot of people ask me what's going to be, what's the future going to like the next 10 years. What are the new things that are going to happen the next 10 years.”* He was like *"I think the more interesting question is what isn't going to be different the next 10 years."* And he's like and you just completely, it was just so refreshing because he's so right you know, he's like...

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> No one's ever going to come to him and say Jeff, " I wish Amazon web servers was more expensive or I wish it was you know, I wish it was less reliable, less secure. There's some stuff that just going to go, it's not unappendageable, it's a one way street. And I think from a computing standpoint, basically talk about apps and application experiences, people are always going to want to be faster, want to be a little cheaper, smaller and bigger interestingly. They don't want them to be I think more extreme in both directions on the size skill in terms of like a computing device let's say. We want bigger T.V.s, smaller phones and we want things smaller than phones, etc.

><u>Kelli Shaver:</u> We just don’t want them smaller, but we also want them to be more powerful. 

><u>Jonathan Stark:</u> Yes we want more power, we want smaller, we want more battery life or no battery necessary. We want everything to be more now, more real time, more immediate. If you'd think about those things and in the context of like a current project that you have going on, it's easy to apply lots of them to your design thinking and your architecture because there's so many different ways to skin a cat in a given situation and if you think, *"Well, which one of these is you know”*, there like might be three ways to do something and that's like, *"Which one of these is going to be faster in the future?"* Which one of these  is going to be more useful in a situation where we've got screens that are, or computing device that are smaller than I can imagine or bigger than I can imagine? You know, if one of them would probably do better in one of those situations then that's probably the one you should sort of lean towards.

><u>Kelli Shaver:</u> Yes.  Conveniently a lot of times that also ends up being which one of these is going to be easier to work with when I have to add something to this in six months

><u>Jonathan Stark:</u> Yes. Like extensibility.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Sure. So people are always going to want things like that there's all this desires they want. There's also things when you think about something specifically like a touch screen. You know, people's fingers are basically of certain size and if you are working with a touch screen device you can't really reasonably go smaller than like a saltine I usually use that as an example because I like that. I've got that iPod nano.

><u>Kelli Shaver:</u> The iPod nano, yes.

><u>Jonathan Stark:</u> It's too small.

><u>Kelli Shaver:</u> Yes it is.

><u>Jonathan Stark:</u> The thing is awesome. I want to eat it. It's like, I just play, I literally play with the thing in my hand. You know what I mean?

><u>Kelli Shaver:</u> Yes, when I first got it, my first impression was yes, I'm going to choke on this. 

><u>Jonathan Stark:</u> It's like my rosary beads. But it's too small to use your fingers. I mean, like my hands are little bit on the big side and I don't—it works but it's not like an amazing experience. I mean, even apple upsize their iPhones for instance or iPods for instance.

><u>Kelli Shaver:</u> Even the new iPod nano has a bigger screen. 

><u>Jonathan Stark:</u> Yes. Right. Yes. It's just to, they went a little too far in the small direction and it's not because it's not awesome. It's definitely awesome. But it's because your fingers are too big. 

><u>Kelli Shaver:</u> Yes it's not the right size for a touch screen interface and my ten year old has no problem using it but..

><u>Jonathan Stark:</u> Yes, I can use it but for crying out loud it's got multi-touch you know. Like I'm going to get two fingers on that thing. 

><u>Kelli Shaver:</u> Yes, I didn't even realize that it is multi-touch until you said it because it never dawned on me to try more than one finger.

><u>Jonathan Stark:</u> Yes. You can rotate the view with two fingers and it's hard. I dropped the thing all the time. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> You have to, like when the device is so small that you have to hold it by the headphone chord, sort of what you've got.

><u>Kelli Shaver:</u> Might as well just be the headphones.

><u>Jonathan Stark:</u> Yes. Of course is you know, where I'm going. So, you know, things like, our physical input devices if you're using something like a finger, there's certain limitations there, you can't go smaller than a saltine, you can't really go larger than like a picture window because you know, if you're expecting a single person to operate the interface because you can't stand back far enough to operate the thing and touch it at the same time. 

><u>Kelli Shaver:</u> I kind of, let's say even smaller than that. I feel like anything larger than say like a 27 inch monitor. Well, it would be possible if one person to use it. I feel like it would start to get uncomfortable. 

><u>Jonathan Stark:</u> Right, yes, you see the guy on CNN like what's his name? John King, he’s got the Wow screen or whatever it's called. There are exposed applications for it and I don’t mean digital applications. But like in these used cases that makes sense and you are supposed to walk around it's kind of white board application but yes, it definitely it's pushing the limits. Like you would, you couldn't do a billboard size touch screen. No one will ever make it because it's beyond the normal size.

><u>Kelli Shaver:</u> I'd like to have like a you know, like a 3X4 table top things for DND. 

><u>Jonathan Stark:</u> Yes, table top and multiple pipo becomes little, maybe a little different. 

><u>Kelli Shaver:</u> Conference table type thing.

><u>Jonathan Stark:</u> Yes. But then again that's like a multiperson thing. It becomes a whole different ball of thing in order. So if you think about just those couple of things, you've got competing constraints I guess where you know, people want something to be smaller than a saltine which there's tons of reasons why you'd want a connective digital device to be smaller than a saltine. Right away you're like, *"Wow we can't just fingers so we have to do something besides touch screen."* So we have to start thinking about it a new way to interact with it.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Those, we're just kind of like waffling around in this general area but the point is that the constraints are going to force us into an area beyond what we see is like the height of consumer electronics right now which is like the iPhone 5 or you know, maybe a Samsung S3 Android phone. These things are so amazing and they're so relatively young that it's tough to imagine that they're going to look like fax machines in five years. It'd be like quaint. 

><u>Kelli Shaver:</u> Yes. You're not going, you're going to run in to the situation where you're not going to have a screen for your device because it’s going to be too small or if you do have a screen it's going to be a projective image on a physical screen. You know that kind of thing. 

><u>Jonathan Stark:</u> Exactly. Like the set has similar as Samsung Beam that has a projector that you don't have to use a screen. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> So there's a, so the point I guess we are getting at is that there's going to be a new way of a revolutionary devices that are, that make, that what now is the height of technology that you know, modern smart phones look ridiculous. You may want to eradicate it, I’m sure it will probably still be carrying these things around for a long time to come but there's going to be something new that is as radical as you know, the iPhone released on 2007. So if you are CIO, you work at a like large organization and in the middle of this initiative to retool for mobile you know, like everybody's trying to like make their M.site you know, make a mobile friendly website or whatever in they're going through all of these imaginations to try and get it done. And it’s really hard. There are ways to do it that make it easier but it's a big undertaking especially for a large organization that has to get buy in from all over the place. It's not the kind of thing, it's the kind of thing that's going to touch the backend and when you're messing around with the backend you don't want to be changing everytime Apple releases a new product.

><u>Kelli Shaver:</u> Yes. 

><u>Jonathan Stark:</u> You want it to be like a long term. It's a long term investment to make a change to a core legacy system. If you don’t, if you're just thinking like, we will going to make an iPod site, you're going to be screwed because  it's way, your solutions are going to be way too, your infrastructure is going to be way too geared toward like a particular fad, almost. 

><u>Kelli Shaver:</u> Yes, there we’ll be all kinds of content avenues cropping up that you won’t figure, that you won’t be able to get into. There are areas of the market that you wouldn't be able to reach without making some radical changes. 

><u>Jonathan Stark:</u> Right. Yes it is like, that's the talk I have like all the time with people everybody's, everybody, you talk to any CMO and their just like, *“I don't care about Android, you just need to make this iPhone app”*, and maybe they can write into it. They probably don't. All they care about is what kind of mobile they definitely care about IOS maybe they care about Android. All they want to do is get something out really fast so they can like check the box next to mobile, we have a mobile presence and they end up creating this like a silly one-off junk that just ticks off their users because it's not integrated with anything. That's a little bit of different issue but I guess my—the direction I'm going is that, we're going to have a new way of revolutionary devices probably in the next five years that are going to invalidate anything that hasn't been architected in a future friendly way. So, couple of things came out of CES 2013 which is going on right now, I think it's still going on. And one of the things that was really caught my eye was something called *Paper tab*. 

><u>Kelli Shaver:</u> Yes. I saw your link yesterday, that was cool stuff.

><u>Jonathan Stark:</u> Yes and a lot of people are like, *"This is, why anybody would buy this instead of like Kindle Fire, an iPod or whatever?"* What it is, it's kind of like if you're imagining ink kindle but it's just totally flexible and probably about the size of, it looks bigger than a 8 1/2 by 11 but it's roughly that aspect ratio. It is touch screen actually, it's this flexible piece of plastic that is the black text on sort of beige background and the display resolution is similar to what you'd see like on a candle paper white. But you can call up a keyboard, it is touch screen but a lot of the interactions come from bending it. If you have, if you're reading an eBook on a let's say, you bend the top right corner away from you and it will go to the next page. If you bend it back towards you to go to the previous page and bend the whole thing zoom in, then bend the other way you know, comes back to zoom out.   

><u>Kelli Shaver:</u> Wow, wasn't it just like a couple of, maybe a month ago you were talking about media credits for like bend ready. 

><u>Jonathan Stark:</u> Yes. That's kind of the thing, it's just like, there's so many people just getting all jacked up about something that's super duper, I don't know if I want to say device specific. It's like the context specific and it's kind of like over this kind of fawning over this pixel perfection of a website. It's just like, like a, to me, there's a place for everything for sure but for me, I'd think in a lot of cases, the majority of cases, you're better off being in more places than in less places or fewer places. And spending a lot of you know everything cost money, if you’re spending this effort on making sure that there's no widows or orphans on any of your paragraphs across any device screen size.

><u>Kelli Shaver:</u> I'm laughing because that kind of happen before, I've been asked to do that before.

><u>Jonathan Stark:</u> It's ridiculous. I don't know if it's impossible but it's got to be in the category of not reasonable, it's going to be unreasonable.

><u>Kelli Shaver:</u> My response to that was that your return on investment is far on the amount of time and effort that it takes to do that, for this thing that no one but you cares about, it's just not worth it. 

><u>Jonathan Stark:</u> Right it's like you could take that same amount of effort and create more content, or you could take that same amount of effort or money. You can take the same resources and apply them to creating eBook versions of your website or your content or whatever. To try and you know, I guess what I'm suggesting is that the page, the printed page paradigm that what is orphans are something that are leftover from the printed page paradigm and they just—and worrying about them is not worth it. It is just one of many things that I think are that need to be taken with a little bit more perspective, I suppose. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Certainly, I suppose all of that is debatable but the big thing is, if you were going to do something in your actual content that was going to you know, let's say add none breaking spaces between the last two words of every paragraph and your entire CMS, I will come to your house and slap you in the face.

><u>Kelli Shaver:</u> Yes. We have servers for that at one point of what we’re talking about.

><u>Jonathan Stark:</u> Yes the virtual butt kick or whatever.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Yes I can remember the name of it, Dev slap I think.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> I'm totally rambling but the issue is that people, I think people are very very focused on iPhone. People are very, very focused on smart phones in general and next level down they're very focused on touch screen and I think all of that stuff is going to Fad, Fad is too strong of a term, but it's going to be I think that that device paradigm of the touch screen smart phones has matured. It's like five years old we're not going to get some radical innovation in a phone like, Tim Cook is not going to get out and go and have an iPhone announcement that's going to blow our minds.

><u>Kelli Shaver:</u> If you look at it, it does this. 

><u>Jonathan Stark:</u> It's not happening. It's going to have smell sensor. It's not, even that I wouldn't even consider revolutionary and be like, *"Oh, okay well."*

><u>Kelli Shaver:</u> Just another device API.

><u>Jonathan Stark:</u> Right, it's so, the thing that will make the next thing revolutionary is the change in the computing posture that it enables. There's the touch screen, the thing with the phone is it's too visually oriented or it's not too visually oriented. It's good that visually oriented because that's what it's good at. But that’s also the downside which is that you have to use an eyeball to do almost anything with it.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> You have to use your fingers to do almost anything with it. So when the next thing comes along which I promise you will be heads up, hands free you know, walking constant true ubiquitous computing, you're going to feel like an idiot if you have non-breaking spaces in your database that now you know, with this new audio only interface it reads out loud *{&NBSP;}*

><u>Kelli Shaver:</u> Or worst yet you're reading a sentence and then when you get to the end, we got a really long pause because of the spaces.


><u>Jonathan Stark:</u> Yes. Break. <Br>.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> <br/><br/>  I dare you dear listener to turn on voice over on your iPhone which I know you have and to go to your website.

><u>Kelli Shaver:</u> Yes. It's a truly enlightening experience. 

><u>Jonathan Stark:</u> Yes. The reason and you may say, *“Well, how many people are really using voice over on their iPhones”*. I say, *“Yes, you're right. That's probably a miniscule fraction of a percentage point that are, maybe I'm wrong but that's not the point.” The point is that the next, if it's audio only or if it's some you know, new thing that takes audio input and output or where accessibilities are bigger deal then everyone is going, it’s not going to be questionable like, *“Well, yes no one does it on their iPhone but everyone does it on their earPods or whatever it is. “*

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> So yes so the Paper tab thing was really interesting. It's a practical, I think it's still, it's beyond proof of concept but it's not in the market. It feels like kinda a gorilla glass thing to me where someone's going to see it and they're going to want to incorporate it into a card dashboard or something like that. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> It's real, like it's going to happen in some form and I Tweeted something like you know, *“What's it going to do in your business model when people are leaving this behind on a subway.”* Because they are 50 cents and they all have whisper net connections to Amazon. And you know, Amazon doesn't care because they're going to, they pay for the advertising and people just leave them on the subway like a newspaper. It's a whole new business models that will crop out around like you know, repairing, disinfecting, recycling, and advertising whatever it is. If you're in the middle of re-architecting your backend you want to make sure that you keep your content as output diagnostic as possible so that you can play in that new space that's going to come out.

><u>Kelli Shaver:</u> Yes. What I want is something like that that I could write on with a stylus with fine tip and it’s like an actual pen. 

><u>Jonathan Stark:</u> Yes real E-paper.

><u>Kelli Shaver:</u> Yes. Like if there's a blank on a form on this tab that needs to be filled in, I can write in this paper thing.

><u>Jonathan Stark:</u> Yes. There's a pen it's actually, I first read about it in Omni Magazine in the 80’s.

><u>Kelli Shaver:</u> Picked that up in the Sky Mall.

><u>Jonathan Stark:</u> You probably don't even know what Omni magazine is.

><u>Kelli Shaver:</u> It sounds familiar.

><u>Jonathan Stark:</u> Yes.

><u>Kelli Shaver:</u> Not enough though.

><u>Jonathan Stark:</u> Anyway. It was a science magazine and this part that does exist so that you can buy at BJ's. It's a pen, it's has like essentially an irregular pen but it has like a little camera on the end of it. As you're writing it watches your movements and translates, like all the CPU and everything is in the pen but not the paper and it translates everything into you know, it does like a speech OCR type of handwriting recognition thing to it. You can get, I don't know if it's Bluetooth—I think it's Bluetooth, you can Bluetooth it to your machine, your desktop and get like PDFs and live text from the OCR and presumably you can have it goes straight into the Ever note.

><u>Kelli Shaver:</u> I think I've seen that. Actually Wicom has a drawing pen like that. 

><u>Jonathan Stark:</u> Yes, I've seen a couple of them, they're not cheap. I don't know how it works or if it’s great or not but it's you know, everyone is going to want smaller, everyone is going to want bigger and you know the pen is a lot smaller, it's a lot more convenient. It's cheaper because you don't have this on this iPod, the pen is not cheap but it's cheaper than an iPod. So maybe that's your potential solution but anyway… 

><u>Kelli Shaver:</u> I'm looking here at Wicom inkling sold for $199. It's like a little, looks like its two pieces, it's like a little device that you set at the top of the page.

><u>Jonathan Stark:</u> Yes I remember that one.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Yes the pen I'm thinking of has a bunch of features that work, if I recall correctly, on any old paper but you could also get special paper that it's familiar with. You know, it has like little check boxes, little regions in the page that have checkboxes and sort of like not invisible ink but you know, markings that are not visible to the eye. If it sees you check a box, that says email, it will like email the thing to you.

><u>Kelli Shaver:</u> Oh that's cool. Yes.

><u>Jonathan Stark:</u> There's all sorts of crazy stuff happening there but that's been out for a while. I've never seen one in a while so I don't know if it's ever going to catch on but I read a post the other day from Allis, I don't know how to pronounce his name. A, Allan on twitter, Alastair Allan, I guess it is pronounce, it is terrible. Anyway he is a big data guy and he posted the other day. He's like, *“Smart dust is inevitable”*, which I think I tend to agree with him but I think that's on the timeline that we can't. 

><u>Kelli Shaver:</u> Yes. 

><u>Jonathan Stark:</u> Maybe he would disagree. He probably disagree. I don't feel like that's on the timeline that's going to happen in my life but Smart dusts basically is like a CPU plus connectivity on a mote that is small enough to flow in your nose and get inside your body. Reconfigure itself if need be which is you know, obviously beyond creepy. I can't really argue with the premise which is that it's inevitable because people are going to want more connectivity, they would want smaller and better and more real time. How do you, just today worry about programming for Smart dust probably not?

><u>Kelli Shaver:</u> No, were already looking at smaller and smaller technology that is in some cases actually ingestible for various medical applications.

><u>Jonathan Stark:</u> Yes that exists like smart pills basically. 

><u>Kelli Shaver:</u> Take a pill and it basically does a run a drug test and a diagnostic on its way down.

><u>Jonathan Stark:</u> Right. Yes. 

><u>Kelli Shaver:</u> Then I'm assuming those are kind of one-off uses because they don't know if anyone would want to retrieve them but... 

><u>Jonathan Stark:</u> Yes surprised by the factor. On the health tip, were both proud owners of the App for span.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> I got my, I got a medium for Christmas and it’s too small so I got my new large yesterday.

><u>Kelli Shaver:</u> I don't know anyone who is over the age of like 12 who can wear a medium and the size seems really small. 

><u>Jonathan Stark:</u> Yes exactly. So upband powers activate. But it's a device that it's like a rubberize bracelet and it's got a single button and a headphone jack that you use to sync it to your phone and to a smart phone application which we've discussed repeatedly. To me that is the drawback, that it's not directly addressable that you can't send push notifications to the band to vibrate or to flash lights or anything which I think is a major drawback but its part of that you know, that would be great but at the same time battery life is important too. So if you know, presumably the radio thing is a trade of with the battery, rather have the battery.

><u>Kelli Shaver:</u> If you come up with one of these that gets charge with kinetic energy and the motion of wearing it then you're good to go.

><u>Jonathan Stark:</u> Yes. So, as much as broadband that leaves me to another random tangent which is that broadband, people kind of got what developers anyway got pretty gladness with the broadband. You see it's totally common to see these humongous web pages like megabytes size. 300 megabyte webpage, wow. Seriously? You know?

><u>Kelli Shaver:</u> I'm sitting here and I'm feeling guilty because I've been working on a project that's very large and just say I'm doing it for someone-else. 

><u>Jonathan Stark:</u> Well so it's bad enough. Now mobile comes out, mobile some like smart phones they're 3G or whatever and the like. I think the expectation of speed is almost higher for mobile phones than it is on the desktop even though it's easier to make it fast.

><u>Kelli Shaver:</u> Yes, you're on the go when you're using it.

><u>Jonathan Stark:</u> Right. 

><u>Kelli Shaver:</u> If you want one around. 

><u>Jonathan Stark:</u> Yet you get less attention. It's less likely, if it takes long time I will just wait. It's like back in the Blackberry days and you are like, *"I'll just wait until I get home."*

><u>Kelli Shaver:</u> Yes. If I'm going to open up, pull up my smart phone when I'm standing in line at the grocery store willing to check out then look up the price or something, I'm not going to want to wait forever because I'm waiting in line and have other things to do.

><u>Jonathan Stark:</u> Right, yes. So, with that we can to the tangent? But before I suppose to go the tangent, the point there is that, speed is always going to matter. I think that you can never, never be too sloppy or I guess lazy is the word with how much stuff your sending down to the client because even with the difference between a desktop site on a desktop computer or the same site on the mobile phone it's a major problem. So if you downsize that to something like earPods, I'm going to keep coming back to earPods because I think that's going to happen. And you're sending some kind of information down to a device that's a fraction of the size of a phone and has a fraction of the processing power of a phone because they need long battery life then all the sudden you're going to be screwed like it’s never going to go away.

><u>Kelli Shaver:</u> Yes like don't send images to your earPods.

><u>Jonathan Stark:</u> Yes. Exactly and don't have a bunch of crap. It also calls to action and embedded in your content like that's something that should happen. I suppose it depends if this is, this an arguable point but where do you put a call to action, where do you put images? It seems like that should be Meta data around your content that a client can take advantage of it if he wants to but isn't required. So rather than something that you would parse, rather than something that have low powered device would parse out of your content, it’s something that could be added to your content if the device was capable of you know, doing something useful to it. So that put me on another topic but not from where I was. There was something else that came, there was so many like really interesting. It’s probably because of CES but whole bunch of really interesting stuff has been hitting the news feed lately.

><u>Kelli Shaver:</u>		Hitting the Twitter lately, yes. They had a bunch of good ones yesterday.
><u>Jonathan Stark:</u>	Yes. The one with the lady with the brain interface like sort of this lady, it’s like she’s you know, a quadriplegic. She’s been that way for like ten years. And a team, I don’t know remember where but I will link to it in the show notes, they connected a robot arm to her brain that she can use to feed herself.

><u>Kelli Shaver:</u>		That’s huge.

><u>Jonathan Stark:</u>	Yes. I mean it’s moving like if you watch the video.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	And it’s the size thing, like size matters with computing stuff. Because the thing that she did with like a dentist chair with this huge arm come off of it and she’s got two large you know, sort of wall worth size devices implanted through the top of her skull into her head. I mean, it’s like not the kind of thing even if it was just the two implants on her head, it would be awkward socially to walk around with. 

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	You know, to say at least. But if you could miniaturize the technology, it would be a significant difference. All the sudden, to me it does not seem like a viable solution. It looks now, almost too big to attach into a wheel chair.

><u>Kelli Shaver:</u>		It’s still an experimental.

><u>Jonathan Stark:</u>	Yes. It’s still like...
 
><u>Kelli Shaver:</u>		Far from consumer ready.

><u>Jonathan Stark:</u>	Yes. But the interesting thing is that they are going to be developing you know, technology that is better and better in reading the brain waves. So that it’s kind of like two things that is going on, 

>>One is how do we read brain waves and translate that into digital information. And that is one totally independent thing.

><u>Kelli Shaver:</u>		And then the next is how do we miniaturize this and give it connectivity that it needs, battery life that it needs, all that.

><u>Jonathan Stark:</u>	Yes, the implanting output so that the input from the brain is going to get—I feel that piece is going to get solved a lot faster than miniaturizing the arm.

><u>Kelli Shaver:</u>		Yes, which is crazy to think about.

><u>Jonathan Stark:</u>	Yes. So imagine you know, a new input where you could—even if something as simple as on or off or Morse code from your mind, or simple text messages or whatever you know, if you had a brain input that you could control somewhat reliably, or adding something simple like SMS and all of a sudden you have ESP you know. You created like, on the size matters topic—if you can make something small enough and fast enough, it changes everything.

><u>Kelli Shaver:</u>		Now that any significant only advance in technology cannot be distinguished to magic.

><u>Jonathan Stark:</u>	Yes, exactly. So think about it like this, this is the thing I was trying to remember for, imagine that the game show Jeopardy, right? And you go into Jeopardy and all the sudden you are allowed to use your iPhone during the game. You’d still lose to someone smart because it would not be fast enough to do anything.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Like you know, Alex Trabeck would say,* “Whatever.*” You’d say,*“Euphemism, Alex.”*

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	And he would come up with some question and even with your Smart Phone out already, what are you going to do? Nothing! You are going to lose. So when you think about it, that’s pretty lame. The iPhone is not even awesome enough to help me in Jeopardy?

><u>Kelli Shaver:</u>		Did you see the Jeopardy episode with Watson?

><u>Jonathan Stark:</u>	No, I read about it. And that is what it made me think of it ‘cause Watson is not an iPhone.

><u>Kelli Shaver:</u>		No.

><u>Jonathan Stark:</u>	I don’t remember what the answer that Watson was given but it was something like an argumentative pastry. It was not what it was but it’s something like that. And Watson came up with Merrang Herrang which is super like puny which you’d think would be possible for a 
computer.

><u>Kelli Shaver:</u>		For a computer, yes.

><u>Jonathan Stark:</u>	So to me, that’s not even not even like Watson is a separate thing, like the AI thing is a separate thing what I am talking about. Imagine I am just talking about like regular...

><u>Kelli Shaver:</u>		Right, like the speed in connectivity.

><u>Jonathan Stark:</u>	Right, a regular human computer IO. Like you couldn’t do much better at the Jeopardy game with an iPhone which I think is really telling. It would need to be a lot faster, it would need to be a lot more predictive, a lot more real time which you would probably take into accounts of AI in the back end.

><u>Kelli Shaver:</u>		Yes, and you’d need a faster way of interacting with it and tapping tiny buttons on the screen.

><u>Jonathan Stark:</u>	Exactly, and that’s what the new thing is going to be with it whether it’s Google Glass or earPods or something else. It’s going to be listening all the time. Imagine an iPhone is next to useless at Jeopardy unless you had a phone call going to someone at home. That would be way better because the person at home could be listening over your microphone the whole time.

><u>Kelli Shaver:</u>		And in a minute, *“Oh! I know that.”*

><u>Jonathan Stark:</u>	Yes, or Googling stuff or they could have a whole chat room full of people who might know the answer to the stuff that’s also listening in. There’s like a million ways. Something that a real time connection that doesn’t require typing on a touch screen could become like you know, it has some audio output that would become way more powerful and tons of useful everyday situations, things that are even more useful than being on Jeopardy.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Like driving for example or washing dishes or changing a diaper or whatever. I don’t know.

><u>Kelli Shaver:</u>		Driving software?

><u>Jonathan Stark:</u>	Yes. Seriously, honestly I feel like at some point, it’s going to get to the point where as soon as something becomes repetitive, a computer or a robot is going to be able to do it for you.

><u>Kelli Shaver:</u>		Yes, the software will write itself.

><u>Jonathan Stark:</u>	Yes,and you get down to the point where you’re only job is you know—I feel like the limits is going to be like the points where we’d just feel like limiting it. 

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Like, *“Do I really want to program the computer to enjoy my music for me?”*

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Or like my computer to take a vacation for me? No!

><u>Kelli Shaver:</u>		No, I would program my computer to do all other stuffs so I can take the vacation.

><u>Jonathan Stark:</u>	Yes, so I can enjoy my music or so I can write some music but you’re the computer, write the music.

><u>Kelli Shaver:</u>		Yes, it’s like Lolly this prophecy.

><u>Jonathan Stark:</u>	Yes, I don’t see how it’s—I mean it seems inevitable. And I don’t think necessarily think it’s a bad thing. It just moves as far as the Meso Pyramid. It’s like as soon as something becomes repetitive, and the machine can do it in a way that it’s indistinguishable from what a human can do then what differences does that make? Who cares where the poem came from? If it’s moving, it’s moving.

><u>Kelli Shaver:</u>		Right. They just go on to doing something better and better.

><u>Jonathan Stark:</u>	Yes, and that kind of leave me into one of the other tweets which is from Kevin Kelly at Wired. He wrote an article in Wired about you know, people getting nervous about outsourcing and getting replaced by robots or getting their job replaced by an algorithm. And he wrote a big article about how you know, you don’t need to worry about that because that new reality is going to create jobs that don’t exist now, that you can’t even imagine.

><u>Kelli Shaver:</u>		Right, you are creating as many as your replacing.

><u>Jonathan Stark:</u>	Right, but the ones that you are creating are so much more fun than something stupid. Like some farmers, who wishes they were a farmer? Basically everyone who is a farmer right now wishes they were a farmer. Let me just extend it.

><u>Kelli Shaver:</u>		Yes, in a first world country.

><u>Jonathan Stark:</u>	Like in the US. In the US, if you are a farmer it is because you want to be a farmer. It’s not ‘cause you need food. Right? So you know, the quote from Kelly’s article that just sum the whole thing up for me was this, *“No one living in Ancient Rome wish they could watch cartoons while writing the Athens code.”* Like air conditioning, TV, cartoons, wireless, and cars. All these stuff is like, it’ just going to create new jobs like in the new stuff we can’t imagine. Like we have no clue what is going to happen.  

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Everything is going to change, it’s going to be like right now we are in the Rome stage and somebody shows up like watching Tom and Jerry in an escalade. You know, and were like, *“What?!”* In fact, they are probably like, *“I don’t even want to have anything to do with that like my mind is not even in the space where I can think that is entertaining or useful in anyway.”
* 
><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	But we’ll progress there in a way that it would be like you know, like Mike Cooper is going to like. I was going to try and insert some like crazy futuristic thing but I can’t even…

><u>Kelli Shaver:</u>		I can’t even proper think what it could be because it is just… yes.

><u>Jonathan Stark:</u>	Yes, it would be like totally crazy.

><u>Kelli Shaver:</u>		Just a space. My head is not in that space yet.

><u>Jonathan Stark:</u>	Right. I had a training session with a big organization maybe last month. One of the things I was trying to get them get to their heads around was the concept of dematerialization and trying…

><u>Kelli Shaver:</u>		The actual physical dematerialization of objects?

><u>Jonathan Stark:</u>	Not like…

><u>Kelli Shaver:</u>		Okay, not like the Beam me up, Scotty.

><u>Jonathan Stark:</u>	Not like that but just as real. So it’s kind of like you know, *“Use the force Luke and he just raise his hand and gets a light saber you know, from the snow empire strikes back”* My kid has that power. Like he could just stand there and reach his hand for something and I would go get him that thing because I can see that he wants it. So what’s the difference you know? The difference is like,* “Oh, I am going to be here so Luke had an innate power.”* So the Beam me up, Scotty, I don’t think will maybe ever get to a point where you’re body is dematerialized and reconstructed somewhere else because we don’t need to because like if you side step the whole issue because…

><u>Kelli Shaver:</u>		I think it will be virtual.

><u>Jonathan Stark:</u>	Yes. We’ll just reinvent the reality in a way that our bodies are going to be there like I can whisper into a little box in my hand and someone in Japan can hear me. Like, *“Do I really need to?”* You know, something is going to be really be there but…

><u>Kelli Shaver:</u>		Were like 800 miles or so apart right now.

><u>Jonathan Stark:</u>	Yes, and my computer is not even plugged into anything. I am just sitting into this room, you know? Take that up in order of magnitude and it’s like you can’t even comprehend what’s going to happen? You can’t even comprehend like what the new job market is going to be like or something.

><u>Kelli Shaver:</u>		Yes, it’s going to have a huge social impact. I mean even right now, most of my friends that have been the good friends they have lasted for years or once that it started out you know, the people that I have met online and we’ve remained good friends because we have similar interest and all that good stuff but…

><u>Jonathan Stark:</u>	That is not the accident of proximity.

><u>Kelli Shaver:</u>		Right, I would not been able to find people here in the town I live in that are into the stuff I am into because it’s a small town in the south with no—I am the IT industry in my town. And I am the web development community in my town.

><u>Jonathan Stark:</u>	Right and so from a social standpoint, it’s absolutely revolutionary. And I think for a business standpoint, it enables Mom and Pops to have like this massive connectivity. It enables Moms and Pops to—that would never get the foot traffic they need to sustain a business. They don’t need foot traffic because if they have a sufficiently unique interest or unique offering I should say then their customers would automatically find that. In fact, it’s almost better that you have a wacky product you know, under the sort of internet role that if you can think of it, a bunch of people were into it. So you know, you could be the guide to them. You could be the red baroque picture frame person. I don’t think you could possibly over specify. You could build an entire business around a single search term like a long one. 

><u>Kelli Shaver:</u>		I need to finish that card game.

><u>Jonathan Stark:</u>	Oh yeah. A lot of times I am like, *“Why don’t I go around trying to convince like fortune 500 companies about all this? What didn’t I just go to do make one?”* 
><u>Kelli Shaver:</u>		They are not going to do it.

><u>Jonathan Stark:</u>	Yes, they are never going to do it. Like you know, clients I hope you are all listening because I don’t believe that the big clients, they are not setup to be able to make decisions fast enough to make any of this work.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	And it’s almost like there is a tipping point where things are changing so fast that they are changing faster than the decision they can process in an average organization. You know what I mean?

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	So they literally can’t compete with like a Startup that has 4 people. Like you have a company that has been around since the 30’s that has ten of thousands of employees that it’s going to get disrupted by company with 12 employees whom you never even met in person.

><u>Kelli Shaver:</u>		Yes, that is crazy. I hate to think about it but it happens.

><u>Jonathan Stark:</u>	Yes, and you know I do think there is hope or I would not do it anymore. Like in the meeting probably tomorrow or the next day and I am going up to this company and it’s like, *“We’re trying to like pull this piece far you know, that is sitting in the end at all at it. ”* I don’t even know what I can say but by pulling this small piece on their large online organization into like a mobile friendly responsive web design kind of a new world order and they could do it if like everybody that I have to meet with is like a fully a dozen people. If they could all agree in you know, a short—a week, it sounds like a long time. It’s going to take months for them to agree if they ever do at all you know, but if they could agree in like a week then it would be possibly to you know, potentially do something that could be engaging and useful for their users.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	But [Inaudible 53:20:70] 

><u>Kelli Shaver:</u>		[Inaudible 53:22:00] too much you know, somebody else is going to do it.

><u>Jonathan Stark:</u>	Yes and the real problem is that there is some sort of hidden politics therefore in the officer involved ‘cause at a bare minimum and any of these companies at bare minimum you got IT marketing, bare minimum.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	And you probably have a specific business unit that has been...

><u>Kelli Shaver:</u>		...related to the thing.

><u>Jonathan Stark:</u>	Yes, the actual thing. So probably have free business units at it’s minimum that are on this particular initiative and none of them want to for example, like IT does not want to do anything cause their to do list is a mile as long as you know, they got things in there that are having birthdays.

><u>Kelli Shaver:</u>		Yes, or they don’t want to be responsible for it.

><u>Jonathan Stark:</u>	Yes, or they know it’s doomed.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	They take one look at it and like, *“This is not going to work; not because that we can’t do it but because marketing is never going to agree with the retail operations.”* It’s not going to happen because—or like.Com or retail, that is my favourite one. *.Com* and Retail will not innovate their customer data bases because the SVPs in both departments are like bonus based on whether or not they beat the other one with sales numbers. So you know, it’s like this organizations are set up to not dwell on the same direction.

><u>Kelli Shaver:</u>		They’ve created tension there between the departments. A competition between them.

><u>Jonathan Stark:</u>	Right. It’s the old industrial revolution mentality of like second shift versus third shift.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	But it doesn’t work in a brand context and in this new reality where people are computing you know, 24/7 from anywhere on anything at all times. Like, *“I want to be walking with a J.crew and I want to be walking you know, if you don’t have the color of the things I want, I want to be able to order immediately by scanning the pants I just tried on.”*

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	But that means that Retail guy lost the sale to the *.Com* guy. So the retail guy does not want to set up WiFi in the store because that it’s going to mean losing sales.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	And operations is like, *“I don’t want to get involved with you guys.”* And the CEO is like, *“Get to off to doing something else,”* like it’s extremely rare for me to see like a CEO is involved in new stuff. It’s always like the next tier down that is the one that has to make like a proposal and push it up to chain and that does not work. It does not work; it has to be topped down. Anyway...

><u>Kelli Shaver:</u>		Yes, and there has to be really one person that could really take charge and can make it happen. 

><u>Jonathan Stark:</u>	Definitely which is startups have and the beginners don’t have. Cause the CEOs got other worries. In my experience of CEO’s of mature companies are beyond the you know, the crazy idea phase that Richard Benson never seems to emerge from but you know, most people seem to going to like a maintenance mode where they are like, *“Oh! Three more years and I am going to retire with a golden parachute! If we just keeping hit on numbers every quarter, that’s all I have to do and I am out of here.”*

><u>Kelli Shaver:</u>		Well really, can you blame them?

><u>Jonathan Stark:</u>	Well the whole thing is that, that is right. No! But the thing is, there’s no one person, I don’t want to say blame but they are so big that there is no one that gives a crap about the overall organization except to the extent of the way  that they are incentivized to. I don’t know, maybe it’s just probably because it’s just a company but that hasn’t been my experience. I don’t think it’s the Wall Street influence. I don’t know, anyway... This is like totally a complete ramble. All of them. Maybe we should switch over to some like practical things if people can do it like to do.

><u>Kelli Shaver:</u>		Make an API.

><u>Jonathan Stark:</u>	Yes, and it’s just the same stuff we hammer on all the time like usually we talk about it on the context of web. Because right now, web is the everywhere and if you are talking about having apps to run everywhere, you are talking about web but I don’t for a second think that web is the only everywhere that is going to be and I do believe that there is going to be a significant segment of the market on the screen less device in the next five years.

><u>Kelli Shaver:</u>		I think so too. I think it’s going to be appliance, connection appliances.

><u>Jonathan Stark:</u>	Yes, or even potentially screen that don’t render HTML like more E-readers, more LCD screens, more smart devices whether it’s like you know, my lights in the basement or you know, you sent me that link to connected cars and like guys hacking, forbs. There is a lot going on and there is a lot more places where we are going to be getting input from. There are a lot of places that we are going to send outputs to. But I mean that is just at all screams API.

><u>Kelli Shaver:</u>	Yes, not everything is going to have a screen.	

><u>Jonathan Stark:</u>	Is that your cat?

><u>Kelli Shaver:</u>		Yes, can you hear it purring?

><u>Jonathan Stark:</u>	It’s awesome!

><u>Kelli Shaver:</u>		Let me open the door. Yes, that is the loudest purr of any cat.

><u>Jonathan Stark:</u>	That is awesome. 

><u>Kelli Shaver:</u>		It’s tiny like a rigidly impound cat.

><u>Jonathan Stark:</u>	Wow! But yes, APIs are like there is no—it’s not full proof to imagine that an HTTP API or REST API or something that consumes JSON is the best thing to go with but I feel like its way safer than...

><u>Kelli Shaver:</u>		...like rendering HTML.

><u>Jonathan Stark:</u>	Yes, it’s like it’s hyper client specific, output specific, content specific, application... I think you need to write context specific applications on a client and keep the client code on the client. It means it’s a little bit more work granted if you are only making one client but we are here to tell you that you’re not going to be making one client; you are going to be making more than one.

><u>Kelli Shaver:</u>		Yes. As soon as the possibility arises that, *“Oh! I can now write with the second client with minimal work.”*

><u>Jonathan Stark:</u>	Yes.

><u>Kelli Shaver:</u>		They are going to do it.

><u>Jonathan Stark:</u>	And honestly for the majority of people, I won’t say vast majority, but the majority of applications that people are going to be building in the next say a year or two, you are going to have 3 clients, you are going to have a web client, an IOS client or an Android client.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	So right there you know, you got reason enough to make a really really client agnostic API which has its own application onto itself and you got these three other applications that talk to it.

><u>Kelli Shaver:</u>		Yes, and I have experience with some of these projects too. Just also from also a business standpoint when you have your data access by an API then it becomes really easy to do all sorts of interesting things in terms of analytics and market analysis of that data and all that too so...

><u>Jonathan Stark:</u>	Yeah I mean to—it’s surprising how many times I go into a meeting and people be like a *.Com* person there and that is like a big huge company you know, like... so we want to do mobile but we have to do one thing at a time so you know, were going to do this mobile website, *“Okay great! Do you know currently what the most popular devices are the most visited websites now? Because you probably not going to want to pay this test on everything under the sun so if you are just going to pick like half a dozen of phones to test on, what should they be?”* Like you have—I think we are capturing that information but no one’s looking at it and maybe I can get it and like no one’s like even an existing website, no one’s capturing that new information—not no one, but a lot of people are not capturing that information. They are just like leave it on the floor and I am like, we are going to sit around this room for two days. 25 people sitting around this room for two days and talk about what we think we should make when we could just...

><u>Kelli Shaver:</u>		We just don’t really know.

><u>Jonathan Stark:</u>	We should just—well because everybody got an opinion.

><u>Kelli Shaver:</u>		Right.

><u>Jonathan Stark:</u>	So like, *“Oh this is what we should do like you know.”* But social media is here people, use it.

><u>Kelli Shaver:</u> 		Yes, just gather data and look at the data and then do what the data tells you what you should do.		

><u>Jonathan Stark:</u>	Yes, there is tons of data! And it’s one thing if you like to look at the data and you know you are like, *“Wow, I am going to choose to read this one over the other.”* But to not even look and basically have two different departments fight about what should be at the top of the homepage or the mobile site because they think something. I mean I realize that I am more of a Google style person than an Apple style person. I just don’t see the point of debating something when the data exists like what phone should we support? *“Well we should definitely support iPhone and blab la bla,”* well you know the biggest user basis in China.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Maybe just because the CEO has an iPhone, that is not enough reason to—or because everyone sitting in this room has an iPhone, that might not be the best data point to use.

><u>Kelli Shaver:</u>		Yes, 85% of your mobile traffic might be Android.

><u>Jonathan Stark:</u>	Yes, and after this Christmas like you know, pack myself in the bag as predicted Android web browsing went way up. It’s very much higher than IOS in general but it went way up after Christmas because those Kindle Fire sold like crazy. 

><u>Kelli Shaver:</u>		Nexus 7 also.

><u>Jonathan Stark:</u>	Yes, Nexus 7 is probably too but I am sure there is Kindle, they are giving away all those deals. 

><u>Kelli Shaver:</u>		Yes, I almost bought one.

><u>Jonathan Stark:</u>	So as much as we talk about you know, we are happy to talk about Sinatra and Java Script bugs and HT access files and all that stuff because right now Web is the everywhere platform but the stuff that we talk that is probably the most important is EPIs because that is super duper future friendly and the other thing is having smart content which we don’t talk about as much but I think it’s easy to ignore because it sounds so boring.

><u>Kelli Shaver:</u>		Yes, and it sounds like something as we developers shouldn’t have to deal with.

><u>Jonathan Stark:</u>	That is the other one.

><u>Kelli Shaver:</u>		Like the client should be the one providing the content.

><u>Jonathan Stark:</u>	The developer doesn’t really have a lot of control of it. It feels like they don’t...

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	... but there is an opportunity for developers when you know, mobile is kind of like opening the door for this because a lot of companies are like, *“Our desktop site really performs like crap on iPhone and it’s like purposing in and out, zoom in, zoom out, you can’t get access to the end of the controls, you can’t log in and these pop out windows that we have that just like they cover buttons and you can’t scroll all the way.”* So they are like, *“Okay we have to make mobile site. And now is the opportunity when the budget is released to do something about it.”* And that is the point where the developers does have some control over because they can say, *“Don’t use Word press as you use CMS.”*Because that is a web polishing platform, not that you can’t use it and I have nothing against Word press but it’s going to push you in the direction of things like wizzywig post editing and you know all this things.

><u>Kelli Shaver:</u>		In line content formatting.

><u>Jonathan Stark:</u>	Yes, so when the opportunity arises dear listener and your who knows, some boss, ask your advice about you know, *“Well we need to redo the CMS or redo our content database.”* Do what you can to impress upon the importance of having agnostic, clean content that is not polluted with layout instructions for a desktop website.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	So now a great quote that I saw the other day, see if I can find it but yes, Jason Grigsby from cloud four posted this great post about essentially responsive web design but he talks about to do is basically... The quote that I posted was to do otherwise require you to buy into a collective hallucination and the collective hallucination of web development is that there is now or ever was a screen size or a resolution or a window size or a lighting condition or a specific color.

><u>Kelli Shaver:</u>		Yes, if you are doing a website today and you are still asking yourself, what should I develop for 1024x768 then?

><u>Jonathan Stark:</u>	What is the minimum resolution what we develop for?

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Yes you are opening yourself up for your world to hurt. You are making a disposable proxy, you are making something that is no longer [Inaudible 01:07:09] you know. I just got off the phone today with a big company and they were like, *“You know, it’s one of those things were they you know somebody and a deadline came down from my mind that is already like if we started three months ago, we’d still be scrambling.”* I want to help them but they are already thinking about things that are too low level. Like how are we going to staff this up? I am like, *“Well you haven’t been able to tell me what you want to do yet. Like you have a very specific sort of vague high level idea where pieces of web site is going to become you know, responsive and maybe that means make a new one or maybe it means modifying the existing one but what do the business calls? What’s the goal of it?”* You know, there is just like million questions to ask but there are already—it’s always been like this even with the phone makers. Some will come to me and be like, *“We know that we have a problem, I am not sure what it is but we’re sure that these tools are going to solve it.”*

><u>Kelli Shaver:</u>		*“We have this problem and we need this answer but were not sure why.”*

><u>Jonathan Stark:</u>	Yes. It’s like, yes I use analogy all the time and it’s like everyone is running around with their pants down because they don’t have time to bend over and pull them up and it’s like if you just stop for one second and pull your pants up, you could run way faster. But it’s always been like that in my professional career it’s been like that with a big organization.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Startup is a whole different story so if dear listener, if you are doing startup, you’re in a very verified situation with lots of advantages which is that you know, you probably have a small number of people and there is probably one person who’s calling shots in one area and maybe another person is collecting shots in another area but you guys can be like you know, *“this is how we are going to do it and we are going to start like this. We don’t have like 20 or 30 years of legacy systems that at millions of users stock in them like a hideous CMS full of EPR tags.”*

><u>Kelli Shaver:</u>		Startups have their own set of challenges but that is genuinely not one of them. You usually have a pretty clean slate that if you take the time to do it right to begin with, you’re in a good spot.

><u>Jonathan Stark:</u>	That is true in a lot cases; certainly a lot more cases but I cannot believe how many startup I see that just like you know, web startups, they got this splash image that collect email addresses and you can’t use it on a phone. I am like, *“What are you thinking?!”* It’s mind boggling. Occasionally, I don’t think it is always a problem. I still feel like we’ll solve this someday but happy docs to me does not make any reasonable sense on a phone because of the kind of content that you have to manage in it. It’s one of those things, we are like, *“I’ll just wait till I get back to my computer.”*

><u>Kelli Shaver:</u>		Right.

><u>Jonathan Stark:</u>	I wish I could remember well from the other day, I was like you know...

><u>Kelli Shaver:</u>		It’s like you’re a failure if it won’t work on a phone.

><u>Jonathan Stark:</u>	Yes, seriously. It blows my mind that Apple’s site isn’t mobile friendly.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	Like what the hell?

><u>Kelli Shaver:</u>		Yes, that is mind boggling. I was amazed to learn that ‘cause yes, I would assume that it would be.

><u>Jonathan Stark:</u>	Yes, they are thinking why it should be in the app. *Don’t go to our website, that is a desktop, that is old. Use the Apple Store app, that is what you need.* So whatever. We got a wrap, I am sure we’ve lost everything and the dear listener fell asleep for a long time. The Smart content, the clean content with Meta data...

><u>Kelli Shaver:</u>		The APIs.

><u>Jonathan Stark:</u>	It’s almost like progressive enhanced data.

><u>Kelli Shaver:</u>		Yes, it is.

><u>Jonathan Stark:</u>	An API to access stuff in its most pristine way so this client application can turn it into whatever they need to turn into for their weird, wacky contents that cannot be predicted.

><u>Kelli Shaver:</u>		Yes, and don’t be afraid to give up some control.

><u>Jonathan Stark:</u>	Well, yes because as soon as you given up control you got engagement enriched. So problem solved. Well dear listener, sorry for the long ramble but I think we both need to get it out of our systems.

><u>Kelli Shaver:</u>		Yes, it’s been.

><u>Jonathan Stark:</u>	Yes, we’ve been talking about web frameworks enough lately.

><u>Kelli Shaver:</u>		Yes.

><u>Jonathan Stark:</u>	So hopefully there is some information you can clean from that massive tension on top of the tangent.

><u>Kelli Shaver:</u>		Yes and I am about to start  building an API. So in the past, I have done Ruby APIs and Sinatra and I am actually about to start building—I am adding a new one to the existing Wales application so it would be interesting to the computer or two, experience there.

><u>Jonathan Stark:</u>	Yes, that would be really cool. So hopefully next week, we get back to a little bit more specific pragmatic up to date useful information. But with that, I will say that is our show for this week! I am Jonathan Stark.

><u>Kelli Shaver:</u>		I am Kellie Shaver.

><u>Jonathan Stark:</u>	And we hope you join us again next week for the <b>Nitch Podcast</b>. Bye.

><u>Kelli Shaver:</u>		See yah.
	

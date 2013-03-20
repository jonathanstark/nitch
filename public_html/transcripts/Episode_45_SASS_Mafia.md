Episode 45: SASS Mafia
======================

<u>Jonathan Stark:</u>	Hello and welcome to the <b>Nitch podcast</b> for Friday, February 22, 2013. I am Jonathan Stark.

<u>Kelli Shaver:</u>	I am Kelli Shaver.

<u>Jonathan Stark:</u>	We’re here to talk about building apps that run everywhere. This week, onclick conflicts between jQuery and Google Analytics, our development setup for Responsive Web Design, and why SASS is stupid. [Laughs] Totally kidding! 

<u>Kelli Shaver:</u>	Why it’s always.

<u>Jonathan Stark:</u>	I know. Please stay tuned the Nitch podcast is next. Good afternoon! 

<u>Kelli Shaver:</u>	Good afternoon! 

<u>Jonathan Stark:</u>	You are sounding good today. 

<u>Kelli Shaver:</u>	That’s good. This works on. I will podcast more after that pillow is behind my back.

<u>Jonathan Stark:</u>	[Laughs] you have it behind your back as well. 

<u>Kelli Shaver:</u>	Yeah! I probably should. I was looking at the way the micro is set on my desk and I realized that it’s back on the corner and there’s a bookshelf around it. It’s like a big econ chamber. 

<u>Jonathan Stark:</u>	Yeah! It sounds good to me. Hopefully when they hear this they will agree. 

<u>Kelli Shaver:</u>	Yeah! I am curious to see how it comes out of the recording. 

<u>Jonathan Stark:</u>	Cool! It’s cool on there. Anything that’s good? 

<u>Kelli Shaver:</u>	No because I’m a bit of hurry.  

<u>Jonathan Stark:</u>	Ah that’s… Yeah! You know that’s very wrong when I went to bed like 7 pm actually. Crazy schedule let me fall asleep. I’ve been falling asleep early like 10 pm, which is radically early for me. 

<u>Kelli Shaver:</u>	Yeah! I’ve been doing that, too. 

<u>Jonathan Stark:</u>	Yeah! But then I wake up 4 hours later and it’s too… [Laughs] 

<u>Kelli Shaver:</u>	Yeah! I used to stay all night and sleep through the day. It is purpose schedule. Lately, I’m falling asleep around 10 o’clock at night and I’m getting up around 4 in the morning. That’s much better.
<u>Jonathan Stark:</u>	Yeah! Big time! If I can go from 10 to 5 that would be like pretty, pretty good. Probably getting up to 5 is the danger zone for Coopersville because there’s no way he wake up anywhere between 2 or 4. But if ran out at five…

<u>Kelli Shaver:</u>	Yeah! That’s funny. I remember the same thing when she was younger. There was a window. She had enough sleep. She wasn’t waking up on her own but she had enough sleep. So, it was like whoa. If you get up at 6 o’clock in the morning, you’re not allowed to flush. 

<u>Jonathan Stark:</u>	[Laughs] Yeah! Definitely! I am only laughing because it’s exactly the same here. 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	Especially now that our downstairs bathroom was burned down and still not fixed. The only bathroom for me is headed upstairs which is approximately four feet from his bed. 

<u>Kelli Shaver:</u>	Yeah!  

<u>Jonathan Stark:</u>	Yeah! 

<u>Kelli Shaver:</u>	Did you do this thing when he was still a little? This is going to make me sound like a horrible parent to all of our listeners.  She always wakes up in the morning and she never sleeps in and so there were rare occasions wherein she would and I would wake up before her. I were later in bed going like she’s just sleeping in or is she dead.
 
<u>Jonathan Stark:</u>	Laughs] Yeah, sort of like.
 
<u>Kelli Shaver:</u>	If she’s dead, I am not going to be able to fix it now so I just have to go back to sleep. 

<u>Jonathan Stark:</u>	[Laughs] I have had similar thoughts but I could never…It’s like the difference with me is there’s no way I would ever wake up before him. So, I think it only happened once when it was like I woke up and it was like 8 then. At which point, he probably should have been awake and he was not making any noise. And yeah, I get to panic. I was like, *“How can he be not awake?”* 

<u>Kelli Shaver:</u>	Yeah.

<u>Jonathan Stark:</u>	But then I’ll be too panicked to go back to sleep. I appreciate your commitment. 

<u>Kelli Shaver:</u>	[Laughs] It’s like when the clock alarmed, I just wake her up or I just go back to sleep. 

<u>Jonathan Stark:</u>	Yeah! There’s nothing we could do at that point. 

<u>Kelli Shaver:</u>	Yeah! It’s a lost cost at this point anyway. 

<u>Jonathan Stark:</u>	One thing that’s a big difference now that I am a parent, I noticed that I am constantly envisioning the nightmare scenario. So like last night, we had sushi for dinner and he’s sitting at the counter with chopsticks which obviously can play a mystery but he’s playing with the drumsticks and they were you know, the take out ones. They are really splintery. 

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	He had a midst in his hands like his gripping them like drumsticks but then he started banging the bases on the counter. So, his hands were going to slide down like shutter the chopsticks. 

<u>Kelli Shaver:</u>	Aw, splitters on his hands. 

<u>Jonathan Stark:</u>	Yeah! You know, you’re going to get spinsters and immediately, I flashed to him flying of the seat which was a bar stool in the counter. And like the chopsticks were perfectly landing on the ground. So, they like went through his eye or something. 

<u>Kelli Shaver:</u>	And he’s killing himself on the chopstick. 

<u>Jonathan Stark:</u>	Yeah! I don’t know if it’s just me but every time any situation is going on, I am envisioning like, *“What if that window blow out right now?”* You know, it’s just flying two different stories down. You know, I honestly think myself like that. It’s like a horrible movie running in my head. 

<u>Kelli Shaver:</u>	Yeah! I did that for a while and then I sort of thought that I want a lot better. 

<u>Jonathan Stark:</u>	[Laughs] 

<u>Kelli Shaver:</u> 	[Laughs] 

<u>Jonathan Stark:</u> 	Yeah! It’s better now because I’ve been having the horrible movie for three years and like nothing ever happens. 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	If something happens, it will be surprising for the little kids. 

<u>Kelli Shaver:</u>	They are tiny. They are so helpless. I can’t help but think every possible advance scenario.
 
<u>Jonathan Stark:</u>	Alright! 

<u>Kelli Shaver:</u>	They can’t be with that for the results. 

<u>Jonathan Stark:</u>	No, he sorts of walking when he gets to bed. Anyway, we’re both parent of the year now. 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	So, yeah! I don’t think we may house keep. 

<u>Kelli Shaver:</u>	I think so. 

<u>Jonathan Stark:</u>	Housekeeping is always step one. Next week seems like a normal crazy week. So, we shouldn't have any problem with the normal schedule. 

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So, I don’t think there’s any housekeeping but we do have a bug report. 

<u>Kelli Shaver:</u>	Yes, we do. 

<u>Jonathan Stark:</u> So, it’s exciting. It’s been a while. 

<u>Kelli Shaver:</u>	It’s not that we haven’t encountered that but we’re too stupid to talk about it. [Laughs]

<u>Jonathan Stark:</u>	[Laughs] the others are final line. 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	Yeah! So, jQuery and Google Analytics were fighting with you, huh?

<u>Kelli Shaver:</u>	Yeah and it’s not specific to be going on with this but I have this feeling that this will probably work or more soften. I was working on it. I was working on a website and I was setting up some Google Analytics, tracking records for the specific URLS. I have to track some individual campaigns and that sort of thing. They can go and set them up in Google Analytics when I give you maybe fact for the onclick event to add to link. 

<u>Jonathan Stark:</u>	Oh, really? 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	Now, I didn’t understand because I’ve never used Google Analytics to track a campaign like that. I just you know, paste it to the bottom aside from the closing button tab. 

<u>Kelli Shaver:</u>	You keep it in side as a whole? 

<u>Jonathan Stark:</u>	Yeah! 

<u>Kelli Shaver:</u>	Now, you can set of specific advance and specific links within the page that you want to track. And so, that could be a generic for that to put another page on that onclick underscore and such as that. And, so the thing there is, if that link is bound to onclick advantage and jQuery, then the jQuery and onclick advantage is going to fire. And whatever is onclick attitude is not going to go off. It’s not going to be both. 

<u>Jonathan Stark:</u> 	Ah. 

<u>Kelli Shaver:</u>	Which is interesting but you could have multiple jQuery and onclick binding to the same link. 

<u>Jonathan Stark:</u>	Yeah! I’m surprised that the hard one doesn't over ride. 

<u>Kelli Shaver:</u>	It doesn't happen at all. One of the JQueries is there to bind to link to jump what binds in and who jumps in first and stops it. So, what you have to do then is a simple reflex. You can either move your analytics or whatever rules you have onclick move into your jQuery binding or if you want to go the other way with it then. I can keep you jQuery clearer but still have that onclick stuff on your html. Whenever you click on the virus of the jQuery, you can just use or grab whatever is in on the onclick after the clear length and just evaluate. 

<u>Jonathan Stark:</u>	Oh, interesting. There are about five reasons why I would never have been to situation to discover this bug. I wonder if any of them are alternate solutions like for example, you know, I’ve never set up campaign tracking or like conversion tracking where you’re tracking like a sales fun of. That feeling to this page through registration, you know, they all go the same page. Which one was clicked the most? 

<u>Kelli Shaver:</u>	Right!

<u>Jonathan Stark:</u>	It’s interesting piece of data. I’ve never set up but I probably should. Generally, when I bind to a tag which is what you were talking about, right? 

<u>Kelli Shaver:</u>	Ah huh!

<u>Jonathan Stark:</u>	I’m working on like something that’s a little happier than sadder. Does that make sense? 

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	And I never bind directly to the elements. I bind everything through the body and when the events bubble up. I had one there. 

<u>Kelli Shaver:</u>	Yeah! These were actually for submission buttons and there’s a lot of requirements and validation of the form submission. 

<u>Jonathan Stark:</u>	Okay. That makes sense. It’s interesting. Well, there are two possible solutions. I guess it depends where you want to put your mess. 

<u>Kelli Shaver:</u> Yeah. Either both ways and whatever kind of mess that would be. 

<u>Jonathan Stark:</u>	Yeah! It’s interesting piece for today. It’s highly actionable. Can you tell a bit about working on a couple of large corporate projects lately? 

<u>Kelli Shaver:</u>	[Laughs] Yes. 

<u>Jonathan Stark:</u>	Is that that actionable? So, that was a good one. Hopefully that helped someone. 

<u>Kelli Shaver:</u>	Yeah! I feel that they probably come rarely common. It seems like something has been fairly done. 

<u>Jonathan Stark:</u>	Yeah! Alright! It’s cool. So, the other things that we have talked about today are developments that are Web Design efforts which tell me that you’re always responsive these days. 

<u>Kelli Shaver:</u>	Yes. You and I do things differently.

<u>Jonathan Stark:</u>	Yeah! And I guess I knew that we deserve to come up to on Twitter in the context of me bashing which will entail if you want a lot of activity on Twitter. 

<u>Kelli Shaver:</u>	And say something about SASS? 

<u>Jonathan Stark:</u>	And say something about SASS. That was like the most hectic thread I ever had on twitter. So basically what happen was I was dealing with SASS file and someone else throw and I was having a hard time to debug it because debugging it basically do all my development in Chrome desktop. The developers told they often see the change I need to change with CSS with the marginal draw and whatever. It’s like a background image size or something like that. I can see right with the CSS where it is and I fix it in Chrome and make sure that’s supposed to look great. I might put that with the CSS but I have to put it in the SASS file and compile the SASS file and then recreate the CSS. I don’t know if it’s fully away with the SASS file or what but it’s really freaking hard to find the spot in thousand lines of the SASS file. It corresponds to the line number that ends up in the CSS. 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	So, for SASS fans start screaming at their headphones, I tweet you. I basically tweet like SASS you know. I don’t think that the benefits of SASS don’t await the down side which makes the debugging harder. Anything that makes the debugging harder is not going to my top. 

<u>Kelli Shaver:</u> 	Yeah! And I was ready to pitch for you. 

<u>Jonathan Stark:</u> 	Yeah! Other people jump on my keys. It was like the SASS mafia came out for me. 

<u>Kelli Shaver:</u> 	[Laughs] 

<u>Jonathan Stark:</u> 	You know people have bad code don’t blame a tool. You know there’s like a hundred configuration that you could set up for SASS. It’s like commented line numbers that’s resulting CSS file and people like you can use. This one really surprise me but apparently in a Google development tools, you can use source add to actually like having a source add. So, I thought it was only for script for basically by understanding it, it allows you to actually edit the SASS in Chrome. That totally invalidates my wants. 

<u>Kelli Shaver:</u> 	[Laughs] 

<u>Jonathan Stark:</u> 	So, we ended up getting this information about. You were like it doesn’t bother me because I don’t use the developer tools which finds hard. 

<u>Kelli Shaver:</u>	I use them for things. I was developer and anything but I don’t use it for CSS. I’m only working on it now.
 
<u>Jonathan Stark:</u> 	I see. Okay. So, that’s how we got in into this conversation about what’s your development set up? 

<u>Kelli Shaver:</u> 	Sure. There’s a couple of different ways to putting on whether you’re good at what you are doing. The Corel program can hang out differently because it has a lot of precise and that sort of things. In general, I’ve been working four and a half. I have supplied test editor and project running on the background of the comparers. Every time I CSS or html or anything on the page changes, it will reload or refresh the page and the browser. Sometimes before reload, sometimes CSS changes. 

<u>Jonathan Stark:</u> 	And you don’t reload the page? 

<u>Kelli Shaver:</u> 	That’s basically what I do. If I have CSS bugs that I’m working out, I look at thing in the browser and then switch the files and everything directly. 

<u>Jonathan Stark:</u> 	Right! And that makes perfect signs. In fact, that’s what I am doing. I wasn’t using code for some reason. I think probably it’s because I so a lot of development on the web and on screen. I don’t like to have it running. So, I always have my window open up at the lower half of the screen. 

<u>Kelli Shaver:</u> 	Yeah! That’s what SASS’s problem. 

<u>Jonathan Stark:</u> 	Yeah! That’s why I band doing those not because I used SASS because I really don’t. It’s because it’s stupid, right? 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u>	[Laughs] I’m trying to get like more relentless. 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	So, yeah I usually do it. I come online just to watch SASS. It’s pretty sweet. It’s definitely really cool. It’s really easy to do. It’s really easy to get installed. You know there’s no complains about that. For the work for you to describe, you’re going from the SASS file to the browser. What if you’re on the SASS file, you’re on a browser and you noticed that at some break point you’ve got some button text that’s too small or it’s aligned improperly? Then what do you do? 

<u>Kelli Shaver:</u> 	Wait a minute. Are you saying that these programs can be closed? 

<u>Jonathan Stark:</u> 	[Laughs] they are inline the differences. You know what I mean? 

<u>Kelli Shaver:</u> 	Yeah!

<u>Jonathan Stark:</u> 	When you see the button working on a form or section or some element of the page, I understand that you know where you are on your code and that’s fine. When you are trouble shooting someone else’s code, the situation you’re in is that you won’t have any idea how the files laid down. It’s long file and unlike onclick, it’s easy to find where the file is in CSS because you can just right click the element and open up to the developmental. It zooms the element. You can edit the CSS right there. If it’s locally in my machine, I can just hit save it right there but it’s not when you have a key or something like that. You were like browsing the site. You’re testing and you’re going through a problem. 

<u>Kelli Shaver:</u> 	I would probably do it in few different ways. One, there’s a good possibility I would just make not of it and come back into it later because I didn’t run through and I make all this to make a change. And then, I go back to them and do it. I also just open the SASS file and just sort for the elements that are going to change in the CSS. 

<u>Jonathan Stark:</u> 	You don’t know what to search for, huh? Like how do you know what to search for? 

<u>Kelli Shaver:</u> 	What do you mean by I don’t know what to search for? 

<u>Jonathan Stark:</u> 	Well, that’s because there’s selector that shows up in the CSS that doesn't necessary exist in the SASS file clearly, unless, I don’t totally get it. If you look at it and you've got a selector that like a body, there’s a greater selector and you can just search for it. Like it is probably necessary than inside at home somewhere. 

<u>Kelli Shaver:</u> 	Yeah! You've got to find the top site and kind of work with them. 

<u>Jonathan Stark:</u> 	Yeah! It’s a pain in the ass. [Laughs] if you’re using a lot of class names and ids, that’s fine. So, it’s like maybe there’s an idiot, which is true. So, how do you like that? [Laughs] 

<u>Kelli Shaver:</u> 	[Laughs]

<u>Jonathan Stark:</u> 	I am just pointing out that it’s like it’s really hard if you don’t know how the SASS file was authored. 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	You know, team environment. You have no idea what to search for. 

<u>Kelli Shaver:</u>	Yeah! I guess I just read into that a lot because I am usually the one authoring those types of things. I never had a huge issue although it seems like it does come up when I’m looking for something on CSS. I just actually cannot find it. You know, you just go then to the SASS to turn on the wild number of comments. 

<u>Jonathan Stark:</u> 	That is news to me so that is pretty much the place as a sort of things. So, that’s good. 

<u>Kelli Shaver:</u> 	It’s funny because the things that are making you stupid are the same type of issues that has ended about or has made me hesitant about the program. 

<u>Jonathan Stark:</u> 	Yeah! It’s the same orient. 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	Right! I know I’m being like just calm about it but I think really what the bound sound is that it doesn't solve the problem that I have and increase the problems that I don’t have. 

<u>Kelli Shaver:</u> 	Yeah! I think you’re probably not working on apps as biggest like my friend on SASS. 

<u>Jonathan Stark:</u> 	Yeah! I agree. I think that is one of those because the people really are tearing into me. Well, people I respect, don’t get me wrong, is like you, Thomas who without exception has good advice. A bunch of others, I think all of them are writing absolutely 10,000 to CSS which I think is we that we can get it. That much CSS should not exist in the world. 

<u>Kelli Shaver:</u> 	[Laughs] 

<u>Jonathan Stark:</u> 	If I were something that has more than a thousand men on CSS, I feel dirty. It’s like why am I worrying about styles so much. I need to worry more about content functionality because that’s a personal thing with me. I know that’s just me. So, I was writing like huge/gigantic project that was like super pixel perfect that has a million vendor prefix. So, it’s that sort of things and the clients were so picky about working on every little thing. And then yeah, that would be really hard to do.

<u>Kelli Shaver:</u> 	Now, I guess I’ve gone into the habit of doing it. I’m so used to set up now that’s why I’m working with small things. It’s just because that’s the normal part of my work. 

<u>Jonathan Stark:</u> 	Yeah! 

<u>Kelli Shaver:</u> 	It’s funny because I’ve totally drink to cool it off on SASS but I’m going to be on it. 

<u>Jonathan Stark:</u> 	Great! It is the same argument and I’ve realized that I’m being awful about it. 

<u>Kelli Shaver:</u> 	[Laughs] 

<u>Jonathan Stark:</u> 	You know I totally changed my mind about both of them. It’s fairly directed by the browser members.
 
<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	Then I will like, alright, let’s do it now. 

<u>Kelli Shaver:</u> 	Yeah! That should be, you know. 

<u>Jonathan Stark:</u> 	I can imagine that SASS would be the blueprint for few future CSS. 

<u>Kelli Shaver:</u> 	Yeah! I would hope so.

<u>Jonathan Stark:</u> 	Yeah! 

<u>Kelli Shaver:</u> 	CSS implementation is kind of works but it doesn’t feel well architected. 

<u>Jonathan Stark:</u> 	I understand that but at the same time I think it’s kind of genius the way they did it. 

<u>Kelli Shaver:</u> 	I didn’t say that it’s truly easy to work with. 

<u>Jonathan Stark:</u> 	Right! It’s not programming which I think was little important design feature or design goal. I mean, you can do everything. SASS lets you do anything that CSS can’t do. 

<u>Kelli Shaver:</u> 	Right! 

<u>Jonathan Stark:</u> 	It’s nothing so it’s all about organization and long term entries which you think I’m not a fan of. 

<u>Kelli Shaver:</u> 	Yeah! And then automating some of the things like the window prefixes and being able to have includes and mix ins. Even that stops, it still comes down to organization. 

<u>Jonathan Stark:</u> 	Okay. So, that’s another thing that I’m like mix in. What’s a mix in? 

<u>Kelli Shaver:</u> 	If I have the same bunch of rules that get applied to several different classes I get a mix in for and I can just include those. When I’m defining the rules I have to import. 

<u>Jonathan Stark:</u> 	So, that’s importing. 

<u>Kelli Shaver:</u> 	Yeah! We do the same thing of training various forms. There are things with colors and that different stuff. 

<u>Jonathan Stark:</u> 	Yes. Of all the things I know about SASS, I don’t want this to sound bad but it’s mostly enormous. It’s like why can’t I say syntactical. 

<u>Kelli Shaver:</u> 	Yeah! I don’t know. You do it all the time.

<u>Jonathan Stark:</u> 	Anyway, it’s like the one thing I wish I had was variables in CSS. 

<u>Kelli Shaver:</u> 	Yeah! Even if you’re from something else, you can still do that. You don’t have to let thing to be inside of things. It was mix in and with all those different stuffs; you can just have CSS normally. So, variable is one of the things you want to have. 

<u>Jonathan Stark:</u> 	Yeah! That’s true. So, I love the idea of variables, the mix in and the auto map. It gets weird. 

<u>Kelli Shaver:</u> 	Yeah! The truth is not ordered with it. They can find if you get more than a month three levels. You do it wrong. [Laughs] 

<u>Jonathan Stark:</u> 	Yeah! 

<u>Kelli Shaver:</u> 	It just becomes too much of a mess of sort of things like what you’re saying and good to see that you doing it. It’s ridiculous. You know, like if you have it. We don’t need something that listed to like body label. It’s such a span in like superscripts. [Laughs] Actually, we’re using superscripts. I just put out the tags. 

<u>Jonathan Stark:</u> 	Yeah! 

<u>Kelli Shaver:</u> 	Yeah! You don’t need to get a little bit of crazy because of those things. 

<u>Jonathan Stark:</u> 	Right! So, enough with that bad quote, it doesn't matter if it’s SASS or CSS. You know, I am keeping my open mind with the project. I am basically aware what it does. There are sort of projects that maybe I consider but I might just give you that project. [Laughs] 

<u>Kelli Shaver:</u> 	That’s something we should do when we’re together. 

<u>Jonathan Stark:</u> 	Yeah! I get it but you know me. I don’t want to install too much on my machine. But still, I can’t complain about SASS. I haven’t done SASS just like you have done. So, that’s pretty good. 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	So, I’ll keep it up in mind what I realized on being part. But, I am not ready yet to make the way for one SASS or CSS. 

<u>Kelli Shaver:</u> 	Yes. 

<u>Jonathan Stark:</u> 	I feel like I should want to but I don’t. 

<u>Kelli Shaver:</u>	I am very glad what I did with SASS more or less all the time every day. 

<u>Jonathan Stark:</u> 	Is there some situation you picked one over the other?
 
<u>Kelli Shaver:</u> 	Not really! I mean, it’s weird because there’s a bugging force between the two but I don’t really have a set criteria of doing it. [Laughs] 

<u>Jonathan Stark:</u>	 [Laughs] is it a feeling? 

<u>Kelli Shaver:</u> 	Yeah! 

<u>Jonathan Stark:</u> 	That feels sassier. 

<u>Kelli Shaver:</u> 	That’s why I don’t feel sad. I have got for using mostly less. I use it too more than SASS and if I find it harder, then I could reinstall the JavaScript and do some kind of a life testing mutual less file in the browser and not have to compile less output. It has to compile the whole CSS. As long as you do this thing, the JavaScript, there would be less file output for CSS. 

<u>Jonathan Stark:</u> 	Right! You’re right about that. 

<u>Kelli Shaver:</u> 	You’d never want to use it in production. 

<u>Jonathan Stark:</u> 	Yes, I would. That would be crazy. 

<u>Kelli Shaver:</u>	That would be crazy and stupid. 

<u>Jonathan Stark:</u> 	Yeah! 

<u>Kelli Shaver:</u> 	But it is less cost a little wider. It’s building resource for SASS. I think SASS is a little better so I kind of slowly go back to SASS. 

<u>Jonathan Stark:</u> 	That’s cool. I mean, like I said, I keep my open mind. Someday, maybe… [Laughs] the thing is I feel that if I don’t get speed up on, I’m just going to be like basically can say not a web developer anymore. [Laughs] That’s fine. It’s like everyone will have to. 

<u>Kelli Shaver:</u> 	You just have to do it. You stop saying your full in a row. 

<u>Jonathan Stark:</u> 	Yeah! It’s like a manager. You know? So, I’m not able to do that either, although I have taken a lot in the house which is alarming.
 
<u>Kelli Shaver:</u>	Why? 

<u>Jonathan Stark:</u> 	I don’t know. It just makes me feel like I’m feeling for it. 

<u>Kelli Shaver:</u>	 Is there something that’s for huge? 

<u>Jonathan Stark:</u> 	Yes. So, I never did that. I don’t know how and where it came from. 

<u>Kelli Shaver:</u>	 It’s freaking cold. 

<u>Jonathan Stark:</u> 	Yeah! That makes sense. 

<u>Kelli Shaver:</u>	I know I am reasonable right now. 

<u>Jonathan Stark:</u> 	[Laughs] we gone that and coming. I guess in terms of development setup, I guess it depends on the project that obviously you do your development locale and then you push it into a server, right? We have a local rate in our environment and whatever. 

<u>Kelli Shaver:</u> 	Right! I know there are many servers. 

<u>Jonathan Stark:</u> 	Right! Have you done anything that’s like when you go to the play, what’s the process there? Is it just like pushing to get over something or like go to the server or pull it from there? Do you get with your folks and get bug or do you just upload it? 

<u>Kelli Shaver:</u> 	I am really inconsistent with this and I need to not be but I’m just. If I am just uploading to the test server then there’s a lot of crime that might be since it’s a personal project for myself. I just open it until it’s done. 

<u>Jonathan Stark:</u> 	Right! 

<u>Kelli Shaver:</u> 	Doing things for somebody else were a little more controllable and a little better tracking on things that are going on. I really want to give in to something like either shelf or puppet on a consistent basis. 

<u>Jonathan Stark:</u> 	Yeah. I don’t think I need to go that far with it because you know of course it may be resistant to tools. But I have gotten the habit of I should say I have gone out of the habit of ftp my files into the server and I have got into the habit of into the server in pulling to get up. That has been a huge improvement. I’m sure that those people are laughing like you know. It’s just old habits die hard and for the longest time, I just steal the development on the server because I didn’t care unlike the web. This is the web and for some reasons, it’s on there and whatever. And I got really good at being able to work on website in a way that was not intrusive but it’s a total cowboy thing to do. The reason why I was good at it isn’t because I was a good web developer. It’s because I have to do that all the time with file maker because I was the only one to do it. It wasn’t a reasonable way to do work on file maker without doing it on a life server and tons of cases because you can’t because the data was all bound to just one thing. 

<u>Kelli Shaver:</u>	Is it distributed resource control wonderful?

<u>Jonathan Stark:</u>	It is the best thing ever. Yeah! You know what you do look at my machine circa like two thousand or whatever when I started using it.

<u>Kelli Shaver:</u>	Aha!

<u>Jonathan Stark:</u>	It was like maybe your web root, webroot.zip or webroot2.zip, webroot3.zip,webroot4.zip.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Just in case.

<u>Kelli Shaver:</u>	Yeah! I started that version back probably two thousand seven.

<u>Jonathan Stark:</u>	Yeah! That is basically a fortified SPSS for me.

<u>Kelli Shaver:</u>	I don’t like it all.

<u>Jonathan Stark:</u>	STP with commit statement.

<u>Kelli Shaver:</u>	Yeah! Again I am using it seem is a good idea but once using it you know once I become aware of web it was awesome.

<u>Jonathan Stark:</u>	Yeah! I still have to use for my version or rather use their version for writers when they are writing a book it is fine you know it is not like you are doing the kind of couching it needs to be track away that daily couching needs to be doing?

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So it is good enough to have liked a couple of a diverse for book you know and a couple of a diverse for library you can see what is happening.

<u>Kelli Shaver:</u>	What version are you using on the project? Not when I told no it was not my favorite forget when you got the job done.

<u>Jonathan Stark:</u>	Yeah!

<u>Kelli Shaver:</u>	What is funny though a lot of people say web is hard to get into?

<u>Jonathan Stark:</u>	I had a hard time I need that.

<u>Kelli Shaver:</u>	Yeah! Yeah! I feel that a lot then I thought this is like bragging I don’t need. I never really thought that web is difficult to get into because there is a lot of registering you can do with it but just the basic of creating depository, cloning, pushing and bragging that kind of stupid never seen. It seem really difficult to me and I got to work thing. I have not work on documentations and there are ton of forty nine different documents.

<u>Jonathan Stark:</u>	Aha!

<u>Kelli Shaver:</u>	And I got accounting the once I used on the regular basis I got up to thirty four.

<u>Jonathan Stark:</u>	Really!

<u>Kelli Shaver:</u>	Okay! Maybe I do work more than I realize I did.

<u>Jonathan Stark:</u>	Yeah! I know I am obvious to like you know do commit some polls and the basic stuff.

<u>Kelli Shaver:</u>	You know what it feels I am doing and once I set down and allow to it right typical steps in going through and typical commands I used in what kind of project. It was more than I thought it was.

<u>Jonathan Stark:</u>	Aha! I promise you I used fresco net it is like clone, connect, push and pull those and when you first set up I had it.

<u>Kelli Shaver:</u>	Its heat.

<u>Jonathan Stark:</u>	Oh yeah! I guess you are right, maybe there are ten comments that I used.  There was couple I used once a month then I have to look up every time but like you know, I still do and a lot of times doing development on my local machine always. When I am doing development on my local machine well I usually do my comments on Ajax which is my access gate plan which make it really easily done stage individual changes and do individual comments after you have done like a bunch of work.

<u>Kelli Shaver:</u>	That present giving you love on your commitment.

<u>Jonathan Stark:</u>	I don’t have to do it comment on line. How do you know I have not looked into it and the person who taught me get access so that was it. [Laughs]

<u>Kelli Shaver:</u>	Like you change bunch of powers and you have one commit on all of them?

<u>Jonathan Stark:</u>	I want to commit on all but I want to have different commit messages on different things so like I am going for a tire for two hours and change the bunch of CSS and I might fix the java script basically you know fixing bugs, I got lists of bugs to fix. I got hire crew to fix them. Then I crop I forgot to commit the couple of them jump around and I want to do individually the messages to clear. You can stage individual changes and it really easy to do it. This App I don’t have any idea to do it to commit on line.

<u>Kelli Shaver:</u>	It is interesting I have not really done it a lot. If I have a commit I just slash the commit that I don’t like on that particular commit make me commit and slash the other staff so.

<u>Jonathan Stark:</u>	Yeah! That is beyond me so like I am saying.

<u>Kelli Shaver:</u>	I may be doing homework for sure.

<u>Jonathan Stark:</u>	Like I don’t know it happens to me everyone like it only happen in a team situation. Everyone is allowed to get into the place where I can’t pull and I can’t push and it won’t even let me merge and I am like slash and I can’t even find the directory.[Laughs] It start from clone you know then like I go what they change so I do that so it really intrusive me to merge.

<u>Kelli Shaver:</u>	Yeah! That thing!

<u>Jonathan Stark:</u>	Yeah! And I know it is ridiculous. It happens like twice a year so like really I won’t look this up so I can forget it anyway.  But it is funny if you think about my workflow?

<u>Kelli Shaver:</u>	Aha!

<u>Jonathan Stark:</u>	My workflow, like you said it’s totally different from me when it comes to personal stuff and team stuff or client stuff.

<u>Kelli Shaver:</u>	I am a lot more reasonable with person.

<u>Jonathan Stark:</u>	Yeah! But that does not count.

<u>Kelli Shaver:</u>	Which is weird because the client stuff that I do, all stuff that I do to make more organize and make thing better and easier.

<u>Jonathan Stark:</u>	But it is more work but it creates less risk.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	But if like I have two hours session and my own website I screwed up, that is my own.

<u>Kelli Shaver:</u>	Me too. I guess in long run and in large projects it is less work but it is more set up work. The personal stuff that we are doing is usually small things and just you know whatever, if it all goes to hell and encourage me. [Laughs]

<u>Jonathan Stark:</u>	Right.

<u>Kelli Shaver:</u>	Even me, is questionable whether or not I care. [Laughs]

<u>Jonathan Stark:</u>	[Laughs] Yes sometimes you go for the run to kill time.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So but the tools I used in actual development in a team situation are more about the communication than the actual development. So, I am constantly use command all the time to like share screen shots, Skype and all that stuff is kind like part of my workflow and just as much as sublime text.

<u>Kelli Shaver:</u>	Yeah! I used Skype a lot and you and I are a lot.

<u>Jonathan Stark:</u>	Yeah! If I am online I do a lot, I used quick time a lot to record short like one minute or two minute videos and send it to the client to view. Okay, these changes are done and you can see whatever that usually people are having messages. So, here’s the video of the stuffs I worked done here and this is how it should work. When you get the file or when you tested the website it should go like that and if it doesn’t you know.
 
<u>Kelli Shaver:</u>	That’s when they do testify.

<u>Jonathan Stark:</u>	It’s great. It’s easier for me and it’s like super clear. 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	It’s really good.

<u>Kelli Shaver:</u>	I totally stole the ideas from you in making videos. And everyone I have done is just for set.

<u>Jonathan Stark:</u>	Yeah! That means you don’t have to have a screen share like a live at the same time phone call. You know, sometimes it’s hard to schedule stuffs. You worked with an hour and then you just make the videos and submit and bang! You’re done. 

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It’s great.

<u>Kelli Shaver:</u>	It’s a good way to kind of step through and make sure for everything. It’s a double check for me to make sure that everything is working with us. 

<u>Jonathan Stark:</u>	Yap! It happens. I would say that for 50% of the time, I go to make the video and have find a bug. Can you just imagine if I described that in text to how work to do to test it?

<u>Kelli Shaver:</u>	It should happen. Yeah!

<u>Jonathan Stark:</u>	Yeah! It’s just great. It’s just so much easier. It takes a lot like 2 second. It takes a longer to expert of video half the time to do the actual recording. 

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So, that’s great but in terms of actual developmental it’s like I barely think of anything like a text editor or web browser. We’ve mentioned before that of you don’t know a lot of, if you’re going to make a video like you’re website on iPod. For example, your reflection is really good because it allows you to way near your iPod screen on your laptop and then record a video on the laptop. You know why you’re talking and say it is all top here and it’s over and you should see the sample data and I made any promise. Correct?

<u>Kelli Shaver:</u>	Yeah! The only big tools that I can think of are used in a different ways. Of course I couldn’t mention all those.

<u>Jonathan Stark:</u>	So, you’ve been doing so much. I see. 

<u>Kelli Shaver:</u>	That whole thing is for podcast.

<u>Jonathan Stark:</u>	Yeah! So, I guess we’re stuck with aspect. What’s the other one?

<u>Kelli Shaver:</u>	Matamoros.

<u>Jonathan Stark:</u>	That sounds familiar but I can’t remember. 

<u>Kelli Shaver:</u>	We’ve been testing for immigration testing. 

<u>Jonathan Stark:</u>	Cool!

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So, you’re testing all of that?

<u>Kelli Shaver:</u>	Yeah! That’s what I am doing in chrome tools.

<u>Jonathan Stark:</u>	[Laughs]

<u>Kelli Shaver:</u>	Get off my lawn. 

<u>Jonathan Stark:</u>	[Laughs] exactly! [Exhales] no one should be writing complicated or has to mean testing. 

<u>Kelli Shaver:</u>	Testing? What made the testing?

<u>Jonathan Stark:</u>	It should be simple.

<u>Kelli Shaver:</u>	If the API works, no one or no other thing else matters.

<u>Jonathan Stark:</u>	[Laughs]

<u>Kelli Shaver:</u>	Yes! I am taking away all of these tools like an author. I would like to introduce something but…

<u>Jonathan Stark:</u>	Yeah! That’s cool. It’s like a… Testing in the API is obviously critical and it’s pretty well dialed like there are good tools for it. 

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Testing a responsive website, I think is in unknown quantity. 

<u>Kelli Shaver:</u>	A lot of that has to be, I mean you can to something instead of something like copy all and where all your links work are. You’re going to have to go on manually. You have to test on the different devices and the different relations to make sure that things are looking the way they should.

<u>Jonathan Stark:</u>	Yeah! There’s no touch and swipe.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	There’s no way you’re going to do it.

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	I do use edgy sometimes. It’s just like a browser and you can install on. I was having that devices that sort of like your laptop server in the devices watch the browser in the desktop and they can like follow it. 

<u>Kelli Shaver:</u>	Yeah! I don’t use it a whole lot because I do test the actions.

<u>Jonathan Stark:</u>	Yeah!

<u>Kelli Shaver:</u>	So, I’m going to need to just split up and you use it on a device for mobile.

<u>Jonathan Stark:</u>	Right! Yeah! It’s good if you want to get interaction testing, I am with you. But it’s great if we’ll just quick go with it through. It’s seeing if your CSS is board anywhere.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Right! But be honest, lately, you don’t use SASS like you think it simple. [Laughs]

<u>Kelli Shaver:</u>	[Laughs]

<u>Jonathan Stark:</u>	I have been pleasantly surprised with the first approach. It’s always bouncing and just going through and like it’s progressing and it works.

<u>Kelli Shaver:</u>	You know that’s every time.

<u>Jonathan Stark:</u>	I can’t see why I’m in the proposal for nine times but I can see why people think the Responsive Web Design is hard. It’s because if they start with the desktop, the desktop CSS, we move stuff to small browsers. It’s like who act them all. It’s brutal.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It’s totally brutal.

<u>Kelli Shaver:</u>	Yeah! I don’t think it’s possible to do Responsive Web Design efficiently and why they should be in progressive advancement.
 
<u>Jonathan Stark:</u>	Yeah! I agree. It’s almost going to be equal. You can’t start with the desktop. You’re going to hate it. It’s going to be brutal.

<u>Kelli Shaver:</u>	Yeah! I am going to establish with the web.

<u>Jonathan Stark:</u>	Yeah! Response Web is stupid. [Laughs] I am actually taking what I had on the other day. 

<u>Kelli Shaver:</u>	Yeah! 

<u>Jonathan Stark:</u>	I am actually working for micro frames that are tested for designs. It’s from scratch basically so I am trying to immerse the wire from the station. I am trying to keep things as unbelievably default as possible. So, the pages work without CSS. The pages work without JavaScript. The pages work without media craze. The pages work without all that stuff. The pages work without touch event. But if I want to add that stuff in, I could do. And if I do some feature detection as I have, the touch event here will make this better or that CSS here has included some.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	I realized that I was taking degradation to my JavaScript in spite of the fact that’s not the way that it should be done. So, what I’m doing with the template is I do this in any serious project which is I wouldn’t just include JavaScript. I would only include it if JavaScript was the way I want it towards either there or its good support.

<u>Kelli Shaver:</u>	Right!

<u>Jonathan Stark:</u>	But the way that at the bottom of the files I got this sort of this script tag, open script tag and it basically says, *“This is not a lame browser.”* Then, I will have some browser checks.

<u>Kelli Shaver:</u>	I know. There were these facts.

<u>Jonathan Stark:</u>	Yeah! They include these facts in the file in this order. So, if this browser is not lame, then it includes say jQuery or modernizer or whatever. I realized that is not the approach. The approach would be I would go and say if this isn't a good browser or this browser has forward or whatever then it includes this stuff.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	But they almost never actually go to production. They have to do normalize for performance reasons or some other pragmatic concern. 

<u>Kelli Shaver:</u>	Yeah! We’ve seen that many times when we worked on together. 

<u>Jonathan Stark:</u>	Yeah!

<u>Kelli Shaver:</u>	We started to normalize and then it’s lonely. [Laughs] I guess they move over time.

<u>Jonathan Stark:</u>	Yeah! It moves into a stable state predicting quickly but there’s a couple of things you just have.

<u>Kelli Shaver:</u>	You don’t making progress of your performance.

<u>Jonathan Stark:</u>	Right! And that’s normal. I kind of do the same things like we talked about last week about default. So, it might default to take a press like this. it’s an extreme progressive approach and then I will make concessions for sure. And later when we get to testing when people were like you know. Can you make this perfect? Can you make it done on the iPhone?

<u>Kelli Shaver:</u>	Yeah! [Laughs]

<u>Jonathan Stark:</u>	Yeah! That’s great but that’s going to break everything on a kind of browser.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It’s going to be like yeah we don’t care about that.

<u>Kelli Shaver:</u>	Who cares? [Laughs]

<u>Jonathan Stark:</u>	Okay.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Aha!

<u>Kelli Shaver:</u>	Yeah! I do have to listen sometimes. [Laughs]

<u>Jonathan Stark:</u>	[Laughs] So, I am sure we’re going to normalize this project for the kids testing because testing should be more brutal on this one.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Have you ever worked with asp.net?

<u>Kelli Shaver:</u>	Fortunately, no.

<u>Jonathan Stark:</u>	Yeah! It’s probably good that you said no. [Laughs] I have to bone up on it.

<u>Kelli Shaver:</u>	I have had interest lately for a couple of companies that want Java. It was like I am really dumb with the Java. It was like the interest should have been with other things like API. I’ve been toying with the idea of learning more java. It’s just that I can’t. I can’t decide if it’s something I want to do or not.

<u>Jonathan Stark:</u>	I don’t mind Java. I don’t know. Java feels really comfortable with me. 

<u>Kelli Shaver:</u>	Yeah! I hope you can’t hate it. I don’t know how to run it all. It’s just one more thing.

<u>Jonathan Stark:</u>	Yeah! That’s the thing. Java has a bad reputation because of the way but on the serious side, it’s fast. It’s like incredibly mature in the way that PHP can do it like somebody did it.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Java is the same way every time I look into it. It’s like you don’t forget about it. It’s like every kind of IDE, there’s every kind of library. There’s everything.

<u>Kelli Shaver:</u>	Right! I don’t have an objection regarding Java in terms of a problem with the language or a lifetime desire to use the language. It’s just the time commitment conflict.

<u>Jonathan Stark:</u>	Yeah! I agree. I mean I would rather use Java than SASS.

<u>Kelli Shaver:</u>	[Laughs]

<u>Jonathan Stark:</u>	[Laughs]

<u>Kelli Shaver:</u>	You really run Java. That’s an Objective-C.

<u>Jonathan Stark:</u>	Yeah! I would love to run on a job with Objective-C. I’ve been continuing doing Objective-C.

<u>Kelli Shaver:</u>	Save that first for sitting around.

<u>Jonathan Stark:</u>	Exactly! Can you bribe the Objective-C? Checkmate! [Laughs]

<u>Kelli Shaver:</u>	[Laughs]

<u>Jonathan Stark:</u>	Alright dear listeners! That’s our show for this week. I am Jonathan Stark.

<u>Kelli Shaver:</u>	He is Jonathan Stark.

<u>Jonathan Stark:</u>	That’s right. [Laughs]

<u>Kelli Shaver:</u>	I am Kelli Shaver.

<u>Jonathan Stark:</u>	And we hope you join us again next week for another round of a <b>Nitch podcast</b>.

<u>Kelli Shaver:</u>	Bye.

<u>Jonathan Stark:</u>	Bye. SASS is stupid. [Laughs]

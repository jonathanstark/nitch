Episode 38 - BRB_Bedroom_On_Fire
---------------------------

><u>Jonathan Stark:</u> Hello and welcome to the <b>Nitch Podcast</b> for Friday, January 4th 2013. I'm Jonathan Stark. 

><u>Kelli Shaver:</u>  I'm Kelli Shaver.

><u>Jonathan Stark:</u> We're here to talk about building apps that run everywhere. This week, trouble with really big buttons, SMS apps for Kenyan farmers and how to send API request to a lamp. Please stay tuned for the <b>Nitch Podcast</b> is next. 

><u>Jonathan Stark:</u> Happy New Year!

><u>Kelli Shaver:</u> Hello.

><u>Jonathan Stark:</u> Hello. Welcome back.

><u>Kelli Shaver:</u> Yes. Welcome back. I know, I had a good vacation recently. An interesting vacation.

><u>Jonathan Stark:</u> Yes. Well I was caught on fire a little bit, 3:30 in the morning. So, I'm currently broadcasting from my shift office in my upstairs. 

><u>Kelli Shaver:</u> That's way too much sunlight.

><u>Jonathan Stark:</u> Way too much sunlight. I mean it's nice out but you got to kind of stop to concentrate.

><u>Kelli Shaver:</u> Yes we need to get you back in the basement.

><u>Jonathan Stark:</u> Totally. Yes but I'm definitely a basement dweller. The windows are not a, I like windows but not when I'm trying to concentrate. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Like a dog just turned and the cars going by.

><u>Kelli Shaver:</u> Try me.

><u>Jonathan Stark:</u> So in our continuing struggle to get this sound correct I got some fancy Christmas presents. I got some real headphones and I'm not sure if I like them. To tell you the truth, it makes me really self conscious I can hear everything too clearly. 

><u>Kelli Shaver:</u> Only too good. 

><u>Jonathan Stark:</u> They’re too good. Not used to high quality audio equipment. So what's going on with you guys? You have a good holiday?

><u>Kelli Shaver:</u> Yes, we had a good one. We had a quiet Christmas at home and then we went to, don’t listen to the background, don't listen to it. 

><u>Jonathan Stark:</u> Sounds like blue switches.

><u>Kelli Shaver:</u> Yes. I think we have to stop for a minute.

><u>Jonathan Stark:</u> That's fine. We don't mind all this.

><u>Kelli Shaver:</u> Okay. Yes we had a really good quiet Christmas here at Dallas and then we went to visit some friends near Cincinnati for New Year and stayed with them over night that night and be back the next day. We all end up staying up all night and talking and playing board games and drinking and things like that.

><u>Jonathan Stark:</u> Sweet. What kind of board games?

><u>Kelli Shaver:</u> Weird games, [Inaudible 0:02:44.3]

><u>Jonathan Stark:</u> What is that?

><u>Kelli Shaver:</u> What?

><u>Jonathan Stark:</u> What is that?

><u>Kelli Shaver:</u> You never [Inaudible 0:02:51.7] 

><u>Jonathan Stark:</u> No. It's a physical board game?

><u>Kelli Shaver:</u> Yes. There were several we played. None of them, probably none of them you ever heard of. Like Stone Age, caverns, ticket to ride, it's just all kinds of stuff. 

><u>Jonathan Stark:</u> Never heard of any of them. 

><u>Kelli Shaver:</u> You've not seen a photo of our board game. Haven't you?

><u>Jonathan Stark:</u> I'd, no.

><u>Kelli Shaver:</u> No. I could send you a link to that. It's massive.

><u>Jonathan Stark:</u> I'm a huge fan of board games but it's been a long time when Erica and I first started hanging out we'd play a lot of scrabble. Also, that's not euphemism. Lot of scrabble and everyone's full of monopoly but that is obviously pretty old school and I'm guessing compared to Prisoner of Azkaban or whatever you just say? So…

><u>Kelli Shaver:</u> I don’t think that's a board game. But it might made good one though.  

><u>Jonathan Stark:</u> Yes, I know that's a Harry Potter book.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> I wasn't sure. I know you're into different wizard Harry.

><u>Kelli Shaver:</u> Yes, I like it. Actually Prisoner of Azkaban is my favourite book, compared to all the series.

><u>Jonathan Stark:</u> Is it? I could never pick along of those books. So I didn't, actually right now trying to stop myself from having a gab fest about the latest interesting book that you sent me.

><u>Kelli Shaver:</u> Oh yes.

><u>Jonathan Stark:</u> Yes. I don't want to edit the episodes so we can save it for later but if anybody out there is into, I don't know what you call it, fancy. It's like hardboiled detective novels slash magic. Oh my God these books are so...

><u>Kelli Shaver:</u> Yeah, it's like, it's magic and in some ways it feels like, Sam Spade that kind of stuff.

><u>Jonathan Stark:</u> Yes with a…

><u>Kelli Shaver:</u> [Inaudible 0:04:41.4]

><u>Jonathan Stark:</u> It's pretty awesome. So we should probably, before we veer into uncharted territory like that we should probably do the Bug report.

><u>Kelli Shaver:</u> Yes probably.

><u>Jonathan Stark:</u> So, yes you've mentioned what? 

><u>Kelli Shaver:</u> The Bug report is very, that Bug is very strange.

><u>Jonathan Stark:</u> That's my favorite kind. So you had to jump in I knew you suddenly, sort of code sample, which I've studiously avoided reading so that you could surprise me. 

><u>Kelli Shaver:</u> Yes but I figured the sample might be easier to help you understand what I'm talking about. Hoping you could explain it, explain it to the listener.

><u>Jonathan Stark:</u> Yes I’ll look at it, I look at it in real time

><u>Kelli Shaver:</u> Look at it in real time. Okay. Basically what I had done, I had set up some immediate queries to change, change some radio button formatting in this form. So, that when we are looking on a mobile phone it would actually hide the, all the radio buttons itself and then replace it with some Span tags.

><u>Jonathan Stark:</u> Okay. Alright.

><u>Kelli Shaver:</u> Show some Span tags that basically make it look like really big buttons. 

><u>Jonathan Stark:</u> Because you didn't want to install the radio button because it's pain in the ass. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Yes and that's what they do with mobile as well. They take a lot of the form elements out which are very difficult to make insistent across platforms and they just replace them with like a generated element and automatically apply all the event listeners to the new things and studio thing. 

><u>Kelli Shaver:</u> Yes that was what I was doing. As a side note, I am working on another project right now where it's only going to run with web kit. I can just install the form elements and it's so much easier. 

><u>Jonathan Stark:</u> Yes.

><u>Kelli Shaver:</u> But yes, so that's what I was doing. I was hiding form elements and then styling this Span tag that, well I had a label and inside the label I had a few things. I had a, the radio button input tag and I had the text for the radio button and then I had the empty Span tag. 

><u>Jonathan Stark:</u> Yes.

><u>Kelli Shaver:</u> So I was using the CSS adjacent elements selector with the plus side. It's a smaller resolution, I would select the Span tag that was adjacent to this input. Come to think of it, the way my market is, I don't, doesn't necessarily have to be used that way but you know, things had gotten changed around and stuff and recently that was how I was doing it, so I just left this. 

><u>Jonathan Stark:</u> Right, I am like once other people are involved it's like, *"I don't want to miss the mark up now. I've really done something right." *

><u>Kelli Shaver:</u> Yes. So, the radio buttons that I was due having was for you could say, you could select proficiency with languages. On each radio button I have a class name like for instance, *Lang_Italian.*

><u>Jonathan Stark:</u> Right, yes.

><u>Kelli Shaver:</u> On that set of buttons it was working fine. So I see this selector was like input type of radio full of Span you know, show that, the big Span tag

><u>Jonathan Stark:</u> I am just curious. Why did you need a different class selector for a group of language, for a particular language group?

><u>Kelli Shaver:</u> Some validations stuff in the Java Script. 

><u>Jonathan Stark:</u> Okay, wow that's crazy.

><u>Kelli Shaver:</u> The whole thing's crazy.

><u>Jonathan Stark:</u> It never even occurred to you, you just raised an entire realm of web program and then it never even occurred to me which is field validation on a localized app.

><u>Kelli Shaver:</u> Yes. 

><u>Jonathan Stark:</u> That never even occurred to me, like that's bananas, but anyway sorry. 

><u>Kelli Shaver:</u> Yes, that's a topic, and it's never sold probably. 

><u>Jonathan Stark:</u> Yes.

><u>Kelli Shaver:</u> But, yes so I had like Lang Italian and that worked fine. So I'm going to my languages there, and when I get down to *Lang_Spanish* it shows the really big Span text on everything. 

><u>Jonathan Stark:</u> What do you mean on everything?

><u>Kelli Shaver:</u> Just on the desktop, on that particular robe for Spanish languages. It was trying on desktop as well on, in places where it should have be hidden

><u>Jonathan Stark:</u> Because this is [Inaudible 0:09:02.5].

><u>Kelli Shaver:</u> Yes like it was because of the Span in the class *Lang Spanish*. It was for some reason applying the rules for the selector that should have been adjacent to that tag. That’s really weird.

><u>Jonathan Stark:</u> I'm sure it's like this is, I'm looking at the code and I can barely follow it, so I'm sure listeners are like, *“What?"* 

><u>Kelli Shaver:</u> I'm sorry.

><u>Jonathan Stark:</u> The reason the bunch of—I mean you know, it's always the case when you're talking about code. It raises a whole bunch of interesting questions for me that I think are a little more general but did you really able to fix it, did you figure what it was or you were, or did just throw it away?

><u>Kelli Shaver:</u>  I just fixed it by renaming that class that didn't contain Span in any way.

><u>Jonathan Stark:</u> Now I see what you're saying because Spanish has the word Span and then it... Oh my god. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Holy Mackerel.

><u>Kelli Shaver:</u> Yes. I don't know if it's a bug in the CSS rendering engine or if I had an open text somewhere way up the documents.

><u>Jonathan Stark:</u> Right.

><u>Kelli Shaver:</u> Or was…

><u>Jonathan Stark:</u>God, that’s like one…

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Wow.

><u>Kelli Shaver:</u> Yes. Maybe you could explain it to the listener a little about that. 

><u>Jonathan Stark:</u> I hope that's actually a bug because that's such a fun bug.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Do you think if it were a bug it will be a fly, because that will be a Spanish fly bug? Title?

><u>Kelli Shaver:</u>Title.  I've been trying to duplicate it, pull it out and duplicate it on its own sense but I haven't been able to yet.

><u>Jonathan Stark:</u> Okay so I'll see that, I'll try to summarize that in case it was like totally, it was totally confusing. But in the code okay, in the CSS there's a, I mean, I would call these fairly advance selectors –there's some fairly advance selectors that are looking for you know, span tags and not just span tags, span tags that are adjacent to something else. And even in one case you're using an after pseudo selector. So you got to like {input type Google radio colon check plus span;} after in one spot. That's a fairly, that's a pretty advanced selector. It's easy to imagine that it's not implemented 100% perfectly everywhere. You know I mean, browsers are just so complicated to begin with. So maybe something that's not plain vanilla, that isn't definitely not plain vanilla might not be implemented perfectly everywhere. And then you throw into the mix that there is a string inside of the html in question that includes this you know S-P-A-N which is the name of the tag that you are looking for even though it’s inside the word Spanish and inside quotes should be totally ignored no matter what. But, who knows when you got all that you know, adjacency and the after selector, who knows what's going on. So man that's a good one, I would love it if that was a real bug. 

><u>Kelli Shaver:</u> Yes. It was crazy. It took me forever to find it.

><u>Jonathan Stark:</u> That will be the Kelli Shaver bug if you find it. If that's really a bug that you're probably first person to find it. 
 
><u>Kelli Shaver:</u> I'll name that after me.

><u>Jonathan Stark:</u> That is a cool one. It braces a, a couple of—I'm looking at the code and you did actually mention this earlier but you wrapped the inputs and the label. It's that, I never really on when I started working with labelled tags. Because I didn't you know, when I first started doing web development maybe 10 or 12 years ago, you just like write some text and then you put a button next to it or whatever and I didn't or feel, then it was just, *"Oh wait, I can actually put a label here and if you click on it, it does stuff."* So, I never found a sort of, I settled on the way that I do it. I never got super comfortable with like the most semantically appropriate way to do it that was also very flexible. The way you have it right now is probably perfect for the way that your, the page needs to look. But I always had problems when I wrap the element inside the label when I do, when I style the different layer because it's so specific.

><u>Kelli Shaver:</u> Yes I tend to only do that on check boxes and radio buttons. If I'm doing a label for an input or text input or a text area, I'll label four equals and ID the element.

><u>Jonathan Stark:</u> Right yes I mean, if the dear listeners doesn't know, you can, your labels are actually clickable, the label tag is actually clickable. So if you have—this is great for mobile because you can make your radio button nice and big and also make the label clickable. So if their finger hits the label itself it will toggle the well the checkbox, it will not toggle the radio button. 

><u>Kelli Shaver:</u> Yes and like in this case where I'm hiding the radio input and showing the span. I don't have to do anything with the Java Script because you tapped the span, the span is inside the label, and it’s still going to select the proper radio button.

><u>Jonathan Stark:</u> Very clever, very clever, but the radio buttons are hidden so they get some bit of the format of the whole thing you did with Ajax

><u>Kelli Shaver:</u> Yes, they get submitted.

><u>Jonathan Stark:</u> Even though they're hidden?

><u>Kelli Shaver:</u> They get submitted, hidden data gets submitted. Well I should say that I am collecting everything and doing this Ajax but I believe they would get submitted anyway. Maybe not if they are hidden, that's right. They're not if you use display none, they are if you use visibility's hidden. 

><u>Jonathan Stark:</u> Oh, okay. I think well, I don't know. I'd take your word for that I was thinking display none. It never occurred to me that visibility hidden was different because visibility hidden still takes some space in the layout.

><u>Kelli Shaver:</u> Right.

><u>Jonathan Stark:</u> So that kind of makes sense. See, all of this fun talk is coming up out of this one bug, this fly bug. That's hilarious. I wonder if there are any other tag names that are like a subset of a language string or like other words. I hope this is really a bug. Men that's really cool. 

><u>Kelli Shaver:</u> The even stranger part was that it that only happen when I hit Spanish in the string containing the word span inside the class name. It didn't work in the name attribute.

><u>Jonathan Stark:</u> I was going to ask you…

><u>Kelli Shaver:</u> Like the name attribute still uses Lang_Spanish. 

><u>Jonathan Stark:</u> Right I was going to ask you if you tried that. So, men that's really cool. Oh God, you must been tearing your hair out. 

><u>Kelli Shaver:</u> Yes I was. I even took it into Richard, *“Look at this, this is wrong."*

><u>Jonathan Stark:</u> *"Something's wrong."*

><u>Kelli Shaver:</u> *"Something in my code is broken."*

><u>Jonathan Stark:</u> Yes, wow. That's a good one. You just mention if you saw one of the quick tangent and say that I broke my first Python script the other day.  Like I'm going to look at the Python and I—the significant white space of the language and the lack of semi- colons gets me vertigo so I can't. I love the concept of Python, I love like this whole tag, like this but I just can't deal with it. But I had to do a—I'm working on a objective C thing that and there was the thing that I needed to pre-load AC collect database with data and embed it inside the application. And Python has the most amazing C-full like free library that it's basically just, it's almost like you've write apple script so English language. You're just like, *"Hey, database do this and here is a CSV file make it a table right now."*

><u>Kelli Shaver:</u> Nice.

><u>Jonathan Stark:</u> It's so awesome. The next time I ever have to do any kind like of maintenance or tooling some kind of like, like hacky tool, sequel or anything, I will absolutely be reaching for Python first. Just quick side note on Python.

><u>Kelli Shaver:</u> I know when a Python read it and not be at lost.

><u>Jonathan Stark:</u> Yes it's a spyware, it’s…

><u>Kelli Shaver:</u> Some people tend to either, I think they signed Lang to word Python or ruby I think and I definitely work for ruby.

><u>Jonathan Stark:</u> Yes. It's a, *“I don't care anymore.”*

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> I can barely, I have to like look stuff that I used to like, dream. I have to look up now with PHP because I'm just like purely writing java script now. I just had to write, I've just been reading some note code and I'm like, *“if I ever had to do anymore servers that I am programming, I am either going to use Rails if it's like a web app or I'm going to use node if it's like I don't I'm probably full of crap there.”* I love the way that Node is because I don't have to shift gears in my mind.

><u>Kelli Shaver:</u> Right. 

><u>Jonathan Stark:</u> It's almost like I can barely remember PHP but you know. 

><u>Kelli Shaver:</u> That's funny. That's kind of what got me working on copy script again because it feels so similar to writing ruby.

><u>Jonathan Stark:</u> Oh really. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> My impression of copy script was very Pythonish like I said, when I saw it, I was like, and *“Eww it reminds me of python which makes me want to you know..."* I like it. It's clean. It's like nice to look at. But then when I like, I start to write, then I'm like, *"Uhhh, I'm getting the Willies."* It's just like too much 20CD. I got to close those box. So I'm even like one of those people that I will not write an F statement and Java Script and not, I wouldn't do a one liner, I can't do it.

><u>Kelli Shaver:</u> No I stopped, I used to but you got me out of the habit.

><u>Jonathan Stark:</u> Yes, I just can't do it. It's just makes bugs. 

><u>Kelli Shaver:</u> In readability, I mean you're good in extra couple of line breaks and extra couple of bracket, big deal.

><u>Jonathan Stark:</u> Right. You going to not use it anyway. 

><u>Kelli Shaver:</u> Make sure you can read them, makes it easy to extend it later.

><u>Jonathan Stark:</u> Yes the extending thing is a big one for me too. Because every time that I have to go back and like turn one liner statement into a block. I'm like, *"Why didn't I just do this in the first place?"*

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Because I was trying to be cool. Yes. That's so cool. So anyhow...

><u>Kelli Shaver:</u> About that Spanish fly.

><u>Jonathan Stark:</u> I'm dying to test that but anyway let's move on. Let’s move on. That was a good one. So, you, I did not hear this story. You told me about this story that I love the sound of it because it's about SMS and I think that SMS, so, two things I think. 
>>First of all especially Americans don't realize, people in the US don't realize, that smart phone penetration globally is somewhere around 15% or 17% of all mobile subscriptions. They're like as popular as iPhones are they're approaching I think 50% penetration in the US. That means in the U.S. there's still 50% of the people who have a phone that have like a flip-phone and then the number globally is way out of air and that is billions and billions. I think it's something that's approaching five billion people if I’m remembering my numbers correctly. They have a cell phone but it is a dumb phone, and virtually all of them are SMS enabled. And I just feel like SMS applications are just totally under represented and it kind of, and I don't know, I think it kind of feeds my attraction to the web in general because the web is so widely distributed but SMS is even more widely distributed because if you've got more people have SMS than have access to the web you know, the web proper you know, the html web. So,  I just feel like there are tons of opportunities there but it’s not sexy, it's very command line type of thing but so, with that preamble, I'm like looking forward to hearing the story because I just love this kind of stuff. 

><u>Kelli Shaver:</u> Yes, I agree with you. I feel like SMS has the potential to be a lot more useful from a lot of people and a lot of places where it needs to be useful.

><u>Jonathan Stark:</u> Right. 

><u>Kelli Shaver:</u> I just—an article that I read, a good example of it and I’ll link it to the show notes. But it was an article about some women in Nairobi, Kenya who have developed SMS applications to help local farmers cultivate and sell crops. So, they could send a SMS message and get weather reports or alerts, that kind of thing or they could check prices for the local markets and it's kind of cut out the middle man there and make more money selling for the crops and to know when it's the good time to sell, what's in demand in this season, that kind of stuff. 

><u>Jonathan Stark:</u> Yes, I can imagine. I'm not familiar really with the area but I'm imagining that it is not right next door that you know, the market is and to potentially travel three days to you know, it's like two things:
>>You'll like you need to know if like bad weather is coming and…
>>you need to know what prices are in a given day and whether or not it's worth it to like you know, cut bait or should pull up stakes and head in that town or whatever. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> That information, well think about it, if like that tiny little bit of information, assuming it's accurate, doesn't take up much you know, it's not so many bytes. It's like nothing. But it's huge.

><u>Kelli Shaver:</u> Yes, especially in an environment like that where you don't necessarily have access to good roads and rapid fast transportation. You know, you can't always; you can't just run out of town and check something more you know, sometimes you are even getting into post office in several days and then going away. 

><u>Jonathan Stark:</u> Yes, just to pull it, in case it's not obvious to people why it is a big deal, just think about back to you know, I was driving into today, it was seven degrees out. Okay, it was like 6:30 in the morning, its 7˚F outside. It's freaking cold and windy. There's this lady who's like skinny as a rake standing there waiting for the bus. She had this look on her face like, I can just like, I used to be, I used to take the bus all the time, I'm not—I don't like cars, I don't have a car. And then not knowing how far away the bus is, it turns into this spiraling; it's like a panic of like, okay. If I'm close enough to work, it will take me 45 minutes to walk from where I am. If the bus doesn't come in the next five minutes and then I will be late, but if I leave right now, I'll make it. I really don't want to walk the whole way. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> It's either raining or snowing or whatever. Then your brain starts to do this thing where you're like, *"Did I, is today holiday?"* It’s like, *“Are there no buses? Why am I the only person standing here?"* You start to get into this like, because you don't know and you've got nothing to do and you're freezing and miserable and uncomfortable.  

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> So the tiniest, a dot on map of an approaching bus would completely change that entire experience.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Drastically and that's just waiting for a bus. Imagine you have for like a pack up you know, I'm going to try to teach this very typical sense, I'm totally making this up, but you like to pack up probably not a fancy truck, probably like a you know, not so fancy truck. 

><u>Kelli Shaver:</u> If you have one or a wagon.

><u>Jonathan Stark:</u> If you have a truck.  I mean, I saw you know, whatever I don't know if you saw that movie Babies, but it's awesome and hilarious and this couple and I don't know where but like Mongolia or something, come home from the hospital. From the hospital with a baby and a two year old on a motorcycle. So, two parents, a newborn, and a two year old on a motorcycle over grass you know. And they were like, *"Yeah, that’s what you do, you know."* So imagine like you trick and win all these factors like if it's going to rain or if the price worth it, should I just wait anyway? God, it's gigantic. 

><u>Kelli Shaver:</u> Yes. I mean some of the roads on more rural areas especially in places in Africa. If you haven't have enough rain, those roads becomes impassable. Because you know, they're dirt roads and they're deep and they're muddy.

><u>Jonathan Stark:</u>Grapes. So okay, here's that I could check just like, *"Oh my God, SMS is the best,"* all day long. 

><u>Kelli Shaver:</u> I think about this one forever, you can, it's not just one but it contain local farmers where you can deliver educational information to school children or medical information to hospitals. Anything.

><u>Jonathan Stark:</u> Yes, tons of stuff. It's like, we were talking earlier, we were chatting the way, like last week I dialed my first 911 call of my life. It's like such a, I don't know, it's like, I was pretty amazed by it actually, how everything works and how efficient it is and how fast fire trucks got here and all that.

><u>Kelli Shaver:</u> Yes.  A 911 system is pretty cool. 

><u>Jonathan Stark:</u> Yes, it's like massively redundant. It's got all of this sort of, we don't  need to go into that but the point is that this technology is, I think SMS, I feel like it got a similar kind of utility like it's massively reusable for any kind of you know, text based broadcast data or you know, command line style application interface. That's why I'm like super jest about it really, I love it really, I think it's the coolest thing ever. So rather than you know, just like passing SMS on the back all day I have two questions I wondered if they have answered in the article which I see. One of them is the big draw of active SMS apps in my opinion which is that there's no discovery method. Like how do farmers find out about it?

><u>Kelli Shaver:</u> Yes I have no idea. It wasn't really discussed, there are of course no more profile on this women because Kenya and other parts of other African nations have pretty clearly defined gender roles. Not to say that certainly that women are always discriminated against because in some cultures they do have, they have as many rights as men do but then they may still have some various sort of historically defined gender roles in terms of what they do in society, in home, that kind of thing.

><u>Jonathan Stark:</u> Right.

><u>Kelli Shaver:</u> So the article was more of a profile on these women because that's—it represents quite, it's a pretty big shift in thinking gaps.

><u>Jonathan Stark:</u> Yes, I was...

><u>Kelli Shaver:</u> It's cool for that reason too or so. 

><u>Jonathan Stark:</u> Right. It's like in an API like never mind the benefits of the end-users. It's also like a shift of the sort of a socio-political climate of the culture.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Pardon, I really didn't know but I read something the other day about some, about the you know, that someone wondering if the sort of the shift to digital goods and that kind of global nature of the ability for anyone to publish an application pretty much. It's certainly not absolutely everyone but it’s pretty, the bar is pretty low, to be able to publish an application and like start selling stuff you know. It's almost like if you are in, if you do have some kind of digital good, there's a huge market for it.

><u>Kelli Shaver:</u> If you know, and they look over it, they will come.

><u>Jonathan Stark:</u> Yes a little bit. If you built something good, you can—there's a market place for you to reach the entire planet. So you may or may not, you're thing may or may not be good, you may or may not catch on of course but you have the opportunity which I think is a big huge deal. It's interesting to think about you know, the effect on the global economy as people shift. I feel like people are shifting to valuing digital goods a lot more than they were initially. I guess that's sort of stupid to say because when digital good even start to exist it was like 2002, like when did the first iPad come out. To me that's the first time I can remember a digital good like an mp3. I guess before that there was like this software, you could like trade disk and stuff. It's obviously; it's like a huge part of the economy now like where a portion of your disposable income goes to like parts of mighty eagle and angry bird or something. 

><u>Kelli Shaver:</u> Yes. Probably 80% of my business purchases are for things that don't physically exist. 

><u>Jonathan Stark:</u> Right, it always reminds me of like getting, like charging to, getting paid to teach people cling on like it's so useless unless a lot of people want to know it. That's all there's to it. If a lot of people want to know it then you can teach then you have a business, even though absolutely nobody's fixed cling on in the real world. 

><u>Kelli Shaver:</u> Yes, well that's kind of how it feels to be a developer because I mean, I sit on the computer and I type lines and code into the computer and I make things that don't really exist out of other, out of nothing and make money from it. You stop to think about it, that's kind of mind blowing. 

><u>Jonathan Stark:</u> Yes, especially considering that anybody with an internet connection can compete with you. Try and think it's a good thing. It's a perfect segue way into the next talk, which is about connected devices and physical items and the internet things because what if that stuff that you typed into the computer that “doesn't really exist” can turn on your lights or vibrate your bracelet or whatever. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Then sort of blurring of lines between spaces and cyberspaces. Well that is upon us.

><u>Kelli Shaver:</u> Well, it's going to be so awesome. I can't wait, that's going to be so much fun.

><u>Jonathan Stark:</u> Yes. I'm with you but I do see the dark side and I do recognize that it exist but everything has that you know, fire has dark side.

><u>Kelli Shaver:</u> Yes, I was telling my friend that we went to visit over New Year about that. She was just, *"That's cool but it's also kind of creepy.”*

><u>Jonathan Stark:</u> Yes. I got one as well. It's too small, I have to return, I haven't got around to it yet but I had the original version so I know, I know what it's like but can you describe it to the dear listener. 

><u>Kelli Shaver:</u> Yes it is a device in the form of basically a bracelet. It's pretty lightweight that you wear in your arm and it monitors your activity level so you count like pedometer; finds out the intensity of your activity. You can also switch it to night mode and it will monitor your sleep patterns. 

><u>Jonathan Stark:</u> Yes. How much you move around.

><u>Kelli Shaver:</u> Yes. How much you move around, how many times  you wake up, light sleep, deep sleep and you can plug it into your iPhone and it syncs with an app with your iPhone. Unfortunately it does not deeply too synched.

><u>Jonathan Stark:</u> Yes that is my one complain with that system, it's not actually connected. 

><u>Kelli Shaver:</u> Yes but I guess they probably have to save room in there for the antenna and the battery and all that stuff. 

><u>Jonathan Stark:</u> Yes I really have the battery life and the connectivity but still It would be, it would be a big difference.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> It's in the push notifications.

><u>Kelli Shaver:</u> Yes, then you could. As I was telling you, I want to kind of develop a connective fire alarm that if it goes off in the middle of the night it's going to alarm anytime I guess. It's got us notification to the little band on my wrist and vibrates and then I can stick one in my child and I can slip it right through his arm.

><u>Jonathan Stark:</u> Exactly, if it were, if it were addressable the way a phone is, with internet and some master push notification, it would be pretty game changing. This little thing like that, this silly thing like a particular pattern of vibration on your wrist that you could hook up to, if this is the NAT or web script dialogue or any job on your web server.

><u>Kelli Shaver:</u> Just run indicator lights, vibrate or whatever.

><u>Jonathan Stark:</u> Vibrate, couple of indicator light, you could set up a whole, you could you know, I'm only half kidding when I said Morse code could come back. You know what I mean it's like, it's like a popular thing you can't totally imagine teenager’s texting each other and receiving Morse code on their wrist. 

><u>Kelli Shaver:</u> Oh yes. 

><u>Jonathan Stark:</u> Totally you know, just short little messages of you know, SMS just vibrating under their wrist and they have also just short handed everything else they just feel like I know this is from, this is a particular friend of mine and they're saying this or you know, the answer to number 5 is D. And I mean, it's something so stupid, it's not flashy, it's not cool, it's like completely built out of this existing technology that is boring at this point but that would be red. 

><u>Kelli Shaver:</u> Really awesome.

><u>Jonathan Stark:</u> You could build so many crazy things on top of that. I think you know, anybody that's been listening  I was like, I'm like really into the next, the post smart phone thing, like I'm starting to look at smart phones being like, *"God, it’s coming out of my pocket”*and like, *"look at it, what a pain."* 

><u>Kelli Shaver:</u> Yes. That's funny you mention that , because when I was, back when my eyesight was getting worse last year I wasn't sure it was going to happen, I was toying with the idea of modern Braille. 

><u>Jonathan Stark:</u> Alright. 

><u>Kelli Shaver:</u> It's practically a little bit. Like if you had something like the size of a wristband that can do like a tiny refreshing Braille then that would be awesome. 

><u>Jonathan Stark:</u> That would be sick.

><u>Kelli Shaver:</u> Yes like wireless connected tiny thing refreshing Braille thing because Braille displays are so like expensive and they're huge and they're...

><u>Jonathan Stark:</u> Could you, you know those like little LED crawl signs that you see like in a convenience store. Seems like you can do something like that with Braille and not move your finger, it just leaves your finger more in place and have it like Braille away underneath you. Like a crawl.

><u>Kelli Shaver:</u> Yes, there are, I mean, I guess that's how it work. I just don't know any of that are really small.

><u>Jonathan Stark:</u> Yes, I remember you mention some, it must haven't been you that said it to me, I was like totally blown away by this but when you see someone who's good at reading Braille their finger's like all over the place because they're looking ahead.

><u>Kelli Shaver:</u> Yes, you can read it with both hands.

><u>Jonathan Stark:</u> Right like, they're like which I'm sure you'd do with your eyes unconsciously I don't notice doing it but I guess some kind of glancing around and getting a feel for where I am in the page and you know, how much paragraphs coming up next and just like that.

><u>Kelli Shaver:</u> I've seen people who are really good. Really really proficient with Braille, kind of reading things with two hands. It looks like, from my perspective, it looks like they're reading two things at once. It just kind of mind blowing.

><u>Jonathan Stark:</u> Yes.

><u>Kelli Shaver:</u> Well. 

><u>Jonathan Stark:</u> I saw a video a while back of an air Braille thing, I think you saw it too.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> They would blow the dots at the person's hand.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> I could read it. On that same—so the up-end is really cool in terms of behavior modification and it does synched to your phone and you get this sort of like nice charts and graphs about your, you get to sort of behavioral analytics of your own life.

><u>Kelli Shaver:</u> Yes you can do things like track calories and there's a part that’s very similar to moodily on it too which I did not realize until I got this. 

><u>Jonathan Stark:</u> That's new, I can see that.

><u>Kelli Shaver:</u> It’s a built in. You can select your mood and you can do it by adjusting the small smiley face guy.

><u>Jonathan Stark:</u> Oh no that's…

><u>Kelli Shaver:</u> Then you add an adjective.

><u>Jonathan Stark:</u> Wow. Yes because they're trying to like make a connection between your mood and your food and activity levels.

><u>Kelli Shaver:</u> Yes. 

><u>Jonathan Stark:</u> That makes sense. But yes, so the issue though with the lack of connectivity, I think is a big deal. The other big Christmas present that was received by the Nitch team was...

><u>Kelli Shaver:</u> So jealous of you.

><u>Jonathan Stark:</u> Yes, you should be because it's cool.

><u>Kelli Shaver:</u> I'm going to get one as soon as I get paid on this project.

><u>Jonathan Stark:</u> It's totally worth it. 

><u>Kelli Shaver:</u> I can tell if this is expensive.

><u>Jonathan Stark:</u> Exactly, I got the Philip's hue light bulbs, they're LED to wireless wifi LED light bulbs. So if you didn't think we're geeky yet. 

><u>Kelli Shaver:</u> So cool.

><u>Jonathan Stark:</u> I can send the rest of the API request to my lamp.

><u>Kelli Shaver:</u> So awesome.

><u>Jonathan Stark:</u> It is so awesome, it is so cool.  

><u>Kelli Shaver:</u> Now you need to tie it with in the sound cloud API.

><u>Jonathan Stark:</u> Oh yes.

><u>Kelli Shaver:</u> Change it to the music.

><u>Jonathan Stark:</u> It's the mind rails. It's like, so there's a couple it's not perfect it's definitely V1 it's definitely first gen but it's surprisingly good. For example we, well let me go back up and describe it. So you get this, you get free LED light bulbs that go into a standard like a you know, lamp screw in socket like any US electrical lamp socket. And they are roughly the size and shape of a regular incandescent bulb. Screw them in and then you take a base station, which I think is what it’s called Wi-Fi base station and you plug it via into your Ethernet into your router which I thought was a little bit lame at first that you have to plug in the Ethernet to your router. I assumed that you just like sort of throw it in the room plug into a socket and it will be an access point and you'll just look around you’ll be like, *“Oh, there's my hue access point”*, and just get like a figure of speech. You'd think that, they would have done that but I have a feeling that they didn't for security reasons. Because there's one thing that they definitely do for security reasons and I have a feeling that the Ethernet requirement is for the same reason. So it makes a lot less hackable. So, I mean it was totally just worth, I plug the thing on the wall, I plug the thing into my router and what it requires was like nothing but open chords because I don't need to plug anything into it directly.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> And what do you do next? Once you plugged that in then you open up, you're going to like their website or something super, you know what it was? I used the iPhone app, I have an iPhone app and they're like make sure you're on the same wireless network as the base station and press this button. That's like, look for the hue on your network and it's looking for, and it's like, *"Okay, we found the device on the network.”* Go over the device and hold down the button on the top. What that does, I didn't realize at that time, is it basically access your password. So, I learned later that—I’ll get to that after I finish describing it. You press the button and now you're phone is tarred with the thing and you can see in the app you've got these, you got three lights and the starter kick comes with three lights. You can manually set the colors but you don't really do that. You pick photos from a list and it will like pick out the three primary colors from the photo and then it like changes your environment to kind of like to match that photo. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Which I thought was really clever user interface I assumed you would just be picking colors on each lamp but they're of course, all day long you end up like clashing crappy colors. 

><u>Kelli Shaver:</u> You can if you want, I believe.

><u>Jonathan Stark:</u> You certainly can, Yes. You absolutely can but I've literally never do it because it takes about 30 seconds, like I'm never going to get this right. It definitely takes some skill to get them right. I did also find that there are only about 2 or 3 settings that I even care for in the defaults. So, you can have an infinite number of selections but there's only a couple that actually, you probably ever, probably even matter.

><u>Kelli Shaver:</u> Yes. 

><u>Jonathan Stark:</u> Like a reading sort of this yellowish reading light like an incandescent bulb and then there's kind of an underwater one that's like purple, blue and red. 

><u>Kelli Shaver:</u> Yes, I saw that one. Your submarine. It’s good for the basement.

><u>Jonathan Stark:</u> Yes it's great for the basement, for like focusing. And you can time them you set it up to you know, it does everything you'd think would do. But wait, there's more, some clever hacker sniffs this network traffic and it was actually a guy and he discovered that the phone is communicating with the base station using a simple rest API. It's one of those, it’s not really rest API, it’s a simple HTTP API that’s—well it was used to put it actually. Now I think it's pure STPI but regardless, it's very simple. It's not documented, you just kind of reversed engineer it and put his findings on Google code. 

><u>><u>Kelli Shaver:</u></u> I think there, I think you're eventually going to release a documentation.

><u>Jonathan Stark:</u> They did say that they would, they did say that they are interested in a couple of things. They might be a little bit over excited about this but it's seems like they're going to have, they have a sharing thing where you can, regular users can come up with like lighting schemes and then share them with other users. And that's sort of interesting, it’s kind of a weird limitation which they have and it’s interesting. But in that, some of the configurations are for like eight bulbs so and there's no way to like filter it down if you like, I like only three bulbs so I don't want to see the ones that require heat.

><u>Kelli Shaver:</u> Yes and the stuff I shared for my office will be totally different in your basement.

><u>Jonathan Stark:</u> Yes, it's a little bit, it's a little weird. It's almost like they're going to, you can almost feel them like, I don't know if they're trying to go like all, like train, like a social media thing going after trying—if they are trying to create like a market place like,*" lighting design by you know, Oprah Winfrey or whatever"*. Buy these, buy ringtones but it's lighting for your basement. So anyway, the rest APIs are incredibly simple. It's exactly what you think which is like you know, you just like have this sort of pretty URLS that you pointed the IP addresses of the thing and you tell like API/lights and you know, to get request to return all information about the lights. You can drill on to one of the lights and be like what's the actual settings. You can send an alert to the lights, you can make it flash or you can send a long alert to light which it makes it flash like eight times. So to me, that's the really cool thing because most of the time I found that once I got a few color schemes that I liked and that I didn’t really cared to change in very much because there are tons of ones that looks like crap in the hue space. But the alert thing is really cool because honestly, you can expose your network to the internet and then you just use anything any crawl job or IFTTE or... 

><u>Kelli Shaver:</u> Right. Just like what I just got an email on flash…

><u>Jonathan Stark:</u> Right, it's so, to be honest though, it's cool as it sound I couldn't think of anything that I wanted to get alert about in that fashion.

><u>Kelli Shaver:</u> Yes. 

><u>Jonathan Stark:</u> You know, yet. I mean, I would love it if the doorbell would flash the lights and didn't ring the doorbell because when the doorbell rings the dogs barking, if the kids sleeping then the kids awake. Much rather have the doorbell flash my lights but the doorbell is the weak link there.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> So to get to that, that's sort of like, you know, it would be awesome if I could send my doorbell to IFTTT like,  *“Oh someone pressed your doorbell”*, then flash lights in the basement send an SMS text to the phone and couple of things there, to not surprise the dogs.

><u>Kelli Shaver:</u> I feel like you can do that, we were arguing on that one sometime.

><u>Jonathan Stark:</u> Well, you can actually, there's  a kick starter project that's, I believe it base that is the open source of version of the hue light bulbs but it's the time thing. Like these thing is Polish men I mean, the box, the packaging, it was gorgeous, there was like a, it was gorgeous. It was like very…

><u>Kelli Shaver:</u> Yes. I think Apple's probably on board of all that.

><u>Jonathan Stark:</u> I don't know exactly how they partnered but it was announced that Apple and Philips partnered on this project. It wasn't surprising if at least Apple's responsible for the packaging because it was probably the most gorgeous packaging I've ever seen on anything. There's magnets in it. There's color wheel and it was like rotated, it was just over the top and it didn't disappoint once I plugged everything in. It just totally worked immediately, it did everything it's supposed to do. I got the API working no problem, very cool. I mean, the trickiest part with the API is like configuring your network to accept traffic from outside your house which is like not their fault. 

><u>Kelli Shaver:</u> Yes, having that opened the ports on your network.


><u>Jonathan Stark:</u> Yes which I gave up on them like I switch over to like using something like no IP TNS I gave up on that and I was like, *“I'd do this later my house is on fire.”* 

><u>Kelli Shaver:</u> Yes I am—I tried a candle on my dresser once. It fall over and catch some papers on fire while I was talking to a friend. I actually typed BRB bedroom's on fire before I went to deal with it. Afterwards I said, *“I really need to re-examine my priorities.”* 

><u>Jonathan Stark:</u> I know. I was like on that same point. I was you know, it’s 3:00 am and there are flames shooting out of the back of my house.

><u>Kelli Shaver:</u> And you are taking videos.

><u>Jonathan Stark:</u> Then a smoke. It was interesting what occurred to me and what didn't. Based on—you're totally going to lose your brain mode and like mono-syllabic primary color type of lots of just speculating that much talking. 

><u>Kelli Shaver:</u> Yes. Like, get the kid and Erica and the pets out. 

><u>Jonathan Stark:</u> Number one kid out of the house, 
>>number two, pets out of the house,
>> number three put pants on. 
>>It was raining, it was late, like a total unusual weather but the—there's a couple of things that I found interesting or that it never occurred to me to—there were two points that occurred to me to take pictures and I did take exactly two pictures but normally it's the kind of thing that you know, if I was a bystander I would have been up in that, I would have like a 70 photo gallery online you know.

><u>Kelli Shaver:</u> Right.

><u>Jonathan Stark:</u> But even though there was like, I suppose it sounds surprising to hear that but there's a huge shift from a way that I normally would be and the other thing that was interesting is that after it was over I went over to Erica's parents house because it's like it's way too smoky in the house to stay there and it was like a huge hole inside the house. So, I didn't, I just didn't need anything unusual, I didn't. You know, we had to bring some stuff for Cooper but not that much since some stuff for Erica but not that much. But I just grabbed my regular like leaving the house stuff and I was all set to go. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Set-up anywhere and I was like wow you know, I don't really think about it because I'm so used to it but the mobile office type of concept is totally like real you know. That sounds dumb to say out loud but I was like you know, everyone's like, *"Oh, wow. How are you going to...?”* 
>>You just play it simple and I'm like, *"I don't feel that much different."*

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Most of the difference is really just having to deal with workman and stuff.

><u>Kelli Shaver:</u> Like sleeping somewhere else but you know.

><u>Jonathan Stark:</u> Yes, I don't know. It's just, it will be a lot more disruptive if everything I needed to do my job, I couldn't put in a small bag that I carry around.

><u>Kelli Shaver:</u> Right, right, like in my case, in my case it will be more disruptive because like I could take my laptop and I could write code but If I needed to do work and Photoshop or something like that, I would really miss having the large display iMac.

><u>Jonathan Stark:</u> Yes and to that point, I have been carrying around my Mac pro and not my air because there are some things like these, this is actually the most difficult, doing the podcast is the most sort of, mobile.

><u>Kelli Shaver:</u> Conversant.

><u>Jonathan Stark:</u> Yes exactly. Conversant thing because I chose to use the regular mic stand and not just use the iPhone but I could have done that. It’s not as good but so we should probably wrap up; think we might be coming a little long. 

><u>Kelli Shaver:</u> It's kind of why I'm doing this.

><u>Jonathan Stark:</u> Yes, I'm getting lost in it.

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> Yes, it's been two weeks though, so I feel like…

><u>Kelli Shaver:</u> It's been two weeks and your house caught on fire so you know.

><u>Jonathan Stark:</u> Right.

><u>Kelli Shaver:</u> You can get a pass on that I think.

><u>Jonathan Stark:</u> Right. So lots of fun stuff in the internet things and SMS and a whole lot of other stuff. Hopefully we didn't bore the dear listeners.

><u>Kelli Shaver:</u> It's going to be really cool about five years when all of our stuff is connected.

><u>Jonathan Stark:</u> So the thing that, I know I am trying to wrap but the thing that, you hear a lot of sort of futures. There are technology that can read our thoughts. Even I say because there is stuff and people are working on but that's a long way off. Even the Google I feel like farther off than people want to believe but there's still a ton of radical stuff that people can do, stupid SMS and like stupid Wi-Fi and IP addresses and HTTP. It's like not tacked out there's ton of stuff.

><u>Kelli Shaver:</u> Yes, like your fridge can say oh hey, *"You’re out of milk."*

><u>Jonathan Stark:</u> Yes, like people like, *"Oh, there's no big deal,"* but I guarantee you show us some stuff and shop and target and wall mark will be all over that. 

><u>Kelli Shaver:</u> Yes.

><u>Jonathan Stark:</u> To be like creaming of all sorts of application on top of that capability as soon as it hits critical mass they're going to get on it. So, anyway that we'll be top of it.

><u>Kelli Shaver:</u> I think there will be ads on your fridge.

><u>Jonathan Stark:</u> Well that's relevant and that's fine with me.

><u>Kelli Shaver:</u> Yes, oh your fridge tells that you're out of this here is a coupon.

><u>Jonathan Stark:</u> You finish, you or like you forgot your place for toilet paper when you are totally finished. We don't keep toiler paper in the refrigerator but if you get the idea. 

><u>Kelli Shaver:</u> No, that would be very strange.

><u>Jonathan Stark:</u> Well just the used stuff because it starts to stink if you leave it out. 

><u>Kelli Shaver:</u> With that, leave that.

><u>Jonathan Stark:</u> That's our show for this week. I'm Jonathan Stark.

><u>Kelli Shaver:</u> I'm Kelli Shaver.

><u>Jonathan Stark:</u> We hope you join us again next week for the <b>Nitch Podcast.</b> See you later.

><u>Kelli Shaver:</u> They will blame you if you did.

><u>Jonathan Stark:</u> Bye.

><u>Kelli Shaver:</u> Bye.

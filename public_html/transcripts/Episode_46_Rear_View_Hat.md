Episode 46: Rear View Hat
================================

<u>Jonathan Stark:</u>	Hello and welcome to <b>Nitch podcast</b> for Friday, March 1, 2013. I am Jonathan Stark.

<u>Kelli Shaver:</u>	And I am Kelli Shaver.

<u>Jonathan Stark:</u>	We are here to talk about building Apps that run everywhere. This week proof that APIs are totally awesome, getting into trouble with first responsive design, and experimenting with the next revolutionary mobile technology. Please stay tuned the <b>Nitch podcast</b> is next.
>>Hello! 	

<u>Kelli Shaver:</u>           Hello!

<u>Jonathan Stark:</u>	Need to get some mike jeopardy music getting from nowhere.

<u>Kelli Shaver:</u>          Yeah!

<u>Jonathan Stark:</u>	Somehow! We do live the air later gets direct. So you are just saying right that before we start recording that you do not eat breakfast or have any coffee?

<u>Kelli Shaver:</u>          No! I skip breakfast this morning because I know I will be going out for lunch and it will be confirm a dark lunch so.

<u>Jonathan Stark:</u>          Hmm! That is horrifying! [Laughs] I am horribly caffeine dependent.

<u>Kelli Shaver:</u>          Yeah! It guesses it could be coffee just I try to come back and I do find that I am sleeping.

<u>Jonathan Stark:</u>          Oh! That is good.

<u>Kelli Shaver:</u>          It has been working.

<u>Jonathan Stark:</u>	Yeah! It’s cool.

<u>Kelli Shaver:</u>           I guess maybe!	
<u>Jonathan Stark:</u>	[Laughs] I am sure that is true. I know that coffee is awful. It is just taste dirty but I want it. [Laughs] I did other day I can’t drink coffee late in the afternoon because it really affects me and it is bad enough so but I am just weird this two o’clock, pointing time so I like said coffee please then I said I get some peppermint tea and I love it, it was so good. 

<u>Kelli Shaver:</u>	Yeah! Sometimes the tea in the afternoon.

<u>Jonathan Stark:</u>	It was really good. So cool! Do we have any housekeeping this week? I don’t think so.

<u>Kelli Shaver:</u>	I don’t think we do.

<u>Jonathan Stark:</u>	No, nothing I cannot think of anything in terms of schedule or anything like that and I also believe that we don’t have any bag report this week. Do you have anything?

<u>Kelli Shaver:</u>	No! No. I don’t have anything. What’s happen on number we are on?

<u>Jonathan Stark:</u>	This is forty six.

<u>Kelli Shaver:</u>	Forty six, we come up until fifty.

<u>Jonathan Stark:</u>	Yeah! Yeah! We come up on planning a life hang out or something, I think we should do. [Laughs] Go.

<u>Kelli Shaver:</u>	It may be really hard on our egos?

<u>Jonathan Stark:</u>	Yeah! Exactly and I am not exactly want sticking on our schedule’s so we really need to plan it out.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	But I don’t want to do that also to our dear listener. Encourage us on twitter that we actually sick to it but yeah forty six. Track on later, free notes could be fifty two.

<u>Kelli Shaver:</u>	The whole year?

<u>Jonathan Stark:</u>	Yeah!

<u>Kelli Shaver:</u>	We could skip one week.

<u>Jonathan Stark:</u>	Yeah! It’s for Christmas I think it was?

<u>Kelli Shaver:</u>	Yeah! I know.

<u>Jonathan Stark:</u>	So every week we are doing a feud dear listener.[Laughs]

<u>Kelli Shaver:</u>	I have been more consistent on this basically anything in my life. [Laughs]

<u>Jonathan Stark:</u>	[Laughs] Yeah! Me too. Alright so I guess we could jump up into, we got some fun stuff to talk about this week. I think last week we talk a ton about tools. Alright last week was a dash bashing right?

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So this week we are going to talk about situations. I know we both have a little bit of client feedback to talk about today so let’s jump into that  I know it is interesting to people who work with client’s not just building stuff for themselves.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So I think I said from the beginning that prove hazard that Apps is awesome because even the client realized it.

<u>Kelli Shaver:</u>	Yeah! I am working on it, started on it back end of December.

<u>Jonathan Stark:</u>	The mobile lap?

<u>Kelli Shaver:</u>	Yes it’s a mobile lap for it’s a rear application and it was your basic where about and first of all what you say it needed its own mobile site, the mobile version and the desktop version. The user gets the instruction completely and definitely and the kind of needs to be. So having the responsive designer something like that is a really good fit.

<u>Jonathan Stark:</u>	Right! Sometimes that happen, so if you need distinct your structures you can’t really have it.

<u>Kelli Shaver:</u>	Yeah! Yeah! So for this we definitely want a separate mobile version of the site. But we also kind of working ahead the idea that we may in long term like the phone application as well. Whether then just adding on with additional mobile view files with the existing rear applications, what I did was add some EPI calls to the app because it does not have a promulgate PI and so then I don’t mind my mobile plan on top of that.

<u>Jonathan Stark:</u>	Did you talk to it on that on the service site or from JavaScript on the client side?

<u>Kelli Shaver:</u>	On the client side I am using java script to make the call to a server.

<u>Jonathan Stark:</u>	So it is like an Ajax.

<u>Kelli Shaver:</u>	Right.

<u>Jonathan Stark:</u>	An approach to that call.

<u>Kelli Shaver:</u>	Yeah! The mobile plan is for Ajax. The client is likely is in result so much, and for now considering going back on the desk top version on the site and recommending the same architecture.

<u>Jonathan Stark:</u>	Yeah! That is crazy for client to suggest the refractors.

<u>Kelli Shaver:</u>	Yeah! And well I really don’t want to call the desktop side of thing finish, it’s functional but there never was a lot time or money put into the design on the desk top side it just kind of in MVP get up get it working and the mobile side the protection really start to polish the application and the design is progressive.

<u>Jonathan Stark:</u>	Okay close. What is the combination of things? It is like improve the user experience from all you know from mobile experience it is really nice I guess. It is really polish and cool plus you get the CPI approach which is nice sort of separation concern so I guess his thinking like oh what are sort of re do or we do the desk top version nice so he chooses the same CPI approach.

<u>Kelli Shaver:</u>	Yeah! Yeah! We use the same CPI approach and the same java script, client because he has been really pleased with the performance.

<u>Jonathan Stark:</u>	Ah! Cool so that is interesting because you can have the two different sorts of front end and application but still use the same you know modular behind the back. So you can just pick and choose calls. Because the calls are probably all same stuff and I am assuming it is the same functional specs.

<u>Kelli Shaver:</u>	Yeah! The desk top has actually has couple of features the mobile have that doesn’t have it this point that I include in my mobile. But yeah in the most part that we are putting all that we use all the java script because that is my idea in lack of JS so I can do the new HP home to the desk top and just include the knock out bindings.

<u>Jonathan Stark:</u>	Wow!

<u>Kelli Shaver:</u>	Yeah that was the point that I which I really said okay this MVV model is really powerful.

<u>Jonathan Stark:</u>	Yeah! That is cool. So now you mention we talk about before that the knock out binding are kind of inline in the tags. So do you heard the talk about, I am curious if you can have like the section of the mobile kind like widgets that like you combine in the desk top version or is it that are you going to write those things from scratch for the desk top, you know what I mean because you said you kind of include those knock out bindings.

<u>Kelli Shaver:</u>	Yeah! I can see that in those particular instances being sort of a widget type approach.

<u>Jonathan Stark:</u>	Aha!

<u>Kelli Shaver:</u>	The other day that is or the way everything is structure, it is pretty compartmentalized sort of being able to plug in the pieces that we need. 

<u>Jonathan Stark:</u>	Aha!

<u>Kelli Shaver:</u>	In these particular instances I thinking it should work well.

<u>Jonathan Stark:</u>	Cool! Interesting! That is pretty exciting. Do you feel that there are a lot of thing in the real side of the fans that kind of handle the relation mapping between the data base and the views and if you take this different approach. Do you kind of characterize if you think it is faster to do in the standard rails ways or do you think it is faster to do it this way? It would knock out just using the Ajax API style approach?

<u>Kelli Shaver:</u>	It is faster in terms of performance or in terms of development?

<u>Jonathan Stark:</u>	Developmental.

<u>Kelli Shaver:</u>	At this point I don’t really think it would be, at this point it would be faster to do this at this way because of what we got a lot of other jobs could read it. If I had just gone and created new files for an HT files or ERV files for whatever for the mobile app I don’t worry about Ajax. Then that probably would have been the faster way to develop the mobile app but we would have sacrifice a lot in terms of music experience I think.

<u>Jonathan Stark:</u>	Interesting and then you came around to tag the desktop it would be anything to savage.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Interesting!  That is really cool. There’s a couple of obvious tradeoffs but I am kind of struggling on that project by project basis which is there is something that I have to decide in each project. The problem when you think of that approach is maybe I am wrong or maybe you could tell me no you have worked this out but the problem is that makes both the mobile and the desk top client dependent on java script. Unless you are really using or it got a super sleek in it naturally you know it a link on it. Yeah it has fall backs.

<u>Kelli Shaver:</u>	Yeah! It could do a link it has fall backs but to be honest we are worrying too much on this at least not for the mobile.

<u>Jonathan Stark:</u>	Aha! Right! Yeah! I see a lot something I realize it is a gray area between a lot of website, between website apps but the closer to get to a task oriented interface the less you can do away with java script.

<u>Kelli Shaver:</u>	Yeah! And this is extremely a test screen interface.

<u>Jonathan Stark:</u>	Yeah!

<u>Kelli Shaver:</u>	Usually it is project management type software.

<u>Jonathan Stark:</u>	Yeah! So it is a kind of thing uses probably all day long.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It is a tiny improvement makes a big difference when you are using a pieces offer all day long.

<u>Kelli Shaver:</u>	Yeah! What I am worry about the higher support for this version. Nothing before I should say.

<u>Jonathan Stark:</u>	Interesting! I been working on couple of states, a school projects I should say, definitely closer into the web, the site category. You know there is a log in form and a couple of little things but in general its delivery of content, customized and personalized content.

<u>Kelli Shaver:</u>	Yours is probably a lot more needs to run everywhere than mine a least application in Nurses a big thing.

<u>Jonathan Stark:</u>	Yeah! It is a little bit more public and I don’t know if it is public now but the staff is working on is definitely like double public it is like market that can be reach the better. So in early decision is like it is okay are we going to or where we draw the line between like this is going to run in the kinder one with no Java Script, no CSS, almost does the client care about that.

<u>Kelli Shaver:</u>	Yes!

<u>Jonathan Stark:</u>	But the thing about it when you set it up where can run in the kinder one which is something you can exist or you can test on your future proving yourself some wacky new device tag like the smart toaster if you kind of like. Just hearing this standard layered approach starting from the bottom and you know most resource can strain area progressively enhancing the away stock for more powerful things.

<u>Kelli Shaver:</u>	Yeah! Yeah! And that is actually another reason why I wanted to go to the API with this application that I am working on because right now we are not worried about the next stuff but the underlying functionality with the API, is there if you want to build if you want to run from command line.

<u>Jonathan Stark:</u>	Right! Do you still have that kind of, is there going to be an API that people can like third party developers can build on?

<u>Kelli Shaver:</u>	It is not open to third party developer yet but there is no reason it could not be.

<u>Jonathan Stark:</u>	So there is accessibility so to speak like people want to set up their own client like you know wacky situation like then they have the control to do it.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So to me that is a lot of bells in terms of you know we are not going to support projects that they do have java script but.

<u>Kelli Shaver:</u>	When API builds your thing.

<u>Jonathan Stark:</u>	Yeah! Go to town. In the process of kicking out the java script portion of really big basically blog style project, the first thing developer talk about like it is okay what is the plan for fail over or what we going to do when we get down to the things? So we kind of projects like that like Red Cross project, we talk about the Red Cross project that.

<u>Kelli Shaver:</u>	Not a lot when we talk probably mention by name.

<u>Jonathan Stark:</u>	Yeah! Probably not but if that could be life sense but that is really cool, it is very unusual project but coming to the same kind of conclusion which is that the approach is kind of much, it is very progressive on hands but when the page loads I check for something modern like cursor selectoral or if it is not there I just not include in java script. Then you get the pure CSS experience. If there is modern java script if you will then okay great you got enhance experience. I suppose it is a little bit like draconian but the java script is big enough that let say a blackberry might may a wiping boy blackberry ninety seven hundred and every K that you can take out of the download drastically speed up the performance. So we could make java script worked on it but it just the page loads it going to becomes so slow.

<u>Kelli Shaver:</u>	Which is not worth it?

<u>Jonathan Stark:</u>	Yeah! The enhancement that we will be adding is like you said is not worth it. Like one files like the entire glossary, it is like a huge case of object that like the current page basically has glossary items highlighted and then the java experience if you top on line it is quick on one. It opens on a pop over and then it just pull the definition of the chosen object but the chosen object really big so we take so long to download and like an old blackberry just leave it out. When they top on the link they actually go on the glossary page and they have to wait for that load and it jumps right to the definition they want. They have to wait for the load but if they did it to java script they need to load for that every single page whether or not they are looking into the glossary so that was kind of trick we have been making in those sort of project lately. Like four projects like that it is kind of unusual, they are very none applicative, they are very content heavy apps.

<u>Kelli Shaver:</u>	That is a little unusual for you.

<u>Jonathan Stark:</u>	Yeah! So interesting that is a smooth Segue into our next topic. Which is we are always talking about the benefits of the mobile first thinking or typically we modify that we call start small because its mobile might not be that who knows what. You might not be thinking mobile first but you do want to think about is the most resource constrain situation you could probably going to be in the heaviest constrain and think about that query design and the context it much easier to scale things up for roomier or more powerful or more memory or better connected devices.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So I think what designers or developer can drop a call on this a lot because yeah I got client into like we want they call specifically to create a responsive site and they know what a responsive website is.

<u>Kelli Shaver:</u>	Yeah I start seeing that too.

<u>Jonathan Stark:</u>	Yeah it is a big difference from a couple of years ago. I mean D’ Mocruts claiming on the term has really sunken penetrated. So that is really cool but I think I am starting to okay everyone say let us be responsive, what do responsive? Like alright, great but at the end what is happening is the process is different and client buy large I think while being responsive is a cool thing in the completely get off on you know scaling the window up and down. Based on my experience they are not really prepared to stop doing the designers pearl or pro static PSD.

<u>Kelli Shaver:</u>	Right! They like the idea but they are not ready for the mental shift that required developing that way.
<u>Jonathan Stark:</u>	Right! There is really one because by saying yes we really embrace the responsive design, she is also saying I want to give up control over some pick to perfection over giving with; I don’t think they realize that. I know they don’t realize that. Release the rectification of that because if you are going to a meeting and okay we are going to design a narrow view first because that is the one that going to force difficult decisions looking at it in their brain mobo(3x) and you know this is on the phone(2X) probably will be. But they are not thinking they are in into this mind set like you know we have retail operation and there is a view somebody to see whether there is standing in line in the checkout counter. So instead of it gets confusing because nobody would be thinking of that or looking into a thousand pic into a wide design.

<u>Kelli Shaver:</u>	Great [Laughs]

<u>Jonathan Stark:</u>	You know they definitely think that you are looking into a thousand of pic into a wide design. You are thinking someone setting on the desk or they are setting at home, laptop on bed but they are not, certainly not in store.

<u>Kelli Shaver:</u>	Right!

<u>Jonathan Stark:</u>	So it really complicates the discussion because it is tough to say okay, pretend that this is just really narrow, pretend this person is setting on the couch, like in their phone and they are not in line and we get that decision away first. My goal is sort of progressively act, add that kind of on say experience after we get the overall information, architectural hierarchy on what is most important on the page. Once we get what I work out it is alright what we can do something cool like something in store right now it is very tough to potentially view show bar codes, scan coupon or whatever it is that is different in that other contacts. It is really hard to get there when you know it is really hard to keep them in mind okay let us consider the setting in your couch, home experience.

<u>Kelli Shaver:</u>	Yeah! It takes progressive approach not mind set not just in terms of design or developmental features or technical features in terms of I guess marketing strategies.

<u>Jonathan Stark:</u>	Yeah! It is rough and even there are times when there are more pick up learn whether a need of app or still talking about the website. Obviously we are still talking about the website. The brain keep wanting to go you know like ideas like they can just scan the rewards card with their phone with their camera and you know it’s like a website, you know?

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So anyway I guess the moral of the story is that clients are definitely like the idea of response to website but it’s going to be a while before there is a process that everyone is comfortable with that is less waterfall and more fragile interrogative.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Where you are not getting to sign off in every stage for approval so beginning next week we make sure we are still going on the right direction and you can tell us if not but this is really a sign off there is nothing you know what I mean there is nothing.

<u>Kelli Shaver:</u>	Yeah! I feel the same way and actually in the API that I been working on I have to do a lot of convincing first to get that well. Well! Let us just start small and just keep the rating and just working out really well the plans till now he loves things going but it did sell like.

<u>Jonathan Stark:</u>	Yeah! Yeah! No doubt so imagine now I am guessing here it is not a large corporate environment.

<u>Kelli Shaver:</u>	No it is not its one person.

<u>Jonathan Stark:</u>	Yeah!  So imagine a large corporate environment.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Brace guts! So this is another issue so this is not specific to anybody I am working with, this is a general issue. In fact it is link in the insurance to a great presentation from BB Camp Orlando, Great Development Conference Orlando. I wish I know the guy name it is Mac or Melchior something and he basically does enterprise application and strategy for the Lloyd Consulting Firm and he just nail it half way to his presentation is there is a horrible catch twenty two just that the large company really, really bash the call and it is really cool and all created a dedicated mobile department it is like a director of mobile you know it is something equivalent to that. Now those people come to a responsive design this corporation is really in a like who owns the responsive site?

<u>Kelli Shaver:</u>	Right! Because it is not specific in mobile.

<u>Jonathan Stark:</u>	All right! It is just a website and it looks good and wide and so what happens when the desk top team, are the people normally do the dot com development if you go into meeting like okay we are going to design the narrow first. Then all of a sudden the people oh! You need to call the director of mobile in here.

<u>Kelli Shaver:</u>	Yeah! [Laughs]

<u>Jonathan Stark:</u>	It is like you know just the skinny view and that you know?

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It is like who owns the BI, it is really, really weird and I mean it is hilarious when I saw the videos because this is completely happen to me and it is something I have seen. Recently it is something I have seen problem in the past two years just like doing strategic consulting like who own mobile, who owns mobile? Everybody wants to make own department for it but.

<u>Kelli Shaver:</u>	It has not to be simple thing.

<u>Jonathan Stark:</u>	I don’t think there be easy answer but can be a dedicated department.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It is like to be a corps-cop, like lots of department has sum up in them like I feel the talent in the web talent in them to be expanded to be less, desk top specific and maybe, maybe I could see thing in internal agency need development in a couple of flat form.

<u>Kelli Shaver:</u>	Yeah! That makes sense.

<u>Jonathan Stark:</u>	Yeah! Because that is a totally different sales strategy and it is in expensive one. So I can kind see that but I cannot call you know it could be eyeless department. It would not be like mobo.

<u>Kelli Shaver:</u>	Right. [Laughs] Eyeless!  Team Android team it is not a mobile team.

<u>Jonathan Stark:</u>	Right. All the funny sort of issues that the development committee is arguing for certain two years is tablet mobile. Yes it is and yes, no it is not kills us tablet is not mobile.

<u>Kelli Shaver:</u>	Better.

<u>Jonathan Stark:</u>	Yeah! Of course it is a tablet mobile it does not matter, right. Well it does if there is a tablet department. That is the problem.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	 So you know everybody like been first to handle dot com, the desktop.com so nobody taught of it like the desk top site and then the iPhone and nobody can make the desk top site. It so bloated and ridiculous and make a work on mobile so in the M.site. That is the reasonable thing to do.

<u>Kelli Shaver:</u>	Yeah! At that time definitely the reasonable thing to do, I mean there are still cases that work reasonable.

<u>Jonathan Stark:</u>	Sure! Yeah! Yeah! But the problem is they created the whole department for the mobile.site.

<u>Kelli Shaver:</u>	Yeah! When really it is the web guys.

<u>Jonathan Stark:</u>	Exactly! Then everyone going to kind a like tablets became popular and it is alright it becomes the base for iPod and you know it is obviously a segment. But when the iPod came out everyone say oh! We’re going to make a tea.site. Developers are kind of laughing because it is like obviously not going to scale. Right?

<u>Kelli Shaver:</u>	Yeah! It just comes to no good.

<u>Jonathan Stark:</u>	Yeah! But it is not just building new site but at a time like I did not really occur to me how unsustainable it was it is like kind of the web team is nailed, you know building this different sites. Whoever is doing all different CNSS, completely individual stat it is top on the bottom, what I did is nearly apparent to me initially not only technology stock but they are actually hiring people in creating departments. It is a goal without stocks.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Like creating new style of in the organization like it is almost one of those things if you, I mean I would have advice early doctor not to do that on the first place but to turn into maze so that but they end up in these people on their mobile with a title like now who owns the responsive site?

<u>Kelli Shaver:</u>	Right! When you get into the site that can do desktop or mobile or everything in between and in occasional send sometimes text message.

<u>Jonathan Stark:</u>	Yeah! So I don’t know it is wacky, so it is just one of those things it takes time to work so far.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	But the good news is that somebody’s project is like a car in the machine like the java script other people are managing it. The client and the design and other information are internationalized. Some seeing a lot of different approach to it and there is kind of feeling that some patterns are merging which is good.

<u>Kelli Shaver:</u>	That is good, yeah. Which do you prefer because I know you manage a lot of projects? You have been the java script guy lots of projects. Which do you prefer personal?

<u>Jonathan Stark:</u>	It depends on the client. You know if they are tough to manage I prefer to [Laughs]

<u>Kelli Shaver:</u>	[Laughs] It depends on the client and it depends on who is managing, I guess.

<u>Jonathan Stark:</u>	Yeah! I mean dealing with the large organization is just hard and if especially when you are talking about something like new technology wise.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	But I am very optimistic. As hard as it is I am very optimistic because even the slowest moving companies like the financial services and airlines, I call airlines slow moving, they are the worst idea system but they are pretty retailers but anyway the thing that makes me optimistic is that everybody is like wow we need to do something.

<u>Kelli Shaver:</u>	Yeah! Weather they are not been there yet they are struggling to get there so they realize that there is a need to do something.

<u>Jonathan Stark:</u>	Yeah! If they are looking for like if we don’t do something what are customer went?

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So that is good at least. What is happening is what they are going to do? [Laughs] What else they are going to do if they don’t want to do what they are going to do? Words for some you know, you see the politics are actual fraction that really does truly make difficult to do but you know, I don’t know.

<u>Kelli Shaver:</u>	Yeah! In the mean time you set rounding your CEO office bring image on airlines?

<u>Jonathan Stark:</u>	[Laughs] Yes! Exactly.

<u>Kelli Shaver:</u>	The team is economy class and prime class.

<u>Jonathan Stark:</u>	Yeah! [Laughs] Can I free ship myself to California?

<u>Kelli Shaver:</u>	Yeah! File in two days?

<u>Jonathan Stark:</u>	Yeah! Seriously, so cool and I guess we probably be host. These could be a recurring team so I am looking forward to being able to share strategies that work is great again there is a BD cap video, if you have not check *BDcom.com* it is great really I am biased but I guess I am not really biased I am spoken a lot of conferences. It was really got good they purposely keep it small, they do firm number of them and they do it in the US, I think it just in the US but they just I don’t know really finest. I mean a lot of them from direct it is really fun but I just want to pick favorite. The thing that BD com, they keep BD come from my lips is they are doing awesome jobs and exposing the contents. They don’t try holing it they just.

<u>Kelli Shaver:</u>	It is like pay they only have the content if you pay them.

<u>Jonathan Stark:</u>	Yeah! They are so totally understand that they just get people talking about them. The more they share the more people would talk about the more people would go.

<u>Kelli Shaver:</u>	Right! So after the event more people would pull up.

<u>Jonathan Stark:</u>	Yeah! It is fast too. So it like reading the same page, here is the list of topics, free of that so like updates or going to operate there, you have video or twit about and then they have this podcast that we talk about with particular theme that they see coming up that they do really a good job.

<u>Kelli Shaver:</u>	Yeah! I like the podcast a lot.

<u>Jonathan Stark:</u>	Yeah! It is fun! I don’t know it is really good. Just check it out there is a lot of great comments of course but definitely check the account because it is very educational. It is free sharing the information but anyway, Steven Hay did it talk about basically responsive web design and work flow and he brought up a punch of episode we get a little bit a lot of process or thing like going through the project. He did kind of a similar thing by more experience in higher level like with big companies like these which also have politics and internal difficulties and one of the thing he said was super brilliant, there are bunch of great things he said one is brilliant which is when you are doing your responsive design and you know do them make spaghetti frame like we always talk about but when you are going to present them into the client open your browser window all the way, take a screen shot and have them mark that screen shot. Which is hilarious because it gives them the purely psychological and it gives them the work flow that they are used to? You are creating that big lay out based on the small lab that so the problem to this is they don’t get the pick the hierarchy of the small area you can have to just decide. So we say all the time that it is hard to shoe horn the big design than the small one. Building the big one and the small one at the same time, I don’t think it is impossible yeah there is a little trick there but I don’t think it possible to take on the big design and incorporated in the small design if you are building a building at the same time.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So that remains to be seen. So from the development stand point I think efficient from the client and from my stand point. It is great. But there are a lot of great tips in the talk so we can link on those. So yeah! The complexity of mobile first design okay?

<u>Kelli Shaver:</u>	Yes! Both from the technical stand point for me the management, mental load?

<u>Jonathan Stark:</u>	Yeah! Psychiatry.

<u>Kelli Shaver:</u>	It rains a lot for couple of seconds now.

<u>Jonathan Stark:</u>	Yeah! It supposed to be pouring here for a while.

<u>Kelli Shaver:</u>	It is coming down now.

<u>Jonathan Stark:</u>	So one more thing to talk about now which is a lot more futuristic.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	Hopefully this APIs and mobile first design would make it easier to transition into our revolutionary mobile technology in the future. So long time listener will know that I think pretty strongly that the smart phone that we know got matured. If you watch the news that come out in the mobile congress last week that it can prove my point that even in a long way that this gigantic Chinese phone manufactured even they are putting awesome working. Smart phone that include IPhone is like awesome in their own right. All the screen size kind of normalizing between four to five inches, even Apple finally gave in they made a foreign screen. It just matured, it’s a lot of adapt on Samsung phones but really we going to see any radical change the way people use their phones.

<u>Kelli Shaver:</u>	Know the phone manufacturer.

<u>Jonathan Stark:</u>	Right! Know the phone manufacturer call the smart phone but it is not really the smart phone the same thing. It not immediate to be flexible that it could be or something liked that but I guess it still a phone it changes really I think the main probably the coolest feature of smart phone one is also the biggest drawback is the top screen interface because it  horrible for your battery. It gets pro and cons in terms of interaction content actually in content because you think it manipulate your content directly awesome and very ware word and also blacking in your screen when you are using your fingers and it makes kind of difficult.

<u>Kelli Shaver:</u>	It is a pain in the bottom during sunny day? [Laughs]

<u>Jonathan Stark:</u>	Yeah! But the big one you have to look at it.

<u>Kelli Shaver:</u>	The thing that bogs me most about it is not using the web when I am standing outside on sunny day, the fact that I have to use it to make a phone call, when you can’t sleep because the shine on it. [Laughs]

<u>Jonathan Stark:</u>	Yeah! There is a lot of obvious thing its revolutionary feature. It completely defines the market. But Apple basically beginning from Computer Company they just walk in into the cellphone market destroys blackberry and Nokia market like it’s a goal feature.

<u>Kelli Shaver:</u>	Yeah! Yeah!

<u>Jonathan Stark:</u>	The requirement in using require one hand and be able to look at it for almost everything but that creates a lot of time throughout your day when you are not connected into the cloud. I just have underlying belief that people are going to desire greater and greater, connect the options anytime and the only way I could see to get there is to remove either the hand or the eyeball constrain or both.

<u>Kelli Shaver:</u>	Aha!

<u>Jonathan Stark:</u>	So I don’t know exactly what this new things look like but it not quick like a phone and obviously glass tons of news about coco glass recently.

<u>Kelli Shaver:</u>	Yeah! The real computer I jump on that.

<u>Jonathan Stark:</u>	Somebody posted a fake EBay posting but they are basically lying and said they have coco glass, they have units for sale and again it was fake it was not really for sale and the bidding went up for fifteen thousand dollars.

<u>Kelli Shaver:</u>	Wow!

<u>Jonathan Stark:</u>	Yeah! Which is shocking especially considering coco glass you know will release in the end of the year or early 2014 which is less than fifteen hundred which is the developmental cost.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	So there has been really, really amazing videos coming out The Verge, The Acapolsy from the verge Testimony recently it is like if is not if but when? This is kind of what you think. He has been skeptic too, like he has been too hokey but I don’t think it still hokey. It was old time I don’t care people think it is weird. I mean it is embarrassing to be staring at your hand all day but less and less embarrassing like something in your glasses.

<u>Kelli Shaver:</u>	Yeah! I used to go outside I wear glasses wearing a freaking telescope on top of them okay.

<u>Jonathan Stark:</u>	[Laughs]

<u>Kelli Shaver:</u>	I don’t care. Compare to that the thing they would be able to see techniques of glass.

<u>Jonathan Stark:</u>	Well that is wacky.

<u>Kelli Shaver:</u>	I will send you pictures.

<u>Jonathan Stark:</u>	I want to say I want a picture of that.

<u>Kelli Shaver:</u>	Yeah! I am sure they make small models now than what I have.

<u>Jonathan Stark:</u>	So the thing with coco glass as much as I want is revolutionary as it is still the screen. Touch screen is a touch area and that serve the handle bar of the glasses but it is still a screen till it require your eyes I have not seen anything, I have not seen spoken word like if glass take a picture, glass take a picture or video or whatever I have not seen anything that is talking back to you.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	You talk to it and you look at the screen. That is a hand free that is a big difference and the other big difference is you got a bird’s eye view of rears line of side that is pretty cool. But still I wonder about the screen limitation and how it be in bright light or yeah nice in your eyes, just up a little bit and how striking it would be better for audio feeding in your ear or just the screen so...

<u>Kelli Shaver:</u>	Yeah! I wonder how it going to work with my extreme likes a purple vision.

<u>Jonathan Stark:</u>	Yeah! That is a good question. Like we need far sighted are we going to see it?

<u>Kelli Shaver:</u>	Yeah! You would need focus on.

<u>Jonathan Stark:</u>	I probably not so you know it is not adjustable. But I don’t know if there is a way that changes the depth of field or something but it would be a surprise, it does looks like a prison but I really don’t know.

<u>Kelli Shaver:</u>	Yeah! I am very near sighted so that would be my problem that is why I have purple vision.

<u>Jonathan Stark:</u>	So basketball is out?

<u>Kelli Shaver:</u>	Yeah! Yeah! Field radius something like eighteen degrees so something ridiculous.

<u>Jonathan Stark:</u>	Yeah! That is not much. What if I have turning?

<u>Kelli Shaver:</u>	Yes! So I have neck problem.

<u>Jonathan Stark:</u>	So I was thinking about so I really wish I could test, first of all I could be able to see both my eye on how it work and also how much research I thought that I am having that little view how good or how bad that would be. So I was thinking about it in Copra’s there is always little toys and box, like do yourself telescope in one of the court thing, you probably seen this in one slice it put it into mirror that is it. All I have to do is tape my iPod touch to my iPhone to my hat on the side like over my ear. Instead of two mirrors like you see cyclist they have rear view mirror stick on the helmet.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It is like a dental mirror and put the other one into screen, it got the periscope view at the side of your head. So you could interact with your finger and to see it.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It is not hands free I realize but it just like put it on. I can stick my internet phone, my head and be like put on Google now.

<u>Kelli Shaver:</u>	It is shame it does not have internet.

<u>Jonathan Stark:</u>	Yeah! You read my mind.

<u>Kelli Shaver:</u>	That little insulting tracking commando if it does not have internet access.

<u>Jonathan Stark:</u>	Yeah! You totally read my mind. I can put right on my hand it is so easy, so we went down to like Michael’s so I got so crazy, so I bought a bag it is like an inch square mirror and like assorted size, regular punch of modeling liar but I have not completed the job but I do have the rear view mirror and I am telling you it is really difficult to set up in a that matches my like far sighted field vision I don’t know, I doubt that I will use an eyeglass so that is for sure.

<u>Kelli Shaver:</u>	Sorry you have been interrupted, have the mirror buys it first and so you keep use of the other one. If you get it and can’t use it buy it I buy it from you.

<u>Jonathan Stark:</u>	It is a complicated deal we have to pick a call we both like.

<u>Kelli Shaver:</u>	Yeah! I suggest you wear eyeglasses.

<u>Jonathan Stark:</u>	Cool! Alright! To be post in the show? So you are wearing them.

<u>Kelli Shaver:</u>	Yeah! No, that is the fear I have.

<u>Jonathan Stark:</u>	Oh it is not bad. I mean it is not great.

<u>Kelli Shaver:</u>	I could do it something I can work for those choosing drastic frames.

<u>Jonathan Stark:</u>	Yeah! Interesting and I don’t understand how it works like; well I don’t want to talk about it.

<u>Kelli Shaver:</u>	Mirror I guess. 

<u>Jonathan Stark:</u>	Does it?

<u>Kelli Shaver:</u>	Yeah! I think so.

<u>Jonathan Stark:</u>	It is kind of hard to describe in seeing it is like almost an old school Kodak camera that is attached to a pair of cheesy frame. Interesting we could not read about that vision, so anyway I am looking forward to getting the mirror stick to my head and go take that for test drive and see in what have like probably using an Android phone, like a widget screen app that shows the weather or current temperature, the traffic condition like a. I am kind building an app that is kind of dashboard or view of the world around me.

<u>Kelli Shaver:</u>	Yeah! I saw in the app the other day basically it is a dashboard type, whether TPS or graph, it display everything there. It is like you said earlier it is a dash like inside your corner.

<u>Jonathan Stark:</u>	Cool! Oh yeah if you can dig that one it would be perfect.

<u>Kelli Shaver:</u>	Yeah! I will look for it.

<u>Jonathan Stark:</u>	Cool so definitely I am definitely looking forward to having that kind of experience of meditate ovulate in the world to see if it is compelling or not. But the other thing that did negative is I finally got an iPhone five, it is the first and I have query on the other devices with not a phone and like coincidence I am also commuting couple times a week which I am never normally do in serious. I can’t believe people can read more than they do because it is like awesome for commuting.

<u>Kelli Shaver:</u>	Yeah! I recently start using the voice message instead of typing through the phone and Apple is picking really good.

<u>Jonathan Stark:</u>	Pretty good yeah.

<u>Kelli Shaver:</u>	It is a lot easier to talk on your phone on this type.

<u>Jonathan Stark:</u>	Yeah for tons of things. It is weird and this is the thing that I want to experience like the mirrors on my head and also to see how it changes your behavior or not. Yeah how it changes your behavior and how it changes your usage pattern and like when you do not want to use it. So when I use the car for myself I will use Series for hour long drive none stop. But when I am home if anyone is around I don’t use it.

<u>Kelli Shaver:</u>	Look at the sound again.

<u>Jonathan Stark:</u>	I don’t know what it is almost like I don’t this is sound of weird because I don’t like I am doing private on my phone. But I don’t really want anyone know what I am doing on my phone. I always feel that I start a conversation.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It like you know serious I can think of any example I think stupid thank for go-go glass. If there are people standing there I feel it going to draw into a conversation. I don’t know it feels intrusive for them and of course I don’t like even talking to other people on the phone. I don’t think I don’t know I don’t like it talking there need to be I think I can talk for this for hour because I am talking for two days but if there is a need on another way to interact in this next A new revolutionary devices allows to interact with like computing in plain sight like privately so you would be able to interact without no one noticing.

<u>Kelli Shaver:</u>	Yeah! Some kind of sub vocal curious or something...

<u>Jonathan Stark:</u>	Exactly! You know it like quacking your teeth together putting your fingers together, there are already project type version of this kind of technology I feel I need to make a way to the...

<u>Kelli Shaver:</u>	Yeah this is a little electric the reason I thought.

<u>Jonathan Stark:</u>	[Laughs] Just to prove that I am not crazy that is going to happen for a long time but you know audience staff is dialed you know, it works you know like audio import. None vocal audio import works it is a consumer advice.

<u>Kelli Shaver:</u>	I was surprise that how long it can pick up what I am saying even your situation unreasonable amount back in the list.

<u>Jonathan Stark:</u>	Yeah! No it is really good I mean it is different than basically voice typing on Android because you are actually sending command it is not the same thing as typing. You can really use it while driving and it does stuff like a series lunch auto ball this is what you call audio book or you know Series remind me to give Georgia a shot and get home. I am totally relaxed and I am surprise most people don’t talk about it. Again I have it in my iPod since I brought my iPod and never use it.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	It is all about when your hands are busy.

<u>Kelli Shaver:</u>	Right.

<u>Jonathan Stark:</u>	And to take it all from the beginning if you have APIs and you have smart content between what we talk today and if you have a clean content it is not political information and you are going to be in good shape in this next revolutionary device that comes out on the seen whatever performance it take you were ready to respond.

<u>Kelli Shaver:</u>	Yeah! I t does not matter if you do not have any existing client work or whatever new things are out there because if you have an API you can just look on.

<u>Jonathan Stark:</u>	Exactly! Like the internet things everybody is being saying that it is the next big thing, the devices are starting to come out.

<u>Kelli Shaver:</u>	Yeah!

<u>Jonathan Stark:</u>	I promise to start that conversation there been around it is very exciting I waited long enough.

<u>Kelli Shaver:</u>                     Give it five years and it is completely different.

<u>Jonathan Stark:</u>           Yeah!  As the cook goes we are the next generation to open in this stupid society.

<u>Kelli Shaver:</u>                   [Laughs]

<u>Jonathan Stark:</u>           Everything going to be smart so we should probably wrap getting ready we definitely drag our favorite party training as I was thinking just today and I need to get on type duty now and it going to be finger cross on last week for type duty.

<u>Kelli Shaver:</u>                   How nice.

<u>Jonathan Stark:</u>          Yeah!

<u>Kelli Shaver:</u>                   We took our time on that too.

<u>Jonathan Stark:</u>          So we close with a joke.

<u>Kelli Shaver:</u>                   I think we just did.[Laughs]

<u>Jonathan Stark:</u>         What is the mathematician do when he is constipated?

<u>Kelli Shaver:</u>                  I don’t know.

<u>Jonathan Stark:</u>         Working on the pencil.

<u>Kelli Shaver:</u>                 Oh! [Laughs]


<u>Jonathan Stark:</u>        And on that note that is our show for this week. I am Jonathan Stark.

<u>Kelli Shaver:</u>                And I am Kelli Shaver.

<u>Jonathan Stark:</u>       Hope you join us again next week for more bad jokes on the next podcast.

<u>Kelli Shaver:</u>               Bye.

<u>Jonathan Stark:</u>       See you.


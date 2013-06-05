Episode 56: Eighteen Hours Since Last Twisted Ankle
====
May 10, 2013

Running time: 33:16

Jonathan and Kelli talk about how to quote a project for a client who needs an app that can run everywhere.

<audio preload="auto" controls>
	<source src="https://s3.amazonaws.com/nitch/Episode_56_Eighteen_Hours_Since_Last_Twisted_Ankle.mp3" type="audio/mpeg" />
	<source src="https://s3.amazonaws.com/nitch/Episode_56_Eighteen_Hours_Since_Last_Twisted_Ankle.ogg" type="audio/ogg" />
</audio>

[Download (24.1 MB)](https://s3.amazonaws.com/nitch/Episode_56_Eighteen_Hours_Since_Last_Twisted_Ankle.mp3 "Episode 56: Eighteen Hours Since Last Twisted Ankle")

## Related Links

* [Happy Docs](http://happydocs.net/ "Happy Docs – Painless documentation for API developers")

## Titles We Considered

* 18 Hours Since Last Twisted Ankle
* A Great Fit for the New Reality
* Unwittingly Conceived
* Not More Painful

## Transcript

Jonathan Stark: Hello, and welcome to the Nitch podcast for Friday, May 10th, 2013. I'm Jonathan Stark.

Kelli Shaver: And I'm Kelli Shaver.

Jonathan: And we're here to talk about building apps that run everywhere. This week, we talk about how to quote a project for a client who needs an app that can run everywhere. Please stayed tuned, the niche podcast is next. Babble, babble, babble.

Kelli: Babble, babble.

Jonathan: [laughs]

Kelli: I was about to say, I'm droopy the dog.

Jonathan: [laughs] But you haven't cut yourself recently with a cough drop?

Kelli: No, I haven't.

Jonathan: Sheesh, it's almost a record. 18 hours.

Kelli: I know. Yeah, 18 hours now since injury or onset of new illness.

Jonathan: [laughs] You should have one of those OSHA signs in your office. 18 hours since twisted ankle.

Kelli: [laughs] I need one of those, yeah.

Jonathan: I was feeling like we were in sync the other night. I've been on this training routine. I'm trying to like get my running speed a little bit better and so every Tuesday, Thursday, and Sunday, I'm on this very strict regime of running.

Kelli: That's the same days I go, when I go, which I'm going to start up again this Sunday.

Jonathan: Oh, good. So you're definitely getting better in the ankle department.

Kelli: Yeah.

Jonathan: Our floors are getting refinished, and if anyone's ever had that done, you know you have to move out of your house.

Kelli: Yes.

Jonathan: So, we've been staying at Erica's parent's house, and they live in the boonies, and I had to go running at night, Thursday night, and it was pitch black out. I mean no street lights, nothing. No houses, pitch black, and I went off of the curb, like halfway off the curb, and...

Kelli: That's exactly what I did. On Thursday night.

Jonathan: No sir?

Kelli: Yes.

Jonathan: Jeez. Wow, that means I'm going to cut myself on a cough drop in like two days.

Kelli: Yeah, you'll have a massive ankle in less than a week, and then you'll cut your tongue on a cough drop.

Jonathan: [laughs] Well, I've got that to look forward to.

Kelli: [laughs]

Jonathan Stark: So this week I don't think we have any housekeeping? I don't think so.

Kelli: I don't think so.

Jonathan: No, and we haven't had a bug in a long time. No bug report this week really. I don't think, nothing interesting anyway.

Kelli: No, I mean I've had little stuff but it's just typos and stupid things.

Jonathan: Yeah, and people screwing up [inaudible 02:42] . Nothing useful.

Kelli: Nothing newsworthy.

Jonathan: Right. So, we've been very web-by the last couple of shows, very focused on web specifically, which sort of makes sense because it's the biggest communications platform, it's where tons of apps are built. But we're notreally all about the web, it's just a huge component. So we kinda wanted to get back to our roots, as they say, and talk about the whole stack of, let's call it a modern cross-platform application.

We've talked about that before, of course, but I thought it would interesting to come at it from a very pragmatic angle. Which is how to explain a modern approach a application development to a client in a quote, in a way that exposes the value so that they're like, "Oh so this is a totally new way of approaching things, but it makes perfect sense and I'm sure it's gonna be a great fit for the new reality." [laughs]

Kelli: We just got through doing this.

Jonathan: Yeah, in fact you got a nice compliment on your work. It was refreshing to have such a detailed and clear quote.

Kelli: It was refreshing to hear that on my end.

Jonathan: [laughs] Everyone is refreshed all the way around.

Kelli: Yes, it was a very refreshing experience. All it needed was a babbling brook.

Jonathan: [laughs] Yes I got my refreshment in other ways. I don't think we need to belabor it, it's not rocket science but it's probably not something that people have had to address before because I notice a lot of, say, responsive products, or API projects. A lot of that stuff is kind of internal, or proof of concept, or it's like something where you are your own client, and you can skip right over this stuff of trying to convince yourself that it's a good idea.

Kelli Shaver: [laughs] Presumably you're already gotten there.

Jonathan: [laughs] Yes, we've beaten you over the head with it enough, at least. It would be great if we could talk about specifics, and of course we can't do that. But if we can keep it as close to specifics as possible, and talk though the approach to keep it real, while changing the names to protect the guilty. That would probably be a good way to go about it.

So, I'll try and set the stage, and then you can talk about how you wrote it, how you broke it down, how it made sense to you. The general concept is, there's an existing web app in the world, and it grew in a sort of organic fashion as a Web app, and it was specifically bound to an interface. The whole thing was basically conceived of as an interface that would do some stuff, and output some results, and more or less get things done for the customers.

But it was unwittingly conceived as a desktop web app, and now that that solution has caught on and it's growing and it's attracting interest from partners, and also needs a refresh to its own user interface. There are all sorts of things that need to happen. Everything, in every one of those individual projects, are pointed in the same direction, which is there needs to be an API.

That's where it fell into your lap, "Here's the whole situation, we need third party integration for some beta testing applications we need, third party integration for actually doing stuff, like white label services, and we want to rewrite our interface and maybe even write some native mobile apps to access it directly."

Kelli: An additional app to do some statistics.

Jonathan: Some admin stuff, automation, all these sorts of things. That's kind of how it came to you. What was your initial reaction to that? Good idea, bad idea, great idea...?

Kelli: My initial reaction was good idea. But it's always, especially when your coming into a project where everything already exists, you already have a working app and you're talking about building an API, there's some difficult decisions that have to be made there, as far as what do you use from the existing structure? Do you keep the data base? Do you migrate accounts? Do you start fresh? All that stuff.

There's some difficult decisions that need to be made there. And you have to take a look. You can't let yourself get boxed in thinking in terms of building an API to do what the application currently does, because the things the application currently does are very specific, and your API, in order to be the most useful, needs to be very generic.

Jonathan: We've talked about this in the past couple of episodes. A lot of times when you build an API it's for a single client application. As soon as you build that second client application, you're like, "Oh, wow, I built a lot of client logic into the API."

Kelli: Yeah. You need to avoid that as much as possible.

Jonathan: Totally agreed, and so the concept was, don't carry forward the sins of the past, basically. Abstract this. What is the core of what this does?

Kelli: Yeah, that was where we started, and the whole thing is going to be an integrative process. It's probably going to go through several stages of development. The first stage is just defining and developing that very basic core of what the application needs to do.

Jonathan: Yeah absolutely, and I'll go into a smidgen of detail here because this was, I think, a big decision. Here's a big piece that was broken off from the API for the kernel system, is like account management authentication and all that, because there's a lot of complexity there because you've got legacy system. It has its own screwed up authentication model.

And then you've got a couple of third parties who are interested in integrating with it, both in different ways. So they both have different business models and want to use the API to do the same thing but in different ways. One of them sort of a delegated process and other one's kind of direct-to-consumer white-label type of thing.

Kelli: Then you got the whole billing layer on top of whole of that.

Jonathan: Right, so the whole identity management thing is going to be a huge mess onto itself and it felt to me, and I think we both agreed, it felt too soon to tackle that in abstract way. So we came with the assumption that that would be handled outside of the API, somehow. We won't build that into the API initially, and we'll just assume that, whether it's a client application or a third-party, they somehow have a token that indicates who they are and what they are allowed to do.

Kelli: Right, it's either created by the admin of the billing system or something other than the API, at this point.

Jonathan: So that was, I think, a pretty big decision.

Kelli: Yeah, it was and I think the next big decision was to basically go with the first start on the database and then worry about importing existing accounts later.

Jonathan: You called out two really excellent...so if we're coming at this from the perspective of expressing the value of the approach to the client, because you can imagine your client. You've got a web app that's very popular and successful and you want to extend it and you want to give it a refresh, and then the [inaudible 11:53] comes in and it says, "OK, this new API is going to be awesome. It's going to be your building for the future but it's not compatible with the current software."

I think we both have really good reasons for that and I know we do, but I was really impressed with the way you described it in a quote.

Kelli: Thank you. [inaudible 12:23] because your mother asking questions?

Jonathan: Yeah. You probably do remember what you said. You gave two reasons why it was a good idea to not make it backward-compatible and my favorite one is mitigation of risk, which is, this is going to be new development and it's a whole new approach. I mean it will be a massive change to the way that things work, and you could theoretically mess things up for thousands of users by doing such a core rewrite to an existing system, like in real-time.

Kelli: I feel like you kind of need to have the two running parallel until you have the new system flushed out and developed and tested and stable, and you know that you're good with that before you get anywhere close to considering moving your existing paying customers on to that system.

Jonathan: Exactly, yeah. The other point that you called out, we already talked about, which was we were concerned about sort of bringing forward any cruft from the old system into the new one by forcing them to be kind of coupled at this early stage, it didn't make sense.

Kelli: Yeah, square peg in a round hole.

Jonathan: Yeah exactly. So that was another big thing and went into the quote, explaining to the client that these are the reasons and this made sense to him and green light.

Kelli: It also significantly reduces the time and cost that it takes to get a working version of the API up, that functions and does what the client wants it to do so, they can look at it and say, "OK, now we need this," or "That's not working." If you don't have to worry about all the existing stuff, it makes building the new system easier and faster and it's easier to focus, because you're not distracted by that old logic and that old data.

Jonathan: Everyone's had systems like this. Everyone's built systems like this. They grow organically. The business grows like at a surprising rate and things get hot-fixed in production and all of a sudden this gets patched on, that gets patched on. You've got like 25 WordPress plugins trying to solve two problems and you know how it goes.

You're scrambling to get things done, but if you had a chance, and you've got the budget, to take a step back and say, "Wow, this is we need to build a platform because this is the thing," then certainly in this case, and in other cases, but not all cases, I think there is a time to break from the past and start with the clean sweep, just like 37Signals did with BaseCamp.

Kelli: Yeah, they did that with BaseCamp and then they wrote some fancy scripts to import your data from the old BaseCamp to new BaseCamp.

Jonathan: You do have that supporting-things-in-parallel thing, but assuming that your old system is at least at a stable point, you get two benefits. One is if people fear change and they just really like the old one better, then they can stay there. Maybe you can sunset and say after x amount of time you'll get kicked out of here. But it's a more a gradual process than like, "Oh software update, whoa, what's this?" Like Facebook does to everybody.

Kelli: And then the Internet complains for a day and then everyone gets over it.

Jonathan: Then everybody gets back to staring at the screen. So authentication was a big one. Breaking backwards compatibility was a big one, and another component, I don't know how much we can go into it, was breaking off very specific process or intensive feature into its own little unit, so that it would be scalable independently.

Kelli: Right. We are not doing that in this first version but we're preparing for it.

Jonathan: You can imagine a solution that did something really processor-intensive like OCR or video trans-coding, something like that, and it's really separate from the business of the API. It's just this side process that has to happen, or like a sub-service. It is like that.

We're like, "You know what? We won't do that yet, but we're going to build that internally with the knowledge that it's going to be a separate thing later that can independently scale up and down." Since we are on Amazon, we can be strict. These video trans-coding requests, we're getting hammered. We need to spin up a bunch more instances just for that.

Kelli: We can scale just the parts that have to do the heavy processing. The API can just hand things off to it.

Jonathan: How do you write a quote for something like that? We've both done Web development for a very long time, and I've never seen one of your old quotes, but for me, a lot of times it would start off with, not mockups, maybe rough wire-frames or something.

The client would send me wire-frames, and be like, "We need an app that looks like this." Maybe I would even say to them, "Do wire-frames for me and send them to me, and then I will quote the project, because that will help me get the scope of it."

Kelli: Then you give them back a list of, "You need this specific feature, and then it does this, and then you click here, and it does this." It's a very detailed list of very client-specific features.

Jonathan: By client, you mean the client applications?

Kelli: Right.

Jonathan: It's very UI-specific. I've seen plenty of designers who do even higher-fidelity stuff at the early phase, whether it's in the RFP, or if it's actually in a quote, where it's very high-fidelity and very specific to a particular interface. If you take that out, either from the quoting phase or the RFP phase or even as a deliverable, how are we going to run this project? What is the client going to expect to see throughout the process if nothing has a UI?

Kelli: It was interesting to have to tackle that and convey that to the client. I started with, and I included this with the quote so that the client could have it as a reference, but it's technical so I'm not sure how useful it will be, but it was a great benefit to me to get my head around everything to begin with, doing the documentation for the core API services.

Jonathan: It's like the wire-frame for the API.

Kelli: It is. It's a design process for the API. Everything's written and not drawn in pretty pictures, because it's a text-based interface, so it makes sense that way.

Jonathan: You used Happy Docs to do that?

Kelli: I did.

Jonathan: We haven't talked about it in a long time. New dear listeners might not know about Happy Docs.

Kelli: Happy Docs is our little Web app for documenting REST APIs. Every time I use it, I keep thinking I want to do Happy Docs 2.0, but no free time.

Jonathan: I'm a huge fan of this. It's not fun, that's the problem. That's the next thing about Happy Docs that makes it [jokingly less not fun, or more less, less not fun, less more fun...

[laughter]

Jonathan: [jokingly] Not more painful, or something.

Kelli: [jokingly] Not more painful than [inaudible 21:04] .

Jonathan: Yeah. Not more painful. You want to start coding. You want to start making requests and getting responses. It's super fun to jump straight into code, but it's such a mistake. A little bit of discipline in a tool that makes it easy, whether it's Happy Docs or something else, is, I wouldn't say critical, but it's really going to save you a lot of time, and...

Kelli: Yeah. It will.

Jonathan: You can use it for the quote, and it makes setting up testing easier later. There's all sorts of benefits. There goes a big lizard walking across the table in front of me.

Kelli: Nice.

Jonathan: I'm in the Cayman Islands, by the way. [laughter] That's a big one. Holy crap. I thought he was about to sell me insurance.

[laughter]

Kelli: Nice.

Jonathan: I think it's a very important piece of the quote, is to take the time to flesh out at least the pillars of the API, the major objects or resources. Get a rough feel for it, and put it into something that's easily shareable or you can send as a PDF or something so the client can get an eyeball.

Kelli: Sometimes it can get pretty technical, but even if they're just looking at the list of what the API-calls will be, and not digging deeper into the technical details, it gives them an idea of the shape of the API.

Jonathan: Generally, an API is going to use their language. There will be things in there like "video" or "customer" or whatever, that's familiar enough that they can be like, "Oh, you know. You forgot..." whatever. [jokingly] "You forgot your lizard."

Kelli: [laughs] You forgot lizard, yeah.

Jonathan: It reminds me a little bit of doing a content-audit of a site or organizing and doing a sitemap, but just with text and not with wire-frames or anything like that, which some designers are fond of doing. It's familiar enough that the client can understand it and get a sense for the level of completeness, because they recognize the business objects. It also gives them a checklist for later, when they can say, "Are all these things done?"

You can be like, "Yeah. All these calls that we said we were going to do, we did." It gives them a feel for the scope in a way that is understandable to anyone.

Kelli: It's a very useful document when you're quoting, and then later when you're building. Then from there, I give an overview of the project and the goals and identify what some of the needs are and what we intend to do about it.

Then, I put this whole section where I'm explaining the big-picture benefits and uses that you'd get out of this API approach, because it is something new that a lot of clients aren't as familiar with. And talk about the things like you said before, minimizing risk and being able to create a system that's clean and free of sins of the past. Take some time to write out and explain why we're doing it this way.

Jonathan: It serves two purposes. One is to communicate back to the client that you heard what he said, "I understand your predicament, and here's what I understand the big picture is, from you, so correct me if I'm wrong."

Almost always, the client has some idea about how they think it should be solved, and it's almost always wrong or not nuanced enough. Then you have an opportunity to say, "I understand where you are. I understand where you want to go, and here are the steps that I think we should go through..."

Kelli: And here's why.

Jonathan: "And here's why, because I know that there are steps in here that you probably thought we were going to get to immediately, but I think it would be better to put them off. Here's how we will make it from point A to point B to point C to point D. This is just about point A though."

Kelli: The quote was for the initial core API, but in that we also did present, "And this is what we plan to do in the future, and this is how this first part fits into that. This is our foundation, and this is how we build upon it from here."

Jonathan: I don't know if this is universal, but it has been for me, which is the more you can break down a project into small pieces and quote them individually, the better off everybody is. I'm sure some companies want to make the quote bigger and bigger and bigger and get a two million dollar check, and then everybody put their heads down and try and get it done.

I feel like that's unrealistic unless you have a very, very waterfall process which doesn't fit with all kind of applications these are. Small pieces that are independently releasable, and you can phase over time, it's really attractive to businesses, because it mitigates risk.

Kelli: It does. It mitigates risk, and it gives them small pieces that they can see working and improving and changing and adding value at fairly regular, shorter intervals.

Jonathan: Even though patience is involved, because they want to get to the end goal, there's a lot of instant gratification, which everyone likes.

[laughter]

Kelli: Yes.

Jonathan: Cool. Then what came up next?

Kelli: Next, I wrote out some assumptions and expectations about what the API will or will not do and explained it in more plain English than the technical API documentation that we created earlier. There's things the client may assume that the API will do, right off the bat, that we are holding off until later or maybe things that the client didn't think about that the API needs to get straight from the beginning, and that's [inaudible 27:59] .

Jonathan: I don't think it was really the case in this project, but a classic example for quotes I've done in the past are like, "This quote does not include migration of data from the old database to the new database." A lot of people will be like, "Oh, well I just assumed you'd move the data from the old database, because we can't use the new one until it has data in it." It's like, "Well, yeah, but that's a job unto itself, and we didn't talk about that." That's a huge one.

Another one is who's responsible for backups once it's live. Another one is who's responsible for making it go live. I find that, if you don't say what's not included, clients will universally assume a lot of stuff that we all know, as developers, is a ton of work, and you can't just turn around and say, "That's not in the quote." I think it's really important to add a section of this stuff that's not in the quote.

Kelli: Within reason. You could probably go on with what's not in the quote forever. "I'm not going to come to your house and do dishes. I'm not going..."

[laughter]

Jonathan: [jokingly] What?

Kelli: "This quote does not include diaper changes." For this one, for instance, things like authentication, is a good example. Leaving the authentication and billing out of this version of the API. After that, it's just a matter of finishing it up from there. I made a list of deliverables. This is what you're going to get.

You're going to get this code, and I'm going to set up this environment for you and deploy the code to it, and there will be automated tests for everything and those kind of things. It included that I would set up the databases for the new data. Then it was other things like timeline, scope and crashing. Just basic stuff that you'd have in any quote.

Jonathan: Interestingly, we probably shouldn't go into this because this might be a topic for another show. If people enjoy this kind of a topic, we could do a follow up on another show about how to just pick the price. I think there are a lot of different ways to do that. There's some I prefer and, some, other people prefer. It's different levels of risk, who takes the risk? There's so many different ways to price software projects.

Kelli: It's hard to do.

Jonathan. Yeah, absolutely. If that sounds like an interesting topic, let us know. It's off topic for the podcasts, but I do feel like talking about this stuff, in the context of clients, is important, don't you?

Kelli: It is, because there are things you need to be able to do, if you're going to get to the building things phase. [laughs]

Jonathan: I think that if freelancers, or even people who are internal developers, that have to convince other stakeholders in the business that, as a developer, you might intuitively know that this new way is the way to do it. If it's going to change things, which it will, the way things are done inside of the business, as a developer, you need to help bridge that gap, mentally, to help the buyer, whoever that is, understand that this is a new way.

This is a little bit different thing. We're going to be doing a more agile process, smaller stable steps, etc, etc.

Kelli: Part of that is understanding the cost involved.

Jonathan: Yeah, no one wins. If the developer gets killed no one wins, obviously. Well the client almost never gets killed. What ends up happening with the client is they end up with software that's crap that doesn't do what they wanted.

So clients get burned, developers get killed, and in both cases, everybody loses. I feel like it's something worth talking about there because it will make the ultimate project a failure and I feel like that's the thing we want to advocate. It's getting more and more successful new style projects out in the world.

Kelli: Right, right. Nail down the whole process so you can easily roll out these apps that run everywhere.

Jonathan: Yeah, exactly. Yeah, we could have apps running all over the place.

Kelli: Exactly, yeah.

Jonathan: We get like little lizards all over the patio.

Kelli: Just a herd of apps running by.

Jonathan: Yeah, there's a bunch of turtles over here too just like walking around.

Kelli: Oh yeah? Are they great big ones?

Jonathan: No they're like little...I thought they were fake actually. [laughs] I thought they're like little bronze ones.

Kelli: Till they moved?

Jonathan: Yeah, till they came over and tried to get one of my French fries.

[laughter]

Jonathan: So that's probably a good place to leave it.

Kelli: Yeah.

Jonathan: All right, that is our show for this week. I'm Jonathan Stark.

Kelli: I'm Kelli Shaver.

Jonathan: We hope you join us again next week for the Nitch podcast. Bye.

Kelli: See you.
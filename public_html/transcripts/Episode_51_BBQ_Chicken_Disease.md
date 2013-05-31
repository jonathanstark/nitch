Jonathan: Hello and welcome to the Nitch Podcast for Friday, April 5th, 2013. I'm Jonathan Stark.

Kelli: I'm Kelli Shaver. 

Jonathan: We're here to talk about building apps that run everywhere. This week, it's all about Amazon Web Services; EC2, RDS, CloudWatch, and our new possible personal favourite Simple Notification Service. Please stay tuned, the nitch podcast is next. Still waiting to see if you'd start humming.

Kelli: No. I was waiting to see you ... That's our new intro music?

Jonathan: Yes, I'm just going to hum it because it's easier. 

Kelli: Yes. Nitch unplugged. 

Jonathan: I'm sure we're going to gain many listeners for that. In case you couldn't tell dear listener, I'm travelling.

Kelli: Yes and getting over a head cold. 

Jonathan: Yes, can you still tell?

Kelli: Yes. 

Jonathan: I'm used to it. I think we're both sick. We both had a ... Did you have a cold? What was ...

Kelli: I don't remember. 

Jonathan: I remember. You had barbecue chicken disease.

Kelli: Oh yes, that's right. I had an awful sinus headache for a couple of days and then yes I had barbecue chicken disease. 

Jonathan: Which is very slimming, I'm told.  

Kelli: Yes.

Jonathan: Oh God, finally, I've been dodging a cold from Erica in Cooper for like- I'm going to say - six weeks, they've been sick for as long as I've known them and it just finally caught up with me. But I'm getting over it now.  I am dialled in from Sony, Miami. Its night but ... I apologize for the sound. I'll see what I can do in post-production but whatever you're listening to is what you'll get.

Kelli: It's actually not bad.

Jonathan: Oh good. Alright, Shall we?

Kelli: Yes. 

Jonathan: Excellent. First, some housekeeping. 

Last week - you might have known dear listener - we did a significantly shorter episode. Due to the massive whack of outcry, we're going to continue trying to keep them to a little trimmer length, maybe more around half hour instead of a rumbling hour. 

Kelli: It'll be easier to digest. 

Jonathan: Yes easier, smaller to download, it's more focused; I think it's good all the way around. But if you despise it, let us know and we can rumble on twice as long. 

Kelli: Yes. If you're into that sort of thing, I'll be amazed and a little fluttered and happy to rumble.

Jonathan: And maybe a little scared?

Kelli: Yes, that too. 

Jonathan: That's one thing. Another piece of housekeeping is - drum roll please - next week is the interview with Ethan Marcotte, better known as "beep" on twitter and the father of Responsive Web Design, for our birthday episode, I guess. 

Kelli: Yes. 

Jonathan: Yay, 52. It's not really because we skipped a week but who's counting? 

Kelli: Yes and I was thinking we started at the end of May or whatever or end of April but whatever, close enough.

Jonathan: Yes. No one's listening anyway. Who cares?

Kelli: Yes.

Jonathan: Kidding. Anyway, that's really about it. Please tune in next week. I'm going to ... I think it's time to broadcast live.

Kelli: I think so. 

Jonathan: Because that was kind of ... It wasn't too hard and it was fun, a couple people listened. Next week we'll see if Ethan can bring in the droves. As we know he is an extremely popular guy and - I'll just quickly try and look at my calendar to see - we're planning to it beginning at 1 PM, Eastern Time. 

Kelli: On Wednesday.

Jonathan: On Wednesday, yes. That's how full it isn't? Another day?

Kelli: Yes. Yes it is. Of course, it'll still be up for downloading all that on Friday. 

Jonathan: Yes, naturally. So Wednesday, April 10th at 1PM eastern, dial in on Ustream to listen live, ask questions, interact.

Kelli: I'm sure we'll both - you and I and the Nitch twitter account - will be twitting it. 

Jonathan: It's up to you dear listener to interact. We can't make you do it.

Kelli: No.

Jonathan: As much as we'd like to. Alright that's enough husky. We're trying to keep this 'til half an hour only.

Kelli: Yes.

Jonathan: Kelly and I just had an extremely eventful - last five days I'd say? 

Kelli: Yes, Friday through Monday at least. 

Jonathan: Yes we did ... Ever see one of those crazy HD TV shows where they get a big truck and a big chainsaw and they cut a house off its foundation and they drive it two hundred miles away and put it on a new foundation? 

Kelli: We did that.

Jonathan: We did that. It was super wacky. Very fun but we had a very busy - reasonably busy not twitter busy but a reasonably busy - website that needed to be moved from an existing host that had a hard drive filling up that couldn't be expanded and transferred it over to a sort of suite of Amazon Web Services and flip the switch and put out some fires. It went pretty smoothly I thought.

Kelli: Yes, there were a couple of small issues but anytime you move something that big you pretty much got to figure there's going to be something but all in all, I thought I went really well. 

Jonathan: Yes. The thing that killed me was the DNS took forever to propagate. That was the worst part for me. 

Kelli: Yes. Some of it still wasn't changed when I got up the next morning, for me. 

Jonathan: Yes. That's a long story that we don't need to go into because it's not interesting but that was the most frustrating part, delay of things. Then there are some types of bugs you'd expect. They corrupted after and we've figured them out and we've fixed them. The upside of that and what presumably will be interesting to you dear listener is the whole bunch of stuff that we used on AWS and some things we learned and some new, sort of new cool things and so we wanted to take this episode and talk about some of that stuff. 

Kelli: Yes.

Jonathan: Where do we start? I guess it's a - obviously it's a client project we don't want to like just go into super huge details but basically the website was on a dedicated host, not unlike the go-daddy dedicated house that I have lamented many times in the podcast. It was basically an actual machine. We wanted to move it over but we needed a lot more hard drive space. The concept was to augment the ES2 instance where the marketing side and the application are going to actually run augmented with EBS volumes that would be able to handle this sort of pretty large storage needs of the application.

Kelli: Yes. We were dealing with some very, very large amounts of data in many, many directories.

Jonathan: Yes. Something like ten thousand directories for a total of a terabyte and a half of data, something like that?

Kelli: Yes.

Jonathan: Yes. There was a lot of data to move over, arcing to the rescue. That's the big piece of it.

Kelli: Yes.

Jonathan: Yes. We set up and ES2 instance with a bunch EBS volumes hanging off of it like a couple 500 gigs, maybe couple of terabytes. It just really ... I don't even know and the reason I don't even know or remember is because we talked about adding one to do some quick processing file crunching and then I'll get rid of it. It was like so ... Even the client at one point said that EWS makes them the opposite of claustrophobic. It's like you can do whatever you want.     

Kelli: Yes and you can do it in just a couple of clicks in the mouse. 

Jonathan: Yes. It's almost - your quote was - like it's scary how easy they - you know it is - make it for you to spend money. 

Kelli: Yes.

Jonathan: It was like "Oh yes. Just add a terabyte, another terabyte, they set up couple of cords." 

Kelli: I know.

Jonathan: Yes, dial it to 11. EC2 - probably people are familiar with from us talking about it before but EC2 - is Amazon's kind of like their server. It's like if you need a server product you need to compute stuff.

Kelli: Yes. It's like a BPS.

Jonathan: Yes, exactly. I want to see how many TLAs we can cram into this episode. I forgot to say EBS in the intro too. That's a bummer. 

Kelli: Yes you did.

Jonathan: EC2 is kind of like a little brain. It's where you put all your Ruby app or Brels app or your PHP app or whatever. Do you remember those, the EC2 instances come with a certain amount of persistent storage space but it's pretty low. Do you remember how much it is?

Kelli: Yes, they do. They have an 8 gigabyte EBS volume for storing just the operating system and file system. If you don't need more, you can use that to store your data on. 

Jonathan: Right.

Kelli: But if you need additional space beyond that then you start attaching EBS volumes to it. 

Jonathan: This was ... When I first heard about this I was a little bit like I was kind of scratching my head because there's an alternative to EBS that - if you ask me - it was a very Nitch case where it's like not persistent, it's like tamped directories

Kelli: Yes. You can - it's there alternative to EBS - use with some of the larger EC2 instances. There is some ... Yes, it is kind of a virtual storage. I forget exactly what they call it.

Jonathan: Yes.

Kelli: Basically the instance stops and the storage goes away. 

Jonathan: Yes, right. If you restart the instance the data's gone. That's useful in an edge case. Probably lots of applications could use that kind of thing but that is definitely not what we needed.     

Kelli: No, no it's not. It's faster. The reading and write time to it is faster than you do with an EBS volume but it's temporary. If you're doing something where you're processing a lot of files or maybe you just want to store some log files that it doesn't really matter when you lose that kind of thing. 

Jonathan: Yes but that's not what we wanted.

Kelli: No.

Jonathan: We wanted these EBS that large block storage volumes. They're kind of like - I describe them to average people - external hard drives that you just plug in to your ECT instance. 

Kelli: Yes.

Jonathan: It's just like a big hunk. It's like however much you want of storage pretty much goes up to like - I think you can have up to like - 16 terabytes or something.

Kelli: Yes, the largest to single EBS volume can be as one terabyte and you can have up to 16 of them at a time attached to your instance. 

Jonathan: Yes. That's probably plenty for anybody's needs. If you need more than that, you probably shouldn't be using EBS anyway. In fact we probably won't continue using EBS because we're going to - hopefully - migrate this over to an S3 resolution eventually anyway which is not technically a TLA but I feel like it should qualify.  No response? That was too much overreach? 

Kelli: I just thought maybe it would be better to look that one sit inside it.

Jonathan: Yes. I felt like Johnny Carlson for a second there. 

Kelli: It's a little quite.

Jonathan: Yes. I'll see if I can find a cricket in Sta. Fe.  That's EC2. That's EBS and those served us extremely well. The other thing that we used that was instrumental was RDS. Recently I got a question from one of the two listeners about someone who is getting ready to dip their toe in Amazon Web Services' pool and was kind of confronted by the question that I think we wrestled with in early phase which was ... I'm going to set up this EC2 instance. I'm going to put a bunch of code on it that used to be on a dedicated server that I had and that on that old dedicated server. I also had my sequel installed and the application talk to my sequel.  The most obvious thing to do is to spend up the EC2 instance, install the application, install my sequel and go to town just like the application currently you set up.

Kelli: Yes, which you can certainly do. 

Jonathan: You can certainly do that but I can't think of a reason why I would recommend it because the ... 

Kelli: Unless ...

Jonathan: Go ahead. 

Kelli: Sorry, unless you're working on something small and really need to cut cost.

Jonathan: Yes. That's true. Yes, I mean it would be cheaper. 

Kelli: Yes but if you're working on a very small application or your database load is pretty low and it's not going to be any kind of resource intensive, it's not going to be in resource constraints on the EC2 volume.

Jonathan: Yes like it's a prototype or you're just doing development and there's no actually users on it or you know - I guess you could save yourself up with a really big honk in an EC2 instance but - those start to get really expensive.

Kelli: Yes I feel like at that point it's more expensive or more cost-effective to buy a smaller EC2 instance and an RDS instance. 

Jonathan: Right and that was the kind of a conversations we have with our dear listener which was it was like you want to ... My recommendation was to break things up even though that sound more work and it sounds maybe a little scarier because there's already this fear of switching off of what is a physical machine next to the guy's desk, well it's in Iraq and next to the guy's desk and I remember this into the could. That's scary already. It's like "Okay. Now I'm going to split the pieces that were on this machine into different logical areas or different" ... I almost wanted to say different machines which it is but it's a little bit more abstract than that.        

Kelli: Yes.

Jonathan: The benefits of doing it are ginormous. 

Kelli: Yes. You instantly get so much more flexibility if you're doing something on your EC2 instance and you end up screwing up your entire instance or its not working or suddenly things get too big and you need to add more instances for load balancing. If your database is separate, you can just do all that stuff. You can create; delete EC2 instances, to your heart's content without messing up your data.

Jonathan: Yes. Another huge benefit is that you can manage your processors separately. If your application is like a web app or website, you're going to have probably a pretty steady load. You're going to have one kind of load and then your database though can get a very different kind of load than what's handling the web traffic because particular kinds of queries - like one request - could be brutal on the database but not brutal on the application server.  To have an application server that has enough memory to deal with database spikes, it  doesn't makes sense really. I don't know. I would have thought that it did make sense in the past but now I'm sort of trunk the kool aid. I'm like "That's crazy". Two very discrete kinds of computing. 

Kelli: Yes

Jonathan: Handling web request is one thing and dealing with database request is a very different thing. Having an RDS instance is set up to handle that. This actually happened. We had three databases hanging off various sites involved and one of them was getting hammered for some reason. It was just like the CPU was just pegged at a hundred. We just said "Okay." I've created that from a micro to a medium, we skipped over small just to be overkillish. It just like automatic ... it didn't even stop the server. It upgrades and now all of a sudden you just look at the graph and we were laughing. The graph falls off from three hours at a hundred percent CPU utilization down to like 15. It was like hovering around 10. 

Kelli: Yes.

Jonathan: Yes. You just write a check, basically. Its like went from something like ... It was something like 20 dollars a month to a hundred dollars a month. It was something like that.

Kelli: 60-ish maybe? I don't know.

Jonathan: But it was like ... When you're talking about an application with tons of ... That has that much traffic and it's doing - hopefully you're making some money. 

Kelli: Yes.

Jonathan:  It makes like a number a hundred dollars a month could be a trivial amount to pay to a powerful database server. It was super rad. Another thing you get for free, completely for free with RDS is it just backs itself up automatically by default. You don't even have to tell it. If you have a database on RDS, it's getting backed up.  

Kelli: Yes, which is super nice. You could store those backups to ... What is it up until two weeks or one week? 

Jonathan: I don't know. They go back pretty ... There's too many of them already I could see. They go back at least a week.

Kelli: Yes. I think ... I was looking at the settings on the particular one you're talking about. I think it said to go back a week. 

Jonathan: Yes. Again, how much do you want to pay for? You got to go on forever whatever is useful. If you need to restore for a backup, you just click ...

Kelli: Right-click and select restore.

Jonathan: Yes and it says "Which backup would you want to restore from?" and you just pick one. It's ridiculous. I used to be a DBA for crying out loud. When I think back to the pain and suffering of setting up, it didn't seem that bad at the time but there are a lot of steps setting up cronjobs and like ... My sequel dumps scripts and then our synch moved those to another volume. It just like so much work and then making sure it's working and monitoring all those processes, it's a lot. It's a big barrier entry. 

Kelli: Your cronjob dies for some reason and you don't realize it and then two weeks go by and you need a database back up and there's not one. 

Jonathan: Yes, and then guess what. 

Kelli: Yes?

Jonathan: You're making sure your resume's in order. 

Kelli: Yes.

Jonathan: You know what would be great? If there's some way to beget notified when something like that happened.

Kelli: Wouldn't that be good?

Jonathan: Yes. The big thing I'm personally excited about is - Kelli was excited about it but I texted her so many times that she got sick of it ...

Kelli: I just blocked you ...

Jonathan: AWS has .... One of the services under Amazon Web Services is called SNS. It stands for Simple Notification Service. I've heard about it. I heard about it when it was announced, it's been around for a while. It's still in beta but it's been around for at least a year. I was kind of like ... It was kind of like a head scratcher when it was announced. Then yesterday or - recently - the other day ... 

Kelli: I think it was yesterday.

Jonathan: Was it? We set up ... I set up an alarm - on the RDS instance after I upgraded the CPU - I set up an alarm using the - amazon has this could watch thing that allows you to monitor things and set thresholds and if the CPU goes over 90 percent for five minutes then do what? Then raise an error, raise an issue. 

Kelli: Scream for help.

Jonathan: Yes. Send up a flare, basically. It's like "Well okay." I sort of fell into SNS through the back door. CloudWatch is like "Oh do you want to set and alarm for this?" and I'm like "Yes, create alert" it makes it really easy just like if this goes over 90 percent for over five minutes then it sends an alert to Amazon SNS. What that is sort of discrete, published subscribes mechanism that's so agnostic that you almost cannot figure out why it's good or what it's for because it's so ...

Kelli: but then when it hits you ... 

Jonathan: When it hits you, you cannot stop playing with it. It's like aggressively abstract, I would call it. 

Kelli: Yes, I'd say so.

Jonathan: It's like a ... Basically what it does is it allows you to create area of interest which they call a topic. You can publish messages to the topic and people can subscribe to the topic to hear about new messages and they can decide how they want to be notified when new messages show up. It's weird because it kind of sounds like RSS, it kind of sounds like a mailing list, it kind of sounds like broadcast SMS, it kind of sounds like a lot of different things but really it's the one piece of all of those things that's actually the powerful thing. Did that come out right? Did that make sense? 

Kelli: Yes that makes sense.

Jonathan: Okay, cool. It's like all ...

Kelli: At least it does to me.

Jonathan: All of those things that I have just mentioned share one figure which is actually the only important piece of any of them and that's what SNS is. It's like they took the core feature out of RSS and mailing lists and all those other junk and they made it a discrete thing. 

Kelli: Yes, it's just PubSub for anything.

Jonathan: Yes, anything that can connect to the internet. Increasingly is toaster and washing machines and ...

Kelli: Yes, your app can be totally toaster.

Jonathan:   My scale, yes. Totally toaster dude.  It probably doesn't sound like anything we're trying to describe it but you basically say, you just create this random hook in the cloud of - you could say - Boston Red Sox and invite people to subscribe to it or you could ... You still have to get the word out about this amazon end-point and say "Hey there's this topic that people can subscribe to or publish to and broadcast messages with totally other people." The people who subscribe to it can ... 

Here's why it's different from the mailing list. The mailing list is strictly email. With SNS it takes it a level up of abstraction and says "You can get notifications however you want." You can get an SMS, you get and email, you can get a formatted email with a JSon body, you can ...

Kelli: You can http post data.

Jonathan: Or over https if you're worried about security. Inside of the council when you're setting up the topic, you can say who has access to publish, who has access to subscribe. The different ways that all these are described. It's like all of the pain-in-the-ass stuff that you wouldn't want to do, if you're setting out any kind of PubSub model. 

Kelli: Yes. You can post to it from an API. There's an API for publishing to it.

Jonathan: Yes.

Kelli: Or you can publish to it via whatever any other subscription method, as many methods for posting as there are for subscribing. 

Jonathan: Yes.

Kelli: It handles all of the subscription confirmation and the subscription management.   

Jonathan: I invited Kelly to subscribe via SMS. I created a topic and I said "Invite Kelli's phone number" instantly like once second later, what happened?

Kelli: I got an SMS saying that I'd been invited to subscribe and reply with yes and it subscribes me to that topic.

Jonathan: I had literally clicked like two buttons to make that happen and typed in the name, typed in your phone number. It's like so radical. Like you said it's got an API, there's a command line interface that you could download for it. You could easily build the API and whatever application you're working on, you could use the https too. 

Kelli: Notify other APIs. 

Jonathan: Yes, notify other APIs like Trulia or Eft or I assume - I haven't checked into this - but I assume you could also send to apple's push notifications service. If you had a need of IOS app or you could do as scandic android, if you had native mobile apps you could use SNS to push to those - basically to ping to those push servers to send out notifications for people who wanted to subscribe via native applications. It's just crazy. 

Kelli: Yes. One of the things I really liked about it was there you were sending messages. Whenever you're sending a message you can send different formatted versions of the message based on whatever subscription method it's broadcasting to.

Jonathan: Yes. You can send so protocol-specific bodies, I think is what it's called. You have default one, hhtp1, email1. So you can have a long email message that gets broadcast to the email subscribers and a short one is simply as message subscribers.

Kelli: Yes. Maybe you post a message over a CTPS to some web service, API, and the web service API publishes the page and then at the same time you send and SMS broadcast to people that are subscribed that maybe links to that page. 

Jonathan: Yes. It's like ... I'm surprised more people don't talk about it. It's like super awesome for certainly for any kind of website monitoring, any kind of alerts, any kind of time-sensitive information. It's just like ... All the other things that I've seen or like a very small sliver of this larger abstraction. 

Kelli: Yes.

Jonathan: Everything seems hacky in comparison. 

Kelli: And the free cure is what, a hundred messages a day?

Jonathan: That ... No. That's just as SMS.

Kelli: Oh that's just SMS. 

Jonathan: Yes. That was the other thing that I wanted to bring up, the drawbacks of it. Even just looking at it 24 hours there are a couple drawbacks. First of all, it's not free but it's very cheap. It's in beta which means that not everything is supported everywhere so you have to set up ... If you want to send SMS messages or you want to allow SMS subscriptions, you have to set up the SNS service in the east region for the US. That doesn't really matter because you can post to it from anywhere. I don't always see ... I guess it's a little bit of a ... I don't know. I don't see why that matters. In other words, you can post to it from anywhere so who cares where it is other than the normal concern where "What if anything goes down."

Kelli: Yes and that's historically the one that tends to be a little bit problematic when there's a problem. 

Jonathan: Yes so there's that. The other thing is that I noticed that you can't send SMS to Google Voice Numbers but I doubt that that's a restriction of Amazon. I think that's probably a Google Voice Restriction, but who knows. Just noticed that you couldn't do it. What else? There are some other bummers about it. 

Kelli: I don't know. Those are the only ones you told me about.

Jonathan: Yes. Under the ... Currently you're limited to a hundred topics per account but that seems pretty exorbitant to me.

Kelli: Yes.

Jonathan: I don't know. I mean it's pretty ... It's one of those things that you like look at it and you're like "Damn." Oh right that's another big feature that they didn't mention that it just does right out of the gape easily is that it manages failures. If you have ... If you send an email and it bounces, it knows that and you can set the retries to retry immediate or wait some period of time. Then retry and then you could say you want the retries to degrade overtime so that they eventually peer it out to nothing or they retry every five minutes ten times or an there's all this stuff that would be a gigantic pain- in - the-butt to program.  In top of all that you can monitor it and then have it tell you how it's doing. 

Kelli: But if all goes down it can't do that, can it?

Jonathan: Yes, correct but you could set up another one in the Oregon region and send you email not SMS. It's totally ... I think you said yes yesterday and I was like "Wow. What a great way to overwhelm yourself with data." 

Kelli: Yes.

Jonathan: From practical ... On the one hand of my mind is kind of exploding like "Ugh. I just got this nest thermostat, you know. Can I have my light flash when the heat comes on? Set it by sending a http request if then talks to my Philips hue light bulbs and it's like ..." but that's just stupid. That's just medias being stupid.  I'll tell you, we got an email yesterday that the new RDS instance was like over 90 percent CPU usage. You just instantly get the notification, you can instantly check and see like "Oh man what's going on?" and turn out it was a database back up. It's incredibly, incredibly useful and practical certainly for site monitoring if nothing else.

Kelli: Incredibly easy. 

Jonathan: Dangerously easy, as with all of their services. 

Kelli: Speaking of AWS, I added their Two-Factorials authentication this week. 

Jonathan: Oh cool. That's right. I forgot about that. 

Kelli: It works well. What they do, they send you - you have to buy it but it's like 10 bucks - basically just this USB drive, thundrive and its got little LCD display on it. You push a button and it gives you nine digit number code and you enter it to your log in password and you enter this code to log in to your account. It worked really well but I was hoping it would extend across all of the AWS services that I have access to. For instance I have access to certain things to your AWS account so I was hoping that when I went to log in those it would also ask me to provide the extra step there but it didn't. It just applies to my main AWS account. 

Jonathan: Yes that is not my favourite, the fact that Amazon doesn't have a single view of identity. I'm not sure if it's a bug or a feature to tell you the truth.

Kelli: I guess you could argue that it's more secure.

Jonathan: Yes. It's not my favourite though because you have to let them constantly logging out and logging back in to their client accounts and stuff. That is pretty paranoid that you have ...

Kelli: I was hoping that it would extend to those other accounts too because they're accounts for clients. 

Jonathan: Yes.

Kelli: It would be nice to have that extra layer of protection there.

Jonathan: Now I wonder if they turned on Two-Factor Authentication if you'd be able to use that same sticker.

Kelli: Yes that's it. That's a good question.

Jonathan: Probably not. I don't know though. I don't think ... 

Kelli: You may have to get a little fling and we can try it out and see. 

Jonathan: That's a good idea. We're already stretching the limits of our new shorter format so let's time out on this one but yes, Amazon Web Services, people. Check it out. It is the future.

Kelli: I got an email today again saying they lowered their prices on these three stuff. 

Jonathan: That's the other thing. It keeps getting cheaper and faster. 

Kelli: Yes. 

Jonathan: It's good stuff.

Kelli: Then is you ... I'm about to buy some reserved instances because they're cheap.

Jonathan: Yes, there's a longer curve no doubt about it but it is absolutely worth every minute. So that's our show for this week. I'm Jonathan Stark.

Kelli: I'm Kelli Shaver.

Jonathan: And we hope you'll join us again next week for our birthday episode with Ethan Marcotte.

Kelli: Bye.

Jonathan: Bye.  

Episode 53: Fluffdates
====
April 19, 2013

Running time: 33:30

Jonathan and Kelli sit back and say "I told you so" for 30 minutes as they talk about Glassware, the Mirror API, and improved methods for the distribution of cat photos with Google Glass.

<audio preload="auto" controls>
	<source src="https://s3.amazonaws.com/nitch/Episode_53_Fluffdates.mp3" type="audio/mpeg" />
	<source src="https://s3.amazonaws.com/nitch/Episode_53_Fluffdates.ogg" type="audio/ogg" />
</audio>

[Download (25.5 MB)](https://s3.amazonaws.com/nitch/Episode_53_Fluffdates.mp3 "Episode 53: Fluffdates")

## Related Links

* [Google Glass](http://www.google.com/glass/start/ "Google Glass - Home")
* [Mirror API](https://developers.google.com/glass/ "Google Glass &mdash; Google Developers")
* [Max Firtman on Google Glass](http://www.mobilexweb.com/blog/google-glass-web-mirror-api-html5 "Developing for Google Glass: Mirror API, HTML5 and how to change your mind | Breaking the Mobile Web")

## Titles We Considered

* Edison Schedule
* Kinda Brilliant, Kinda Whacky
* Epic Internet Toaster
* Fluffdates
* Maxcats
* Bi-Pub/Sub
* Less Frictionless
* Nose Shortening
* Retina Retina

## Transcript

Jonathan Stark: Hello and welcome to the Nitch podcast for Friday, April 19th 2013. I'm Jonathan Stark.

Kelli Shaver: I'm Kelli Shaver.

Jonathan: We're here to talk about building apps that run everywhere. This week we sit back and say, "I told you so" for 30 minutes, as we talk about glassware, the mirror API, and improved methods for the distribution of cat photos with, wait for it, Google Glass.

Kelli: Hurray!

Jonathan: Yay! Hurray! Please stay tuned, the Nitch podcast is next. Huh...Yes, I hope my sound's not too bad, I'm recording in an actual office today.

Kelli: Yeah, in a real office.

Jonathan: Yeah. It's like a midrange hotel room type setup.

Kelli: Nice, without the bed I'm assuming.

Jonathan: [laughs] I wish.

Kelli: [laughs]

Jonathan: If it did, I'd probably be napping.

Kelli: No, you don't want a bed in your office, I speak from experience.

Jonathan: [laughs]

Kelli: It's not a good idea, cuts into productivity.

Jonathan: That will happen, yeah.

Kelli: Yeah.

Jonathan: We're both on the Thomas Edison schedule.

Kelli: Yeah.

Jonathan: I can't sleep for more than like...I can either sleep for three hours or 11.

Kelli: [laughs] It's the same here, yeah.

Jonathan: I never get sleep for 11, so...

Kelli: Yeah. I either fall asleep at 3:00 AM or 7:00 AM; those are the only 2 options.

Jonathan: Yup. Yeah, I'm almost exactly the same, it's bizarre.

Kelli: We've synchronized.

Jonathan: [laughs] Yeah, I'm on Kentucky time.

Kelli: [laughs] I was hoping I was on Rhode Island time.

Jonathan: [laughs] Anyway, very, very exciting week this week.

Kelli: Yes.

Jonathan: We are going to gloat.

Kelli: Yes, we are. [laughs]

Jonathan: It was Monday, Google published a documentation for Google Glass Developers. The current Google Glass Developers are called, "Explorers." I guess, "Glass explorers" are entitled to receive a pair of demo Google Glass glasses.

Kelli: We all hate them.

Jonathan: I'm so jealous.

Kelli: Yes. I watched an un-boxing video yesterday, it was maddening.

Jonathan: I'm in pain, I'm in physical pain.

Kelli: I am too, it just hurts.

Jonathan: Anyway, so developers are starting to get Google Glass in their hands, the actual device. Of course, Google needed to publish some documentation and guidelines for working with it. I think, we're both in the same camp, which is that I'm kind of excited about how different it is than developing for anything else that exists.

Kelli: Yeah, me too. It's completely different than making a web page. It's all over HTTP.

Jonathan: It's wacky.

Kelli: It is.

Jonathan: It's brilliant and wacky. It favors people like us, basically, people who think that content is layout agnostic or presentation agnostic content is critical, API's are hugely useful and lightweight delivery of content and services is critical.

All of the things that sort of came out of the early iPhone days when bandwidth was crappy and things were very restrained. A lot of stuff that came out of that would serve you well if you really adopted it properly.

When the iPhone came out, I'm going in the weeds here, but when the iPhone first came out, people got really jazzed about mobile web development for the first time.

Kelli: Yeah and then, they saw how slow it was.

Jonathan: Yeah, so it was kind of like going back to the dial up days of web development.

People got very smart about it or they at least realized that they needed to get smart about things like image compression, being stingy with their HTTP requests, not including a million CSS and JavaScript files, and making sure that the stuff that they were including was actually being used, all the stuff that we got lazy about in the broadband desktop days came back to bite us.

There were two big things that people could focus on as the realization sunk in. One was getting your content..."Oh no! This is going to start happening over and over again." People would try and get their content squared away, and try and make their delivery of content very lean and mean. There was a group of people who got really excited about optimizing their mobile web experience specifically for iPhone, using things like WebKit only extensions and very specific touch interactions and lots of Apple's specific extensions, home screen apps.

I was definitely in both of those camps. A lot of people were in both of those camps. Now as the time's going on...although very iPhone specific stuff, and the WebKit specific stuff had a limited usefulness when Android started to get really popular, because a lot of that stuff didn't work. Or it didn't even make sense on Android.

Then we started talking about smartwatches, and the epic Internet toaster, and then finally Google Glass. When Glass was announced, it was like, "there's no way that you can develop for Glass the same way as you can develop for any kind of mobile smartphones, and man, were we right.

Kelli: Right. You can't have this complex html JavaScript CSS web page projected onto the back of your eyeball from this little tiny prism.

Jonathan: Yes. Do you even have your head around the way it works? The model?

Kelli: Not entirely. I haven't had as much time to read up on it, as I think you have.

Jonathan: Yes. I think I have my head around it. Let's just run through it, and you can correct me where I'm wrong. First of all, let's start with the interface, because a lot of people can sort of get their heads around the interface really easily. In terms of sending information to the little screen, if you want to call it that, you can send basically only a very few kinds of content. First, is text only, which is almost like a push notification. But it's a little more interesting than that.

Then you can send html formatted content, but not with anything interactively. You can't have forms and stuff like that.

Kelli: Right. It's just styling. You're styling your HTML. You're styling your content.

Jonathan: Yes. Basically rich text. Not quite, but it's like Markdown, actually.

Kelli: Yes, that would be nice. You just push Markdown to it.

Jonathan: Yes, in fact, the html that gets created with Markdown is pretty much exactly what you can send to the screen, which is like...you can't just...it's formatted content.

They have all these templates you can use for specific kinds of things like an image with an overlay, or a video with an overlay, text overlay. You can do custom html for things like if you really want to format your content for flight information, or movie listings or lists. A very basic simple kind of html formatted data. There's no scrolling. There's no JavaScript. You can add some CSS, but it seems to be frowned upon, and very limited.

The interface is very much about sending teeny bits of information to the screen at the appropriate time, or in the appropriate context.

Kelli: What are they calling them? Cards, or...

Jonathan: Yes, cards. Which is the same terminology they use for Google Now, which I think we've said in the past. It seemed like a beta test for the kind of interface that Glass would have. Looks like we were right.

Kelli: Looks like it.

Jonathan: Yes, so as a developer, you don't build the website someone visits. You don't even build a teeny little...

Its dimensions are 640 x 360 or something like that. It's basically equivalent to a 1080p 27 inch screen from eight feet away, or something like that. It's a very small amount of real estate and you don't make web pages that someone navigates to and you redirect them to Glass.mywebsite.com.

Kelli: Yes, you're publishing the information to their timeline, aren't you?

Jonathan: Yes. There's no home screen, there's no notion of browsing. In fact it's not a web device, it's an Internet device. There's this timeline which is very much mentally like a Facebook newsfeed or a Twitter timeline, where you can dip into a stream of information that is sorted in order of creation, or whatever, or publication.

That's basically it. There's a very limited interaction model you can have with one of these cards. You can imagine someone who has a WordPress site. It's like a classic '90s era spaghetti code of database results merged with html templates, you're screwed. You're going to have to build something completely from scratch that creates the database directly to return information that you would use for a Glass interface.

Just in terms of a front-end thing, there's no home screen. There's no apps from it. It's this app notion that we'll talk about in a second. From a front-end standpoint, you basically can send text, simple html, and images and video to...You don't send it directly to a user, and a user doesn't request it directly. It all integrates around this what's called a mirror API, which is a Google service that Glass users authenticate with. Let's say I'm a glass user and you're a developer that has this cat facts service, or Fluffpo.

Kelli: Yes, we'll use Fluffpo.

Jonathan: Let's use Fluffpo. You have Fluffpo and I have a pair of Google Glasses.

Kelli: You want fluffy animals.

Jonathan: I want fluff updates. I want Fluffdates, and I want them hourly. At my desktop or some other web browsing device, I would go to Fluffpo and I would authorize Fluffpo to publish my timeline. That's a radically different model.

Kelli: That is. That's completely different. Basically you're authorizing it to send you push notifications to your glasses. Kind of pub-sub model.

Jonathan: Yes, and it does remind me a lot of the Apple push notification servers, in that they're in the middle. You have to go through Apple, and push notifications, but cards are an extremely rich push notification, first of all. Second of all, the user's not necessarily going to see them. It's not like this intrusive thing.

In fact, in the documentation it says, "Most of the time, users will not see your content", because it's this stream where you're going to dip into it and out of it, and it's up to you as the developer to make sure that you're content is highly relevant. Whether that means they are currently near something that is of interest, or something just happened. The notion of going back through your RSS feeds and reading an article from two weeks ago is not going to happen.

Kelli: As a Google Glass wearer, you can't jump around within your timeline?

Jonathan: You can, but you can't rejigger it or filter it, as far as I see. You can go forwards and backwards in the timeline by swiping forward or backwards on the right earpiece. It's kind of like going forwards and backwards in your Twitter timeline. You can only go so far back before you get sick of it.

Kelli: Yes, and who's going to want to?

Jonathan: Yes, who cares? It's like it doesn't matter anymore. They are like, if somebody wants to do that, this is not the right device. All the way around, very much that is the approach they enforce. The best practices and developer guidelines, and all the UX guidelines is like, this is all about now.

Kelli: Make it count. Make it relevant.

Jonathan: As a user, I go to Fluffpo. I say, "You know what? I want hourly fluffdates. Fluff updates."

Kelli: I'm going to have to tell Josh about the fluffdates. That's good.

Jonathan: Flo-updates. Its clear in the documentation that these aren't like iOS push notifications, or like notifications in Android, but there must be some kind of...

Is the screen always on or not always on, or am I just ignoring it? Or, what the deal is there. Fluffpo has my tokens, and has my preferences, my desires stored in the Fluffpo database, so you have that information from me, when I did the dance.

Kelli: Right. So when you only want cats, it's cats.

Jonathan: And maybe I want a max. Max cats. That gets sent to me. Then let's say that you send me the cutest cat picture of all time, and I want to match that up with a picture that I'm about to take. Or, I might want to send that to someone else. That's easier, let's say I want to send it to someone else. When you publish that to my timeline, it goes through Google's Mirror API servers, so Google is very solidly in the center of all this. There's no way to send something to a Glass user without going through Google.

Kelli: Not surprising, but also understandable at the current time.

Jonathan: A little alarming, but certainly understandable at the current time. You publish that to me and you can...What you published is a very simple json post. You do a REST API post of json data to the Google servers, and it's got all sorts of information in there that indicates who it's supposed to go to. Google finds me and publishes it to my timeline. I go, "I want to share this."

When you send that information in the json data, you can include many options so that when I tap on the handlebar there on the right-hand side, it will show me what my options are. Let's just say that "share", which is one of the default options...Let's just say share is the option.

Share pops up and there's this default interface where I can share to any of the contacts on the device and send it back to the Google notification servers. Now Fluffpo not only is publishing, and I've subscribed to it as the user, but you've also subscribed to updates from me. So it pops up in both directions.

You can listen for events, or you get a callback. There's a callback URL you can provide if any of the menu items are selected by anybody. You get this callback URL pinged that says, "Hey, I want to share this with this payload of information," so these contacts that want to have that particular fluffy cache shared with them. It's like a radically different model. I can't think of anything like this.

Kelli: Yeah, I was thinking. No. I can't either. It's very different, and it's very cool.

Jonathan: It's like bidirectional PubSub. It's like pushing notifications if there are no menu options, rich push notifications. But then the fact that they're interactive and you can subscribe to events triggered by the user. It's super radical. It all makes sense. It's all using technology that's become de facto standards, like Ras, json, and PubSub. All this stuff is pretty normal.

Kelli: I'm really interested in getting this and mashing it up with Amazon SNS that we were talking about last week or the week before.

Jonathan: [laughs] Right. You have a million questions. When FluffPo gets the payload of who I want to share it with, what is in there? Is it email addresses? Is it other Google Glass accounts? Or is it these anonymous tokens that FluffPo then would send back to the Mirror API and can only share with other Glass users?

Kelli: [laughs] I'd love to know.

Jonathan: It's radical.

Kelli: When you select to share something, you're not then pushing it on from your Glass device to someone else's? You're sending a note back to the original publisher to then push it to these Glass users?

Jonathan: Share is a default one. Share might be handled differently, so I can't answer that exactly. Share might be handled differently. Who knows? Google might have that going through Google+. +1 is another default,. It's probably something they're in. Share was a bad example, but you can send custom menu options in. Let's say you send in a custom menu option, like...

Kelli: Say you're doing fundraising and you want someone to...

I don't know. Well, no, because you couldn't do any donation or anything like that through it.

Jonathan: Let's say you could. That's a good example. You add a menu option for donate. Donate comes in, and I see whatever the default options are, like share, and record audio, and all this other stuff. Then there's donate. All right donate, so I tap on that. That definitely Google's not going to handle. They're just going to pass the callback URL and you'll just handle it.

Kelli: Then it will suck money out of your Google Wallet.

Jonathan: [laughs] That is interesting. I haven't seen anything about payments or anything like that. Assuming that it was just something like you had your own custom...

Kelli: Thing.

Jonathan: Likes, or +1s, or VOD op. Or like stack overflow, you can float things up, and you would have to have it all...

Kelli: Like posts on Tumblr or something.

Jonathan: Exactly. Let's say it was a Tumblr. It is a Tumblr. Let's say you wanted to favorite it. That's a great example. You send it to me. I hit favorite. Sends that back to you. You know who I am. You've got the OAuth permission to do whatever you want, and you can favorite that through the Glass. It reminds me of when I started thinking about offline Web apps.

I couldn't even get my head around it. I was like, "Wait a minute. I'll just...no, wait. I'm offline." How can I be on the web page, but I'm offline? I couldn't get a grip on it. It's kind of like this, where it's all the same stuff, but it's reorganized in a way that is very, very nonstandard.

Kelli: I have a question about that. Is there any kind of 4G built into this, or do you need a cell phone to go through, or is it WiFi only? How does that work?

Jonathan: There are a lot of features that depend on you having an Android phone in your pocket. All 3G connectivity, or cellular connectivity goes through your phone. In order to have...

It was the location information, all is handled on your phone, not on the glasses. The glasses have accelerometer, but they don't have GPS. You connect into your phone. I want to say it was over Bluetooth.

Kelli: That would make sense.

Jonathan: Yeah, I'm pretty sure it is Bluetooth. Basically you can't do anything if you're offline. There's no notion of offline. Max did an amazing summary blog post about it that we'll link to in the show notes. There's no concept of offline. There's no concept of apps. There's no app. It's these online services that interact through the Mirror API. For example, geolocation is provided only if Glass is paired with an Android 4.x phone. Since he chose the word paired there, I assume it isn't with Bluetooth.

Kelli: Looks like I'm going to have to...I don't know. I switched to an iPhone a while ago. I'm going to have to do something.

Jonathan: There's a bunch of really interesting points that are made. I did a little Tweet storm of them last night. It's new, assuming it catches on, which I think it will. Assuming it catches on, it's a whole new way to interact with connected content services that is not Web based, but all the Web developers...

It's going to be on them to support it.

Kelli: Right, because it's not the same as going to a web page and clicking around a bunch of links. If you build web pages, you're going to have to support it because your clients are going to want deliver that same content over Glass.

Jonathan: Right. The content that's on your website is going to need to be on Glass. You're not going to call your ad agency. The only person to call is a server side web developer, basically. It's hilarious that there's no native development. I love that. There's no such thing. It's just a dumb terminal, a very, very fancy dumb terminal.

Kelli: Yeah, it is.

Jonathan: The other thing that came out in the discussions around this was smart watches, which also seem like the new wearable.

Kelli: Yeah, that seems like it's going to be...

I don't know. It's debatable. Some of them are dumb terminals for phones. They're pair with phones. I could see it working very similarly, or I could see it being a little different.

Jonathan: The thing about the smart watches that is not compelling for me is that all the ones that I've seen are either basically a notification center for your phone, or they're a WiFi device that is not that interesting. They're touch screen and the interaction model is just too silly.

Kelli: Or too small.

Jonathan: Yeah, it's just unreasonably small. I don't get the watches. Even though the watches are a lot less geeky and probably more likely to catch on. The really compelling feature about Google Glass is not anything we've even talked about yet.

Kelli: No, I'm curious to see if you think it's the same thing I think it is.

Jonathan: To me the compelling feature is the camera and being able to take first person video and stills. You can capture audio, but it's only for...

I don't think you get an I think it's only for...

I don't think you get an mp3. It's just sound process for text recognition. You can capture photos and videos. To me, that's the reason why people would put it on in the first place and use it.

Kelli: To me, the appeal of it is like a phone, you have to pull it out of your pocket and look at it. A watch, you have to move your arm and look at it. Google Glass, it's just going to be right there. You can ignore it or not, or you can look at it or not. There's no special work you have to do to have access to these updates and to see what's going on. It's just there in the corner of your vision.

Jonathan: It's even more frictionless than the watch, which is a little bit more frictionless than the phone. There's definitely that. The thing about the watch that I don't dig is that it doesn't...it's a little bit less friction. You don't have to pull the phone out of your pocket, you just turn your arm and look at it. But it still requires your eyes. It basically is replicating functionality that's already on your phone.

Kelli: Yeah, and it's still going to be hard to see in the sunlight.

Jonathan: You've got to worry about the battery. There's too many...

Never mind the fact that it's going to be 200 bucks. I feel like the pros and cons negate each other. It doesn't offer anything that you can't do with your phone.

Kelli: Right, it's nothing new. It's just a different format.

Jonathan: The possible exception to that would be if you could program it to have very complex vibration notifications. I would totally dig it. I would buy one in a second if I could program different vibrations, almost like ringtones but silent, for different kinds of things so that without even looking I would know that some event of interest took place.

Kelli: Yeah, is this just a spam email from someone you don't know, or is it a message from Erica saying you need to bring home milk.

Jonathan: Exactly. When you consider Glass, which is going to be a lot more than $200 I'm sure, the thing about it that I think is the most compelling is certainly that it's even less frictionless than the watch. I feel like that's kind of cancelled out by how nerdy it is. I'm totally nerdy enough to wear it, but I know a lot of people aren't going to be.

Kelli: Yeah, I totally would. I've worn eyeglasses that are a lot nerdier than Google Glass.

Jonathan: I feel like that frictionlessness is going to be mitigated by...like, "Oh, this is so awesome. I don't have to pull out my phone. I don't even have to do anything. I just know things." I feel like that's a big plus, but a big minus is that everyone knows you're wearing them.

Kelli: I feel like the nerdiness factor of it...I don't know. I feel like it could go either way. I feel like it could be, "Oh, this is super nerdy. I'm not going to wear it." Or it could become a fashion trend.

Jonathan: It will be interesting to see. I really don't know. I imagine we?" Eventually, assuming they're popular, eventually that will go away. Or they'll get smaller and people won't even notice them.

Kelli: [laughs]

Jonathan: But the thing that concerns me about them, is that people will know that they could potentially be getting videotaped. Everyone's getting taped always, anyway. But I feel like it will introduce, at least at first, it's going to introduce this uncomfortableness into every face to face interaction.

Kelli: Yeah.

Jonathan: Unless both people are wearing them.

Kelli: [laughs]

Jonathan: In which case, fair is fair. [laughs]

Kelli: Yeah. I wonder if there was any indicator on the front of the glass that shows when it's recording, like an LED that lights up, or anything?

Jonathan: I assume there is. I would think there would be.

Kelli: People would know they're being recorded.

Jonathan: Yeah. But I mean, you could disable that easily.

Kelli: Hack it and disable it?

Jonathan: You could just put a little piece of tape over it. I don't know, it totally remains to be seen. As soon as I can get my hands on it, I'm going to not take them off. [laughs]

Kelli: Yeah.

Jonathan: We'll both.

Kelli: I'm just worried that with the projector there on the right eye which is good in my case, but I'm just worried that without a left one, it's going to take too much of my shoulder vision.

Jonathan: Yeah, I could see that. I'm worried that I'm too near sighted to use it, although it says that it projects as if it's in the distance.

Kelli: Oh, I can see that could be a problem for me. [laughs]

Jonathan: Yeah. I don't know if it's adjustable or what.

Kelli: I don't know, I'm extremely near sighted.

Jonathan: I used to be, but they shot lasers in my eyes.

Kelli: Oh, they shot lasers in my eyes too, but for different reasons.

Jonathan: Yeah. [laughs]

Kelli: Although I am less nearsighted now than I was.

Jonathan: That's good. It would be hard to be. [laughs]

Kelli: [laughs] Hard to be more.

Jonathan: Not to have gone in that direction.

Kelli: It'd be hard to be more. I couldn't get much more nearsighted than I was.

Jonathan: Yeah, you'd have to have your nose shortened.

Kelli: Yeah. [laughs]

Jonathan: So...

Kelli: What we're doing...

Jonathan: Yeah, so big long ramble about Google Glass, but we told you so.

Kelli: APIs, we told you.

Jonathan: Get your contents right away. You poor web developers are going to have to know basically API developers to make it work, and that's a good thing.

Kelli: Once you adjust, you're going to be all, "This is awesome"!

Jonathan: Yeah, it's so much better all the way around.

Kelli: It is.

Jonathan: Makes your web presence a lot more flexible. If you do native apps on multiple phones, it's going to get a lot more flexible. It's just good all the way around, so bite the bullet!

Kelli: Do it.

Jonathan: Do it. Clean up your database, create an API; get on it. [laughs] Jeez, that went by fast, 38 minutes already.

Kelli: It did.

Jonathan: Yeah. We should probably wrap.

Kelli: It was a fun 38 minutes though.

Jonathan: Yeah, I can't wait.

Kelli: I can't either, I'm very jealous.

Jonathan: [laughs]

Kelli: Everyone has got one.

Jonathan: Yeah.

Kelli: It just means the one we get will be better.

Jonathan: That's true, V2.

Kelli: Yup.

Jonathan: It will be the one with the retina prism.

[laughter] 

Kelli: I don't have a retina...

Jonathan: [laughs]

Kelli: ...so what you want to do?

Jonathan: Nice. With that dear listener, that's our show for this week. I'm Jonathan Stark.

Kelli: I'm Kelli Shaver.

Jonathan: I hope you join us again next week for the Nitch podcast.

Kelli: Bye.

Jonathan: Bye...

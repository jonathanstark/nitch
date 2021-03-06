Episode 59: Moonburn
====
May 31, 2013

Running time: 50:26

Jonathan and Kelli talk about the WeMo Switch, blink(1) USB, hue light bulbs, and the APIs that tie them all together.

<audio preload="auto" controls>
	<source src="https://s3.amazonaws.com/nitch/Episode_59_Moonburn.mp3" type="audio/mpeg" />
	<source src="https://s3.amazonaws.com/nitch/Episode_59_Moonburn.ogg" type="audio/ogg" />
</audio>

[Download (37.1 MB)](https://s3.amazonaws.com/nitch/Episode_59_Moonburn.mp3 "Episode 59: Moonburn")

## Related Links

* [Buzz Aldrin wearing Google Glass](http://www.reddit.com/r/geek/comments/1f23i7/buzz_aldrin_wearing_a_pair_of_google_glass/ "Buzz Aldrin wearing a pair of Google Glass. : geek")
* [Philips hue lightbulbs](http://www.meethue.com/ "Philips hue")
* [WeMo Switch + Motion](http://www.belkin.com/us/p/P-F5Z0340-APL "WeMo Switch + Motion | App Enabled Accessories | Mobile Accessories | Products | Belkin USA Site")
* [ThingM blink(1)](http://thingm.com/products/blink-1.html "thingm :: an electronic product studio: blink(1)")
* [IFTTT](http://ifttt.com "IFTTT")
* [Pushover](https://pushover.net/apps "Pushover: Applications and Plugins")

## Titles We Considered

* Off by One Vacation
* Moonburn
* All Kinds Of Manufactured Fun
* If Only I Could Get Me a Rosie
* Closer to Useful
* PMS Indicator
* How Do It Know?

## Transcript

JS: Hello, and welcome to the niche podcast for Friday, May 31st, 2013. I’m Jonathan Stark.

KS: I’m Kelly Shaver.

JS: And we’re here to talk about building apps that run everywhere. This week, we talk about the WeMo switch, blank one USB, hue lightbulbs, and the APIs that tie them all together. So please stay tuned. The niche podcast is next. I almost said Blink 182. We’re going to talk about Blink 182 this week, folks. 

KS: And on that note I’m going back on vacation.

JS: Yeah, how was vacation, in Quesa [inaudible 0:00:41]?

KS: That’s not where we went.

JS: No?

KS: No.

JS: I’m so confused.

KS: That’s in August, remember?

JS: No. Obviously. I thought Boston was in August.

KS: No, Boston is in October.

JS: Oh, man. I’m off by one vacation.

KS: You are. You’re messed up your indexes there.

JS: Where the heck were you?

KS: We were in Cincinnati.

JS: Oh, so that’s why I was confused about the birthday presents thing. I was like picturing you shuttling a bunch of boxes all the way up to the middle of nowhere.

KS: No, no, no. That vacation is in August. End of July, beginning of August.

JS: I see. Jeez, you’re off more than you’re on.

KS: I know. Never take a vacation, then I’ve got three scheduled back to back to back.

JS: Well, that’s cool.

KS: But it was good.

JS: Excellent. Well, we … here it’s been status quo. Like super ridiculous weather, which is so very normal for around here. But yesterday was in the low 60s and today I was just sitting at the counter dripping sweat.

KS: Yeah, it was like 90 here today.

JS: Oh, so hot and humid. I texted Erica, I was like we are buying an air conditioner tonight, so FYI.

KS: The two-thirds of my family that has red hair managed to get themselves sunburned at an indoor water park.

JS: Those fluorescent bulbs get you every time.

KS: Well, I asked Richard how they managed to do that, he goes well, they have skylights. Yeah, there’s a few of them every now and then.

JS: Jeez, we might be related.

KS: Yeah.

JS: I’m part vampire, for sure.

KS: Yeah, he can get moonburn. Then there was the inevitable Kelly injury, but other than that, the trip went great.

JS: Oh, so we had to reset the twisted anglo timer?

KS: Yeah. We had to reset the counter.

JS: Excellent. What’d you do?

KS: Um, I slipped and fell on some wet tile and leg meets marble corner of counter. It was not pleasant, but you know, I’ve had worse.

JS: [Inaudible 0:03:19] your eye didn’t shoot out while you were doing it.

KS: Yeah. It’s a daily occurrence, so whatever. We’re used to it at this point.

JS: Well anyway, let’s talk about internet of things, shall we?

KS: Yeah, I have a couple of things and I know you have a couple of things.

JS: Yeah. I don’t think we have any housekeeping, do we? I’m kind of jumping ahead.

KS: I don’t think so. Are we going to try and do the video thing next week?

JS: Yeah, next week will be the video thing to our listener, where we walk through …

KS: Make fools of ourselves.

JS: Yeah, exactly. Doing a painful live coding. We suffer so you don’t have to type of thing. So that should be super fun, so put that in your calendar, and we’re going to have some sort of audio version for the podcast, but there also should be a video accompaniment for you to enjoy at your leisure. I think that’s probably the only housekeeping.

KS: I think so, yeah.

JS: But yeah, internet of things. I got a whole bunch of new gadgets this week, but what’s your news in that area?

KS: Well, I just had a couple of interesting observations to make. That while we were gone, my entire interaction with the internet, and I would say … I guess the computer, but by computer I mean phone, pretty much all of it was by voice.

JS: Really?

KS: Yeah. 

JS: Why was that?

KS: Yeah, well, because typing on a phone sucks.

JS: Interesting.

KS: And so I’d be like … I’d say I need directions to such and such a place, and it would tell me, and then in turn Siri would find it and I’d get the turn by turn navigation and then I’d say … the map that Apple came up with for us to get to where we’re going was a different route than we usually take, so at one point, well, we want to stop somewhere and eat. So I said okay, find nearby restaurants, and like instantly it comes back, there are 15 restaurants near your current location. It was … I don’t think I’ve done that my computing without typing in a long time. Responding to e-mails rather than typing them out I’d just do the speech to text translation.

JS: Wow.

KS: Yeah, because I hate the phone keyboard. Like I had a tablet with me for better typing, but I ended up not getting it out and using it.

JS: Yeah, isn’t that interesting.

KS: Just talk instead.

JS: So when you’re normally using your phone, you just never type or you just don’t use it for … you just don’t use it for that kind of stuff? You just use it like a phone?

KS: I normally just don’t use it for that kind of stuff, because I’m never away from a computer for that long. Like I may read an e-mail on it, but unless it’s urgent I’ll just wait until I get home to reply to it.

JS: Right. Interesting. Oddly enough, I’ve been doing a lot more of voice input on the Nexus 4 because I’ve been using Google Now more and more, and anything … it seemed … like when I first started using it, I was like meh, it’s okay, it’s pretty cool, but there’s not that many cards that apply to me because I don’t care about sports and I don’t care about the stock market and I don’t really care about anything but my e-mail. I just don’t. There’s all these things it does that are interesting to me, but the more you use it, the more you’re like wow. It’s like 50 percent easier to go straight to Google Now and ask it something than it is to do anything else. I’ve finally broken a barrier of starting to use it while other people are around. So for the longest time I would never use Google Now or voice input anyway unless I was by myself and I had a long search query that I didn’t feel like typing out, or something like that. But if other people were around, I would never use it.

KS: Yeah, because you feel like an idiot.

JS: Yeah, it’s just like … but it’s funny because I’ve been using it. I think sort of two things have happened. One is that I’ve been using it so much that I trust it to do the right thing, so you don’t have that stupid thing where you’re like …

KS: Repeating yourself four times?

JS: Yeah, yeah. Like the voice prompts and like a credit card company, and you’re like yes. Like we did not understand. I said yes. We did not understand. I’m sorry, could you repeat your …

KS: When Richard first started making our mortgage payments over the phone, he’s like Richard Shaver. Richard Shaver. Richard Shaver. I’m sorry, I didn’t get that.

JS: When it gets to the point where you could just drive to the bank branch more easily than calling them, it’s pretty bad. But that one was big thing is that I know it’s going to work. It’s like it always works. In fact, it’s at least as accurate as like autocorrect. Because autocorrect will throw you under the bus all the time. Like I should have it shut off.

KS: Yeah, I do have it shut off.

JS: But I prefer my spelling mistakes to its wrong autocorrections. The big thing was that I started using it enough that I trusted that it was going to do it right the first time, and the other thing is that as awkward as it is to be talking … it’s weird to say this, but it seems awkward talking to your phone. It’s like what you’re supposed to do with your phone, but when you’re talking to Google on your phone, it’s still … it feels awkward and it feels like it would be … it’s rude almost. But stopping and typing out this long query that I was going to type out is just as bad.

KS: Like even more rude, because …

JS: Yeah, because no one knows what you’re doing. At least when you’re talking, they know that what you’re searching for is in the context of the conversation or something. I think we’re both in agreement that its time has come. It has become useful in a lot of normal use cases.

KS: It has, and in fact even Richard, who has refused for years and years and years to even carry a cell phone because he finds them totally useless and a smart phone even more so, but it’s like oh, this is handy, this is cool. We’re going to use this for all of our trips from now on.

JS: Yeah, last time I had to go to the airport, I was coming from Erica’s parents’ house because our floors were getting redone, and I wasn’t sure I knew the best … I knew one way, but I wasn’t sure it was the best way, so I got in the car and whipped out the Nexus and I was like direct me to, you know, I need to go to TF Green, I want to stop at a Dunkin Donuts on the way, and it was like bleep. Takes you right there, no problem. It’s really, really good. So that’s interesting. It obviously ties in with Google Glass, which is pretty much almost purely voice activated. Not completely.

KS: Yeah. Did you see the photo I sent you of the … Buzz Aldrin with Google Glass?

JS: Yeah, yeah. Talk about worlds collide.

KS: Yeah. Like what goes through your head?

JS: Yeah, I’ve walked on the moon. I went to the moon in a space ship that didn’t have as much processing power as the glasses I’m wearing.

KS: That’s crazy.

JS: Yep.

KS: The other little interesting experience that I had … not specifically internet connected device, but I don’t see why it couldn’t be. We were staying at a Great Wolf Lodge, which I don’t know if you’re familiar with them or not, but it’s like …

JS: A what?

KS: Great Wolf Lodge.

JS: Oh, no, no.

KS: It’s like a theme park hotel type thing. They have a water park and mini golf and bowling and arcade and all that stuff.

JS: I hear it’s pretty sunny in that water park.

KS: Yeah, yeah, you’ve got to watch out for sunburn in that water park. It’s just … it’s all kinds of manufactured fun. 

JS: Perfect.

KS: But we took the kiddo up there, and basically you go and you check in, and I’m sure other places are like this as well. Like I think Disney does it and I’m sure … I think you might have mentioned cruises, certain cruises do it and what have you. But you go and you check in and they give you this little waterproof wristband and it has this chip in it, and that’s your room key, that’s how you pay for your stuff, that’s how you get access to your lockers at the water park. Just everything is on that chip.

JS: Yeah, that’s … the new Disney parks have an RF ID wristband and it’s everything. It’s basically your money. It’s called like My Magic Plus or something like that. I don’t think it’s GPS. I think it triangulates your location based on where you’ve used it and things that you’re walking by and stuff, but it knows where you are in the park. It can direct you to other places where there are shorter lines and stuff like that. There’s all sorts of advantages to it. You can imagine for Disney.

KS: Yeah, this wasn’t quite that advanced. It would basically just let you pay for stuff and unlock things. But still, it was super handy.

JS: Yeah, on the cruise ship you have a sea pass card, which basically ties back to your credit card on file and that’s what you use for everything. I don’t remember if you use it to open your state room door, but I think you do.

KS: Yeah, this was just a little wristband, and you hold it near the lock and it just unlocks it.

JS: That’s cool. I do think, like you said, you don’t see why it couldn’t be connected to the internet.

KS: Right. Or at least interfacing with a larger computer network that is uploading things to the internet.

JS: Yeah, there’s all sorts of … you can imagine all sorts of analytical information that would be useful to the Great Wolf people, but also to you guys specifically. In my next of the woods, a whole bunch of Amazon boxes were delivered to my house this week.

KS: Yes, I saw you ordering things and I was wondering what you were going to build, so I’m excited to hear this.

JS: Yeah. So far I’m just kind of like experimenting, like getting comfortable with how things work and then once that sinks in kind of think like oh, how could I use this in a way that’s actually useful and not just gimmicky? I don’t know if I’m quite there yet, but I’ve definitely learned a lot. The long-time dear listeners will know that I got the Phillips Hue LED wi-fi lightbulbs for Christmas. 

KS: Yes, and I’ve been jealous ever since.

JS: And you should be, because they’re awesome. But they’re not cheap, that’s for sure.

KS: But my house didn’t catch on fire the day after Christmas, so whatever. We’re even.

JS: Yeah, exactly. Yeah, I got to use them for like one day or something. I must have gotten them for my birthday because I had them for more than one day.

KS: It was an early Christmas present maybe.

JS: Maybe. But anyway … once the basement got redone, we have six lights in the ceiling now, so I got three more and I put them so the whole basement ceiling lights are these LED lights and they’re connected to a via … I think it’s Zigby, but it’s kind of like Bluetooth. Wireless protocol. They’re all connected to this base station, which looks like, oddly enough, a smoke detector. You plug the base station into your router, and you configure it with either an iPhone or an Android app. So you go up to the … you just screw the lightbulbs in, and launch the app, and the app tells you to go over to the smoke detector and hold the button in the middle of it down, and that sort of … the fact that it just told you to do that and that you’re obviously in close enough physical proximity to press the button, kind of unlocks it for you. It’s kind of like your password. There is no password or anything like that, but that’s like the security, so if someone outside the house could actually see the base station and launch the app, but wouldn’t be able to do anything with it because they wouldn’t be able to press the button.

KS: It’s like synching a Bluetooth device.

JS: Right. So that was kind of cool. But the thing is, the base station, there’s two ways to control the lights. You can use the app, and it’s really just talking on the LAN to your wi-fi. It’s talking not over the internet but over the LAN to the base station and the base station tells the lights to do whatever you want them to do. Which is, they can change color, they can go up and down in intensity, and they can blink. So those are the three things you can tell them to do. But in addition … so you can control it on the LAN from the app, and you’re talking to the base station with the app. Or the base station is like … I think it’s polling a website. The hue website. So you can go to, I think it’s myhue.com, and you can control the lights from there. So you could be away from home and turn on your … you could have these lights in the living room or whatever, and make it look like you’re having a disco party while you’re away. That communication channel goes from obviously the web server. It’s somehow, and it’s now obvious how, but somehow the base station knows who you are. Probably when I configured the app. There’s something very kind of hacky and word-aroundish happens so that your log-in on the website knows that …

KS: Belongs to those lights, yeah.

JS: Yeah. It’s like somehow there’s a connection between the base station and you, your account on the web server. Once you log-in to the web server, you can do the exact same things that the app can do, but there’s like a couple second lag to it. It’s not totally instantaneous. It’s maybe a one or two-second lag. So I don’t know if it’s polling or what it’s doing, but it’s not quite as snappy.

KS: But you don’t have to be connected to the LAN to do it.

JS: Right. Yeah, so it doesn’t matter that it’s laggy, because you probably wouldn’t control it that way anyway.

KS: You’re not going to be there.

JS: Yeah, you’re not there anyway. That’s cool. That’s that device. And it’s really more of a lighting … it’s like a lighting solution. So you can … I don’t know, you can control your lights from anywhere. It’s funny, too, because people are like well, who cares? Like why would you want to do that? And I feel like saying to them, that’s like saying who cares about a TV remote control? Like you don’t need it, but you want it. It’s like once you can control your lights remotely, you don’t want to go back.

KS: If nothing else, to mess with your kid who is home.

JS: Oh my God, he loves them. I did it right now, like when we were starting on the podcast, I was sitting down and the lights were on white bright, because I was plugging in cables and stuff, but I wanted to get into a more chill mood, and I put down my computer, get up, go over to the switch, have to slide the slider on the switch all the way over there on the wall. Like oh, can you imagine? It’s archaic. But it’s like we just got … the air conditioner we just bought comes with a remote control, and it’s like I don’t want … it’s kind of hard to go over to the A/C and know that it’s pointing the right direction for where you’re sitting on the couch when you’re not … it’s like trying to adjust the volume on the TV and then you go sit down on the couch and you’re like oh, it’s still too loud, and you have to get up and go change the volume again and sit back down. It’s too quiet now.

KS: Yeah, it’s like our second air conditioner has a remote control. One was not enough.

JS: Yeah, and it makes you sound like the laziest person on the whole planet, but it’s a different experience. It’s a different thing. It takes it to a different level. It’s a space-age bachelor pad that we’ve been promised. Finally here.

KS: Our Jetsons home.

JS: Exactly.

KS: If only I could get me a Rosie, I’d be good.

JS: That sounded weird. That sounded like a euphemism.

KS: No, it was not a euphemism. I actually want a robot to clean my house.

JS: I got it, but I have a feeling there are some people on the line that don’t know what a Rosie is. Anywho. Google it. So the cool thing is that since these lights are controllable from their website, there’s also a channel setup on IFTTT, IFTTT dot com, that can sort of [inaudible 0:21:21] on your behalf into the Phillips hue website and make your lights do stuff for other reasons. 

KS: Turn blue. Oh, someone just tweeted you.

JS: Right. Which that’s probably pretty weird, but you can … there are triggers on the weather, and you can set the lights to change based on the weather or based on the time of day. So you could have them turn off at sunset or sunrise and turn off at sunset, or you could have them change throughout the day to be basically correspond to the color of the weather, if that makes sense. That’s pretty cool, and it’s one of those things you’d be like why would I want that? 

KS: Yeah, I want them to turn red when my server goes down.

JS: Exactly. There’s all sorts of things you can do. There are something like 60 channels on IFTTT that you can all send as … use as triggers to do different things to your lights. Either change the color, change the intensity, or flash them. That sounds kind of interesting. All those things are kind of geeky interesting, but in practice, they’re not … the stuff that’s more subtle is the stuff that I think is more realistic. So the example that you just gave of flashing if your server goes down.

KS: No one but us would use that. That’s a geek thing.

JS: I wouldn’t even use it because it assumes that I’m in my basement.

KS: Yeah, that’s true.

JS: That’s also when I talk about the blink, that it’s the same kind of thing. There are not too many things that you can … certainly not something stationery like these lightbulbs, that you’d ever want to use for an alert.

KS: Yeah, you’d like a text message.

JS: Yeah, you just don’t want to use any kind of stationery object, you don’t want to use it for alerts. It sounds like … it’s the first thing I thought of, too, but then you’re like well, what if I’m not in my basement? They’re more useful, I think, for just making the environment that they’re installed in more adaptive to your needs and not so much … someone mentioned you on Twitter.

KS: Yeah. I mean, you can and it has a little quirky, geeky fun factor to it, but it’s not very practical or useful.

JS: Yeah, so I’ll give you an example. One of the other things I got was the WeMo switch and motion detectors. What this is is a little … it looks like an old-fashioned Christmas tree light timer. There’s two pieces. There’s one at the switch and you plug that into an outlet, and then you can plug like a lamp or whatever into the switch, and you do some configuration with a native app and now all of a sudden you can set rules for the switch and you can also target the switch as an end-point for API calls. 

The switch, it’s either on or off, basically. You can create these rules in IFTTT or wherever you want to, but it’s easiest in IFTTT, create these rules to say same thing. As sunrise shut off, or at 11:00 p.m. shut off, or if it’s during the day but raining, turn on, but if it’s during the day and sunny, don’t turn on. You can send flash messages to that, too, but again, it’s like notifications don’t really make as much sense as I thought they would on a stationery object. That’s the switch, but it also comes with this motion detector that you set up separately, and right now I have it set up in my office. So when I come downstairs, the motion detector sends a ping to the WeMo website, and I’ve got that [inaudible 0:25:28] with IFTTT as well. So every time I walk into the basement, and I set up a whole bunch of alerts, so it sends me an e-mail, it sends me a text message, it sends me a push notification with a pushover app, and it also blinks my blink light, which I’ll talk about in a second. This is actually super funny and it’s the thing that is closer to useful than any of the other stuff so far, which is if anybody comes downstairs, even when I’m not home, I get all sorts of … I’m notified in a bunch of different ways and I’m slowly deciding which one of the ways is the most useful. But it’s hilarious. Like I’ll be … like this morning I was in bed. Erica always gets up before me because she gets up with Cooper, so I was waking up and all of a sudden my phone goes dah-dah. It’s like ha, Erica just went in the basement.

KS: Erica’s doing laundry.

JS: Exactly. I’m like oh, this is not super useful in my basement office, but I have this new office, and it would be pretty interesting. It’s a little, I suppose a little big brother-ish and sneaky, but it would be kind of funny to set it up in that office so that … because I’m hardly ever there. I only go there for phone calls and occasionally to do the podcast if we ever manage to do it during the day. And set it up there, and I’ve got … I could leave a laptop there so if I get a text message that someone is in my office, I’d be like hey, why is someone in my office? Then I could just remote desktop into the computer and turn on the webcam and see what’s going on.

KS: Yeah, it’s like a security system on the Jeep.

JS: Sort of. Exactly. So it’s like huh, I’m not going to do that, but it’s kind of interesting. I could imagine doing something like … something a little bit more … if I had a couple more of these, using them for like check-ins to kind of … there’s probably easier ways to do this, but … so the problem with the motion detector is it’s kind of dumb. It’s just motion. It’s like something moved in the room. It doesn’t know it’s you. 

KS: Yeah, it could be the wind blowing a curtain.

JS: Yeah, or the dogs. You can set the sensitivity and you can tell it not to detect every single motion. If nothing happens for five minutes, then if something happens, then let me know, but not every ten seconds.

KS: Yeah, see, this is where you need those RF ID chips.

JS: Like identification?

KS: Like tag people. Tag your family.

JS: Don’t put it past me. Yeah, like in the park. So I’m like there’s something here, there’s something interesting about it, but it’s kind of hard for me. I’m still trying to get used to it, but there’s … the lights and the motion detector and even the blink USB light, which you can carry with you but it doesn’t make a ton of sense to do that. All of them are … this is going to sound stupid to say, but all of them are intrinsically not mobile. It’s funny, because I think a lot of the things I kind of imagine I’d use them for were very mobility-like things. But really, that’s not what they’re good at.

KS: No, it’s more like home automation. It’s definitely internet of things but it’s not mobile.

JS: Right. Yeah, and that’s exactly it. I was kind of conflating those two things, and it’s really not. It’s more home automation and making your house smarter and more … you can really, really customize your environment really, really nicely. I’m just noticing all these little side effects. I haven’t come up with a really strong use case for any of it yet, other than being able to control the lights, because I don’t want to go back to not being able to do that.

KS: As someone who needs very specific control over my lighting, the ability to be able to do this based … like have it just automatically adjust based on time of day or outside conditions, to me, sounds awesome.

JS: Yeah, it’s really cool. It bums me out when I’m in a room that I can’t do it. I’m like oh, God. I have to go turn on the light? Like when we had all the work done in the house, all the lights on the main floor have sliders, so you can set the mood. And you get off the couch and you go over and you slide and you go sit down and well, it’s a little dimmer than I wanted, my eyes can’t quite read my Kindle. You go back over and adjust it a little bit more, and it’s like oh, you know, I guess that’ll work. It sounds so lazy, but it’s just as … it’s no lazier than remote control for the TV, which is obviously indispensible.

KS: At this point, yeah. It’s funny, too, because you wouldn’t think like oh, I’m adjusting the brightness of the light and I’m standing here at the switch and I’m adjusting it. It’s going to feel the same over there as it does here, but no it doesn’t.

JS: Yeah, not at all. Especially if you’re doing … and these lights are very subtle. There’s a full RGB color palette and you’ve got the intensity and brightness, and it’s really different throughout the room, because we’ve got six pot lights and if you’re in one spot it’s really red and another spot is really blue. You want to adjust it from where you’re sitting. There’s definitely a place for this and it’s definitely getting way easier to cobble things together using freely available tools. 

The most expensive piece is like the physical objects. Like the lights. The lights are really pricey. 

KS: Yeah, they are.

JS: The lights were a splurge, but they’re my favorite one, so I guess it’s worth it.

KS: Yeah. I almost bought them the other day, but I ended up accidentally buying a new iMac instead. 

JS: Imminently more useful, I assure you. It’s probably big enough to light the room anyway.

KS: I just got the 21 and a half inch. 27. Actually 27 actually seems too big to me. My vision is not that good. I couldn’t see the corners.

JS: Yeah, you don’t want to get vertigo, feel like you’re falling into the web. Let’s see. The last little device I got is really promising. This little … it looks like a thumb drive, but it’s even a little bit smaller than that. It’s probably the size of like the end of my thumbnail, basically. 

KS: Yeah, I saw that, and when you ordered it you tweeted the link and I was looking at it. I was like … I have no idea what I would use that for, but I want it now.

JS: It’s too expensive for what it is, but I’m sure it’s the kind of thing that would be trivially inexpensive to produce eventually. It’s this little LED light that is the same sort of thing as the hue lights. It can be pretty much any color, and it’s on or off and it’s at a particular brightness. You can plug it into virtually anything that has a USB-2 plug, and send commands to it and have it do stuff. So immediately I’m like oh, same thought I had with the lightbulbs. It’s like direct messages on Twitter, you can flash it, or you can set up all sorts of mail rules, so if I get e-mail from a particular person it flashes. But again, I think it’s more useful. I’m learning quickly that it’s not the kind of thing that I would carry around and leave plugged into my laptop or something like that, because I don’t even carry around a particular laptop. It’s the kind of thing that instead, it’s … you want it to be for ambient information. Not necessarily notifications. Like you don’t want to be notified on that thing, because you don’t know if you missed something. It’s like when I walk into my basement, my phone beeps for 500 reasons. Like I get an SMS, a push message, an e-mail, and I did have the Phillips hue lights flashing but that was too annoying. The trumpet goes off, and then the blink USB LED blinks as well. Even though I’m looking for it, I sometimes miss the blinking of the LED. So it’s not … it can’t be for something important. It has to be for something that’s interesting but not critical. You want it in a place that is heavily trafficked. So it would almost be more … like you’d put in the lobby or in the living room or someplace plugged into a computer or an outlet that a lot of people are often around, and it would tell them information that might be of interest but isn’t a big deal if they miss it.

KS: Like there’s a thing today. Where a thing is optional thing you’re interested in.

JS: Yeah, like oh, it’s flashing red. That reminds me that the farmer’s market is today, or it’s … see the thing is, you can say oh, it’s flashing blue and that means that it’s time to change the water filter because I set it up on a timer for that to … but there’s a bunch of other, more easy ways to do that. Like you could just set up e-mail reminders or put it in your calendar. So it’s like why would I … like what is the way … this is the thing. I’ve got all of these, I got them all set up, and I’m just sort of experimenting with what is the use. What’s the killer app for LED.

KS: What is the thing there? What is the thing that the easiest and most practical solution to informing you about it is to have this little tiny light turn blue?

JS: Right. One thing that came to mind. I’m not sure if this is good psychologically, but it occurred to me, is to … now we’ve got a Google TV in the kitchen and the kitchen is open into the playroom, so it’s like this big open area, and we’ve got a Google TV on the counter right in the middle of the whole thing and it’s got USB ports on it, so I could plug it in there and I was thinking I was setting it up so that it indicated how far I was from the house and if I was getting closer or moving farther away. So like Cooper could see that whatever the color is, like say hot/cold if I’m home it’s red, and the farther away I get from the house the bluer it gets until it’s all the way blue. Then if I’m moving or if I’m in transit, it would flash.

KS: Yeah. I just had a thought. Richard is going to want to get one of these and set it up as some kind of PMS indicator for me.

JS: Like you’re all sitting around the living room and all of a sudden it starts flashing red and everyone just stares at it for 10 seconds and no one says anything.

KS: Yeah. It’s like uh oh, we better walk on eggshells for a few days.

JS: Into the hurricane shelter.

KS: Yeah, so I don’t know. It’s one of those things where it has to be on regularly enough so you remember what it means, because it’s pretty low amount of information. So if it only goes on like once a year during like a tornado warnings or flood warnings, you’re going to be like … what does red mean? What does two …?

KS: Then your roof disappears like oh, that’s what it means.

JS: Oh yeah, it was the hurricane warning. So it has to be something that’s almost constant. That you can just glance at it and know something. Like you could do it with temperature. But it’s a dumb thing. There’s so many other better ways to do temperature. 

KS: Yeah, oh I know what I want to use … oh, nevermind. Your switch for. 

JS: Oh yeah, what?

KS: Because you said you can … it’s the motion detector and you can send things to it over the API, right?

JS: Yeah. So there’s two separate devices. There’s the motion detector is just outward, so that’s input. Then the switch is the output. 

KS: Yeah, no, I want to set it up so that … and I guess this could also be easily solved with a thermostat, but if the outside temperature was at a certain degree, I want the fan in my office to come on.

JS: Yeah, yeah. That would totally work.

KS: Because I mean, it’s not like an air conditioner that’s on a thermostat. It’s a box fan, you know?

JS: Right, right. Or you could have it … like this is a good example. You could set up the motion detector … like I just set up a fan in our bedroom, but we don’t need it on when we’re not in there, so you could just set up the motion detector like when you walk in, it turns on the fan, just automatically when you walk in. But I’m lazy and just leave the fan on all day, so that’s not a great idea either.

KS: Yeah, well, when it gets … I leave the fan on anyway because otherwise the office will heat up when I’m not in here. So I have cooling issues in my office.

JS: Well, yeah.

KS: The rest of my house will stay nice and cool, but the office, nah.

JS: Yeah. I’ve got the nest thermostat. I don’t think there is any way to hook that up over the wi-fi and control it remotely.

KS: I’m sure there are others that are.

JS: I wonder. But there are some classic cases, like for the switch. The thing with the switch is, you can manually control it remotely. So if you plug in … if you use that for your iron, then you never have to worry about whether you left it on or whatever. And certainly the turning on and off your lights while you’re away is another good one. I don’t know. I’m just going to keep playing with them and be like … there is a certain sense of … power is too strong of a word, but you do feel like a sense of control over your environment that you didn’t previously have or a piece of … it’s like you’re plugging things together with data instead of with atoms, and it has a … for a guy like me, that feels a lot better.

KS: It’s kind of a … it feels like a … I guess like a more holistic approach, because you can all have it react in response to other things going on. More integrated.

JS: And there’s almost … there’s already more ways for me to trigger them than I can even think I need. You know what I mean? So like … how many channels are there? There’s like 62 channels on IFTTT, so things like Twitter and e-mail and RSS feeds and drop box and Instagram and Facebook and Tumblr, there’s just a million things. And these things that are pure web things are now bleeding into the real world because stuff that happens in cyber space can now control electrical appliances in my house, or this LED light or my lightbulbs. It’s pretty futuristic and wacky.

KS: It is, yeah. I feel like the switches have … like the most immediately obvious practical uses and the hue lights have lots of useful sort of ambient mood lighting, like controlling your environment type of uses. But the LED light is … I mean, it’s really … I find it really, really interesting, but I’m like you. I just haven’t figured out the perfect use case for it yet. But of the three in terms of interesting potential for things, I don’t know, there’s just something about it that’s really interesting.

JS: Yeah. All of it’s really cool. I think the big message to take away from it, though, is that it’s fairly jaw-dropping that all of these little random pieces of electronics built by … every single one of them built by a different manufacturer, a huge company like Phillips and a small company that got their money from Kick Starter, they all work together. Because they’ve all got APIs. I’m using IFTTT just because it’s easy, but you could use your own. You could make your own.

KS: Right. They’re all just rest APIs, aren’t they?

JS: Yeah. Well, see, that’s the beauty is I don’t even know. You go into IFTTT, create an account, and you [inaudible 0:43:29] against various things. Like you [inaudible 0:43:31] against e-mail, you [inaudible 0:43:32] against the WeMo website or all these other things. Then some of the things, like the blink LED, when you plug it into your computer there’s this configuration program that you open and it will give you an API key and then you could use that to identify yourself in IFTTT with that, so that doesn’t have a … that one doesn’t have its own website, you just use an API key.

KS: Yeah, I just figured out what I would use those for.

JS: Oh yeah? What?

KS: Yeah, I need some kind of board with a bunch of different USB ports that I could label and that I would just plug them in and they would light up when you had pull requests waiting on your [inaudible 0:44:13] repositories that you want. Because those aren’t urgent things. You could just glance over at the board and see them.

JS: Yeah. And think ooh, pull request. I’m very bullish on the whole thing. Playing with them, you can feel that there’s something good there, but it’s super … and it’s extremely encouraging that all of these different devices have APIs and are already integrated with this one website, but you could integrate stuff on your own if you felt like really getting under the hood. That’s all very encouraging, but it’s super duper V1. Like all this stuff is … even as easy as IFTTT makes it, it’s still pretty wonky. Like a lot of stuff is like wait a second, how does this work? They’re all different. Like the blink thing. Even though it’s simple as if something happens then blink this thing, there’s still enough set-up of each different thing that’s different. There’s no pattern to the way … there’s nothing in common with the way you set up a blink compared to the WeMo. Like I feel like both of them actually get really, really … it’s way too over-complicated. Like they tried to give you too many options, and it’s like wait a second. This is a brand new concept, could you make the config a little easier?

KS: Yeah, I feel like hue is probably the easiest, user-friendly, out-of-the-box.

JS: Yeah, hue nailed it, if you ask me, because it just works. You’re like whoa. It’s almost like how do it know? But like the WeMo one is super annoying because … and I think they did it like this to make it … to not have a base station, but when you first plug them in, they are a wi-fi access point, so yeah, it’s annoying. You have to take your smart phone, you switch your smart phone onto that network.

KS: Yeah, I’ve dealt with that before with security cameras.

JS: Yeah, it’s lame. But I suppose the only other options were … I mean honestly, I would have rather a lot of things than connect to it like that. I would have rather I have had to plug it into a computer with a USB to configure it initially. Because what you have to do is like the switch connects to your home wi-fi, but your home wi-fi has a password if you’re not crazy. So you have to put that password in somewhere, and it’s … so this whole … the whole way they did it, I’m sure they discussed at length how they were … obviously, they discussed at length how they were going to do it, and there must have been some good reason to pick broadcasting the wi-fi as an access point, but it’s really … and I had two of them at once, so I’m like which one is which? It’s just really clunky. It would have been cooler, if you ask me, if you just plugged it into a computer or you connect with Bluetooth or something. Or really, the hue works so smoothly that I can’t even remember how the setup went, but like why isn’t it … why can’t I just go over to the …

KS: To the switch and push a button?

JS: Yeah, and say like I’m obviously controlling this, I’m pressing the button and it should either use Zigby or … I don’t remember how it worked with the base station. I don’t understand why it worked. I guess because it was hard-wired to my network it was able to find it on the LAN with Bonjour or whatever it’s called.

KS: Yeah. Zigby is an open protocol, isn’t it?

JS: I don’t know. Zigby, for people who don’t know, Zigby is a very clever protocol for creating mesh networks of smart things, and it’s kind of like Bluetooth but without all the B.S. But I have a feeling it’s not open, which is why I think it hasn’t caught on. It says it’s based on … I’m looking a Wikipedia real quick. It says it’s based on standard based, but yeah. License. For non-commercial purposes, the Zigby specification is available free to the public.

KS: Yeah, but none of these things are going to … anything you buy is not going to be non-commercial. Like if you’re hacking something together with your Arduino, go for it, but if you’re going to buy something through they’re going to license Zigby or they’re going to use something else.

JS: And they’ll use something else. Hence, probably the reason that the WeMos use wi-fi. Anyway, dear listener, that’s probably enough suffering for one week.

KS: Interesting things, though.

JS: Yeah, it is very interesting. I’m sure I’ll have a lot more to report as I … eventually if I hopefully come up for some use for all these toys laying around.

KS: Yeah, I want to tie one of the LED indicators in with the online grading system for our school system so I can get … like it will change based on Kira’s math grade.

JS: There you go. 

KS: You better work harder, kid. That’s getting yellow.

JS: Yep. There might be a title in there somewhere. Anyway, so that’s our show for this week. I’m Jonathan Stark.

KS: And I’m Kelly Shaver.

JS: I hope you join us again next week for the niche podcast. Bye.

KS: Bye.



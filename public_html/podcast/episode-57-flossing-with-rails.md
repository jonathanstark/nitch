Episode 57: Flossing With Rails
====
May 17, 2013

Running time: 32:05

Jonathan and Kelli talk about building - and more importantly, testing - REST APIs with Rails and RSpec.

<audio preload="auto" controls>
	<source src="https://s3.amazonaws.com/nitch/Episode_57_Flossing_With_Rails.mp3" type="audio/mpeg" />
	<source src="https://s3.amazonaws.com/nitch/Episode_57_Flossing_With_Rails.ogg" type="audio/ogg" />
</audio>

[Download (23 MB)](https://s3.amazonaws.com/nitch/Episode_57_Flossing_With_Rails.mp3 "Episode 57: Flossing With Rails")

## Related Links

* [Ruby on Rails](http://rubyonrails.org/ "Ruby on Rails")
* [Sinatra](http://www.sinatrarb.com/ "Sinatra")
* [Availio](http://avail.io/ "Availio - Future friendly domain search")
* [RSpec](http://rspec.info/ "RSpec.info: home")
* [SQLite](http://www.sqlite.org/ "SQLite Home Page")
* [YAML](http://www.yaml.org/ "The Official YAML Web Site")
* [RABL gem](https://github.com/nesquena/rabl "nesquena/rabl · GitHub")
* [FactoryGirl Gem](https://github.com/thoughtbot/factory_girl "thoughtbot/factory_girl · GitHub")
* [Thoughtbot](http://www.thoughtbot.com/ "We make web and mobile apps : thoughtbot")
* [TDD](http://en.wikipedia.org/wiki/Test-driven_development "Test-driven development")
* [GraphicalHttpClient App](https://itunes.apple.com/us/app/graphicalhttpclient/id433095876?mt=12 "Mac App Store - GraphicalHttpClient")
* [Infinum](http://www.infinum.co/ "Infinum • Software development and design • Mobile and web")

## Titles We Considered

* Pure Kelli
* Sounds Like Work
* Totally Broken
* Flossing With Rails

## Transcript

Jonathan Stark: Hello, and welcome to the Niche Podcast for Friday, May 17, 2013. I'm Jonathan Stark.

Kelli Shaver: I'm Kelli Shaver.

Jonathan: We're here to talk about building apps that run everywhere. This week we talk about building, and more importantly, testing, REST APIs with Rubyonrails and R-Spec. Please stay tuned, the Niche Podcast is next.

Kelli: I forgot that part when I was typing up the notes, didn't I?

Jonathan: I almost did too.

Kelli: You could have blamed me.

Jonathan: It's hard. It's harder than you think, dear listener, to remember from week to week.

Kelli: Even though we've done it 55 times now.

Jonathan: Yeah, well, this will be 57, I think.

Kelli: Oh, 57 is it? Yeah.

Jonathan: We're coming up to the 60th episode. It's so exciting. What's going on there? Last day of school?

Kelli: Yes, the last day of fifth grade.

Jonathan: [laughs] A funny picture of the little Kelli, staring out the window longingly.

Kelli: Yeah, she was waiting for the bus. She was a mixture of excited and sad because she's going to a new school next year and everything, In the fall.

Jonathan: Yeah. I can't even, that's crazy. Thinking back to that sort of thing. Last week, we talked about selling clients on the API first approach to building apps, and we touched on the planning process a bit, today we thought it would be cool to get a little more specific and talk about how to build and test them.

I also asked last week if anybody was interested in knowing more about pricing quotes for this kind of work. I got a teeny bit of interest on Twitter. I don't know if you heard anything.

Kelli: Just the same stuff you got I think.

Jonathan: If anybody is interested in that we can do a show on that, but it's a little bit out of bounds for us, I only really want to do it if people are curious about how to price stuff for doing API first development because it's definitely tricky.

Kelli: Yeah. It is a little different than what people are probably used to.

Jonathan: Right. There is not as much too, it feels like the deliverable's are a lot more vague. Anyway, this week we are going to talk about something a lot more fun than that, a little less businessey than that. That is specifically rails development.

Everyone loves that. This is pure Kelli so I'll just turn it over to you pretty much. The thing that might be most interesting is that I suspect that you're going to back pedal a little bit on older advice that we had in the early days of the podcast about Sinatra.

Kelli: I am. I'm going to say I like Sinatra a lot for little things like Uvelio.

Jonathan: Right.

Kelli: Uvelio is tiny, but when you get into building the larger APIs, yeah I'm going to kind of back pedal on that.

Jonathan: Interesting. All right, there's a little teaser for you [laughs] . OK, I guess to kick it off I can just say that the quote that we were talking about last week turned into a project. Kelly started blasting away at it with all guns blazing.

Kelli: Yes I did.

Jonathan: If they are any indication, you've made a lot of progress already.

Kelli: Yeah I have. I've been really happy with it so far. It's coming along nicely.

Jonathan: Awesome. The approach that we took with this, and is the recommended approach, is to document out the API first and then start turning it into an actual API. That's what you did, right?

Kelli: Yes. Yes it is. I've had to make a couple of little changes to the things we had outlined in the documentation here and there. Just to kind of make a couple of things a little bit easier once you get in and start coding, but that's not unusual. For the most part though things are sticking right exactly to the docs.

Jonathan: Cool.

Kelli: Except for the parts that aren't.

Jonathan: No, I know what you mean. You get in there and you're like, "Oh, this made sense on paper but now that I'm coding it, it doesn't make sense."

Kelli: Yeah. It's like, "Oh, I could add a token to this or I could write another 100 lines of code."

Jonathan: [laughter] Exactly.

Kelli: 100 lines of [inaudible 00:04:58] code is a lot of code.

Jonathan: Yes, I suppose that's true.

Kelli: Yeah. [sigh] Wow, what are...?

Jonathan: Yeah, where do you start right? Like initial commit. You set-up like what's your first step? Is your dev environment, I know that was kind of messed up or something?

Kelli: Yeah, well. I had kind of broke my dev environment this particular API deals with some image processing stuff and I had kind of broken my Image Magic installation. I had to get that sorted out first. Usually if I'm doing anything that is out there and [inaudible 00:05:47] different than what I have on my computer then I'll set up a virtual machine for it but I didn't do that in this instance.

To start out, I'll just set up a new Rails application and there is a couple of thing that I don't include in that while I'm setting up the Rails app. I don't include test unit because I prefer R-Spec and all of the things like the Rails assets and asset management, stuff we really don't need because it's an API, there is no user interface.

I started that and then the very next step was to...I don't know if you remember or not but I talked a little while back about actually setting up an API that we did do in Sinatra. No it wasn't, it was adding an API to an existing Rails application and I had to write a piece of middle-ware to serve cores headers.

Jonathan: Oh, yeah. I do remember that.

Kelli: Yeah, that was the first thing I did was to take that and to drop it in and get those working from the start.

Jonathan: Cool.

Kelli: We would have that support throughout.

Jonathan: Right, the API could be access from JavaScript without cross-domain restrictions.

Kelli: Right.

Jonathan: Cool. For people who haven't used Rails, how would you characterize the setup? Because I'm not really a Rails guy either playing with it, it's like you run a couple of things to command line and scaffold out a project. Does it the same kind of thing for an API or is it a different approach?

Kelli: Yes, it's the same kind of thing. You can, Rails has several generators, you can do the scaffold generator, which will generate your models using controllers, or you can generate each one individually.

I started out, if you want to do the scaffolding generators you can and actually that is how I started out so that is a good time to bring up I guess because when I started after I did my initial setup and got the cores headers working I set up my first data or my first model and wrote my database migration.

I did generate that with the Rails scaffold generation and that gave me sort of a web interface there using the automatically generated HTML, CSS, JavaScript all that that Rails generates for the scaffold.

I don't know, for some reason, I don't know if it's just me personally, I find that when I'm starting out with an API it's easier to kind of get these going to begin with as far as making requests and testing and doing things like that, if I start with a little bit of data already in there to play around with.

Rather than just jumping right into a create methods., I just use the scaffolding there to just enter a few records and then I pretty much ended up just deleting all of those view files, almost right away as soon as that was done.

Jonathan: Right.

Kelli: I could have easily just ran the migrations without the scaffold generated and gone in and edited the database.

Jonathan: Right.

Kelli: But, whatever.

Jonathan: For again a non-Rails guy, how much work did you have to do to set up the database? Do you point it at a server? Like what do you do?

Kelli: By default it does everything with SQLite. Which is fine for development purposes for right now. You can always go in and change the database config files and change it over to MySQL or PostgreSQL or whatever you want to use. Initially, when I was generating the scaffold, you just pass the command right in I want this field it's a string, this field is text, this field is an integer, just that kind of thing, in that generator command.

Jonathan: Got you.

Kelli: If you want to, if you don't want to do all that, you can go in and write the migrations out by hand if you want to do that.

Jonathan: That sounds like work.

Kelli: Yeah. You've got the generators there. Take advantage of them.

Jonathan: What is that, like a YAML file or something?

Kelli: No, it's a Ruby file. The database config file is the YAML file, yeah.

Jonathan: That's what I meant.

Kelli: The migrations are Ruby files.

Jonathan: I was always sort of thrown by the migrations word. It sort of makes sense after you've got a database, I suppose, but it always kind of threw me. I don't know, am I not understanding how it works? It seems like a weird name.

Kelli: I guess you have to look at it as it's a migration of the schema and not the data itself. It is a weird name. It feels more like a versioning of the database schema rather than migrating something like migrating data.

Jonathan: Database, get that all set up, and you get some data in there and then you just start banging out Ruby files; right, to handle the request?

Kelli: Yeah. The next thing I did was go into the active record model for the resource that I was working on and I set up the active record validations. For instance, a user account might have validate their email address exists and it's the right format, it's unique, and that kind of things. Setting up those validations and setting up new kind of relationships, which I didn't have at that point because I just had the one in there.

I did that and once all that is written in the model then I'll just go over the controller and add your code for your rest actions. Create, view, update and destroy that kind of thing.

Jonathan: I'm actually looking at the project on GitHub as you're talking about it. Again, for people who are familiar with Rails this is not interesting, probably, but for people who aren't, the validations that Kelli's talking about are extremely I want to say declarative. That's probably not the right word. They're very clear. Do you know what I mean? You can just read them.

Kelli: It's almost plain English.

Jonathan: Yeah. It's almost plain English, exactly. It's like based on stuff that Rails already knows about so it's a little bit of magic going on. You have to know what you're doing, obviously. We're talking about programming. Once you know what you're doing, things like validates email or presence or uniqueness, you have to know that those things are a thing.

You can read this without knowing hardly anything. You don't have to know anything about Rails to read this. It's super obvious what it's doing. That's very cool.

Kelli: The end result gets some really clean code that's just very clear and easy to pick up on right away. The controller code, if you don't have to deal with a bunch of different formats and a bunch of different view files being rendered and that kind of thing, the controller code gets really clean and a lot shorter, as well.

Jonathan: To return the JSON, what's the appropriate way to do that in Rails? It's not really a view.

Kelli: Actually, yeah, I guess it is a view file. At the moment, I don't have any in there yet because I'm just returning the entire object as a JSON object and Rails can just convert it easily, no problem. If you want to do anything like only expose certain bits of that object or if you want to add additional information to it or maybe show children nested under it or anything like that then you're going to need some kind of view file.

I've mentioned it before, but this is where the RABL gem comes in. I think it stands for Ruby API Builder Language, just a little DSL word for creating JSON and XML view templates for API responses. If things end up getting more complex than they are now then I'll just go ahead and do those because I have the gym in there and it's all set up to use them, I just haven't need to implement it yet.

Jonathan: As I'm looking at this, I almost wish the dear listener could see what we're talking about. I feel like it's hard to express how straightforward this is. It might be interesting to do a show where we talk just like we normally do but we're also recording a screen cast that we can post of just going through the initial build of a Rails API.

Kelli: Yeah, we can do that. Also, we can just open source the code on GitHub.

Jonathan: Yeah, that would be cool, too.

Kelli: We can't for this, obviously.

Jonathan: Not for this. There's probably already a million videos that walk you through this basic concept, but I feel like it would be interesting to see it from our particular perspective, not that we're that special. If you're a long time listener and where we're coming from, it might bring an extra pragmatism to it, I guess.

There's so much content out there for learning Rails I feel like it's overwhelming. I know it's overwhelming for me. I don't know. If people were interested in that, I would be interested in that.

Kelli: Yeah. It would be fun to do.

Jonathan: That would be super cool.

Kelli: There's a lot out there for Rails, but I don't know that there's a lot specifically for APIs with Rails. Not that it's a big stretch from one to the other.

Jonathan: Yeah. It's one of those things. I would feel like I don't care about all the view stuff how do I skip over that without missing something I need? That would be fun to do, I think, if you were up for it.

Kelli: Yeah, sure.

Jonathan: Once you have your controllers, then where do you go from there?

Kelli: That's pretty much it. Just move on to the next resource and just keep adding. I do it one at a time and just go through until they're all there. That and testing.

Jonathan: Oh, right. That's probably the big story.

Kelli: Yeah, that's the fun part. The whole thing has been fun. I've really enjoyed working on this project.

Jonathan: Cool.

Kelli: Like I said, when I was doing things in Sinatra, and I had written a few little tests with Rack Test, and it worked fine. I have nothing against it, but since I was using Rails, I thought I would go ahead and set up my tests in R-Spec.

I ended up doing a couple things since I was using those. I also installed FactoryGirl, which is [laughs] a gem by ThoughtBot. It's for generating little factories for automating creation of your data models and what have you for your testing.

I went in and I set up the tests. At first, that first model, that first resource, I went in and I did everything, and then I wrote tests to make sure it all worked. The next ones that followed after that, I kept inching more and more and more toward TDD.

Jonathan: Yeah. Test-Driven Development.

Kelli: Yeah. I kept inching closer to it.

Jonathan: From a conceptual standpoint, I 100% love Test-Driven Development, the same way that I conceptually love writing documentation first, before because you sort of begin with the end in mind, and pretty much every aspect of business and even personal life, and any kind of goal-setting, I'm a huge proponent of that. But it sounds so dull. It doesn't sound fun at all. I just want to code? I just want to get this little piece working, and then move on.

As a matter of fact, I was working on a front-end JavaScript thing for the past week, and I added a new module. Totally broke an old one. Didn't notice, because it wasn't that complicated, I was just shocked that I broke something, but I did. It's a pain in the butt. Everyone's like, "Yeah, we were testing this, and it totally doesn't work." I'm like, "What the heck?"

Kelli: Way to go! [laughs]

Jonathan: Yeah. It was totally broken. It was just dumb. Cross-plat, anyway, it's a great thing. It's like flossing your teeth. You should just do it.

Kelli: [laughs] Yes. Flossing with Rails!

Jonathan: [laughs] Nice!

Kelli: Testing to me was always kind of annoying. A good idea, but kind of annoying to do. But with the APIs, I'm leaning more and more toward testing being the greatest thing ever. It is just a lot of...You don't have an interface that you can pull up and look at something. Making a new request to the API is not as simple as typing in a URL into a browser.

Jonathan: Totally true, yeah. Manually testing an API is painful!

Kelli: Yeah. It's like, "Oh, let me open up, let me do something with CURL."

Jonathan: Yeah. Or that graphical HTTP client we use. It just a pain, it's really painful.

Kelli: Yeah. I use that for about 10 minutes, and I was like, "Wait a minute. Why don't I just write tests for this?"

Jonathan: Yeah, seriously. Where are those in the project, I can try.

Kelli: They're in the spec folder.

Jonathan: OK. Inside the spec folder. There's controllers, factories, fixtures, models, and how do you run the tests?

Kelli: It's a Rake task.

Jonathan: OK, you go to the command line, you run it, and what does it do? It goes through each of these different directories.

Kelli: Yeah, it goes through each of these different directories. It randomizes the order that it runs them in, each time you run it, to make sure there's not any kind of "one model not dependent on another" concept.

Jonathan: Yes. The tests have to be super-atomic.

Kelli: Yeah, because it randomizes the order that it runs the tests.

Jonathan: That's funny, because I've rolled my own tests in the past, and in particular, didn't do that. Ran them in order, like, do all your creates, then do all your modifies, then do all your deletes. It makes sense on the surface, but it ends up being a bad idea very quickly.

Kelli: Yeah. That's one of the reasons why I like the FactoryGirl gem, because it makes it super easy to have your tests really atomic like that. Because, if you want to test an update action, say, for instance, using FactoryGirl to generate a record that you can update is super-easy to do. It's one line.

Jonathan: Just to give people a sense of it, it's like, "describe person; do." It has a valid factory. "Do FactoryGirl create person should be valid." I see other ones that say "should not be valid."

Kelli: Yeah.

Jonathan: Explain that.

Kelli: That's testing for instances where the API should fail and should return errors. For instance, if you're trying to create a person and you forget to send an email address, or you upload a file that's too large, that kind of thing.

Jonathan: Or you're trying to redirect them when you're not logged in.

Kelli: Right. Trying to redirect where it doesn't belong to you.

Jonathan: How do you deal with that? How do you deal with those sorts of errors? Like, if you're trying to do things atomically, you still need to log in.

Kelli: Right. I still need to create the person that's going to be doing these things, I'll do that with FactoryGirl. I'll have FactoryGirl return a person object. Then I'll take that person object and use, in this instance, for instance an API key that gets returned with that, and pass it in the header with the next request.

Jonathan: Yeah, OK. It would be two lines.

Kelli: Yes.

Jonathan: Everything about this is just so easy to read and, oh man, it's great. It looks really good.

Kelli: Thank you.

Jonathan: You're welcome.

Kelli: Thank you. With an API, without any kind of graphical interface that you can load up there and look at, to me, testing feels even more important.

Jonathan: Yeah, you sent a screenshot. When you run it, it's on the command line, but it does this sort of nicely-formatted tabular layout.

Kelli: Yeah. That was a bit of verbose output, just to show you. The default is, you just get a green dot or an "f." And it's all in one line. A test fails, it'll show you, "This test failed performing this action, and this was the error message," and then you get a nice summary at the end. It gives you the random seed that it used when it created and when it ran those tests, in case you want to run things again in that order.

Jonathan: Cool. There must be other validate. These are just very binary, like, "Should not".

Kelli: Yeah, they're very basic.

Jonathan: "Should" and "be valid" gives me the impression that there are other options that you could put there.

Kelli: Yeah, there are several. I haven't used R-Spec a ton, I'm sure there are many that I'm not aware of. But for this particular instance, that actually brings up another good point, because, how do you test something in R-Spec when you don't have a view?

For me, I found the best way to do it was just to use the controller testing, then just take the response that comes back from that. For instance, you probably see them in there, I'll get the response body and I'll parse that JSON object that gets sent back, into a hash table, and just verify that some of the information that I'm looking for is in fact there.

Jonathan: Oh, yeah, I see.

Kelli: Make sure the status code is what it's supposed to be, that kind of thing.

Jonathan: I was looking at the model test before this. The controller tests are a lot more...I think they're a little bit more what I expected. For each block, for each test, there's five or six lines where you're setting the request environment, headers basically. God, this is awesome! It's really good! I'm sorry this is just audio. We have to do a screen cast of this. It is great!

Kelli: [laughs] We have to do one we can show off now!

Jonathan: Yeah, totally! We should do something like, I don't know, Avaya is almost too simple. Just do a simple API. I've got the perfect one. Do the Kilo API.

Kelli: Yeah, that'd be great.

Jonathan: It's got just enough to it where it's basically people and entries. You've got two different kinds of objects. Yeah, it'd be so great if we could do that. This is great.

Kelli: Thank you.

Jonathan: It's a scintillating podcast, I know. Me saying, "Wow, this code is gorgeous!"

[laughter]

Jonathan: But we have to do more with this.

Kelli: Yeah. I'd get bits of it done and I'd walk out of the office, and Richard would be like, "You're smiling!" And I said, "Yes, very rarely do I write code that I want to print and frame!" "But today I have!" [laughs]

Jonathan: Yeah. We have to do a screen cast of this, where you're walking through it, and I'll ask questions. I'll be the dumb guy, like, "Why did you do that?" or "How do you do this?" or "You skipped over a piece that's obvious to you!" and see if we can. Because, dear listener, a big piece of what we want to do is not just evangelize it, but actually empower people to do this, because the more of this, the better.

Holy mackerel. This is it for me for PHP. I've said this six times on the podcast, like, half a dozen times, I've been like, "I quit PHP!" But this is really amazing. Dang, enough of me gushing.

Kelli: No, no, you can continue. It's OK!

Jonathan: Compare this to some of the code we've looked at lately.

Kelli: Compare this to some of the code I've written in...

Jonathan: No. I don't want to name names, Symphony [coughs] , but oh my God! If Thomas Love from Infem is listening, he's probably said "I told you so" about 25 times. Because he did, he told me so a year ago.

Kelli: Yeah, and I should apologize, because he told you so and we ignored him and I'm about to hand him that project.

[laughter]

Kelli: He gets the Sinatra version! Which is still better than the PHP version but...

Jonathan: Yeah, that's true. It's funny because one of my arguments was, why bring in all that View stuff when it's for an API? He's like, "Yeah, but you always have an admin console." You just said in the Podcast you used the View files.

Kelli: That's the very first thing I did.

Jonathan: Thomas Love, you were right. Those guys know their stuff. Do we have more to talk about? I feel we need to do something a little bit more visual, in order to go deeper.

Kelli: Mainly just the testing. I will say, without the automated testing, there were parts of this API that I would still be pulling my hair out and getting nowhere.

It's something that sounds like it's annoying to do at first, but in this case, it really was a huge time saver. I'm sure it saved me hours last night. For instance, if you're dealing with something where you have to upload a bunch of files at a time, deal with each one separately and have to do all that manually through curl or something like that, forget it.

Jonathan: You can't reliably do it, and say, "Yeah, I tested it properly." All right, dear listener, if you'd be interested in seeing a live screen cast with "Dumb Guy Watching Kelli" program. Let us know on Twitter because, I would certainly like to do that, but only if people are interested.

Kelli: [laughs] It would be fun to do.

Jonathan: Yeah. All right, cool. That's our show for this week. I'm Jonathan Stark.

Kelli: I'm Kelli Shaver.

Jonathan: We hope you join us again next week for the next podcast. Bye.

Kelli: Bye.
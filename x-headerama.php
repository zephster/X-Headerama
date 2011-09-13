<?php
/***
* X-Headerama <antizeph@gmail.com>
* 09/13/2011
* Thanks, Reddit!
*/

function futurama()
{
    $bender = array(
        "Bite my shiny metal ass!",
        "This is the worst kind of discrimination. The kind against me!",
        "Oh. Your. God.",
        "My life, and by extension everyone else's is meaningless.",
        "I'm Bender, baby, please insert liquor!",
        "They're not very heavy, but you don't hear me not complaning.",
        "Everybody's a jerk. You, me, this jerk.",
        "I hate the people that love me and they hate me.",
        "Do I preach to you while you're lying stoned in the gutter? No.",
        "Tempers are wearing thin. Let's hope some robot doesn't kill everybody.",
        "Bite my shiny metal ass!",
        "I'm gonna go build my own theme park! With blackjack and hookers! In fact, forget the park!",
        "That's no alien spaceship-that's my ass!",
        "Bribe is such an ugly word. I prefer extortion. The X makes it sound cool.",
        "Life can be hilariously cruel.",
        "Leela cracked corn, and i dont care. Fry cracked corn, i still dont care. Bender cracked corn, and he is great! Take that you stupid corn!",
        "Fry, as you know, there are lots of things I'm willing to kill for: jewels, vengeance, Father O'Mallee's weed-whacker. But at long last I've found something I'm willing to die for... This mindless turtle.",
        "Let's face it, comedy's a dead art form. Tragedy, now that's funny.",
        "Great is OK, but amazing would be GREAT.",
        "Congratulations Fry, you've snagged the perfect girlfriend. Amy's rich, she's probably got other characteristics...",
        "Who are you, and why should I care?",
        "What kind of party is this? There's no booze and only one hooker.",
        "I was thinking Benderbrau if it's an ale, Botweiser if it's a lager.",
        "Ahhh, what an awful dream. Ones and zeroes everywhere... and I thought I saw a two.",
        "What do you mean 'we,' flesh-tube?",
        "I guess a robot would have to be crazy to wanna' be a folk-singer..."
    );

    $fry = array(
        "It's just like the story of the grasshopper and the octopus. All year long, the grasshopper kept burying acorns for winter, while the octopus mooched off his girlfriend and watched TV. But then the winter came, and the grasshopper died, and the octopus ate all his acorns and also he got a racecar. Is any of this getting through to you?",
        "Good 'ol Coney Island College. Go Whitefish!",
        "Now that's what I call a thousand years of progress: a Bavarian Cream dog that's self-microwaving!",
        "I'm doing my job—there's Amy. I spend a few hours selecting a candy from the machine—there's Amy. I wake up the morning after sleeping with Amy—there's Amy!",
        "I always thought it was real like pro wrestling but it's fixed like boxing.",
        "I'm experienced with foraging. I used to find edible mushrooms on my bath mat!",
        "Poor Bender, you're seeing things. You've been drinking too much. Or too little. I forget how it works with you. Anyway, you haven't drunk exactly the right amount.",
        "Words. Nothing but sweet, sweet words that turn into bitter orange wax in my ears.",
        "All right, all right, if it will make you happy, I will overthrow society.",
        "Goodbye, friends. I never thought I'd die like this. But I always really, really hoped.",
        "Professor, I've never seen you so cheerful. What the hell's wrong with you?",
        "Space, it seems to go on and on forever. But then you get to the end and a gorilla starts throwing barrels at you.",
        "It's the future! My parents, my coworkers, my girlfriend. I'll never see any of them again! Yahooo!"    
    );

    $ZOIDBERG = array(
        "You don't want to end up old and lonely like ZOIDBERG (cries).",
        "It's toe-tappingly tragic.",
        "I finally learned what it's like to be a grandmother; subjugated, yet honored.",
        "I'll just turn the wheel to maximum fastness.",
        "Your music is bad, and you should feel bad!",
        "Yippe ki yay! You'll never guess where I have been!",
        "What you guys up to tonight. Im up for whatever.",
        "I have mail order degrees in murder-ology and murder-ometry.",
        "Friends, a guinea pig tricked me!",
        "A buffet.... oh if only i'd brought my wallet with me.",
        "You still have your old pal Zoidberg. YOU ALL HAVE ZOIDBERG.",
        "Ain't Got no cash, ain't got no style, ladies vomit when I smile, but does Zoidberg worry?",
        "I am Zoidberg, home owner!",
        "These night crawlers though juicy, mmm very very juicy, would not be good.",
        "You have no nose on your face. Where it is I can't say, but in your face it is not.",
        "And why did I have to take a cab?",
        "My house! It burned down! How did this happen?!",
        "Your student loans have been repayed? Then how about lending your old pal Zoidberg a few bucks, Mr Millionaire.",
        "Stop! Stop! I admit it! My people ate them all! We kept saying \"One more can't hurt\" and then they were gone, we're sorry!"
    );
    
    $goodnewseveryone = array(
        'X-Bender' => $bender,
        'X-Fry' => $fry,
        'X-Zoidberg' => $ZOIDBERG
    );
    
    $ohmy = array_rand($goodnewseveryone);    
    $badnews = $goodnewseveryone[$ohmy][rand(0,count($goodnewseveryone[$ohmy])-1)];    
    return header($ohmy . ': ' . $badnews);
}

//call this before any output in your script
futurama();


/* eof */
### Original goal:

The goal of this project was simply to roll a 6 sided dice. It was meant to help me get comfortable with writing PHP from scratch, and researching what I didn't know, or couldn't remember. Throughout this project, I confronted my fear of starting projects, and experimenting with completed projects (discussed later)



#### How the project evolved:

To start the project I asked myself one simple question, "What do I need first?" The answer was suprisingly simple... I needed something for a user to interact with. It doesn't help I build an extravagant block of code if I have no input. so I created a simple HTML form with a single button to roll the dice.



Then I needed to verify that the button was actually pressed. So I built an 'if' statement to do this

&#x09;- if($\_SERVER\["REQUEST\_METHOD"] === "POST") {

&#x09;	if (isset($\_POST\["button"]))



With that done, I could finally move onto the logic of actually rolling the die. This started with a simple $dice\_roll = random\_int(1, 6); (I won't lie, I had to look up how to generate a random number).



Then I pushed the random number back to the browser to be displayed, so the user knew what they had rolled.



### Current functionality:

I then started to consider other things. I'm starting a DnD campaign soon, so I figured, "Hy, why not create the dice I need for this?"



And so I did. I looked up how to created a dropdown menu in HTML, created it with the needed dice. then i removed my randomiser logic, and instead used a switch statement to determine which type of die had been selected, and inserted my randomizer logic into each case.


Then I got to thinking, "What happens when I need to roll more than one dice?" So I looked at my code and realised I could do this by giving the user a finite amount of dice to roll (for now) and then use a while loop to iterate each dice roll. I then needed to store each roll, so I wasn't just displaying the last rolled die. To do this, I changed my variable '$dice\_roll' to an array.



Now I had to remember how to actually print the array to the browser... which I had very much forgotten about implode(). So that was another thing to look up, lol.



### What I learned:

This project taught me a lot, in a sense. It taught me how to approach a project. I've always battled with seeing the end result, instead of seeing each component. This taught me how to do that. I had a simple concept to begin with, and instead of trying to build everything at once, I asked myself what needs to happen first, and then continued asking what happens next.



I also learnt how to create dropdown menus in HTML, which was actually a lot of fun.



But most importantly, I learn that I am capable of doing it. I just need to give myself a little push, and a little guidance.



### Future plans:

There's a few things I want to look into:

* During my research, I came across an element called 'match', which I don't think I've used before, and is supposed to be better for what I'm doing than a switch statement. I'm curious to find out what match does, and how it's structure looks compared to switch.
* I also want to refactor my switch statement, which I might do first. Instead of repeating the while loop for each case, I can instead determine the number of sides the dice rolled have with the switch statement, and then run the while loop once using the number of sides after the switch statement
* I was sitting for a bit, just rolling the dice, and thought, "what if I wanted to roll a custom number of sides? ie. 42. For fun. so I'm going to look into letting the user decide how many sides the die should have.
* And lastly, in DnD, you often need to sum up the total of the dice you roll. For example, if you cast inflict wounds, you roll 3d10. So I'm also going to add a function to add the total of all dice rolled.





### Future Updates:


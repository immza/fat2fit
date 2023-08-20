function getBotResponse(input) {
    //rock paper scissors
    if (input == "1") {
        return "You are important!";
    } else if (input == "2") {
        return "Your health should be your number one priority!";
    } else if (input == "3") {
        return "You are your biggest competitor!";
    }else if (input == "4") {
        return "You can achieve anything you set your eyes to!";
    }else if (input == "5") {
        return "You can be great!";
    }else if (input=="6"){
        return "You are unstoppable!"
    }else if (input == "7") {
        return "Health is wealth!";
    }else if (input == "8") {
        return "Don't look back. You are not going there!";
    }else if (input == "9") {
        return "Believe and Achieve!";
    }else if (input == "suicide") {
        return "Your life is precious!";
    }else if (input == "Suicide") {
        return "Your life is precious!";
    }else if (input == "SUICIDE") {
        return "Your life is precious!";
    }

    // Simple responses
    if (input == "Hello") {
        return "Hello there! Welcome to fatTofit!";
    } else if (input == "goodbye")  {
        return "Talk to you later!";
    } else if (input == "bye")  {
        return "Talk to you later!";
    }else if (input == "BYE")  {
        return "Talk to you later!";
    }else if (input == "tata")  {
        return "Talk to you later!";
    }else if (input == "hi") {
        return "Hello there! Welcome to fatTofit!";
    } else if (input == "hello") {
        return "Hello there! Welcome to fatTofit!";
    } else if (input == "HELLO") {
        return "Hello there! Welcome to fatTofit!";
    }else if (input=="details"){
        return "We have our personal health tracking calculator, product space that includes workout attire and related health products, our very own daily blog which brings all the latest fitness related articles. We also got targeted body muscle group  workout generator that you can add to your fitness routine"
    }else if (input == "products") {
        return " For now we are only limited to Fitness attires and health products. ";
    } 
    else if (input == "payment") {
        return "Besides cash on delivery, we accept cards only.";
    }  
    else {
        return "Try asking something else!";
    }


}
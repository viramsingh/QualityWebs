/* Collapsing and showing message box */
var coll = document.getElementsByClassName("collapsible");

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");

        var content = this.nextElementSibling;

        if (content.style.maxHeight) {
            content.style.maxHeight = null;
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
        }

    });
}
/*--------------Collapsing and showing message box End-------------*/

function getTime() {
    let today = new Date();
    hours = today.getHours();
    minutes = today.getMinutes();

    if (hours < 10) {
        hours = "0" + hours; //For adding 0 ahead 
    }

    if (minutes < 10) {
        minutes = "0" + minutes;
    }

    let time = hours + ":" + minutes;
    return time;
}

function firstBotMessage() {
    let firstMessage = "How may i help you?"
    document.getElementById("botStarterMessage").innerHTML = '<p class="botText"><span>' + firstMessage + '</span></p>';

    let time = getTime();

    $("#chat-timestamp").append(time);
    document.getElementById("userInput").scrollIntoView(false);

}

firstBotMessage();

function getHardResponse(userText) {
    let botResponse = getBotResponse(userText);
    let botHtml = '<p class="botText"><span>' + botResponse + '</span></p>';
    $("#chatbox").append(botHtml);

    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

function getResponse() {
    let userText = $("#textInput").val();
    if (userText == "") {
        userText = "please enter text";
        return false;
    }

    let userHtml = '<p class="userText"><span>' + userText + '</span></p>';

    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);
    // for setting time out
    setTimeout(() => {
        getHardResponse(userText);

    }, 2000)

}

function buttonSendText(sampleText) {
    let userHtml = '<p class="userText"><span>' + sampleText + '</span></p>';
    $("#textInput").val("");
    $("#chatbox").append(userHtml);
    document.getElementById("chat-bar-bottom").scrollIntoView(true);
}

function sendButton() {
    getResponse();

}

function heartButton() {
    buttonSendText("you clicked Paw !!")
}

function getBotResponse(input) {
    input = input.toLowerCase();
    //rock paper scissors
    if (input == "rock") {
        return "paper";
    } else if (input == "paper") {
        return "scissors";
    } else if (input == "scissors") {
        return "rock";
    }else if(input == "can you play with me"){
        return "Yes Sure We will play";
    }

    //Complex Response

    let findIndex = input.indexOf("developer")
    let findIndex2 = input.indexOf("creater")
    if(findIndex >= 0 || findIndex2 >=0){
        return "Ashutosh parakh & Nidhi Bhati is my Developer's";
    }
    findIndex = input.indexOf("website")
    if(findIndex >=0){
        return "Please Contact Our Team For the Same +91 9131090016";
    }


    // Simple responses
    if (input == "hello") {
        return "Hello there!";
    } else if (input == "goodbye") {
        return "Talk to you later!";
    } else if(input == "hey"){
        return "What's up Dude";
    }
    else if(input == "name"){
        return "My name is 121 ";
    }else{
        return "I am just A Small Kid .please wait for my developers to teach me";
    }
}
// for Reconizing enter
$("#textInput").keypress(function(e){
    if(e.which == 13){
        getResponse();
    }
});

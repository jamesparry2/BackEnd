var question = [];
question [0] = ["How do you print 'Hello World' to the command line?"];
question [1] = ["How do you define a for loop?"];

var answer = [];
answer [0] = ["System.out.println('Hello World')"];
answer [1] = ["Some answer"];

function SingleQuestion(){
    
    var output = Math.floor(Math.random() * question.length);
    
    document.getElementById('question').innerHTML = '<p id = "Q1">' + question[output] + '<p><br>';    
    document.getElementById('answers').innerHTML = '<input id = "answerPoint" type="text" value="">'
}

function inputAnswers(){
    var currentQuestion = document.getElementById('Q1').textContent;
    var number = singleQuestions(currentQuestion);
    var correctAnswer = answer[number];
    
    var userInput = document.getElementById('answerPoint').value;
    document.getElementById('answerPoint').value = "";
    
    if(userInput == correctAnswer){
        alert("Correct");
    } else {
        alert("Not Correct");
    }
}

function singleQuestions(currentQuestion){
    for(var i = 0; i < question.length; i++){
        if(currentQuestion == question[i]){
            return i;
        }
    }
    return null;
}

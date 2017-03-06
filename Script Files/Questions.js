//The Arrays Required the input mulitple choice questions to function
var forMultiQuestion = [];
forMultiQuestion[0] = ["What kind of loop executes the bloke of code first?"];
forMultiQuestion[1] = ["When would you use a While loop?"];
forMultiQuestion[2] = ["When would you use a For loop?"];
forMultiQuestion[3] = ["What is the format of the foor loop?"];
    
var forMultiChoice = [];
forMultiChoice[0] = ["While loop", "For loop", "The Do loop"];
forMultiChoice[1] = ["When you know how many iterations there are",
             "When you do not know how many iteration there are",
             "When you want to know how many iterations are left"];
forMultiChoice[2] = ["When you want to know how many iterations are left",
             "When you do not know how many iteration there are",
             "When you know how many iterations there are"];
forMultiChoice[3] = ["(intalize, check, count)",
             "(check, count, intalize)",
             "(count, intalize, check)"];
    
var forMultiAnswer = [];
forMultiAnswer[0] = ["The Do loop"];
forMultiAnswer[1] = ["When you do not know how many iteration there are"];
forMultiAnswer[2] = ["When you know how many iterations there are"];
forMultiAnswer[3] = ["(intalize: check: count)"];

//----------------------------------------------------------------------------------------------------------------------
//The Arrays Required the input questions to function

var forSingeQuestion = [];
forSingeQuestion [0] = ["What are for loops commonly known as?"];
forSingeQuestion [1] = ["The statements that make up the block of code in the loops are known as?"];
forSingeQuestion [2] = ["Are all the statements excuted together or independently in the for loop?"];
forSingeQuestion [3] = ["Name the example given in this page where loops can be useful."];

var forSingleAnswer = [];
forSingleAnswer [0] = ["Count-Cotrolled"];
forSingleAnswer [1] = ["Body"];
forSingleAnswer [2] = ["Independently"];
forSingleAnswer [3] = ["Calculations"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var conditionMultiQuestion = [];
conditionMultiQuestion[0] = ["Can an if statement has multiple conditions?"];
conditionMultiQuestion[1] = ["Which following code segments is the correct syntax?"];
conditionMultiQuestion[2] = ["Is it bad practice to have nested if statements?"];
conditionMultiQuestion[3] = ["Does using nested if statements add an extra level of complexity?"];

var conditionMultiChoice = [];
conditionMultiChoice[0] = ["Yes", "No", "Irrelevant"];
conditionMultiChoice[1] = ["if{block of code}", "if(condition){block of code}", "if{block of code}(condition)"];
conditionMultiChoice[2] = ["Yes", "No", "Irrelevant"];
conditionMultiChoice[3] = ["Yes", "No", "Irrelevant"];

var conditionMultiAnswer = [];
conditionMultiAnswer [0] = ["Yes"];
conditionMultiAnswer [1] = ["if(condition){block of code}"];
conditionMultiAnswer [2] = ["No"];
conditionMultiAnswer [3] = ["Yes"];


//----------------------------------------------------------------------------------------------------------------

var conditionSingle = [];
conditionSingle [0] = ["What is the sytanx for the Negation operator?"];
conditionSingle [1] = ["What is the syntax for the And operator?"];
conditionSingle [2] = ["What is the syntax for the Or operation?"];
conditionSingle [3] = ["When we want to check an inverse of a boolean variable, what operator would we commonly use?"];

var conditionAnswer = [];
conditionAnswer [0] = ["!"];
conditionAnswer [1] = ["&"];
conditionAnswer [2] = ["||"];
conditionAnswer [3] = ["!"];


//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiDataFundementals = [];
multiDataFundementals [0] = ["When chosing a variable name are we allowed to chose any name for the variable?"];
multiDataFundementals [1] = ["What data type would you use to hold a sentence?"];
multiDataFundementals [2] = ["Which one has the correct format for variable constants?"];
multiDataFundementals [3] = ["How many of the basic operators are in Java?"];

var multiDataChoice = [];
multiDataChoice [0] = ["Yes", "No", "It's irrelevant"];
multiDataChoice [1] = ["Char", "String", "Int"];
multiDataChoice [2] = ["double Max_Cap", "double MAX_CAP", "final double MAX_CAP"];
multiDataChoice [3] = ["2","3","4"];

var multiDataAnswer = [];
multiDataAnswer [0] = ["No"];
multiDataAnswer [1] = ["String"];
multiDataAnswer [2] = ["final double MAX_CAP"];
multiDataAnswer [3] = ["4"];


//----------------------------------------------------------------------------------------------------------------

var singleDataFun = [];
singleDataFun [0] = ["How would you declare a immutable final max_cap using correct conventions for Java?"];
singleDataFun [1] = ["What is the line to import the scanner in Java?"];
singleDataFun [2] = ["How would you create a Scanner object in Java?"];
singleDataFun [3] = ["H-ow would you take in a input and store it in a variable called input?"];

var singleDataAnswer = [];
singleDataAnswer [0] = ["final double MAX_CAP"];
singleDataAnswer [1] = ["import java.util.Scanner"];
singleDataAnswer [2] = ["Scanner in = new Scanner(System.in)"];
singleDataAnswer [3] = ["int input = in.nextInt()"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiCollectionQuestion = [];
multiCollectionQuestion [0] = ["Which one of the following is an incorrect difference between Arrays and ArrayLists"];
multiCollectionQuestion [1] = ["Out of the ones named in the first paragraph, which data set has not been said(Arrays, List and ArrayLists)"];
multiCollectionQuestion [2] = ["Is Dequeu part of the Collection Framework?"];
multiCollectionQuestion [3] = ["Which following function allows you to add to an Array?"];

var multiCollectionChoice = [];
multiCollectionChoice [0] = ["Arrays are static and ArrayLists are Dynamic",
                             "ArayLists can be multi-demensional while Arrays can not",
                             "Arrays performance is better than ArrayLists"];
multiCollectionChoice [1] = ["Collection",
                             "Queue",
                             "Iterator"];
multiCollectionChoice [2] = ["Yes", "No", "Unsure"];
multiCollectionChoice [3] = ["add()", "Add()", "add(Object o)"];

var multiCollectionAnswer = [];
multiCollectionAnswer [0] = ["ArayLists can be multi-demensional while Arrays can not"];
multiCollectionAnswer [1] = ["Queue"];
multiCollectionAnswer [2] = ["Yes"];
multiCollectionAnswer [3] = ["add(Object O)"];

//----------------------------------------------------------------------------------------------------------------

var singleCollectionQuestion = [];
singleCollectionQuestion [0] = ["What does the collection framework consit of?"];
singleCollectionQuestion [1] = ["Which import is the collection framework stored in?"];
singleCollectionQuestion [2] = ["If you want to access a 2D Array, how many for loops would you need?"];
singleCollectionQuestion [3] = ["What does API stand for?"];

var singleCollectionAnswer = [];
singleCollectionAnswer [0] = ["Data Stuctures and Methods"]; 
singleCollectionAnswer [1] = ["java.util"];
singleCollectionAnswer [2] = ["2"];
singleCollectionAnswer [3] = ["Application Program Interface"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiMethodQuestion = [];
multiMethodQuestion [0] = ["How many input parameters does Math.pow have from what you have been shown?"];
multiMethodQuestion [1] = ["What doe methods allow us to do?"];
multiMethodQuestion [2] = ["What does the method signature state?"];
multiMethodQuestion [3] = ["The block of code in the method is called?"];

var multiMethodChoice = [];
multiMethodChoice [0] = ["1","2","3"];
multiMethodChoice [1] = ["Allows us to ease alteration of code", "Reusable code","All the above"];
multiMethodChoice [2] = ["The accessor of the method", "The return type", "The input type"];
multiMethodChoice [3] = ["The body", "The legs", "The head"];

var multiMethodAnswer = [];
multiMethodAnswer [0] = ["2"];
multiMethodAnswer [1] = ["All the above"];
multiMethodAnswer [2] = ["The input type"];
multiMethodAnswer [3] = ["The body"];

//----------------------------------------------------------------------------------------------------------------

var singleMethodQuestion = [];
singleMethodQuestion [0] = ["Define a method that is called squareRoot and takes in a int parameter and returns an int"];
singleMethodQuestion [1] = ["What happens when a return statement is processed?"];
singleMethodQuestion [2] = ["What methods can access a global variable?"];
singleMethodQuestion [3] = ["What methods can access a local variable?"];

var singleMethodAnswer = [];
singleMethodAnswer [0] = ["public int squareRoot(int input)"];
singleMethodAnswer [1] = ["The method exits immediately"];
singleMethodAnswer [2] = ["All methods"];
singleMethodAnswer [3] = ["Within the method it's defined in"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiOOSectionQuestion = [];
multiOOSectionQuestion [0] = ["Is the Object-Orientation Paradigm a popular idea?"];
multiOOSectionQuestion [1] = ["What does a class need to contain?"];
multiOOSectionQuestion [2] = ["What is a mutator method used for?"];
multiOOSectionQuestion [3] = ["What is encapsulation?"];

var multiOOSectionChoices = [];
multiOOSectionChoices [0] = ["Yes", "No", "It's an unknow idea"];
multiOOSectionChoices [1] = ["Attributes", "Behaviours", "Attributes and Behaviours"];
multiOOSectionChoices [2] = ["Access a private variable", "Change the value of a private variable", "Perform on operation of the defined object"];
multiOOSectionChoices [3] = ["To hide data", "To share the data", "To allow easy access to the data"];

var multiOOSectionAnswers = [];
multiOOSectionAnswers [0] = ["Yes"];
multiOOSectionAnswers [1] = ["Attributes and Behaviours"];
multiOOSectionAnswers [2] = ["Change the value of a private variable"];
multiOOSectionAnswers [3] = ["To hide data"];

//----------------------------------------------------------------------------------------------------------------

var singleOOSectionQuestions = [];
singleOOSectionQuestions [0] = ["Declare a contrsuctor for a student with a name parameter"];
singleOOSectionQuestions [1] = ["Declare a accessor method for a Student Number"];
singleOOSectionQuestions [2] = ["Declare a mutator method for a Student Name with a parameter called name"];
singleOOSectionQuestions [3] = ["Declare a private variable that holds a stundent number that's an int"];

var singleOOSectionAnswers = [];
singleOOSectionAnswers [0] = ["public Student(String name)"];
singleOOSectionAnswers [1] = ["pubic int getStudentNumber()"];
singleOOSectionAnswers [2] = ["public void setStudentNumber(String name)"];
singleOOSectionAnswers [3] = ["private int studentNumber"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiInheritanceQuestions = [];
multiInheritanceQuestions [0] = ["What is the relationship called between classes?"];
multiInheritanceQuestions [1] = ["What is a super class?"];
multiInheritanceQuestions [2] = ["What is a sub class?"];
multiInheritanceQuestions [3] = ["If you change the implementation of a method in the subclass, what is it?"];

var multiInheritanceChoice = [];
multiInheritanceChoice [0] = ["IS-A", "A-IS", "AS-A"];
multiInheritanceChoice [1] = ["A detailed class", "A general class", "A specfic class"];
multiInheritanceChoice [2] = ["A general class", "A specfic class", "A detailed class"];
multiInheritanceChoice [3] = ["Overloading", "Overriding"];

var multiInheritanceAnswer = [];
multiInheritanceAnswer [0] = ["IS-A"];
multiInheritanceAnswer [1] = ["A general class"];
multiInheritanceAnswer [2] = ["A specfic class"];
multiInheritanceAnswer [3] = ["Overriding"];


//----------------------------------------------------------------------------------------------------------------

var singleInheritanceQuestions = [];
singleInheritanceQuestions [0] = ["What is they keyword used to inherit from a superclass"];
singleInheritanceQuestions [1] = ["What is Polymorphism?"];
singleInheritanceQuestions [2] = ["Create a polymorphism object with a Vehicle object called item1 and it links with a Car"];
singleInheritanceQuestions [3] = ["Is good Polymorphism good for scalability?(Yes or No)"];

var singleInheritanceAnswers = [];
singleInheritanceAnswers [0] = ["extends"];
singleInheritanceAnswers [1] = ["Object can take on many forms"];
singleInheritanceAnswers [2] = ["Vehicle item1 = new Car()"];
singleInheritanceAnswers [3] = ["Yes"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiTryCatchQuestions = [];
multiTryCatchQuestions [0] = ["How many aspects of errors in programming are there?"];
multiTryCatchQuestions [1] = ["What error does an Array being overfilled cause?"];
multiTryCatchQuestions [2] = ["How many error types are there?"];
multiTryCatchQuestions [3] = ["If you need to execute a block of code, even when you the try/catch executes, what's it keyword required?"];

var multiTryCatchChoices = [];
multiTryCatchChoices [0] = ["1","2","3"];
multiTryCatchChoices [1] = ["ArrayIndexOut", "ArrayIndexOutOfBoundsException","ArrayIndexOutOfBounds"];
multiTryCatchChoices [2] = ["1","2","3"];
multiTryCatchChoices [3] = ["throws", "throw", "finally"];

var multiTryCatchAnswers = [];
multiTryCatchAnswers [0] = ["2"];
multiTryCatchAnswers [1] = ["ArrayIndexOutOfBounds"];
multiTryCatchAnswers [2] = ["2"];
multiTryCatchAnswers [3] = ["finally"];

//----------------------------------------------------------------------------------------------------------------

var singleTryCatchQuestions = [];
singleTryCatchQuestions [0] = ["Add a throw statement to the main method(Add exception after it)"];
singleTryCatchQuestions [1] = ["What is the exception used for Arithmetic errors?"];
singleTryCatchQuestions [2] = ["If an exception represent a recovarable part in the program, what kind of error is it?"];
singleTryCatchQuestions [3] = ["If an exception represent a logical error in the program, what kind of error is it?"];

var singleTryCatchAnswers = [];
singleTryCatchAnswers [0] = ["public static void main(String [] args) throw exception"];
singleTryCatchAnswers [1] = ["ArithmeticException"];
singleTryCatchAnswers [2] = ["Checked Exception"];
singleTryCatchAnswers [3] = ["Unchecked Exception"];

//----------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------

var multiInputOutputQuestions = [];
multiInputOutputQuestions [0] = ["What event was a sucsfull example of reading data?"];
multiInputOutputQuestions [1] = ["To read in a file what kind of object to we intialize?"];
multiInputOutputQuestions [2] = ["Where do we normal throw the error for a FileNotFound Exception?"];
multiInputOutputQuestions [3] = ["To output a file what object do we need?"];

var multiInputOutputChoices = [];
multiInputOutputChoices [0] = ["WW1","WW2", "Vitenam War"];
multiInputOutputChoices [1] = ["File", "Scanner", "File and Scanner"];
multiInputOutputChoices [2] = ["On the object", "On the scanner", "On the main method"];
multiInputOutputChoices [3] = ["PrintWriter", "WriterPrint", "Print"];

var multiInputOutputAnswers = [];
multiInputOutputAnswers [0] = ["WW2"];
multiInputOutputAnswers [1] = ["File and Scanner"];
multiInputOutputAnswers [2] = ["On the main method"];
multiInputOutputAnswers [3] = ["PrintWriter"];

//----------------------------------------------------------------------------------------------------------------------

var singleInputOutputQuestion = [];
singleInputOutputQuestion [0] = ["Intialize a Scanner object with the input parameter called inputFile"];
singleInputOutputQuestion [1] = ["Which library must be imported for us to use Input/Output?"];
singleInputOutputQuestion [2] = ["Intialize a PrintWriter object with the input parameter called outputFile"];
singleInputOutputQuestion [3] = ["What method must you always call at the end on a Scanner and Writer?"];

var singleInputOutputAnswer = [];
singleInputOutputAnswer [0] = ["Scanner in = new Scanner(fileName)"];
singleInputOutputAnswer [1] = ["java.io"];
singleInputOutputAnswer [2] = ["PrintWriter out = new PrintWriter(outputFile)"];
singleInputOutputAnswer [3] = ["close()"];

//----------------------------------------------------------------------------------------------------------------------
var score = 0; // Finish the automatic changing tomorrow for Mastery Based Learning. Once done try and implement it in cookies so it hold the information          

//Function that will randomly decide which 
function DisplayQuestion(pageType){
    var multiChoiceQuestions;
    var multiChoices;
    var multiAnswers;
    var singleQuestions;
    var singleAnsers;
    
    switch(pageType){
        case 'loopPage':
            multiChoiceQuestions = forMultiQuestion;
            multiChoices = forMultiChoice;
            multiAnswers = forMultiAnswer;
            singleQuestions = forSingeQuestion;
            singleAnsers = forSingleAnswer;
            break;
        case 'conditions': 
            multiChoiceQuestions = conditionMultiQuestion;
            multiChoices = conditionMultiChoice;
            multiAnswers = conditionMultiAnswer;
            singleQuestions = conditionSingle;
            singleAnsers = conditionAnswer;
            break;
        case 'dataFundementals':
            multiChoiceQuestions = multiDataFundementals;
            multiChoices = multiDataChoice;
            multiAnswers = multiDataAnswer;
            singleQuestions = singleDataFun;
            singleAnsers = singleDataAnswer;
            break;
        case 'collections':
            multiChoiceQuestions = multiCollectionQuestion;
            multiChoices = multiCollectionChoice;
            multiAnswers = multiCollectionAnswer;
            singleQuestions = singleCollectionQuestion;
            singleAnsers = singleCollectionAnswer;
            break;
        case 'methods':
            multiChoiceQuestions = multiMethodQuestion;
            multiChoices = multiMethodChoice;
            multiAnswers = multiMethodAnswer;
            singleQuestions = singleMethodQuestion;
            singleAnsers = singleMethodAnswer;
            break;
        case 'ooSection':
            multiChoiceQuestions = multiOOSectionQuestion;
            multiChoices = multiOOSectionChoices;
            multiAnswers = multiOOSectionAnswers;
            singleQuestions = singleOOSectionQuestions;
            singleAnsers = singleOOSectionAnswers;
            break;
        case 'inheritance':
            multiChoiceQuestions = multiInheritanceQuestions;
            multiChoices = multiInheritanceChoice;
            multiAnswers = multiInheritanceAnswer;
            singleQuestions = singleInheritanceQuestions;
            singleAnsers = singleInheritanceAnswers;
            break;
        case 'tryCatch':
            multiChoiceQuestions = multiTryCatchQuestions;
            multiChoices = multiTryCatchChoices;
            multiAnswers = multiTryCatchAnswers;
            singleQuestions = singleTryCatchQuestions;
            singleAnsers = singleTryCatchAnswers;
            break;
        case 'inputOutput':
            multiChoiceQuestions = multiInputOutputQuestions;
            multiChoices = multiInputOutputChoices;
            multiAnswers = multiInputOutputAnswers;
            singleQuestions = singleInputOutputQuestion;
            singleAnsers = singleInputOutputAnswer;
            break;
    }
    
    var pageType2 = pageType;
    
    if(score < 6){
        var output = Math.floor(Math.random() * 2);
        if(output == 0){
            MultiQuest(multiChoiceQuestions, multiChoices, multiAnswers, pageType2);
        } else {
            SingleQuestion(singleQuestions, singleAnsers, pageType2);
        }
    } else {
        document.getElementById('question').innerHTML = '<p id = "Q1">Section completed<p><br>';
        document.getElementById('answers').innerHTML = '<p><p>';
        document.getElementById('button').innerHTML = '<p></p>';
    }
}

var questionArray = [];
var answerArray = [];
var pageType1;

// Below are the required fucntions needed for the mulitple choice segment for the ADHD/Anexity aspect pedagogical needs
function MultiQuest(questions, choices, answer, pageType){
    var output = Math.floor(Math.random() * (questions.length));
    var choicesOut = [];
    
    questionArray = questions.toString().split(',');
    answerArray = answer.toString().split(',');
    pageType1 = pageType;
    
    //Testing to see the content
    console.log(questionArray);
    console.log(answerArray);
    
    //Testing to see it is an object, which it is, so why the fuck is the method saying it's undefined!
    console.log(typeof(questionArray));
    console.log(typeof(answerArray));
    
    document.getElementById('question').innerHTML = '<p id = "Q1">' + questions[output] + '<p><br>';
        
    for(var k = 0;k < choices[output].length; k++ ){
        choicesOut.push('<p><input id = "choice'+[k]+'" type = "radio" name = "option" value="'+choices[output][k]+'">' + choices[output][k] + '<p>');    
    }
    document.getElementById('answers').innerHTML = choicesOut.join("");
    document.getElementById('button').innerHTML = '<p><button onClick = "MultiAnswer();">Submit</button></p>';
    document.getElementById('score').innerHTML = '<p>' + score + '<p>';
}

function MultiAnswer(){
    
    var currentQuestion = document.getElementById('Q1').textContent;
    var number = multiQuestions(currentQuestion, questionArray);
    var correctAnswer = answerArray[number];
    var givenAnswer;
    
    var options = document.getElementsByName('option');
    var i
    for(i = 0; i < options.length; i++){
        if(options[i].checked){
            givenAnswer = options[i].value;
        }
    }
    
    if(givenAnswer == correctAnswer){
        alert("Right Answer!");
        score++;
    } else {
        alert("Wrong Answer!");
        score = 0;
    }
    i = 0;
    DisplayQuestion(pageType1);
}

function multiQuestions(currentQuestion, whichArray){
    for(var i = 0; i < whichArray.length; i++){
        if(currentQuestion == whichArray[i]){
            return i;
        }
    }
    return null;
}

//------------------------------------------------------------------------------------
// Below are the required fucntions needed for the input segment for the ADHD/Anexity aspect pedagogical needs

function SingleQuestion(question, answer, pageType){
    
    var output = Math.floor(Math.random() * question.length);
    
    questionArray = question.toString().split(',');
    answerArray = answer.toString().split(',');
    
    document.getElementById('question').innerHTML = '<p id = "Q1">' + question[output] + '<p><br>';    
    document.getElementById('answers').innerHTML = '<input id = "answerPoint" type="text" value="">';
    document.getElementById('button').innerHTML = '<p><button onClick = "inputAnswers();">Submit</button></p>';
    document.getElementById('score').innerHTML = '<p>' + score + '<p>';
}

function inputAnswers(question, answer){
    var currentQuestion = document.getElementById('Q1').textContent;
    var number = singleQuestions(currentQuestion, questionArray);
    var correctAnswer = answerArray[number];
    
    var userInput = document.getElementById('answerPoint').value;
    document.getElementById('answerPoint').value = "";
    
    if(userInput == correctAnswer){
        alert("Correct");
        score++;
    } else {
        alert("Not Correct");
        score = 0;
    }
     DisplayQuestion(pageType1);
}

function singleQuestions(currentQuestion, question){
    for(var i = 0; i < question.length; i++){
        if(currentQuestion == question[i]){
            return i;
        }
    }
    return null;
}

//------------------------------------------------------------------------

var cookies = {};

function saveCookies(){
    myCookies = document.getElementById('score').textContent;
    //document.cookie = 'score='score;
    for(var key in myCookies){
        cookieString = key+'='+myCookies+';';
        document.cookie = cookieString;
    }
    document.getElementById('score').innerHTML = document.cookie;
}

function loadCookies(){
    myCookies = {};
    var kv = document.cookie.split(';');
    for(var id in kv){
        var cookie =kv[id].split('=');
        myCookies[cookie[0].trim()] = cookie[1];
    }
    
    document.getElementById('score').value = myCookies['_score'];
}
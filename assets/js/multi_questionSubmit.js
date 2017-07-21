/**
 * Created by sajithaliyanage on 5/8/17.
 */

//create main JSON array
function multi_submitQuestion(){
    //getting data from the form
    var question = document.getElementById('question').value;
    var qtitle = document.getElementById('qtitle').value;
    var a1 = document.getElementById('a1').value;
    var a2 = document.getElementById('a2').value;
    var a3 = document.getElementById('a3').value;
    var a4 = document.getElementById('a4').value;
    var correctOne = document.getElementById('correctNum').value;


    //add data to firebase
    var addQuestions = firebase.database().ref().child("multquestions");
    var jsonVariables = {
        answer: parseInt(correctOne) ,
        title: qtitle,
        question: question,
        options: [a1,a2,a3,a4]
    };

    addQuestions.push(jsonVariables);


    location.reload();
}

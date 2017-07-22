/**
 * Created by sajithaliyanage on 5/8/17.
 */

//reference to firebase database
var ref = firebase.database().ref().child("Questions");
var currentID;
var questionNUmber;

ref.on("value", function(snapshot) {
    console.log(snapshot.val());
    currentID = parseInt(snapshot.val().currentID);
    questionNUmber = snapshot.val().questionNo;
    successNUmber = snapshot.val().successNo;
    document.getElementById('qno').value = questionNUmber;
    document.getElementById('sno').value = successNUmber;
}, function (error) {
    console.log("Error: " + error.code);
});

$("#prospects_form").submit(function(e) {
    e.preventDefault();
});

//create main JSON array
function submitQuestion(){
    //getting data from the form
    var title = document.getElementById('title').value;
    var des = document.getElementById('des').value;
    var sno = document.getElementById('sno').value;
    var mainTags = document.getElementById('input-tags').value.split('`');
    var subTags = document.getElementById('input-tags2').value.split('`');
    var correct = document.getElementById('input-tags3').value.split('`');

    //console.log(correct);
    var mainTagArray = [];
    var subTagArray = [];
    var correctArray = [];
    var correctSequence ="";

    for (var i = 0; i < mainTags.length; i++) {
        var nCurrentID = currentID + i;
        mainTagArray.push({
            tag_name: mainTags[i],
            id:nCurrentID
        });
    }


    for (var j = 0; j < subTags.length; j++) {
        var newCurrentID = nCurrentID + j +1 ;
        //console.log(newCurrentID);
        subTagArray.push({
            tag_name: subTags[j],
            id:newCurrentID
        });
    }

    for(var m=0;m<correct.length;m++){
        if(correct[m].indexOf('|') == 0){
            correct[m] = '|';
        }
    }

    //check this--------------------------------------------------------------------------------------------------
    for(var l=0;l<correct.length;l++){
        if (mainTags.indexOf(correct[l]) > -1) {
            for(var e=0;e< mainTagArray.length;e++){
                if(correct[l] == mainTagArray[e].tag_name){
                    correct[l] = mainTagArray[e].id
                }
            }
        } else if (subTags.indexOf(correct[l]) > -1) {
            for(var p=0;p< subTagArray.length;p++){
                if(correct[l] == subTagArray[p].tag_name){
                    correct[l] = subTagArray[p].id
                }
            }
        }
    }


    // for(var l=0; l<correct.length;l++){
    //     for(var n=0;n< mainTagArray.length;n++){
    //         if(correct[l] == mainTagArray[n].tag_name){
    //             correctArray.push({
    //                 tag_name: correct[l],
    //                 id:mainTagArray[n].id
    //             });
    //         }
    //     }
    // }
    //
    // for(var m=0; m<correct.length;m++){
    //     for(var p=0;p< subTagArray.length;p++){
    //         if(correct[m] == subTagArray[p].tag_name){
    //             correctArray.push({
    //                 tag_name: correct[m],
    //                 id:subTagArray[p].id
    //             });
    //         }
    //     }
    // }

    for(var m=0;m<correct.length;m++){

        if(correct[m+1] != '|' && correct[m] !='|'){
            correctSequence += correct[m]+',';
        }else{
            correctSequence += correct[m];
        }
    }
    //alert(correct);

    correctSequence = correctSequence.substring(0, correctSequence.length - 1);
    //alert(correctSequence);

    // correctArray.push({
    //     sequence: correctSequence
    // });



    var updatedCurrentID = newCurrentID + 1;
    var currentPos = questionNUmber.substring(1);
    var successPos = sno.substring(1);
    //get JSON type arrays for main,sub,correct tags
    //console.log(mainTagArray);
    //console.log(subTagArray);
    //console.log(correctArray);


    //add data to firebase
    var addQuestions = firebase.database().ref().child("Questions").child("QArray");
    var jsonVariables = {
        heading: title ,
        description: des,
        currentClass: questionNUmber,
        successClass: sno,
        currentPos: currentPos,
        successPos: successPos,
        mainTags: mainTagArray,
        subTags: subTagArray,
        correctSequene: correctSequence
    };

    addQuestions.push(jsonVariables);

    var updateID = firebase.database().ref().child("Questions");
    updateID.update({
        "currentID": updatedCurrentID
    });

    var updateQuestion = firebase.database().ref().child("Questions");
    updateQuestion.update({
        "questionNo": sno
    });

    var temp = sno.substring(1);
    temp = parseInt(temp) + 1;
    var successNum = "z"+temp;
    //alert(successNum);

    var updateSuccess = firebase.database().ref().child("Questions");
    updateSuccess.update({
        "successNo": sno
    });

    firebaseRefLS = firebase.database().ref().child('Questions').child('lastsync');
    firebaseRefLS.set(
        firebase.database.ServerValue.TIMESTAMP
    );

    location.reload();
}

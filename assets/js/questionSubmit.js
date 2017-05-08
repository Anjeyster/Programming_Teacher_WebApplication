/**
 * Created by sajithaliyanage on 5/8/17.
 */

//reference to firebase database
var ref = firebase.database().ref();
var currentID;
var questionNUmber;

ref.on("value", function(snapshot) {
    currentID = parseInt(snapshot.val().currentID);
    questionNUmber = snapshot.val().questionNo;
    document.getElementById('qno').value = questionNUmber;
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
    var mainTags = document.getElementById('input-tags').value.split(',');
    var subTags = document.getElementById('input-tags2').value.split(',');
    var correct = document.getElementById('input-tags3').value.split(',');

    var mainTagArray = [];
    var subTagArray = [];
    var correctArray = [];

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



    for(var l=0; l<correct.length;l++){
        for(var n=0;n< mainTagArray.length;n++){
            if(correct[l] == mainTagArray[n].tag_name){
                correctArray.push({
                    tag_name: correct[l],
                    id:mainTagArray[n].id
                });
            }
        }
    }

    for(var m=0; m<correct.length;m++){
        for(var p=0;p< subTagArray.length;p++){
            if(correct[m] == subTagArray[p].tag_name){
                correctArray.push({
                    tag_name: correct[m],
                    id:subTagArray[p].id
                });
            }
        }
    }


    //get JSON type arrays for main,sub,correct tags
    //console.log(mainTagArray);
    //console.log(subTagArray);
    //console.log(correctArray);
}

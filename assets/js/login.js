var provider = new firebase.auth.GoogleAuthProvider();

function googleSignin() {
    firebase.auth().signInWithPopup(provider).then(function(result) {

        var token = result.credential.accessToken;
        var user = result.user;

        //alert(user.email);
        localStorage.setItem("Name",user.displayName);
        localStorage.setItem("photo",user.photoURL);
        localStorage.setItem("isLogged","true");

        //console.log(token)
        //console.log(user)
    }).catch(function(error) {
        var errorCode = error.code;
        var errorMessage = error.message;

        console.log(error.code)
        console.log(error.message)
    });

    firebase.auth().onAuthStateChanged(function(currentUser) {
        if (currentUser) {
            window.location = 'question.html'
        }
    });

}


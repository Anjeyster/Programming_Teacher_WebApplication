/**
 * Created by sajithaliyanage on 5/8/17.
 */
window.onload = function(){
    if(localStorage.getItem("isLogged") != "true"){
        window.location = 'index.html'
    }else{
        document.getElementById("dname").innerHTML = localStorage.getItem("Name");
        document.getElementById("image").src = localStorage.getItem("photo");
    }
};



function googleSignout() {
    firebase.auth().signOut()
        .then(function() {
            console.log('Signout Succesfull')
            localStorage.clear();
            window.location = 'index.html'
        }, function(error) {
            console.log('Signout Failed')
        });

}

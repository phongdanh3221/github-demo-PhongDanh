function load(){
    var signUpButton = document.getElementById('signUp');
    var signInButton = document.getElementById('signIn');
    var main = document.getElementById('main');
    
    signUpButton.addEventListener('click', () =>{
        main.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () =>{
        main.classList.remove("right-panel-active");
    });
}

// const form = document.getElementById('form');
// const Name = document.getElementById('name');
// const email = document.getElementById('email');
// const password = document.getElementById('password');
// const passwVeri = document.getElementById('password-verify');


// form.addEventListener('submit' , e => {
    
//     checkValide();
// })

// function error(input, message){
//     const formControl = input.parentElement;
//     const small = formControl.querySelector('small');
//     formControl.className = 'from-control error';
//     small.innerText = message;
// }

// function success(input){
//     const formControl = input.parentElement;
//     formControl.className = 'form-control success';
// }
// function isName(Name){
//    return /^[a-zA-Z ]{2,30}$/.test(Name);
// }
// function isEmail(email){
//     return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
// }
// // function isPassword(password){
// //     return /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$ %^&*-]).{8,}$/.test(password);
// // }



// function checkValide(){
//     // trim to remove the whitespaces
//     const nameValue = Name.value.trim();
//     const emailValue = email.value.trim();
//     const passwordValue = password.value.trim();
//     const veriPasswValue = passwVeri.value.trim();

//     if(nameValue === ''){
//         // console.log('name cannot be blank')
//         error(Name, 'name cannot be blank')
        
//     }else if(!isName(nameValue)){
//         //console.log('Name is Not valid')
//          error(Name, 'Name is Not valid')
         
//     }
//     else{
//         success(Name);
        
//     }

//     if(emailValue === ''){
//         error(email, 'email cannot be blank')
//     }else if(!isEmail(emailValue)){
//         //console.log('email is Not valid')
//          error(email, 'email is Not valid')
        
//     }
//     else{
//         success(email);
//     }

//     if(passwordValue === ''){
//         error(password, 'password cannot be blank')
//     }
//     // else if(!isPassword(passwordValue)){
//     //     //console.log('password is Not valid')
//     //      error(password, 'password is Not valid')
//     // }
//     else{
//         success(password);

//     }

    
//     if(veriPasswValue === ''){
//         error(passwVeri,'Password cannot be blank')
//     }else if(veriPasswValue !== passwordValue){
//         error(passwVeri, 'Password is not check')
//     }
//     else{
//         success(passwVeri);
//     }
   



// }



// function myFunction() {
    
//     if (password.type === "password") {
//       password.type = "text";
//     } else {
//       password.type = "password";
//     }
//   }
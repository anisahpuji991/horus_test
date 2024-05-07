const signinBtn = document.querySelector('.signinBtn');
const signupBtn = document.querySelector('.signupBtn');
const formBx	= document.querySelector('.formBx');
const body 		= document.querySelector('body');

signupBtn.onclick = function(){
    formBx.classlist.add('active');
    body.classlist.add('active');
}

signinBtn.onclick = function(){
    formBx.classlist.remove('active');
    body.classlist.remove('active');
}
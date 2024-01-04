window.onload=function(){
let input=document.getElementById("user");
let div = document.getElementById("name");
let div2 = document.getElementById("tag");
let div1=document.createElement("div");
let inputtag=document.createElement("input");
let divp=document.createElement("div");
divp.setAttribute("class","flex");
let p =document.createElement("p");
p.innerHTML="Password:";
let p1 =document.createElement("p");
p1.innerHTML="Weak";
p1.style.color="#ff3030";
p1.style.fontFamily="fantasy";
divp.append(p);
divp.append(p1);
divp.style.display="flex";
divp.style.position="relative";
divp.style.bottom="16px";
divp.style.left="12px";
inputtag.setAttribute("type","range");
inputtag.setAttribute("min","0");
inputtag.setAttribute("max","10");

inputtag.setAttribute("value","0");
inputtag.disabled=true;
inputtag.style.marginLeft="7px";
inputtag.style.width="200px";
div1.style.fontSize="15px";
div1.innerHTML="Enter from 3 to 16 letters before the @ , no special characters or numbers in the first letter"
div.append(div1);
div2.append(inputtag);
div2.append(divp);
input.addEventListener("focus",function(){
    input.placeholder=""
    div.style.display="flex";
    
    div.style.alignItems="start";
   
    
})



input.addEventListener("blur",function(){ 
    input.placeholder="Enter your email";
    div.style.display="none";
})

let login = document.querySelector("input.clicking")
login.addEventListener("mouseenter",function myfunction(){
   login.style.border="2px solid black";
})
login.addEventListener("mouseleave",function(){
    login.style.border="none";
   
})
 
passtext=document.querySelector("#password");
passtext.addEventListener("input",function(){
    if(passtext.value.length>=8&&passtext.value.length<12){
        inputtag.setAttribute("value","4");
        p1.innerHTML="Fair";
    p1.style.color="yellow";
    p1.style.fontFamily="fantasy";
    }else if(passtext.value.length<8) {
        inputtag.setAttribute("value","0");
        p1.innerHTML="Weak";
        p1.style.color="#ff3030";
        p1.style.fontFamily="fantasy";
    }else if(passtext.value.length>=12&&passtext.value.length<20){
        inputtag.setAttribute("value","7");
        p1.innerHTML="Moderate";
        p1.style.color="green";
        p1.style.fontFamily="fantasy";
    }else if(passtext.value.length>=15){
        inputtag.setAttribute("value","10");
        p1.innerHTML="Strong";
        p1.style.color="aqua";
        p1.style.fontFamily="fantasy";
    }
})
passtext.addEventListener("focus",function(){
    passtext.placeholder="";
    div2.style.display="flex";
    div2.style.flexWrap="wrap";
    div2.style.alignItems="center";
    divp.style.left="27px";
   
    
})
passtext.addEventListener("blur",function(){
    passtext.placeholder="Enter your password";
    div2.style.display="none";
   
    
})

let user = document.getElementById("user");

let f=/^(\d+|\W+|\s+|\w{0,2}(?!\w{1,16}(?=@(?=(yahoo.com|gmail.com))))|\w{17,})/i;

let div_wrong = document.createElement("div");
div_wrong.innerHTML="wrong email or password,try again";
div_wrong.style.fontSize="22px";
div_wrong.style.fontFamily="serif";
div_wrong.style.textAlign="center";
div_wrong.style.color="red";
div_wrong.style.paddingTop="5px";
div_wrong.style.display="none";


document.querySelector("div.submit").append(div_wrong);


user.addEventListener("input",function(){
    console.log(f.test(user.value));});
    console.log(login);
login.addEventListener("click",function(){

    if(f.test(user.value)==true||user.value==""||p1.innerHTML=="Weak"){
let form = document.getElementById("form");
form.setAttribute("onsubmit","return false;")
console.log("successful");
if(document.querySelector("div.submit").length==4){
    document.querySelector("div.submit").removeChild(document.querySelector("div.submit").children(2))
}

div.style.top="-198px";
div2.style.top="-161px";
div_wrong.style.display="block";


document.querySelector("div.account-form").style.height="315px";


    }else{
        form.setAttribute("onsubmit","return true;")
    }
    
})

let sign = document.getElementById("sign");
sign.addEventListener("mouseenter",function myfunction(){
   
    sign.style.border="2px solid black";
    sign.style.cursor="pointer";

 })
 sign.addEventListener("mouseleave",function(){
     
    sign.style.border="none";
 })

 sign.addEventListener("click",function(){
    window.location="sign.php";
 });

}



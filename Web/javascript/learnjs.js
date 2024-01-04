t2=document.querySelector(".slider .items:nth-child(2)");
t3=document.querySelector(".slider .items:nth-child(3)");
t1=document.querySelector(".slider .items:first-child");
li_1=document.querySelector(".slider ul li:first-child");
li_2=document.querySelector(".slider ul li:nth-child(2)");
li_3=document.querySelector(".slider ul li:nth-child(3)");
li_1.style.backgroundColor="black";
t_i=document.querySelector(".slider i.first");
t_i_2=document.querySelector(".slider i.second");
t_i.addEventListener("click",function(){
if(li_3.style.backgroundColor =="black"&&li_2.style.backgroundColor!="black"&&li_1.style.backgroundColor!="black"){
    t2.style.transform="translateX(0px)";
    t2.style.opacity = "1";
    li_3.style.removeProperty("background-color");
    li_2.style.backgroundColor="black";
} else if(li_2.style.backgroundColor=="black"&&li_3.style.backgroundColor!="black"&&li_1.style.backgroundColor!="black"){
    t3.style.transform="translateX(0px)";
    t3.style.opacity = "1";
    
    li_2.style.removeProperty("background-color");
    li_1.style.backgroundColor="black";

}


    
});

t_i_2.addEventListener("click",function(){

    if(li_1.style.backgroundColor =="black"&&li_2.style.backgroundColor!="black"&&li_3.style.backgroundColor!="black"){
        t3.style.transform="translateX(-100%)";
        t3.style.opacity = "0"; 
        t1.style.transform="translateX(0px)";
        t1.style.opacity = "1";
        li_1.style.removeProperty("background-color");
        li_2.style.backgroundColor="black";
    }
    else if(li_2.style.backgroundColor =="black"&&li_3.style.backgroundColor!="black"&&li_1.style.backgroundColor!="black"){
        t2.style.transform="translateX(-100%)";
        t2.style.opacity = "0"; 
        t1.style.transform="translateX(0px)";
        t1.style.opacity = "1";
        li_2.style.removeProperty("background-color");
        li_3.style.backgroundColor="black";
    }
})















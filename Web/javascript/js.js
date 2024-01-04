window.onload= function(){

    //create input(text)
let t = document.createElement("input");
t.setAttribute("type","text");
t.style.width="700px";
t.style.height="35px";
t.style.border="2px solid transparent";
t.style.borderRadius = "7px";
t.style.marginRight="2px";
t.style.marginBottom="15px";
t.style.outline="none";
t.style.fontSize="25px";
t.style.display="inline";

    //create input(button)
let b = document.createElement("button");
b.setAttribute("type","submit");
b.setAttribute("class","delete");
b.style.backgroundColor="red";
b.style.width="90px";
b.style.height="40px";
b.style.border= "2px solid transparent";
b.style.borderRadius="7px";
b.style.color= "aliceblue";
b.style.marginLeft="-30px";
b.style.marginBottom="15px";
b.style.cursor="pointer";
b.innerText="Delete";
b.style.display="inline";

d=document.getElementById("tasks");

//putting inputs to div
dform=document.getElementById("form").querySelector("input.add").style.backgroundColor="red";


    clone = t.cloneNode(true);
    clone1 = b.cloneNode(true);
    
    clone.setAttribute("id",""+(y));
    clone1.setAttribute("id",""+(y));
     console.log(y);
     

    
    
       
    
    
    
    
    d.appendChild(clone);
    d.appendChild(clone1);
    d.childNodes[j].value=window.sessionStorage.getItem(d.childNodes[j].id);
    
    if(d.childNodes[j].value!=""){
    
        d.childNodes[j].value=window.sessionStorage.getItem(y);
        }else{
            for(x=i; (d.childNodes[j].value=="");x++){
            d.childNodes[j].value=window.sessionStorage.getItem(x);
            clone.setAttribute("id",""+(x));
            clone1.setAttribute("id",""+(x));
        y=x}
       
      
       

            
       
    
   
    
       
    
   
    
    
    
    




    


  

}




   
    
        

  




// window.sessionStorage.removeItem(window.sessionStorage.length);

//clicks

let input = document.querySelector("input.input");
let add = document.querySelector("input.add");

add.addEventListener("click",function(){  
// if(window.sessionStorage.getItem(window.sessionStorage.length)==null){
//     window.sessionStorage.setItem(window.sessionStorage.length,"0")}
//     let counter_index = parseInt(window.sessionStorage.getItem(window.sessionStorage.length))+1;
//     window.sessionStorage.setItem(window.sessionStorage.length,counter_index);

    
  


//text of input


    window.sessionStorage.setItem((window.sessionStorage.length+1),input.value);
});


let del =document.querySelectorAll("button.delete");
// del.setAttribute("type","button");
for(let j=0;j<del.length;j++){

del[j].addEventListener("click",function(e){
    
    
    // if(window.sessionStorage.getItem(window.sessionStorage.length)==null){
    //     window.sessionStorage.setItem(window.sessionStorage.length,"0")}
    //     let counter_index = parseInt(window.sessionStorage.getItem(window.sessionStorage.length))-1;
    //     window.sessionStorage.setItem(window.sessionStorage.length,counter_index);
    

    //console.log(this.id);
    window.sessionStorage.removeItem(""+this.id+"");
    document.getElementById(""+this.id).remove();
    this.remove();

     
    
    //  if(window.sessionStorage.length==1){
    //      window.sessionStorage.clear();
    //  }
   
     //history.go(0);

});}




}

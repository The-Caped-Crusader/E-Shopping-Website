window.onload=function(){
let mystring = "1,2,3,EE,l,z,e,r,o,_,W,e,b,_,S,c,h,o,o,l,2,0,Z";


let solution = mystring.split(",")
.map(function(ele){return ele[-false];})
    .filter(function(ele){
        
        return  isNaN(ele); })
    .reduce(function(acc,current,index,arr){
        if(acc.length>current.length){
            acc[1]="";
        }
        if(acc =="_" ) {acc=" "
        }else if(current=="_"){
            current=" "
        }
        if(index+true==arr.length){
            current=""
        }
        return acc+current})

console.log(solution);
document.getElementById("name").innerHTML="hell";}


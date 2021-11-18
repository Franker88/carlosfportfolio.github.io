/*Contact Button*/

/*Contact Icons*/

/*Linked In*/
let ldin = document.getElementById("linkedin");

ldin.addEventListener("mouseover",function(){
    document.getElementById("contactn").innerHTML = "Carlos Franco";
})

ldin.addEventListener("mouseout",function(){
    document.getElementById("contactn").innerHTML = "";
})

/*Git-Hub*/
let gh = document.getElementById("github");

gh.addEventListener("mouseover",function(){
    document.getElementById("contactn").innerHTML = "Franker88";
})

gh.addEventListener("mouseout",function(){
    document.getElementById("contactn").innerHTML = "";
})

/*Instagram*/
let ins = document.getElementById("instagram");

ins.addEventListener("mouseover",function(){
    document.getElementById("contactn").innerHTML = "@franco.c.v";
})

ins.addEventListener("mouseout",function(){
    document.getElementById("contactn").innerHTML = "";
})

/*Whatsapp*/
let wap = document.getElementById("whatsapp");

wap.addEventListener("mouseover",function(){
    document.getElementById("contactn").innerHTML = "+58 414 900 8364";
})

wap.addEventListener("mouseout",function(){
    document.getElementById("contactn").innerHTML = "";
})
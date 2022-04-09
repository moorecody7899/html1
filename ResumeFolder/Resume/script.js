
function askName() {
    const firstName = prompt("what is your name?");
    //alert (firstName + " , thank you.");
  


    


    (function (){
        var date = new Date();
        console.log(date);
        var hours = date.getHours();
        console.log(hours);
    
        if (hours >=5 && hours <= 12) {
            alert ("Good morning," + firstName + "! Thank you for reviewing my resume site.");
        } else if (hours > 12 && hours <= 18){
            alert( "Good afternoon, " + firstName +  "! Thank you for reviewing my resume site.");
        } else if (hours > 18){
            alert(" Good evening, " + firstName +  "! Thank you for reviewing my resume site.")}}
        
    )();   
}
const myReferences = [
    {
    name: "Olive Garden",
    company: "Olive Garden",
    phone:"801-646-5675",
    reference:"Cody is amazing",
},

{
    name:"Ztejas",
    company:"Ztejas",
    phone:"801-453-6783",
    reference:"Cody is outstanding",
},
{
    name:"RedRock Brewery",
    company: "RedRock Brewing ",
    phone:"833-634-7678",
    reference:"Cody was an amazing Bartender! Stopped in RR brewing,  Cody told us all the hot spots to check out in town. ",

},
];




  for (i = 0; i < myReferences.length; i++)
  document.getElementById("results").innerHTML = (myReferences[i].name + " said this: " + myReferences[i].reference);



      $(document).ready(function () {
        $("#buttonOneHide").click(function () {
            $("#film").hide(500);
        });
        $("#buttonOneShow").click(function () {
            $("#film").show(500);
        });
    });
    
    $(document).ready(function () {
        $("#buttonTwoHide").click(function () {
            $("#jobTwo").hide(500);
        });
        $("#buttonTwoShow").click(function () {
            $("#jobTwo").show(500);
        });
    });
    
    $(document).ready(function () {
        $("#buttonThreeHide").click(function () {
            $("#jobThree").hide(500);
        });
        $("#buttonThreeShow").click(function () {
            $("#jobThree").show(500);
        });
    });
    
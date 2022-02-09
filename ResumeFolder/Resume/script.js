
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
//“Good Morning, (Name they Entered)! Thank you for reviewing my resume site.”

/*
Name: Elisabeth Feeley
Date: 31/1/2013
Description: Javascript for payday.html
Assistance: noted throughout
*/



/*function to get today's date */
function today() {

	//http://w3schools.com/js/js_obj_date.asp
	
	var myDate = new Date();
	myDate.setDate(myDate.getDate());
	
	return myDate;
}
	
/*function to get date to load on startup */
function startform()  {

	document.getElementById("date").innerHTML = today();
	
}

/*function to display calculated amount in 2-decimal format */
 function dollars(n)  {
 
	n=eval(n)
	n=Math.round(n*100)/100;
	return (n == Math.round(n)) ? n +=".00" : (n*10 == Math.round(n*10)) ? n+="0" : n;
	
 }
 
/* function to calculate paycheck */
function tax_percent()	
{
	var tax= "";
	var dep= new Array(5);
	dep[0] = .2;
	dep[1] = .17;
	dep[2] = .15;
	dep[3] = .12;
	dep[4] = .10;
	dep[5] = .10;
	var txt=" %"
	
	for (var i=0; i<6; i++)
	{
		if (document.paycheck['tax'+i].checked)
		{
			var newtax= new Number(dep[i]);
			taxrate = newtax*100;
			var h=eval(document.paycheck.hours.value);
			var r=eval(document.paycheck.payrate.value);
			document.paycheck.feedback.value= taxrate + txt;
			document.paycheck.feedback3.value= ("$ "+ eval(r*(1-newtax)*h));
		}
	}
}
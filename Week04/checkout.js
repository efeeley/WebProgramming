/*
Name: Elisabeth Feeley
Date: 31/1/2013
Description: 
Assistance:
*/


function totals() {

var totalprice = 0.00;
var appleprice = .59;
var orangeprice = .49;
var bananaprice = .39;
var tax = 1.05;
var txtApple = 7;//document.getElementById("txtApple");
var txtOrange = 12;//document.getElementById("txtOrange");
var txtBanana = 5;//document.getElementById("txtBanana");

if (txtApple < 0 || txtApple > 99)
{
alert("Enter a reasonable number");
}
if (txtOrange < 0 || txtOrange > 99)
{
alert("Enter a reasonable number");
}
if (txtBanana < 0 || txtBanana > 99)
{
alert("Enter a reasonable number");
}

totalprice = appleprice * txtApple;
totalprice = totalprice + orangeprice * txtOrange;
totalprice = totalprice + bananaprice * txtBanana;
totalprice = totalprice * tax;

totalprice = Number(totalprice).toFixed(2);

alert("Your total price is $" + (totalprice));
}
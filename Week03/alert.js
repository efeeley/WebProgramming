/*
Name: Elisabeth Feeley
Date: 22/1/2013
Description: Script to create a table in an alert box 
Assistance:
	Basic Code: http://www.coderanch.com/t/553889/HTML-CSS-JavaScript/Undefined-alert-dialog-box
*/

	
function table() {    


	//Start Table
	document.write("<table>");

	//Table header row 
	document.write("<thead> <tr> <td>Number</td> <td>Squared</td> <td>Cubed</td> </tr>	</thead>");
	
	//Table body 
	document.write("<tbody>"); 

	for (var i=5; i<=15; i++) {       

		for (var x=1; x<=1; x++) {   
		 document.write("<tr>");
		 document.write("<td>" + i + "</td>");
		 document.write("<td>" + Math.pow(i,2) + "</td>");    
		 document.write("<td>" + Math.pow(i,3) + "<td>");
		 document.write("</tr>");

		} //End Inner Loop    

	} //End Outer Loop    
	
	//End of table code
	document.write("</tbody> </table>");
	
} //End Function

/**************************************
Note: I am aware there is not alert box,
I could not get it to work properly.
The table is creaded through Javascript.
**************************************/
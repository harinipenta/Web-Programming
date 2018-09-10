var empworkhours = [];
var hourlyWage = 15;
var maxWeeklyHours = 40;
var overtimeRate = 1.5;
var firstEntry = true;
var addon = true;
var hours = 0.0;
var empNumber = 1;
var outputString = "";

function getTotalHours(){
	while (addon){
		hours=prompt("Enter number of hours worked in a week " + empNumber + " (Enter -1 to stop adding employees)");
		if (hours < 0){
			if(firstEntry == true){
				window.alert("Atleast one Employee should be there");
			}
			else{
				addon = false;
			}
		}
		else if (!(hours >= 0) || (hours == "")){
			window.alert("Please enter valid number of working hours! Oops!");
		}
		else{
			empworkhours.push(hours);
			firstEntry = false;
			empNumber++;
		}
	}
	OutputEmpSal();
	document.getElementById("employeeSalary").innerHTML = outputString;
}
function OutputEmpSal(){
	outputString = "<table border=1><th>Employee Id</th><th>Total Hours</th><th>Salary</th>";
	var weekIncome = 0;
	var totalWeeklyIncome = 0;
	var weeklyHours = 0;
	var arrayLength = empworkhours.length;
	for (var i = 0; i < arrayLength; i++) {
		if (empworkhours[i] > maxWeeklyHours){
			var overtimeHours = empworkhours[i] - maxWeeklyHours;
			overtimeHours *= overtimeRate;
			weeklyHoursAdjusted = 40 + overtimeHours;
		}
		else {
			weeklyHoursAdjusted = empworkhours[i];
		}
		weekIncome = weeklyHoursAdjusted * hourlyWage;
		outputString += "<tr><td>"+ (i+1) + "</td>" +
		"<td>" + empworkhours[i] + "</td>" +
		"<td>" + weekIncome + "</td>";
		totalWeeklyIncome += weekIncome;
	}
	outputString += "</table>";
	outputString += "<br><br><center><b>Total Pay of Employees: $" + totalWeeklyIncome + "</center></b>";
}

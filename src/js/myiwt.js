function checkPasswords(){
	if(document.getElementById("password-1").value != document.getElementById("password-2").value){
		alert("Passwords are mismatched!");
		return false;
	}
	else{
		alert("Passwords matched Welcome!");
		return true;
	}
}

function enableButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("btn1").disabled = false;
	}
	else{
		document.getElementById("btn1").disabled = true;
	}
}
/*
var selectedRow=null;

function onformSubmit(){
	
	var formData=readformData();
	if(selectedRow == null)
		insertNewRecord(formData);
	else 
		updateRecord(formData);
	
	resetForm();
	
}
function readformData(){
	var formData = {};
	formData["fullName"]=document.getElementById("fullName").value;
	formData["gender"]=document.getElementById("gender").value;
	formData["phone"]=document.getElementById("phone").value;
	formData["email"]=document.getElementById("email").value;
	formData["address"]=document.getElementById("address").value;
	return formData;
}
function insertNewRecord(data){
	var table = document.getElementById("userlist").getElementsByTagName('tbody')[0];
	var newRow = table.insertRow(table.length);
	cell1 = newRow.insertCell(0);
	cell1.innerHTML = data.fullName;
	cell2 = newRow.insertCell(1);
	cell2.innerHTML = data.gender;
	cell3 = newRow.insertCell(2);
	cell3.innerHTML = data.phone;
	cell4 = newRow.insertCell(3);
	cell4.innerHTML = data.email;
	cell5 = newRow.insertCell(4);
	cell5.innerHTML = data.address;
	cell5 = newRow.insertCell(5);
	cell5.innerHTML = `<a onclick="onUpdate(this)">Update</a>
	                   <a onclick="onDelete(this)">Delete</a>`;
	
}
function resetForm(){
	document.getElementById("fullName").value = "";
	document.getElementById("gender").value = "";
	document.getElementById("phone").value = "";
	document.getElementById("email").value = "";
	document.getElementById("address").value = "";
	selectedRow=null
}
function onUpdate(td){
	selectedRow = td.parentElement.parentElement;
	document.getElementById("fullName").value = selectedRow.cells[0].innerHTML;
	document.getElementById("gender").value = selectedRow.cells[1].innerHTML;
	document.getElementById("phone").value = selectedRow.cells[2].innerHTML;
	document.getElementById("email").value = selectedRow.cells[3].innerHTML;
	document.getElementById("address").value = selectedRow.cells[4].innerHTML;
}
function updateRecord(formData){
	
	selectedRow.cells[0].innerHTML = formData.fullName;
	selectedRow.cells[1].innerHTML = formData.gender;
	selectedRow.cells[2].innerHTML = formData.phone;
	selectedRow.cells[3].innerHTML = formData.email;
	selectedRow.cells[4].innerHTML = formData.address;
}
function onDelete(td){
	if(confirm ('Are you sure you want to delete this record ?')){
	row = td.parentElement.parentElement;
	document.getElementById("userlist").deleteRow(row.rowIndex);
	resetForm();
	}
}
*/
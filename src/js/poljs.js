function checkSubmit(){
	if(document.getElementById("bttn1").clicked)
	return true;
}

 function enableButton1(){
	if(document.getElementById("policy1").checked){
		document.getElementById("bttn1").disabled = false;
	}
	else{
		document.getElementById("bttn1").disabled = true;
	}
}

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
	formData["FirstName"]=document.getElementById("FirstName").value;
	formData["LastName"]=document.getElementById("LastName").value;
	formData["gender"]=document.getElementById("gender").value;
	formData["phone"]=document.getElementById("phone").value;
	formData["email"]=document.getElementById("email").value;
	formData["address"]=document.getElementById("address").value;
	return formData;
}
function insertNewRecord(data){
	var table = document.getElementById("userlistJ").getElementsByTagName('tbody')[0];
	var newRow = table.insertRow(table.length);
	cell1 = newRow.insertCell(0);
	cell1.innerHTML = data.FirstName;
	cell2 = newRow.insertCell(1);
	cell2.innerHTML = data.LastName;
	cell3 = newRow.insertCell(2);
	cell3.innerHTML = data.gender;
	cell4 = newRow.insertCell(3);
	cell4.innerHTML = data.phone;
	cell5 = newRow.insertCell(4);
	cell5.innerHTML = data.email;
	cell6 = newRow.insertCell(5);
	cell6.innerHTML = data.address;
	cell6 = newRow.insertCell(6);
	cell6.innerHTML = `<a onclick="onUpdate(this)">Update</a>
	                   <a onclick="onDelete(this)">Delete</a>`;
	
}
function resetForm(){
	document.getElementById("FirstName").value = "";
	document.getElementById("LastName").value = "";
	document.getElementById("gender").value = "";
	document.getElementById("phone").value = "";
	document.getElementById("email").value = "";
	document.getElementById("address").value = "";
	selectedRow=null
}
function onUpdate(td){
	selectedRow = td.parentElement.parentElement;
	document.getElementById("FirstName").value = selectedRow.cells[0].innerHTML;
	document.getElementById("LastName").value = selectedRow.cells[1].innerHTML;
	document.getElementById("gender").value = selectedRow.cells[2].innerHTML;
	document.getElementById("phone").value = selectedRow.cells[3].innerHTML;
	document.getElementById("email").value = selectedRow.cells[4].innerHTML;
	document.getElementById("address").value = selectedRow.cells[5].innerHTML;
}
function updateRecord(formData){
	selectedRow.cells[0].innerHTML = formData.FirstName;
	selectedRow.cells[1].innerHTML = formData.LastName;
	selectedRow.cells[2].innerHTML = formData.gender;
	selectedRow.cells[3].innerHTML = formData.phone;
	selectedRow.cells[4].innerHTML = formData.email;
	selectedRow.cells[5].innerHTML = formData.address;
}
function onDelete(td){
	if(confirm ('Are you sure you want to delete this record ?')){
	row = td.parentElement.parentElement;
	document.getElementById("userlistJ").deleteRow(row.rowIndex);
	resetForm();
	}
}

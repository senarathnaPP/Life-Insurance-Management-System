function togglepopup(){
	document.getElementById("popup-1").classList.toggle("active");
}
function togglepopup1(){
	document.getElementById("popup1-2").classList.toggle("active");
}


var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["fullName"] = document.getElementById("fullName").value;
	formData["email"] = document.getElementById("email").value
    formData["cNo"] = document.getElementById("cNo").value;
    formData["payAmo"] = document.getElementById("payAmo").value;
    formData["payRe"] = document.getElementById("payRe").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("paymentList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.fullName;
	
	cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.email;
	
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.cNo;
	
    cell4 = newRow.insertCell(3);
    cell4.innerHTML = data.payAmo;
	
    cell5 = newRow.insertCell(4);
    cell5.innerHTML = data.payRe;
	
    cell6 = newRow.insertCell(5);
    cell6.innerHTML = `<a onClick="onEdit(this)">Edit</a>
                       <a onClick="onDelete(this)">Delete</a>`;
}

function resetForm() {
    document.getElementById("fullName").value = "";
	document.getElementById("email").value = "";
    document.getElementById("cNo").value = "";
    document.getElementById("payAmo").value = "";
    document.getElementById("payRe").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("fullName").value = selectedRow.cells[0].innerHTML;
	document.getElementById("email").value = selectedRow.cells[1].innerHTML;
    document.getElementById("cNo").value = selectedRow.cells[2].innerHTML;
    document.getElementById("payAmo").value = selectedRow.cells[3].innerHTML;
    document.getElementById("payRe").value = selectedRow.cells[4].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.fullName;
	selectedRow.cells[1].innerHTML = formData.email;
    selectedRow.cells[2].innerHTML = formData.cNo;
    selectedRow.cells[3].innerHTML = formData.payAmo;
    selectedRow.cells[4].innerHTML = formData.payRe;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement;
        document.getElementById("paymentList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("fullName").value == "") {
        isValid = false;
        document.getElementById("fullNameValidationError").classList.remove("hide");
    } else {
        isValid = true;
        if (!document.getElementById("fullNameValidationError").classList.contains("hide"))
            document.getElementById("fullNameValidationError").classList.add("hide");
    }
    return isValid;
}
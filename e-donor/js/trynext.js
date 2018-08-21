function nextDetails() {
	
	var age = document.getElementById('age').value;
	var weight = document.getElementById('weight').value;
	var name = document.getElementById('name').value;
	if (name = "" || age < 18 || weight < 50) {
		if (name = "") {
			var nameErr = document.createElement("p");
    		var nameMessage = document.createTextNode("*Name must be filled in*");
    		nameErr.appendChild(nameMessage);
    		nameErr.style.color = "red";
    		nameErr.className = "text-center"

    		var nameError = document.getElementById("nameDiv");
    		nameError.appendChild(nameErr);
		}
		if (age < 18) {
			var err = document.createElement("p");
    		var message = document.createTextNode("*Age must be greater than 18 for you to be a valid donor*");
    		err.appendChild(message);
    		err.style.color = "red";
    		err.className = "text-center"

    		var ageError = document.getElementById("ageDiv");
    		ageError.appendChild(err);
		}
		if (weight < 50) {
			var weightErr = document.createElement("p");
    		var weightMessage = document.createTextNode("*Weight must be greater than 50 for you to be a valid donor*");
    		weightErr.appendChild(weightMessage);
    		weightErr.style.color = "red";
    		weightErr.className = "text-center"

    		var weightError = document.getElementById("weightDiv");
    		weightError.appendChild(weightErr);
		}
}
else {
	document.getElementById('hiddenElements').style.display="";
}

}

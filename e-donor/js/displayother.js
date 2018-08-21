

	document.getElementById('nextDetails').addEventListener('click',function(){
    		if (document.getElementById("age").value >= 18) {
    			document.getElementById('hiddenElements').style.display="block";

    		}
    		else {
    			var err = document.createElement("p");
    			var message = document.createTextNode("*Age must be greater than 18 for you to be a valid donor*");
    			err.appendChild(message);
    			err.style.color = "red";
    			err.className = "text-center"

    			var ageError = document.getElementById("ageDiv");
    			ageError.appendChild(err);

    		}
    return false;
});


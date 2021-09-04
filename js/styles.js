

function viewPrice() {
	var actual_price = '';
	var persons = document.getElementById("persons").value;

	actual_price = 110 * persons;
	total_price = actual_price - (actual_price * 0.2);

	document.getElementById("actual_price").value = actual_price;
	document.getElementById("total_price").value = total_price;
}

function viewSponserPrice() {
	var total_price = '1';
	var band = document.getElementById("band").value;
	var quantity = document.getElementById("quantity").value;

	if (band == 'E') {
		total_price = 500 * quantity;
	} else if (band == 'D'){
		total_price = 1000 * quantity;
	} else if (band == 'C'){
		total_price = 1500 * quantity;
	} else if (band == 'B'){
		total_price = 2000 * quantity;
	} else if (band == 'A'){
		total_price = 2500 * quantity;
	}

	document.getElementById("total_price").value = total_price;
}
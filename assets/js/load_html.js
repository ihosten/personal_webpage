// loadHTML.js
async function loadHTML(id, file, callback) {
	try {
		const response = await fetch(file);
		if (!response.ok) throw new Error(`Could not load ${file}`);
		const html = await response.text();
		document.getElementById(id).innerHTML = html;

		if (typeof callback === "function") {
			callback(); // Run additional logic after loading
		}
	} catch (error) {
		console.error(error);
	}
}
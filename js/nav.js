fetch('/assets/nav.html')
	.then(res => res.text())
	.then(text => {
		let oldElem = document.querySelector("script#replace_with_navbar");
		let newElem = document.createElement("nav");
		newElem.className = "navbar navbar-expand-lg bg-primary"; //sticky-top
		newElem.innerHTML = text;
		oldElem.parentNode.replaceChild(newElem, oldElem);
	});
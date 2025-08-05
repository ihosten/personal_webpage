function highlightActiveLink() {
	const currentPage = window.location.pathname.split('/').pop() || 'index.html';

	const navLinks = document.querySelectorAll('#nav ul.links li a');
	navLinks.forEach(link => {
		const href = link.getAttribute('href');
		if (href === currentPage) {
			link.parentElement.classList.add('active');
		}
	});
}
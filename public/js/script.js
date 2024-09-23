// Example: Smooth scrolling for anchor links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});


var Typed = new Typed(".text",{
    strings: ["IT Student", "Cake Topper Editor", "Valorant Player"],
    typeSpeed:100,
    backSpeed:100,
    backDelay:1000,
    loop:true
});


fetch('/submit-contact-form', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify({
        // form data here
    })
})
.then(response => response.json())
.then(data => console.log(data))
.catch(error => console.error('Error:', error));






document.addEventListener("DOMContentLoaded", function() {
    // Select all navigation links
    const links = document.querySelectorAll('.navbar a');

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            const targetId = this.getAttribute('href'); // Get the target id (e.g., #about)
            const targetSection = document.querySelector(targetId); // Select the target section

            if (targetSection) {
                targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});











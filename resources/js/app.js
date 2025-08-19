/*=============== SHOW MENU (from original file) ===============*/
const showMenu = (toggleId, navId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId);
  
    if (toggle && nav) {
        toggle.addEventListener("click", () => {
            nav.classList.toggle("show-menu");
            toggle.classList.toggle("show-icon");
        });
    }
};

showMenu("nav-toggle", "nav-menu");

/*=============== PROFESSIONAL ENHANCEMENTS ===============*/
document.addEventListener("DOMContentLoaded", () => {
    
    // --- SMOOTH SCROLL FOR ANCHOR LINKS ---
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    
    scrollLinks.forEach(link => {
        link.addEventListener("click", function(e) {
            e.preventDefault();
            const targetId = this.getAttribute("href");
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                // Get header height to offset scroll position
                const header = document.querySelector('.header');
                const headerHeight = header ? header.offsetHeight : 0;
                
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });

                // For mobile: close the menu after clicking a link
                const navMenu = document.getElementById('nav-menu');
                if (navMenu.classList.contains('show-menu')) {
                    navMenu.classList.remove('show-menu');
                    document.getElementById('nav-toggle').classList.remove('show-icon');
                }
            }
        });
    });

    // --- ACTIVE LINK HIGHLIGHTING ON SCROLL ---
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav__list a.nav-scroll-link");

    function onScroll() {
        const scrollY = window.pageYOffset;
        const headerHeight = document.querySelector('.header').offsetHeight;

        sections.forEach(current => {
            const sectionHeight = current.offsetHeight;
            const sectionTop = current.offsetTop - headerHeight - 50; // Add a 50px buffer
            const sectionId = current.getAttribute("id");

            if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove("active-link");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active-link");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", onScroll);
});

// --- AJAX CONTACT FORM SUBMISSION ---
const contactForm = document.getElementById('contact-form');

if (contactForm) {
    contactForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Stop the browser from reloading the page

        const form = e.target;
        const formData = new FormData(form);
        const submitButton = document.getElementById('submit-button');
        const formStatus = document.getElementById('form-status');

        // Clear previous errors
        document.querySelectorAll('.error-text').forEach(el => el.textContent = '');
        formStatus.textContent = '';
        submitButton.disabled = true;
        submitButton.textContent = 'Sending...';

        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
            },
        })
        .then(response => response.json())
        .then(data => {
            if (data.success === false) {
                // Handle validation errors
                if (data.errors) {
                    Object.keys(data.errors).forEach(key => {
                        const errorElement = document.getElementById(`${key}-error`);
                        if (errorElement) {
                            errorElement.textContent = data.errors[key][0];
                        }
                    });
                    formStatus.textContent = 'Please correct the errors above.';
                    formStatus.style.color = 'red';
                } else {
                    // Handle server or other errors
                    formStatus.textContent = data.message;
                    formStatus.style.color = 'red';
                }
            } else {
                // Handle success
                form.reset();
                formStatus.textContent = data.message;
                formStatus.style.color = 'green';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            formStatus.textContent = 'A network error occurred. Please try again.';
            formStatus.style.color = 'red';
        })
        .finally(() => {
            submitButton.disabled = false;
            submitButton.textContent = 'Send';
        });
    });
}

document.addEventListener("DOMContentLoaded", () => {
    // Check if the URL has a hash
    if (window.location.hash) {
        // Use a small timeout to ensure the page is fully rendered
        setTimeout(() => {
            const targetId = window.location.hash;
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                const header = document.querySelector('.header');
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = targetElement.getBoundingClientRect().top + window.pageYOffset - headerHeight;

                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });
            }
        }, 100); // 100ms delay
    }
});
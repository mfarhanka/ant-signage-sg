document.addEventListener('DOMContentLoaded', () => {
    const animatedItems = document.querySelectorAll('[data-animate]');
    const form = document.getElementById('enquiryForm');
    const formStatus = document.getElementById('formStatus');

    if (animatedItems.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.18,
            rootMargin: '0px 0px -40px 0px'
        });

        animatedItems.forEach((item) => observer.observe(item));
    }

    if (form && formStatus) {
        form.addEventListener('submit', (event) => {
            event.preventDefault();

            if (!form.checkValidity()) {
                form.reportValidity();
                return;
            }

            const name = form.elements.namedItem('name').value.trim();
            const service = form.elements.namedItem('service').value;

            formStatus.textContent = `Thanks ${name || 'there'}, your enquiry for ${service || 'our signage services'} has been noted. Please continue on WhatsApp for the fastest response.`;
            formStatus.classList.add('is-success');
            form.reset();
        });
    }
});
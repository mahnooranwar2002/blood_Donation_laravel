document.querySelectorAll('.faq-question').forEach(button => {
    button.addEventListener('click', () => {
        const faqItem = button.parentElement;

        // Baki sab ko band karne ke liye (Optional)
        document.querySelectorAll('.faq-item').forEach(item => {
            if (item !== faqItem) {
                item.classList.remove('active');
            }
        });

        // Current item ko toggle karein
        faqItem.classList.toggle('active');
    });
});
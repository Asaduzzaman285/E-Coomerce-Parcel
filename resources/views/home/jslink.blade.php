<script src="home/js/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="home/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="home/js/bootstrap.js"></script>
<!-- custom js -->
<script src="home/js/custom.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Listen for clicks on pagination links
        const paginationLinks = document.querySelectorAll('.pagination a');
        paginationLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                // Set flag in sessionStorage (only for current session)
                sessionStorage.setItem('scrollToProducts', 'true');
            });
        });

        // Scroll to the #products section if the flag is set
        if (sessionStorage.getItem('scrollToProducts') === 'true') {
            const productsSection = document.getElementById('products');
            if (productsSection) {
                productsSection.scrollIntoView({ behavior: 'smooth' });
            }
            // Remove the flag after scrolling to avoid triggering it again
            sessionStorage.removeItem('scrollToProducts');
        }
    });
</script>



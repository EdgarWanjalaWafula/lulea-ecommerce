jQuery(document).ready(function ($) {

    miscFunctions()
    function miscFunctions() {

        // Trigger modal manually on page ready 
        const newsletterModal = $('#newsletter-modal')

        console.log(newsletterModal.length > 0)
        
        if (newsletterModal.length > 0) {
            const myModal = new bootstrap.Modal(newsletterModal, {
                keyboard: false
            })

            setTimeout(() => {
                myModal.show(myModal)
            }, 1800);
        }

        // Remove loader 
        setTimeout(() => {
            $("body").addClass("page-ready")
        }, 1000);
    }
})

window.addEventListener("load", () => {
    ViewInCardEvent();
});

const ViewInCardEvent = () => {
    const ViewIns = document.querySelectorAll('#ViewIn');
    if (!ViewIns) { return false; }
    const options = {
        threshold: 0.1
    };
    const observer = new IntersectionObserver(showIn, options);
    ViewIns.forEach(ViewIn => {
        observer.observe(ViewIn);
    });
    function showIn(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show-in');
            // } else {
            //     entry.target.classList.remove('show-in');
            }
        });
    };
};
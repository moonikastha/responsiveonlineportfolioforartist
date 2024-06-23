const t1= gsap.timeline();
t1.from('nav ul li',{
    y: -100,
    duration: 0.7,
    stagger: 1,
    opacity: 1
})
gsap.from('.header-images img', {
    x: -1500,
    opacity : 1,
    duration: 1,
    stagger:1
});
const headerImage = document.querySelector('.header-image');
let scrollAmount = 0;
window.addEventListener('scroll',() =>{
    const delta = window.scrollY-scrollAmount;
    scrollAmount = window.scrollY;
    headerImage.scrollLeft += delta * 5.5;
});
document.addEventListener("DOMContentLoaded", function() {
    const navLinks = document.querySelectorAll('nav ul li a');

    function highlightActiveLink() {
        const sections = document.querySelectorAll('section');
        sections.forEach(section => {
            const sectionTop = section.offsetTop - 50; 
            const sectionId = section.getAttribute('id');
            const navLink = document.querySelector(`nav ul li a[href="#${sectionId}"]`);

            if (window.scrollY >= sectionTop) {
                navLinks.forEach(link => link.classList.remove('active'));
                navLink.classList.add('active');
            }
        });
    }

    window.addEventListener('scroll', highlightActiveLink);
    highlightActiveLink();
});
//Toogle
const checkbox = document.querySelector('.switch input');

checkbox.addEventListener('change', function() {
  const isChecked = this.checked;
  if (isChecked) {
    document.body.style.backgroundColor = 'black';
    document.body.style.color='white';
  } else {
    document.body.style.backgroundColor = 'white';
    document.body.style.color='black';
  }
});

document.getElementById("downloadBtn").addEventListener("click", function() {
    var fileUrl = './public/resume.pdf';
    var fileName = 'resume.pdf';

    var a = document.createElement('a');
    a.href = fileUrl;
    a.download = fileName;
    document.body.appendChild(a);
    a.click();
    document.body.removeChild(a);
});

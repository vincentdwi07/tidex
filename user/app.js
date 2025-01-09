
document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.product-card-1');

    cards.forEach(card => {
        const svgArrow = card.querySelector('.rotate-right');
        const info = card.querySelector('.product-card-info')
        let isRotated = false;

        card.addEventListener('click', function() {
            if (isRotated) {
                svgArrow.classList.remove('rotate-down');
                svgArrow.classList.add('rotate-right');
                console.log("Balek")
            } else {
                svgArrow.classList.remove('rotate-right');
                svgArrow.classList.add('rotate-down');
                console.log("Diputer")

            }
            isRotated = !isRotated;
        });
    });
});


document.addEventListener('DOMContentLoaded', function() {
  const cards = document.querySelectorAll('.product-card-2');

  cards.forEach(card => {
      const info = card.querySelector('.product-card-info');
      let isFade = false;

      card.addEventListener('click', function() {
          if (isFade) {
              info.classList.remove('fade-down');
              info.classList.add('product-card-info');
              console.log("tes")
          } else {
              info.classList.remove('product-card-info');
              info.classList.add('fade-down');
              console.log("tes1")

          }
          isFade = !isFade;
      });
  });
});



const numberOfProjects = 36;
const container = document.querySelector('.row.mx-auto.px-md-5.projects');

for (let i = 1; i <= numberOfProjects; i++) {
    const columnDiv = document.createElement('div');
    columnDiv.classList.add('col-6', 'col-md-3', 'col-lg-2');

    const projectItemDiv = document.createElement('div');
    projectItemDiv.classList.add('project-item');

    const img = document.createElement('img');
    img.src = `./user/project/${i}.svg`;
    img.alt = '';

    projectItemDiv.appendChild(img);
    columnDiv.appendChild(projectItemDiv);
    container.appendChild(columnDiv);
}

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    stagePadding: 0,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1200:{
            items:4
        }
    }
})
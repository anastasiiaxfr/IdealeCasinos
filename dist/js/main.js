// SWIPER slider
const swiper = new Swiper(".swiper", {
  slidesPerView: 4,
  spaceBetween: 16,
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1.5,
    },
    520: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 3,
    },
    998: {
      slidesPerView: 4,
    },
  },
});



const swiper_editor_choise = new Swiper(".swiper-editor-choise", {
  slidesPerView: 1,
  spaceBetween: 16,
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    520: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 3,
    },
    998: {
      slidesPerView: 3,
    },
  },
});

const swiper_slide_5 = new Swiper(".slider-5", {
  slidesPerView: 5,
  spaceBetween: 16,
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1.5,
    },
    520: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 3,
    },
    998: {
      slidesPerView: 5,
    },
  },
});

const swiper_slide_3 = new Swiper(".slider-3", {
  slidesPerView: 'auto',
  spaceBetween: 16,
  loop: true,
  breakpoints: {
    0: {
      slidesPerView: 1.5,
    },
    520: {
      slidesPerView: 2,
    },
    640: {
      slidesPerView: 3,
    },
    998: {
      slidesPerView: 3,
    },
  },
});


//TABLE wrapper
function updateTableLayout() {
  const tables = document.querySelectorAll('table');

  tables.forEach((table) => {
    const tableWidth = table.offsetWidth;
    const containerWidth = table.parentElement.offsetWidth;

    if (tableWidth > containerWidth) {
      if (!table.parentElement.classList.contains('table__wrap', 'table__wrap--scroll')) {
        const wrapper = document.createElement('div');
        wrapper.classList.add('table__wrap', 'table__wrap--scroll');
        table.parentElement.insertBefore(wrapper, table);
        wrapper.appendChild(table);
      }
    } else {
      const scrollWrapper = table.parentElement.querySelector('.table__wrap--scroll');
      if (scrollWrapper) {
        scrollWrapper.parentElement.insertBefore(table, scrollWrapper);
        scrollWrapper.remove();
      }
    }
  });
}

updateTableLayout();
window.addEventListener('resize', updateTableLayout);
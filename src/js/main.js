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
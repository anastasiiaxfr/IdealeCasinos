// SWIPER slider
const swiper = new Swiper(".swiper", {
  slidesPerView: 1,
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

const swiper_slide_4 = new Swiper(".slider-4", {
    slidesPerView: 5,
    spaceBetween: 16,
    loop: false,
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

//COOKIE
function setCookie(name, value, days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function removeCookie(name) {
    document.cookie = name + '=; Max-Age=-99999999;';
}


const cookie_true = document.querySelector('#cookie_true');
const cookie_false = document.querySelector('#cookie_false');
const cookie_btn = document.querySelectorAll('.cookie .btn');
const cookie = document.querySelector('.cookie');


cookie_btn.forEach(i => {
    i.addEventListener('click', function () {
        setCookie("policy", "selected", 365);
        cookie.classList.add('d-none');
    });
});

const get_cookie = getCookie("policy");

(function () {
    if (!get_cookie) {
        cookie.classList.add('d-block');
    }
})();

//DRAWER menu
const menu_toggle = document.querySelector('.menu__toggler');
const drawer = document.querySelector('.drawer__wrap');

menu_toggle.addEventListener('click', function(){
  drawer.classList.toggle('d-flex');
  this.classList.toggle('active');
});

//SEARCH
const favorite = document.querySelector('.favorite');
const search_toggle = document.querySelector('.search__toggle');
const search_overlay = document.querySelector('.search');
search_toggle.addEventListener('click', function(){
    search_overlay.classList.toggle('d-flex');
    //favorite.classList.toggle('d-none');
    //menu_toggle.classList.toggle('d-none');
});

//TABS
const tabs = document.querySelectorAll(".tab");
const tabs_item = document.querySelectorAll(".tab__item");

tabs[0].classList.add('tab--active');
tabs_item[0].classList.add('tab__item--active');

for (let i = 0; i < tabs.length; i++) {
    tabs[i].addEventListener("click", (event) => {

        let tab = event.target.parentElement.children;
        for (let c = 0; c < tab.length; c++) {
            tab[c].classList.remove("tab--active");
        }
        tabs[i].classList.add("tab--active");
        let tab_item = event.target.parentElement.nextElementSibling.children;
        for (let j = 0; j < tab_item.length; j++) {
            tab_item[j].classList.remove("tab__item--active");
        }
        tabs_item[i].classList.add("tab__item--active");

    });
}
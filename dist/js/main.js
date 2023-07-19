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

const swiper_toc = new Swiper(".swiper-toc", {
    slidesPerView: 1,
    slidesPerGroup: 6,
    spaceBetween: 0,
    loop: true,
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
  slidesPerView: "auto",
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

const swiper_str = new Swiper(".swiper-str", {
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
      slidesPerView: 4,
    },
  },
});

//TABLE wrapper
function updateTableLayout() {
  const tables = document.querySelectorAll("table");

  tables.forEach((table) => {
    const tableWidth = table.offsetWidth;
    const containerWidth = table.parentElement.offsetWidth;

    if (tableWidth > containerWidth) {
      if (
        !table.parentElement.classList.contains(
          "table__wrap",
          "table__wrap--scroll"
        )
      ) {
        const wrapper = document.createElement("div");
        wrapper.classList.add("table__wrap", "table__wrap--scroll");
        table.parentElement.insertBefore(wrapper, table);
        wrapper.appendChild(table);
      }
    } else {
      const scrollWrapper = table.parentElement.querySelector(
        ".table__wrap--scroll"
      );
      if (scrollWrapper) {
        scrollWrapper.parentElement.insertBefore(table, scrollWrapper);
        scrollWrapper.remove();
      }
    }
  });
}

updateTableLayout();
window.addEventListener("resize", updateTableLayout);

//COOKIE
function setCookie(name, value, days) {
  var expires = "";
  if (days) {
    var date = new Date();
    date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
    expires = "; expires=" + date.toUTCString();
  }
  document.cookie = name + "=" + (value || "") + expires + "; path=/";
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(";");
  for (var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == " ") c = c.substring(1, c.length);
    if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
  }
  return null;
}

function removeCookie(name) {
  document.cookie = name + "=; Max-Age=-99999999;";
}

const cookie_true = document.querySelector("#cookie_true");
const cookie_false = document.querySelector("#cookie_false");
const cookie_btn = document.querySelectorAll(".cookie .btn");
const cookie = document.querySelector(".cookie");

cookie_btn.forEach((i) => {
  i.addEventListener("click", function () {
    setCookie("policy", "selected", 365);
    cookie.classList.add("d-none");
  });
});

const get_cookie = getCookie("policy");

(function () {
  if (!get_cookie) {
    cookie.classList.add("d-block");
  }
})();

//DRAWER menu
const menu_toggle = document.querySelector(".menu__toggler");
const drawer = document.querySelector(".drawer__wrap");

menu_toggle.addEventListener("click", function () {
  drawer.classList.toggle("d-flex");
  this.classList.toggle("active");
});

//SEARCH
const favorite = document.querySelector(".favorite");
const search_toggle = document.querySelector(".search__toggle");
const search_overlay = document.querySelector(".search");
search_toggle.addEventListener("click", function () {
  search_overlay.classList.toggle("d-flex");
  //favorite.classList.toggle('d-none');
  //menu_toggle.classList.toggle('d-none');
});

//TABS
const tabWraps = document.querySelectorAll(".tab__wrap");

tabWraps.forEach((tabWrap) => {
  const tabs = tabWrap.querySelectorAll(".tab");
  const tabsItems = tabWrap.nextElementSibling.querySelectorAll(".tab__item");

  tabs[0].classList.add("tab--active");
  tabsItems[0].classList.add("tab__item--active");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", (event) => {
      event.preventDefault();

      tabs.forEach((tab) => tab.classList.remove("tab--active"));
      tabsItems.forEach((item) => item.classList.remove("tab__item--active"));

      tab.classList.add("tab--active");
      tabsItems[index].classList.add("tab__item--active");
    });
  });
});

//SELECT
const select = document.querySelectorAll(".select");

select.forEach((i) =>
    i.addEventListener("click", function () {
        const select_list = i.parentNode.querySelector(".select-list");
        const select_icon = i.querySelector(".select-icon");
        if (select_list) {
            select_list.classList.toggle("active");
        }
        select_icon.classList.toggle("active");
    })
);

const select_value = document.querySelectorAll(".select-list li");
select_value.forEach((i) =>
    i.addEventListener("click", function () {
        let value = this.textContent;
        const select_val = i.parentNode.previousElementSibling.querySelector(".select-val");
        select_val.textContent = value;
        i.parentNode.classList.remove("active");
        i.parentNode.previousElementSibling.querySelector(".select-icon").classList.remove("active");
    })
);


window.addEventListener("click", function (event) {
    select.forEach((i) => {
        const select_list = i.parentNode.querySelector(".select-list");
        const select_icon = i.querySelector(".select-icon");
        if (!i.contains(event.target)) {
            if (select_list) {
                select_list.classList.remove("active");
            }
            select_icon.classList.remove("active");
        }
    });
});

// SCROLL TABS
//let move = require('move');

const scrollBarWidths = 40;
const wrapper = document.getElementsByClassName("wrapper-nav")[0];
const navLink = document.getElementsByClassName("toc__item");
const lastNavLink = navLink[navLink.length - 1];

const scrollerRight = document.getElementsByClassName("scroller-right")[0];
const scrollerLeft = document.getElementsByClassName("scroller-left")[0];

const list = document.querySelectorAll(".list");

let btnTriggered = false;

let widthOfList = function() {
    let itemsWidth = 0;
  
    const listLinks = document.querySelectorAll(".list a");
  
    listLinks.forEach((el) => { 
      let itemWidth = getOuterWidth(el);
      itemsWidth += itemWidth;
    });
  
    return itemsWidth;
};
  
let widthOfHidden = function(w) {
    const wrapperh = document.getElementsByClassName("wrapper-nav")[0];

    w = (!w) ? 0 : w;

    oW = getOuterWidth(wrapperh) - w;

    let ww = parseFloat((0 - oW).toFixed(3));

    let hw = (oW - widthOfList() - getLeftPosi()) - scrollBarWidths;

    let rp = document.body.clientWidth - (getOuterLeft(lastNavLink) + getOuterWidth(lastNavLink)) - w;
    
    if (ww > hw) {
        //return ww;
        return (rp > ww ? rp : ww);
    }
    else {
        //return hw;
        return (rp > hw ? rp : hw);
    }
};

let getLeftPosi = function() {
    let ww = 0 - getOuterWidth(wrapper);
    let lp = getOuterLeft(list[0]);

    if (ww > lp) {
        return ww;
    }
    else {
        return lp;
    }
};

let reAdjust = function() {
  let rp = document.body.clientWidth - (getOuterLeft(lastNavLink) + getOuterWidth(lastNavLink));

  if (getOuterWidth(wrapper) < widthOfList() && (rp < 0)) {
    scrollerRight.style.cssText = 'opacity: 1';
  }
  else {
    scrollerRight.style.opacity = '0';
  }

  if (getLeftPosi() < 0) {
    scrollerLeft.style.cssText = 'opacity: 1';
  }
  else {
    scrollerLeft.style.opacity = '0';
  }

  btnTriggered = false;
}

window.addEventListener('resize', function(event) {
    reAdjust();
}, true);

scrollerRight.addEventListener("click", function() {
    if (btnTriggered) return;

    btnTriggered = true;

    fade(scrollerLeft);
    unfade(scrollerRight);

    let wR = getOuterWidth(scrollerRight);

    move(document.querySelectorAll(".list")[0]).add("margin-left", +widthOfHidden(wR), 200).end().then(x=> {
        reAdjust();
    });
});

scrollerLeft.addEventListener("click", function() {
    if (btnTriggered) return;

    btnTriggered = true;

    fade(scrollerRight);
    unfade(scrollerLeft);

    let wL = getOuterWidth(scrollerLeft);

    move(document.querySelectorAll(".list")[0]).set("margin-left", 0, 200).end().then(()=> {
        reAdjust();
    });
});

let getOuterLeft = function(elem) {
    return elem.getBoundingClientRect().left;
}

let getOuterWidth = function(elem) {
    return parseFloat(window.getComputedStyle(elem).width);
}

function fade(elem) {
    elem.style.transition="opacity 0.6s";
    elem.style.opacity=0;
}

function unfade(elem) {
    elem.style.transition="opacity 0.6s";
    elem.style.opacity=1;
}

reAdjust();
/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
(function() {
  let container, button, menu, links, i, len;

  container = document.getElementById('site-navigation');
  if (!container) {
    return;
  }

  button = container.getElementsByTagName('button')[0];
  if ('undefined' === typeof button) {
    return;
  }

  menu = container.getElementsByTagName('ul')[0];

  // Hide menu toggle button if menu is empty and return early.
  if ('undefined' === typeof menu) {
    button.style.display = 'none';
    return;
  }

  menu.setAttribute('aria-expanded', 'false');
  if (-1 === menu.className.indexOf('nav-menu')) {
    menu.className += ' nav-menu';
  }

  button.onclick = function() {
    if (-1 !== container.className.indexOf('toggled')) {
      container.className = container.className.replace(' toggled', '');
      button.setAttribute('aria-expanded', 'false');
      menu.setAttribute('aria-expanded', 'false');
    } else {
      container.className += ' toggled';
      button.setAttribute('aria-expanded', 'true');
      menu.setAttribute('aria-expanded', 'true');
    }
  };

  // Get all the link elements within the menu.
  links = menu.getElementsByTagName('a');

  // Each time a menu link is focused or blurred, toggle focus.
  for (i = 0, len = links.length; i < len; i++) {
    links[i].addEventListener('focus', toggleFocus, true);
    links[i].addEventListener('blur', toggleFocus, true);
  }

  /**
   * Sets or removes .focus class on an element.
   */
  function toggleFocus() {
    let self = this;

    // Move up through the ancestors of the current link until we hit .nav-menu.
    while (-1 === self.className.indexOf('nav-menu')) {
      // On li elements toggle the class .focus.
      if ('li' === self.tagName.toLowerCase()) {
        if (-1 !== self.className.indexOf('focus')) {
          self.className = self.className.replace(' focus', '');
        } else {
          self.className += ' focus';
        }
      }

      self = self.parentElement;
    }
  }

  /**
   * Toggles `focus` class to allow submenu access on tablets.
   */
  (function(container) {
    let touchStartFn,
      i,
      parentLink = container.querySelectorAll(
        '.menu-item-has-children > a, .page_item_has_children > a'
      );

    if ('ontouchstart' in window) {
      touchStartFn = function(e) {
        let menuItem = this.parentNode,
          i;

        if (!menuItem.classList.contains('focus')) {
          e.preventDefault();
          for (i = 0; i < menuItem.parentNode.children.length; ++i) {
            if (menuItem === menuItem.parentNode.children[i]) {
              continue;
            }
            menuItem.parentNode.children[i].classList.remove('focus');
          }
          menuItem.classList.add('focus');
        } else {
          menuItem.classList.remove('focus');
        }
      };

      for (i = 0; i < parentLink.length; ++i) {
        parentLink[i].addEventListener('touchstart', touchStartFn, false);
      }
    }
  })(container);

// Mobile Menu

const hamburger = document.getElementById('menu-toggle');
const sizedMenu = document.getElementsByClassName('menu-menu-1-container')[0];

function show() {
  sizedMenu.style.display = "initial";
  document.body.style.overflow="hidden"
}

function hide() {
  sizedMenu.style.display = "none";
  document.body.style.overflow="scroll"
}

let menuCounter = 0;

hamburger.addEventListener('click', () => {
  if (menuCounter === 0) {
    menuCounter = 1;
    show();
  } else {
    menuCounter = 0;
    hide();
  }
})

// Search menu

// const iconSearch = document.getElementsByClassName('icon-search')[0];
// const searchForm = document.getElementsByClassName('the-search-form')[0];

// function toggleSearch() {
//   searchForm.style.width = "0";
// }

// function hideSearch() {
//   searchForm.style.width = "50px";
// }

// let searchCounter = 0;

// iconSearch.addEventListener('click', () => {
//   if (searchCounter === 0 ) {
//     searchCounter = 1;
//     toggleSearch();
//   } else {
//     searchCounter = 0;
//     hideSearch();
//   }
// })

// function classClick() {

//   const classSelect = document.getElementById('icon-search');
//   const toggle = document.getElementById('s-toggle');

//   classSelect.addEventListener("click", function() {
    
//     toggle.classList.add('search-toggle-click');
//     toggle.classList.remove('search-toggle-click');

//   });
// };

})();
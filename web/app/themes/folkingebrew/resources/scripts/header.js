export const header = async (err) => {
  if (err) {
    console.error(err);
  }

  const siteHeader = document.querySelector('#site-header');
  const siteHeaderHeight = siteHeader.offsetHeight;
  const { body: documentBody } = document;
  const documentHeight = documentBody.scrollHeight;
  const menuToggle = document.querySelector('#menu-toggle');
  let lastScrollTop = 0;

  const toggleMenu = () => {
    documentBody.classList.toggle('mobile-navigation-open');
    documentBody.classList.toggle('overflow-hidden');
    return false;
  };

  menuToggle.addEventListener('click', toggleMenu);

  const handleScroll = () => {
    const scroll = window.scrollY;

    if (scroll >= siteHeaderHeight / 10) {
      documentBody.classList.remove('at-the-top');
    } else {
      documentBody.classList.add('at-the-top');
    }

    if (scroll > lastScrollTop && scroll > siteHeaderHeight) {
      siteHeader.classList.toggle('absolute', true);
      siteHeader.classList.toggle('opacity-0', true);
      siteHeader.classList.toggle('static', false);
      siteHeader.classList.toggle('opacity-100', false);
    } else if (scroll + window.innerHeight < documentHeight) {
      siteHeader.classList.toggle('absolute', false);
      siteHeader.classList.toggle('opacity-0', false);
      siteHeader.classList.toggle('static', true);
      siteHeader.classList.toggle('opacity-100', true);
    }

    lastScrollTop = scroll;
  };

  document.addEventListener('scroll', () => {
    requestAnimationFrame(handleScroll);
  });
};

import.meta.webpackHot?.accept(header);

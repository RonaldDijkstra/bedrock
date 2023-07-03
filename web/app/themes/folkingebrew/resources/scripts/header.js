export const header = async (err) => {
    if (err) {
      console.error(err);
    }
  
    const siteHeader = document.querySelector('.site-header');

    console.log(siteHeader);
  };
  
  import.meta.webpackHot?.accept(header);
function darkMode() {
    switch (localStorage.getItem('dark')) {
      case '1':
        dark_helper(0);
        break;
      case '0':
        dark_helper(1);
    }
  }
  function dark_helper(mode) {
    let page = window.location.pathname.split('/')[window.location.pathname.split('/').length - 1];
    switch (page) {
      case "about":
        if (1 == mode) {
          dark_helper_helper(1);
          document.getElementById("about").style.color = "white";
          document.getElementById("logo").setAttribute("src", "./img/favicon_dark.png");
        } else {
          dark_helper_helper(0);
          document.getElementById("logo").setAttribute("src", "./img/favicon.png");
        }
        break;
      case "terms-and-conditions":
        if (1 == mode) {
          dark_helper_helper(1);
        } else {
          dark_helper_helper(0);
        }
        break;
      default:
        if (1 == mode) {
          dark_helper_helper(1);
          document.getElementById('season').style.color = "white";
        } else {
          dark_helper_helper(0);
          document.getElementById("season").style.color = "black";
        }
    }
  }
  function dark_helper_helper(mode) {
    if (1 == mode) {
      document.getElementById("lightctrl").innerHTML = "&#127774;";
      document.querySelector("link[rel~='icon']").href = "./img/favicon_dark.png";
      document.getElementsByTagName("header")[0].style.backgroundImage = "linear-gradient(to top right, #522719, #0a214c)";
      document.getElementsByTagName("footer")[0].style.backgroundImage = "linear-gradient(to top right, #522719, #0a214c)";
      document.getElementsByTagName('footer')[1].style.backgroundImage = "linear-gradient(to top right, #522719, #0a214c)";
      document.getElementsByTagName('footer')[0].style.color = "white";
      document.getElementsByTagName('footer')[1].style.color = "white";
      document.getElementsByName("theme-color")[0].setAttribute("content", "#1d233f");
      document.getElementsByName("msapplication-TileColor")[0].setAttribute("content", '#1d233f');
      document.documentElement.style.color = "white";
      document.getElementsByTagName('body')[0].style.backgroundImage = "url('./img/pattern-tile-dark.png')";
      localStorage.setItem("dark", 1);
    } else {
      document.getElementById("lightctrl").innerHTML = '🌚';
      document.querySelector("link[rel~='icon']").href = './img/favicon.png';
      document.getElementsByTagName("header")[0].style.backgroundImage = "linear-gradient(to top right, #add8e6, #f5deb3)";
      document.getElementsByTagName('footer')[0].style.backgroundImage = "linear-gradient(to top right, #add8e6, #f5deb3)";
      document.getElementsByTagName("footer")[1].style.backgroundImage = "linear-gradient(to top right, #add8e6, #f5deb3)";
      document.getElementsByTagName("footer")[0].style.color = '';
      document.getElementsByTagName("footer")[1].style.color = '';
      document.getElementsByName('theme-color')[0].setAttribute("content", "#e2dcc0");
      document.getElementsByName("msapplication-TileColor")[0].setAttribute("content", "#e2dcc0");
      document.documentElement.style.color = '';
      document.getElementsByTagName("body")[0].style.backgroundImage = '';
      localStorage.setItem("dark", 0);
    }
  }
  function closeit() {
    document.getElementsByClassName("overlay")[0].style.visibility = "hidden";
    document.getElementsByClassName('overlay')[0].style.opacity = '0';
    document.getElementsByClassName("content")[0].innerHTML = '';
    enableScroll();
  }
  function clearAll() {
    document.getElementsByClassName("content")[0].innerHTML = '';
    document.getElementById("seas").innerHTML = '';
    var articleArray = document.getElementsByTagName("article");
    for (let i = 0; i < articleArray.length; i++) {
      articleArray[i].innerHTML = '';
    }
    arr = [];
  }
  function enableScroll() {
    window.onscroll = function () {};
  }
  function disableScroll() {
    scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;
    window.onscroll = function () {
      window.scrollTo(scrollLeft, scrollTop);
    };
  }
  window.onload = function () {
    window.innerWidth;
    if (window.innerWidth <= 0x23a) {
      if ('none' != document.getElementsByTagName("nav")[0].style.display) {
        document.getElementsByTagName("nav")[0].style.display = "none";
      } else {
        document.getElementsByTagName("nav")[0].style.display = 'flex';
      }
    }
  };
  window.addEventListener('resize', function () {
    if (window.innerWidth > 0x2e4) {
      this.document.getElementsByTagName("nav")[0].style.display = "block";
    } else {
      this.document.getElementsByTagName("nav")[0].style.display = 'none';
    }
  });
  window.addEventListener('DOMContentLoaded', () => {
    for (let i = 0; i < document.getElementsByClassName("sitenav").length - 1; i++) {
      document.getElementsByClassName("sitenav")[i].addEventListener("click", () => {
        location.href = document.getElementsByClassName('sitenav')[i].getAttribute('id');
      });
    }
    document.getElementsByClassName("sitenav")[2].addEventListener("click", () => {
      darkMode();
    });
    document.getElementById("menubut").addEventListener("click", function () {
      if ('flex' == document.getElementsByTagName("nav")[0].style.display || null == document.getElementsByTagName('nav')[0].style.display) {
        document.getElementsByTagName("nav")[0].style.display = "none";
        document.getElementsByTagName("header")[0].style.position = "unset";
        document.getElementsByTagName("header")[0].style.width = "unset";
        document.getElementsByTagName("header")[0].style.top = "unset";
        document.getElementsByTagName("main")[0].style.top = "unset";
        enableScroll();
      } else {
        document.getElementsByTagName('nav')[0].style.display = 'flex';
        document.getElementsByTagName('header')[0].style.position = 'fixed';
        document.getElementsByTagName("header")[0].style.width = "-webkit-fill-available";
        document.getElementsByTagName("header")[0].style.top = '0';
        document.getElementsByTagName('main')[0].style.top = '173px';
        disableScroll();
      }
    });
    if (null == localStorage.getItem('dark')) {
      localStorage.setItem('dark', 0);
      dark_helper(0);
    } else if (1 == localStorage.getItem("dark")) {
      dark_helper(1);
    } else {
      dark_helper(0);
    }
  });
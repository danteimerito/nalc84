// document.addEventListener('DOMContentLoaded', function() {
//     var elems = document.querySelectorAll('.sidenav');
//     var instances = M.Sidenav.init(elems);
//   });


"use strict";

var sideNav = document.getElementById('mobile-demo');
var trigger = document.getElementById('trigger');
var closeXmenu = document.getElementById('mobile-menu-close');
var sideNavOverlay = document.getElementById('sidenav-overlay'); //open mobile nav by clicking the 'menu' button (or hamburger)

trigger.addEventListener('click', function () {
  sideNav.style.transform = 'translateX(0%)';
  sideNav.style.width = '300px';
  sideNavOverlay.style.opacity = 1;
  sideNavOverlay.style.display = 'block';
}); // close mobile nav by clicking the X

closeXmenu.addEventListener('click', function () {
  sideNav.style.transform = 'translateX(-100%)';
  sideNavOverlay.style.opacity = 0;
  sideNavOverlay.style.display = 'none';
}); // close mobile nav by clicking outside 

sideNavOverlay.addEventListener('click', function () {
  sideNav.style.transform = 'translateX(-100%)';
  sideNavOverlay.style.opacity = 0;
  sideNavOverlay.style.display = 'none';
}); // Menu Dropdowns

var dropdownOverlay = document.getElementById('btn-overlay');
var toggleBtn = document.getElementsByClassName('dropdown-trigger');

var _loop = function _loop(i) {
  var toggleContent = document.getElementById('dropdown' + i);
  var toggleBtn = document.getElementById('trigger-' + i);
  toggleBtn.addEventListener('click', function () {
    toggleContent.classList.toggle('di-menu-open');
    dropdownOverlay.style.opacity = 1;
    dropdownOverlay.style.display = 'block';
  });
  dropdownOverlay.addEventListener('click', function () {
    if (toggleContent.classList.contains('di-menu-open')) {
      toggleContent.classList.toggle('di-menu-open');
      dropdownOverlay.style.opacity = 0;
      dropdownOverlay.style.display = 'none';
    }
  });
};

for (var i = 1; i < toggleBtn.length + 1; i++) {
  _loop(i);
} 

// Navigation - Current page Indicators
var currentLocation = window.location.href;
var currentPathname = window.location.pathname;
var navLink = document.querySelectorAll('#nav-mobile a');
var navLength = navLink.length;

for (var _i = 0; _i < navLength; _i++) {
  if (navLink[_i].href+"/" === currentLocation) {
    navLink[_i].classList.add('nav-active');
  }
} 
// home button page indicator on desktop
if(window.location.href == window.location.origin+'/') {
  var home = document.getElementById('home');
  home.classList.add('nav-active');
}

// Navigation - show ative menu link styling for parent categories (of sub nav items)
var url = window.location.href;
var newsBtn = document.getElementById('news');
var eventsBtn = document.getElementById('events');
var local84Btn = document.getElementById('trigger-2');
var topicsBtn = document.getElementById('trigger-3');
var referenceBtn = document.getElementById('trigger-1');
var contactBtn = document.getElementById('contact');
var searchBtn = document.getElementById('search');

var arr = ['news', 'events', 'local84', 'topics', 'reference', 'contact', 'search'];


// ------------ Use of 'includes' method not supported in IE11 -------------// 
for (var _i2 = 0, _arr = arr; _i2 < _arr.length; _i2++) {
  var x = _arr[_i2];
  if (url.includes('nalc84/' + x) || url.includes('.com/' + x) || url.includes('.org/' + x) || url.includes('.app/' + x)) {
    var varName = eval(x + 'Btn');
    varName.classList.add('button-active');
  }

  
} 

// nav indicators for subsections and/or pages with pagination. 
var referenceBtn = document.getElementById('trigger-1');
var handbooksBtn = document.getElementById('handbooks-manuals');
// var documentsBtn = document.getElementById('documents');
var minutesBtn = document.getElementById('meeting-minutes');
var presidentsBtn = document.getElementById('presidents-report');
var covid19Btn = document.getElementById('covid19');
var ccasBtn = document.getElementById('ccas');
var jobBiddingBtn = document.getElementById('job-bidding');
var retirementBtn = document.getElementById('retirement');

var handbooksBtnMobile = document.getElementById('handbooks-manuals-mobile');
// var documentsBtnMobile = document.getElementById('documents-mobile');
var minutesBtnMobile = document.getElementById('minutes-mobile');
var presidentsBtnMobile = document.getElementById('presidents-mobile');
// var covid19BtnMobile = document.getElementById('covid19-mobile');

//handbooks&manuals
if (
  url.includes('/handbooks_manuals/') ||
  url.includes('/handbooksandmanuals/')
  ) {
  referenceBtn.classList.add('button-active');
  handbooksBtn.classList.add('button-active');
  handbooksBtnMobile.classList.add('current');
}
//documents
// if (url.includes('/documents/')) {
//   referenceBtn.classList.add('button-active');
//   documentsBtn.classList.add('button-active');
//   documentsBtnMobile.classList.add('current');
// }
//meeting-minutes
if (url.includes('/meeting_minutes/')) {
  local84Btn.classList.add('button-active');
  minutesBtn.classList.add('button-active');
  minutesBtnMobile.classList.add('current');
}
//presidents-report
if (url.includes('/presidents-report/')) {
  local84Btn.classList.add('button-active');
  presidentsBtn.classList.add('button-active');
  presidentsBtnMobile.classList.add('current');
}
//covid19
if (url.includes('/covid19/')) {
  topicsBtn.classList.add('button-active');
  covid19Btn.classList.add('button-active');
  // covid19BtnMobile.classList.add('current');
}
//ccas
if (url.includes('/cca/')) {
  topicsBtn.classList.add('button-active');
  ccasBtn.classList.add('button-active');
}
//job bidding
if (url.includes('/jobbidding/')) {
  topicsBtn.classList.add('button-active');
  jobBiddingBtn.classList.add('button-active');
}
//retirement
if (url.includes('/retirement/')) {
  topicsBtn.classList.add('button-active');
  retirementBtn.classList.add('button-active');
}



// Navigation - style mobile slide-out active menu links
var sideNavLink = document.querySelectorAll('.sdmenu a');
var sideNavLength = sideNavLink.length;

for (var _i3 = 1; _i3 < sideNavLength; _i3++) {
  if (currentPathname === '/nalc84/') {
    sideNavLink[0].classList.add('current');    
  }
  else if ( currentPathname.includes(sideNavLink[_i3].pathname) && currentPathname !== '/nalc84/' ) {
    sideNavLink[_i3].classList.add('current');
  }
} 


// console.log(echo get_template_directory_uri())


// if (url.includes('nalc84/news/') || url.includes('.com/news/') || url.includes('.app/news/')) {
//     newsBtn.classList.add('button-active');
// }
// else if (url.includes('nalc84/events/') || url.includes('.com/events/') || url.includes('.app/events/')) {
//     eventsBtn.classList.add('button-active');
// }
// else if (url.includes('nalc84/local84/') || url.includes('.com/local84/') || url.includes('.app/local84/')) {
//   eventsBtn.classList.add('button-active');
// }


// else if (url.includes('nalc84/reference/') || url.includes('.com/reference/') || url.includes('.app/reference/')) {
//     resourcesBtn.classList.add('button-active');
// }
// else if (url.includes('nalc84/retirement') || url.includes('.com/retirement') || url.includes('.app/retirement')) {
//     retirementBtn.classList.add('button-active');
// }
// else if (url.includes('nalc84/covid19') || url.includes('.com/covid19') || url.includes('.app/covid19')) {
//     covidBtn.classList.add('button-active');
// }




// Collapsible Side Nav Items
var collapsibleHeader = document.getElementsByClassName('collapsible-header');
var colHeadLength = collapsibleHeader.length;
var collapsibleBody = document.getElementsByClassName('collapsible-body');

var _loop2 = function _loop2(_i4) {
  collapsibleHeader[_i4].addEventListener('click', function () {
    collapsibleBody[_i4].classList.toggle('collapsible-body-toggle');
  });
};

for (var _i4 = 0; _i4 < colHeadLength; _i4++) {
  _loop2(_i4);
} // SD MENU 


function SDMenu(id) {
  if (!document.getElementById || !document.getElementsByTagName) return false;
  this.menu = document.getElementById(id);
  this.submenus = this.menu.getElementsByTagName("div");
  this.remember = true;
  this.speed = 10;
  this.markCurrent = true;
  this.oneSmOnly = true;
}

SDMenu.prototype.init = function () {
  var mainInstance = this;

  for (var i = 0; i < this.submenus.length; i++) {
    this.submenus[i].getElementsByTagName("span")[0].onclick = function () {
      // debugger
      mainInstance.toggleMenu(this.parentNode);
    };
  }

  if (this.markCurrent) {
    var links = this.menu.getElementsByTagName("a");

    for (i = 0; i < links.length; i++) {
      if (links[i].href === document.location.href) {
        links[i].className = "current";
        break;
      }
    }
  }

  if (this.remember) {
    var regex = new RegExp("sdmenu_" + encodeURIComponent(this.menu.id) + "=([01]+)");
    var match = regex.exec(document.cookie);

    if (match) {
      var states = match[1].split("");

      for (i = 0; i < states.length; i++) {
        this.submenus[i].className = states[i] == 0 ? "collapsed" : "";
      }
    }
  }
};

SDMenu.prototype.toggleMenu = function (submenu) {
  if (submenu.className === "collapsed") this.expandMenu(submenu);else this.collapseMenu(submenu);
};

SDMenu.prototype.expandMenu = function (submenu) {
  var fullHeight = submenu.getElementsByTagName("span")[0].offsetHeight;
  var links = submenu.getElementsByTagName("a");

  for (var i = 0; i < links.length; i++) {
    fullHeight += links[i].offsetHeight;
  }

  var moveBy = Math.round(this.speed * links.length);
  var mainInstance = this;
  var intId = setInterval(function () {
    var curHeight = submenu.offsetHeight;
    var newHeight = curHeight + moveBy;
    if (newHeight < fullHeight) submenu.style.height = newHeight + "px";else {
      clearInterval(intId);
      submenu.style.height = "";
      submenu.className = "";
      mainInstance.memorize();
    }
  }, 30);
  this.collapseOthers(submenu);
};

SDMenu.prototype.collapseMenu = function (submenu) {
  var minHeight = submenu.getElementsByTagName("span")[0].offsetHeight;
  var moveBy = Math.round(this.speed * submenu.getElementsByTagName("a").length);
  var mainInstance = this;
  var intId = setInterval(function () {
    var curHeight = submenu.offsetHeight;
    var newHeight = curHeight - moveBy;
    if (newHeight > minHeight) submenu.style.height = newHeight + "px";else {
      clearInterval(intId);
      submenu.style.height = "";
      submenu.className = "collapsed";
      mainInstance.memorize();
    }
  }, 30);
};

SDMenu.prototype.collapseOthers = function (submenu) {
  if (this.oneSmOnly) {
    for (var i = 0; i < this.submenus.length; i++) {
      if (this.submenus[i] !== submenu && this.submenus[i].className !== "collapsed") this.collapseMenu(this.submenus[i]);
    }
  }
};

SDMenu.prototype.expandAll = function () {
  var oldOneSmOnly = this.oneSmOnly;
  this.oneSmOnly = false;

  for (var i = 0; i < this.submenus.length; i++) {
    if (this.submenus[i].className === "collapsed") this.expandMenu(this.submenus[i]);
  }

  this.oneSmOnly = oldOneSmOnly;
};

SDMenu.prototype.collapseAll = function () {
  for (var i = 0; i < this.submenus.length; i++) {
    if (this.submenus[i].className !== "collapsed") this.collapseMenu(this.submenus[i]);
  }
};

SDMenu.prototype.memorize = function () {
  if (this.remember) {
    var states = [];

    for (var i = 0; i < this.submenus.length; i++) {
      states.push(this.submenus[i].className === "collapsed" ? 0 : 1);
    }

    var d = new Date();
    d.setTime(d.getTime() + 30 * 24 * 60 * 60 * 1000);
    document.cookie = "sdmenu_" + encodeURIComponent(this.menu.id) + "=" + states.join("") + "; expires=" + d.toGMTString() + "; path=/";
  }
}; // initialize sd menu


var myMenu; // window.onload = function () {

myMenu = new SDMenu("my_menu");
myMenu.init(); // };
// END SD MENU

// Toggle Search Bar
const searchBar = document.getElementById('search-bar');
const searchToggle = document.getElementById('search');
// const searchClose = document.getElementById('search-close');
const searchMobile = document.getElementById('search-mobile');
// const searchImage = document.getElementById('search-icon');

searchToggle.addEventListener('click', function () {
  searchBar.classList.toggle("search-visible");
  searchToggle.classList.toggle("nav-active");
  
  // searchImage.src = window.location.href + 'wp-content/themes/nalc84/assets/images/icon-search-close.svg';
});
searchMobile.addEventListener('click', function () {
  searchBar.classList.toggle("search-visible");
});

// searchClose.addEventListener('click', function () {
//   searchBar.classList.remove("search-visible");
//   searchToggle.classList.remove("nav-active");
// });

// searchMobile.addEventListener('click', function () {
//   sideNav.style.transform = 'translateX(-100%)';
//   sideNavOverlay.style.opacity = 0;
//   sideNavOverlay.style.display = 'none';
//   searchBar.classList.add("search-visible");
// });


// sideNavOverlay.addEventListener('click', function () {
//   sideNav.style.transform = 'translateX(-100%)';
//   sideNavOverlay.style.opacity = 0;
//   sideNavOverlay.style.display = 'none';
// });
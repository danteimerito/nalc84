let sideNav = document.getElementById('mobile-demo');
        let trigger = document.getElementById('trigger');
        let closeXmenu = document.getElementById('mobile-menu-close');
        let sideNavOverlay = document.getElementById('sidenav-overlay');

        //open mobile nav by clicking the 'menu' button (or hamburger)
        trigger.addEventListener('click', function () {
            sideNav.style.transform = 'translateX(0%)';
            sideNav.style.width = '300px';
            sideNavOverlay.style.opacity = 1;
            sideNavOverlay.style.display = 'block';
        });

        // close mobile nav by clicking the X
        closeXmenu.addEventListener('click', function () {
            sideNav.style.transform = 'translateX(-100%)';
            sideNavOverlay.style.opacity = 0;
            sideNavOverlay.style.display = 'none';
        });

        // close mobile nav by clicking outside 
        sideNavOverlay.addEventListener('click', function () {
            sideNav.style.transform = 'translateX(-100%)';
            sideNavOverlay.style.opacity = 0;
            sideNavOverlay.style.display = 'none';
        });

        // Menu Dropdowns
        let dropdownOverlay = document.getElementById('btn-overlay');
        let toggleBtn = document.getElementsByClassName('dropdown-trigger');

        for (let i = 1; i < toggleBtn.length + 1; i++) {
            let toggleContent = document.getElementById('dropdown' + i);
            let toggleBtn = document.getElementById('trigger-' + i);

            toggleBtn.addEventListener('click', function () {
                toggleContent.classList.toggle('di-menu-open');
                dropdownOverlay.style.opacity = 1;
                dropdownOverlay.style.display = 'block';
            });

            dropdownOverlay.addEventListener('click', function () {
                if (
                    toggleContent.classList.contains('di-menu-open')

                ) {
                    toggleContent.classList.toggle('di-menu-open');
                    dropdownOverlay.style.opacity = 0;
                    dropdownOverlay.style.display = 'none';
                }
            });
        }


        // Navigation - Current page Indicators
        const currentLocation = window.location.href;
        const currentPathname = window.location.pathname;
        const navLink = document.querySelectorAll('#nav-mobile a');
        const navLength = navLink.length;

        for (let i = 0; i < navLength; i++) {
            if (navLink[i].href === currentLocation) {
                navLink[i].classList.add('nav-active')
            }
        }


        // Navigation - show ative menu link styling for parent categories (of sub nav items)
        let url = window.location.href;
        const newsBtn = document.getElementById('news');
        const eventsBtn = document.getElementById('events');
        const local84Btn = document.getElementById('trigger-2');
        const topicsBtn = document.getElementById('trigger-3');
        const referenceBtn = document.getElementById('trigger-1');
        const contactBtn = document.getElementById('contact');
        let arr = ['news', 'events', 'local84', 'topics', 'reference', 'contact'];

        for (let x of arr) {
            if (url.includes('8000/' + x) || url.includes('.com/' + x) || url.includes('.app/' + x)) {
                let varName = eval(x + 'Btn');
                varName.classList.add('button-active');
            }
        }


        // if (url.includes('8000/news/') || url.includes('.com/news/') || url.includes('.app/news/')) {
        //     newsBtn.classList.add('button-active');
        // }
        // else if (url.includes('8000/events/') || url.includes('.com/events/') || url.includes('.app/events/')) {
        //     eventsBtn.classList.add('button-active');
        // }
        // else if (url.includes('8000/resources/') || url.includes('.com/resources/') || url.includes('.app/resources/')) {
        //     resourcesBtn.classList.add('button-active');
        // }
        // else if (url.includes('8000/retirement') || url.includes('.com/retirement') || url.includes('.app/retirement')) {
        //     retirementBtn.classList.add('button-active');
        // }
        // else if (url.includes('8000/covid19') || url.includes('.com/covid19') || url.includes('.app/covid19')) {
        //     covidBtn.classList.add('button-active');
        // }


        // Navigation - style mobile slide-out active menu links
        const sideNavLink = document.querySelectorAll('.sdmenu a');
        const sideNavLength = sideNavLink.length;

        for (let i = 0; i < sideNavLength; i++) {
            if (sideNavLink[i].pathname === currentPathname) {
                sideNavLink[i].classList.add('current');
              }
        }

        // Collapsible Side Nav Items
        const collapsibleHeader = document.getElementsByClassName('collapsible-header');
        const colHeadLength = collapsibleHeader.length;
        const collapsibleBody = document.getElementsByClassName('collapsible-body');

        for (let i = 0; i < colHeadLength; i++) {
            collapsibleHeader[i].addEventListener('click', function () {
                collapsibleBody[i].classList.toggle('collapsible-body-toggle');
            })
        }


        // SD MENU 

        function SDMenu(id) {
            if (!document.getElementById || !document.getElementsByTagName)
                return false;
            this.menu = document.getElementById(id);
            this.submenus = this.menu.getElementsByTagName("div");
            this.remember = true;
            this.speed = 10;
            this.markCurrent = true;
            this.oneSmOnly = true;
        }
        SDMenu.prototype.init = function () {
            var mainInstance = this;
            for (var i = 0; i < this.submenus.length; i++)
                this.submenus[i].getElementsByTagName("span")[0].onclick = function () {
                    mainInstance.toggleMenu(this.parentNode);
                };
            if (this.markCurrent) {
                var links = this.menu.getElementsByTagName("a");
                for (i = 0; i < links.length; i++)
                    if (links[i].href === document.location.href) {
                        links[i].className = "current";
                        break;
                    }
            }
            if (this.remember) {
                var regex = new RegExp("sdmenu_" + encodeURIComponent(this.menu.id) + "=([01]+)");
                var match = regex.exec(document.cookie);
                if (match) {
                    var states = match[1].split("");
                    for (i = 0; i < states.length; i++)
                        this.submenus[i].className = (states[i] == 0 ? "collapsed" : "");
                }
            }
        };
        SDMenu.prototype.toggleMenu = function (submenu) {
            if (submenu.className === "collapsed")
                this.expandMenu(submenu);
            else
                this.collapseMenu(submenu);
        };
        SDMenu.prototype.expandMenu = function (submenu) {
            var fullHeight = submenu.getElementsByTagName("span")[0].offsetHeight;
            var links = submenu.getElementsByTagName("a");
            for (var i = 0; i < links.length; i++)
                fullHeight += links[i].offsetHeight;
            var moveBy = Math.round(this.speed * links.length);

            var mainInstance = this;
            var intId = setInterval(function () {
                var curHeight = submenu.offsetHeight;
                var newHeight = curHeight + moveBy;
                if (newHeight < fullHeight)
                    submenu.style.height = newHeight + "px";
                else {
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
                if (newHeight > minHeight)
                    submenu.style.height = newHeight + "px";
                else {
                    clearInterval(intId);
                    submenu.style.height = "";
                    submenu.className = "collapsed";
                    mainInstance.memorize();
                }
            }, 30);
        };
        SDMenu.prototype.collapseOthers = function (submenu) {
            if (this.oneSmOnly) {
                for (var i = 0; i < this.submenus.length; i++)
                    if (this.submenus[i] !== submenu && this.submenus[i].className !== "collapsed")
                        this.collapseMenu(this.submenus[i]);
            }
        };
        SDMenu.prototype.expandAll = function () {
            var oldOneSmOnly = this.oneSmOnly;
            this.oneSmOnly = false;
            for (var i = 0; i < this.submenus.length; i++)
                if (this.submenus[i].className === "collapsed")
                    this.expandMenu(this.submenus[i]);
            this.oneSmOnly = oldOneSmOnly;
        };
        SDMenu.prototype.collapseAll = function () {
            for (var i = 0; i < this.submenus.length; i++)
                if (this.submenus[i].className !== "collapsed")
                    this.collapseMenu(this.submenus[i]);
        };
        SDMenu.prototype.memorize = function () {
            if (this.remember) {
                var states = [];
                for (var i = 0; i < this.submenus.length; i++)
                    states.push(this.submenus[i].className === "collapsed" ? 0 : 1);
                var d = new Date();
                d.setTime(d.getTime() + (30 * 24 * 60 * 60 * 1000));
                document.cookie = "sdmenu_" + encodeURIComponent(this.menu.id) + "=" + states.join("") + "; expires=" + d.toGMTString() + "; path=/";
            }
        };

        // initialize sd menu

        var myMenu;
        // window.onload = function () {
        myMenu = new SDMenu("my_menu");
        myMenu.init();
        // };



        // END SD MENU

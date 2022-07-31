$(function () {

    const showNavbar = (toggleId, navId, bodyId, headerId) => {
        const toggle = $('#' + toggleId),
            nav = $('#' + navId),
            bodypd = $('#' + bodyId),
            headerpd = $('#' + headerId)

        // Validate that all variables exist
        if (toggle && nav && bodypd && headerpd) {
            toggle.on('click', () => {
                // show navbar
                nav.toggleClass('show')
                // change icon
                toggle.toggleClass('bx-x')
                // add padding to body
                bodypd.toggleClass('body-pd')
                // add padding to header
                headerpd.toggleClass('body-pd')
            })
        }
    }

    const darkTheme = (darkId) => {
        const dark = $('#' + darkId)

        if (dark) {
            dark.on('click', () => {
                $.ajax({
                    type: 'POST',
                    url: '/theme',
                    success: function (theme) {
                        document.documentElement.className = theme
                    }
                })
            })
        }
    }

    showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

    darkTheme('dark')
});
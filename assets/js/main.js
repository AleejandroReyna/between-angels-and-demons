const asignToggleThemeToButton = (button, main, darkModeVariable) => {
    button.addEventListener("click", () => {
        darkModeVariable = !darkModeVariable
        setDarkMode(main, darkModeVariable)
    })
}

const verifyDarkMode = () => {
    return !localStorage.getItem("is-dark-mode-active") ? false : JSON.parse(localStorage.getItem("is-dark-mode-active"))
}

const setDarkMode = (element, value) => {
    localStorage.setItem("is-dark-mode-active", String(value))
    if(value) {
        element.classList.add("dark-mode")
    } else {
        element.classList.remove("dark-mode")
    }
}

(() => {
    window.addEventListener("load", () => {
        const MAIN  = document.querySelector(".main-content")
        const DARK_MODE_TOGGLE_BUTTON = document.querySelector("#toogleDarkModeButton")
        let isDarkModeActive = verifyDarkMode()

        function main() {

            if(isDarkModeActive && MAIN) {
                setDarkMode(MAIN, isDarkModeActive)
            }

            if(MAIN && DARK_MODE_TOGGLE_BUTTON) {
                asignToggleThemeToButton(DARK_MODE_TOGGLE_BUTTON, MAIN, isDarkModeActive)
            }
        }

        main()

    })
})()
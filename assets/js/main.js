const asignToggleThemeToButton = (button, main) => {
    button.addEventListener("click", () => main.classList.toggle("dark-mode"))
}

(() => {
    window.addEventListener("load", () => {
        const MAIN  = document.querySelector(".main-content")
        const DARK_MODE_TOGGLE_BUTTON = document.querySelector("#toogleDarkModeButton")

        function main() {
            if(MAIN && DARK_MODE_TOGGLE_BUTTON) {
                asignToggleThemeToButton(DARK_MODE_TOGGLE_BUTTON, MAIN)
            }
        }

        main()

    })
})()
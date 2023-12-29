import "@splidejs/splide/css";
import Splide from "@splidejs/splide";

export const slider = (input) => {
    document.addEventListener("DOMContentLoaded", function () {
        const splide = new Splide(input, {
            type: "loop",
            focus: "center",
            padding: "10px",
            gap: "4px",
            autoWidth: true,
            arrows: false,
            autoplay: true,
        });

        splide.on("pagination:mounted", function (data) {
            data.list.classList.remove("splide__pagination--ltr");
            data.list.classList.remove("splide__pagination");
        });
        splide.mount();
    });
}

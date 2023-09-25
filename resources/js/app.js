import "./bootstrap";
import "../css/app.css";
import "swiffy-slider/css"
import "@protonemedia/laravel-splade/dist/style.css";
import { createApp } from "vue/dist/vue.esm-bundler.js";
import { renderSpladeApp, SpladePlugin } from "@protonemedia/laravel-splade";
import "@protonemedia/laravel-splade/dist/jodit.css";
import "../../public/assets/js/toggle-dark-mode";
import { swiffyslider } from 'swiffy-slider'
// import "./extra.js";

const el = document.getElementById("app");
// import Swiffy Slider JS
window.swiffyslider = swiffyslider;

window.addEventListener("load", () => {
    window.swiffyslider.init();
});

createApp({
    render: renderSpladeApp({ el })
})
    .use(SpladePlugin, {
        "max_keep_alive": 10,
        "transform_anchors": true,
        "progress_bar": true
    })
    .mount(el);

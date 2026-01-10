import "./bootstrap";
import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";
import anchor from "@alpinejs/anchor";

Alpine.plugin([collapse, anchor]);

window.Alpine = Alpine;

Alpine.start();

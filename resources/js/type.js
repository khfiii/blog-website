import TypeIt from "typeit";
import './alpine/index';

document.addEventListener("DOMContentLoaded", function () {
    new TypeIt("#welcome", {
      strings: ["HELLO, I AM AKHSAN..."],
    }).go();
  });


//* --------------- STYLE
const css = require('./sass/app.sass');

//* --------------- LIBS
import { gsap } from 'gsap'
import scrollToPlugin from 'gsap/scrollToPlugin'
//import ScrollMagic from 'scrollmagic'
//import 'ScrollMagicGSAP'

gsap.registerPlugin(scrollToPlugin);


import Spa from './js/spa';
const { consoleTag } = require('./js/console.js');
consoleTag()
new Spa()

/*
//* --------------- JS
import { menu } from './js/menu'
import { minicart } from './js/minicart'



//* --------------- JS
menu.init()
minicart.init()

gsap.config({
    nullTargetWarn: false
});*/
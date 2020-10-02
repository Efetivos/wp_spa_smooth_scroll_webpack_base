//* --------------- STYLE
const css = require('./sass/app.sass');

//* --------------- LIBS
import { gsap } from 'gsap'
gsap.config({
    nullTargetWarn: false
});


import Spa from './js/spa';
new Spa()



const { consoleTag } = require('./js/console.js');
consoleTag()

/*
import { menu } from './js/menu'
menu.init()
*/

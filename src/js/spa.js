
import barba from '@barba/core';
import { gsap } from 'gsap'
import { scroll } from './scroll'
import { preloader } from './preloader';
//import { firstload } from './first-load';

export default class Spa {
    constructor() {
        this.init()
    }



    init() {

        this.pagesFromMenu = document.querySelectorAll('.menu-fs__each')
        let that = this
        barba.init({
            //? - =========================  VIEWS  ========================= -//
            //? - =========================  VIEWS  ========================= -//

            views: [
                //? --- home
                {
                    namespace: 'home',
                    beforeEnter(data) {
                    }
                },
                //? --- about
                {
                    namespace: 'about',
                    beforeEnter(data) {
                        //console.log(data);
                    }
                },
                //? --- tour
                {
                    namespace: 'tour',
                    beforeEnter(data) {
                        //console.log(data);
                    }
                },
                //? --- music
                {
                    namespace: 'music',
                    beforeEnter(data) {
                        //console.log(data);
                    }
                },
                //? --- redime
                {
                    namespace: 'redimension',
                    beforeEnter(data) {
                        //console.log(data);
                    }
                },
                //? --- contact
                {
                    namespace: 'contact',
                    beforeEnter(data) {
                        //console.log(data);
                    }
                },
            ],




            //? - =========================  TRANSITIONS  ========================= -//
            //? - =========================  TRANSITIONS  ========================= -//

            transitions: [{
                //sync: true,
                preventRunning: true,

                //? ---------   LEAVE
                leave(data) {
                    const done = this.async();
                    gsap.set('body', { overflow: 'hidden' })
                    scroll.destroy()
                    let $trgClicked = data.trigger

                    // ---- FROM MENU
                    gsap.to('#barba-wrapper', { duration: .5, opacity: 0, onComplete: () => { done(); } });
                },


                //? ---------   ENTER
                enter(data) {
                    let thisOld = data.current.namespace, thisNext = data.next.namespace
                },

                //? ---------   AFTER
                after({ next }) {
                    history.scrollRestoration = "manual"
                    window.scrollTo(0, 0)
                    gsap.set('body', { overflowY: 'auto' })
                    gsap.to('#barba-wrapper', { delay: .5, duration: .5, opacity: 1 });
                    scroll.init(next.namespace, false, next.container)
                    // ---- PRELOAD
                    preloader.init()
                },


                //? ---------   once
                once({ next }) {
                    //$('.preloader-master, .intro').remove()
                    preloader.init()
                    scroll.init(next.namespace, false, next.container)
                }
            }],

        }) //close BarbaJS
    } //close Init

}

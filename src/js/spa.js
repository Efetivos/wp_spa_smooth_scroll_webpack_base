import Barba from 'barba';
import { gsap } from 'gsap'
import { scroll } from './scroll'
//import { general }from './general';

export default class Spa {
    constructor() {
        this.init()

        gsap.set('.fader-transition',{scaleY: 0})
    }

    init() {
        var ExpandTransition = Barba.BaseTransition.extend({
            start: function () {
                Promise
                    .all([this.newContainerLoading, this.beforeLeave()]) //Call Function = BeforeLeave
                    .then(this.beforeEnter.bind(this));
            },

            beforeLeave: function () {
                var deferred = Barba.Utils.deferred();
                let prev = Barba.HistoryManager.prevStatus().namespace;
                scroll.destroy()
                
                if ($(window).width() > 1024) {
                    gsap.set('body', { overflow: 'hidden'})
                }
                gsap.to('h1',{yPercent: -450, autoAlpha:0, ease:'expo.in', duration: .4,  stagger: .08})
                gsap.to('.fader-transition',{scaleY: 1, transformOrigin:'right bottom', duration: .8, ease:'expo.in', onComplete: ()=> { deferred.resolve();  }})
                //gsap.to('#barba-wrapper', 1, { autoAlpha: 0, onComplete: ()=> { deferred.resolve();  }})
                
                return deferred.promise;
            },

            beforeEnter: function () {
                this.done();
                window.scrollTo(0, 0);
                gsap.to('#barba-wrapper', 1, { autoAlpha: 1 })
                gsap.to('.fader-transition',{scaleY: 0, transformOrigin:'right top', duration: .8, ease:'expo.out'})
                
                gsap.set('body', { overflowY: 'auto'})

            }
        });


        //?
        // Base Home
        //? ===========================================================================
        let homeBase = Barba.BaseView.extend({
            namespace: 'home',
            onEnterCompleted: function () {
                let contentPage = document.querySelector('.page-home')
                scroll.init('home', false, contentPage)
            }
        });
        homeBase.init();


        //?
        // Base About
        //? ===========================================================================
        let aboutBase = Barba.BaseView.extend({
            namespace: 'about',
            onEnterCompleted: function () {
                let contentPage = document.querySelector('.page-about')
                scroll.init('about', false, contentPage)
            }
        });
        aboutBase.init();


        Barba.Prefetch.init();
        Barba.Pjax.start();


        Barba.Pjax.getTransition = function () {
            var transitionObj = ExpandTransition;
            return transitionObj;
        };
    } //close Init

}

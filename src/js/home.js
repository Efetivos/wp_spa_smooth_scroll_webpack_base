
import { gsap } from 'gsap'
class Home {
    constructor() {
        return
    }

    init(contentPage) {
        
        gsap.from('h1',{yPercent: 250, autoAlpha:0, ease:'expo.out', duration: 1.8, delay: .1, stagger: .08})
    }

    onScroll(scrolled) {
        console.log(scrolled)
    }
}
export const home = new Home()
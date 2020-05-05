
import { gsap } from 'gsap'
class About {
    constructor() {
        return
    }

    init(contentPage) {
        gsap.from('h1',{yPercent: 100, autoAlpha:0, ease:'expo.out'})
    }

    onScroll(scrolled) {
        console.log(scrolled)
    }
}
export const about = new About()
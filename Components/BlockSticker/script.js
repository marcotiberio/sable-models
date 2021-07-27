// import $ from 'jquery'

// class BlockSticker extends window.HTMLElement {
//   constructor (...args) {
//     const self = super(...args)
//     self.init()
//     return self
//   }

//   init () {
//     this.$ = $(this)
//     this.resolveElements()
//     this.bindFunctions()
//     this.bindEvents()
//   }

//   resolveElements () {
//     this.$window = $(window)
//     this.$sticker = $('.stickerBubble', this)
//   }

//   bindFunctions () {
//     this.moveSticker = this.moveSticker.bind(this)
//   }

//   bindEvents () {
//     this.$window.on('load', this.moveSticker)
//   }

//   moveSticker (e) {
//     this.$sticker.addClass('stickerBubble--addRose')
//   }
// }

// window.customElements.define('flynt-block-sticker', BlockSticker, { extends: 'div' })

function init(){
    window.Portfolio = {}
    window.Portfolio.refreshImages = printImages
    window.Portfolio.refreshImages();
      $('[data-toggle="popover"]').popover()
}

function printImages(){
    var images = $('[url-image]')
    let list = images.length
    for(var i = 0; i < list; i++){
        var image = images[i]
        let url = image.getAttribute('url-image')
        image.style.backgroundImage = `url(${url})`
    }

}

$(document).ready(init)
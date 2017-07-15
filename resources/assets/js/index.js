function init(){
    window.Portfolio = {}
    window.Portfolio.refreshImages = printImages
    window.Portfolio.refreshImages();
      $('[data-toggle="popover"]').popover()

    $('ul.pi-items i').on('click', switchItem)

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

function switchItem(e){
    $('.pi-item , i[item-name]').removeClass('active')
    $(e.target).addClass('active')
                                        
    let attribute = $(e.target).attr('item-name')

    console.log(attribute)

    $('.pi-item-texts [item-name]').removeClass('active');
    $(`.pi-item-texts [item-name=${attribute}]`).addClass('active');
    
}

$(document).ready(init)
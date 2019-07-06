var velocity = 20;
var uperLimit = 60;
var lowerLimit = 50;
var state = 1; //1 for increase; 2 for decrease
function animateProressBar($myBar){
    // 1. get parent element width
        var $parent = $myBar.closest('.bar');
        var parentWidth = getElementWidth($parent);
        var elementWidth = getElementWidth($myBar);
        console.log(getElementProgress(elementWidth,parentWidth));

    // 2. 
    setInterval(function(){
        var elementWidth = getElementWidth($myBar);
        if(state == 1){
            if(getElementProgress(elementWidth,parentWidth)<uperLimit){
                increaseProgress($myBar,elementWidth);
            }else{
                state = 2;
            }
        }else{
            if(getElementProgress(elementWidth,parentWidth)>lowerLimit){
                decreaseProgress($myBar,elementWidth);
            }else{
                state = 1;
            }
        }
        
     
        
    },100)

}
function getElementProgress(elementWidth, parentWidth){
    return (elementWidth*100)/parentWidth;
}
function getElementWidth(element){
    return getWidthAsFloat(element.css('width'));
}
function getWidthAsFloat(widthString){
    var width = widthString.replace("px","");
    return parseFloat(width);
}
function increaseProgress($element,elementWidth){
    $element.css('width',elementWidth+velocity)
}
function decreaseProgress($element,elementWidth){
    $element.css('width',elementWidth-velocity)
}
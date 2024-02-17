(function($){
    $.formatNumber=function(rawNumber, decimal,commas) 
    {
        var delimiter=",";
        var temp = rawNumber.toFixed(decimal);
        var partArray = temp.toString().split("."); 
        if(commas){partArray[0] = partArray[0].toString().replace(/\B(?=(\d{3})+(?!\d))/g, delimiter);}
        return (decimal>0) ? partArray.join(".") : partArray[0];
         
    } 
    $.fn.countify=function(options,callback){
        var numbers=this;
        var defaults={
            easing: "swing",
            fading: true,
            start: 0,
            speed: 4000,
            commas: true,
            decimal: 0,
            beforeText:"",
            afterText:""
        }
        options=$.extend(defaults,options);
        
        numbers.each(function(i){
            var number=$(this);
            //fade in one at a time
            if (options.fading){number.css({"opacity":"0","position":"relative","top":"-20px"}).delay(i*300).animate({opacity:"1",top:"0px"},400);}
            var endValue=parseFloat(number.text().replace(/[^\d\.]/g, ''));//removes anything that is not an integer or a dot.
            // Animate the element's value from start to endValue:
            $({theNumber: options.start}).animate({theNumber: endValue}, {
                duration: options.speed,
                easing: options.easing,
                step: function() {
                    number.text(options.beforeText+$.formatNumber(this.theNumber,options.decimal)+options.afterText);
                },
                complete : function(){
                    number.text(options.beforeText+$.formatNumber(endValue,options.decimal)+options.afterText);
                }
            });
        });
    }
})(jQuery);
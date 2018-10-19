document.addEventListener("DOMContentLoaded", function() {
    var button = document.querySelector('.button');
    var hours = document.getElementById('hours');
    var minutes = document.getElementById('minutes');
    var seconds = document.getElementById('seconds');
    var is_run = true;

    init();

    function init(){
        button.addEventListener('click', function(){
            changeStateButton();
        })

        var oClock = setInterval(function(){
            if(is_run){
                var oDate = new Date();
                var h = adjustTimer(oDate.getHours());
                var m = adjustTimer(oDate.getMinutes());
                var s = adjustTimer( oDate.getSeconds());
                
                hours.innerHTML =  h;
                minutes.innerHTML =  m;
                seconds.innerHTML =  s;
                
                var c = randomHexColor(h, m, s);
                document.querySelector('body').style.background = c;
                
            }
        }, 1000);
    }

    function adjustTimer(timer){
        return (timer < 10 ? '0'+timer : timer);
    }

    function randomHexColor(x, y, z){
        var x = Math.floor(x/100 * 256);
        var y = Math.floor(y/100 * 256);
        var z = Math.floor(z/100 * 256);
        return "rgb(" + x + "," + y + "," + z + ")";
    }

    function changeStateButton(){

        if(hasClass(button, 'pause')){
            var new_class = button.getAttribute('class').replace(' pause', '');
            button.setAttribute('class', new_class);
            is_run = false;
        }else{
            var new_class = button.getAttribute('class')+' pause';
            button.setAttribute('class', new_class);
            is_run = true;
        }
    }

    function hasClass(element, cls) {
        return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
    }
});
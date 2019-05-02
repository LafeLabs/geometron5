

function Map(w,h,div) {

    this.w = w;//width of div element map will be drawn in
    this.h = h;//height of div element
    this.div = div; //div element in document
    this.div.style.width = this.w + "px"; //set width of div
    this.div.style.height = this.h + "px";//set height of div
    this.array = [];
    this.linkArray = [];
    //MapLink(x,y,w,angle,text,href,src)
    var newLink  = new MapLink(0.1,0.1,0.2,0,"text","","");
    this.array.push(newLink);

    this.draw = function() {
        this.div.innerHTML = "";
        this.linkArray = [];
        for(var index = 0;index < this.array.length;index++){
            var newa = document.createElement("A");
            newa.style.position = "absolute";
            this.div.appendChild(newa);
            newa.style.left = (this.array[index].x*this.w).toString() + "px";
            newa.style.top  = (this.array[index].y*this.w).toString() + "px";
            newa.style.width  = (this.array[index].w*this.w).toString() + "px";
            newa.style.transform  = "rotate(" + (this.array[index].angle).toString() + "deg)";
            if(this.array[index].src.length > 0) {
                var newimg = document.createElement("IMG");
                newimg.style.position = "absolute";
                newimg.style.left = "0px";
                newimg.style.top = "0px";
                newimg.style.width = "100%";
                
                if(this.array[index].href.length > 0){
                    newa.href = this.array[index].href;
                }
                newa.appendChild(newimg);
                newimg.src = this.array[index].src;
                newimg.alt = this.array[index].text;
                newimg.onload = function(){
                    this.parentElement.style.height = this.height + "px";
                }
            }
            else{
                newa.innerHTML = this.array[index].text;
                newa.style.fontSize = (0.1*this.array[index].w*this.w).toString() + "px"; 
            }
            this.linkArray.push(newa);
        }
    }

}


function MapLink(x,y,w,angle,text,href,src) {
 
    this.x = x;
    this.y = y;
    this.w = w;
    this.angle = angle;
    this.text = text;
    this.href = href;
    this.src = src;

}



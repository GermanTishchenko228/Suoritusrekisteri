(function(){
function att(v){return v!=null?"'"+v+"'":"''"}
var win = window;
var doc = document;
url = 'http://widget.blogrush.com/box.php?f='+win.blogrush_feed+'&url='+escape(doc.location)+'&ref='+escape(doc.referrer)+'&r='+Math.random();
doc.write('<iframe name="blogrush_frame" width="180" height="318" frameborder="0" src='+att(url)+' marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no">');
doc.write("</iframe>");
})()
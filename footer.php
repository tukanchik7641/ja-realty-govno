<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
var index=0,
itemMenu=document.getElementsById("item_menu"),
subMenu=document.getElementsById("sub_menu");
itemMenu.onclick="visibleMenu(1)";
itemMenu.addEventListener("onclick", visibleMenu(1));
subMenu.addEventListener("onclick", visibleMenu(1));
function visibleMenu(n){
visible(index+=n);
};
function visible(n){
if (n%2==1){
subMenu[0].style.display="block";
} else {
subMenu[0].style.display="none";
};
};


var
itemMenu1=document.getElementsById("item_menu1"),
subMenu1=document.getElementsById("sub_menu1");
itemMenu.addEventListener("onclick", visibleMenu1(1));
subMenu1.addEventListener("onclick", visibleMenu1(1));
function visibleMenu1(n){
visible1(index+=n);
};

function visible1(n){
if (n%2==1){
  subMenu1[0].style.display="block";
} else {
  subMenu1[0].style.display="none";
};
};
</script>

<script type="text/javascript" >
(function (d, w, c) {
(w[c] = w[c] || []).push(function() {
try {
w.yaCounter49355551 = new Ya.Metrika2({
id:49355551,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
} catch(e) { }
});

var n = d.getElementsByTagName("script")[0],
s = d.createElement("script"),
f = function () { n.parentNode.insertBefore(s, n); };
s.type = "text/javascript";
s.async = true;
s.src = "https://mc.yandex.ru/metrika/tag.js";

if (w.opera == "[object Opera]") {
d.addEventListener("DOMContentLoaded", f, false);
} else { f(); }
})(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/49355551" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/myslick.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/map.js"></script>


</body>
</html>

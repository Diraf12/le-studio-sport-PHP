<!-- ⬇ fonction pour les 6img dans le footer -->
<?php 
function img_add(string $class_img, $url, $numb_img = 7) : void 
{
  for ($i = 1; $i < $numb_img; $i++){
 echo <<<HTML
    <div class="col-2">
          <img class="$class_img w-100" src="$url$i.jpg" alt="#">
        </div>
HTML;
}
}
?>

<!-- ⬇ fonction pour le menu burger -->
<?php
function add_item(string $class_item, string $class_link, string $url_link, string $title){
  return <<<HTML
<li class="$class_item">
  <a class="$class_link" href="$url_link">$title</a>
</li>
HTML;
}
?>


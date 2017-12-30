<?php
/**
 * @version    1.0.x
 * @package    Contact map
 * @author     SPEDI srl http://www.spedi.it
 * @copyright  Copyright (c) 1991 - 2016 Spedi srl. Tutti i diritti riservati.
 * @license    GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

defined('_JEXEC') or die;


?>

<div class="contactmap" style="height: <?php echo $hieght ?>px">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-sm-12 col-md-<?php echo $col ?> px-0 map">
        <div id="map-canvas" style="height: <?php echo $hieght ?>px"></div>
        <div id="cd-zoom-in"></div>
        <div id="cd-zoom-out"></div>
      </div>
      <div class="col-12 col-sm-12 col-md-6 contact d-flex align-items-center<?php echo $none ?>">
        <div class="contact-wrap px-5">
          <div class="contact-block px-5">
            <?php if($title_1) : ?>
              <h3><?php echo $title_1 ?></h3>
            <?php endif; ?>
            <?php if($caption_1) : ?>
              <?php echo $caption_1 ?>
            <?php endif; ?>

            <?php if($social) : ?>
            <ul class="list-inline social">
              <?php foreach ($social as $item) : ?>
                <li class="list-inline-item">
                  <a href="<?php echo $item['link'] ?>">
                    <span class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-<?php echo $item['icon'] ?> fa-stack-1x fa-inverse"></i>
                    </span>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
            <?php endif; ?>
          </div>
          <?php if($title_2 OR $caption_2) : ?>
          <div class="contact-block px-5 mt-5">
            <?php if($title_2) : ?>
              <h3><?php echo $title_2 ?></h3>
            <?php endif; ?>
            <?php if($caption_2) : ?>
              <?php echo $caption_2 ?>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $document->addScript("https://maps.googleapis.com/maps/api/js?key=AIzaSyAQpYoDqYFiJY19c9xBAtoU2ovN7m1NhTI&callback=initMap", "text/javascript", true, true); ?>
<?php $document->addScript(JUri::base(true).'/modules/'.$module->module.'/js/map.js'); ?>

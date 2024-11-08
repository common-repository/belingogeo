<div id="cityChange" class="popup-window popup-window-with-titlebar pop-up city-change">
  <div class="popup-window-titlebar" id="popup-window-titlebar-cityChange">
    <span><?php esc_html_e($data['header']); ?></span>
  </div>
  <div id="popup-window-content-cityChange" class="popup-window-content">
    <div class="bx-sls">
      <div class="bx-ui-sls-quick-locations quick-locations" style="overflow-x: scroll;height: 300px;">
        <?php
          do_action('belingogeo_before_cities_list_container');
        ?>
        <div class="quick-locations__title"><?php esc_html_e('Choose from the list:', 'belingogeo'); ?></div>
          <div class="quick-locations__values__container"></div>
          <div style="clear:both;"></div>
        </div>
        <?php
          do_action('belingogeo_after_cities_list_container');
        ?>
    </div>
    <div class="block-info">
      <div class="block-info__title"><?php esc_html_e($data['text1']); ?></div>
        <div class="block-info__text">
          <?php esc_html_e($data['text2']); ?>
        </div>
        <div style="margin-top: 7px;">
          <a style="color: #2cb7ff;border-bottom: 1px dashed #2cb7ff;" class="continue-without-geo" href="#">
            <?php esc_html_e('Continue without the city', 'belingogeo'); ?>
          </a>
        </div>
    </div>
  </div>
  <span class="popup-window-close-icon popup-window-titlebar-close-icon" style="right: -10px; top: -10px;"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512"><path d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"/></svg></span>
</div>
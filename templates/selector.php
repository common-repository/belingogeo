<div class="geolocation">
    <a class="geolocation__link <?php if(isset($data['show_question']) && $data['show_question'] == true) {?>geolocation_with_question__link<?php }?>" href="#">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><path d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0z"/></svg> <span class="geolocation__value"><?php esc_html_e('Finding...', 'belingogeo'); ?></span>
    </a>
</div>
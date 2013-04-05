<?php function render_icon($s,$p){$classes=split(",", $s);$c=$classes;foreach($c as $v){$t=str_replace($p,'',$v);$t=str_replace('-',' ',$t);$t=ucwords($t);$n=str_replace('.','',$v);print('<li class="item"><span class="title">'. $t .'</span><span class="example"><i class="'. $n .'"></i></span><span class="class-name">'.$v.'</span></li>'."\n");}}
$glyph_large=".glyph-large-zoom-out,.glyph-large-zoom-in,.glyph-large-zip,.glyph-large-youtube-alt,.glyph-large-wysiwyg-undo,.glyph-large-wysiwyg-text_decoration-underline,.glyph-large-wysiwyg-text_decoration-strike,.glyph-large-wysiwyg-redo,.glyph-large-wysiwyg-paste,.glyph-large-wysiwyg-list,.glyph-large-wysiwyg-indent-more,.glyph-large-wysiwyg-indent-less,.glyph-large-wysiwyg-font_style-italic,.glyph-large-wysiwyg-font_style-bold,.glyph-large-wysiwyg-font_family,.glyph-large-wysiwyg-find,.glyph-large-wysiwyg-cut,.glyph-large-wysiwyg-copy,.glyph-large-wysiwyg-align-right,.glyph-large-wysiwyg-align-left,.glyph-large-wysiwyg-align-justify,.glyph-large-wysiwyg-align-center,.glyph-large-wordpress,.glyph-large-wine,.glyph-large-window,.glyph-large-warning,.glyph-large-vote,.glyph-large-vcard,.glyph-large-users,.glyph-large-user,.glyph-large-user-add,.glyph-large-umbrella,.glyph-large-tv,.glyph-large-truck,.glyph-large-tooth,.glyph-large-tools,.glyph-large-tie,.glyph-large-ticket,.glyph-large-thumb-up,.glyph-large-thumb-down,.glyph-large-teapot,.glyph-large-tags,.glyph-large-tag,.glyph-large-table,.glyph-large-support,.glyph-large-stop,.glyph-large-stack,.glyph-large-spinner,.glyph-large-soccer,.glyph-large-sitemap,.glyph-large-shoes,.glyph-large-safe,.glyph-large-reorder,.glyph-large-refrigerator,.glyph-large-rate-half,.glyph-large-rate-full,.glyph-large-rate-empty,.glyph-large-profile,.glyph-large-print,.glyph-large-presentation,.glyph-large-police,.glyph-large-plus,.glyph-large-plug,.glyph-large-pinterest-sign,.glyph-large-pilcrow,.glyph-large-photos,.glyph-large-photo,.glyph-large-phone,.glyph-large-pencil,.glyph-large-paperplane,.glyph-large-open,.glyph-large-newspaper,.glyph-large-music,.glyph-large-movies,.glyph-large-move,.glyph-large-minus,.glyph-large-microwave,.glyph-large-microphone,.glyph-large-menu,.glyph-large-medkit,.glyph-large-marvin,.glyph-large-map,.glyph-large-mail-reply,.glyph-large-mail-reply-all,.glyph-large-mail-forward,.glyph-large-lock,.glyph-large-location,.glyph-large-link,.glyph-large-link-external,.glyph-large-library,.glyph-large-leaf,.glyph-large-layout,.glyph-large-layout-split,.glyph-large-layout-split-header,.glyph-large-layout-rows,.glyph-large-layout-right,.glyph-large-layout-right-header,.glyph-large-layout-picture-right,.glyph-large-layout-picture-left,.glyph-large-layout-picture-center,.glyph-large-layout-left,.glyph-large-layout-left-rows,.glyph-large-layout-left-header,.glyph-large-layout-left-header-rows,.glyph-large-layout-header,.glyph-large-layout-grid,.glyph-large-layout-grid-alt,.glyph-large-layout-columns,.glyph-large-laundromat,.glyph-large-launch,.glyph-large-lab,.glyph-large-key,.glyph-large-justice,.glyph-large-jqueryui,.glyph-large-info,.glyph-large-image,.glyph-large-ice-cream,.glyph-large-hydrant,.glyph-large-html5,.glyph-large-html5-semantics,.glyph-large-html5-perfintegration,.glyph-large-html5-offline_storage,.glyph-large-html5-multimedia,.glyph-large-html5-device_access,.glyph-large-html5-css3,.glyph-large-html5-css3-sign,.glyph-large-html5-connectivity,.glyph-large-html5-3d_effects,.glyph-large-hospital,.glyph-large-heart,.glyph-large-heart-empty,.glyph-large-health,.glyph-large-headphones,.glyph-large-grid-small,.glyph-large-grid-large,.glyph-large-graduate,.glyph-large-google-plus,.glyph-large-github,.glyph-large-github-sign,.glyph-large-github-alt,.glyph-large-food,.glyph-large-flickr,.glyph-large-flag,.glyph-large-fishbone,.glyph-large-fire,.glyph-large-files,.glyph-large-file-xml,.glyph-large-file-powerpoint,.glyph-large-file-pdf,.glyph-large-file-css,.glyph-large-facetime,.glyph-large-eye-open,.glyph-large-eye-close,.glyph-large-export,.glyph-large-expand,.glyph-large-erase,.glyph-large-envelope,.glyph-large-eight-ball,.glyph-large-efficient,.glyph-large-drupal,.glyph-large-droplet,.glyph-large-docs,.glyph-large-dna,.glyph-large-direction,.glyph-large-device-blackberry,.glyph-large-device-android,.glyph-large-cube,.glyph-large-crop,.glyph-large-controls,.glyph-large-contract,.glyph-large-cone,.glyph-large-compass,.glyph-large-comments,.glyph-large-columns,.glyph-large-coffee,.glyph-large-coffee-alt,.glyph-large-code,.glyph-large-cocktail,.glyph-large-clock,.glyph-large-clipboard,.glyph-large-checkin,.glyph-large-chat,.glyph-large-chart-graph,.glyph-large-chart-full,.glyph-large-chart-empty,.glyph-large-cc,.glyph-large-cc-zero,.glyph-large-cc-share,.glyph-large-cc-share-alt,.glyph-large-cc-sa,.glyph-large-cc-pd,.glyph-large-cc-nd,.glyph-large-cc-nc,.glyph-large-cc-by,.glyph-large-cassette,.glyph-large-caret-right,.glyph-large-caret-down,.glyph-large-car,.glyph-large-calculate,.glyph-large-building,.glyph-large-bucket,.glyph-large-brush,.glyph-large-browser-safari,.glyph-large-browser-opera,.glyph-large-browser-IE,.glyph-large-browser-firefox,.glyph-large-browser-chrome,.glyph-large-broom,.glyph-large-briefcase,.glyph-large-bread,.glyph-large-bookmarks,.glyph-large-bookmark,.glyph-large-bomb,.glyph-large-blocked,.glyph-large-beverage,.glyph-large-beer,.glyph-large-bank,.glyph-large-attachment,.glyph-large-atom,.glyph-large-arrow-up,.glyph-large-arrow-up-sign,.glyph-large-arrow-up-right,.glyph-large-arrow-up-left,.glyph-large-arrow-right,.glyph-large-arrow-right-sign,.glyph-large-arrow-left,.glyph-large-arrow-left-sign,.glyph-large-arrow-down,.glyph-large-arrow-down-sign,.glyph-large-arrow-down-right,.glyph-large-arrow-down-left,.glyph-large-archive,.glyph-large-arcade,.glyph-large-apple,.glyph-large-ambulance,.glyph-large-alarm,.glyph-large-airplane,.glyph-large-aid,.glyph-large-address-book,.glyph-large-youtube,.glyph-large-warning-alt,.glyph-large-undo,.glyph-large-twitter,.glyph-large-timer,.glyph-large-time-twenty_four,.glyph-large-terminal,.glyph-large-soundcloud,.glyph-large-share,.glyph-large-share-alt,.glyph-large-settings,.glyph-large-server,.glyph-large-search,.glyph-large-safari,.glyph-large-resize,.glyph-large-refresh,.glyph-large-redo,.glyph-large-raquo,.glyph-large-pinterest,.glyph-large-media-video,.glyph-large-map-pin,.glyph-large-mail,.glyph-large-link-alt,.glyph-large-layout-web,.glyph-large-info-sign,.glyph-large-home,.glyph-large-help,.glyph-large-github-orig,.glyph-large-folder,.glyph-large-file-layout,.glyph-large-feed,.glyph-large-facebook,.glyph-large-facebook-like,.glyph-large-error,.glyph-large-earth,.glyph-large-dribble,.glyph-large-device-MacBookPro,.glyph-large-device-iPhone,.glyph-large-device-iPad,.glyph-large-device-desktop,.glyph-large-deviant-art,.glyph-large-database,.glyph-large-dashboard,.glyph-large-cloud,.glyph-large-cloud-upload,.glyph-large-cloud-download,.glyph-large-close,.glyph-large-close-sign,.glyph-large-check,.glyph-large-check-sign,.glyph-large-check-list,.glyph-large-chart-increase,.glyph-large-cart,.glyph-large-cart-add,.glyph-large-camera,.glyph-large-calendar,.glyph-large-basket,.glyph-large-basket-add,.glyph-large-add-sign";
$glyph_med=".glyph-med-zoom-out,.glyph-med-zoom-in,.glyph-med-zip,.glyph-med-youtube-alt,.glyph-med-wysiwyg-undo,.glyph-med-wysiwyg-text_decoration-underline,.glyph-med-wysiwyg-text_decoration-strike,.glyph-med-wysiwyg-redo,.glyph-med-wysiwyg-paste,.glyph-med-wysiwyg-list,.glyph-med-wysiwyg-indent-more,.glyph-med-wysiwyg-indent-less,.glyph-med-wysiwyg-font_style-italic,.glyph-med-wysiwyg-font_style-bold,.glyph-med-wysiwyg-font_family,.glyph-med-wysiwyg-find,.glyph-med-wysiwyg-cut,.glyph-med-wysiwyg-copy,.glyph-med-wysiwyg-align-right,.glyph-med-wysiwyg-align-left,.glyph-med-wysiwyg-align-justify,.glyph-med-wysiwyg-align-center,.glyph-med-wordpress,.glyph-med-wine,.glyph-med-window,.glyph-med-warning,.glyph-med-vote,.glyph-med-vcard,.glyph-med-users,.glyph-med-user,.glyph-med-user-add,.glyph-med-umbrella,.glyph-med-tv,.glyph-med-truck,.glyph-med-tooth,.glyph-med-tools,.glyph-med-tie,.glyph-med-ticket,.glyph-med-thumb-up,.glyph-med-thumb-down,.glyph-med-teapot,.glyph-med-tags,.glyph-med-tag,.glyph-med-table,.glyph-med-support,.glyph-med-stop,.glyph-med-stack,.glyph-med-spinner,.glyph-med-soccer,.glyph-med-sitemap,.glyph-med-shoes,.glyph-med-safe,.glyph-med-reorder,.glyph-med-refrigerator,.glyph-med-rate-half,.glyph-med-rate-full,.glyph-med-rate-empty,.glyph-med-profile,.glyph-med-print,.glyph-med-presentation,.glyph-med-police,.glyph-med-plus,.glyph-med-plug,.glyph-med-pinterest-sign,.glyph-med-pilcrow,.glyph-med-photos,.glyph-med-photo,.glyph-med-phone,.glyph-med-pencil,.glyph-med-paperplane,.glyph-med-open,.glyph-med-newspaper,.glyph-med-music,.glyph-med-movies,.glyph-med-move,.glyph-med-minus,.glyph-med-microwave,.glyph-med-microphone,.glyph-med-menu,.glyph-med-medkit,.glyph-med-marvin,.glyph-med-map,.glyph-med-mail-reply,.glyph-med-mail-reply-all,.glyph-med-mail-forward,.glyph-med-lock,.glyph-med-location,.glyph-med-link,.glyph-med-link-external,.glyph-med-library,.glyph-med-leaf,.glyph-med-layout,.glyph-med-layout-split,.glyph-med-layout-split-header,.glyph-med-layout-rows,.glyph-med-layout-right,.glyph-med-layout-right-header,.glyph-med-layout-picture-right,.glyph-med-layout-picture-left,.glyph-med-layout-picture-center,.glyph-med-layout-left,.glyph-med-layout-left-rows,.glyph-med-layout-left-header,.glyph-med-layout-left-header-rows,.glyph-med-layout-header,.glyph-med-layout-grid,.glyph-med-layout-grid-alt,.glyph-med-layout-columns,.glyph-med-laundromat,.glyph-med-launch,.glyph-med-lab,.glyph-med-key,.glyph-med-justice,.glyph-med-jqueryui,.glyph-med-info,.glyph-med-image,.glyph-med-ice-cream,.glyph-med-hydrant,.glyph-med-html5,.glyph-med-html5-semantics,.glyph-med-html5-perfintegration,.glyph-med-html5-offline_storage,.glyph-med-html5-multimedia,.glyph-med-html5-device_access,.glyph-med-html5-css3,.glyph-med-html5-css3-sign,.glyph-med-html5-connectivity,.glyph-med-html5-3d_effects,.glyph-med-hospital,.glyph-med-heart,.glyph-med-heart-empty,.glyph-med-health,.glyph-med-headphones,.glyph-med-grid-small,.glyph-med-grid-large,.glyph-med-graduate,.glyph-med-google-plus,.glyph-med-github,.glyph-med-github-sign,.glyph-med-github-alt,.glyph-med-food,.glyph-med-flickr,.glyph-med-flag,.glyph-med-fishbone,.glyph-med-fire,.glyph-med-files,.glyph-med-file-xml,.glyph-med-file-powerpoint,.glyph-med-file-pdf,.glyph-med-file-css,.glyph-med-facetime,.glyph-med-eye-open,.glyph-med-eye-close,.glyph-med-export,.glyph-med-expand,.glyph-med-erase,.glyph-med-envelope,.glyph-med-eight-ball,.glyph-med-efficient,.glyph-med-drupal,.glyph-med-droplet,.glyph-med-docs,.glyph-med-dna,.glyph-med-direction,.glyph-med-device-blackberry,.glyph-med-device-android,.glyph-med-cube,.glyph-med-crop,.glyph-med-controls,.glyph-med-contract,.glyph-med-cone,.glyph-med-compass,.glyph-med-comments,.glyph-med-columns,.glyph-med-coffee,.glyph-med-coffee-alt,.glyph-med-code,.glyph-med-cocktail,.glyph-med-clock,.glyph-med-clipboard,.glyph-med-checkin,.glyph-med-chat,.glyph-med-chart-graph,.glyph-med-chart-full,.glyph-med-chart-empty,.glyph-med-cc,.glyph-med-cc-zero,.glyph-med-cc-share,.glyph-med-cc-share-alt,.glyph-med-cc-sa,.glyph-med-cc-pd,.glyph-med-cc-nd,.glyph-med-cc-nc,.glyph-med-cc-by,.glyph-med-cassette,.glyph-med-caret-right,.glyph-med-caret-down,.glyph-med-car,.glyph-med-calculate,.glyph-med-building,.glyph-med-bucket,.glyph-med-brush,.glyph-med-browser-safari,.glyph-med-browser-opera,.glyph-med-browser-IE,.glyph-med-browser-firefox,.glyph-med-browser-chrome,.glyph-med-broom,.glyph-med-briefcase,.glyph-med-bread,.glyph-med-bookmarks,.glyph-med-bookmark,.glyph-med-bomb,.glyph-med-blocked,.glyph-med-beverage,.glyph-med-beer,.glyph-med-bank,.glyph-med-attachment,.glyph-med-atom,.glyph-med-arrow-up,.glyph-med-arrow-up-sign,.glyph-med-arrow-up-right,.glyph-med-arrow-up-left,.glyph-med-arrow-right,.glyph-med-arrow-right-sign,.glyph-med-arrow-left,.glyph-med-arrow-left-sign,.glyph-med-arrow-down,.glyph-med-arrow-down-sign,.glyph-med-arrow-down-right,.glyph-med-arrow-down-left,.glyph-med-archive,.glyph-med-arcade,.glyph-med-apple,.glyph-med-ambulance,.glyph-med-alarm,.glyph-med-airplane,.glyph-med-aid,.glyph-med-address-book,.glyph-med-youtube,.glyph-med-warning-alt,.glyph-med-undo,.glyph-med-twitter,.glyph-med-timer,.glyph-med-time-twenty_four,.glyph-med-terminal,.glyph-med-soundcloud,.glyph-med-share,.glyph-med-share-alt,.glyph-med-settings,.glyph-med-server,.glyph-med-search,.glyph-med-safari,.glyph-med-resize,.glyph-med-refresh,.glyph-med-redo,.glyph-med-raquo,.glyph-med-pinterest,.glyph-med-media-video,.glyph-med-map-pin,.glyph-med-mail,.glyph-med-link-alt,.glyph-med-layout-web,.glyph-med-info-sign,.glyph-med-home,.glyph-med-help,.glyph-med-github-orig,.glyph-med-folder,.glyph-med-file-layout,.glyph-med-feed,.glyph-med-facebook,.glyph-med-facebook-like,.glyph-med-error,.glyph-med-earth,.glyph-med-dribble,.glyph-med-device-MacBookPro,.glyph-med-device-iPhone,.glyph-med-device-iPad,.glyph-med-device-desktop,.glyph-med-deviant-art,.glyph-med-database,.glyph-med-dashboard,.glyph-med-cloud,.glyph-med-cloud-upload,.glyph-med-cloud-download,.glyph-med-close,.glyph-med-close-sign,.glyph-med-check,.glyph-med-check-sign,.glyph-med-check-list,.glyph-med-chart-increase,.glyph-med-cart,.glyph-med-cart-add,.glyph-med-camera,.glyph-med-calendar,.glyph-med-basket,.glyph-med-basket-add,.glyph-med-add-sign";
$glyph=".glyph-zoom-out,.glyph-zoom-in,.glyph-zip,.glyph-youtube-alt,.glyph-wysiwyg-undo,.glyph-wysiwyg-text_decoration-underline,.glyph-wysiwyg-text_decoration-strike,.glyph-wysiwyg-redo,.glyph-wysiwyg-paste,.glyph-wysiwyg-list,.glyph-wysiwyg-indent-more,.glyph-wysiwyg-indent-less,.glyph-wysiwyg-font_style-italic,.glyph-wysiwyg-font_style-bold,.glyph-wysiwyg-font_family,.glyph-wysiwyg-find,.glyph-wysiwyg-cut,.glyph-wysiwyg-copy,.glyph-wysiwyg-align-right,.glyph-wysiwyg-align-left,.glyph-wysiwyg-align-justify,.glyph-wysiwyg-align-center,.glyph-wordpress,.glyph-wine,.glyph-window,.glyph-warning,.glyph-vote,.glyph-vcard,.glyph-users,.glyph-user,.glyph-user-add,.glyph-umbrella,.glyph-tv,.glyph-truck,.glyph-tooth,.glyph-tools,.glyph-tie,.glyph-ticket,.glyph-thumb-up,.glyph-thumb-down,.glyph-teapot,.glyph-tags,.glyph-tag,.glyph-table,.glyph-support,.glyph-stop,.glyph-stack,.glyph-spinner,.glyph-soccer,.glyph-sitemap,.glyph-shoes,.glyph-safe,.glyph-reorder,.glyph-refrigerator,.glyph-rate-half,.glyph-rate-full,.glyph-rate-empty,.glyph-profile,.glyph-print,.glyph-presentation,.glyph-police,.glyph-plus,.glyph-plug,.glyph-pinterest-sign,.glyph-pilcrow,.glyph-photos,.glyph-photo,.glyph-phone,.glyph-pencil,.glyph-paperplane,.glyph-open,.glyph-newspaper,.glyph-music,.glyph-movies,.glyph-move,.glyph-minus,.glyph-microwave,.glyph-microphone,.glyph-menu,.glyph-medkit,.glyph-marvin,.glyph-map,.glyph-mail-reply,.glyph-mail-reply-all,.glyph-mail-forward,.glyph-lock,.glyph-location,.glyph-link,.glyph-link-external,.glyph-library,.glyph-leaf,.glyph-layout,.glyph-layout-split,.glyph-layout-split-header,.glyph-layout-rows,.glyph-layout-right,.glyph-layout-right-header,.glyph-layout-picture-right,.glyph-layout-picture-left,.glyph-layout-picture-center,.glyph-layout-left,.glyph-layout-left-rows,.glyph-layout-left-header,.glyph-layout-left-header-rows,.glyph-layout-header,.glyph-layout-grid,.glyph-layout-grid-alt,.glyph-layout-columns,.glyph-laundromat,.glyph-launch,.glyph-lab,.glyph-key,.glyph-justice,.glyph-jqueryui,.glyph-info,.glyph-image,.glyph-ice-cream,.glyph-hydrant,.glyph-html5,.glyph-html5-semantics,.glyph-html5-perfintegration,.glyph-html5-offline_storage,.glyph-html5-multimedia,.glyph-html5-device_access,.glyph-html5-css3,.glyph-html5-css3-sign,.glyph-html5-connectivity,.glyph-html5-3d_effects,.glyph-hospital,.glyph-heart,.glyph-heart-empty,.glyph-health,.glyph-headphones,.glyph-grid-small,.glyph-grid-large,.glyph-graduate,.glyph-google-plus,.glyph-github,.glyph-github-sign,.glyph-github-alt,.glyph-food,.glyph-flickr,.glyph-flag,.glyph-fishbone,.glyph-fire,.glyph-files,.glyph-file-xml,.glyph-file-powerpoint,.glyph-file-pdf,.glyph-file-css,.glyph-facetime,.glyph-eye-open,.glyph-eye-close,.glyph-export,.glyph-expand,.glyph-erase,.glyph-envelope,.glyph-eight-ball,.glyph-efficient,.glyph-drupal,.glyph-droplet,.glyph-docs,.glyph-dna,.glyph-direction,.glyph-device-blackberry,.glyph-device-android,.glyph-cube,.glyph-crop,.glyph-controls,.glyph-contract,.glyph-cone,.glyph-compass,.glyph-comments,.glyph-columns,.glyph-coffee,.glyph-coffee-alt,.glyph-code,.glyph-cocktail,.glyph-clock,.glyph-clipboard,.glyph-checkin,.glyph-chat,.glyph-chart-graph,.glyph-chart-full,.glyph-chart-empty,.glyph-cc,.glyph-cc-zero,.glyph-cc-share,.glyph-cc-share-alt,.glyph-cc-sa,.glyph-cc-pd,.glyph-cc-nd,.glyph-cc-nc,.glyph-cc-by,.glyph-cassette,.glyph-caret-right,.glyph-caret-down,.glyph-car,.glyph-calculate,.glyph-building,.glyph-bucket,.glyph-brush,.glyph-browser-safari,.glyph-browser-opera,.glyph-browser-IE,.glyph-browser-firefox,.glyph-browser-chrome,.glyph-broom,.glyph-briefcase,.glyph-bread,.glyph-bookmarks,.glyph-bookmark,.glyph-bomb,.glyph-blocked,.glyph-beverage,.glyph-beer,.glyph-bank,.glyph-attachment,.glyph-atom,.glyph-arrow-up,.glyph-arrow-up-sign,.glyph-arrow-up-right,.glyph-arrow-up-left,.glyph-arrow-right,.glyph-arrow-right-sign,.glyph-arrow-left,.glyph-arrow-left-sign,.glyph-arrow-down,.glyph-arrow-down-sign,.glyph-arrow-down-right,.glyph-arrow-down-left,.glyph-archive,.glyph-arcade,.glyph-apple,.glyph-ambulance,.glyph-alarm,.glyph-airplane,.glyph-aid,.glyph-address-book,.glyph-youtube,.glyph-warning-alt,.glyph-undo,.glyph-twitter,.glyph-timer,.glyph-time-twenty_four,.glyph-terminal,.glyph-soundcloud,.glyph-share,.glyph-share-alt,.glyph-settings,.glyph-server,.glyph-search,.glyph-safari,.glyph-resize,.glyph-refresh,.glyph-redo,.glyph-raquo,.glyph-pinterest,.glyph-media-video,.glyph-map-pin,.glyph-mail,.glyph-link-alt,.glyph-layout-web,.glyph-info-sign,.glyph-home,.glyph-help,.glyph-github-orig,.glyph-folder,.glyph-file-layout,.glyph-feed,.glyph-facebook,.glyph-facebook-like,.glyph-error,.glyph-earth,.glyph-dribble,.glyph-device-MacBookPro,.glyph-device-iPhone,.glyph-device-iPad,.glyph-device-desktop,.glyph-deviant-art,.glyph-database,.glyph-dashboard,.glyph-cloud,.glyph-cloud-upload,.glyph-cloud-download,.glyph-close,.glyph-close-sign,.glyph-check,.glyph-check-sign,.glyph-check-list,.glyph-chart-increase,.glyph-cart,.glyph-cart-add,.glyph-camera,.glyph-calendar,.glyph-basket,.glyph-basket-add,.glyph-add-sign";
$ico=".ico-zoom-out,.ico-zoom-in,.ico-wordpress,.ico-wine,.ico-support,.ico-stop,.ico-photo,.ico-link-external,.ico-library,.ico-lab,.ico-key,.ico-phone,.ico-headphones,.ico-grid-small,.ico-expand,.ico-erase,.ico-code,.ico-cocktail,.ico-calculate,.ico-building,.ico-arrow-up-sign,.ico-arrow-up-right,.ico-arrow-up-left,.ico-bucket,.ico-clock,.ico-envelope,.ico-grid-large,.ico-justice,.ico-leaf,.ico-pencil,.ico-window,.ico-zip,.ico-stack,.ico-youtube-alt,.ico-warning,.ico-spinner,.ico-paperplane,.ico-layout,.ico-jqueryui,.ico-graduate,.ico-eight-ball,.ico-clipboard,.ico-brush,.ico-arrow-right,.ico-arrow-right-sign,.ico-browser-safari,.ico-checkin,.ico-efficient,.ico-google-plus,.ico-info,.ico-layout-split,.ico-open,.ico-soccer,.ico-vote,.ico-wysiwyg-undo,.ico-wysiwyg-text_decoration-underline,.ico-vcard,.ico-sitemap,.ico-newspaper,.ico-layout-split-header,.ico-image,.ico-drupal,.ico-github,.ico-chat,.ico-browser-opera,.ico-arrow-left,.ico-arrow-left-sign,.ico-browser-IE,.ico-chart-graph,.ico-droplet,.ico-github-sign,.ico-ice-cream,.ico-layout-rows,.ico-music,.ico-shoes,.ico-users,.ico-wysiwyg-text_decoration-strike,.ico-wysiwyg-redo,.ico-user,.ico-movies,.ico-safe,.ico-layout-right,.ico-hydrant,.ico-github-alt,.ico-docs,.ico-chart-full,.ico-browser-firefox,.ico-arrow-down,.ico-arrow-down-sign,.ico-browser-chrome,.ico-chart-empty,.ico-dna,.ico-food,.ico-html5,.ico-layout-right-header,.ico-move,.ico-reorder,.ico-user-add,.ico-wysiwyg-paste,.ico-wysiwyg-list,.ico-umbrella,.ico-refrigerator,.ico-minus,.ico-layout-picture-right,.ico-html5-semantics,.ico-flickr,.ico-direction,.ico-cc,.ico-broom,.ico-arrow-down-right,.ico-arrow-down-left,.ico-briefcase,.ico-cc-zero,.ico-device-blackberry,.ico-flag,.ico-html5-perfintegration,.ico-layout-picture-left,.ico-microwave,.ico-rate-half,.ico-tv,.ico-wysiwyg-indent-more,.ico-rate-full,.ico-microphone,.ico-truck,.ico-wysiwyg-indent-less,.ico-layout-picture-center,.ico-html5-offline_storage,.ico-fishbone,.ico-device-android,.ico-cc-share,.ico-bread,.ico-archive,.ico-arcade,.ico-bookmarks,.ico-cc-share-alt,.ico-cube,.ico-fire,.ico-html5-multimedia,.ico-layout-left,.ico-menu,.ico-rate-empty,.ico-tooth,.ico-wysiwyg-font_style-italic,.ico-tools,.ico-profile,.ico-wysiwyg-font_style-bold,.ico-medkit,.ico-layout-left-rows,.ico-html5-device_access,.ico-files,.ico-crop,.ico-cc-sa,.ico-ambulance,.ico-bomb,.ico-bookmark,.ico-apple,.ico-cc-pd,.ico-controls,.ico-file-xml,.ico-html5-css3,.ico-layout-left-header,.ico-marvin,.ico-print,.ico-tie,.ico-wysiwyg-font_family,.ico-wysiwyg-find,.ico-ticket,.ico-presentation,.ico-map,.ico-layout-left-header-rows,.ico-html5-css3-sign,.ico-file-powerpoint,.ico-contract,.ico-cc-nd,.ico-blocked,.ico-alarm,.ico-airplane,.ico-beverage,.ico-cc-nc,.ico-cone,.ico-file-pdf,.ico-html5-connectivity,.ico-layout-header,.ico-mail-reply,.ico-police,.ico-thumb-up,.ico-wysiwyg-cut,.ico-wysiwyg-copy,.ico-thumb-down,.ico-plus,.ico-mail-reply-all,.ico-layout-grid,.ico-html5-3d_effects,.ico-file-css,.ico-compass,.ico-cc-by,.ico-beer,.ico-aid,.ico-address-book,.ico-bank,.ico-cassette,.ico-comments,.ico-facetime,.ico-hospital,.ico-layout-grid-alt,.ico-mail-forward,.ico-plug,.ico-teapot,.ico-wysiwyg-align-right,.ico-wysiwyg-align-left,.ico-wysiwyg-align-justify,.ico-wysiwyg-align-center,.ico-table,.ico-tag,.ico-tags,.ico-pilcrow,.ico-photos,.ico-link,.ico-location,.ico-lock,.ico-pinterest-sign,.ico-layout-columns,.ico-laundromat,.ico-launch,.ico-health,.ico-heart,.ico-heart-empty,.ico-eye-open,.ico-eye-close,.ico-export,.ico-coffee-alt,.ico-coffee,.ico-columns,.ico-caret-right,.ico-caret-down,.ico-attachment,.ico-atom,.ico-arrow-up,.ico-car,.ico-undo,.ico-warning-alt,.ico-youtube,.ico-twitter,.ico-home,.ico-close-sign,.ico-check,.ico-help,.ico-timer,.ico-time-twenty_four,.ico-github-orig,.ico-check-sign,.ico-check-list,.ico-folder,.ico-terminal,.ico-soundcloud,.ico-file-layout,.ico-chart-increase,.ico-feed,.ico-share,.ico-facebook,.ico-share-alt,.ico-cart-add,.ico-cart,.ico-camera,.ico-facebook-like,.ico-settings,.ico-server,.ico-error,.ico-calendar,.ico-basket,.ico-search,.ico-safari,.ico-dribble,.ico-basket-add,.ico-earth,.ico-add-sign,.ico-device-MacBookPro,.ico-resize,.ico-refresh,.ico-device-iPhone,.ico-device-iPad,.ico-redo,.ico-raquo,.ico-device-desktop,.ico-deviant-art,.ico-pinterest,.ico-media-video,.ico-database,.ico-dashboard,.ico-map-pin,.ico-cloud-upload,.ico-link-alt,.ico-mail,.ico-cloud,.ico-cloud-download,.ico-close,.ico-info-sign,.ico-layout-web";
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]--><!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]--><!--[if IE 8]><html class="no-js lt-ie9"><![endif]--><!--[if gt IE 8]><!-->
<html class="no-js"><!--<![endif]-->
<head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Icon Demo</title>
<meta name="description" content="A demo of the new icon classes.">

<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css" class="cssfx">
<link rel="stylesheet" href="css/custom.css">
<script src="js/vendor/modernizr.js"></script>
<!--[if lt IE 7]><script src="js/vendor/lte-ie7.js"></script><![endif]-->
</head><body><!--[if lt IE 7]><p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p><![endif]-->

<div id="content" class="container-fluid">
	<div class="row-fluid main">
		<section class="span8 offset2" role="main">
				<header>
					<hgroup>
						<h1 class="title">Glyph Demo</h1>
						<h2 class="subtitle">A demo of the new glyph classes.</h2>
					</hgroup>
				</header>

				<p>You have 2 potential methods here.</p>
				<p>You may use:</p>
				<pre class="prettify linenums">&lt;i class=&quot;ico-[icon:name]&quot;&gt;&lt;/i&gt;</pre>
				<p><small>This will use the font so you can vary the size and color.</small></p>
				<p>&hellip; or you can use one of the 3 preset sizes all colored #333 by default.</p>
				<pre class="prettify linenums">&lt;i class=&quot;glyph-&lt;glyph:size&gt;[med|large]-[glyph:name]&quot;&gt;</i></pre>
				<p><small>These use png sprites &lt;glyph:size&gt; is optional [med|large] are available options. The original .svg files are in /.src/glyphs/.*</small></p>

				<section class="content">
					<h3>Glyph Font [.ico-*]</h3>
					<ul class="icons-grid">
					<?php render_icon($ico, '.ico-');?>
					<h3>Glyphs [.glyph-*]</h3>
					<ul class="icons-grid">
					<?php render_icon($glyph, '.glyph-');?>
					</ul>
					<h3>Glyphs Medium [.glyph-med-*]</h3>
					<ul class="icons-grid">
					<?php render_icon($glyph_med, '.glyph-med-');?>
					</ul>
					<h3>Glyphs Large [.glyph-large-*]</h3>
					<ul class="icons-grid">
					<?php render_icon($glyph_large, '.glyph-large-');?>
					</ul>
				</section>
		</section>
	</div>

	<div class="row-fluid sidebars">
		<aside class="sidebar-left span2">
			<div class="block">
				<header>
					<hgroup>
						<h3 class="title">[block:title]</h3>
						<h4 class="subtitle">[block:subtitle]</h4>
					</hgroup>
				</header>

				<section class="description">
					<p>[block:description]</p>
				</section>

				<footer>
					<nav class="links">
						<ul>
							<li><a href="" title=""></a></li>
						</ul>
					</nav>
				</footer>
			</div>
		</aside>

		<aside class="sidebar-right span2 offset8">
			<div class="block">
				<header>
					<hgroup>
						<h3 class="title">[block:title]</h3>
						<h4 class="subtitle">[block:subtitle]</h4>
					</hgroup>
				</header>

				<section class="description">
					<p>[block:description]</p>
				</section>

				<footer>
					<nav class="links">
						<ul>
							<li><a href="" title=""></a></li>
						</ul>
					</nav>
				</footer>
			</div>
		</aside><!-- /.sidebar-right -->
	</div><!-- /.sidebars -->
</div><!-- /#content -->

<div class="pushup container-fluid">
	<header id="header" class="row-fluid">
		<div class="span4">
			<a title="[site:title]" href="/" rel="home" id="site-logo"><img src="[site:logo]" alt="[site:slogan]"></a>
		</div>

		<hgroup class="span8">
			<h2 id="site-title"><a href="/" rel="home">[site:title]</a></h2>
			<h3 id="site-slogan">[site:slogan]</h3>
		</hgroup>
	</header><!-- /#header -->

	<div class="navbar">
		<div class="navbar-inner">
			<div class="container">
				<ul class="nav">
					<li class="active"><a href="#">Home</a></li>
					<li><a href="#">Projects</a></li>
					<li><a href="#">Services</a></li>
					<li><a href="#">Downloads</a></li>
					<li><a href="#">About</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</div>
		</div>
	</div><!-- /.navbar -->
</div><!-- /.pushup -->

<div id="footer" class="container-fluid">
	<footer class="row-fluid">
		<nav class="span8 links">
			<ul>
				<li><a href="//twitter.com/[site:twitter]" rel="nofollow">twitter</a></li>
				<li><a href="//facebook.com/[site:facebook]" rel="nofollow">facebook</a></li>
				<li><a href="#terms">terms</a></li>
				<li><a href="#privacy">privacy</a></li>
			</ul>
		</nav>
		<div class="span4">
			<p>Copyright [date:year] <a href="[entity:url]">[entity:name]</a></p>
			<p>Developed by: <a href="[developer:url]">[developer:name]</a></p>
		</div>
	</footer>
</div><!-- /#footer -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery.js"><\/script>')</script>
<script src="js/vendor/bootstrap.js"></script>
<script src="js/vendor/cssfx.js"></script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script></body></html>
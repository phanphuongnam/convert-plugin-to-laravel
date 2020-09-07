<div class="nbd-popup popup-nbd-my-templates" data-animate="scale">
    <div class="main-popup">
        <div class="overlay-main">
            <div class="loaded">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
                </svg>
            </div>
        </div>
        <i class="icon-nbd icon-nbd-clear close-popup"></i>
        <div class="head">
            <h2><?php esc_html_e('My designs','web-to-print-online-designer'); ?></h2>
        </div>
        <div class="body">
            <div class="main-body">
                <div class="tab-scroll">
                    <div class="nbd-user-design" ng-repeat="temp in resource.myTemplates" ng-click="loadMyDesign(temp.id, false)">
                        <div class="main-item">
                            <div class="item-img">
                                <img ng-src="{{temp.src}}" alt="<?php esc_html_e('Template','web-to-print-online-designer'); ?>">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer"></div>
    </div>
</div>
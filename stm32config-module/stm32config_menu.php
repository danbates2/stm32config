<?php
/** EmonCMS Menu File follows specific pattern of arrays to build a sidebar menu
 *  @see https://github.com/emoncms/example-module
 */


// emoncms menu item
$menu['sidebar']['emoncms'][] = array(
    'text' => _("STM32 Config"),
    'path' => 'stm32config',
    'active' => 'stm32config',
    'icon' => 'stm32',
    'data' => array('sidebar' => '#sidebar_stm32config')
);

// custom sidebar items
$menu['sidebar']['includes']['emoncms']['stm32config'] = array(
    array('text' => _("See All"), "path" => 'stm32config'),
    array('text' => _("Add New"), 'icon' => "plus", "path" => 'stm32config/new'),
);

// custom icons
$menu['includes']['icons'][] = <<<ICONS
    <symbol id="icon-stm32" viewBox="0 0 32 32">
        <!-- <title>stm32</title> -->
        <path d="m 19.666255,2.6671732 v 2.917459 H 21.94451 V 2.6671732 Z M 6.8154146,2.6695393 V 5.5869986 H 9.0942589 V 2.6695393 Z m 3.2127104,0 v 2.9174593 h 2.278844 V 2.6695393 Z m 3.212709,0 V 5.5869986 H 15.51968 V 2.6695393 Z m 3.212711,0 v 2.9174593 h 2.278254 V 2.6695359 Z M 3.8437023,6.1274842 V 27.200648 H 24.943393 V 6.1274842 Z M 0.38349729,9.0992878 V 11.378201 H 3.3008668 V 9.0992878 Z m 6.43191731,0 H 21.94451 V 24.228844 H 6.8154146 Z m 18.6708124,0 v 2.2789132 h 2.917369 V 9.0992878 Z M 0.38585998,12.312096 V 14.59101 H 3.3032298 v -2.278914 z m 25.10036702,0 v 2.278914 h 2.917369 v -2.278914 z m -14.354712,0.807485 c -0.508064,0 -0.957765,0.0853 -1.3491151,0.256953 -0.3913469,0.171649 -0.6938544,0.405331 -0.9066925,0.700569 -0.2128383,0.28837 -0.3189676,0.611125 -0.3189676,0.968154 v 0.257544 H 10.27621 c 0,-0.178515 0.06883,-0.329477 0.206147,-0.453065 0.144182,-0.130453 0.315966,-0.196111 0.515073,-0.196111 h 0.185473 c 0.199107,0 0.36713,0.06566 0.504444,0.196111 0.144179,0.123588 0.216188,0.27455 0.216188,0.453065 0,0.240309 -0.06823,0.425393 -0.205558,0.555848 -0.130448,0.123587 -0.302236,0.185479 -0.515074,0.185479 H 10.27621 v 1.267047 h 1.071495 c 0.212838,0 0.384032,0.06507 0.514482,0.195524 0.137316,0.123586 0.206148,0.305494 0.206148,0.545804 0,0.247174 -0.07201,0.442969 -0.21619,0.587154 -0.137314,0.144185 -0.340047,0.216195 -0.60781,0.216195 h -0.277621 c -0.274626,0 -0.480535,-0.06507 -0.61785,-0.195521 -0.137314,-0.137319 -0.206148,-0.312285 -0.206148,-0.525132 H 8.3299186 v 0.216196 c 0,0.377629 0.1029522,0.72062 0.308926,1.029587 0.2128381,0.308969 0.5216979,0.556536 0.9267775,0.741918 0.4050778,0.178515 0.8857249,0.267586 1.4418479,0.267586 h 0.43297 c 0.556126,0 1.036773,-0.08906 1.441851,-0.267586 0.405079,-0.185382 0.710173,-0.432949 0.916146,-0.741918 0.212838,-0.308967 0.319557,-0.655724 0.319557,-1.040217 0,-0.432558 -0.102959,-0.799552 -0.308925,-1.101654 -0.205973,-0.302103 -0.497772,-0.518723 -0.875388,-0.649179 0.302092,-0.123586 0.538943,-0.322556 0.710589,-0.597193 0.17851,-0.281507 0.267576,-0.600494 0.267576,-0.957525 0,-0.350163 -0.106133,-0.669741 -0.318966,-0.958111 -0.205973,-0.295238 -0.497771,-0.52892 -0.875389,-0.700569 -0.37075,-0.171648 -0.796446,-0.256953 -1.277051,-0.256953 z m 6.325597,0 c -0.542396,0 -1.012924,0.106133 -1.411136,0.318977 -0.398214,0.212844 -0.700132,0.504652 -0.906104,0.875414 -0.205974,0.363898 -0.308927,0.772545 -0.308927,1.2257 v 0.195521 h 1.812798 v -0.288261 c 0,-0.205979 0.06824,-0.37777 0.205558,-0.51509 0.144179,-0.137317 0.315964,-0.206152 0.515073,-0.206152 h 0.134083 c 0.199108,0 0.367126,0.07261 0.504441,0.216785 0.14418,0.137321 0.216191,0.305344 0.216191,0.504457 0,0.425689 -0.185082,0.786332 -0.555831,1.081568 l -2.039619,1.606699 c -0.302093,0.24031 -0.514943,0.497405 -0.638525,0.772045 -0.123584,0.274636 -0.184883,0.611276 -0.184883,1.009503 v 0.370366 h 5.509275 v -1.730155 h -2.70827 l 1.122291,-0.782675 c 0.542396,-0.377626 0.940914,-0.741446 1.194946,-1.091609 0.254034,-0.357032 0.38099,-0.782743 0.38099,-1.27709 0,-0.446287 -0.106133,-0.841052 -0.318968,-1.184351 C 19.774524,13.877935 19.478957,13.61013 19.094474,13.417883 18.71686,13.21877 18.277279,13.119581 17.776078,13.119581 Z M 0.38585998,15.524903 v 2.278915 H 3.3032298 v -2.278915 z m 25.10036702,0 v 2.278915 h 2.917369 V 15.524903 Z M 0.38585998,18.737712 v 2.278323 H 3.3032298 v -2.278323 z m 25.10036702,0 v 2.278323 h 2.917369 V 18.737712 Z M 0.38585998,21.950521 v 2.278323 H 3.3032298 v -2.278323 z m 25.10273002,0 v 2.278323 h 2.917372 V 21.950521 Z M 6.8154146,27.743498 v 2.917461 h 2.2788443 v -2.917461 z m 3.2127104,0 v 2.917461 h 2.278844 v -2.917461 z m 3.212709,0 v 2.917461 h 2.278846 v -2.917461 z m 3.212711,0 v 2.917461 h 2.278254 v -2.917461 z m 3.21271,0.0024 v 2.917459 H 21.94451 V 27.74589 Z"></path>
    </symbol>
    <symbol id="icon-checkbox-unchecked" viewBox="0 0 32 32">
        <!-- <title>checkbox-unchecked</title> -->
        <path d="M28 0h-24c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4v-24c0-2.2-1.8-4-4-4zM28 28h-24v-24h24v24z"></path>
    </symbol>
    <symbol id="icon-checkbox-checked" viewBox="0 0 32 32">
        <!-- <title>checkbox-checked</title> -->
        <path d="M28 0h-24c-2.2 0-4 1.8-4 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4v-24c0-2.2-1.8-4-4-4zM14 24.828l-7.414-7.414 2.828-2.828 4.586 4.586 9.586-9.586 2.828 2.828-12.414 12.414z"></path>
    </symbol>
    <symbol id="icon-keyboard_arrow_down" viewBox="0 0 32 32">
        <!-- <title>keyboard_arrow_down</title> -->
        <path d="M9.875 10.438l6.125 6.125 6.125-6.125 1.875 1.875-8 8-8-8z"></path>
    </symbol>
    <symbol id="icon-keyboard_arrow_right" viewBox="0 0 32 32">
        <!-- <title>keyboard_arrow_right</title> -->
        <path d="M11.438 21.813l6.125-6.125-6.125-6.125 1.875-1.875 8 8-8 8z"></path>
    </symbol>
ICONS;
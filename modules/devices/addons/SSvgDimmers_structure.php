<?php

$this->device_types['dimmerv'] = array(
    'TITLE'=>'Диммер векторный',
    'PARENT_CLASS'=>'SControllers',
    'CLASS'=>'SSvgDimmers',
    'DESCRIPTION'=>'Диммер расширенный',
    'PROPERTIES'=>array( 
        'state'=>array('DESCRIPTION'=>'MQTT state', 'ONCHANGE'=>'stateUpdated'),
        'cmnd'=>array('DESCRIPTION'=>'MQTT command'),
        'level'=>array('DESCRIPTION'=>'Current brightness level','ONCHANGE'=>'levelUpdated','DATA_KEY'=>1),
        'levelSaved'=>array('DESCRIPTION'=>'Latest level saved'),
        'levelWork'=>array('DESCRIPTION'=>'Brightness level (work)','ONCHANGE'=>'levelWorkUpdated'),
        'minWork'=>array('DESCRIPTION'=>LANG_DEVICES_DIMMER_MIN_WORK,'_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'maxWork'=>array('DESCRIPTION'=>LANG_DEVICES_DIMMER_MAX_WORK,'_CONFIG_TYPE'=>'num','_CONFIG_HELP'=>'SdDimmerMinMax'),
        'setMaxTurnOn'=>array('DESCRIPTION'=>LANG_DEVICES_DIMMER_SET_MAX,'_CONFIG_TYPE'=>'yesno','_CONFIG_HELP'=>'SdDimmerSetMax'),
        'cnt'=>array('DESCRIPTION'=>'Плавное диммирование 0-180','DATA_KEY'=>1),
        'direct'=>array('DESCRIPTION'=>'про','DATA_KEY'=>1),
        'gradient'=>array('DESCRIPTION'=>'Градиент нарастания яркости'),
        'memory'=>array('DESCRIPTION'=>'Память','_CONFIG_TYPE'=>'yesno'),
        'smooth'=>array('DESCRIPTION'=>'Плавное диммирование 0 1','_CONFIG_TYPE'=>'yesno'),
        'step'=>array('DESCRIPTION'=>'Шаг','_CONFIG_TYPE'=>'num'),
        'timer'=>array('DESCRIPTION'=>'Таймер выключения','_CONFIG_TYPE'=>'num'),
        'timer_work'=>array('DESCRIPTION'=>'Timer work'),
        'timer_state'=>array('DESCRIPTION'=>'Timer state','_CONFIG_TYPE'=>'select','_CONFIG_OPTIONS'=>'1=Off,2=1 min,3=5 min,4=10 min,5=15 min,6=30 min,7=45 min,8=60 min', 'ONCHANGE'=>'paramsUpdated'),
        'button_lock'=>array('DESCRIPTION'=>'Button locked','_CONFIG_TYPE'=>'yesno', 'ONCHANGE'=>'paramsUpdated'),
        'cct'=>array('DESCRIPTION'=>'Цветовая температура','_CONFIG_TYPE'=>'num')
    ),
    'METHODS'=>array(
        'stateUpdated'=>array('DESCRIPTION'=>'MQTT state updated event'),
        'paramsUpdated'=>array('DESCRIPTION'=>'Params updated event'),
        'statusUpdated'=>array('DESCRIPTION'=>'Status Updated'),
        'levelUpdated'=>array('DESCRIPTION'=>'Level Updated'),
        'levelWorkUpdated'=>array('DESCRIPTION'=>'Level Work Updated'),
        'turnOn'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_ON,'_CONFIG_SHOW'=>1),
        'turnOff'=>array('DESCRIPTION'=>LANG_DEVICES_TURN_OFF,'_CONFIG_SHOW'=>1),
        'dimUpDown'=>array('DESCRIPTION'=>'Яркость выше ниже'),
        'memoryOn'=>array('DESCRIPTION'=>'Память включить'),
        'memoryOff'=>array('DESCRIPTION'=>'Память выключить'),
        'memorySwitch'=>array('DESCRIPTION'=>'Память переключить'),
        'plus'=>array('DESCRIPTION'=>'Увеличить яркость'),
        'minus'=>array('DESCRIPTION'=>'Уменьшить яркость'),
        'On'=>array('DESCRIPTION'=>'Вкл','_CONFIG_SHOW'=>1),
        'Off'=>array('DESCRIPTION'=>'Выкл','_CONFIG_SHOW'=>1),
        'pwmCnt'=>array('DESCRIPTION'=>'управлять скоростью включения/выключения ШИМ порта Опция Smooth')
    )
);

@include_once(ROOT . 'languages/SSvgDimmers_' . SETTINGS_SITE_LANGUAGE . '.php');
@include_once(ROOT . 'languages/SSvgDimmers_default' . '.php');

<?php
$as_json = true;
$plugins = get_plugins();

foreach ( $plugins as $pluginfile => $pluginvalues ) {
    // $plugindata = get_plugin_data( $pluginfile, true, true );
    // $pluginvalues['data']  = $plugindata;
    $res = false;
    if (is_plugin_active( $pluginfile)) {
        $res = true;
    }
    $plugins[$pluginfile]['active'] = $res; 
}

if ($as_json) {
    return json_encode($plugins);
} else {
    return $plugins;
}

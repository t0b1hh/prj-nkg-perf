<?php
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

return $plugins;

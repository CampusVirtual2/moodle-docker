<IfModule mpm_prefork_module>
    StartServers             10
    MinSpareServers          10
    MaxSpareServers          25
    ServerLimit             500
    MaxRequestWorkers       500
    MaxConnectionsPerChild  2000
</IfModule>


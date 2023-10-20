<?php
function validIP($_ip)
{
    if (filter_var($_ip, FILTER_VALIDATE_IP)) {
        echo "$_ip est une adresse IPv4 valide";
    } else
        echo "$_ip n'est pas une adresse IPv4 valide !";
}
?>
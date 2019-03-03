<?php

function category_count()
{
    return 6;
}
function category($x)
{
    switch($x)
    {
        case '1':
            return 'Vehicles';
            break;
        case '2':
            return 'Irrigation Equipment';
            break;
        case '3':
            return 'Cultivation Tools';
            break;
        case '4':
            return 'Fertilization Tools';
            break;
        case '5':
            return 'Consumables';
            break;
        case '6':
            return 'Pest Control';
            break;
        default:
            return 'Uncategorized';
            break;
    }
}
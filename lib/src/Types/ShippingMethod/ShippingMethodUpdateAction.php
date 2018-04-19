<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ShippingMethodUpdateAction extends UpdateAction
{
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'addShippingRate' => Types\ShippingMethod\ShippingMethodAddShippingRateAction::class,
        'addZone' => Types\ShippingMethod\ShippingMethodAddZoneAction::class,
        'changeIsDefault' => Types\ShippingMethod\ShippingMethodChangeIsDefaultAction::class,
        'changeName' => Types\ShippingMethod\ShippingMethodChangeNameAction::class,
        'changeTaxCategory' => Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction::class,
        'removeShippingRate' => Types\ShippingMethod\ShippingMethodRemoveShippingRateAction::class,
        'removeZone' => Types\ShippingMethod\ShippingMethodRemoveZoneAction::class,
        'setDescription' => Types\ShippingMethod\ShippingMethodSetDescriptionAction::class,
        'setKey' => Types\ShippingMethod\ShippingMethodSetKeyAction::class,
        'setPredicate' => Types\ShippingMethod\ShippingMethodSetPredicateAction::class,

    ];

}

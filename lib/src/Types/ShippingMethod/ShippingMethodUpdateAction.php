<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Types\UpdateAction;
use Commercetools\Types;

interface ShippingMethodUpdateAction extends UpdateAction {
    const DISCRIMINATOR = 'action';
    const SUB_TYPES = [
        'setDescription' => Types\ShippingMethod\ShippingMethodSetDescriptionAction::class,
        'addShippingRate' => Types\ShippingMethod\ShippingMethodAddShippingRateAction::class,
        'setPredicate' => Types\ShippingMethod\ShippingMethodSetPredicateAction::class,
        'changeName' => Types\ShippingMethod\ShippingMethodChangeNameAction::class,
        'changeIsDefault' => Types\ShippingMethod\ShippingMethodChangeIsDefaultAction::class,
        'removeShippingRate' => Types\ShippingMethod\ShippingMethodRemoveShippingRateAction::class,
        'setKey' => Types\ShippingMethod\ShippingMethodSetKeyAction::class,
        'addZone' => Types\ShippingMethod\ShippingMethodAddZoneAction::class,
        'removeZone' => Types\ShippingMethod\ShippingMethodRemoveZoneAction::class,
        'changeTaxCategory' => Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction::class,

    ];

}

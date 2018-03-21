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
        'changeName' => Types\ShippingMethod\ShippingMethodChangeNameAction::class,
        'addShippingRate' => Types\ShippingMethod\ShippingMethodAddShippingRateAction::class,
        'removeShippingRate' => Types\ShippingMethod\ShippingMethodRemoveShippingRateAction::class,
        'changeIsDefault' => Types\ShippingMethod\ShippingMethodChangeIsDefaultAction::class,
        'setKey' => Types\ShippingMethod\ShippingMethodSetKeyAction::class,
        'changeTaxCategory' => Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction::class,
        'setPredicate' => Types\ShippingMethod\ShippingMethodSetPredicateAction::class,
        'addZone' => Types\ShippingMethod\ShippingMethodAddZoneAction::class,
        'removeZone' => Types\ShippingMethod\ShippingMethodRemoveZoneAction::class,
        'setDescription' => Types\ShippingMethod\ShippingMethodSetDescriptionAction::class,

    ];

}

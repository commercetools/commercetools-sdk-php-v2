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
        'setPredicate' => Types\ShippingMethod\ShippingMethodSetPredicateAction::class,
        'changeIsDefault' => Types\ShippingMethod\ShippingMethodChangeIsDefaultAction::class,
        'changeTaxCategory' => Types\ShippingMethod\ShippingMethodChangeTaxCategoryAction::class,
        'addZone' => Types\ShippingMethod\ShippingMethodAddZoneAction::class,
        'setDescription' => Types\ShippingMethod\ShippingMethodSetDescriptionAction::class,
        'changeName' => Types\ShippingMethod\ShippingMethodChangeNameAction::class,
        'setKey' => Types\ShippingMethod\ShippingMethodSetKeyAction::class,
        'addShippingRate' => Types\ShippingMethod\ShippingMethodAddShippingRateAction::class,
        'removeShippingRate' => Types\ShippingMethod\ShippingMethodRemoveShippingRateAction::class,
        'removeZone' => Types\ShippingMethod\ShippingMethodRemoveZoneAction::class,

    ];

}

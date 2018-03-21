<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\ShippingMethod;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface ShippingRatePriceTier extends JsonObject {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'CartValue' => Types\ShippingMethod\CartValueTier::class,
        'CartClassification' => Types\ShippingMethod\CartClassificationTier::class,
        'CartScore' => Types\ShippingMethod\CartScoreTier::class,

    ];

    const FIELD_TYPE = 'type';

    /**
     * @return string
     */
    public function getType();

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type);

}

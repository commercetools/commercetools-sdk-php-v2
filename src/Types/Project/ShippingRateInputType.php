<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Project;

use Commercetools\Base\JsonObject;

use Commercetools\Types;

interface ShippingRateInputType extends JsonObject {
    const DISCRIMINATOR = 'type';
    const SUB_TYPES = [
        'CartValue' => Types\Project\CartValueType::class,
        'CartScore' => Types\Project\CartScoreType::class,
        'CartClassification' => Types\Project\CartClassificationType::class,

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

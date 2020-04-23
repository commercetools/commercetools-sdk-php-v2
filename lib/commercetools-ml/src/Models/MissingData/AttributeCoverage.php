<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface AttributeCoverage extends JsonObject
{
    public const FIELD_NAMES = 'names';
    public const FIELD_VALUES = 'values';

    /**
     * <p>The percentage of attributes from the product type defined in the product variant. A value of <code>1.0</code> indicates a product variant contains all attributes defined in the product type.</p>
     *
     * @return null|float
     */
    public function getNames();

    /**
     * <p>Represents the percentage of attributes in the product variant that contain values.</p>
     *
     * @return null|float
     */
    public function getValues();

    public function setNames(?float $names): void;

    public function setValues(?float $values): void;
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface MissingAttributesDetails extends JsonObject
{

    public const FIELD_TOTAL = 'total';
    public const FIELD_MISSING_ATTRIBUTE_NAMES = 'missingAttributeNames';
    public const FIELD_MISSING_ATTRIBUTE_VALUES = 'missingAttributeValues';

    /**
     * <p>Number of products scanned.</p>
     *
     * @return null|int
     */
    public function getTotal();

    /**
     * <p>Number of products missing attribute names.</p>
     *
     * @return null|int
     */
    public function getMissingAttributeNames();

    /**
     * <p>Number of products missing attribute values.</p>
     *
     * @return null|int
     */
    public function getMissingAttributeValues();

    public function setTotal(?int $total): void;

    public function setMissingAttributeNames(?int $missingAttributeNames): void;

    public function setMissingAttributeValues(?int $missingAttributeValues): void;
}

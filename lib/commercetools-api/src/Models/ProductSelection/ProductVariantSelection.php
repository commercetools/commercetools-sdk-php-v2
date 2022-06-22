<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantSelection extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_SKUS = 'skus';

    /**
     * <p>One of the values <code>inclusion</code>, or <code>exclusion</code>, that determines whether the SKUs are to be included in, or excluded from, the Product Selection.</p>
     *
     * @return null|string
     */
    public function getType();

    /**
     * <p>Non-empty array of SKUs</p>
     *
     * @return null|array
     */
    public function getSkus();

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void;

    /**
     * @param ?array $skus
     */
    public function setSkus(?array $skus): void;
}

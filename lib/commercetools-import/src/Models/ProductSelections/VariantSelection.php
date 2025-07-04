<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\ProductSelections;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface VariantSelection extends JsonObject
{
    public const FIELD_TYPE = 'type';
    public const FIELD_SKUS = 'skus';

    /**
     * <p>Type of variant selection.</p>
     *

     * @return null|string
     */
    public function getType();

    /**
     * <p>List of SKUs to include or exclude.</p>
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

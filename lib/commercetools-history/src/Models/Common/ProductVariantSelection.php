<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface ProductVariantSelection extends JsonObject
{

    public const FIELD_TYPE = 'type';
    public const FIELD_SKUS = 'skus';

    /**

     * @return null|string
     */
    public function getType();

    /**

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

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Product\ProductVariant;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductVariantAddedMessage extends Message
{
    public const FIELD_VARIANT = 'variant';
    public const FIELD_STAGED = 'staged';

    /**
     * @return null|ProductVariant
     */
    public function getVariant();

    /**
     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?ProductVariant $variant
     */
    public function setVariant(?ProductVariant $variant): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}

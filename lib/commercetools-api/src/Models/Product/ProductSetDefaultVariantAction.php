<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Api\Models\Variant\VariantResourceIdentifier;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSetDefaultVariantAction extends ProductUpdateAction
{
    public const FIELD_VARIANT = 'variant';
    public const FIELD_STAGED = 'staged';

    /**
     * <p>The Variant to set as default. If empty, any existing value will be removed.</p>
     *

     * @return null|VariantResourceIdentifier
     */
    public function getVariant();

    /**
     * <p>If <code>true</code>, only the staged <code>defaultVariant</code> is updated. If <code>false</code>, both the current and staged <code>defaultVariant</code> are updated.</p>
     *

     * @return null|bool
     */
    public function getStaged();

    /**
     * @param ?VariantResourceIdentifier $variant
     */
    public function setVariant(?VariantResourceIdentifier $variant): void;

    /**
     * @param ?bool $staged
     */
    public function setStaged(?bool $staged): void;
}

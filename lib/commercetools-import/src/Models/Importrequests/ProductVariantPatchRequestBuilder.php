<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use Commercetools\Import\Models\Productvariants\ProductVariantPatchCollection;
use stdClass;

/**
 * @implements Builder<ProductVariantPatchRequest>
 */
final class ProductVariantPatchRequestBuilder implements Builder
{
    /**
     * @var ?ProductVariantPatchCollection
     */
    private $patches;

    /**
     * <p>The product variant patches of this request.</p>
     *
     * @return null|ProductVariantPatchCollection
     */
    public function getPatches()
    {
        return $this->patches;
    }

    /**
     * @param ?ProductVariantPatchCollection $patches
     * @return $this
     */
    public function withPatches(?ProductVariantPatchCollection $patches)
    {
        $this->patches = $patches;

        return $this;
    }


    public function build(): ProductVariantPatchRequest
    {
        return new ProductVariantPatchRequestModel(
            $this->patches
        );
    }

    public static function of(): ProductVariantPatchRequestBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Models\Importrequests;

use Shared\Base\Builder;
use Shared\Base\DateTimeImmutableCollection;
use Shared\Base\JsonObject;
use Shared\Base\JsonObjectModel;
use Shared\Base\MapperFactory;
use stdClass;
use Models\Productvariants\ProductVariantPatchCollection;

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

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importrequests;

use Commercetools\Base\Builder;
use Commercetools\Import\Models\Productvariants\ProductVariantPatchCollection;

/**
 * @implements Builder<ProductVariantPatchRequest>
 */
final class ProductVariantPatchRequestBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?ProductVariantPatchCollection
     */
    private $patches;

    public function __construct()
    {
    }

    /**
     * <p>The type of the import resource.</p>.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>The product variant patches of this request.</p>.
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
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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
            $this->type,
            $this->patches
        );
    }

    public static function of(): ProductVariantPatchRequestBuilder
    {
        return new self();
    }
}

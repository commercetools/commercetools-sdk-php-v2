<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductVariantSelectionExclusion>
 */
final class ProductVariantSelectionExclusionBuilder implements Builder
{
    /**

     * @var ?array
     */
    private $skus;

    /**
     * <p>Non-empty array of SKUs representing Product Variants to be excluded from the Product Selection.</p>
     *

     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @param ?array $skus
     * @return $this
     */
    public function withSkus(?array $skus)
    {
        $this->skus = $skus;

        return $this;
    }


    public function build(): ProductVariantSelectionExclusion
    {
        return new ProductVariantSelectionExclusionModel(
            $this->skus
        );
    }

    public static function of(): ProductVariantSelectionExclusionBuilder
    {
        return new self();
    }
}

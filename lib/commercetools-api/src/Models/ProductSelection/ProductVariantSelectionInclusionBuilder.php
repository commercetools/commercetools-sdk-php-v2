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
 * @implements Builder<ProductVariantSelectionInclusion>
 */
final class ProductVariantSelectionInclusionBuilder implements Builder
{
    /**
     * @var ?array
     */
    private $skus;

    /**
     * <p>Non-empty array of SKUs representing Product Variants to be included into the Product Selection.</p>
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


    public function build(): ProductVariantSelectionInclusion
    {
        return new ProductVariantSelectionInclusionModel(
            $this->skus
        );
    }

    public static function of(): ProductVariantSelectionInclusionBuilder
    {
        return new self();
    }
}

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
 * @implements Builder<ProductVariantSelection>
 */
final class ProductVariantSelectionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $type;

    /**
     * @var ?array
     */
    private $skus;

    /**
     * <p>One of the values <code>inclusion</code>, or <code>exclusion</code>, that determines whether the SKUs are to be included in, or excluded from, the Product Selection.</p>
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <p>Non-empty array of SKUs</p>
     *
     * @return null|array
     */
    public function getSkus()
    {
        return $this->skus;
    }

    /**
     * @param ?string $type
     * @return $this
     */
    public function withType(?string $type)
    {
        $this->type = $type;

        return $this;
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


    public function build(): ProductVariantSelection
    {
        return new ProductVariantSelectionModel(
            $this->type,
            $this->skus
        );
    }

    public static function of(): ProductVariantSelectionBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSearchMatchingVariant>
 */
final class ProductSearchMatchingVariantBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $id;

    /**

     * @var ?string
     */
    private $sku;

    /**
     * <p>Unique identifier of the variant.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>SKU of the matching variant.</p>
     *

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param ?int $id
     * @return $this
     */
    public function withId(?int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }


    public function build(): ProductSearchMatchingVariant
    {
        return new ProductSearchMatchingVariantModel(
            $this->id,
            $this->sku
        );
    }

    public static function of(): ProductSearchMatchingVariantBuilder
    {
        return new self();
    }
}

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
 * @implements Builder<ProductSearchMatchingVariantEntry>
 */
final class ProductSearchMatchingVariantEntryBuilder implements Builder
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
     * <p><code>id</code> of the <a href="ctp:api:type:ProductVariant">ProductVariant</a> that matches the search query.</p>
     *

     * @return null|int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p><code>sku</code> of the ProductVariant that matches the search query.</p>
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


    public function build(): ProductSearchMatchingVariantEntry
    {
        return new ProductSearchMatchingVariantEntryModel(
            $this->id,
            $this->sku
        );
    }

    public static function of(): ProductSearchMatchingVariantEntryBuilder
    {
        return new self();
    }
}

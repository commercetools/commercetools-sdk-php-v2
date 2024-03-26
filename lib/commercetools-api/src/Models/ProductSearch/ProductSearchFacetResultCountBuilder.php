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
 * @implements Builder<ProductSearchFacetResultCount>
 */
final class ProductSearchFacetResultCountBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

    /**

     * @var ?int
     */
    private $value;

    /**
     * <p>Name of the facet.</p>
     *

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>Number of Products (or Product Variants) matching the query.</p>
     *

     * @return null|int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param ?int $value
     * @return $this
     */
    public function withValue(?int $value)
    {
        $this->value = $value;

        return $this;
    }


    public function build(): ProductSearchFacetResultCount
    {
        return new ProductSearchFacetResultCountModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): ProductSearchFacetResultCountBuilder
    {
        return new self();
    }
}

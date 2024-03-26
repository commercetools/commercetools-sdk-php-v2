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
 * @implements Builder<ProductSearchFacetResult>
 */
final class ProductSearchFacetResultBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $name;

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
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }


    public function build(): ProductSearchFacetResult
    {
        return new ProductSearchFacetResultModel(
            $this->name
        );
    }

    public static function of(): ProductSearchFacetResultBuilder
    {
        return new self();
    }
}

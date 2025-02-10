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
 * @implements Builder<ProductSearchMatchingVariants>
 */
final class ProductSearchMatchingVariantsBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $allMatched;

    /**

     * @var ?ProductSearchMatchingVariantEntryCollection
     */
    private $matchedVariants;

    /**
     * <p><code>true</code> if all Variants of the returned Product match the search query, or if search query does not specify any expression for a <a href="/../api/projects/product-search#field-levels">Product Variant field</a>.</p>
     * <p><code>false</code> if only a subset of the Product Variants match the search query.</p>
     * <p>Is always <code>false</code> for query expressions on Product Variant fields.</p>
     *

     * @return null|bool
     */
    public function getAllMatched()
    {
        return $this->allMatched;
    }

    /**
     * <p>Identifiers of the Product Variants that match the search query.</p>
     * <p>Empty if all Product Variants of the returned Product match.</p>
     *

     * @return null|ProductSearchMatchingVariantEntryCollection
     */
    public function getMatchedVariants()
    {
        return $this->matchedVariants;
    }

    /**
     * @param ?bool $allMatched
     * @return $this
     */
    public function withAllMatched(?bool $allMatched)
    {
        $this->allMatched = $allMatched;

        return $this;
    }

    /**
     * @param ?ProductSearchMatchingVariantEntryCollection $matchedVariants
     * @return $this
     */
    public function withMatchedVariants(?ProductSearchMatchingVariantEntryCollection $matchedVariants)
    {
        $this->matchedVariants = $matchedVariants;

        return $this;
    }


    public function build(): ProductSearchMatchingVariants
    {
        return new ProductSearchMatchingVariantsModel(
            $this->allMatched,
            $this->matchedVariants
        );
    }

    public static function of(): ProductSearchMatchingVariantsBuilder
    {
        return new self();
    }
}

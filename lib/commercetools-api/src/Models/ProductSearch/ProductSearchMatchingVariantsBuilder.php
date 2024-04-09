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
     * <p>Whether the search criteria definitely matches all Variants of the returned Product, like for Product-level fields. Is always <code>false</code> for search expressions on Variant-level fields.</p>
     *

     * @return null|bool
     */
    public function getAllMatched()
    {
        return $this->allMatched;
    }

    /**
     * <p>The variants matching the search criteria or empty if all matched.</p>
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

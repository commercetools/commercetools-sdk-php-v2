<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;

interface ProductSearchMatchingVariants extends JsonObject
{
    public const FIELD_ALL_MATCHED = 'allMatched';
    public const FIELD_MATCHED_VARIANTS = 'matchedVariants';

    /**
     * <p><code>true</code> if all Variants of the returned Product match the search query, or if search query does not specify any expression for a <a href="/../api/projects/product-search#field-levels">Product Variant field</a>.</p>
     * <p><code>false</code> if only a subset of the Product Variants match the search query.</p>
     * <p>Is always <code>false</code> for query expressions on Product Variant fields.</p>
     *

     * @return null|bool
     */
    public function getAllMatched();

    /**
     * <p>Identifiers of the Product Variants that match the search query.</p>
     * <p>Empty if all Product Variants of the returned Product match.</p>
     *

     * @return null|ProductSearchMatchingVariantEntryCollection
     */
    public function getMatchedVariants();

    /**
     * @param ?bool $allMatched
     */
    public function setAllMatched(?bool $allMatched): void;

    /**
     * @param ?ProductSearchMatchingVariantEntryCollection $matchedVariants
     */
    public function setMatchedVariants(?ProductSearchMatchingVariantEntryCollection $matchedVariants): void;
}

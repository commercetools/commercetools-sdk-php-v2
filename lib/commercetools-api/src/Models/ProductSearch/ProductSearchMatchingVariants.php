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
     * <p>Whether the search criteria definitely matches for all Variants of the returned Product, like for Product-level fields. Is always <code>false</code> for search expressions on Variant-level fields.</p>
     *

     * @return null|bool
     */
    public function getAllMatched();

    /**
     * <p>The variants matching the search criteria or empty if all matched.</p>
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

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSearch;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProductSearchMatchingVariantsModel extends JsonObjectModel implements ProductSearchMatchingVariants
{
    /**
     *
     * @var ?bool
     */
    protected $allMatched;

    /**
     *
     * @var ?ProductSearchMatchingVariantEntryCollection
     */
    protected $matchedVariants;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $allMatched = null,
        ?ProductSearchMatchingVariantEntryCollection $matchedVariants = null
    ) {
        $this->allMatched = $allMatched;
        $this->matchedVariants = $matchedVariants;
    }

    /**
     * <p>Whether the search criteria definitely matches for all Variants of the returned Product, like for Product-level fields. Is always <code>false</code> for search expressions on Variant-level fields.</p>
     *
     *
     * @return null|bool
     */
    public function getAllMatched()
    {
        if (is_null($this->allMatched)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_ALL_MATCHED);
            if (is_null($data)) {
                return null;
            }
            $this->allMatched = (bool) $data;
        }

        return $this->allMatched;
    }

    /**
     * <p>The variants matching the search criteria or empty if all matched.</p>
     *
     *
     * @return null|ProductSearchMatchingVariantEntryCollection
     */
    public function getMatchedVariants()
    {
        if (is_null($this->matchedVariants)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_MATCHED_VARIANTS);
            if (is_null($data)) {
                return null;
            }
            $this->matchedVariants = ProductSearchMatchingVariantEntryCollection::fromArray($data);
        }

        return $this->matchedVariants;
    }


    /**
     * @param ?bool $allMatched
     */
    public function setAllMatched(?bool $allMatched): void
    {
        $this->allMatched = $allMatched;
    }

    /**
     * @param ?ProductSearchMatchingVariantEntryCollection $matchedVariants
     */
    public function setMatchedVariants(?ProductSearchMatchingVariantEntryCollection $matchedVariants): void
    {
        $this->matchedVariants = $matchedVariants;
    }
}

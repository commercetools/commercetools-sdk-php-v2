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
     * <p><code>true</code> if all Variants of the returned Product match the search query, or if search query does not specify any expression for a <a href="/../api/projects/product-search#field-levels">Product Variant field</a>.</p>
     * <p><code>false</code> if only a subset of the Product Variants match the search query.</p>
     * <p>Is always <code>false</code> for query expressions on Product Variant fields.</p>
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
     * <p>Identifiers of the Product Variants that match the search query.</p>
     * <p>Empty if all Product Variants of the returned Product match.</p>
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

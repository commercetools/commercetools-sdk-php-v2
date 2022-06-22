<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductTypeChangeIsSearchableAction>
 */
final class ProductTypeChangeIsSearchableActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?bool
     */
    private $isSearchable;

    /**
     * <p>Name of the AttributeDefinition to update.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * <p>Determines whether the Attribute's values can be used in full-text search queries, filters, and facets. See <a href="ctp:api:type:AttributeDefinition">AttributeDefinition</a> for details.</p>
     *
     * @return null|bool
     */
    public function getIsSearchable()
    {
        return $this->isSearchable;
    }

    /**
     * @param ?string $attributeName
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
     * @param ?bool $isSearchable
     * @return $this
     */
    public function withIsSearchable(?bool $isSearchable)
    {
        $this->isSearchable = $isSearchable;

        return $this;
    }


    public function build(): ProductTypeChangeIsSearchableAction
    {
        return new ProductTypeChangeIsSearchableActionModel(
            $this->attributeName,
            $this->isSearchable
        );
    }

    public static function of(): ProductTypeChangeIsSearchableActionBuilder
    {
        return new self();
    }
}

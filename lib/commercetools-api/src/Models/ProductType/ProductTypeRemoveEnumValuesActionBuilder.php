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
 * @implements Builder<ProductTypeRemoveEnumValuesAction>
 */
final class ProductTypeRemoveEnumValuesActionBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $attributeName;

    /**

     * @var ?array
     */
    private $keys;

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
     * <p>Keys of <a href="ctp:api:type:AttributeEnumType">AttributeEnumType</a> or <a href="ctp:api:type:AttributeLocalizedEnumType">AttributeLocalizedEnumType</a> to remove.</p>
     *

     * @return null|array
     */
    public function getKeys()
    {
        return $this->keys;
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
     * @param ?array $keys
     * @return $this
     */
    public function withKeys(?array $keys)
    {
        $this->keys = $keys;

        return $this;
    }


    public function build(): ProductTypeRemoveEnumValuesAction
    {
        return new ProductTypeRemoveEnumValuesActionModel(
            $this->attributeName,
            $this->keys
        );
    }

    public static function of(): ProductTypeRemoveEnumValuesActionBuilder
    {
        return new self();
    }
}

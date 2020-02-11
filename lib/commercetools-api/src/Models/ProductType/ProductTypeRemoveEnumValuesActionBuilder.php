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
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|array
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * @return $this
     */
    public function withAttributeName(?string $attributeName)
    {
        $this->attributeName = $attributeName;

        return $this;
    }

    /**
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

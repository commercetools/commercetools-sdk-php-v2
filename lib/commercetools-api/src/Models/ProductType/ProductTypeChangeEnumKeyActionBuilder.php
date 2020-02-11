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
 * @implements Builder<ProductTypeChangeEnumKeyAction>
 */
final class ProductTypeChangeEnumKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?string
     */
    private $key;

    /**
     * @var ?string
     */
    private $newKey;

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getNewKey()
    {
        return $this->newKey;
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
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewKey(?string $newKey)
    {
        $this->newKey = $newKey;

        return $this;
    }


    public function build(): ProductTypeChangeEnumKeyAction
    {
        return new ProductTypeChangeEnumKeyActionModel(
            $this->attributeName,
            $this->key,
            $this->newKey
        );
    }

    public static function of(): ProductTypeChangeEnumKeyActionBuilder
    {
        return new self();
    }
}

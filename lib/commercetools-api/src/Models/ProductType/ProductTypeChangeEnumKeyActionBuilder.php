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
     * <p>Name of the AttributeDefinition to update.</p>
     *
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
    }

    /**
     * <p>Existing key to be changed.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <p>New key to be set.</p>
     *
     * @return null|string
     */
    public function getNewKey()
    {
        return $this->newKey;
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
     * @param ?string $key
     * @return $this
     */
    public function withKey(?string $key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * @param ?string $newKey
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

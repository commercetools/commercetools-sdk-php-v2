<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeEnumKeyAction>
 */
final class ProductTypeChangeEnumKeyActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $newKey;

    /**
     * @var ?string
     */
    private $attributeName;

    /**
     * @var ?string
     */
    private $key;

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getNewKey()
    {
        return $this->newKey;
    }

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
     * @return $this
     */
    public function withAction(?string $action)
    {
        $this->action = $action;

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

    public function build(): ProductTypeChangeEnumKeyAction
    {
        return new ProductTypeChangeEnumKeyActionModel(
            $this->action,
            $this->newKey,
            $this->attributeName,
            $this->key
        );
    }

    public static function of(): ProductTypeChangeEnumKeyActionBuilder
    {
        return new self();
    }
}

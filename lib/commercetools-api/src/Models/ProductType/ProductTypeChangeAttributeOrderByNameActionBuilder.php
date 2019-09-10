<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeAttributeOrderByNameAction>
 */
final class ProductTypeChangeAttributeOrderByNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?array
     */
    private $attributeNames;

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
     * @return null|array
     */
    public function getAttributeNames()
    {
        return $this->attributeNames;
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
    public function withAttributeNames(?array $attributeNames)
    {
        $this->attributeNames = $attributeNames;

        return $this;
    }

    public function build(): ProductTypeChangeAttributeOrderByNameAction
    {
        return new ProductTypeChangeAttributeOrderByNameActionModel(
            $this->action,
            $this->attributeNames
        );
    }

    public static function of(): ProductTypeChangeAttributeOrderByNameActionBuilder
    {
        return new self();
    }
}

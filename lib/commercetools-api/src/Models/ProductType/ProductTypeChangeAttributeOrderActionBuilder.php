<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeAttributeOrderAction>
 */
final class ProductTypeChangeAttributeOrderActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?AttributeDefinitionCollection
     */
    private $attributes;

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
     * @return null|AttributeDefinitionCollection
     */
    public function getAttributes()
    {
        return $this->attributes;
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
    public function withAttributes(?AttributeDefinitionCollection $attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    public function build(): ProductTypeChangeAttributeOrderAction
    {
        return new ProductTypeChangeAttributeOrderActionModel(
            $this->action,
            $this->attributes
        );
    }

    public static function of(): ProductTypeChangeAttributeOrderActionBuilder
    {
        return new self();
    }
}

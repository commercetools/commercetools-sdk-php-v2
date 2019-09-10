<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\Builder;

/**
 * @implements Builder<ProductTypeChangeAttributeNameAction>
 */
final class ProductTypeChangeAttributeNameActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $newAttributeName;

    /**
     * @var ?string
     */
    private $attributeName;

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
    public function getNewAttributeName()
    {
        return $this->newAttributeName;
    }

    /**
     * @return null|string
     */
    public function getAttributeName()
    {
        return $this->attributeName;
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
    public function withNewAttributeName(?string $newAttributeName)
    {
        $this->newAttributeName = $newAttributeName;

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

    public function build(): ProductTypeChangeAttributeNameAction
    {
        return new ProductTypeChangeAttributeNameActionModel(
            $this->action,
            $this->newAttributeName,
            $this->attributeName
        );
    }

    public static function of(): ProductTypeChangeAttributeNameActionBuilder
    {
        return new self();
    }
}

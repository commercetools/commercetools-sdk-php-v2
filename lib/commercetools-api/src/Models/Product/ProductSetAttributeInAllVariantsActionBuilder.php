<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\JsonObject;

/**
 * @implements Builder<ProductSetAttributeInAllVariantsAction>
 */
final class ProductSetAttributeInAllVariantsActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?JsonObject
     */
    private $value;

    /**
     * @var ?bool
     */
    private $staged;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>The same update behavior as for Set Attribute applies.</p>
     *
     * @return null|JsonObject
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return null|bool
     */
    public function getStaged()
    {
        return $this->staged;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withValue(?JsonObject $value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }

    public function build(): ProductSetAttributeInAllVariantsAction
    {
        return new ProductSetAttributeInAllVariantsActionModel(
            $this->name,
            $this->value,
            $this->staged
        );
    }

    public static function of(): ProductSetAttributeInAllVariantsActionBuilder
    {
        return new self();
    }
}

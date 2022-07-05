<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProductSetAttributeAction>
 */
final class ProductSetAttributeActionBuilder implements Builder
{
    /**

     * @var ?int
     */
    private $variantId;

    /**

     * @var ?string
     */
    private $sku;

    /**

     * @var ?string
     */
    private $name;

    /**

     * @var null|mixed|mixed
     */
    private $value;

    /**

     * @var ?bool
     */
    private $staged;

    /**

     * @return null|int
     */
    public function getVariantId()
    {
        return $this->variantId;
    }

    /**

     * @return null|string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**

     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * <p>If the attribute exists and the value is omitted or set to <code>null</code>, the attribute is removed.
     * If the attribute exists and a value is provided, the new value is applied.
     * If the attribute does not exist and a value is provided, it is added as a new attribute.</p>
     *

     * @return null|mixed
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
     * @param ?int $variantId
     * @return $this
     */
    public function withVariantId(?int $variantId)
    {
        $this->variantId = $variantId;

        return $this;
    }

    /**
     * @param ?string $sku
     * @return $this
     */
    public function withSku(?string $sku)
    {
        $this->sku = $sku;

        return $this;
    }

    /**
     * @param ?string $name
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param mixed $value
     * @return $this
     */
    public function withValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * @param ?bool $staged
     * @return $this
     */
    public function withStaged(?bool $staged)
    {
        $this->staged = $staged;

        return $this;
    }


    public function build(): ProductSetAttributeAction
    {
        return new ProductSetAttributeActionModel(
            $this->variantId,
            $this->sku,
            $this->name,
            $this->value,
            $this->staged
        );
    }

    public static function of(): ProductSetAttributeActionBuilder
    {
        return new self();
    }
}

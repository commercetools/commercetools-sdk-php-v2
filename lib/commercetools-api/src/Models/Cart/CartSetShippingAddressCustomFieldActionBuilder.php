<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CartSetShippingAddressCustomFieldAction>
 */
final class CartSetShippingAddressCustomFieldActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $name;

    /**
     * @var null|mixed|mixed
     */
    private $value;

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|mixed
     */
    public function getValue()
    {
        return $this->value;
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


    public function build(): CartSetShippingAddressCustomFieldAction
    {
        return new CartSetShippingAddressCustomFieldActionModel(
            $this->name,
            $this->value
        );
    }

    public static function of(): CartSetShippingAddressCustomFieldActionBuilder
    {
        return new self();
    }
}

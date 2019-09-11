<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\Builder;

/**
 * @implements Builder<MyCartRemoveItemShippingAddressAction>
 */
final class MyCartRemoveItemShippingAddressActionBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $action;

    /**
     * @var ?string
     */
    private $addressKey;

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
    public function getAddressKey()
    {
        return $this->addressKey;
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
    public function withAddressKey(?string $addressKey)
    {
        $this->addressKey = $addressKey;

        return $this;
    }

    public function build(): MyCartRemoveItemShippingAddressAction
    {
        return new MyCartRemoveItemShippingAddressActionModel(
            $this->action,
            $this->addressKey
        );
    }

    public static function of(): MyCartRemoveItemShippingAddressActionBuilder
    {
        return new self();
    }
}

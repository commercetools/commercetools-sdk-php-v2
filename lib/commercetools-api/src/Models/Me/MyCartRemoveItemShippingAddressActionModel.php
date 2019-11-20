<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;

final class MyCartRemoveItemShippingAddressActionModel extends JsonObjectModel implements MyCartRemoveItemShippingAddressAction
{
    const DISCRIMINATOR_VALUE = 'removeItemShippingAddress';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $addressKey;

    public function __construct(
        string $addressKey = null
    ) {
        $this->addressKey = $addressKey;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|string
     */
    public function getAddressKey()
    {
        if (is_null($this->addressKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCartRemoveItemShippingAddressAction::FIELD_ADDRESS_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->addressKey = (string) $data;
        }

        return $this->addressKey;
    }

    public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }
}

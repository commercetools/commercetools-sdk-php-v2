<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class MyCustomerChangeAddressActionModel extends JsonObjectModel implements MyCustomerChangeAddressAction
{
    const DISCRIMINATOR_VALUE = 'changeAddress';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?Address
     */
    protected $address;

    /**
     * @var ?string
     */
    protected $addressId;

    public function __construct(
        string $action = null,
        Address $address = null,
        string $addressId = null
    ) {
        $this->action = $action;
        $this->address = $address;
        $this->addressId = $addressId;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(MyCustomerChangeAddressAction::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }

    /**
     * @return null|string
     */
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyCustomerChangeAddressAction::FIELD_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->addressId = (string) $data;
        }

        return $this->addressId;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }

    public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }
}

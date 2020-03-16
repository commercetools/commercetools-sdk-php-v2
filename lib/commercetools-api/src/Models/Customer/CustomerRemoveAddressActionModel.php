<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerRemoveAddressActionModel extends JsonObjectModel implements CustomerRemoveAddressAction
{
    public const DISCRIMINATOR_VALUE = 'removeAddress';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $addressId;


    public function __construct(
        string $addressId = null
    ) {
        $this->addressId = $addressId;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerUpdateAction::FIELD_ACTION);
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
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CustomerRemoveAddressAction::FIELD_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->addressId = (string) $data;
        }

        return $this->addressId;
    }

    public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }
}

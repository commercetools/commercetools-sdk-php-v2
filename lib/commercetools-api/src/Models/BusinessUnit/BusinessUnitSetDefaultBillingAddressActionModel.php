<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\BusinessUnit;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitSetDefaultBillingAddressActionModel extends JsonObjectModel implements BusinessUnitSetDefaultBillingAddressAction
{
    public const DISCRIMINATOR_VALUE = 'setDefaultBillingAddress';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $addressId;

    /**
     *
     * @var ?string
     */
    protected $addressKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addressId = null,
        ?string $addressKey = null,
        ?string $action = null
    ) {
        $this->addressId = $addressId;
        $this->addressKey = $addressKey;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>ID of the address to add as a billing address. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getAddressId()
    {
        if (is_null($this->addressId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDRESS_ID);
            if (is_null($data)) {
                return null;
            }
            $this->addressId = (string) $data;
        }

        return $this->addressId;
    }

    /**
     * <p>Key of the address to add as a billing address. Either <code>addressId</code> or <code>addressKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getAddressKey()
    {
        if (is_null($this->addressKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ADDRESS_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->addressKey = (string) $data;
        }

        return $this->addressKey;
    }


    /**
     * @param ?string $addressId
     */
    public function setAddressId(?string $addressId): void
    {
        $this->addressId = $addressId;
    }

    /**
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }
}

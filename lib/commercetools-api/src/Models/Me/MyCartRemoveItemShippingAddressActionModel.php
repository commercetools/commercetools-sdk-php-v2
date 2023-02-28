<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class MyCartRemoveItemShippingAddressActionModel extends JsonObjectModel implements MyCartRemoveItemShippingAddressAction
{
    public const DISCRIMINATOR_VALUE = 'removeItemShippingAddress';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $addressKey;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addressKey = null,
        ?string $action = null
    ) {
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
     * <p><code>key</code> of the Address to remove from <code>itemShippingAddresses</code>.</p>
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
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Customer;

use Commercetools\Api\Models\Common\BaseAddress;
use Commercetools\Api\Models\Common\BaseAddressModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CustomerAddAddressActionModel extends JsonObjectModel implements CustomerAddAddressAction
{
    public const DISCRIMINATOR_VALUE = 'addAddress';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?BaseAddress
     */
    protected $address;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?BaseAddress $address = null,
        ?string $action = null
    ) {
        $this->address = $address;
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
     * <p>Value to append to the <code>addresses</code> array.</p>
     *
     *
     * @return null|BaseAddress
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = BaseAddressModel::of($data);
        }

        return $this->address;
    }


    /**
     * @param ?BaseAddress $address
     */
    public function setAddress(?BaseAddress $address): void
    {
        $this->address = $address;
    }
}

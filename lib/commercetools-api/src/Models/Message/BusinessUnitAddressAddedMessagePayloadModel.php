<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\Address;
use Commercetools\Api\Models\Common\AddressModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class BusinessUnitAddressAddedMessagePayloadModel extends JsonObjectModel implements BusinessUnitAddressAddedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'BusinessUnitAddressAdded';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?Address
     */
    protected $address;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?Address $address = null,
        ?string $type = null
    ) {
        $this->address = $address;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The address that was added to the <a href="ctp:api:type:BusinessUnit">Business Unit</a>.</p>
     *
     *
     * @return null|Address
     */
    public function getAddress()
    {
        if (is_null($this->address)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ADDRESS);
            if (is_null($data)) {
                return null;
            }

            $this->address = AddressModel::of($data);
        }

        return $this->address;
    }


    /**
     * @param ?Address $address
     */
    public function setAddress(?Address $address): void
    {
        $this->address = $address;
    }
}

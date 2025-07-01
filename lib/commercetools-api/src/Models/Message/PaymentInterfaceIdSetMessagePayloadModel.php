<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class PaymentInterfaceIdSetMessagePayloadModel extends JsonObjectModel implements PaymentInterfaceIdSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentInterfaceIdSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $interfaceId;

    /**
     *
     * @var ?string
     */
    protected $oldInterfaceId;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $interfaceId = null,
        ?string $oldInterfaceId = null,
        ?string $type = null
    ) {
        $this->interfaceId = $interfaceId;
        $this->oldInterfaceId = $oldInterfaceId;
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
     * <p>Interface ID of the Payment after the <a href="ctp:api:type:PaymentSetInterfaceIdAction">Set InterfaceId</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getInterfaceId()
    {
        if (is_null($this->interfaceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->interfaceId = (string) $data;
        }

        return $this->interfaceId;
    }

    /**
     * <p>Interface ID of the Payment before the <a href="ctp:api:type:PaymentSetInterfaceIdAction">Set InterfaceId</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldInterfaceId()
    {
        if (is_null($this->oldInterfaceId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_INTERFACE_ID);
            if (is_null($data)) {
                return null;
            }
            $this->oldInterfaceId = (string) $data;
        }

        return $this->oldInterfaceId;
    }


    /**
     * @param ?string $interfaceId
     */
    public function setInterfaceId(?string $interfaceId): void
    {
        $this->interfaceId = $interfaceId;
    }

    /**
     * @param ?string $oldInterfaceId
     */
    public function setOldInterfaceId(?string $oldInterfaceId): void
    {
        $this->oldInterfaceId = $oldInterfaceId;
    }
}

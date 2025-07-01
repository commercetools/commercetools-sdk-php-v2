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
final class PaymentMethodInfoInterfaceSetMessagePayloadModel extends JsonObjectModel implements PaymentMethodInfoInterfaceSetMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'PaymentMethodInfoInterfaceSet';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?string
     */
    protected $interface;

    /**
     *
     * @var ?string
     */
    protected $oldInterface;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $interface = null,
        ?string $oldInterface = null,
        ?string $type = null
    ) {
        $this->interface = $interface;
        $this->oldInterface = $oldInterface;
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
     * <p>Payment interface of the Payment Method after the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAction">Set MethodInfo Interface</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getInterface()
    {
        if (is_null($this->interface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->interface = (string) $data;
        }

        return $this->interface;
    }

    /**
     * <p>Payment interface of the Payment Method before the <a href="ctp:api:type:PaymentSetMethodInfoInterfaceAction">Set MethodInfo Interface</a> update action.</p>
     *
     *
     * @return null|string
     */
    public function getOldInterface()
    {
        if (is_null($this->oldInterface)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_OLD_INTERFACE);
            if (is_null($data)) {
                return null;
            }
            $this->oldInterface = (string) $data;
        }

        return $this->oldInterface;
    }


    /**
     * @param ?string $interface
     */
    public function setInterface(?string $interface): void
    {
        $this->interface = $interface;
    }

    /**
     * @param ?string $oldInterface
     */
    public function setOldInterface(?string $oldInterface): void
    {
        $this->oldInterface = $oldInterface;
    }
}

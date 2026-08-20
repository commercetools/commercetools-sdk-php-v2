<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShippingMethod;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShippingMethodSetCarrierActionModel extends JsonObjectModel implements ShippingMethodSetCarrierAction
{
    public const DISCRIMINATOR_VALUE = 'setCarrier';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $carrier;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $carrier = null,
        ?string $action = null
    ) {
        $this->carrier = $carrier;
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
     * <p>Name of the carrier that delivers the parcel, for example <code>DHL</code>. If <code>carrier</code> is absent or <code>null</code>, it is removed if it exists.</p>
     *
     *
     * @return null|string
     */
    public function getCarrier()
    {
        if (is_null($this->carrier)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CARRIER);
            if (is_null($data)) {
                return null;
            }
            $this->carrier = (string) $data;
        }

        return $this->carrier;
    }


    /**
     * @param ?string $carrier
     */
    public function setCarrier(?string $carrier): void
    {
        $this->carrier = $carrier;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CartSetDeliveryAddressCustomFieldActionModel extends JsonObjectModel implements CartSetDeliveryAddressCustomFieldAction
{
    public const DISCRIMINATOR_VALUE = 'setDeliveryAddressCustomField';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $deliveryId;

    /**
     *
     * @var ?string
     */
    protected $name;

    /**
     *
     * @var ?mixed
     */
    protected $value;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $deliveryId = null,
        ?string $name = null,
        $value = null,
        ?string $action = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->name = $name;
        $this->value = $value;
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
     *
     * @return null|string
     */
    public function getDeliveryId()
    {
        if (is_null($this->deliveryId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DELIVERY_ID);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryId = (string) $data;
        }

        return $this->deliveryId;
    }

    /**
     * <p>Name of the <a href="/../api/projects/custom-fields">Custom Field</a>.</p>
     *
     *
     * @return null|string
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->name = (string) $data;
        }

        return $this->name;
    }

    /**
     * <p>If <code>value</code> is absent or <code>null</code>, this field will be removed if it exists.
     * Trying to remove a field that does not exist will fail with an <a href="/../api/errors#general-400-invalid-operation">InvalidOperation</a> error.
     * If <code>value</code> is provided, it is set for the field defined by <code>name</code>.</p>
     *
     *
     * @return null|mixed
     */
    public function getValue()
    {
        if (is_null($this->value)) {
            /** @psalm-var mixed $data */
            $data = $this->raw(self::FIELD_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->value = $data;
        }

        return $this->value;
    }


    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    /**
     * @param ?string $name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value): void
    {
        $this->value = $value;
    }
}

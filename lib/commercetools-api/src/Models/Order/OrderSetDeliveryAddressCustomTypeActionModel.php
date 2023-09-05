<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerModel;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class OrderSetDeliveryAddressCustomTypeActionModel extends JsonObjectModel implements OrderSetDeliveryAddressCustomTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setDeliveryAddressCustomType';
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
    protected $deliveryKey;

    /**
     *
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**
     *
     * @var ?FieldContainer
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $deliveryId = null,
        ?string $deliveryKey = null,
        ?TypeResourceIdentifier $type = null,
        ?FieldContainer $fields = null,
        ?string $action = null
    ) {
        $this->deliveryId = $deliveryId;
        $this->deliveryKey = $deliveryKey;
        $this->type = $type;
        $this->fields = $fields;
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
     * <p><code>id</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *
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
     * <p><code>key</code> of an existing <a href="ctp:api:type:Delivery">Delivery</a>.</p>
     * <p>Either <code>deliveryId</code> or <code>deliveryKey</code> must be provided.</p>
     *
     *
     * @return null|string
     */
    public function getDeliveryKey()
    {
        if (is_null($this->deliveryKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_DELIVERY_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->deliveryKey = (string) $data;
        }

        return $this->deliveryKey;
    }

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the <a href="ctp:api:type:Delivery">Delivery</a> <code>address</code> with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the <a href="ctp:api:type:Delivery">Delivery</a> <code>address</code>.</p>
     *
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the <a href="ctp:api:type:Delivery">Delivery</a> <code>address</code>.</p>
     *
     *
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
        }

        return $this->fields;
    }


    /**
     * @param ?string $deliveryId
     */
    public function setDeliveryId(?string $deliveryId): void
    {
        $this->deliveryId = $deliveryId;
    }

    /**
     * @param ?string $deliveryKey
     */
    public function setDeliveryKey(?string $deliveryKey): void
    {
        $this->deliveryKey = $deliveryKey;
    }

    /**
     * @param ?TypeResourceIdentifier $type
     */
    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?FieldContainer $fields
     */
    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }
}

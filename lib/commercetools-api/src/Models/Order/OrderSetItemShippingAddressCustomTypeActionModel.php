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
final class OrderSetItemShippingAddressCustomTypeActionModel extends JsonObjectModel implements OrderSetItemShippingAddressCustomTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setItemShippingAddressCustomType';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $addressKey;

    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**
     * @var ?FieldContainer
     */
    protected $fields;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $addressKey = null,
        ?TypeResourceIdentifier $type = null,
        ?FieldContainer $fields = null
    ) {
        $this->addressKey = $addressKey;
        $this->type = $type;
        $this->fields = $fields;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
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
     * <p><a href="/../api/types#resourceidentifier">ResourceIdentifier</a> of a <a href="ctp:api:type:Type">Type</a>.</p>
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
     * @param ?string $addressKey
     */
    public function setAddressKey(?string $addressKey): void
    {
        $this->addressKey = $addressKey;
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

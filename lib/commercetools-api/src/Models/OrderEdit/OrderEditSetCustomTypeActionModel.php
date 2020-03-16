<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

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
final class OrderEditSetCustomTypeActionModel extends JsonObjectModel implements OrderEditSetCustomTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setCustomType';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    /**
     * @var ?JsonObject
     */
    protected $fields;


    public function __construct(
        TypeResourceIdentifier $type = null,
        JsonObject $fields = null
    ) {
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
            $data = $this->raw(OrderEditUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If set, the custom type is set to this new value.
     * If absent, the custom type and any existing custom fields are removed.</p>
     *
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditSetCustomTypeAction::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    /**
     * <p>If set, the custom fields are set to this new value.</p>
     *
     * @return null|JsonObject
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(OrderEditSetCustomTypeAction::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }
            $this->fields = JsonObjectModel::of($data);
        }

        return $this->fields;
    }

    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }

    public function setFields(?JsonObject $fields): void
    {
        $this->fields = $fields;
    }
}

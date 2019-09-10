<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\CartDiscount;

use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class CartDiscountSetCustomTypeActionModel extends JsonObjectModel implements CartDiscountSetCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setCustomType';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?JsonObject
     */
    protected $fields;

    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    public function __construct(
        string $action = null,
        JsonObject $fields = null,
        TypeResourceIdentifier $type = null
    ) {
        $this->action = $action;
        $this->fields = $fields;
        $this->type = $type;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(CartDiscountUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|JsonObject
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountSetCustomTypeAction::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }
            $this->fields = JsonObjectModel::of($data);
        }

        return $this->fields;
    }

    /**
     * @return null|TypeResourceIdentifier
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(CartDiscountSetCustomTypeAction::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }

            $this->type = TypeResourceIdentifierModel::of($data);
        }

        return $this->type;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setFields(?JsonObject $fields): void
    {
        $this->fields = $fields;
    }

    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }
}

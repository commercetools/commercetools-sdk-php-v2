<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Order\StagedOrderUpdateAction;
use Commercetools\Api\Models\Type\FieldContainer;
use Commercetools\Api\Models\Type\FieldContainerModel;
use Commercetools\Api\Models\Type\TypeResourceIdentifier;
use Commercetools\Api\Models\Type\TypeResourceIdentifierModel;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class StagedOrderSetCustomTypeActionModel extends JsonObjectModel implements StagedOrderSetCustomTypeAction
{
    const DISCRIMINATOR_VALUE = 'setCustomType';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?FieldContainer
     */
    protected $fields;

    /**
     * @var ?TypeResourceIdentifier
     */
    protected $type;

    public function __construct(
        string $action = null,
        FieldContainer $fields = null,
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
            $data = $this->raw(StagedOrderUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|FieldContainer
     */
    public function getFields()
    {
        if (is_null($this->fields)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(StagedOrderSetCustomTypeAction::FIELD_FIELDS);
            if (is_null($data)) {
                return null;
            }

            $this->fields = FieldContainerModel::of($data);
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
            $data = $this->raw(StagedOrderSetCustomTypeAction::FIELD_TYPE);
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

    public function setFields(?FieldContainer $fields): void
    {
        $this->fields = $fields;
    }

    public function setType(?TypeResourceIdentifier $type): void
    {
        $this->type = $type;
    }
}

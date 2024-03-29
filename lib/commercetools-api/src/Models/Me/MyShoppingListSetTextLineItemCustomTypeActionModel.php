<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

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
final class MyShoppingListSetTextLineItemCustomTypeActionModel extends JsonObjectModel implements MyShoppingListSetTextLineItemCustomTypeAction
{
    public const DISCRIMINATOR_VALUE = 'setTextLineItemCustomType';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?string
     */
    protected $textLineItemId;

    /**
     *
     * @var ?string
     */
    protected $textLineItemKey;

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
        ?string $textLineItemId = null,
        ?string $textLineItemKey = null,
        ?TypeResourceIdentifier $type = null,
        ?FieldContainer $fields = null,
        ?string $action = null
    ) {
        $this->textLineItemId = $textLineItemId;
        $this->textLineItemKey = $textLineItemKey;
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
     * <p>The <code>id</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TEXT_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemId = (string) $data;
        }

        return $this->textLineItemId;
    }

    /**
     * <p>The <code>key</code> of the <a href="ctp:api:type:TextLineItem">TextLineItem</a> to update. Either <code>lineItemId</code> or <code>lineItemKey</code> is required.</p>
     *
     *
     * @return null|string
     */
    public function getTextLineItemKey()
    {
        if (is_null($this->textLineItemKey)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TEXT_LINE_ITEM_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemKey = (string) $data;
        }

        return $this->textLineItemKey;
    }

    /**
     * <p>Defines the <a href="ctp:api:type:Type">Type</a> that extends the TextLineItem with <a href="/../api/projects/custom-fields">Custom Fields</a>.
     * If absent, any existing Type and Custom Fields are removed from the TextLineItem.</p>
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
     * <p>Sets the <a href="/../api/projects/custom-fields">Custom Fields</a> fields for the TextLineItem.</p>
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
     * @param ?string $textLineItemId
     */
    public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }

    /**
     * @param ?string $textLineItemKey
     */
    public function setTextLineItemKey(?string $textLineItemKey): void
    {
        $this->textLineItemKey = $textLineItemKey;
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

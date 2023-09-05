<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ShoppingListChangeTextLineItemNameActionModel extends JsonObjectModel implements ShoppingListChangeTextLineItemNameAction
{
    public const DISCRIMINATOR_VALUE = 'changeTextLineItemName';
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
     * @var ?LocalizedString
     */
    protected $name;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $textLineItemId = null,
        ?string $textLineItemKey = null,
        ?LocalizedString $name = null,
        ?string $action = null
    ) {
        $this->textLineItemId = $textLineItemId;
        $this->textLineItemKey = $textLineItemKey;
        $this->name = $name;
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
     * <p>New value to set. Must not be empty.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
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
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }
}

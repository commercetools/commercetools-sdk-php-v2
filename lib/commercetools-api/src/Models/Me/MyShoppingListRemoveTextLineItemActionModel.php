<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;

final class MyShoppingListRemoveTextLineItemActionModel extends JsonObjectModel implements MyShoppingListRemoveTextLineItemAction
{
    const DISCRIMINATOR_VALUE = 'removeTextLineItem';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?string
     */
    protected $textLineItemId;

    /**
     * @var ?int
     */
    protected $quantity;

    public function __construct(
        string $textLineItemId = null,
        int $quantity = null
    ) {
        $this->textLineItemId = $textLineItemId;
        $this->quantity = $quantity;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyShoppingListUpdateAction::FIELD_ACTION);
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
    public function getTextLineItemId()
    {
        if (is_null($this->textLineItemId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(MyShoppingListRemoveTextLineItemAction::FIELD_TEXT_LINE_ITEM_ID);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemId = (string) $data;
        }

        return $this->textLineItemId;
    }

    /**
     * @return null|int
     */
    public function getQuantity()
    {
        if (is_null($this->quantity)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(MyShoppingListRemoveTextLineItemAction::FIELD_QUANTITY);
            if (is_null($data)) {
                return null;
            }
            $this->quantity = (int) $data;
        }

        return $this->quantity;
    }

    public function setTextLineItemId(?string $textLineItemId): void
    {
        $this->textLineItemId = $textLineItemId;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }
}

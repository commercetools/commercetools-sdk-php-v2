<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObjectModel;

final class ShoppingListChangeTextLineItemsOrderActionModel extends JsonObjectModel implements ShoppingListChangeTextLineItemsOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeTextLineItemsOrder';
    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $textLineItemOrder;

    public function __construct(
        array $textLineItemOrder = null
    ) {
        $this->textLineItemOrder = $textLineItemOrder;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ShoppingListUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|array
     */
    public function getTextLineItemOrder()
    {
        if (is_null($this->textLineItemOrder)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ShoppingListChangeTextLineItemsOrderAction::FIELD_TEXT_LINE_ITEM_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->textLineItemOrder = $data;
        }

        return $this->textLineItemOrder;
    }

    public function setTextLineItemOrder(?array $textLineItemOrder): void
    {
        $this->textLineItemOrder = $textLineItemOrder;
    }
}

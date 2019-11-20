<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\JsonObjectModel;

final class ShoppingListChangeLineItemsOrderActionModel extends JsonObjectModel implements ShoppingListChangeLineItemsOrderAction
{
    const DISCRIMINATOR_VALUE = 'changeLineItemsOrder';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?array
     */
    protected $lineItemOrder;

    public function __construct(
        array $lineItemOrder = null
    ) {
        $this->lineItemOrder = $lineItemOrder;
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
    public function getLineItemOrder()
    {
        if (is_null($this->lineItemOrder)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(ShoppingListChangeLineItemsOrderAction::FIELD_LINE_ITEM_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemOrder = $data;
        }

        return $this->lineItemOrder;
    }

    public function setLineItemOrder(?array $lineItemOrder): void
    {
        $this->lineItemOrder = $lineItemOrder;
    }
}

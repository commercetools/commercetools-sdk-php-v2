<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\JsonObjectModel;

final class MyShoppingListChangeLineItemsOrderActionModel extends JsonObjectModel implements MyShoppingListChangeLineItemsOrderAction
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
        string $action = null,
        array $lineItemOrder = null
    ) {
        $this->action = $action;
        $this->lineItemOrder = $lineItemOrder;
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
     * @return null|array
     */
    public function getLineItemOrder()
    {
        if (is_null($this->lineItemOrder)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(MyShoppingListChangeLineItemsOrderAction::FIELD_LINE_ITEM_ORDER);
            if (is_null($data)) {
                return null;
            }
            $this->lineItemOrder = $data;
        }

        return $this->lineItemOrder;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setLineItemOrder(?array $lineItemOrder): void
    {
        $this->lineItemOrder = $lineItemOrder;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\ShoppingListMessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShoppingListMessageCollection<ShoppingListLineItemRemovedMessage>
 * @method ShoppingListLineItemRemovedMessage current()
 * @method ShoppingListLineItemRemovedMessage end()
 * @method ShoppingListLineItemRemovedMessage at($offset)
 */
class ShoppingListLineItemRemovedMessageCollection extends ShoppingListMessageCollection
{
    /**
     * @psalm-assert ShoppingListLineItemRemovedMessage $value
     * @psalm-param ShoppingListLineItemRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItemRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItemRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListLineItemRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItemRemovedMessage $data */
                $data = ShoppingListLineItemRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends ShoppingListMessageCollection<ShoppingListLineItemAddedMessage>
 * @method ShoppingListLineItemAddedMessage current()
 * @method ShoppingListLineItemAddedMessage end()
 * @method ShoppingListLineItemAddedMessage at($offset)
 */
class ShoppingListLineItemAddedMessageCollection extends ShoppingListMessageCollection
{
    /**
     * @psalm-assert ShoppingListLineItemAddedMessage $value
     * @psalm-param ShoppingListLineItemAddedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemAddedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItemAddedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItemAddedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListLineItemAddedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItemAddedMessage $data */
                $data = ShoppingListLineItemAddedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

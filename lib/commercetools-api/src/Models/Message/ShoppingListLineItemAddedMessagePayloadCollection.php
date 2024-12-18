<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\ShoppingListMessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ShoppingListMessagePayloadCollection<ShoppingListLineItemAddedMessagePayload>
 * @method ShoppingListLineItemAddedMessagePayload current()
 * @method ShoppingListLineItemAddedMessagePayload end()
 * @method ShoppingListLineItemAddedMessagePayload at($offset)
 */
class ShoppingListLineItemAddedMessagePayloadCollection extends ShoppingListMessagePayloadCollection
{
    /**
     * @psalm-assert ShoppingListLineItemAddedMessagePayload $value
     * @psalm-param ShoppingListLineItemAddedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemAddedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItemAddedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItemAddedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListLineItemAddedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItemAddedMessagePayload $data */
                $data = ShoppingListLineItemAddedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

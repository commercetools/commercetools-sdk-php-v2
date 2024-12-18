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
 * @extends ShoppingListMessagePayloadCollection<ShoppingListLineItemRemovedMessagePayload>
 * @method ShoppingListLineItemRemovedMessagePayload current()
 * @method ShoppingListLineItemRemovedMessagePayload end()
 * @method ShoppingListLineItemRemovedMessagePayload at($offset)
 */
class ShoppingListLineItemRemovedMessagePayloadCollection extends ShoppingListMessagePayloadCollection
{
    /**
     * @psalm-assert ShoppingListLineItemRemovedMessagePayload $value
     * @psalm-param ShoppingListLineItemRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListLineItemRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListLineItemRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ShoppingListLineItemRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListLineItemRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ShoppingListLineItemRemovedMessagePayload $data */
                $data = ShoppingListLineItemRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

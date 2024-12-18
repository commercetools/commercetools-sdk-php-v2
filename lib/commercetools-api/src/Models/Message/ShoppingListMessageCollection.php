<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ShoppingListMessage
 * @extends MessageCollection<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method ShoppingListMessage current()
 * @method ShoppingListMessage end()
 * @method ShoppingListMessage at($offset)
 */
class ShoppingListMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?ShoppingListMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ShoppingListMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

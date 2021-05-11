<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ShoppingList;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of ShoppingListUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T at($offset)
 * @method ShoppingListUpdateAction current()
 * @method ShoppingListUpdateAction at($offset)
 */
class ShoppingListUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ShoppingListUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ShoppingListUpdateAction) {
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
        return function (int $index): ?ShoppingListUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = ShoppingListUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of MyShoppingListUpdateAction
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method MyShoppingListUpdateAction current()
 * @method MyShoppingListUpdateAction end()
 * @method MyShoppingListUpdateAction at($offset)
 */
class MyShoppingListUpdateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListUpdateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListUpdateAction) {
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
        return function (?int $index): ?MyShoppingListUpdateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = MyShoppingListUpdateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<MyShoppingListUpdate>
 * @method MyShoppingListUpdate current()
 * @method MyShoppingListUpdate at($offset)
 */
class MyShoppingListUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListUpdate $value
     * @psalm-param MyShoppingListUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListUpdate
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MyShoppingListUpdate $data */
                $data = MyShoppingListUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

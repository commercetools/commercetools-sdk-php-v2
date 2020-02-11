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
 * @extends MapperSequence<MyShoppingListDraft>
 * @method MyShoppingListDraft current()
 * @method MyShoppingListDraft at($offset)
 */
class MyShoppingListDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert MyShoppingListDraft $value
     * @psalm-param MyShoppingListDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyShoppingListDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyShoppingListDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyShoppingListDraft
     */
    protected function mapper()
    {
        return function (int $index): ?MyShoppingListDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyShoppingListDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

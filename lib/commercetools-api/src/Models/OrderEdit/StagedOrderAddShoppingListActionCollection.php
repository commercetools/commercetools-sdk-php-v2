<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderAddShoppingListAction>
 *
 * @method StagedOrderAddShoppingListAction current()
 * @method StagedOrderAddShoppingListAction at($offset)
 */
class StagedOrderAddShoppingListActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderAddShoppingListAction $value
     * @psalm-param StagedOrderAddShoppingListAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderAddShoppingListActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderAddShoppingListAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderAddShoppingListAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderAddShoppingListAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderAddShoppingListActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<MyCartChangeLineItemQuantityAction>
 * @method MyCartChangeLineItemQuantityAction current()
 * @method MyCartChangeLineItemQuantityAction at($offset)
 */
class MyCartChangeLineItemQuantityActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartChangeLineItemQuantityAction $value
     * @psalm-param MyCartChangeLineItemQuantityAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartChangeLineItemQuantityActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartChangeLineItemQuantityAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartChangeLineItemQuantityAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartChangeLineItemQuantityAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartChangeLineItemQuantityActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

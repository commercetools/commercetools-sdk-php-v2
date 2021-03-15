<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ChangeTextLineItemsOrderAction>
 * @method ChangeTextLineItemsOrderAction current()
 * @method ChangeTextLineItemsOrderAction at($offset)
 */
class ChangeTextLineItemsOrderActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTextLineItemsOrderAction $value
     * @psalm-param ChangeTextLineItemsOrderAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTextLineItemsOrderActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTextLineItemsOrderAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTextLineItemsOrderAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTextLineItemsOrderAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTextLineItemsOrderActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

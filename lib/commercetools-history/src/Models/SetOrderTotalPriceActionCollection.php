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
 * @extends MapperSequence<SetOrderTotalPriceAction>
 * @method SetOrderTotalPriceAction current()
 * @method SetOrderTotalPriceAction at($offset)
 */
class SetOrderTotalPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetOrderTotalPriceAction $value
     * @psalm-param SetOrderTotalPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderTotalPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderTotalPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderTotalPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderTotalPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetOrderTotalPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

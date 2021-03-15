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
 * @extends MapperSequence<SetLineItemTotalPriceAction>
 * @method SetLineItemTotalPriceAction current()
 * @method SetLineItemTotalPriceAction at($offset)
 */
class SetLineItemTotalPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemTotalPriceAction $value
     * @psalm-param SetLineItemTotalPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTotalPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTotalPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTotalPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTotalPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemTotalPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

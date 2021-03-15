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
 * @extends MapperSequence<SetCustomLineItemTotalPriceAction>
 * @method SetCustomLineItemTotalPriceAction current()
 * @method SetCustomLineItemTotalPriceAction at($offset)
 */
class SetCustomLineItemTotalPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemTotalPriceAction $value
     * @psalm-param SetCustomLineItemTotalPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTotalPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTotalPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTotalPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemTotalPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemTotalPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

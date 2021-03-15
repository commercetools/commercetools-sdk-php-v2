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
 * @extends MapperSequence<SetOrderTaxedPriceAction>
 * @method SetOrderTaxedPriceAction current()
 * @method SetOrderTaxedPriceAction at($offset)
 */
class SetOrderTaxedPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetOrderTaxedPriceAction $value
     * @psalm-param SetOrderTaxedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetOrderTaxedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetOrderTaxedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetOrderTaxedPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetOrderTaxedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetOrderTaxedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

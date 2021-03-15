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
 * @extends MapperSequence<SetCustomLineItemTaxedPriceAction>
 * @method SetCustomLineItemTaxedPriceAction current()
 * @method SetCustomLineItemTaxedPriceAction at($offset)
 */
class SetCustomLineItemTaxedPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemTaxedPriceAction $value
     * @psalm-param SetCustomLineItemTaxedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTaxedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTaxedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTaxedPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemTaxedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemTaxedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

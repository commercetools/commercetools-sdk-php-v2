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
 * @extends MapperSequence<SetLineItemTaxedPriceAction>
 * @method SetLineItemTaxedPriceAction current()
 * @method SetLineItemTaxedPriceAction at($offset)
 */
class SetLineItemTaxedPriceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemTaxedPriceAction $value
     * @psalm-param SetLineItemTaxedPriceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTaxedPriceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTaxedPriceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTaxedPriceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTaxedPriceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemTaxedPriceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

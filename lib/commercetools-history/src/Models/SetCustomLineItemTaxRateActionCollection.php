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
 * @extends MapperSequence<SetCustomLineItemTaxRateAction>
 * @method SetCustomLineItemTaxRateAction current()
 * @method SetCustomLineItemTaxRateAction at($offset)
 */
class SetCustomLineItemTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomLineItemTaxRateAction $value
     * @psalm-param SetCustomLineItemTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomLineItemTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

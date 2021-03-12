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
 * @extends MapperSequence<SetLineItemTaxRateAction>
 * @method SetLineItemTaxRateAction current()
 * @method SetLineItemTaxRateAction at($offset)
 */
class SetLineItemTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetLineItemTaxRateAction $value
     * @psalm-param SetLineItemTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetLineItemTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetLineItemTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetLineItemTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetLineItemTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetLineItemTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

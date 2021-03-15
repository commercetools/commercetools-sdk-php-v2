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
 * @extends MapperSequence<AddTaxRateAction>
 * @method AddTaxRateAction current()
 * @method AddTaxRateAction at($offset)
 */
class AddTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddTaxRateAction $value
     * @psalm-param AddTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<RemoveTaxRateAction>
 * @method RemoveTaxRateAction current()
 * @method RemoveTaxRateAction at($offset)
 */
class RemoveTaxRateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveTaxRateAction $value
     * @psalm-param RemoveTaxRateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveTaxRateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveTaxRateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveTaxRateAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveTaxRateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveTaxRateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<StagedOrderSetCountryAction>
 * @method StagedOrderSetCountryAction current()
 * @method StagedOrderSetCountryAction at($offset)
 */
class StagedOrderSetCountryActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCountryAction $value
     * @psalm-param StagedOrderSetCountryAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCountryActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCountryAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCountryAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCountryAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCountryActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

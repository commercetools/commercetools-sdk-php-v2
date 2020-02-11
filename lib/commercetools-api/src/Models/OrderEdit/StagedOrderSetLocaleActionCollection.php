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
 * @extends MapperSequence<StagedOrderSetLocaleAction>
 * @method StagedOrderSetLocaleAction current()
 * @method StagedOrderSetLocaleAction at($offset)
 */
class StagedOrderSetLocaleActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetLocaleAction $value
     * @psalm-param StagedOrderSetLocaleAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetLocaleActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetLocaleAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetLocaleAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetLocaleAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetLocaleActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

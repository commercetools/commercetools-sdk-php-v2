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
 * @extends MapperSequence<StagedOrderSetCustomTypeAction>
 *
 * @method StagedOrderSetCustomTypeAction current()
 * @method StagedOrderSetCustomTypeAction at($offset)
 */
class StagedOrderSetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderSetCustomTypeAction $value
     * @psalm-param StagedOrderSetCustomTypeAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderSetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderSetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderSetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderSetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderSetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

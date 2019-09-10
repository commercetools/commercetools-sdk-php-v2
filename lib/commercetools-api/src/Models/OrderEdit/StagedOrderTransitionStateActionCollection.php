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
 * @extends MapperSequence<StagedOrderTransitionStateAction>
 *
 * @method StagedOrderTransitionStateAction current()
 * @method StagedOrderTransitionStateAction at($offset)
 */
class StagedOrderTransitionStateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert StagedOrderTransitionStateAction $value
     * @psalm-param StagedOrderTransitionStateAction|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return StagedOrderTransitionStateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedOrderTransitionStateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedOrderTransitionStateAction
     */
    protected function mapper()
    {
        return function (int $index): ?StagedOrderTransitionStateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = StagedOrderTransitionStateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

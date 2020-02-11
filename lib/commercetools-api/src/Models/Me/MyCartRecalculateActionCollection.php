<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Me;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MyCartRecalculateAction>
 * @method MyCartRecalculateAction current()
 * @method MyCartRecalculateAction at($offset)
 */
class MyCartRecalculateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert MyCartRecalculateAction $value
     * @psalm-param MyCartRecalculateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MyCartRecalculateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof MyCartRecalculateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MyCartRecalculateAction
     */
    protected function mapper()
    {
        return function (int $index): ?MyCartRecalculateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MyCartRecalculateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

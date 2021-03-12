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
 * @extends MapperSequence<ChangeAmountPlannedAction>
 * @method ChangeAmountPlannedAction current()
 * @method ChangeAmountPlannedAction at($offset)
 */
class ChangeAmountPlannedActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeAmountPlannedAction $value
     * @psalm-param ChangeAmountPlannedAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeAmountPlannedActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeAmountPlannedAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeAmountPlannedAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeAmountPlannedAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeAmountPlannedActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

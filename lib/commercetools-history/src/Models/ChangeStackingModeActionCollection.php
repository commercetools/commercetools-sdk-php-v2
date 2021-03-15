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
 * @extends MapperSequence<ChangeStackingModeAction>
 * @method ChangeStackingModeAction current()
 * @method ChangeStackingModeAction at($offset)
 */
class ChangeStackingModeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeStackingModeAction $value
     * @psalm-param ChangeStackingModeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeStackingModeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeStackingModeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeStackingModeAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeStackingModeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeStackingModeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

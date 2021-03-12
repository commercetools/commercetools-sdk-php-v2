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
 * @extends MapperSequence<ChangeTargetAction>
 * @method ChangeTargetAction current()
 * @method ChangeTargetAction at($offset)
 */
class ChangeTargetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeTargetAction $value
     * @psalm-param ChangeTargetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeTargetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeTargetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeTargetAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeTargetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeTargetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

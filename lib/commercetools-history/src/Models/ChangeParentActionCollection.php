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
 * @extends MapperSequence<ChangeParentAction>
 * @method ChangeParentAction current()
 * @method ChangeParentAction at($offset)
 */
class ChangeParentActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeParentAction $value
     * @psalm-param ChangeParentAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeParentActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeParentAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeParentAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeParentAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeParentActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

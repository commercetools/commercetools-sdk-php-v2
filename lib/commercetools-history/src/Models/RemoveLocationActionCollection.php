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
 * @extends MapperSequence<RemoveLocationAction>
 * @method RemoveLocationAction current()
 * @method RemoveLocationAction at($offset)
 */
class RemoveLocationActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveLocationAction $value
     * @psalm-param RemoveLocationAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveLocationActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveLocationAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveLocationAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveLocationAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveLocationActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<RemoveImageAction>
 * @method RemoveImageAction current()
 * @method RemoveImageAction at($offset)
 */
class RemoveImageActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveImageAction $value
     * @psalm-param RemoveImageAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveImageActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveImageAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveImageAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveImageAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveImageActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<ChangeValueAction>
 * @method ChangeValueAction current()
 * @method ChangeValueAction at($offset)
 */
class ChangeValueActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeValueAction $value
     * @psalm-param ChangeValueAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeValueActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeValueAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeValueAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeValueAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeValueActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

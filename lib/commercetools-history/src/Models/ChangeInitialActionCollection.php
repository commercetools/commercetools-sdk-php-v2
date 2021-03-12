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
 * @extends MapperSequence<ChangeInitialAction>
 * @method ChangeInitialAction current()
 * @method ChangeInitialAction at($offset)
 */
class ChangeInitialActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeInitialAction $value
     * @psalm-param ChangeInitialAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeInitialActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeInitialAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeInitialAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeInitialAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeInitialActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

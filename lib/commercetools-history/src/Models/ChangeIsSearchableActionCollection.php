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
 * @extends MapperSequence<ChangeIsSearchableAction>
 * @method ChangeIsSearchableAction current()
 * @method ChangeIsSearchableAction at($offset)
 */
class ChangeIsSearchableActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeIsSearchableAction $value
     * @psalm-param ChangeIsSearchableAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeIsSearchableActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeIsSearchableAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeIsSearchableAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeIsSearchableAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeIsSearchableActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

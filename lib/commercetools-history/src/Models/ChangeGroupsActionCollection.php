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
 * @extends MapperSequence<ChangeGroupsAction>
 * @method ChangeGroupsAction current()
 * @method ChangeGroupsAction at($offset)
 */
class ChangeGroupsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeGroupsAction $value
     * @psalm-param ChangeGroupsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeGroupsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeGroupsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeGroupsAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeGroupsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeGroupsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

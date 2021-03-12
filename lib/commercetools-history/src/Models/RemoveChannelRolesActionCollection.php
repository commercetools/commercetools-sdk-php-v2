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
 * @extends MapperSequence<RemoveChannelRolesAction>
 * @method RemoveChannelRolesAction current()
 * @method RemoveChannelRolesAction at($offset)
 */
class RemoveChannelRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert RemoveChannelRolesAction $value
     * @psalm-param RemoveChannelRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return RemoveChannelRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof RemoveChannelRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?RemoveChannelRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?RemoveChannelRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = RemoveChannelRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

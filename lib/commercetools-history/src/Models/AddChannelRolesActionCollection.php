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
 * @extends MapperSequence<AddChannelRolesAction>
 * @method AddChannelRolesAction current()
 * @method AddChannelRolesAction at($offset)
 */
class AddChannelRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert AddChannelRolesAction $value
     * @psalm-param AddChannelRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AddChannelRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof AddChannelRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AddChannelRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?AddChannelRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AddChannelRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

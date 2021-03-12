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
 * @extends MapperSequence<SetChannelRolesAction>
 * @method SetChannelRolesAction current()
 * @method SetChannelRolesAction at($offset)
 */
class SetChannelRolesActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetChannelRolesAction $value
     * @psalm-param SetChannelRolesAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetChannelRolesActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetChannelRolesAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetChannelRolesAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetChannelRolesAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetChannelRolesActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

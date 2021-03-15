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
 * @extends MapperSequence<SetInterfaceIdAction>
 * @method SetInterfaceIdAction current()
 * @method SetInterfaceIdAction at($offset)
 */
class SetInterfaceIdActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetInterfaceIdAction $value
     * @psalm-param SetInterfaceIdAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetInterfaceIdActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetInterfaceIdAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetInterfaceIdAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetInterfaceIdAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetInterfaceIdActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

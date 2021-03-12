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
 * @extends MapperSequence<SetMethodInfoInterfaceAction>
 * @method SetMethodInfoInterfaceAction current()
 * @method SetMethodInfoInterfaceAction at($offset)
 */
class SetMethodInfoInterfaceActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMethodInfoInterfaceAction $value
     * @psalm-param SetMethodInfoInterfaceAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoInterfaceActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoInterfaceAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoInterfaceAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMethodInfoInterfaceAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMethodInfoInterfaceActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

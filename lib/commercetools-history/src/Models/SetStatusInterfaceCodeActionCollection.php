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
 * @extends MapperSequence<SetStatusInterfaceCodeAction>
 * @method SetStatusInterfaceCodeAction current()
 * @method SetStatusInterfaceCodeAction at($offset)
 */
class SetStatusInterfaceCodeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetStatusInterfaceCodeAction $value
     * @psalm-param SetStatusInterfaceCodeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetStatusInterfaceCodeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetStatusInterfaceCodeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetStatusInterfaceCodeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetStatusInterfaceCodeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetStatusInterfaceCodeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

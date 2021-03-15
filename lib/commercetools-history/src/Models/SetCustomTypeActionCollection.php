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
 * @extends MapperSequence<SetCustomTypeAction>
 * @method SetCustomTypeAction current()
 * @method SetCustomTypeAction at($offset)
 */
class SetCustomTypeActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomTypeAction $value
     * @psalm-param SetCustomTypeAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomTypeActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomTypeAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomTypeAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomTypeAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomTypeActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

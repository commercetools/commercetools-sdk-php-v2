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
 * @extends MapperSequence<SetMiddleNameAction>
 * @method SetMiddleNameAction current()
 * @method SetMiddleNameAction at($offset)
 */
class SetMiddleNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMiddleNameAction $value
     * @psalm-param SetMiddleNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMiddleNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMiddleNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMiddleNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMiddleNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMiddleNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

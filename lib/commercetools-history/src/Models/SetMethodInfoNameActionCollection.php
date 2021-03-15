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
 * @extends MapperSequence<SetMethodInfoNameAction>
 * @method SetMethodInfoNameAction current()
 * @method SetMethodInfoNameAction at($offset)
 */
class SetMethodInfoNameActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMethodInfoNameAction $value
     * @psalm-param SetMethodInfoNameAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoNameActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoNameAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoNameAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMethodInfoNameAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMethodInfoNameActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

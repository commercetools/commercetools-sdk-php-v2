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
 * @extends MapperSequence<SetTargetAction>
 * @method SetTargetAction current()
 * @method SetTargetAction at($offset)
 */
class SetTargetActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetTargetAction $value
     * @psalm-param SetTargetAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetTargetActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetTargetAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetTargetAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetTargetAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetTargetActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

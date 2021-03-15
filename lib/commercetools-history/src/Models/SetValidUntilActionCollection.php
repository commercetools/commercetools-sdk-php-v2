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
 * @extends MapperSequence<SetValidUntilAction>
 * @method SetValidUntilAction current()
 * @method SetValidUntilAction at($offset)
 */
class SetValidUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetValidUntilAction $value
     * @psalm-param SetValidUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetValidUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetValidUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

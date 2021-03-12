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
 * @extends MapperSequence<SetValidFromAndUntilAction>
 * @method SetValidFromAndUntilAction current()
 * @method SetValidFromAndUntilAction at($offset)
 */
class SetValidFromAndUntilActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetValidFromAndUntilAction $value
     * @psalm-param SetValidFromAndUntilAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidFromAndUntilActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidFromAndUntilAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidFromAndUntilAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetValidFromAndUntilAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetValidFromAndUntilActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

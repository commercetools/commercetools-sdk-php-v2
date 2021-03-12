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
 * @extends MapperSequence<SetValidFromAction>
 * @method SetValidFromAction current()
 * @method SetValidFromAction at($offset)
 */
class SetValidFromActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetValidFromAction $value
     * @psalm-param SetValidFromAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetValidFromActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetValidFromAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetValidFromAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetValidFromAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetValidFromActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

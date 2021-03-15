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
 * @extends MapperSequence<SetMethodInfoMethodAction>
 * @method SetMethodInfoMethodAction current()
 * @method SetMethodInfoMethodAction at($offset)
 */
class SetMethodInfoMethodActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetMethodInfoMethodAction $value
     * @psalm-param SetMethodInfoMethodAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetMethodInfoMethodActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetMethodInfoMethodAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetMethodInfoMethodAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetMethodInfoMethodAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetMethodInfoMethodActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

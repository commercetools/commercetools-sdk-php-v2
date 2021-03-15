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
 * @extends MapperSequence<ChangeCartDiscountsAction>
 * @method ChangeCartDiscountsAction current()
 * @method ChangeCartDiscountsAction at($offset)
 */
class ChangeCartDiscountsActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeCartDiscountsAction $value
     * @psalm-param ChangeCartDiscountsAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCartDiscountsActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCartDiscountsAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCartDiscountsAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeCartDiscountsAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeCartDiscountsActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

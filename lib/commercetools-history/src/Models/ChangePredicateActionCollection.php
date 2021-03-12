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
 * @extends MapperSequence<ChangePredicateAction>
 * @method ChangePredicateAction current()
 * @method ChangePredicateAction at($offset)
 */
class ChangePredicateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangePredicateAction $value
     * @psalm-param ChangePredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePredicateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangePredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangePredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<ChangeCartPredicateAction>
 * @method ChangeCartPredicateAction current()
 * @method ChangeCartPredicateAction at($offset)
 */
class ChangeCartPredicateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeCartPredicateAction $value
     * @psalm-param ChangeCartPredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCartPredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCartPredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCartPredicateAction
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeCartPredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeCartPredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

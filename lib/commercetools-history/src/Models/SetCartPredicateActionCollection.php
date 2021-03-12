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
 * @extends MapperSequence<SetCartPredicateAction>
 * @method SetCartPredicateAction current()
 * @method SetCartPredicateAction at($offset)
 */
class SetCartPredicateActionCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCartPredicateAction $value
     * @psalm-param SetCartPredicateAction|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCartPredicateActionCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCartPredicateAction) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCartPredicateAction
     */
    protected function mapper()
    {
        return function (int $index): ?SetCartPredicateAction {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCartPredicateActionModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

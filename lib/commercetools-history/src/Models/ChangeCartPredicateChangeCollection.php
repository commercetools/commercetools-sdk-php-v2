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
 * @extends MapperSequence<ChangeCartPredicateChange>
 * @method ChangeCartPredicateChange current()
 * @method ChangeCartPredicateChange at($offset)
 */
class ChangeCartPredicateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert ChangeCartPredicateChange $value
     * @psalm-param ChangeCartPredicateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangeCartPredicateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangeCartPredicateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangeCartPredicateChange
     */
    protected function mapper()
    {
        return function (int $index): ?ChangeCartPredicateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ChangeCartPredicateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

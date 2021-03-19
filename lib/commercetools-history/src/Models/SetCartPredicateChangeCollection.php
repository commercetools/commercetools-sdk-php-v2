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
 * @extends MapperSequence<SetCartPredicateChange>
 * @method SetCartPredicateChange current()
 * @method SetCartPredicateChange at($offset)
 */
class SetCartPredicateChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCartPredicateChange $value
     * @psalm-param SetCartPredicateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCartPredicateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCartPredicateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCartPredicateChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCartPredicateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCartPredicateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

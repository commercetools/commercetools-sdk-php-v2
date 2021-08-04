<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<ChangeCartPredicateChange>
 * @method ChangeCartPredicateChange current()
 * @method ChangeCartPredicateChange end()
 * @method ChangeCartPredicateChange at($offset)
 */
class ChangeCartPredicateChangeCollection extends ChangeCollection
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
        return function (?int $index): ?ChangeCartPredicateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangeCartPredicateChange $data */
                $data = ChangeCartPredicateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

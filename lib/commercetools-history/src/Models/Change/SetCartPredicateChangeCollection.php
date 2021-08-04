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
 * @extends ChangeCollection<SetCartPredicateChange>
 * @method SetCartPredicateChange current()
 * @method SetCartPredicateChange end()
 * @method SetCartPredicateChange at($offset)
 */
class SetCartPredicateChangeCollection extends ChangeCollection
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
        return function (?int $index): ?SetCartPredicateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetCartPredicateChange $data */
                $data = SetCartPredicateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

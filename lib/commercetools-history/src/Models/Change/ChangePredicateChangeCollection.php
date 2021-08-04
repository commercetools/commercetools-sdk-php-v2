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
 * @extends ChangeCollection<ChangePredicateChange>
 * @method ChangePredicateChange current()
 * @method ChangePredicateChange at($offset)
 */
class ChangePredicateChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert ChangePredicateChange $value
     * @psalm-param ChangePredicateChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ChangePredicateChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ChangePredicateChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ChangePredicateChange
     */
    protected function mapper()
    {
        return function (?int $index): ?ChangePredicateChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ChangePredicateChange $data */
                $data = ChangePredicateChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

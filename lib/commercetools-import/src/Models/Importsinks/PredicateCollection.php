<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importsinks;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Predicate>
 *
 * @method Predicate current()
 * @method Predicate at($offset)
 */
class PredicateCollection extends MapperSequence
{
    /**
     * @psalm-assert Predicate $value
     * @psalm-param Predicate|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return PredicateCollection
     */
    public function add($value)
    {
        if (!$value instanceof Predicate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Predicate
     */
    protected function mapper()
    {
        return function (int $index): ?Predicate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = PredicateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

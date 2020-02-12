<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */


namespace Commercetools\Base;

use Commercetools\Exception\InvalidArgumentException;
use DateTimeImmutable;

/**
 * @extends MapperScalarSequence<DateTimeImmutable>
 * @method DateTimeImmutable current()
 * @method DateTimeImmutable at($offset)
 */
class DateTimeImmutableCollection extends MapperScalarSequence
{
    /**
     * @psalm-assert DateTimeImmutable $value
     * @psalm-param DateTimeImmutable|scalar $value
     * @return DateTimeImmutableCollection
     * @throws InvalidArgumentException
     */
    public function add($value)
    {
        if (!$value instanceof DateTimeImmutable) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DateTimeImmutable
     */
    protected function mapper()
    {
        return function (int $index): ?DateTimeImmutable {
            $data = $this->get($index);
            if (!is_null($data) && !$data instanceof DateTimeImmutable) {
                $data = new DateTimeImmutable((string)$data);
                $this->set($data, $index);
            }
            return $data;
        };
    }
}

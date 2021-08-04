<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of Destination
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method Destination current()
 * @method Destination end()
 * @method Destination at($offset)
 */
class DestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof Destination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?Destination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = DestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

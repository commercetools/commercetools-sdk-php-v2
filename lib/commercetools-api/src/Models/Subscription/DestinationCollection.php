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
 * @extends MapperSequence<Destination>
 * @method Destination current()
 * @method Destination at($offset)
 */
class DestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert Destination $value
     * @psalm-param Destination|stdClass $value
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
     * @psalm-return callable(int):?Destination
     */
    protected function mapper()
    {
        return function (int $index): ?Destination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = DestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

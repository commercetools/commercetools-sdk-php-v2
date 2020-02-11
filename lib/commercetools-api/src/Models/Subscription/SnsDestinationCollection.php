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
 * @extends MapperSequence<SnsDestination>
 * @method SnsDestination current()
 * @method SnsDestination at($offset)
 */
class SnsDestinationCollection extends MapperSequence
{
    /**
     * @psalm-assert SnsDestination $value
     * @psalm-param SnsDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SnsDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof SnsDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SnsDestination
     */
    protected function mapper()
    {
        return function (int $index): ?SnsDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SnsDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

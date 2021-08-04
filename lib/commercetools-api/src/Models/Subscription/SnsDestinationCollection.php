<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Api\Models\Subscription\DestinationCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends DestinationCollection<SnsDestination>
 * @method SnsDestination current()
 * @method SnsDestination end()
 * @method SnsDestination at($offset)
 */
class SnsDestinationCollection extends DestinationCollection
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
        return function (?int $index): ?SnsDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SnsDestination $data */
                $data = SnsDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

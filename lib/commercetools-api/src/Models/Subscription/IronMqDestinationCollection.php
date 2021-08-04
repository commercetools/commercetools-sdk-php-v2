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
 * @extends DestinationCollection<IronMqDestination>
 * @method IronMqDestination current()
 * @method IronMqDestination at($offset)
 */
class IronMqDestinationCollection extends DestinationCollection
{
    /**
     * @psalm-assert IronMqDestination $value
     * @psalm-param IronMqDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return IronMqDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof IronMqDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?IronMqDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?IronMqDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var IronMqDestination $data */
                $data = IronMqDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

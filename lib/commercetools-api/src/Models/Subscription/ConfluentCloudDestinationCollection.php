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
 * @extends DestinationCollection<ConfluentCloudDestination>
 * @method ConfluentCloudDestination current()
 * @method ConfluentCloudDestination end()
 * @method ConfluentCloudDestination at($offset)
 */
class ConfluentCloudDestinationCollection extends DestinationCollection
{
    /**
     * @psalm-assert ConfluentCloudDestination $value
     * @psalm-param ConfluentCloudDestination|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ConfluentCloudDestinationCollection
     */
    public function add($value)
    {
        if (!$value instanceof ConfluentCloudDestination) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ConfluentCloudDestination
     */
    protected function mapper()
    {
        return function (?int $index): ?ConfluentCloudDestination {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ConfluentCloudDestination $data */
                $data = ConfluentCloudDestinationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

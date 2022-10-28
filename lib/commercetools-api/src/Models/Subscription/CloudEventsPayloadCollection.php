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
 * @extends MapperSequence<CloudEventsPayload>
 * @method CloudEventsPayload current()
 * @method CloudEventsPayload end()
 * @method CloudEventsPayload at($offset)
 */
class CloudEventsPayloadCollection extends MapperSequence
{
    /**
     * @psalm-assert CloudEventsPayload $value
     * @psalm-param CloudEventsPayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CloudEventsPayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof CloudEventsPayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CloudEventsPayload
     */
    protected function mapper()
    {
        return function (?int $index): ?CloudEventsPayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CloudEventsPayload $data */
                $data = CloudEventsPayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

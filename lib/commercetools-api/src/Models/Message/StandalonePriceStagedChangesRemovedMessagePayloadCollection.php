<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessagePayloadCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessagePayloadCollection<StandalonePriceStagedChangesRemovedMessagePayload>
 * @method StandalonePriceStagedChangesRemovedMessagePayload current()
 * @method StandalonePriceStagedChangesRemovedMessagePayload end()
 * @method StandalonePriceStagedChangesRemovedMessagePayload at($offset)
 */
class StandalonePriceStagedChangesRemovedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceStagedChangesRemovedMessagePayload $value
     * @psalm-param StandalonePriceStagedChangesRemovedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceStagedChangesRemovedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceStagedChangesRemovedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceStagedChangesRemovedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceStagedChangesRemovedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceStagedChangesRemovedMessagePayload $data */
                $data = StandalonePriceStagedChangesRemovedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MessagePayloadCollection<StandalonePriceDeletedMessagePayload>
 * @method StandalonePriceDeletedMessagePayload current()
 * @method StandalonePriceDeletedMessagePayload end()
 * @method StandalonePriceDeletedMessagePayload at($offset)
 */
class StandalonePriceDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceDeletedMessagePayload $value
     * @psalm-param StandalonePriceDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceDeletedMessagePayload $data */
                $data = StandalonePriceDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

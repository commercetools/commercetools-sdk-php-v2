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
 * @extends MessagePayloadCollection<StandalonePriceTiersSetMessagePayload>
 * @method StandalonePriceTiersSetMessagePayload current()
 * @method StandalonePriceTiersSetMessagePayload end()
 * @method StandalonePriceTiersSetMessagePayload at($offset)
 */
class StandalonePriceTiersSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceTiersSetMessagePayload $value
     * @psalm-param StandalonePriceTiersSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceTiersSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceTiersSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceTiersSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceTiersSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceTiersSetMessagePayload $data */
                $data = StandalonePriceTiersSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

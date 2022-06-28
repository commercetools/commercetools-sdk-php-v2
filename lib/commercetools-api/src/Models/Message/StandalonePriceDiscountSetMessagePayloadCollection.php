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
 * @extends MessagePayloadCollection<StandalonePriceDiscountSetMessagePayload>
 * @method StandalonePriceDiscountSetMessagePayload current()
 * @method StandalonePriceDiscountSetMessagePayload end()
 * @method StandalonePriceDiscountSetMessagePayload at($offset)
 */
class StandalonePriceDiscountSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceDiscountSetMessagePayload $value
     * @psalm-param StandalonePriceDiscountSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceDiscountSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceDiscountSetMessagePayload $data */
                $data = StandalonePriceDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

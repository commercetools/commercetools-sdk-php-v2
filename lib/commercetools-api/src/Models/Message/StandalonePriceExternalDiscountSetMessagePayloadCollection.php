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
 * @extends MessagePayloadCollection<StandalonePriceExternalDiscountSetMessagePayload>
 * @method StandalonePriceExternalDiscountSetMessagePayload current()
 * @method StandalonePriceExternalDiscountSetMessagePayload end()
 * @method StandalonePriceExternalDiscountSetMessagePayload at($offset)
 */
class StandalonePriceExternalDiscountSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceExternalDiscountSetMessagePayload $value
     * @psalm-param StandalonePriceExternalDiscountSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceExternalDiscountSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceExternalDiscountSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceExternalDiscountSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceExternalDiscountSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceExternalDiscountSetMessagePayload $data */
                $data = StandalonePriceExternalDiscountSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

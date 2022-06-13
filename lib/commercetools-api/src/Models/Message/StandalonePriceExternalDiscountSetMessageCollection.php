<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Message\MessageCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MessageCollection<StandalonePriceExternalDiscountSetMessage>
 * @method StandalonePriceExternalDiscountSetMessage current()
 * @method StandalonePriceExternalDiscountSetMessage end()
 * @method StandalonePriceExternalDiscountSetMessage at($offset)
 */
class StandalonePriceExternalDiscountSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceExternalDiscountSetMessage $value
     * @psalm-param StandalonePriceExternalDiscountSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceExternalDiscountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceExternalDiscountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceExternalDiscountSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceExternalDiscountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceExternalDiscountSetMessage $data */
                $data = StandalonePriceExternalDiscountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

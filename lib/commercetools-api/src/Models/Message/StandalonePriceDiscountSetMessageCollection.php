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
 * @extends MessageCollection<StandalonePriceDiscountSetMessage>
 * @method StandalonePriceDiscountSetMessage current()
 * @method StandalonePriceDiscountSetMessage end()
 * @method StandalonePriceDiscountSetMessage at($offset)
 */
class StandalonePriceDiscountSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceDiscountSetMessage $value
     * @psalm-param StandalonePriceDiscountSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceDiscountSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceDiscountSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceDiscountSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceDiscountSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceDiscountSetMessage $data */
                $data = StandalonePriceDiscountSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

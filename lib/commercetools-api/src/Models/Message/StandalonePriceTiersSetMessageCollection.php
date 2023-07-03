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
 * @extends MessageCollection<StandalonePriceTiersSetMessage>
 * @method StandalonePriceTiersSetMessage current()
 * @method StandalonePriceTiersSetMessage end()
 * @method StandalonePriceTiersSetMessage at($offset)
 */
class StandalonePriceTiersSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceTiersSetMessage $value
     * @psalm-param StandalonePriceTiersSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceTiersSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceTiersSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceTiersSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceTiersSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceTiersSetMessage $data */
                $data = StandalonePriceTiersSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

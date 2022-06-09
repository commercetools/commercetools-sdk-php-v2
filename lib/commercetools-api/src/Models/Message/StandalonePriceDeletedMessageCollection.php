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
 * @extends MessageCollection<StandalonePriceDeletedMessage>
 * @method StandalonePriceDeletedMessage current()
 * @method StandalonePriceDeletedMessage end()
 * @method StandalonePriceDeletedMessage at($offset)
 */
class StandalonePriceDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceDeletedMessage $value
     * @psalm-param StandalonePriceDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceDeletedMessage $data */
                $data = StandalonePriceDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

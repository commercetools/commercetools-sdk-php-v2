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
 * @extends MessageCollection<StandalonePriceStagedChangesRemovedMessage>
 * @method StandalonePriceStagedChangesRemovedMessage current()
 * @method StandalonePriceStagedChangesRemovedMessage end()
 * @method StandalonePriceStagedChangesRemovedMessage at($offset)
 */
class StandalonePriceStagedChangesRemovedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceStagedChangesRemovedMessage $value
     * @psalm-param StandalonePriceStagedChangesRemovedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceStagedChangesRemovedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceStagedChangesRemovedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceStagedChangesRemovedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceStagedChangesRemovedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceStagedChangesRemovedMessage $data */
                $data = StandalonePriceStagedChangesRemovedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

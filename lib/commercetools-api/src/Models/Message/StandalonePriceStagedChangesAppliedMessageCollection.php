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
 * @extends MessageCollection<StandalonePriceStagedChangesAppliedMessage>
 * @method StandalonePriceStagedChangesAppliedMessage current()
 * @method StandalonePriceStagedChangesAppliedMessage end()
 * @method StandalonePriceStagedChangesAppliedMessage at($offset)
 */
class StandalonePriceStagedChangesAppliedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StandalonePriceStagedChangesAppliedMessage $value
     * @psalm-param StandalonePriceStagedChangesAppliedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceStagedChangesAppliedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceStagedChangesAppliedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceStagedChangesAppliedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceStagedChangesAppliedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceStagedChangesAppliedMessage $data */
                $data = StandalonePriceStagedChangesAppliedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

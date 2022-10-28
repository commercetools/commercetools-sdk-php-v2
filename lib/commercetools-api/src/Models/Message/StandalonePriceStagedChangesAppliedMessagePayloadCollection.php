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
 * @extends MessagePayloadCollection<StandalonePriceStagedChangesAppliedMessagePayload>
 * @method StandalonePriceStagedChangesAppliedMessagePayload current()
 * @method StandalonePriceStagedChangesAppliedMessagePayload end()
 * @method StandalonePriceStagedChangesAppliedMessagePayload at($offset)
 */
class StandalonePriceStagedChangesAppliedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StandalonePriceStagedChangesAppliedMessagePayload $value
     * @psalm-param StandalonePriceStagedChangesAppliedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceStagedChangesAppliedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceStagedChangesAppliedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceStagedChangesAppliedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceStagedChangesAppliedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceStagedChangesAppliedMessagePayload $data */
                $data = StandalonePriceStagedChangesAppliedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

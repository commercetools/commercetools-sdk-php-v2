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
 * @extends MessagePayloadCollection<StagedQuoteCreatedMessagePayload>
 * @method StagedQuoteCreatedMessagePayload current()
 * @method StagedQuoteCreatedMessagePayload end()
 * @method StagedQuoteCreatedMessagePayload at($offset)
 */
class StagedQuoteCreatedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StagedQuoteCreatedMessagePayload $value
     * @psalm-param StagedQuoteCreatedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteCreatedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteCreatedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteCreatedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteCreatedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteCreatedMessagePayload $data */
                $data = StagedQuoteCreatedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

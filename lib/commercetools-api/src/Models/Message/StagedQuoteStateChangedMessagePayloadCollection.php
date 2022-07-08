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
 * @extends MessagePayloadCollection<StagedQuoteStateChangedMessagePayload>
 * @method StagedQuoteStateChangedMessagePayload current()
 * @method StagedQuoteStateChangedMessagePayload end()
 * @method StagedQuoteStateChangedMessagePayload at($offset)
 */
class StagedQuoteStateChangedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StagedQuoteStateChangedMessagePayload $value
     * @psalm-param StagedQuoteStateChangedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteStateChangedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteStateChangedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteStateChangedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteStateChangedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteStateChangedMessagePayload $data */
                $data = StagedQuoteStateChangedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

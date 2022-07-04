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
 * @extends MessagePayloadCollection<StagedQuoteDeletedMessagePayload>
 * @method StagedQuoteDeletedMessagePayload current()
 * @method StagedQuoteDeletedMessagePayload end()
 * @method StagedQuoteDeletedMessagePayload at($offset)
 */
class StagedQuoteDeletedMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StagedQuoteDeletedMessagePayload $value
     * @psalm-param StagedQuoteDeletedMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteDeletedMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteDeletedMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteDeletedMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteDeletedMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteDeletedMessagePayload $data */
                $data = StagedQuoteDeletedMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

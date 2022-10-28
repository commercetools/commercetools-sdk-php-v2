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
 * @extends MessagePayloadCollection<StagedQuoteStateTransitionMessagePayload>
 * @method StagedQuoteStateTransitionMessagePayload current()
 * @method StagedQuoteStateTransitionMessagePayload end()
 * @method StagedQuoteStateTransitionMessagePayload at($offset)
 */
class StagedQuoteStateTransitionMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StagedQuoteStateTransitionMessagePayload $value
     * @psalm-param StagedQuoteStateTransitionMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteStateTransitionMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteStateTransitionMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteStateTransitionMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteStateTransitionMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteStateTransitionMessagePayload $data */
                $data = StagedQuoteStateTransitionMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

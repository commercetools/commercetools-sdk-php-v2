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
 * @extends MessagePayloadCollection<StagedQuoteValidToSetMessagePayload>
 * @method StagedQuoteValidToSetMessagePayload current()
 * @method StagedQuoteValidToSetMessagePayload end()
 * @method StagedQuoteValidToSetMessagePayload at($offset)
 */
class StagedQuoteValidToSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert StagedQuoteValidToSetMessagePayload $value
     * @psalm-param StagedQuoteValidToSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteValidToSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteValidToSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteValidToSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteValidToSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteValidToSetMessagePayload $data */
                $data = StagedQuoteValidToSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

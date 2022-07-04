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
 * @extends MessageCollection<StagedQuoteValidToSetMessage>
 * @method StagedQuoteValidToSetMessage current()
 * @method StagedQuoteValidToSetMessage end()
 * @method StagedQuoteValidToSetMessage at($offset)
 */
class StagedQuoteValidToSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StagedQuoteValidToSetMessage $value
     * @psalm-param StagedQuoteValidToSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StagedQuoteValidToSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StagedQuoteValidToSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StagedQuoteValidToSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StagedQuoteValidToSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StagedQuoteValidToSetMessage $data */
                $data = StagedQuoteValidToSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

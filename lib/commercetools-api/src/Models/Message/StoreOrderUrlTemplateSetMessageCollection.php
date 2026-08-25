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
 * @extends MessageCollection<StoreOrderUrlTemplateSetMessage>
 * @method StoreOrderUrlTemplateSetMessage current()
 * @method StoreOrderUrlTemplateSetMessage end()
 * @method StoreOrderUrlTemplateSetMessage at($offset)
 */
class StoreOrderUrlTemplateSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreOrderUrlTemplateSetMessage $value
     * @psalm-param StoreOrderUrlTemplateSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreOrderUrlTemplateSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreOrderUrlTemplateSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreOrderUrlTemplateSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreOrderUrlTemplateSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreOrderUrlTemplateSetMessage $data */
                $data = StoreOrderUrlTemplateSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MessageCollection<StoreCheckoutUrlTemplateSetMessage>
 * @method StoreCheckoutUrlTemplateSetMessage current()
 * @method StoreCheckoutUrlTemplateSetMessage end()
 * @method StoreCheckoutUrlTemplateSetMessage at($offset)
 */
class StoreCheckoutUrlTemplateSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert StoreCheckoutUrlTemplateSetMessage $value
     * @psalm-param StoreCheckoutUrlTemplateSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StoreCheckoutUrlTemplateSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof StoreCheckoutUrlTemplateSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StoreCheckoutUrlTemplateSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?StoreCheckoutUrlTemplateSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StoreCheckoutUrlTemplateSetMessage $data */
                $data = StoreCheckoutUrlTemplateSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

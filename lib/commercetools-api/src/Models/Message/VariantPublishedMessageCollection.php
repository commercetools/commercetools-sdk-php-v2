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
 * @extends MessageCollection<VariantPublishedMessage>
 * @method VariantPublishedMessage current()
 * @method VariantPublishedMessage end()
 * @method VariantPublishedMessage at($offset)
 */
class VariantPublishedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantPublishedMessage $value
     * @psalm-param VariantPublishedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantPublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantPublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantPublishedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantPublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantPublishedMessage $data */
                $data = VariantPublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

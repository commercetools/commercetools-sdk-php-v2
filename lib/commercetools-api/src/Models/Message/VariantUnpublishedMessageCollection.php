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
 * @extends MessageCollection<VariantUnpublishedMessage>
 * @method VariantUnpublishedMessage current()
 * @method VariantUnpublishedMessage end()
 * @method VariantUnpublishedMessage at($offset)
 */
class VariantUnpublishedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantUnpublishedMessage $value
     * @psalm-param VariantUnpublishedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantUnpublishedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantUnpublishedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantUnpublishedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantUnpublishedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantUnpublishedMessage $data */
                $data = VariantUnpublishedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

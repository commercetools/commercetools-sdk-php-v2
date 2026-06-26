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
 * @extends MessageCollection<VariantImagesSetMessage>
 * @method VariantImagesSetMessage current()
 * @method VariantImagesSetMessage end()
 * @method VariantImagesSetMessage at($offset)
 */
class VariantImagesSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert VariantImagesSetMessage $value
     * @psalm-param VariantImagesSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantImagesSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantImagesSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantImagesSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantImagesSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantImagesSetMessage $data */
                $data = VariantImagesSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

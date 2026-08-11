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
 * @extends MessagePayloadCollection<VariantImagesSetMessagePayload>
 * @method VariantImagesSetMessagePayload current()
 * @method VariantImagesSetMessagePayload end()
 * @method VariantImagesSetMessagePayload at($offset)
 */
class VariantImagesSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert VariantImagesSetMessagePayload $value
     * @psalm-param VariantImagesSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantImagesSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantImagesSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantImagesSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantImagesSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantImagesSetMessagePayload $data */
                $data = VariantImagesSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

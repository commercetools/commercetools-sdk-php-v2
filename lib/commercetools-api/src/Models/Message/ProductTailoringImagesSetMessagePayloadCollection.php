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
 * @extends MessagePayloadCollection<ProductTailoringImagesSetMessagePayload>
 * @method ProductTailoringImagesSetMessagePayload current()
 * @method ProductTailoringImagesSetMessagePayload end()
 * @method ProductTailoringImagesSetMessagePayload at($offset)
 */
class ProductTailoringImagesSetMessagePayloadCollection extends MessagePayloadCollection
{
    /**
     * @psalm-assert ProductTailoringImagesSetMessagePayload $value
     * @psalm-param ProductTailoringImagesSetMessagePayload|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringImagesSetMessagePayloadCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringImagesSetMessagePayload) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringImagesSetMessagePayload
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringImagesSetMessagePayload {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringImagesSetMessagePayload $data */
                $data = ProductTailoringImagesSetMessagePayloadModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MessageCollection<ProductTailoringImagesSetMessage>
 * @method ProductTailoringImagesSetMessage current()
 * @method ProductTailoringImagesSetMessage end()
 * @method ProductTailoringImagesSetMessage at($offset)
 */
class ProductTailoringImagesSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringImagesSetMessage $value
     * @psalm-param ProductTailoringImagesSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringImagesSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringImagesSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringImagesSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringImagesSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringImagesSetMessage $data */
                $data = ProductTailoringImagesSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MessageCollection<ProductTailoringSlugSetMessage>
 * @method ProductTailoringSlugSetMessage current()
 * @method ProductTailoringSlugSetMessage end()
 * @method ProductTailoringSlugSetMessage at($offset)
 */
class ProductTailoringSlugSetMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringSlugSetMessage $value
     * @psalm-param ProductTailoringSlugSetMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringSlugSetMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringSlugSetMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringSlugSetMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringSlugSetMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringSlugSetMessage $data */
                $data = ProductTailoringSlugSetMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

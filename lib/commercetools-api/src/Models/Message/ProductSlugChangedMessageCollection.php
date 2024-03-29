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
 * @extends MessageCollection<ProductSlugChangedMessage>
 * @method ProductSlugChangedMessage current()
 * @method ProductSlugChangedMessage end()
 * @method ProductSlugChangedMessage at($offset)
 */
class ProductSlugChangedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductSlugChangedMessage $value
     * @psalm-param ProductSlugChangedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSlugChangedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSlugChangedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSlugChangedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSlugChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSlugChangedMessage $data */
                $data = ProductSlugChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

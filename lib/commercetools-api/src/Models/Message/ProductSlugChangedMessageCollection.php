<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSlugChangedMessage>
 *
 * @method ProductSlugChangedMessage current()
 * @method ProductSlugChangedMessage at($offset)
 */
class ProductSlugChangedMessageCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSlugChangedMessage $value
     * @psalm-param ProductSlugChangedMessage|stdClass $value
     *
     * @param mixed $value
     *
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
        return function (int $index): ?ProductSlugChangedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductSlugChangedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

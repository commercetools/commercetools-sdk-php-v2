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
 * @extends MessageCollection<ProductTailoringDeletedMessage>
 * @method ProductTailoringDeletedMessage current()
 * @method ProductTailoringDeletedMessage end()
 * @method ProductTailoringDeletedMessage at($offset)
 */
class ProductTailoringDeletedMessageCollection extends MessageCollection
{
    /**
     * @psalm-assert ProductTailoringDeletedMessage $value
     * @psalm-param ProductTailoringDeletedMessage|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringDeletedMessageCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringDeletedMessage) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringDeletedMessage
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringDeletedMessage {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringDeletedMessage $data */
                $data = ProductTailoringDeletedMessageModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

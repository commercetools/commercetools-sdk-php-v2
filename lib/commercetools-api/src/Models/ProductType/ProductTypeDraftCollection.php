<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductType;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductTypeDraft>
 * @method ProductTypeDraft current()
 * @method ProductTypeDraft end()
 * @method ProductTypeDraft at($offset)
 */
class ProductTypeDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTypeDraft $value
     * @psalm-param ProductTypeDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTypeDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTypeDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTypeDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTypeDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTypeDraft $data */
                $data = ProductTypeDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

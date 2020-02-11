<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Product;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductDraft>
 * @method ProductDraft current()
 * @method ProductDraft at($offset)
 */
class ProductDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductDraft $value
     * @psalm-param ProductDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ProductDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

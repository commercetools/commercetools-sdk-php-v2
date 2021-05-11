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
 * @extends MapperSequence<ProductVariantDraft>
 * @method ProductVariantDraft current()
 * @method ProductVariantDraft at($offset)
 */
class ProductVariantDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantDraft $value
     * @psalm-param ProductVariantDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantDraft $data */
                $data = ProductVariantDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

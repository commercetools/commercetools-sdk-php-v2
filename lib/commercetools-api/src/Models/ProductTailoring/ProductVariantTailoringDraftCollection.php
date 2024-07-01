<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductTailoring;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantTailoringDraft>
 * @method ProductVariantTailoringDraft current()
 * @method ProductVariantTailoringDraft end()
 * @method ProductVariantTailoringDraft at($offset)
 */
class ProductVariantTailoringDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantTailoringDraft $value
     * @psalm-param ProductVariantTailoringDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductVariantTailoringDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantTailoringDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantTailoringDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductVariantTailoringDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductVariantTailoringDraft $data */
                $data = ProductVariantTailoringDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

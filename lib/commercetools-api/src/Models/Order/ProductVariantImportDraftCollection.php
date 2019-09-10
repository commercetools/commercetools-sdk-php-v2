<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Order;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductVariantImportDraft>
 *
 * @method ProductVariantImportDraft current()
 * @method ProductVariantImportDraft at($offset)
 */
class ProductVariantImportDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductVariantImportDraft $value
     * @psalm-param ProductVariantImportDraft|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ProductVariantImportDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductVariantImportDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductVariantImportDraft
     */
    protected function mapper()
    {
        return function (int $index): ?ProductVariantImportDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ProductVariantImportDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

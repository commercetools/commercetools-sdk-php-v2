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
 * @extends MapperSequence<ProductTailoringDraft>
 * @method ProductTailoringDraft current()
 * @method ProductTailoringDraft end()
 * @method ProductTailoringDraft at($offset)
 */
class ProductTailoringDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductTailoringDraft $value
     * @psalm-param ProductTailoringDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductTailoringDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductTailoringDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductTailoringDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductTailoringDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductTailoringDraft $data */
                $data = ProductTailoringDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

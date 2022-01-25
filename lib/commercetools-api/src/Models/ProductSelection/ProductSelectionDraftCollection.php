<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ProductSelection;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ProductSelectionDraft>
 * @method ProductSelectionDraft current()
 * @method ProductSelectionDraft end()
 * @method ProductSelectionDraft at($offset)
 */
class ProductSelectionDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert ProductSelectionDraft $value
     * @psalm-param ProductSelectionDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ProductSelectionDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof ProductSelectionDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ProductSelectionDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?ProductSelectionDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var ProductSelectionDraft $data */
                $data = ProductSelectionDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

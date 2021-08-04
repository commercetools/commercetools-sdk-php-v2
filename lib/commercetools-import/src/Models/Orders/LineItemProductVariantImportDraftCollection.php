<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Orders;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<LineItemProductVariantImportDraft>
 * @method LineItemProductVariantImportDraft current()
 * @method LineItemProductVariantImportDraft at($offset)
 */
class LineItemProductVariantImportDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemProductVariantImportDraft $value
     * @psalm-param LineItemProductVariantImportDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemProductVariantImportDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemProductVariantImportDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemProductVariantImportDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?LineItemProductVariantImportDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var LineItemProductVariantImportDraft $data */
                $data = LineItemProductVariantImportDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

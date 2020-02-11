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
 * @extends MapperSequence<LineItemImportDraft>
 * @method LineItemImportDraft current()
 * @method LineItemImportDraft at($offset)
 */
class LineItemImportDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert LineItemImportDraft $value
     * @psalm-param LineItemImportDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return LineItemImportDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof LineItemImportDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?LineItemImportDraft
     */
    protected function mapper()
    {
        return function (int $index): ?LineItemImportDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = LineItemImportDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

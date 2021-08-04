<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<CustomLineItemImportDraft>
 * @method CustomLineItemImportDraft current()
 * @method CustomLineItemImportDraft at($offset)
 */
class CustomLineItemImportDraftCollection extends MapperSequence
{
    /**
     * @psalm-assert CustomLineItemImportDraft $value
     * @psalm-param CustomLineItemImportDraft|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CustomLineItemImportDraftCollection
     */
    public function add($value)
    {
        if (!$value instanceof CustomLineItemImportDraft) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CustomLineItemImportDraft
     */
    protected function mapper()
    {
        return function (?int $index): ?CustomLineItemImportDraft {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CustomLineItemImportDraft $data */
                $data = CustomLineItemImportDraftModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

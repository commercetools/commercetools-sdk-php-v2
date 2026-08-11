<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<VariantBulkUpdate>
 * @method VariantBulkUpdate current()
 * @method VariantBulkUpdate end()
 * @method VariantBulkUpdate at($offset)
 */
class VariantBulkUpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantBulkUpdate $value
     * @psalm-param VariantBulkUpdate|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantBulkUpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantBulkUpdate) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantBulkUpdate
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantBulkUpdate {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantBulkUpdate $data */
                $data = VariantBulkUpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

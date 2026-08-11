<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Variant;

use Commercetools\Api\Models\Variant\VariantBulkUpdateResultCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends VariantBulkUpdateResultCollection<VariantBulkUpdateFailResult>
 * @method VariantBulkUpdateFailResult current()
 * @method VariantBulkUpdateFailResult end()
 * @method VariantBulkUpdateFailResult at($offset)
 */
class VariantBulkUpdateFailResultCollection extends VariantBulkUpdateResultCollection
{
    /**
     * @psalm-assert VariantBulkUpdateFailResult $value
     * @psalm-param VariantBulkUpdateFailResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantBulkUpdateFailResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantBulkUpdateFailResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantBulkUpdateFailResult
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantBulkUpdateFailResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantBulkUpdateFailResult $data */
                $data = VariantBulkUpdateFailResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

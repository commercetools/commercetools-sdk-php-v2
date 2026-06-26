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
 * @extends VariantBulkUpdateResultCollection<VariantBulkUpdateSuccessResult>
 * @method VariantBulkUpdateSuccessResult current()
 * @method VariantBulkUpdateSuccessResult end()
 * @method VariantBulkUpdateSuccessResult at($offset)
 */
class VariantBulkUpdateSuccessResultCollection extends VariantBulkUpdateResultCollection
{
    /**
     * @psalm-assert VariantBulkUpdateSuccessResult $value
     * @psalm-param VariantBulkUpdateSuccessResult|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantBulkUpdateSuccessResultCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantBulkUpdateSuccessResult) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantBulkUpdateSuccessResult
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantBulkUpdateSuccessResult {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantBulkUpdateSuccessResult $data */
                $data = VariantBulkUpdateSuccessResultModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

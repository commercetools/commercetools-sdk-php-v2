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
 * @extends MapperSequence<VariantBulkUpdateResource>
 * @method VariantBulkUpdateResource current()
 * @method VariantBulkUpdateResource end()
 * @method VariantBulkUpdateResource at($offset)
 */
class VariantBulkUpdateResourceCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantBulkUpdateResource $value
     * @psalm-param VariantBulkUpdateResource|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantBulkUpdateResourceCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantBulkUpdateResource) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantBulkUpdateResource
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantBulkUpdateResource {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantBulkUpdateResource $data */
                $data = VariantBulkUpdateResourceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

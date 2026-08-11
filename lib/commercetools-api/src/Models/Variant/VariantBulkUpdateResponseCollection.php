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
 * @extends MapperSequence<VariantBulkUpdateResponse>
 * @method VariantBulkUpdateResponse current()
 * @method VariantBulkUpdateResponse end()
 * @method VariantBulkUpdateResponse at($offset)
 */
class VariantBulkUpdateResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantBulkUpdateResponse $value
     * @psalm-param VariantBulkUpdateResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantBulkUpdateResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantBulkUpdateResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantBulkUpdateResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantBulkUpdateResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantBulkUpdateResponse $data */
                $data = VariantBulkUpdateResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

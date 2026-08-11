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
 * @extends MapperSequence<VariantProjectionPagedQueryResponse>
 * @method VariantProjectionPagedQueryResponse current()
 * @method VariantProjectionPagedQueryResponse end()
 * @method VariantProjectionPagedQueryResponse at($offset)
 */
class VariantProjectionPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantProjectionPagedQueryResponse $value
     * @psalm-param VariantProjectionPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantProjectionPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantProjectionPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantProjectionPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantProjectionPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantProjectionPagedQueryResponse $data */
                $data = VariantProjectionPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

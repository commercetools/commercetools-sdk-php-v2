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
 * @extends MapperSequence<VariantPagedQueryResponse>
 * @method VariantPagedQueryResponse current()
 * @method VariantPagedQueryResponse end()
 * @method VariantPagedQueryResponse at($offset)
 */
class VariantPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert VariantPagedQueryResponse $value
     * @psalm-param VariantPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return VariantPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof VariantPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?VariantPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?VariantPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var VariantPagedQueryResponse $data */
                $data = VariantPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

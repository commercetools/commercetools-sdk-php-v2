<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Type;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<TypePagedQueryResponse>
 * @method TypePagedQueryResponse current()
 * @method TypePagedQueryResponse end()
 * @method TypePagedQueryResponse at($offset)
 */
class TypePagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert TypePagedQueryResponse $value
     * @psalm-param TypePagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return TypePagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof TypePagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?TypePagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?TypePagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var TypePagedQueryResponse $data */
                $data = TypePagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

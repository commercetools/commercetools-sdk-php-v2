<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\AttributeGroup;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<AttributeGroupPagedQueryResponse>
 * @method AttributeGroupPagedQueryResponse current()
 * @method AttributeGroupPagedQueryResponse end()
 * @method AttributeGroupPagedQueryResponse at($offset)
 */
class AttributeGroupPagedQueryResponseCollection extends MapperSequence
{
    /**
     * @psalm-assert AttributeGroupPagedQueryResponse $value
     * @psalm-param AttributeGroupPagedQueryResponse|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return AttributeGroupPagedQueryResponseCollection
     */
    public function add($value)
    {
        if (!$value instanceof AttributeGroupPagedQueryResponse) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AttributeGroupPagedQueryResponse
     */
    protected function mapper()
    {
        return function (?int $index): ?AttributeGroupPagedQueryResponse {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var AttributeGroupPagedQueryResponse $data */
                $data = AttributeGroupPagedQueryResponseModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

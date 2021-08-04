<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<MissingAttributesMeta>
 * @method MissingAttributesMeta current()
 * @method MissingAttributesMeta at($offset)
 */
class MissingAttributesMetaCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingAttributesMeta $value
     * @psalm-param MissingAttributesMeta|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingAttributesMetaCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingAttributesMeta) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingAttributesMeta
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingAttributesMeta {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingAttributesMeta $data */
                $data = MissingAttributesMetaModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Productvariants;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ReferenceSetAttribute>
 *
 * @method ReferenceSetAttribute current()
 * @method ReferenceSetAttribute at($offset)
 */
class ReferenceSetAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert ReferenceSetAttribute $value
     * @psalm-param ReferenceSetAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return ReferenceSetAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof ReferenceSetAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ReferenceSetAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?ReferenceSetAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ReferenceSetAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

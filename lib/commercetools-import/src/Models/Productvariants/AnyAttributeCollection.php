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
 * @extends MapperSequence<AnyAttribute>
 *
 * @method AnyAttribute current()
 * @method AnyAttribute at($offset)
 */
class AnyAttributeCollection extends MapperSequence
{
    /**
     * @psalm-assert AnyAttribute $value
     * @psalm-param AnyAttribute|stdClass $value
     *
     * @param mixed $value
     *
     * @throws InvalidArgumentException
     *
     * @return AnyAttributeCollection
     */
    public function add($value)
    {
        if (!$value instanceof AnyAttribute) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?AnyAttribute
     */
    protected function mapper()
    {
        return function (int $index): ?AnyAttribute {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = AnyAttributeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<MissingAttributes>
 * @method MissingAttributes current()
 * @method MissingAttributes at($offset)
 */
class MissingAttributesCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingAttributes $value
     * @psalm-param MissingAttributes|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingAttributesCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingAttributes) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingAttributes
     */
    protected function mapper()
    {
        return function (int $index): ?MissingAttributes {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = MissingAttributesModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

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
 * @extends MapperSequence<MissingAttributesDetails>
 * @method MissingAttributesDetails current()
 * @method MissingAttributesDetails end()
 * @method MissingAttributesDetails at($offset)
 */
class MissingAttributesDetailsCollection extends MapperSequence
{
    /**
     * @psalm-assert MissingAttributesDetails $value
     * @psalm-param MissingAttributesDetails|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingAttributesDetailsCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingAttributesDetails) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingAttributesDetails
     */
    protected function mapper()
    {
        return function (?int $index): ?MissingAttributesDetails {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingAttributesDetails $data */
                $data = MissingAttributesDetailsModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

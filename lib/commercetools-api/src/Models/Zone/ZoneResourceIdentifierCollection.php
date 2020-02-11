<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Zone;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<ZoneResourceIdentifier>
 * @method ZoneResourceIdentifier current()
 * @method ZoneResourceIdentifier at($offset)
 */
class ZoneResourceIdentifierCollection extends MapperSequence
{
    /**
     * @psalm-assert ZoneResourceIdentifier $value
     * @psalm-param ZoneResourceIdentifier|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return ZoneResourceIdentifierCollection
     */
    public function add($value)
    {
        if (!$value instanceof ZoneResourceIdentifier) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?ZoneResourceIdentifier
     */
    protected function mapper()
    {
        return function (int $index): ?ZoneResourceIdentifier {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = ZoneResourceIdentifierModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

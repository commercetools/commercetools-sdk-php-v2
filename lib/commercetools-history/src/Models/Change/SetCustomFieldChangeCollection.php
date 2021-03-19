<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<SetCustomFieldChange>
 * @method SetCustomFieldChange current()
 * @method SetCustomFieldChange at($offset)
 */
class SetCustomFieldChangeCollection extends MapperSequence
{
    /**
     * @psalm-assert SetCustomFieldChange $value
     * @psalm-param SetCustomFieldChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetCustomFieldChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetCustomFieldChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetCustomFieldChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetCustomFieldChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                $data = SetCustomFieldChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

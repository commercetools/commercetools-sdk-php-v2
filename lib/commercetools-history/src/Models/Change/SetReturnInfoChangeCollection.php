<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Change;

use Commercetools\History\Models\Change\ChangeCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ChangeCollection<SetReturnInfoChange>
 * @method SetReturnInfoChange current()
 * @method SetReturnInfoChange end()
 * @method SetReturnInfoChange at($offset)
 */
class SetReturnInfoChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetReturnInfoChange $value
     * @psalm-param SetReturnInfoChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetReturnInfoChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetReturnInfoChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetReturnInfoChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetReturnInfoChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetReturnInfoChange $data */
                $data = SetReturnInfoChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

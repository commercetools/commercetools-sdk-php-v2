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
 * @extends ChangeCollection<SetContactEmailChange>
 * @method SetContactEmailChange current()
 * @method SetContactEmailChange end()
 * @method SetContactEmailChange at($offset)
 */
class SetContactEmailChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetContactEmailChange $value
     * @psalm-param SetContactEmailChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetContactEmailChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetContactEmailChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetContactEmailChange
     */
    protected function mapper()
    {
        return function (?int $index): ?SetContactEmailChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetContactEmailChange $data */
                $data = SetContactEmailChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

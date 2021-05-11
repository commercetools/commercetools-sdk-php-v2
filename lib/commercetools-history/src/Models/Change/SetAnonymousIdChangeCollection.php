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
 * @extends ChangeCollection<SetAnonymousIdChange>
 * @method SetAnonymousIdChange current()
 * @method SetAnonymousIdChange at($offset)
 */
class SetAnonymousIdChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert SetAnonymousIdChange $value
     * @psalm-param SetAnonymousIdChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return SetAnonymousIdChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof SetAnonymousIdChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?SetAnonymousIdChange
     */
    protected function mapper()
    {
        return function (int $index): ?SetAnonymousIdChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var SetAnonymousIdChange $data */
                $data = SetAnonymousIdChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

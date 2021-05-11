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
 * @extends ChangeCollection<UnpublishChange>
 * @method UnpublishChange current()
 * @method UnpublishChange at($offset)
 */
class UnpublishChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert UnpublishChange $value
     * @psalm-param UnpublishChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UnpublishChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof UnpublishChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?UnpublishChange
     */
    protected function mapper()
    {
        return function (int $index): ?UnpublishChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var UnpublishChange $data */
                $data = UnpublishChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

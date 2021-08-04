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
 * @extends ChangeCollection<PublishChange>
 * @method PublishChange current()
 * @method PublishChange at($offset)
 */
class PublishChangeCollection extends ChangeCollection
{
    /**
     * @psalm-assert PublishChange $value
     * @psalm-param PublishChange|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return PublishChangeCollection
     */
    public function add($value)
    {
        if (!$value instanceof PublishChange) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?PublishChange
     */
    protected function mapper()
    {
        return function (?int $index): ?PublishChange {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var PublishChange $data */
                $data = PublishChangeModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

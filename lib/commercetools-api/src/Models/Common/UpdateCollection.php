<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<Update>
 * @method Update current()
 * @method Update at($offset)
 */
class UpdateCollection extends MapperSequence
{
    /**
     * @psalm-assert Update $value
     * @psalm-param Update|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return UpdateCollection
     */
    public function add($value)
    {
        if (!$value instanceof Update) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?Update
     */
    protected function mapper()
    {
        return function (int $index): ?Update {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var Update $data */
                $data = UpdateModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

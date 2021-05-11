<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\MissingData;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Ml\Models\MissingData\MissingPricesProductCountCollection;
use stdClass;

/**
 * @extends MissingPricesProductCountCollection<MissingPricesProductLevel>
 * @method MissingPricesProductLevel current()
 * @method MissingPricesProductLevel at($offset)
 */
class MissingPricesProductLevelCollection extends MissingPricesProductCountCollection
{
    /**
     * @psalm-assert MissingPricesProductLevel $value
     * @psalm-param MissingPricesProductLevel|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return MissingPricesProductLevelCollection
     */
    public function add($value)
    {
        if (!$value instanceof MissingPricesProductLevel) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?MissingPricesProductLevel
     */
    protected function mapper()
    {
        return function (int $index): ?MissingPricesProductLevel {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var MissingPricesProductLevel $data */
                $data = MissingPricesProductLevelModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

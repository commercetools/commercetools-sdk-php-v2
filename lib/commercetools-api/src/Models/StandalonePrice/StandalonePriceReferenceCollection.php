<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\StandalonePrice;

use Commercetools\Api\Models\Common\ReferenceCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends ReferenceCollection<StandalonePriceReference>
 * @method StandalonePriceReference current()
 * @method StandalonePriceReference end()
 * @method StandalonePriceReference at($offset)
 */
class StandalonePriceReferenceCollection extends ReferenceCollection
{
    /**
     * @psalm-assert StandalonePriceReference $value
     * @psalm-param StandalonePriceReference|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return StandalonePriceReferenceCollection
     */
    public function add($value)
    {
        if (!$value instanceof StandalonePriceReference) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?StandalonePriceReference
     */
    protected function mapper()
    {
        return function (?int $index): ?StandalonePriceReference {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var StandalonePriceReference $data */
                $data = StandalonePriceReferenceModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

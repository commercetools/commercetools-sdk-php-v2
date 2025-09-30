<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends MapperSequence<DiscountsConfiguration>
 * @method DiscountsConfiguration current()
 * @method DiscountsConfiguration end()
 * @method DiscountsConfiguration at($offset)
 */
class DiscountsConfigurationCollection extends MapperSequence
{
    /**
     * @psalm-assert DiscountsConfiguration $value
     * @psalm-param DiscountsConfiguration|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return DiscountsConfigurationCollection
     */
    public function add($value)
    {
        if (!$value instanceof DiscountsConfiguration) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?DiscountsConfiguration
     */
    protected function mapper()
    {
        return function (?int $index): ?DiscountsConfiguration {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var DiscountsConfiguration $data */
                $data = DiscountsConfigurationModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

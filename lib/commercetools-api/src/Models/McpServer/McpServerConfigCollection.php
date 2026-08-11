<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Base\MapperSequence;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @template T of McpServerConfig
 * @extends MapperSequence<T>
 * @psalm-method T current()
 * @psalm-method T end()
 * @psalm-method T at($offset)
 * @method McpServerConfig current()
 * @method McpServerConfig end()
 * @method McpServerConfig at($offset)
 */
class McpServerConfigCollection extends MapperSequence
{
    /**
     * @psalm-assert T $value
     * @psalm-param T|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return McpServerConfigCollection
     */
    public function add($value)
    {
        if (!$value instanceof McpServerConfig) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?T
     */
    protected function mapper()
    {
        return function (?int $index): ?McpServerConfig {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var T $data */
                $data = McpServerConfigModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

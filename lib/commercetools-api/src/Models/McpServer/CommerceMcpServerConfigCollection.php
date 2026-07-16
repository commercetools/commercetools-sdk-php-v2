<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\McpServer;

use Commercetools\Api\Models\McpServer\McpServerConfigCollection;
use Commercetools\Exception\InvalidArgumentException;
use stdClass;

/**
 * @extends McpServerConfigCollection<CommerceMcpServerConfig>
 * @method CommerceMcpServerConfig current()
 * @method CommerceMcpServerConfig end()
 * @method CommerceMcpServerConfig at($offset)
 */
class CommerceMcpServerConfigCollection extends McpServerConfigCollection
{
    /**
     * @psalm-assert CommerceMcpServerConfig $value
     * @psalm-param CommerceMcpServerConfig|stdClass $value
     * @throws InvalidArgumentException
     *
     * @return CommerceMcpServerConfigCollection
     */
    public function add($value)
    {
        if (!$value instanceof CommerceMcpServerConfig) {
            throw new InvalidArgumentException();
        }
        $this->store($value);

        return $this;
    }

    /**
     * @psalm-return callable(int):?CommerceMcpServerConfig
     */
    protected function mapper()
    {
        return function (?int $index): ?CommerceMcpServerConfig {
            $data = $this->get($index);
            if ($data instanceof stdClass) {
                /** @var CommerceMcpServerConfig $data */
                $data = CommerceMcpServerConfigModel::of($data);
                $this->set($data, $index);
            }

            return $data;
        };
    }
}

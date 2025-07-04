<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TimeToLiveRetentionPolicyModel extends JsonObjectModel implements TimeToLiveRetentionPolicy
{
    public const DISCRIMINATOR_VALUE = 'ttl';
    /**
     *
     * @var ?string
     */
    protected $strategy;

    /**
     *
     * @var ?TimeToLiveConfig
     */
    protected $config;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?TimeToLiveConfig $config = null,
        ?string $strategy = null
    ) {
        $this->config = $config;
        $this->strategy = $strategy ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The strategy of the retention policy. Used to determine how the ImportContainer should be retained.</p>
     *
     *
     * @return null|string
     */
    public function getStrategy()
    {
        if (is_null($this->strategy)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STRATEGY);
            if (is_null($data)) {
                return null;
            }
            $this->strategy = (string) $data;
        }

        return $this->strategy;
    }

    /**
     * <p>The configuration of the time to live retention policy.</p>
     *
     *
     * @return null|TimeToLiveConfig
     */
    public function getConfig()
    {
        if (is_null($this->config)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CONFIG);
            if (is_null($data)) {
                return null;
            }

            $this->config = TimeToLiveConfigModel::of($data);
        }

        return $this->config;
    }


    /**
     * @param ?TimeToLiveConfig $config
     */
    public function setConfig(?TimeToLiveConfig $config): void
    {
        $this->config = $config;
    }
}

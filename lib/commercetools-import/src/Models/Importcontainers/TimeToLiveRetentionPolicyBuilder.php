<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Importcontainers;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TimeToLiveRetentionPolicy>
 */
final class TimeToLiveRetentionPolicyBuilder implements Builder
{
    /**

     * @var null|TimeToLiveConfig|TimeToLiveConfigBuilder
     */
    private $config;

    /**
     * <p>The configuration of the time to live retention policy.</p>
     *

     * @return null|TimeToLiveConfig
     */
    public function getConfig()
    {
        return $this->config instanceof TimeToLiveConfigBuilder ? $this->config->build() : $this->config;
    }

    /**
     * @param ?TimeToLiveConfig $config
     * @return $this
     */
    public function withConfig(?TimeToLiveConfig $config)
    {
        $this->config = $config;

        return $this;
    }

    /**
     * @deprecated use withConfig() instead
     * @return $this
     */
    public function withConfigBuilder(?TimeToLiveConfigBuilder $config)
    {
        $this->config = $config;

        return $this;
    }

    public function build(): TimeToLiveRetentionPolicy
    {
        return new TimeToLiveRetentionPolicyModel(
            $this->config instanceof TimeToLiveConfigBuilder ? $this->config->build() : $this->config
        );
    }

    public static function of(): TimeToLiveRetentionPolicyBuilder
    {
        return new self();
    }
}

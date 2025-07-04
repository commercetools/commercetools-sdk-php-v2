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
 * @implements Builder<TimeToLiveConfig>
 */
final class TimeToLiveConfigBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $timeToLive;

    /**
     * <p>The time to live of the ImportContainer. Used to generate the <code>expiresAt</code> value of the ImportContainer. The lowest accepted value is <code>1h</code> and the highest accepted value is <code>30d</code>.</p>
     *

     * @return null|string
     */
    public function getTimeToLive()
    {
        return $this->timeToLive;
    }

    /**
     * @param ?string $timeToLive
     * @return $this
     */
    public function withTimeToLive(?string $timeToLive)
    {
        $this->timeToLive = $timeToLive;

        return $this;
    }


    public function build(): TimeToLiveConfig
    {
        return new TimeToLiveConfigModel(
            $this->timeToLive
        );
    }

    public static function of(): TimeToLiveConfigBuilder
    {
        return new self();
    }
}

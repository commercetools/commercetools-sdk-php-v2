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
final class TimeToLiveConfigModel extends JsonObjectModel implements TimeToLiveConfig
{
    /**
     *
     * @var ?string
     */
    protected $timeToLive;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $timeToLive = null
    ) {
        $this->timeToLive = $timeToLive;
    }

    /**
     * <p>The time to live of the ImportContainer. Used to generate the <code>expiresAt</code> value of the ImportContainer. The lowest accepted value is <code>1h</code> and the highest accepted value is <code>30d</code>.</p>
     *
     *
     * @return null|string
     */
    public function getTimeToLive()
    {
        if (is_null($this->timeToLive)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TIME_TO_LIVE);
            if (is_null($data)) {
                return null;
            }
            $this->timeToLive = (string) $data;
        }

        return $this->timeToLive;
    }


    /**
     * @param ?string $timeToLive
     */
    public function setTimeToLive(?string $timeToLive): void
    {
        $this->timeToLive = $timeToLive;
    }
}

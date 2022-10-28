<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Subscription;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<CloudEventsFormat>
 */
final class CloudEventsFormatBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $cloudEventsVersion;

    /**
     * <p>Supported versions: &quot;1.0&quot;.</p>
     *

     * @return null|string
     */
    public function getCloudEventsVersion()
    {
        return $this->cloudEventsVersion;
    }

    /**
     * @param ?string $cloudEventsVersion
     * @return $this
     */
    public function withCloudEventsVersion(?string $cloudEventsVersion)
    {
        $this->cloudEventsVersion = $cloudEventsVersion;

        return $this;
    }


    public function build(): CloudEventsFormat
    {
        return new CloudEventsFormatModel(
            $this->cloudEventsVersion
        );
    }

    public static function of(): CloudEventsFormatBuilder
    {
        return new self();
    }
}

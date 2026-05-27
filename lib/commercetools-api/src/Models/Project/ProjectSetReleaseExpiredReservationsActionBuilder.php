<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<ProjectSetReleaseExpiredReservationsAction>
 */
final class ProjectSetReleaseExpiredReservationsActionBuilder implements Builder
{
    /**

     * @var ?bool
     */
    private $releaseExpiredReservations;

    /**
     * <p>Value to set.</p>
     *

     * @return null|bool
     */
    public function getReleaseExpiredReservations()
    {
        return $this->releaseExpiredReservations;
    }

    /**
     * @param ?bool $releaseExpiredReservations
     * @return $this
     */
    public function withReleaseExpiredReservations(?bool $releaseExpiredReservations)
    {
        $this->releaseExpiredReservations = $releaseExpiredReservations;

        return $this;
    }


    public function build(): ProjectSetReleaseExpiredReservationsAction
    {
        return new ProjectSetReleaseExpiredReservationsActionModel(
            $this->releaseExpiredReservations
        );
    }

    public static function of(): ProjectSetReleaseExpiredReservationsActionBuilder
    {
        return new self();
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ProjectSetReleaseExpiredReservationsActionModel extends JsonObjectModel implements ProjectSetReleaseExpiredReservationsAction
{
    public const DISCRIMINATOR_VALUE = 'setReleaseExpiredReservations';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?bool
     */
    protected $releaseExpiredReservations;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?bool $releaseExpiredReservations = null,
        ?string $action = null
    ) {
        $this->releaseExpiredReservations = $releaseExpiredReservations;
        $this->action = $action ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>Value to set.</p>
     *
     *
     * @return null|bool
     */
    public function getReleaseExpiredReservations()
    {
        if (is_null($this->releaseExpiredReservations)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_RELEASE_EXPIRED_RESERVATIONS);
            if (is_null($data)) {
                return null;
            }
            $this->releaseExpiredReservations = (bool) $data;
        }

        return $this->releaseExpiredReservations;
    }


    /**
     * @param ?bool $releaseExpiredReservations
     */
    public function setReleaseExpiredReservations(?bool $releaseExpiredReservations): void
    {
        $this->releaseExpiredReservations = $releaseExpiredReservations;
    }
}

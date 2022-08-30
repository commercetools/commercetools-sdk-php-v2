<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class ReviewTransitionStateActionModel extends JsonObjectModel implements ReviewTransitionStateAction
{
    public const DISCRIMINATOR_VALUE = 'transitionState';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     *
     * @var ?bool
     */
    protected $force;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?StateResourceIdentifier $state = null,
        ?bool $force = null,
        ?string $action = null
    ) {
        $this->state = $state;
        $this->force = $force;
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
     * <p>Value to set. If there is no State yet, the new State must be an initial State. If the existing State has <code>transitions</code> set, there must be a direct transition to the new State. If <code>transitions</code> is not set, no validation is performed. If the new State does not have the <a href="ctp:api:type:StateRoleEnum">role</a> <code>ReviewIncludedInStatistics</code>, the Review is not taken into account in the ratings statistics of the target.</p>
     *
     *
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>Switch validations on or off.</p>
     *
     *
     * @return null|bool
     */
    public function getForce()
    {
        if (is_null($this->force)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(self::FIELD_FORCE);
            if (is_null($data)) {
                return null;
            }
            $this->force = (bool) $data;
        }

        return $this->force;
    }


    /**
     * @param ?StateResourceIdentifier $state
     */
    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    /**
     * @param ?bool $force
     */
    public function setForce(?bool $force): void
    {
        $this->force = $force;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\RecurringOrder;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @internal
 */
final class RecurringOrderSetOrderSkipConfigurationActionModel extends JsonObjectModel implements RecurringOrderSetOrderSkipConfigurationAction
{
    public const DISCRIMINATOR_VALUE = 'setOrderSkipConfiguration';
    /**
     *
     * @var ?string
     */
    protected $action;

    /**
     *
     * @var ?SkipConfigurationDraft
     */
    protected $skipConfiguration;

    /**
     *
     * @var ?DateTimeImmutable
     */
    protected $updatedExpiresAt;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?SkipConfigurationDraft $skipConfiguration = null,
        ?DateTimeImmutable $updatedExpiresAt = null,
        ?string $action = null
    ) {
        $this->skipConfiguration = $skipConfiguration;
        $this->updatedExpiresAt = $updatedExpiresAt;
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
     * <p>Configuration for skipping the next orders of the <a href="ctp:api:type:RecurringOrder">Recurring Order</a>.</p>
     *
     *
     * @return null|SkipConfigurationDraft
     */
    public function getSkipConfiguration()
    {
        if (is_null($this->skipConfiguration)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SKIP_CONFIGURATION);
            if (is_null($data)) {
                return null;
            }
            $className = SkipConfigurationDraftModel::resolveDiscriminatorClass($data);
            $this->skipConfiguration = $className::of($data);
        }

        return $this->skipConfiguration;
    }

    /**
     * <p>Date and time (UTC) the Recurring Order will resume and start to generate new orders.</p>
     *
     *
     * @return null|DateTimeImmutable
     */
    public function getUpdatedExpiresAt()
    {
        if (is_null($this->updatedExpiresAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_UPDATED_EXPIRES_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->updatedExpiresAt = $data;
        }

        return $this->updatedExpiresAt;
    }


    /**
     * @param ?SkipConfigurationDraft $skipConfiguration
     */
    public function setSkipConfiguration(?SkipConfigurationDraft $skipConfiguration): void
    {
        $this->skipConfiguration = $skipConfiguration;
    }

    /**
     * @param ?DateTimeImmutable $updatedExpiresAt
     */
    public function setUpdatedExpiresAt(?DateTimeImmutable $updatedExpiresAt): void
    {
        $this->updatedExpiresAt = $updatedExpiresAt;
    }


    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[RecurringOrderSetOrderSkipConfigurationAction::FIELD_UPDATED_EXPIRES_AT]) && $data[RecurringOrderSetOrderSkipConfigurationAction::FIELD_UPDATED_EXPIRES_AT] instanceof \DateTimeImmutable) {
            $data[RecurringOrderSetOrderSkipConfigurationAction::FIELD_UPDATED_EXPIRES_AT] = $data[RecurringOrderSetOrderSkipConfigurationAction::FIELD_UPDATED_EXPIRES_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}

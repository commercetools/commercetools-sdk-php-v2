<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Cart\Cart;
use Commercetools\Api\Models\Cart\CartModel;
use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentResponsesCartSuccessModel extends JsonObjectModel implements AgentResponsesCartSuccess
{
    public const DISCRIMINATOR_VALUE = 'Cart';
    /**
     *
     * @var ?string
     */
    protected $entityType;

    /**
     *
     * @var ?WarningObjectCollection
     */
    protected $warnings;

    /**
     *
     * @var ?string
     */
    protected $threadId;

    /**
     *
     * @var ?Cart
     */
    protected $entity;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?WarningObjectCollection $warnings = null,
        ?string $threadId = null,
        ?Cart $entity = null,
        ?string $entityType = null
    ) {
        $this->warnings = $warnings;
        $this->threadId = $threadId;
        $this->entity = $entity;
        $this->entityType = $entityType ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     * <p>The entity that was created. Determines the concrete response type.</p>
     *
     *
     * @return null|string
     */
    public function getEntityType()
    {
        if (is_null($this->entityType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ENTITY_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->entityType = (string) $data;
        }

        return $this->entityType;
    }

    /**
     * <p>Non-fatal issues encountered while processing the request. Present only when at least one warning is returned.</p>
     *
     *
     * @return null|WarningObjectCollection
     */
    public function getWarnings()
    {
        if (is_null($this->warnings)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_WARNINGS);
            if (is_null($data)) {
                return null;
            }
            $this->warnings = WarningObjectCollection::fromArray($data);
        }

        return $this->warnings;
    }

    /**
     * <p>Identifier of the workflow run that produced this response.</p>
     *
     *
     * @return null|string
     */
    public function getThreadId()
    {
        if (is_null($this->threadId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_THREAD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->threadId = (string) $data;
        }

        return $this->threadId;
    }

    /**
     * <p>The created <a href="ctp:api:type:Cart">Cart</a> in full commercetools REST representation.</p>
     *
     *
     * @return null|Cart
     */
    public function getEntity()
    {
        if (is_null($this->entity)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ENTITY);
            if (is_null($data)) {
                return null;
            }

            $this->entity = CartModel::of($data);
        }

        return $this->entity;
    }


    /**
     * @param ?WarningObjectCollection $warnings
     */
    public function setWarnings(?WarningObjectCollection $warnings): void
    {
        $this->warnings = $warnings;
    }

    /**
     * @param ?string $threadId
     */
    public function setThreadId(?string $threadId): void
    {
        $this->threadId = $threadId;
    }

    /**
     * @param ?Cart $entity
     */
    public function setEntity(?Cart $entity): void
    {
        $this->entity = $entity;
    }
}

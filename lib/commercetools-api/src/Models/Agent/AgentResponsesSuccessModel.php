<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Agent;

use Commercetools\Api\Models\Warning\WarningObjectCollection;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AgentResponsesSuccessModel extends JsonObjectModel implements AgentResponsesSuccess
{
    public const DISCRIMINATOR_VALUE = '';
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
     * @psalm-var array<string, class-string<AgentResponsesSuccess> >
     *
     */
    private static $discriminatorClasses = [
       'Cart' => AgentResponsesCartSuccessModel::class,
       'QuoteRequest' => AgentResponsesQuoteRequestSuccessModel::class,
    ];

    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?WarningObjectCollection $warnings = null,
        ?string $threadId = null,
        ?string $entityType = null
    ) {
        $this->warnings = $warnings;
        $this->threadId = $threadId;
        $this->entityType = $entityType;
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
     * @psalm-param stdClass|array<string, mixed> $value
     * @psalm-return class-string<AgentResponsesSuccess>
     */
    public static function resolveDiscriminatorClass($value): string
    {
        $fieldName = AgentResponsesSuccess::DISCRIMINATOR_FIELD;
        if (is_object($value) && isset($value->$fieldName)) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value->$fieldName;
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }
        if (is_array($value) && isset($value[$fieldName])) {
            /** @psalm-var string $discriminatorValue */
            $discriminatorValue = $value[$fieldName];
            if (isset(self::$discriminatorClasses[$discriminatorValue])) {
                return self::$discriminatorClasses[$discriminatorValue];
            }
        }

        /** @psalm-var class-string<AgentResponsesSuccess> */
        $type = AgentResponsesSuccessModel::class;
        return $type;
    }
}

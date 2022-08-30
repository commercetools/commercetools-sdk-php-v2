<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TransactionChangeValueModel extends JsonObjectModel implements TransactionChangeValue
{


    /**
     *
     * @var ?string
     */
    protected $id;

    /**
     *
     * @var ?string
     */
    protected $interactionId;

    /**
     *
     * @var ?string
     */
    protected $timestamp;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $interactionId = null,
        ?string $timestamp = null
    ) {
        $this->id = $id;
        $this->interactionId = $interactionId;
        $this->timestamp = $timestamp;

    }

    /**
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id =  (string) $data;
        }

        return $this->id;
    }

    /**
     *
     * @return null|string
     */
    public function getInteractionId()
    {
        if (is_null($this->interactionId)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_INTERACTION_ID);
            if (is_null($data)) {
                return null;
            }
            $this->interactionId =  (string) $data;
        }

        return $this->interactionId;
    }

    /**
     *
     * @return null|string
     */
    public function getTimestamp()
    {
        if (is_null($this->timestamp)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TIMESTAMP);
            if (is_null($data)) {
                return null;
            }
            $this->timestamp =  (string) $data;
        }

        return $this->timestamp;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }

    /**
     * @param ?string $timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }



}

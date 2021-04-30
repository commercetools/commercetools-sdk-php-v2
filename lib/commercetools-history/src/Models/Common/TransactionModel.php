<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class TransactionModel extends JsonObjectModel implements Transaction
{


    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?string
     */
    protected $timestamp;

    /**
     * @var ?string
     */
    protected $type;

    /**
     * @var ?Money
     */
    protected $amount;

    /**
     * @var ?string
     */
    protected $interactionId;

    /**
     * @var ?string
     */
    protected $state;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $id = null,
        ?string $timestamp = null,
        ?string $type = null,
        ?Money $amount = null,
        ?string $interactionId = null,
        ?string $state = null
    ) {
        $this->id = $id;
        $this->timestamp = $timestamp;
        $this->type = $type;
        $this->amount = $amount;
        $this->interactionId = $interactionId;
        $this->state = $state;

    }

    /**
     * <p>The unique ID of this object.</p>
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
     * <p>The time at which the transaction took place.</p>
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
     * @return null|string
     */
    public function getType()
    {
        if (is_null($this->type)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->type =  (string) $data;
        }

        return $this->type;
    }

    /**
     * @return null|Money
     */
    public function getAmount()
    {
        if (is_null($this->amount)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_AMOUNT);
            if (is_null($data)) {
                return null;
            }

            $this->amount =  MoneyModel::of($data);
        }

        return $this->amount;
    }

    /**
     * <p>The identifier that is used by the interface that managed the transaction (usually the PSP). If a matching interaction was logged in the <code>interfaceInteractions</code> array, the corresponding interaction should be findable with this ID.</p>
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
     * @return null|string
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->state =  (string) $data;
        }

        return $this->state;
    }


    /**
     * @param ?string $id
     */
    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    /**
     * @param ?string $timestamp
     */
    public function setTimestamp(?string $timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @param ?string $type
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param ?Money $amount
     */
    public function setAmount(?Money $amount): void
    {
        $this->amount = $amount;
    }

    /**
     * @param ?string $interactionId
     */
    public function setInteractionId(?string $interactionId): void
    {
        $this->interactionId = $interactionId;
    }

    /**
     * @param ?string $state
     */
    public function setState(?string $state): void
    {
        $this->state = $state;
    }



}

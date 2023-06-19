<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\ChangeValue;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<TransactionChangeValue>
 */
final class TransactionChangeValueBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $id;

    /**

     * @var ?string
     */
    private $interactionId;

    /**

     * @var ?string
     */
    private $timestamp;

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:Transaction">Transaction</a>.</p>
     *

     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * <p>Identifier used by the interface that manages the Transaction (usually the PSP).</p>
     *

     * @return null|string
     */
    public function getInteractionId()
    {
        return $this->interactionId;
    }

    /**
     * <p>Date and time (UTC) the Transaction took place.</p>
     *

     * @return null|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param ?string $id
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param ?string $interactionId
     * @return $this
     */
    public function withInteractionId(?string $interactionId)
    {
        $this->interactionId = $interactionId;

        return $this;
    }

    /**
     * @param ?string $timestamp
     * @return $this
     */
    public function withTimestamp(?string $timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }


    public function build(): TransactionChangeValue
    {
        return new TransactionChangeValueModel(
            $this->id,
            $this->interactionId,
            $this->timestamp
        );
    }

    public static function of(): TransactionChangeValueBuilder
    {
        return new self();
    }
}

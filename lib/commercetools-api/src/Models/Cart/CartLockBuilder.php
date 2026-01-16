<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Cart;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<CartLock>
 */
final class CartLockBuilder implements Builder
{
    /**

     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**

     * @var ?string
     */
    private $clientId;

    /**
     * <p>Date and time (UTC) the Cart was locked.</p>
     *

     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * <p><code>id</code> of the <a href="ctp:api:type:ApiClient">API Client</a> that locked the Cart.</p>
     *

     * @return null|string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param ?DateTimeImmutable $createdAt
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @param ?string $clientId
     * @return $this
     */
    public function withClientId(?string $clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }


    public function build(): CartLock
    {
        return new CartLockModel(
            $this->createdAt,
            $this->clientId
        );
    }

    public static function of(): CartLockBuilder
    {
        return new self();
    }
}

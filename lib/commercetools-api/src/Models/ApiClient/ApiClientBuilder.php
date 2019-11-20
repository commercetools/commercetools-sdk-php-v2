<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\ApiClient;

use Commercetools\Base\Builder;
use DateTimeImmutable;

/**
 * @implements Builder<ApiClient>
 */
final class ApiClientBuilder implements Builder
{
    /**
     * @var ?DateTimeImmutable
     */
    private $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $deleteAt;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastUsedAt;

    /**
     * @var ?string
     */
    private $scope;

    /**
     * @var ?string
     */
    private $name;

    /**
     * @var ?string
     */
    private $secret;

    /**
     * @var ?string
     */
    private $id;

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getDeleteAt()
    {
        return $this->deleteAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastUsedAt()
    {
        return $this->lastUsedAt;
    }

    /**
     * @return null|string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return null|string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return $this
     */
    public function withCreatedAt(?DateTimeImmutable $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withDeleteAt(?DateTimeImmutable $deleteAt)
    {
        $this->deleteAt = $deleteAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withLastUsedAt(?DateTimeImmutable $lastUsedAt)
    {
        $this->lastUsedAt = $lastUsedAt;

        return $this;
    }

    /**
     * @return $this
     */
    public function withScope(?string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * @return $this
     */
    public function withName(?string $name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return $this
     */
    public function withSecret(?string $secret)
    {
        $this->secret = $secret;

        return $this;
    }

    /**
     * @return $this
     */
    public function withId(?string $id)
    {
        $this->id = $id;

        return $this;
    }

    public function build(): ApiClient
    {
        return new ApiClientModel(
            $this->createdAt,
            $this->deleteAt,
            $this->lastUsedAt,
            $this->scope,
            $this->name,
            $this->secret,
            $this->id
        );
    }

    public static function of(): ApiClientBuilder
    {
        return new self();
    }
}

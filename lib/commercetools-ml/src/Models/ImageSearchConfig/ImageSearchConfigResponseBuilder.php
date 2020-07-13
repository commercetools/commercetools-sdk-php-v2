<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Ml\Models\ImageSearchConfig;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use stdClass;

/**
 * @implements Builder<ImageSearchConfigResponse>
 */
final class ImageSearchConfigResponseBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $status;

    /**
     * @var ?DateTimeImmutable
     */
    private $lastModifiedAt;

    /**
     * <p>The image search activation status.</p>
     *
     * @return null|string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        return $this->lastModifiedAt;
    }

    /**
     * @param ?string $status
     * @return $this
     */
    public function withStatus(?string $status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param ?DateTimeImmutable $lastModifiedAt
     * @return $this
     */
    public function withLastModifiedAt(?DateTimeImmutable $lastModifiedAt)
    {
        $this->lastModifiedAt = $lastModifiedAt;

        return $this;
    }


    public function build(): ImageSearchConfigResponse
    {
        return new ImageSearchConfigResponseModel(
            $this->status,
            $this->lastModifiedAt
        );
    }

    public static function of(): ImageSearchConfigResponseBuilder
    {
        return new self();
    }
}

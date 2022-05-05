<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssetSourceModel extends JsonObjectModel implements AssetSource
{
    /**
     * @var ?string
     */
    protected $uri;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?AssetDimensions
     */
    protected $dimensions;

    /**
     * @var ?string
     */
    protected $contentType;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?string $uri = null,
        ?string $key = null,
        ?AssetDimensions $dimensions = null,
        ?string $contentType = null
    ) {
        $this->uri = $uri;
        $this->key = $key;
        $this->dimensions = $dimensions;
        $this->contentType = $contentType;
    }

    /**
     * <p>URI of the AssetSource.</p>
     *
     * @return null|string
     */
    public function getUri()
    {
        if (is_null($this->uri)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_URI);
            if (is_null($data)) {
                return null;
            }
            $this->uri = (string) $data;
        }

        return $this->uri;
    }

    /**
     * <p>User-defined unique identifier of the AssetSource.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * <p>Width and height of the AssetSource.</p>
     *
     * @return null|AssetDimensions
     */
    public function getDimensions()
    {
        if (is_null($this->dimensions)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DIMENSIONS);
            if (is_null($data)) {
                return null;
            }

            $this->dimensions = AssetDimensionsModel::of($data);
        }

        return $this->dimensions;
    }

    /**
     * <p>Indicates the type of content, for example <code>application/pdf</code>.</p>
     *
     * @return null|string
     */
    public function getContentType()
    {
        if (is_null($this->contentType)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(self::FIELD_CONTENT_TYPE);
            if (is_null($data)) {
                return null;
            }
            $this->contentType = (string) $data;
        }

        return $this->contentType;
    }


    /**
     * @param ?string $uri
     */
    public function setUri(?string $uri): void
    {
        $this->uri = $uri;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    /**
     * @param ?AssetDimensions $dimensions
     */
    public function setDimensions(?AssetDimensions $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    /**
     * @param ?string $contentType
     */
    public function setContentType(?string $contentType): void
    {
        $this->contentType = $contentType;
    }
}

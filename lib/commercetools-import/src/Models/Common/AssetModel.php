<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssetModel extends JsonObjectModel implements Asset
{
    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?AssetSourceCollection
     */
    protected $sources;

    /**
     * @var ?LocalizedString
     */
    protected $name;

    /**
     * @var ?LocalizedString
     */
    protected $description;

    /**
     * @var ?array
     */
    protected $tags;


    public function __construct(
        string $key = null,
        AssetSourceCollection $sources = null,
        LocalizedString $name = null,
        LocalizedString $description = null,
        array $tags = null
    ) {
        $this->key = $key;
        $this->sources = $sources;
        $this->name = $name;
        $this->description = $description;
        $this->tags = $tags;
    }

    /**
     * <p>User-defined identifier for the asset.
     * Asset keys are unique inside their container (a product variant or a category).</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Asset::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        if (is_null($this->sources)) {
            /** @psalm-var ?array<int, stdClass> $data */
            $data = $this->raw(Asset::FIELD_SOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->sources = AssetSourceCollection::fromArray($data);
        }

        return $this->sources;
    }

    /**
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Asset::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Asset::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * @return null|array
     */
    public function getTags()
    {
        if (is_null($this->tags)) {
            /** @psalm-var ?array<int, mixed> $data */
            $data = $this->raw(Asset::FIELD_TAGS);
            if (is_null($data)) {
                return null;
            }
            $this->tags = $data;
        }

        return $this->tags;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setSources(?AssetSourceCollection $sources): void
    {
        $this->sources = $sources;
    }

    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }
}

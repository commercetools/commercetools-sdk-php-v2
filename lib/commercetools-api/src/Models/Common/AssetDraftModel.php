<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Common;

use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class AssetDraftModel extends JsonObjectModel implements AssetDraft
{
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

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?string
     */
    protected $key;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?AssetSourceCollection $sources = null,
        ?LocalizedString $name = null,
        ?LocalizedString $description = null,
        ?array $tags = null,
        ?CustomFieldsDraft $custom = null,
        ?string $key = null
    ) {
        $this->sources = $sources;
        $this->name = $name;
        $this->description = $description;
        $this->tags = $tags;
        $this->custom = $custom;
        $this->key = $key;
    }

    /**
     * @return null|AssetSourceCollection
     */
    public function getSources()
    {
        if (is_null($this->sources)) {
            /** @psalm-var ?list<stdClass> $data */
            $data = $this->raw(self::FIELD_SOURCES);
            if (is_null($data)) {
                return null;
            }
            $this->sources = AssetSourceCollection::fromArray($data);
        }

        return $this->sources;
    }

    /**
     * <p>Name of the Asset.</p>
     *
     * @return null|LocalizedString
     */
    public function getName()
    {
        if (is_null($this->name)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_NAME);
            if (is_null($data)) {
                return null;
            }

            $this->name = LocalizedStringModel::of($data);
        }

        return $this->name;
    }

    /**
     * <p>Description of the Asset.</p>
     *
     * @return null|LocalizedString
     */
    public function getDescription()
    {
        if (is_null($this->description)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_DESCRIPTION);
            if (is_null($data)) {
                return null;
            }

            $this->description = LocalizedStringModel::of($data);
        }

        return $this->description;
    }

    /**
     * <p>Keywords for categorizing and organizing Assets.</p>
     *
     * @return null|array
     */
    public function getTags()
    {
        if (is_null($this->tags)) {
            /** @psalm-var ?list<mixed> $data */
            $data = $this->raw(self::FIELD_TAGS);
            if (is_null($data)) {
                return null;
            }
            $this->tags = $data;
        }

        return $this->tags;
    }

    /**
     * <p>Custom Fields defined for the Asset.</p>
     *
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * <p>User-defined unique identifier for the Asset.</p>
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
     * @param ?AssetSourceCollection $sources
     */
    public function setSources(?AssetSourceCollection $sources): void
    {
        $this->sources = $sources;
    }

    /**
     * @param ?LocalizedString $name
     */
    public function setName(?LocalizedString $name): void
    {
        $this->name = $name;
    }

    /**
     * @param ?LocalizedString $description
     */
    public function setDescription(?LocalizedString $description): void
    {
        $this->description = $description;
    }

    /**
     * @param ?array $tags
     */
    public function setTags(?array $tags): void
    {
        $this->tags = $tags;
    }

    /**
     * @param ?CustomFieldsDraft $custom
     */
    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    /**
     * @param ?string $key
     */
    public function setKey(?string $key): void
    {
        $this->key = $key;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Message;

use Commercetools\Api\Models\Common\LocalizedString;
use Commercetools\Api\Models\Common\LocalizedStringModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class CategorySlugChangedMessagePayloadModel extends JsonObjectModel implements CategorySlugChangedMessagePayload
{
    public const DISCRIMINATOR_VALUE = 'CategorySlugChanged';
    /**
     *
     * @var ?string
     */
    protected $type;

    /**
     *
     * @var ?LocalizedString
     */
    protected $slug;

    /**
     *
     * @var ?LocalizedString
     */
    protected $oldSlug;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?LocalizedString $slug = null,
        ?LocalizedString $oldSlug = null,
        ?string $type = null
    ) {
        $this->slug = $slug;
        $this->oldSlug = $oldSlug;
        $this->type = $type ?? self::DISCRIMINATOR_VALUE;
    }

    /**
     *
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
            $this->type = (string) $data;
        }

        return $this->type;
    }

    /**
     * <p>The slug of the <a href="ctp:api:type:Category">Category</a> after the <a href="ctp:api:type:CategoryChangeSlugAction">Change Slug</a> update action.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getSlug()
    {
        if (is_null($this->slug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->slug = LocalizedStringModel::of($data);
        }

        return $this->slug;
    }

    /**
     * <p>The slug of the <a href="ctp:api:type:Category">Category</a> before the <a href="ctp:api:type:CategoryChangeSlugAction">Change Slug</a> update action.</p>
     *
     *
     * @return null|LocalizedString
     */
    public function getOldSlug()
    {
        if (is_null($this->oldSlug)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_OLD_SLUG);
            if (is_null($data)) {
                return null;
            }

            $this->oldSlug = LocalizedStringModel::of($data);
        }

        return $this->oldSlug;
    }


    /**
     * @param ?LocalizedString $slug
     */
    public function setSlug(?LocalizedString $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @param ?LocalizedString $oldSlug
     */
    public function setOldSlug(?LocalizedString $oldSlug): void
    {
        $this->oldSlug = $oldSlug;
    }
}

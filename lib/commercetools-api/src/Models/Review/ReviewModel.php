<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Common\BaseResource;
use Commercetools\Api\Models\Common\BaseResourceModel;
use Commercetools\Api\Models\Common\CreatedBy;
use Commercetools\Api\Models\Common\CreatedByModel;
use Commercetools\Api\Models\Common\LastModifiedBy;

use Commercetools\Api\Models\Common\LastModifiedByModel;
use Commercetools\Api\Models\Customer\CustomerReference;
use Commercetools\Api\Models\Customer\CustomerReferenceModel;
use Commercetools\Api\Models\State\StateReference;
use Commercetools\Api\Models\State\StateReferenceModel;
use Commercetools\Api\Models\Type\CustomFields;
use Commercetools\Api\Models\Type\CustomFieldsModel;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use DateTimeImmutable;
use DateTimeImmutableModel;
use stdClass;

final class ReviewModel extends JsonObjectModel implements Review
{
    /**
     * @var ?string
     */
    protected $id;

    /**
     * @var ?int
     */
    protected $version;

    /**
     * @var ?DateTimeImmutable
     */
    protected $createdAt;

    /**
     * @var ?DateTimeImmutable
     */
    protected $lastModifiedAt;

    /**
     * @var ?LastModifiedBy
     */
    protected $lastModifiedBy;

    /**
     * @var ?CreatedBy
     */
    protected $createdBy;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?string
     */
    protected $uniquenessValue;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $authorName;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $text;

    /**
     * @var ?JsonObject
     */
    protected $target;

    /**
     * @var ?bool
     */
    protected $includedInStatistics;

    /**
     * @var ?int
     */
    protected $rating;

    /**
     * @var ?StateReference
     */
    protected $state;

    /**
     * @var ?CustomerReference
     */
    protected $customer;

    /**
     * @var ?CustomFields
     */
    protected $custom;


    public function __construct(
        string $id = null,
        int $version = null,
        DateTimeImmutable $createdAt = null,
        DateTimeImmutable $lastModifiedAt = null,
        LastModifiedBy $lastModifiedBy = null,
        CreatedBy $createdBy = null,
        string $key = null,
        string $uniquenessValue = null,
        string $locale = null,
        string $authorName = null,
        string $title = null,
        string $text = null,
        JsonObject $target = null,
        bool $includedInStatistics = null,
        int $rating = null,
        StateReference $state = null,
        CustomerReference $customer = null,
        CustomFields $custom = null
    ) {
        $this->id = $id;
        $this->version = $version;
        $this->createdAt = $createdAt;
        $this->lastModifiedAt = $lastModifiedAt;
        $this->lastModifiedBy = $lastModifiedBy;
        $this->createdBy = $createdBy;
        $this->key = $key;
        $this->uniquenessValue = $uniquenessValue;
        $this->locale = $locale;
        $this->authorName = $authorName;
        $this->title = $title;
        $this->text = $text;
        $this->target = $target;
        $this->includedInStatistics = $includedInStatistics;
        $this->rating = $rating;
        $this->state = $state;
        $this->customer = $customer;
        $this->custom = $custom;
    }

    /**
     * <p>The unique ID of the review.</p>
     *
     * @return null|string
     */
    public function getId()
    {
        if (is_null($this->id)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_ID);
            if (is_null($data)) {
                return null;
            }
            $this->id = (string) $data;
        }

        return $this->id;
    }

    /**
     * <p>The current version of the review.</p>
     *
     * @return null|int
     */
    public function getVersion()
    {
        if (is_null($this->version)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Review::FIELD_VERSION);
            if (is_null($data)) {
                return null;
            }
            $this->version = (int) $data;
        }

        return $this->version;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getCreatedAt()
    {
        if (is_null($this->createdAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_CREATED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->createdAt = $data;
        }

        return $this->createdAt;
    }

    /**
     * @return null|DateTimeImmutable
     */
    public function getLastModifiedAt()
    {
        if (is_null($this->lastModifiedAt)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_LAST_MODIFIED_AT);
            if (is_null($data)) {
                return null;
            }
            $data = DateTimeImmutable::createFromFormat(MapperFactory::DATETIME_FORMAT, $data);
            if (false === $data) {
                return null;
            }
            $this->lastModifiedAt = $data;
        }

        return $this->lastModifiedAt;
    }

    /**
     * <p>Present on resources updated after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|LastModifiedBy
     */
    public function getLastModifiedBy()
    {
        if (is_null($this->lastModifiedBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Review::FIELD_LAST_MODIFIED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->lastModifiedBy = LastModifiedByModel::of($data);
        }

        return $this->lastModifiedBy;
    }

    /**
     * <p>Present on resources created after 1/02/2019 except for events not tracked.</p>
     *
     * @return null|CreatedBy
     */
    public function getCreatedBy()
    {
        if (is_null($this->createdBy)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Review::FIELD_CREATED_BY);
            if (is_null($data)) {
                return null;
            }

            $this->createdBy = CreatedByModel::of($data);
        }

        return $this->createdBy;
    }

    /**
     * <p>User-specific unique identifier for the review.</p>
     *
     * @return null|string
     */
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|string
     */
    public function getUniquenessValue()
    {
        if (is_null($this->uniquenessValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_UNIQUENESS_VALUE);
            if (is_null($data)) {
                return null;
            }
            $this->uniquenessValue = (string) $data;
        }

        return $this->uniquenessValue;
    }

    /**
     * @return null|string
     */
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_LOCALE);
            if (is_null($data)) {
                return null;
            }
            $this->locale = (string) $data;
        }

        return $this->locale;
    }

    /**
     * @return null|string
     */
    public function getAuthorName()
    {
        if (is_null($this->authorName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_AUTHOR_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->authorName = (string) $data;
        }

        return $this->authorName;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_TITLE);
            if (is_null($data)) {
                return null;
            }
            $this->title = (string) $data;
        }

        return $this->title;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(Review::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }

    /**
     * <p>Identifies the target of the review.
     * Can be a Product or a Channel</p>
     *
     * @return null|JsonObject
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(Review::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $this->target = JsonObjectModel::of($data);
        }

        return $this->target;
    }

    /**
     * <p>Indicates if this review is taken into account in the ratings statistics of the target.
     * A review is per default used in the statistics, unless the review is in a state that does not have the role <code>ReviewIncludedInStatistics</code>.
     * If the role of a State is modified after the calculation of this field, the calculation is not updated.</p>
     *
     * @return null|bool
     */
    public function getIncludedInStatistics()
    {
        if (is_null($this->includedInStatistics)) {
            /** @psalm-var ?bool $data */
            $data = $this->raw(Review::FIELD_INCLUDED_IN_STATISTICS);
            if (is_null($data)) {
                return null;
            }
            $this->includedInStatistics = (bool) $data;
        }

        return $this->includedInStatistics;
    }

    /**
     * <p>Number between -100 and 100 included.</p>
     *
     * @return null|int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(Review::FIELD_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->rating = (int) $data;
        }

        return $this->rating;
    }

    /**
     * @return null|StateReference
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Review::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateReferenceModel::of($data);
        }

        return $this->state;
    }

    /**
     * <p>The customer who created the review.</p>
     *
     * @return null|CustomerReference
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Review::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerReferenceModel::of($data);
        }

        return $this->customer;
    }

    /**
     * @return null|CustomFields
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(Review::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsModel::of($data);
        }

        return $this->custom;
    }

    public function setId(?string $id): void
    {
        $this->id = $id;
    }

    public function setVersion(?int $version): void
    {
        $this->version = $version;
    }

    public function setCreatedAt(?DateTimeImmutable $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function setLastModifiedAt(?DateTimeImmutable $lastModifiedAt): void
    {
        $this->lastModifiedAt = $lastModifiedAt;
    }

    public function setLastModifiedBy(?LastModifiedBy $lastModifiedBy): void
    {
        $this->lastModifiedBy = $lastModifiedBy;
    }

    public function setCreatedBy(?CreatedBy $createdBy): void
    {
        $this->createdBy = $createdBy;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setUniquenessValue(?string $uniquenessValue): void
    {
        $this->uniquenessValue = $uniquenessValue;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
    }

    public function setIncludedInStatistics(?bool $includedInStatistics): void
    {
        $this->includedInStatistics = $includedInStatistics;
    }

    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }

    public function setState(?StateReference $state): void
    {
        $this->state = $state;
    }

    public function setCustomer(?CustomerReference $customer): void
    {
        $this->customer = $customer;
    }

    public function setCustom(?CustomFields $custom): void
    {
        $this->custom = $custom;
    }


    public function jsonSerialize()
    {
        $data = $this->toArray();
        if (isset($data[Review::FIELD_CREATED_AT]) && $data[Review::FIELD_CREATED_AT] instanceof \DateTimeImmutable) {
            $data[Review::FIELD_CREATED_AT] = $data[Review::FIELD_CREATED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }

        if (isset($data[Review::FIELD_LAST_MODIFIED_AT]) && $data[Review::FIELD_LAST_MODIFIED_AT] instanceof \DateTimeImmutable) {
            $data[Review::FIELD_LAST_MODIFIED_AT] = $data[Review::FIELD_LAST_MODIFIED_AT]->setTimeZone(new \DateTimeZone('UTC'))->format('c');
        }
        return (object) $data;
    }
}

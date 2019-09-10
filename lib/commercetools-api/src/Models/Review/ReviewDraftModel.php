<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Review;

use Commercetools\Api\Models\Customer\CustomerResourceIdentifier;
use Commercetools\Api\Models\Customer\CustomerResourceIdentifierModel;
use Commercetools\Api\Models\State\StateResourceIdentifier;
use Commercetools\Api\Models\State\StateResourceIdentifierModel;
use Commercetools\Api\Models\Type\CustomFieldsDraft;
use Commercetools\Api\Models\Type\CustomFieldsDraftModel;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ReviewDraftModel extends JsonObjectModel implements ReviewDraft
{
    /**
     * @var ?string
     */
    protected $uniquenessValue;

    /**
     * @var ?string
     */
    protected $authorName;

    /**
     * @var ?CustomFieldsDraft
     */
    protected $custom;

    /**
     * @var ?int
     */
    protected $rating;

    /**
     * @var ?StateResourceIdentifier
     */
    protected $state;

    /**
     * @var ?string
     */
    protected $text;

    /**
     * @var ?string
     */
    protected $title;

    /**
     * @var ?string
     */
    protected $locale;

    /**
     * @var ?string
     */
    protected $key;

    /**
     * @var ?CustomerResourceIdentifier
     */
    protected $customer;

    /**
     * @var ?JsonObject
     */
    protected $target;

    public function __construct(
        string $uniquenessValue = null,
        string $authorName = null,
        CustomFieldsDraft $custom = null,
        int $rating = null,
        StateResourceIdentifier $state = null,
        string $text = null,
        string $title = null,
        string $locale = null,
        string $key = null,
        CustomerResourceIdentifier $customer = null,
        JsonObject $target = null
    ) {
        $this->uniquenessValue = $uniquenessValue;
        $this->authorName = $authorName;
        $this->custom = $custom;
        $this->rating = $rating;
        $this->state = $state;
        $this->text = $text;
        $this->title = $title;
        $this->locale = $locale;
        $this->key = $key;
        $this->customer = $customer;
        $this->target = $target;
    }

    /**
     * @return null|string
     */
    public function getUniquenessValue()
    {
        if (is_null($this->uniquenessValue)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewDraft::FIELD_UNIQUENESS_VALUE);
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
    public function getAuthorName()
    {
        if (is_null($this->authorName)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewDraft::FIELD_AUTHOR_NAME);
            if (is_null($data)) {
                return null;
            }
            $this->authorName = (string) $data;
        }

        return $this->authorName;
    }

    /**
     * @return null|CustomFieldsDraft
     */
    public function getCustom()
    {
        if (is_null($this->custom)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewDraft::FIELD_CUSTOM);
            if (is_null($data)) {
                return null;
            }

            $this->custom = CustomFieldsDraftModel::of($data);
        }

        return $this->custom;
    }

    /**
     * @return null|int
     */
    public function getRating()
    {
        if (is_null($this->rating)) {
            /** @psalm-var ?int $data */
            $data = $this->raw(ReviewDraft::FIELD_RATING);
            if (is_null($data)) {
                return null;
            }
            $this->rating = (int) $data;
        }

        return $this->rating;
    }

    /**
     * @return null|StateResourceIdentifier
     */
    public function getState()
    {
        if (is_null($this->state)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewDraft::FIELD_STATE);
            if (is_null($data)) {
                return null;
            }

            $this->state = StateResourceIdentifierModel::of($data);
        }

        return $this->state;
    }

    /**
     * @return null|string
     */
    public function getText()
    {
        if (is_null($this->text)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewDraft::FIELD_TEXT);
            if (is_null($data)) {
                return null;
            }
            $this->text = (string) $data;
        }

        return $this->text;
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewDraft::FIELD_TITLE);
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
    public function getLocale()
    {
        if (is_null($this->locale)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewDraft::FIELD_LOCALE);
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
    public function getKey()
    {
        if (is_null($this->key)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ReviewDraft::FIELD_KEY);
            if (is_null($data)) {
                return null;
            }
            $this->key = (string) $data;
        }

        return $this->key;
    }

    /**
     * @return null|CustomerResourceIdentifier
     */
    public function getCustomer()
    {
        if (is_null($this->customer)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ReviewDraft::FIELD_CUSTOMER);
            if (is_null($data)) {
                return null;
            }

            $this->customer = CustomerResourceIdentifierModel::of($data);
        }

        return $this->customer;
    }

    /**
     * @return null|JsonObject
     */
    public function getTarget()
    {
        if (is_null($this->target)) {
            /** @psalm-var ?stdClass $data */
            $data = $this->raw(ReviewDraft::FIELD_TARGET);
            if (is_null($data)) {
                return null;
            }
            $this->target = JsonObjectModel::of($data);
        }

        return $this->target;
    }

    public function setUniquenessValue(?string $uniquenessValue): void
    {
        $this->uniquenessValue = $uniquenessValue;
    }

    public function setAuthorName(?string $authorName): void
    {
        $this->authorName = $authorName;
    }

    public function setCustom(?CustomFieldsDraft $custom): void
    {
        $this->custom = $custom;
    }

    public function setRating(?int $rating): void
    {
        $this->rating = $rating;
    }

    public function setState(?StateResourceIdentifier $state): void
    {
        $this->state = $state;
    }

    public function setText(?string $text): void
    {
        $this->text = $text;
    }

    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    public function setLocale(?string $locale): void
    {
        $this->locale = $locale;
    }

    public function setKey(?string $key): void
    {
        $this->key = $key;
    }

    public function setCustomer(?CustomerResourceIdentifier $customer): void
    {
        $this->customer = $customer;
    }

    public function setTarget(?JsonObject $target): void
    {
        $this->target = $target;
    }
}
